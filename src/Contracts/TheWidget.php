<?php

namespace WpService\Contracts;

interface TheWidget
{
    /**
     * Output an arbitrary widget as a template tag.
     *
     * @since 2.8.0
     *
     * @global WP_Widget_Factory $wp_widget_factory
     *
     * @param string $widget   The widget's PHP class name (see class-wp-widget.php).
     * @param array $instance Optional. The widget's instance settings. Default empty array.
     * @param array $args {
     *     Optional. Array of arguments to configure the display of the widget.
     *
     * @type string $before_widget HTML content that will be prepended to the widget's HTML output.
     *                                 Default `<div class="widget %s">`, where `%s` is the widget's class name.
     * @type string $after_widget  HTML content that will be appended to the widget's HTML output.
     *                                 Default `</div>`.
     * @type string $before_title  HTML content that will be prepended to the widget's title when displayed.
     *                                 Default `<h2 class="widgettitle">`.
     * @type string $after_title   HTML content that will be appended to the widget's title when displayed.
     *                                 Default `</h2>`.
     * }
     */
    public function theWidget(string $widget, array $instance = [], array $args = []): void;
}
