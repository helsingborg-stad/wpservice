<?php

namespace WpService\Contracts;

interface WpEnqueueBlockTemplateSkipLink
{
    /**
 * Enqueues the skip-link script & styles.
 *
 * @access private
 * @since 6.4.0
 *
 * @global string $_wp_current_template_content
 */
    public function wpEnqueueBlockTemplateSkipLink(): void;
}
