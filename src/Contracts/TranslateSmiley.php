<?php

namespace WpService\Contracts;

interface TranslateSmiley
{
    /**
     * Converts one smiley code to the icon graphic file equivalent.
     *
     * Callback handler for convert_smilies().
     *
     * Looks up one smiley code in the $wpsmiliestrans global array and returns an
     * `<img>` string for that smiley.
     *
     * @since 2.8.0
     *
     * @global array $wpsmiliestrans
     *
     * @param array $matches Single match. Smiley code to convert to image.
     * @return string Image string for smiley.
     */
    public function translateSmiley(array $matches): string;
}
