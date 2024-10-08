<?php

namespace WpService\Contracts;

interface IsCustomizePreview
{
    /**
     * Whether the site is being previewed in the Customizer.
     *
     * @since 4.0.0
     *
     * @global WP_Customize_Manager $wp_customize Customizer instance.
     *
     * @return bool True if the site is being previewed in the Customizer, false otherwise.
     */
    public function isCustomizePreview(): bool;
}
