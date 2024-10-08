<?php

namespace WpService\Contracts;

interface GetTheModifiedAuthor
{
    /**
     * Retrieves the author who last edited the current post.
     *
     * @since 2.8.0
     *
     * @return string|void The author's display name, empty string if unknown.
     */
    public function getTheModifiedAuthor(): mixed;
}
