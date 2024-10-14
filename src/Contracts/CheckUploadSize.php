<?php

namespace WpService\Contracts;

interface CheckUploadSize
{
/**
 * Determines whether uploaded file exceeds space quota.
 *
 * @since 3.0.0
 *
 * @param array $file An element from the `$_FILES` array for a given file.
 * @return array The `$_FILES` array element with 'error' key set if file exceeds quota. 'error' is empty otherwise.
 */
    public function checkUploadSize(array $file): array;
}
