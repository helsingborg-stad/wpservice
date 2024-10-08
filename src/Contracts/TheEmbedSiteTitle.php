<?php

namespace WpService\Contracts;

interface TheEmbedSiteTitle
{
    /**
 * Prints the necessary markup for the site title in an embed template.
 *
 * @since 4.5.0
 */
    public function theEmbedSiteTitle(): void;
}
