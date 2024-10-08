<?php

namespace WpService\Contracts;

interface WpEnqueueScript
{
    /**
 * Enqueues a script.
 *
 * Registers the script if `$src` provided (does NOT overwrite), and enqueues it.
 *
 * @see WP_Dependencies::add()
 * @see WP_Dependencies::add_data()
 * @see WP_Dependencies::enqueue()
 *
 * @since 2.1.0
 * @since 6.3.0 The $in_footer parameter of type boolean was overloaded to be an $args parameter of type array.
 *
 * @param string $handle    Name of the script. Should be unique.
 * @param string $src       Full URL of the script, or path of the script relative to the WordPress root directory.
 *                                    Default empty.
 * @param string[] $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param string|bool|null $ver       Optional. String specifying script version number, if it has one, which is added to the URL
 *                                    as a query string for cache busting purposes. If version is set to false, a version
 *                                    number is automatically added equal to current installed WordPress version.
 *                                    If set to null, no version is added.
 * @param array|bool $args     {
 *     Optional. An array of additional script loading strategies. Default empty array.
 *     Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false.
 *
 *     @type string    $strategy     Optional. If provided, may be either 'defer' or 'async'.
 *     @type bool      $in_footer    Optional. Whether to print the script in the footer. Default 'false'.
 * }
 */
    public function wpEnqueueScript(string $handle, string $src, array $deps, string|bool|null $ver, array|bool $args): void;
}
