<?php

namespace WpService\Contracts;

interface WpUnderscoreAudioTemplate
{
    /**
 * Outputs the markup for an audio tag to be used in an Underscore template
 * when data.model is passed.
 *
 * @since 3.9.0
 */
    public function wpUnderscoreAudioTemplate(): void;
}
