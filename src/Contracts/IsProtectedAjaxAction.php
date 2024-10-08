<?php

namespace WpService\Contracts;

interface IsProtectedAjaxAction
{
    /**
     * Determines whether we are currently handling an Ajax action that should be protected against WSODs.
     *
     * @since 5.2.0
     *
     * @return bool True if the current Ajax action should be protected.
     */
    public function isProtectedAjaxAction(): bool;
}
