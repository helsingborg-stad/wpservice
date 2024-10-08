<?php

namespace WpService\Contracts;

interface MediaUploadTextAfter
{
    /**
     * Used to display a "After a file has been uploaded..." help message.
     *
     * @since 3.3.0
     */
    public function mediaUploadTextAfter(): void;
}
