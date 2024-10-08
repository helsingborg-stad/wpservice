<?php

namespace WpService\Contracts;

interface WpGetAudioExtensions
{
    /**
     * Returns a filtered list of supported audio formats.
     *
     * @since 3.6.0
     *
     * @return string[] Supported audio formats.
     */
    public function wpGetAudioExtensions(): array;
}
