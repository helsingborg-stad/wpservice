<?php

namespace WpService\Contracts;

interface PrintEmbedScripts
{
/**
 * Prints the JavaScript in the embed iframe header.
 *
 * @since 4.4.0
 */
    public function printEmbedScripts(): void;
}
