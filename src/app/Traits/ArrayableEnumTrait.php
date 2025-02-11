<?php

declare(strict_types=1);

namespace App\Traits;

use RuntimeException;

trait ArrayableEnumTrait
{
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function toArray(): array
    {
        return array_combine(self::names(), self::values());
    }

    public static function create(string $attribute): self
    {
        if (in_array($attribute, self::values(), true) === false) {
            throw new RuntimeException("Attribute '$attribute' does not exist");
        }

        return self::tryFrom($attribute);
    }

    public static function createFromValue(string $attribute): self
    {
        if (in_array($attribute, self::values(), true) === false) {
            throw new RuntimeException("Attribute '$attribute' does not exist");
        }

        return self::tryFrom($attribute);
    }

    public static function createFromName(string $attribute): self
    {
        if (in_array($attribute, self::names(), true) === false) {
            throw new RuntimeException("Attribute '$attribute' does not exist");
        }

        return self::tryFrom(
            self::toArray()[$attribute]
        );
    }
}
