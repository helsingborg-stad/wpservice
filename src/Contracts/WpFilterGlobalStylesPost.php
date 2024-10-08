<?php

namespace WpService\Contracts;

interface WpFilterGlobalStylesPost
{
    /**
 * Sanitizes global styles user content removing unsafe rules.
 *
 * @since 5.9.0
 *
 * @param string $data Post content to filter.
 * @return string Filtered post content with unsafe rules removed.
 */
    public function wpFilterGlobalStylesPost(string $data): string;
}
