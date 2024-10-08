<?php

namespace WpService\Contracts;

interface WpKsesXmlNamedEntities
{
    /**
     * Callback for `wp_kses_normalize_entities()` regular expression.
     *
     * This function only accepts valid named entity references, which are finite,
     * case-sensitive, and highly scrutinized by XML validators.  HTML named entity
     * references are converted to their code points.
     *
     * @since 5.5.0
     *
     * @global array $allowedentitynames
     * @global array $allowedxmlentitynames
     *
     * @param array $matches preg_replace_callback() matches array.
     * @return string Correctly encoded entity.
     */
    public function wpKsesXmlNamedEntities(array $matches): string;
}
