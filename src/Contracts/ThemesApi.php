<?php

namespace WpService\Contracts;

interface ThemesApi
{
/**
 * Retrieves theme installer pages from the WordPress.org Themes API.
 *
 * It is possible for a theme to override the Themes API result with three
 * filters. Assume this is for themes, which can extend on the Theme Info to
 * offer more choices. This is very powerful and must be used with care, when
 * overriding the filters.
 *
 * The first filter, {@see 'themes_api_args'}, is for the args and gives the action
 * as the second parameter. The hook for {@see 'themes_api_args'} must ensure that
 * an object is returned.
 *
 * The second filter, {@see 'themes_api'}, allows a plugin to override the WordPress.org
 * Theme API entirely. If `$action` is 'query_themes', 'theme_information', or 'feature_list',
 * an object MUST be passed. If `$action` is 'hot_tags', an array should be passed.
 *
 * Finally, the third filter, {@see 'themes_api_result'}, makes it possible to filter the
 * response object or array, depending on the `$action` type.
 *
 * Supported arguments per action:
 *
 * | Argument Name      | 'query_themes' | 'theme_information' | 'hot_tags' | 'feature_list'   |
 * | -------------------| :------------: | :-----------------: | :--------: | :--------------: |
 * | `$slug`            | No             |  Yes                | No         | No               |
 * | `$per_page`        | Yes            |  No                 | No         | No               |
 * | `$page`            | Yes            |  No                 | No         | No               |
 * | `$number`          | No             |  No                 | Yes        | No               |
 * | `$search`          | Yes            |  No                 | No         | No               |
 * | `$tag`             | Yes            |  No                 | No         | No               |
 * | `$author`          | Yes            |  No                 | No         | No               |
 * | `$user`            | Yes            |  No                 | No         | No               |
 * | `$browse`          | Yes            |  No                 | No         | No               |
 * | `$locale`          | Yes            |  Yes                | No         | No               |
 * | `$fields`          | Yes            |  Yes                | No         | No               |
 *
 * @since 2.8.0
 *
 * @param string $action API action to perform: Accepts 'query_themes', 'theme_information',
 *                             'hot_tags' or 'feature_list'.
 * @param array|object $args   {
 *     Optional. Array or object of arguments to serialize for the Themes API. Default empty array.
 *
 * @type string  $slug     The theme slug. Default empty.
 * @type int     $per_page Number of themes per page. Default 24.
 * @type int     $page     Number of current page. Default 1.
 * @type int     $number   Number of tags to be queried.
 * @type string  $search   A search term. Default empty.
 * @type string  $tag      Tag to filter themes. Default empty.
 * @type string  $author   Username of an author to filter themes. Default empty.
 * @type string  $user     Username to query for their favorites. Default empty.
 * @type string  $browse   Browse view: 'featured', 'popular', 'updated', 'favorites'.
 * @type string  $locale   Locale to provide context-sensitive results. Default is the value of get_locale().
 * @type array   $fields   {
 *         Array of fields which should or should not be returned.
 *
 * @type bool $description        Whether to return the theme full description. Default false.
 * @type bool $sections           Whether to return the theme readme sections: description, installation,
 *                                        FAQ, screenshots, other notes, and changelog. Default false.
 * @type bool $rating             Whether to return the rating in percent and total number of ratings.
 *                                        Default false.
 * @type bool $ratings            Whether to return the number of rating for each star (1-5). Default false.
 * @type bool $downloaded         Whether to return the download count. Default false.
 * @type bool $downloadlink       Whether to return the download link for the package. Default false.
 * @type bool $last_updated       Whether to return the date of the last update. Default false.
 * @type bool $tags               Whether to return the assigned tags. Default false.
 * @type bool $homepage           Whether to return the theme homepage link. Default false.
 * @type bool $screenshots        Whether to return the screenshots. Default false.
 * @type int  $screenshot_count   Number of screenshots to return. Default 1.
 * @type bool $screenshot_url     Whether to return the URL of the first screenshot. Default false.
 * @type bool $photon_screenshots Whether to return the screenshots via Photon. Default false.
 * @type bool $template           Whether to return the slug of the parent theme. Default false.
 * @type bool $parent             Whether to return the slug, name and homepage of the parent theme. Default false.
 * @type bool $versions           Whether to return the list of all available versions. Default false.
 * @type bool $theme_url          Whether to return theme's URL. Default false.
 * @type bool $extended_author    Whether to return nicename or nicename and display name. Default false.
 *     }
 * }
 * @return object|array|WP_Error Response object or array on success, WP_Error on failure. See the
 *         {@link https://developer.wordpress.org/reference/functions/themes_api/ function reference article}
 *         for more information on the make-up of possible return objects depending on the value of `$action`.
 */
    public function themesApi(string $action, array|object $args = []): array|object;
}
