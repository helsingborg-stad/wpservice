<?php

namespace WpService\Contracts;

interface _nNoop
{
    /**
 * Registers plural strings in POT file, but does not translate them.
 *
 * Used when you want to keep structures with translatable plural
 * strings and use them later when the number is known.
 *
 * Example:
 *
 *     $message = _n_noop( '%s post', '%s posts', 'text-domain' );
 *     ...
 *     printf( translate_nooped_plural( $message, $count, 'text-domain' ), number_format_i18n( $count ) );
 *
 * @since 2.5.0
 *
 * @param string $singular Singular form to be localized.
 * @param string $plural   Plural form to be localized.
 * @param string $domain   Optional. Text domain. Unique identifier for retrieving translated strings.
 *                         Default null.
 * @return array {
 *     Array of translation information for the strings.
 *
 *     @type string      $0        Singular form to be localized. No longer used.
 *     @type string      $1        Plural form to be localized. No longer used.
 *     @type string      $singular Singular form to be localized.
 *     @type string      $plural   Plural form to be localized.
 *     @type null        $context  Context information for the translators.
 *     @type string|null $domain   Text domain.
 * }
 */
    public function _nNoop(string $singular, string $plural, string $domain): array;
}
