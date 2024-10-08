<?php

namespace WpService\Contracts;

interface TranslateWithGettextContext
{
    /**
 * Retrieves the translation of $text in the context defined in $context.
 *
 * If there is no translation, or the text domain isn't loaded, the original text is returned.
 *
 * *Note:* Don't use translate_with_gettext_context() directly, use _x() or related functions.
 *
 * @since 2.8.0
 * @since 5.5.0 Introduced `gettext_with_context-{$domain}` filter.
 *
 * @param string $text    Text to translate.
 * @param string $context Context information for the translators.
 * @param string $domain  Optional. Text domain. Unique identifier for retrieving translated strings.
 *                        Default 'default'.
 * @return string Translated text on success, original text on failure.
 */
    public function translateWithGettextContext(string $text, string $context, string $domain): string;
}
