<?php

namespace WpService\Contracts;

interface WpWidgetDescription
{
    /**
     * Retrieve description for widget.
     *
     * When registering widgets, the options can also include 'description' that
     * describes the widget for display on the widget administration panel or
     * in the theme.
     *
     * @since 2.5.0
     *
     * @global array $wp_registered_widgets The registered widgets.
     *
     * @param int|string $id Widget ID.
     * @return string|void Widget description, if available.
     */
    public function wpWidgetDescription(int|string $id): mixed;
}
