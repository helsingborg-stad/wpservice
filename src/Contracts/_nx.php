<?php

namespace WpService\Contracts;

interface _nx
{
/**
 * Translates and retrieves the singular or plural form based on the supplied number, with gettext context.
 *
 * This is a hybrid of _n() and _x(). It supports context and plurals.
 *
 * Used when you want to use the appropriate form of a string with context based on whether a
 * number is singular or plural.
 *
 * Example of a generic phrase which is disambiguated via the context parameter:
 *
 *     printf( _nx( '%s group', '%s groups', $people, 'group of people', 'text-domain' ), number_format_i18n( $people ) );
 *     printf( _nx( '%s group', '%s groups', $animals, 'group of animals', 'text-domain' ), number_format_i18n( $animals ) );
 *
 * @since 2.8.0
 * @since 5.5.0 Introduced `ngettext_with_context-{$domain}` filter.
 *
 * @param string $single  The text to be used if the number is singular.
 * @param string $plural  The text to be used if the number is plural.
 * @param int $number  The number to compare against to use either the singular or plural form.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 *                        Default 'default'.
 * @return string The translated singular or plural form.
 */
    public function _nx(string $single, string $plural, int $number, string $context, string $domain = 'default'): string;
}
