<?php

namespace WpService\Contracts;

interface WpPlaylistScripts
{
    /**
     * Outputs and enqueues default scripts and styles for playlists.
     *
     * @since 3.9.0
     *
     * @param string $type Type of playlist. Accepts 'audio' or 'video'.
     */
    public function wpPlaylistScripts(string $type): void;
}
