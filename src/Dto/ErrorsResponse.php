<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes\Dto;

final class ErrorsResponse
{
    /**
     * @param array<GeneralError> $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
