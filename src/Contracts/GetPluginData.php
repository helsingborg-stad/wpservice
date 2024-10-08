<?php

namespace WpService\Contracts;

interface GetPluginData
{
    /**
 * Parses the plugin contents to retrieve plugin's metadata.
 *
 * All plugin headers must be on their own line. Plugin description must not have
 * any newlines, otherwise only parts of the description will be displayed.
 * The below is formatted for printing.
 *
 *     /*
 *     Plugin Name: Name of the plugin.
 *     Plugin URI: The home page of the plugin.
 *     Description: Plugin description.
 *     Author: Plugin author's name.
 *     Author URI: Link to the author's website.
 *     Version: Plugin version.
 *     Text Domain: Optional. Unique identifier, should be same as the one used in
 *          load_plugin_textdomain().
 *     Domain Path: Optional. Only useful if the translations are located in a
 *          folder above the plugin's base path. For example, if .mo files are
 *          located in the locale folder then Domain Path will be "/locale/" and
 *          must have the first slash. Defaults to the base folder the plugin is
 *          located in.
 *     Network: Optional. Specify "Network: true" to require that a plugin is activated
 *          across all sites in an installation. This will prevent a plugin from being
 *          activated on a single site when Multisite is enabled.
 *     Requires at least: Optional. Specify the minimum required WordPress version.
 *     Requires PHP: Optional. Specify the minimum required PHP version.
 *     * / # Remove the space to close comment.
 *
 * The first 8 KB of the file will be pulled in and if the plugin data is not
 * within that first 8 KB, then the plugin author should correct their plugin
 * and move the plugin data headers to the top.
 *
 * The plugin file is assumed to have permissions to allow for scripts to read
 * the file. This is not checked however and the file is only opened for
 * reading.
 *
 * @since 1.5.0
 * @since 5.3.0 Added support for `Requires at least` and `Requires PHP` headers.
 * @since 5.8.0 Added support for `Update URI` header.
 * @since 6.5.0 Added support for `Requires Plugins` header.
 *
 * @param string $pluginFile Absolute path to the main plugin file.
 * @param bool $markup      Optional. If the returned data should have HTML markup applied.
 *                            Default true.
 * @param bool $translate   Optional. If the returned data should be translated. Default true.
 * @return array {
 *     Plugin data. Values will be empty if not supplied by the plugin.
 *
 *     @type string $Name            Name of the plugin. Should be unique.
 *     @type string $PluginURI       Plugin URI.
 *     @type string $Version         Plugin version.
 *     @type string $Description     Plugin description.
 *     @type string $Author          Plugin author's name.
 *     @type string $AuthorURI       Plugin author's website address (if set).
 *     @type string $TextDomain      Plugin textdomain.
 *     @type string $DomainPath      Plugin's relative directory path to .mo files.
 *     @type bool   $Network         Whether the plugin can only be activated network-wide.
 *     @type string $RequiresWP      Minimum required version of WordPress.
 *     @type string $RequiresPHP     Minimum required version of PHP.
 *     @type string $UpdateURI       ID of the plugin for update purposes, should be a URI.
 *     @type string $RequiresPlugins Comma separated list of dot org plugin slugs.
 *     @type string $Title           Title of the plugin and link to the plugin's site (if set).
 *     @type string $AuthorName      Plugin author's name.
 * }
 */
    public function getPluginData(string $pluginFile, bool $markup = true, bool $translate = true): array;
}
