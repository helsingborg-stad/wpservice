<?php

namespace WpService\Contracts;

interface WpInteractivity
{
/**
 * Retrieves the main WP_Interactivity_API instance.
 *
 * It provides access to the WP_Interactivity_API instance, creating one if it
 * doesn't exist yet.
 *
 * @since 6.5.0
 *
 * @global WP_Interactivity_API $wp_interactivity
 *
 * @return \WP_Interactivity_API The main WP_Interactivity_API instance.
 */
    public function wpInteractivity(): \WP_Interactivity_API;
}
