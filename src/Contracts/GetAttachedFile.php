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
    /**
     * Retrieves attached file path based on attachment ID.
     *
     * By default the path will go through the {@see 'get_attached_file'} filter, but
     * passing `true` to the `$unfiltered` argument will return the file path unfiltered.
     *
     * The function works by retrieving the `_wp_attached_file` post meta value.
     * This is a convenience function to prevent looking up the meta name and provide
     * a mechanism for sending the attached filename through a filter.
     *
     * @param int  $attachmentId Attachment ID.
     * @param bool $unfiltered    Optional. Whether to skip the {@see 'get_attached_file'} filter.
     *                            Default false.
     * @return string|false The file path to where the attached file should be, false otherwise.
     */
    public function getAttachedFile(
        int $attachmentId,
        bool $unfiltered = false
    ): string|false;
}
