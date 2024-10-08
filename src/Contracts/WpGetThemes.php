<?php

namespace WpService\Contracts;

interface WpGetThemes
{
    /**
     * Returns an array of WP_Theme objects based on the arguments.
     *
     * Despite advances over get_themes(), this function is quite expensive, and grows
     * linearly with additional themes. Stick to wp_get_theme() if possible.
     *
     * @since 3.4.0
     *
     * @global array $wp_theme_directories
     *
     * @param array $args {
     *     Optional. The search arguments.
     *
     * @type mixed $errors  True to return themes with errors, false to return
     *                          themes without errors, null to return all themes.
     *                          Default false.
     * @type mixed $allowed (Multisite) True to return only allowed themes for a site.
     *                          False to return only disallowed themes for a site.
     *                          'site' to return only site-allowed themes.
     *                          'network' to return only network-allowed themes.
     *                          Null to return all themes. Default null.
     * @type int   $blog_id (Multisite) The blog ID used to calculate which themes
     *                          are allowed. Default 0, synonymous for the current blog.
     * }
     * @return WP_Theme[] Array of WP_Theme objects.
     */
    public function wpGetThemes(array $args = []): array;
}
