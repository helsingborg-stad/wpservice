<?php

namespace WpService\Contracts;

/**
 * Get the attached file.
 * 
 * @param int  $attachmentId The attachment ID.
 * @param bool $unfiltered  Optional. If true, filters are not run. Default false.
 * 
 * @return string|bool The attached file or false on failure.
 */
interface GetAttachedFile
{
    public function getAttachedFile(
        int $attachmentId,
        bool $unfiltered = false
    ): string|bool;
}
