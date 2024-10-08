<?php

namespace WpService\Contracts;

interface ValidateFile
{
    /**
     * Validates a file name and path against an allowed set of rules.
     *
     * A return value of `1` means the file path contains directory traversal.
     *
     * A return value of `2` means the file path contains a Windows drive path.
     *
     * A return value of `3` means the file is not in the allowed files list.
     *
     * @since 1.2.0
     *
     * @param string $file          File path.
     * @param string[] $allowedFiles Optional. Array of allowed files. Default empty array.
     * @return int 0 means nothing is wrong, greater than 0 means something was wrong.
     */
    public function validateFile(string $file, array $allowedFiles = []): int;
}
