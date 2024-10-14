<?php

namespace WpService\Contracts;

interface SanitizeCategoryField
{
/**
 * Sanitizes data in single category key field.
 *
 * @since 2.3.0
 *
 * @param string $field   Category key to sanitize.
 * @param mixed $value   Category value to sanitize.
 * @param int $catId  Category ID.
 * @param string $context What filter to use, 'raw', 'display', etc.
 * @return mixed Value after $value has been sanitized.
 */
    public function sanitizeCategoryField(string $field, mixed $value, int $catId, string $context): mixed;
}
