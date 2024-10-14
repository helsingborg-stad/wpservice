<?php

namespace WpService\Contracts;

interface SanitizeTerm
{
/**
 * Sanitizes all term fields.
 *
 * Relies on sanitize_term_field() to sanitize the term. The difference is that
 * this function will sanitize **all** fields. The context is based
 * on sanitize_term_field().
 *
 * The `$term` is expected to be either an array or an object.
 *
 * @since 2.3.0
 *
 * @param array|object $term     The term to check.
 * @param string $taxonomy The taxonomy name to use.
 * @param string $context  Optional. Context in which to sanitize the term.
 *                               Accepts 'raw', 'edit', 'db', 'display', 'rss',
 *                               'attribute', or 'js'. Default 'display'.
 * @return array|object Term with all fields sanitized.
 */
    public function sanitizeTerm(array|object $term, string $taxonomy, string $context = 'display'): array|object;
}
