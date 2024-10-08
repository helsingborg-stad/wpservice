<?php

namespace WpService\Contracts;

interface WpCommentFormUnfilteredHtmlNonce
{
    /**
     * Displays form token for unfiltered comments.
     *
     * Will only display nonce token if the current user has permissions for
     * unfiltered html. Won't display the token for other users.
     *
     * The function was backported to 2.0.10 and was added to versions 2.1.3 and
     * above. Does not exist in versions prior to 2.0.10 in the 2.0 branch and in
     * the 2.1 branch, prior to 2.1.3. Technically added in 2.2.0.
     *
     * Backported to 2.0.10.
     *
     * @since 2.1.3
     */
    public function wpCommentFormUnfilteredHtmlNonce(): void;
}
