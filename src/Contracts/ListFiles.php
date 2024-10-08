<?php

namespace WpService\Contracts;

interface ListFiles
{
    /**
 * Returns a listing of all files in the specified folder and all subdirectories up to 100 levels deep.
 *
 * The depth of the recursiveness can be controlled by the $levels param.
 *
 * @since 2.6.0
 * @since 4.9.0 Added the `$exclusions` parameter.
 * @since 6.3.0 Added the `$include_hidden` parameter.
 *
 * @param string $folder         Optional. Full path to folder. Default empty.
 * @param int $levels         Optional. Levels of folders to follow, Default 100 (PHP Loop limit).
 * @param string[] $exclusions     Optional. List of folders and files to skip.
 * @param bool $includeHidden Optional. Whether to include details of hidden ("." prefixed) files.
 *                                 Default false.
 * @return string[]|false Array of files on success, false on failure.
 */
    public function listFiles(string $folder = '', int $levels = 100, array $exclusions = [], bool $includeHidden = false): array|false;
}
