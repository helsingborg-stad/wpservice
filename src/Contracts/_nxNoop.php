<?php

namespace WpService\Contracts;

interface _nxNoop
{
    /**
     * Registers plural strings with gettext context in POT file, but does not translate them.
     *
     * Used when you want to keep structures with translatable plural
     * strings and use them later when the number is known.
     *
     * Example of a generic phrase which is disambiguated via the context parameter:
     *
     *     $messages = array(
     *          'people'  => _nx_noop( '%s group', '%s groups', 'people', 'text-domain' ),
     *          'animals' => _nx_noop( '%s group', '%s groups', 'animals', 'text-domain' ),
     *     );
     *     ...
     *     $message = $messages[ $type ];
     *     printf( translate_nooped_plural( $message, $count, 'text-domain' ), number_format_i18n( $count ) );
     *
     * @since 2.8.0
     *
     * @param string $singular Singular form to be localized.
     * @param string $plural   Plural form to be localized.
     * @param string $context  Context information for the translators.
     * @param string $domain   Optional. Text domain. Unique identifier for retrieving translated strings.
     *                         Default null.
     * @return array {
     *     Array of translation information for the strings.
     *
     * @type string      $0        Singular form to be localized. No longer used.
     * @type string      $1        Plural form to be localized. No longer used.
     * @type string      $2        Context information for the translators. No longer used.
     * @type string      $singular Singular form to be localized.
     * @type string      $plural   Plural form to be localized.
     * @type string      $context  Context information for the translators.
     * @type string|null $domain   Text domain.
     * }
     */
    public function _nxNoop(string $singular, string $plural, string $context, string $domain = null): array;
}
