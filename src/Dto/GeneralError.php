<?php

declare(strict_types=1);

namespace GChernikov\OpenapiResponseAttributes\Dto;

final class GeneralError
{
    public function __construct(
        public readonly string $status,
        public readonly string $detail,
    ) {
    }
}
