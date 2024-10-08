<?php

namespace WpService\Contracts;

interface MsFileConstants
{
    /**
     * Defines Multisite file constants.
     *
     * Exists for backward compatibility with legacy file-serving through
     * wp-includes/ms-files.php (wp-content/blogs.php in MU).
     *
     * @since 3.0.0
     */
    public function msFileConstants(): void;
}
