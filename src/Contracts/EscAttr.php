<?php

namespace WpService\Contracts;

interface EscAttr
{
    /**
     * Escaping for HTML attributes.
     *
     * @since 2.8.0
     *
     * @param string $text
     * @return string
     */
    public function escAttr(string $text): string;
}
