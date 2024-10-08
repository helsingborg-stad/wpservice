<?php

namespace WpService\Contracts;

interface WpSetupWidgetsBlockEditor
{
    /**
 * Enables the widgets block editor. This is hooked into 'after_setup_theme' so
 * that the block editor is enabled by default but can be disabled by themes.
 *
 * @since 5.8.0
 *
 * @access private
 */
    public function wpSetupWidgetsBlockEditor(): void;
}
