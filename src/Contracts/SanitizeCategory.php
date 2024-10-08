<?php

namespace WpService\Contracts;

interface SanitizeCategory
{
    /**
     * Sanitizes category data based on context.
     *
     * @since 2.3.0
     *
     * @param object|array $category Category data.
     * @param string $context  Optional. Default 'display'.
     * @return object|array Same type as $category with sanitized data for safe use.
     */
    public function sanitizeCategory(object|array $category, string $context = 'display'): object|array;
}
