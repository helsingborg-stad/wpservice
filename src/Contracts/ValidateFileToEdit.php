<?php

namespace WpService\Contracts;

interface ValidateFileToEdit
{
    /**
     * Makes sure that the file that was requested to be edited is allowed to be edited.
     *
     * Function will die if you are not allowed to edit the file.
     *
     * @since 1.5.0
     *
     * @param string $file          File the user is attempting to edit.
     * @param string[] $allowedFiles Optional. Array of allowed files to edit.
     *                                `$file` must match an entry exactly.
     * @return string|void Returns the file name on success, dies on failure.
     */
    public function validateFileToEdit(string $file, array $allowedFiles = []): mixed;
}
