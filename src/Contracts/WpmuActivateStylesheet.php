<?php

namespace WpService\Contracts;

interface WpmuActivateStylesheet
{
    /**
 * Loads styles specific to this page.
 *
 * @since MU (3.0.0)
 */
    public function wpmuActivateStylesheet(): void;
}
