<?php

namespace WpService\Contracts;

interface IsActiveWidget
{
    /**
     * Determines whether a given widget is displayed on the front end.
     *
     * Either $callback or $id_base can be used
     * $id_base is the first argument when extending WP_Widget class
     * Without the optional $widget_id parameter, returns the ID of the first sidebar
     * in which the first instance of the widget with the given callback or $id_base is found.
     * With the $widget_id parameter, returns the ID of the sidebar where
     * the widget with that callback/$id_base AND that ID is found.
     *
     * NOTE: $widget_id and $id_base are the same for single widgets. To be effective
     * this function has to run after widgets have initialized, at action {@see 'init'} or later.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.2.0
     *
     * @global array $wp_registered_widgets The registered widgets.
     *
     * @param callable|false $callback      Optional. Widget callback to check. Default false.
     * @param string|false $widgetId     Optional. Widget ID. Optional, but needed for checking.
     *                                      Default false.
     * @param string|false $idBase       Optional. The base ID of a widget created by extending WP_Widget.
     *                                      Default false.
     * @param bool $skipInactive Optional. Whether to check in 'wp_inactive_widgets'.
     *                                      Default true.
     * @return string|false ID of the sidebar in which the widget is active,
     *                      false if the widget is not active.
     */
    public function isActiveWidget(callable|false $callback = false, string|false $widgetId = false, string|false $idBase = false, bool $skipInactive = true): string|false;
}
