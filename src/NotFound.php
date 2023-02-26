<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes;

use Attribute;
use Symfony\Component\HttpFoundation\Response;

#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
class NotFound extends AbstractErrorResponse
{
    public function __construct()
    {
        parent::__construct(
            response: Response::HTTP_NOT_FOUND,
            type: Dto\GeneralError::class,
            description: 'The specified resource was not found',
        );
    }
}
