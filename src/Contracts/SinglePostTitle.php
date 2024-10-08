<?php

namespace WpService\Contracts;

interface SinglePostTitle
{
    /**
     * Displays or retrieves page title for post.
     *
     * This is optimized for single.php template file for displaying the post title.
     *
     * It does not support placing the separator after the title, but by leaving the
     * prefix parameter empty, you can set the title separator manually. The prefix
     * does not automatically place a space between the prefix, so if there should
     * be a space, the parameter value will need to have it at the end.
     *
     * @since 0.71
     *
     * @param string $prefix  Optional. What to display before the title.
     * @param bool $display Optional. Whether to display or retrieve title. Default true.
     * @return string|void Title when retrieving.
     */
    public function singlePostTitle(string $prefix = '', bool $display = true): mixed;
}
