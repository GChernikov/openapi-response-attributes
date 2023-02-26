<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes\Items;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\Property;

abstract class AbstractErrorResponse extends AbstractResponse
{
    public function __construct(
        int $response,
        string $type,
        string $description,
    ) {
        parent::__construct(
            response: $response,
            content: new JsonContent(
                properties: [
                    new Property(
                        property: 'errors',
                        type: 'array',
                        items: new Items(ref: new Model(type: $type)),
                    ),
                ],
                type: 'object',
            ),
            description: $description,
        );
    }
}
