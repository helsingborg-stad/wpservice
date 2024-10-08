<?php

namespace WpService\Contracts;

interface WpAjaxWpPrivacyErasePersonalData
{
    /**
 * Handles erasing personal data via AJAX.
 *
 * @since 4.9.6
 */
    public function wpAjaxWpPrivacyErasePersonalData(): void;
}
