<?php

namespace WpService\Contracts;

interface MsUploadConstants
{
/**
 * Defines Multisite upload constants.
 *
 * Exists for backward compatibility with legacy file-serving through
 * wp-includes/ms-files.php (wp-content/blogs.php in MU).
 *
 * @since 3.0.0
 */
    public function msUploadConstants(): void;
}
