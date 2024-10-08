<?php

namespace WpService\Contracts;

interface WpPageReloadOnBackButtonJs
{
    /**
 * Outputs JS that reloads the page if the user navigated to it with the Back or Forward button.
 *
 * Used on the Edit Post and Add New Post screens. Needed to ensure the page is not loaded from browser cache,
 * so the post title and editor content are the last saved versions. Ideally this script should run first in the head.
 *
 * @since 4.6.0
 */
    public function wpPageReloadOnBackButtonJs(): void;
}