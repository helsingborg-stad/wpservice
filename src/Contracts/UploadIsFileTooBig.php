<?php

namespace WpService\Contracts;

interface UploadIsFileTooBig
{
    /**
     * Checks whether an upload is too big.
     *
     * @since MU (3.0.0)
     *
     * @param array $upload An array of information about the newly-uploaded file.
     * @return string|array If the upload is under the size limit, $upload is returned. Otherwise returns an error message.
     */
    public function uploadIsFileTooBig(array $upload): string|array;
}
