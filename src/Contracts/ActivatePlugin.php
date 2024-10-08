<?php

namespace WpService\Contracts;

interface ActivatePlugin
{
    /**
 * Attempts activation of plugin in a "sandbox" and redirects on success.
 *
 * A plugin that is already activated will not attempt to be activated again.
 *
 * The way it works is by setting the redirection to the error before trying to
 * include the plugin file. If the plugin fails, then the redirection will not
 * be overwritten with the success message. Also, the options will not be
 * updated and the activation hook will not be called on plugin error.
 *
 * It should be noted that in no way the below code will actually prevent errors
 * within the file. The code should not be used elsewhere to replicate the
 * "sandbox", which uses redirection to work.
 * {@source 13 1}
 *
 * If any errors are found or text is outputted, then it will be captured to
 * ensure that the success redirection will update the error redirection.
 *
 * @since 2.5.0
 * @since 5.2.0 Test for WordPress version and PHP version compatibility.
 *
 * @param string $plugin       Path to the plugin file relative to the plugins directory.
 * @param string $redirect     Optional. URL to redirect to.
 * @param bool $networkWide Optional. Whether to enable the plugin for all sites in the network
 *                             or just the current site. Multisite only. Default false.
 * @param bool $silent       Optional. Whether to prevent calling activation hooks. Default false.
 * @return null|\WP_Error Null on success, WP_Error on invalid file.
 */
    public function activatePlugin(string $plugin, string $redirect = '', bool $networkWide = false, bool $silent = false): null|\WP_Error;
}
