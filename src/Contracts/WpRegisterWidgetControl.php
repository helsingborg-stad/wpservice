<?php

namespace WpService\Contracts;

interface WpRegisterWidgetControl
{
/**
 * Registers widget control callback for customizing options.
 *
 * @since 2.2.0
 * @since 5.3.0 Formalized the existing and already documented `...$params` parameter
 *              by adding it to the function signature.
 *
 * @global array $wp_registered_widget_controls The registered widget controls.
 * @global array $wp_registered_widget_updates  The registered widget updates.
 * @global array $wp_registered_widgets         The registered widgets.
 * @global array $_wp_deprecated_widgets_callbacks
 *
 * @param int|string $id               Sidebar ID.
 * @param string $name             Sidebar display name.
 * @param callable $controlCallback Run when sidebar is displayed.
 * @param array $options {
 *     Optional. Array or string of control options. Default empty array.
 *
 * @type int        $height  Never used. Default 200.
 * @type int        $width   Width of the fully expanded control form (but try hard to use the default width).
 *                               Default 250.
 * @type int|string $id_base Required for multi-widgets, i.e widgets that allow multiple instances such as the
 *                               text widget. The widget ID will end up looking like `{$id_base}-{$unique_number}`.
 * }
 * @param mixed      ...$params        Optional additional parameters to pass to the callback function when it's called.
 */
    public function wpRegisterWidgetControl(int|string $id, string $name, callable $controlCallback, array $options = [], mixed ...$params): void;
}
