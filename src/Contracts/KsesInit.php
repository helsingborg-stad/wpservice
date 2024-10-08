<?php

namespace WpService\Contracts;

interface KsesInit
{
    /**
     * Sets up most of the KSES filters for input form content.
     *
     * First removes all of the KSES filters in case the current user does not need
     * to have KSES filter the content. If the user does not have `unfiltered_html`
     * capability, then KSES filters are added.
     *
     * @since 2.0.0
     */
    public function ksesInit(): void;
}
