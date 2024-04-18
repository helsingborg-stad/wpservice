<?php

namespace WpService\Contracts;

interface PluginDirPath
{
  /**
   * Get the filesystem directory path (with trailing slash) for the plugin __FILE__ passed in.
   *
   * @return string
   */
    public function pluginDirPath(string $file): string;
}
