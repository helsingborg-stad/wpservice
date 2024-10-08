<?php

namespace WpService\Contracts;

interface WpHandleUpload
{
    /**
     * Wrapper for _wp_handle_upload().
     *
     * Passes the {@see 'wp_handle_upload'} action.
     *
     * @since 2.0.0
     *
     * @see _wp_handle_upload()
     *
     * @param array $file      Reference to a single element of `$_FILES`.
     *                               Call the function once for each uploaded file.
     *                               See _wp_handle_upload() for accepted values.
     * @param array|false $overrides Optional. An associative array of names => values
     *                               to override default variables. Default false.
     *                               See _wp_handle_upload() for accepted values.
     * @param string|null $time      Optional. Time formatted in 'yyyy/mm'. Default null.
     * @return array See _wp_handle_upload() for return value.
     */
    public function wpHandleUpload(array $file, array|false $overrides = false, string|null $time = null): array;
}
