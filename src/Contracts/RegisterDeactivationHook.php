<?php

namespace WpService\Contracts;

interface RegisterDeactivationHook
{
    /**
     * Sets the deactivation hook for a plugin.
     *
     * When a plugin is deactivated, the action 'deactivate_PLUGINNAME' hook is
     * called. In the name of this hook, PLUGINNAME is replaced with the name
     * of the plugin, including the optional subdirectory. For example, when the
     * plugin is located in wp-content/plugins/sampleplugin/sample.php, then
     * the name of this hook will become 'deactivate_sampleplugin/sample.php'.
     *
     * When the plugin consists of only one file and is (as by default) located at
     * wp-content/plugins/sample.php the name of this hook will be
     * 'deactivate_sample.php'.
     *
     * @since 2.0.0
     *
     * @param string $file     The filename of the plugin including the path.
     * @param callable $callback The function hooked to the 'deactivate_PLUGIN' action.
     */
    public function registerDeactivationHook(string $file, callable $callback): void;
}
