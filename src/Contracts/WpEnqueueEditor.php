<?php

namespace WpService\Contracts;

interface WpEnqueueEditor
{
    /**
     * Outputs the editor scripts, stylesheets, and default settings.
     *
     * The editor can be initialized when needed after page load.
     * See wp.editor.initialize() in wp-admin/js/editor.js for initialization options.
     *
     * @uses _WP_Editors
     * @since 4.8.0
     */
    public function wpEnqueueEditor(): void;
}
