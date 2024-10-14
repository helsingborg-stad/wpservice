<?php

namespace WpService\Contracts;

interface PluginsApi
{
/**
 * Retrieves plugin installer pages from the WordPress.org Plugins API.
 *
 * It is possible for a plugin to override the Plugin API result with three
 * filters. Assume this is for plugins, which can extend on the Plugin Info to
 * offer more choices. This is very powerful and must be used with care when
 * overriding the filters.
 *
 * The first filter, {@see 'plugins_api_args'}, is for the args and gives the action
 * as the second parameter. The hook for {@see 'plugins_api_args'} must ensure that
 * an object is returned.
 *
 * The second filter, {@see 'plugins_api'}, allows a plugin to override the WordPress.org
 * Plugin Installation API entirely. If `$action` is 'query_plugins' or 'plugin_information',
 * an object MUST be passed. If `$action` is 'hot_tags' or 'hot_categories', an array MUST
 * be passed.
 *
 * Finally, the third filter, {@see 'plugins_api_result'}, makes it possible to filter the
 * response object or array, depending on the `$action` type.
 *
 * Supported arguments per action:
 *
 * | Argument Name        | query_plugins | plugin_information | hot_tags | hot_categories |
 * | -------------------- | :-----------: | :----------------: | :------: | :------------: |
 * | `$slug`              | No            |  Yes               | No       | No             |
 * | `$per_page`          | Yes           |  No                | No       | No             |
 * | `$page`              | Yes           |  No                | No       | No             |
 * | `$number`            | No            |  No                | Yes      | Yes            |
 * | `$search`            | Yes           |  No                | No       | No             |
 * | `$tag`               | Yes           |  No                | No       | No             |
 * | `$author`            | Yes           |  No                | No       | No             |
 * | `$user`              | Yes           |  No                | No       | No             |
 * | `$browse`            | Yes           |  No                | No       | No             |
 * | `$locale`            | Yes           |  Yes               | No       | No             |
 * | `$installed_plugins` | Yes           |  No                | No       | No             |
 * | `$is_ssl`            | Yes           |  Yes               | No       | No             |
 * | `$fields`            | Yes           |  Yes               | No       | No             |
 *
 * @since 2.7.0
 *
 * @param string $action API action to perform: 'query_plugins', 'plugin_information',
 *                             'hot_tags' or 'hot_categories'.
 * @param array|object $args   {
 *     Optional. Array or object of arguments to serialize for the Plugin Info API.
 *
 * @type string  $slug              The plugin slug. Default empty.
 * @type int     $per_page          Number of plugins per page. Default 24.
 * @type int     $page              Number of current page. Default 1.
 * @type int     $number            Number of tags or categories to be queried.
 * @type string  $search            A search term. Default empty.
 * @type string  $tag               Tag to filter plugins. Default empty.
 * @type string  $author            Username of an plugin author to filter plugins. Default empty.
 * @type string  $user              Username to query for their favorites. Default empty.
 * @type string  $browse            Browse view: 'popular', 'new', 'beta', 'recommended'.
 * @type string  $locale            Locale to provide context-sensitive results. Default is the value
 *                                      of get_locale().
 * @type string  $installed_plugins Installed plugins to provide context-sensitive results.
 * @type bool    $is_ssl            Whether links should be returned with https or not. Default false.
 * @type array   $fields            {
 *         Array of fields which should or should not be returned.
 *
 * @type bool $short_description Whether to return the plugin short description. Default true.
 * @type bool $description       Whether to return the plugin full description. Default false.
 * @type bool $sections          Whether to return the plugin readme sections: description, installation,
 *                                       FAQ, screenshots, other notes, and changelog. Default false.
 * @type bool $tested            Whether to return the 'Compatible up to' value. Default true.
 * @type bool $requires          Whether to return the required WordPress version. Default true.
 * @type bool $requires_php      Whether to return the required PHP version. Default true.
 * @type bool $rating            Whether to return the rating in percent and total number of ratings.
 *                                       Default true.
 * @type bool $ratings           Whether to return the number of rating for each star (1-5). Default true.
 * @type bool $downloaded        Whether to return the download count. Default true.
 * @type bool $downloadlink      Whether to return the download link for the package. Default true.
 * @type bool $last_updated      Whether to return the date of the last update. Default true.
 * @type bool $added             Whether to return the date when the plugin was added to the wordpress.org
 *                                       repository. Default true.
 * @type bool $tags              Whether to return the assigned tags. Default true.
 * @type bool $compatibility     Whether to return the WordPress compatibility list. Default true.
 * @type bool $homepage          Whether to return the plugin homepage link. Default true.
 * @type bool $versions          Whether to return the list of all available versions. Default false.
 * @type bool $donate_link       Whether to return the donation link. Default true.
 * @type bool $reviews           Whether to return the plugin reviews. Default false.
 * @type bool $banners           Whether to return the banner images links. Default false.
 * @type bool $icons             Whether to return the icon links. Default false.
 * @type bool $active_installs   Whether to return the number of active installations. Default false.
 * @type bool $group             Whether to return the assigned group. Default false.
 * @type bool $contributors      Whether to return the list of contributors. Default false.
 *     }
 * }
 * @return object|array|WP_Error Response object or array on success, WP_Error on failure. See the
 *         {@link https://developer.wordpress.org/reference/functions/plugins_api/ function reference article}
 *         for more information on the make-up of possible return values depending on the value of `$action`.
 */
    public function pluginsApi(string $action, array|object $args = []): array|object;
}
