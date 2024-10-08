<?php

namespace WpService\Contracts;

interface WpGetFontDir
{
    /**
 * Retrieves font uploads directory information.
 *
 * Same as wp_font_dir() but "light weight" as it doesn't attempt to create the font uploads directory.
 * Intended for use in themes, when only 'basedir' and 'baseurl' are needed, generally in all cases
 * when not uploading files.
 *
 * @since 6.5.0
 *
 * @see wp_font_dir()
 *
 * @return array See wp_font_dir() for description.
 */
    public function wpGetFontDir(): array;
}
