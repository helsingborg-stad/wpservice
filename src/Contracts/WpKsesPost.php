<?php

namespace WpService\Contracts;

interface WpKsesPost
{
    /**
     * Sanitizes content for allowed HTML tags for post content.
     *
     * Post content refers to the page contents of the 'post' type and not `$_POST`
     * data from forms.
     *
     * This function expects unslashed data.
     *
     * @since 2.9.0
     *
     * @param string $data Post content to filter.
     * @return string Filtered post content with allowed HTML tags and attributes intact.
     */
    public function wpKsesPost(string $data): string;
}
