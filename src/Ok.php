<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes;

use Attribute;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes\JsonContent;
use Symfony\Component\HttpFoundation\Response;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class Ok extends AbstractResponse
{
    public function __construct(
        ?string $type = null,
        string $description = 'Success',
    ) {
        $content = $type !== null
            ? new JsonContent(ref: new Model(type: $type))
            : null;

        parent::__construct(
            response: Response::HTTP_OK,
            content: $content,
            description: $description,
        );
    }
}
