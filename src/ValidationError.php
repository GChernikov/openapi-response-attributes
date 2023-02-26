<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes;

use Attribute;
use Symfony\Component\HttpFoundation\Response;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class ValidationError extends AbstractErrorResponse
{
    public function __construct()
    {
        parent::__construct(
            response: Response::HTTP_BAD_REQUEST,
            type: Dto\ValidationError::class,
            description: 'Request parameters are invalid',
        );
    }
}
