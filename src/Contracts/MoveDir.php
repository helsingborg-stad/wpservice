<?php

namespace WpService\Contracts;

interface MoveDir
{
/**
 * Moves a directory from one location to another.
 *
 * Recursively invalidates OPcache on success.
 *
 * If the renaming failed, falls back to copy_dir().
 *
 * Assumes that WP_Filesystem() has already been called and setup.
 *
 * This function is not designed to merge directories, copy_dir() should be used instead.
 *
 * @since 6.2.0
 *
 * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
 *
 * @param string $from      Source directory.
 * @param string $to        Destination directory.
 * @param bool $overwrite Optional. Whether to overwrite the destination directory if it exists.
 *                          Default false.
 * @return true|\WP_Error True on success, WP_Error on failure.
 */
    public function moveDir(string $from, string $to, bool $overwrite = false): true|\WP_Error;
}
