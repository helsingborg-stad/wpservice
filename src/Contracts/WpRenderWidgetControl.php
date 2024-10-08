<?php

namespace WpService\Contracts;

interface WpRenderWidgetControl
{
    /**
     * Calls the control callback of a widget and returns the output.
     *
     * @since 5.8.0
     *
     * @global array $wp_registered_widget_controls The registered widget controls.
     *
     * @param string $id Widget ID.
     * @return string|null
     */
    public function wpRenderWidgetControl(string $id): string|null;
}
