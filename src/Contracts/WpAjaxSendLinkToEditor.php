<?php

namespace WpService\Contracts;

interface WpAjaxSendLinkToEditor
{
    /**
 * Handles sending a link to the editor via AJAX.
 *
 * Generates the HTML to send a non-image embed link to the editor.
 *
 * Backward compatible with the following filters:
 * - file_send_to_editor_url
 * - audio_send_to_editor_url
 * - video_send_to_editor_url
 *
 * @since 3.5.0
 *
 * @global WP_Post  $post     Global post object.
 * @global WP_Embed $wp_embed WordPress Embed object.
 */
    public function wpAjaxSendLinkToEditor(): void;
}
