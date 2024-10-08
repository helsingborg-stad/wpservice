<?php

namespace WpService\Contracts;

interface CreateInitialPostTypes
{
    /**
 * Creates the initial post types when 'init' action is fired.
 *
 * See {@see 'init'}.
 *
 * @since 2.9.0
 */
    public function createInitialPostTypes(): void;
}
