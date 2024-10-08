<?php

namespace WpService\Contracts;

interface DoBlocks
{
    /**
     * Parses dynamic blocks out of `post_content` and re-renders them.
     *
     * @since 5.0.0
     *
     * @param string $content Post content.
     * @return string Updated post content.
     */
    public function doBlocks(string $content): string;
}
