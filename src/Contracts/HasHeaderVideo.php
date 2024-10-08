<?php

namespace WpService\Contracts;

interface HasHeaderVideo
{
    /**
     * Checks whether a header video is set or not.
     *
     * @since 4.7.0
     *
     * @see get_header_video_url()
     *
     * @return bool Whether a header video is set or not.
     */
    public function hasHeaderVideo(): bool;
}
