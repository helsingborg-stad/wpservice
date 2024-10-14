<?php

namespace WpService\Generator;

/**
 * Finder
 */
class Finder
{
    /**
     * Get the finder
     *
     * @return \StubsGenerator\Finder
     */
    public static function getFinder(): \StubsGenerator\Finder
    {
        return \StubsGenerator\Finder::create()
            ->in(dirname(__FILE__) . '/../wordpress')
            ->notPath('wp-admin/press-this.php')
            ->notPath('wp-includes/class-avif-info.php')
            ->notPath('wp-admin/includes/class-pclzip.php')
            ->notPath('wp-includes/class-pclzip.php')
            ->notPath('wp-admin/includes/noop.php')
            ->notPath('wp-admin/install-helper.php')
            ->notPath('wp-content')
            ->notPath('wp-includes/theme-compat')
            ->notPath('wp-includes/compat.php')
            ->notPath('wp-includes/spl-autoload-compat.php')
            ->notPath('wp-includes/random_compat')
            ->notPath('wp-includes/sodium_compat')
            ->notPath('wp-includes/cache-compat.php')
            ->notPath('wp-includes/php-compat')
            ->notPath('wp-admin/admin-functions.php')
            ->notPath('wp-admin/custom-background.php')
            ->notPath('wp-admin/custom-header.php')
            ->notPath('wp-admin/includes/class-wp-upgrader-skins.php')
            ->notPath('wp-admin/upgrade-functions.php')
            ->notPath('wp-includes/class-feed.php')
            ->notPath('wp-includes/class-json.php')
            ->notPath('wp-includes/class-oembed.php')
            ->notPath('wp-includes/class-snoopy.php')
            ->notPath('wp-includes/date.php')
            ->notPath('wp-includes/embed-template.php')
            ->notPath('wp-includes/locale.php')
            ->notPath('wp-includes/registration-functions.php')
            ->notPath('wp-includes/registration.php')
            ->notPath('wp-includes/rss-functions.php')
            ->notPath('wp-includes/rss.php')
            ->notPath('wp-includes/session.php')
            ->notPath('wp-admin/includes/upgrade.php')
            ->sortByName();
    }
}
