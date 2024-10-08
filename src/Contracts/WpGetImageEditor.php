<?php

namespace WpService\Contracts;

interface WpGetImageEditor
{
    /**
 * Returns a WP_Image_Editor instance and loads file into it.
 *
 * @since 3.5.0
 *
 * @param string $path Path to the file to load.
 * @param array $args Optional. Additional arguments for retrieving the image editor.
 *                     Default empty array.
 * @return \WP_Image_Editor|\WP_Error The WP_Image_Editor object on success,
 *                                  a WP_Error object otherwise.
 */
    public function wpGetImageEditor(string $path, array $args): \WP_Image_Editor|\WP_Error;
}
