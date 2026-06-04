<?php

namespace WpService\Contracts;

interface GetTempDir
{
/**
 * Determines a writable directory for temporary files.
 *
 * Function's preference is the return value of `sys_get_temp_dir()`,
 * followed by the `upload_tmp_dir` value from `php.ini`, followed by `WP_CONTENT_DIR`,
 * before finally defaulting to `/tmp/`.
 *
 * Note that `sys_get_temp_dir()` honors the `TMPDIR` environment variable.
 *
 * In the event that this function does not find a writable location,
 * it may be overridden by the `WP_TEMP_DIR` constant in your `wp-config.php` file.
 *
 * @since 2.5.0
 *
 * @return string Writable temporary directory.
 */
    public function getTempDir(): string;
}
