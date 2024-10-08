<?php

namespace WpService\Contracts;

interface WpCreditsSectionTitle
{
    /**
 * Displays the title for a given group of contributors.
 *
 * @since 5.3.0
 *
 * @param array $groupData The current contributor group.
 */
    public function wpCreditsSectionTitle(array $groupData): void;
}
