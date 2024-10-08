<?php

namespace WpService\Contracts;

interface WpKsesNamedEntities
{
    /**
     * Callback for `wp_kses_normalize_entities()` regular expression.
     *
     * This function only accepts valid named entity references, which are finite,
     * case-sensitive, and highly scrutinized by HTML and XML validators.
     *
     * @since 3.0.0
     *
     * @global array $allowedentitynames
     *
     * @param array $matches preg_replace_callback() matches array.
     * @return string Correctly encoded entity.
     */
    public function wpKsesNamedEntities(array $matches): string;
}
