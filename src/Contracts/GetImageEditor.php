<?php

namespace WpService\Contracts;

use WP_Error;
use WP_Image_Editor;
use WP_Term;

interface GetImageEditor
{
    /**
     * Returns a WP_Image_Editor instance and loads file into it.
     *
     * @param string $path Path to the file to load.
     * @param array $args Optional. Additional arguments for retrieving the image editor.
     */
    public function getImageEditor(string $path, array $args = array()): WP_Image_Editor|WP_Error;
}
