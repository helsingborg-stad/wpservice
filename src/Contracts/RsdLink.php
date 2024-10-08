<?php

namespace WpService\Contracts;

interface RsdLink
{
    /**
     * Displays the link to the Really Simple Discovery service endpoint.
     *
     * @link http://archipelago.phrasewise.com/rsd
     * @since 2.0.0
     */
    public function rsdLink(): void;
}
