<?php

namespace WpService\Contracts;

interface RenderBlockCoreCalendar
{
    /**
     * Renders the `core/calendar` block on server.
     *
     * @since 5.2.0
     *
     * @global int $monthnum.
     * @global int $year.
     *
     * @param array $attributes The block attributes.
     *
     * @return string Returns the block content.
     */
    public function renderBlockCoreCalendar(array $attributes): string;
}
