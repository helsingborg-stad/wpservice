<?php

namespace WpService\Contracts;

interface PluginsUrl
{
  /**
   * Retrieves a URL within the plugins or mu-plugins directory.
   *
   * @return string
   */
    public function pluginsUrl(string $path = '', string $plugin = ''): string;
}
