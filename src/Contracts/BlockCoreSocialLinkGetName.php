<?php

namespace WpService\Contracts;

interface BlockCoreSocialLinkGetName
{
    /**
     * Returns the brand name for social link.
     *
     * @since 5.4.0
     *
     * @param string $service The service icon.
     *
     * @return string Brand label.
     */
    public function blockCoreSocialLinkGetName(string $service): string;
}
