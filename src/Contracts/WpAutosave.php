<?php

namespace WpService\Contracts;

interface WpAutosave
{
/**
 * Saves a post submitted with XHR.
 *
 * Intended for use with heartbeat and autosave.js
 *
 * @since 3.9.0
 *
 * @param array $postData Associative array of the submitted post data.
 * @return mixed The value 0 or WP_Error on failure. The saved post ID on success.
 *               The ID can be the draft post_id or the autosave revision post_id.
 */
    public function wpAutosave(array $postData): mixed;
}
