<?php

namespace WpService\Contracts;

interface WpTimezoneOverrideOffset
{
    /**
     * Modifies gmt_offset for smart timezone handling.
     *
     * Overrides the gmt_offset option if we have a timezone_string available.
     *
     * @since 2.8.0
     *
     * @return float|false Timezone GMT offset, false otherwise.
     */
    public function wpTimezoneOverrideOffset(): float|false;
}
