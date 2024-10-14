<?php

namespace WpService\Contracts;

interface TranslateNoopedPlural
{
/**
 * Translates and returns the singular or plural form of a string that's been registered
 * with _n_noop() or _nx_noop().
 *
 * Used when you want to use a translatable plural string once the number is known.
 *
 * Example:
 *
 *     $message = _n_noop( '%s post', '%s posts', 'text-domain' );
 *     ...
 *     printf( translate_nooped_plural( $message, $count, 'text-domain' ), number_format_i18n( $count ) );
 *
 * @since 3.1.0
 *
 * @param array $noopedPlural {
 *     Array that is usually a return value from _n_noop() or _nx_noop().
 *
 * @type string      $singular Singular form to be localized.
 * @type string      $plural   Plural form to be localized.
 * @type string|null $context  Context information for the translators.
 * @type string|null $domain   Text domain.
 * }
 * @param int $count         Number of objects.
 * @param string $domain        Optional. Text domain. Unique identifier for retrieving translated strings. If $nooped_plural contains
 *                              a text domain passed to _n_noop() or _nx_noop(), it will override this value. Default 'default'.
 * @return string Either $singular or $plural translated text.
 */
    public function translateNoopedPlural(array $noopedPlural, int $count, string $domain = 'default'): string;
}
