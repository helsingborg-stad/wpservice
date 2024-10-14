<?php

namespace WpService\Contracts;

interface WpUnderscoreVideoTemplate
{
/**
 * Outputs the markup for a video tag to be used in an Underscore template
 * when data.model is passed.
 *
 * @since 3.9.0
 */
    public function wpUnderscoreVideoTemplate(): void;
}
