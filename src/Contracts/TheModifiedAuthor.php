<?php

namespace WpService\Contracts;

interface TheModifiedAuthor
{
    /**
     * Displays the name of the author who last edited the current post,
     * if the author's ID is available.
     *
     * @since 2.8.0
     *
     * @see get_the_author()
     */
    public function theModifiedAuthor(): void;
}
