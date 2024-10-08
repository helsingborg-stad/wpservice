<?php

namespace WpService\Contracts;

interface RegisterSidebar
{
    /**
     * Builds the definition for a single sidebar and returns the ID.
     *
     * Accepts either a string or an array and then parses that against a set
     * of default arguments for the new sidebar. WordPress will automatically
     * generate a sidebar ID and name based on the current number of registered
     * sidebars if those arguments are not included.
     *
     * When allowing for automatic generation of the name and ID parameters, keep
     * in mind that the incrementor for your sidebar can change over time depending
     * on what other plugins and themes are installed.
     *
     * If theme support for 'widgets' has not yet been added when this function is
     * called, it will be automatically enabled through the use of add_theme_support()
     *
     * @since 2.2.0
     * @since 5.6.0 Added the `before_sidebar` and `after_sidebar` arguments.
     * @since 5.9.0 Added the `show_in_rest` argument.
     *
     * @global array $wp_registered_sidebars The registered sidebars.
     *
     * @param array|string $args {
     *     Optional. Array or string of arguments for the sidebar being registered.
     *
     * @type string $name           The name or title of the sidebar displayed in the Widgets
     *                                  interface. Default 'Sidebar $instance'.
     * @type string $id             The unique identifier by which the sidebar will be called.
     *                                  Default 'sidebar-$instance'.
     * @type string $description    Description of the sidebar, displayed in the Widgets interface.
     *                                  Default empty string.
     * @type string $class          Extra CSS class to assign to the sidebar in the Widgets interface.
     *                                  Default empty.
     * @type string $before_widget  HTML content to prepend to each widget's HTML output when assigned
     *                                  to this sidebar. Receives the widget's ID attribute as `%1$s`
     *                                  and class name as `%2$s`. Default is an opening list item element.
     * @type string $after_widget   HTML content to append to each widget's HTML output when assigned
     *                                  to this sidebar. Default is a closing list item element.
     * @type string $before_title   HTML content to prepend to the sidebar title when displayed.
     *                                  Default is an opening h2 element.
     * @type string $after_title    HTML content to append to the sidebar title when displayed.
     *                                  Default is a closing h2 element.
     * @type string $before_sidebar HTML content to prepend to the sidebar when displayed.
     *                                  Receives the `$id` argument as `%1$s` and `$class` as `%2$s`.
     *                                  Outputs after the {@see 'dynamic_sidebar_before'} action.
     *                                  Default empty string.
     * @type string $after_sidebar  HTML content to append to the sidebar when displayed.
     *                                  Outputs before the {@see 'dynamic_sidebar_after'} action.
     *                                  Default empty string.
     * @type bool $show_in_rest     Whether to show this sidebar publicly in the REST API.
     *                                  Defaults to only showing the sidebar to administrator users.
     * }
     * @return string Sidebar ID added to $wp_registered_sidebars global.
     */
    public function registerSidebar(array|string $args = []): string;
}
