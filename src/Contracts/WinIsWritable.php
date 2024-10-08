<?php

namespace WpService\Contracts;

interface WinIsWritable
{
    /**
     * Workaround for Windows bug in is_writable() function
     *
     * PHP has issues with Windows ACL's for determine if a
     * directory is writable or not, this works around them by
     * checking the ability to open files rather than relying
     * upon PHP to interpret the OS ACL.
     *
     * @since 2.8.0
     *
     * @see https://bugs.php.net/bug.php?id=27609
     * @see https://bugs.php.net/bug.php?id=30931
     *
     * @param string $path Windows path to check for write-ability.
     * @return bool Whether the path is writable.
     */
    public function winIsWritable(string $path): bool;
}
