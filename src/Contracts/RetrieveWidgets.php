<?php

namespace WpService\Contracts;

interface RetrieveWidgets
{
    /**
     * Validates and remaps any "orphaned" widgets to wp_inactive_widgets sidebar,
     * and saves the widget settings. This has to run at least on each theme change.
     *
     * For example, let's say theme A has a "footer" sidebar, and theme B doesn't have one.
     * After switching from theme A to theme B, all the widgets previously assigned
     * to the footer would be inaccessible. This function detects this scenario, and
     * moves all the widgets previously assigned to the footer under wp_inactive_widgets.
     *
     * Despite the word "retrieve" in the name, this function actually updates the database
     * and the global `$sidebars_widgets`. For that reason it should not be run on front end,
     * unless the `$theme_changed` value is 'customize' (to bypass the database write).
     *
     * @since 2.8.0
     *
     * @global array $wp_registered_sidebars The registered sidebars.
     * @global array $sidebars_widgets
     * @global array $wp_registered_widgets  The registered widgets.
     *
     * @param string|bool $themeChanged Whether the theme was changed as a boolean. A value
     *                                   of 'customize' defers updates for the Customizer.
     * @return array Updated sidebars widgets.
     */
    public function retrieveWidgets(string|bool $themeChanged = false): array;
}
