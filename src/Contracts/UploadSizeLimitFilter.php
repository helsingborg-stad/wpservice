<?php

namespace WpService\Contracts;

interface UploadSizeLimitFilter
{
    /**
     * Filters the maximum upload file size allowed, in bytes.
     *
     * @since 3.0.0
     *
     * @param int $size Upload size limit in bytes.
     * @return int Upload size limit in bytes.
     */
    public function uploadSizeLimitFilter(int $size): int;
}
