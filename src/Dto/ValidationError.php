<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes\Dto;

final class ValidationError
{
    public function __construct(
        public readonly ValidationErrorSource $source,
        public readonly string $detail,
        public readonly string $title = 'Validation error',
    ) {
    }
}
