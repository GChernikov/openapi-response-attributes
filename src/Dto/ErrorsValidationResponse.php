<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes\Dto;

final class ErrorsValidationResponse
{
    /**
     * @param array<ValidationError> $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
