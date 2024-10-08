<?php

namespace WpService\Contracts;

interface ImageEditApplyChanges
{
    /**
     * Performs group of changes on Editor specified.
     *
     * @since 2.9.0
     *
     * @param \WP_Image_Editor $image   WP_Image_Editor instance.
     * @param array $changes Array of change operations.
     * @return \WP_Image_Editor WP_Image_Editor instance with changes applied.
     */
    public function imageEditApplyChanges(\WP_Image_Editor $image, array $changes): \WP_Image_Editor;
}
