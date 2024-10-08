<?php

namespace WpService\Contracts;

interface SanitizeTermField
{
    /**
 * Sanitizes the field value in the term based on the context.
 *
 * Passing a term field value through the function should be assumed to have
 * cleansed the value for whatever context the term field is going to be used.
 *
 * If no context or an unsupported context is given, then default filters will
 * be applied.
 *
 * There are enough filters for each context to support a custom filtering
 * without creating your own filter function. Simply create a function that
 * hooks into the filter you need.
 *
 * @since 2.3.0
 *
 * @param string $field    Term field to sanitize.
 * @param string $value    Search for this term value.
 * @param int $termId  Term ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $context  Context in which to sanitize the term field.
 *                         Accepts 'raw', 'edit', 'db', 'display', 'rss',
 *                         'attribute', or 'js'. Default 'display'.
 * @return mixed Sanitized field.
 */
    public function sanitizeTermField(string $field, string $value, int $termId, string $taxonomy, string $context): mixed;
}
