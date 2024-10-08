<?php

namespace WpService\Contracts;

interface ConvertToScreen
{
    /**
 * Converts a screen string to a screen object.
 *
 * @since 3.0.0
 *
 * @param string $hookName The hook name (also known as the hook suffix) used to determine the screen.
 * @return \WP_Screen Screen object.
 */
    public function convertToScreen(string $hookName): \WP_Screen;
}
