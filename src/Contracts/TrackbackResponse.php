<?php

namespace WpService\Contracts;

interface TrackbackResponse
{
    /**
 * Response to a trackback.
 *
 * Responds with an error or success XML message.
 *
 * @since 0.71
 *
 * @param int|bool $error         Whether there was an error.
 *                                Default '0'. Accepts '0' or '1', true or false.
 * @param string $errorMessage Error message if an error occurred. Default empty string.
 */
    public function trackbackResponse(int|bool $error = 0, string $errorMessage = ''): void;
}
