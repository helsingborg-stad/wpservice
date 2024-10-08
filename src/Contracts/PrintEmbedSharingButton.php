<?php

namespace WpService\Contracts;

interface PrintEmbedSharingButton
{
    /**
     * Prints the necessary markup for the embed sharing button.
     *
     * @since 4.4.0
     */
    public function printEmbedSharingButton(): void;
}
