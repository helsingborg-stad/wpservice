<?php

namespace WpService\Contracts;

interface WpTempnam
{
    /**
 * Returns a filename of a temporary unique file.
 *
 * Please note that the calling function must delete or move the file.
 *
 * The filename is based off the passed parameter or defaults to the current unix timestamp,
 * while the directory can either be passed as well, or by leaving it blank, default to a writable
 * temporary directory.
 *
 * @since 2.6.0
 *
 * @param string $filename Optional. Filename to base the Unique file off. Default empty.
 * @param string $dir      Optional. Directory to store the file in. Default empty.
 * @return string A writable filename.
 */
    public function wpTempnam(string $filename = '', string $dir = ''): string;
}
