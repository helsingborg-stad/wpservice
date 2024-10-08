<?php

namespace WpService\Contracts;

interface PrintEmbedSharingDialog
{
    /**
     * Prints the necessary markup for the embed sharing dialog.
     *
     * @since 4.4.0
     */
    public function printEmbedSharingDialog(): void;
}
