<?php

namespace WpService\Contracts;

interface BlockCoreLatestPostsGetExcerptLength
{
    /**
 * Callback for the excerpt_length filter used by
 * the Latest Posts block at render time.
 *
 * @since 5.4.0
 *
 * @return int Returns the global $block_core_latest_posts_excerpt_length variable
 *             to allow the excerpt_length filter respect the Latest Block setting.
 */
    public function blockCoreLatestPostsGetExcerptLength(): int;
}
