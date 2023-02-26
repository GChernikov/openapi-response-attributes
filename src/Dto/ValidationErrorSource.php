<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes\Dto;

final class ValidationErrorSource
{
    public function __construct(
        public readonly string $parameter,
    ) {
    }
}
