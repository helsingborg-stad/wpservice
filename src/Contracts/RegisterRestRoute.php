<?php

namespace WpService\Contracts;

interface RegisterRestRoute
{
    /**
 * Registers a REST API route.
 *
 * Note: Do not use before the {@see 'rest_api_init'} hook.
 *
 * @since 4.4.0
 * @since 5.1.0 Added a `_doing_it_wrong()` notice when not called on or after the `rest_api_init` hook.
 * @since 5.5.0 Added a `_doing_it_wrong()` notice when the required `permission_callback` argument is not set.
 *
 * @param string $routeNamespace The first URL segment after core prefix. Should be unique to your package/plugin.
 * @param string $route           The base URL for route you are adding.
 * @param array $args            Optional. Either an array of options for the endpoint, or an array of arrays for
 *                                multiple methods. Default empty array.
 * @param bool $override        Optional. If the route already exists, should we override it? True overrides,
 *                                false merges (with newer overriding if duplicate keys exist). Default false.
 * @return bool True on success, false on error.
 */
    public function registerRestRoute(string $routeNamespace, string $route, array $args, bool $override): bool;
}
