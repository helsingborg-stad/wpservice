<?php

namespace WpService\Contracts;

interface WpCreditsSectionList
{
    /**
     * Displays a list of contributors for a given group.
     *
     * @since 5.3.0
     *
     * @param array $credits The credits groups returned from the API.
     * @param string $slug    The current group to display.
     */
    public function wpCreditsSectionList(array $credits = [], string $slug = ''): void;
}
