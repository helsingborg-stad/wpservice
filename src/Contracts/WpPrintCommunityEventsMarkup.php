<?php

namespace WpService\Contracts;

interface WpPrintCommunityEventsMarkup
{
/**
 * Prints the markup for the Community Events section of the Events and News Dashboard widget.
 *
 * @since 4.8.0
 */
    public function wpPrintCommunityEventsMarkup(): void;
}
