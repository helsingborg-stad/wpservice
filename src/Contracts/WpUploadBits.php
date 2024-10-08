<?php

namespace WpService\Contracts;

interface WpUploadBits
{
    /**
     * Creates a file in the upload folder with given content.
     *
     * If there is an error, then the key 'error' will exist with the error message.
     * If success, then the key 'file' will have the unique file path, the 'url' key
     * will have the link to the new file. and the 'error' key will be set to false.
     *
     * This function will not move an uploaded file to the upload folder. It will
     * create a new file with the content in $bits parameter. If you move the upload
     * file, read the content of the uploaded file, and then you can give the
     * filename and content to this function, which will add it to the upload
     * folder.
     *
     * The permissions will be set on the new file automatically by this function.
     *
     * @since 2.0.0
     *
     * @param string $name       Filename.
     * @param null|string $deprecated Never used. Set to null.
     * @param string $bits       File content
     * @param string|null $time       Optional. Time formatted in 'yyyy/mm'. Default null.
     * @return array {
     *     Information about the newly-uploaded file.
     *
     * @type string       $file  Filename of the newly-uploaded file.
     * @type string       $url   URL of the uploaded file.
     * @type string       $type  File type.
     * @type string|false $error Error message, if there has been an error.
     * }
     */
    public function wpUploadBits(string $name, null|string $deprecated, string $bits, string|null $time = null): array;
}
