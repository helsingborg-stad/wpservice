<?php

namespace WpService\Contracts;

interface ShowMessage
{
    /**
     * Displays the given administration message.
     *
     * @since 2.1.0
     *
     * @param string|\WP_Error $message
     */
    public function showMessage(string|\WP_Error $message): void;
}
