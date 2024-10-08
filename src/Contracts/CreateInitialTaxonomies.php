<?php

namespace WpService\Contracts;

interface CreateInitialTaxonomies
{
    /**
 * Creates the initial taxonomies.
 *
 * This function fires twice: in wp-settings.php before plugins are loaded (for
 * backward compatibility reasons), and again on the {@see 'init'} action. We must
 * avoid registering rewrite rules before the {@see 'init'} action.
 *
 * @since 2.8.0
 * @since 5.9.0 Added `'wp_template_part_area'` taxonomy.
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 */
    public function createInitialTaxonomies(): void;
}
