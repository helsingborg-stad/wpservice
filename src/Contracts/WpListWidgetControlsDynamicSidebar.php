<?php

namespace WpService\Contracts;

interface WpListWidgetControlsDynamicSidebar
{
    /**
     * Retrieves the widget control arguments.
     *
     * @since 2.5.0
     *
     * @global array $wp_registered_widgets
     *
     * @param array $params
     * @return array
     */
    public function wpListWidgetControlsDynamicSidebar(array $params): array;
}
