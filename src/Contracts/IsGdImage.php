<?php

namespace WpService\Contracts;

interface IsGdImage
{
    /**
     * Determines whether the value is an acceptable type for GD image functions.
     *
     * In PHP 8.0, the GD extension uses GdImage objects for its data structures.
     * This function checks if the passed value is either a GdImage object instance
     * or a resource of type `gd`. Any other type will return false.
     *
     * @since 5.6.0
     *
     * @param \resource|\GdImage|false $image A value to check the type for.
     * @return bool True if `$image` is either a GD image resource or a GdImage instance,
     *              false otherwise.
     */
    public function isGdImage(\resource|\GdImage|false $image): bool;
}
