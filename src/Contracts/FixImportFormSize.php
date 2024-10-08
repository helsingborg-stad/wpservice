<?php

namespace WpService\Contracts;

interface FixImportFormSize
{
    /**
     * Gets the remaining upload space for this site.
     *
     * @since MU (3.0.0)
     *
     * @param int $size Current max size in bytes.
     * @return int Max size in bytes.
     */
    public function fixImportFormSize(int $size): int;
}
