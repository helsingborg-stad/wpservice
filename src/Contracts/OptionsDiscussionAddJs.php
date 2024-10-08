<?php

namespace WpService\Contracts;

interface OptionsDiscussionAddJs
{
    /**
 * Output JavaScript to toggle display of additional settings if avatars are disabled.
 *
 * @since 4.2.0
 */
    public function optionsDiscussionAddJs(): void;
}