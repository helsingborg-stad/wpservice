<?php

namespace WpService\Contracts;

interface UnregisterWidget
{
    /**
     * Unregisters a widget.
     *
     * Unregisters a WP_Widget widget. Useful for un-registering default widgets.
     * Run within a function hooked to the {@see 'widgets_init'} action.
     *
     * @since 2.8.0
     * @since 4.6.0 Updated the `$widget` parameter to also accept a WP_Widget instance object
     *              instead of simply a `WP_Widget` subclass name.
     *
     * @see WP_Widget
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param string|\WP_Widget $widget Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass.
     */
    public function unregisterWidget(string|\WP_Widget $widget): void;
}
