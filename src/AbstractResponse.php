<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes\Items;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\MediaType;
use OpenApi\Attributes\Response as OpenApiResponse;

abstract class AbstractResponse extends OpenApiResponse
{
    public function __construct(
        int $response,
        MediaType|JsonContent|Model|Items|null $content = null,
        ?string $description = null,
        ?array $headers = null,
    ) {
        $content = match (true) {
            $content instanceof Model => new JsonContent(ref: $content),
            $content instanceof Items => new JsonContent(type: 'array', items: $content),
            default => $content,
        };

        parent::__construct(null, $response, $description, $headers, $content);
    }
}
