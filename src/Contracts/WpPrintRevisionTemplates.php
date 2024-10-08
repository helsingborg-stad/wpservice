<?php

namespace WpService\Contracts;

interface WpPrintRevisionTemplates
{
    /**
 * Print JavaScript templates required for the revisions experience.
 *
 * @since 4.1.0
 *
 * @global WP_Post $post Global post object.
 */
    public function wpPrintRevisionTemplates(): void;
}
