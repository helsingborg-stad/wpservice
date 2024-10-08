<?php

namespace WpService\Contracts;

interface WpSprintfL
{
    /**
     * Localizes list items before the rest of the content.
     *
     * The '%l' must be at the first characters can then contain the rest of the
     * content. The list items will have ', ', ', and', and ' and ' added depending
     * on the amount of list items in the $args parameter.
     *
     * @since 2.5.0
     *
     * @param string $pattern Content containing '%l' at the beginning.
     * @param array $args    List items to prepend to the content and replace '%l'.
     * @return string Localized list items and rest of the content.
     */
    public function wpSprintfL(string $pattern, array $args): string;
}
