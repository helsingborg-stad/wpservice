<?php

namespace WpService\Contracts;

interface SetCurrentScreen
{
    /**
 * Set the current screen object
 *
 * @since 3.0.0
 *
 * @param string|\WP_Screen $hookName Optional. The hook name (also known as the hook suffix) used to determine the screen,
 *                                    or an existing screen object.
 */
    public function setCurrentScreen(string|\WP_Screen $hookName = ''): void;
}
