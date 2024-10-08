<?php

namespace WpService\Contracts;

interface WpRegisterSidebarWidget
{
    /**
     * Register an instance of a widget.
     *
     * The default widget option is 'classname' that can be overridden.
     *
     * The function can also be used to un-register widgets when `$output_callback`
     * parameter is an empty string.
     *
     * @since 2.2.0
     * @since 5.3.0 Formalized the existing and already documented `...$params` parameter
     *              by adding it to the function signature.
     * @since 5.8.0 Added show_instance_in_rest option.
     *
     * @global array $wp_registered_widgets            Uses stored registered widgets.
     * @global array $wp_registered_widget_controls    Stores the registered widget controls (options).
     * @global array $wp_registered_widget_updates     The registered widget updates.
     * @global array $_wp_deprecated_widgets_callbacks
     *
     * @param int|string $id              Widget ID.
     * @param string $name            Widget display title.
     * @param callable $outputCallback Run when widget is called.
     * @param array $options {
     *     Optional. An array of supplementary widget options for the instance.
     *
     * @type string $classname             Class name for the widget's HTML container. Default is a shortened
     *                                         version of the output callback name.
     * @type string $description           Widget description for display in the widget administration
     *                                         panel and/or theme.
     * @type bool   $show_instance_in_rest Whether to show the widget's instance settings in the REST API.
     *                                         Only available for WP_Widget based widgets.
     * }
     * @param mixed      ...$params       Optional additional parameters to pass to the callback function when it's called.
     */
    public function wpRegisterSidebarWidget(int|string $id, string $name, callable $outputCallback, array $options = []): void;
}
