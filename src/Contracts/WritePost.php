<?php

namespace WpService\Contracts;

interface WritePost
{
    /**
     * Calls wp_write_post() and handles the errors.
     *
     * @since 2.0.0
     *
     * @return int|void Post ID on success, void on failure.
     */
    public function writePost(): mixed;
}
