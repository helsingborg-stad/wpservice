<?php

namespace WpService\Contracts;

interface InstallPopularTags
{
    /**
 * Retrieves popular WordPress plugin tags.
 *
 * @since 2.7.0
 *
 * @param array $args
 * @return array|\WP_Error
 */
    public function installPopularTags(array $args): array|\WP_Error;
}
