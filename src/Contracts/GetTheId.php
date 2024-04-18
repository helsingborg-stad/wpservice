<?php

namespace WpService\Contracts;

interface GetTheId
{
    /**
     * Get the ID of the current post.
     *
     * @return int|false The ID or false if not available.
     */
    public function getTheId(): int|false;
}
