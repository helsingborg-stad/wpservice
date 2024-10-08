<?php

namespace WpService\Contracts;

interface PrintEmbedCommentsButton
{
    /**
     * Prints the necessary markup for the embed comments button.
     *
     * @since 4.4.0
     */
    public function printEmbedCommentsButton(): void;
}
