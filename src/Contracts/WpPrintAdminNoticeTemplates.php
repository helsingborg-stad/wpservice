<?php

namespace WpService\Contracts;

interface WpPrintAdminNoticeTemplates
{
    /**
 * Prints the JavaScript templates for update admin notices.
 *
 * @since 4.6.0
 *
 * Template takes one argument with four values:
 *
 *     param {object} data {
 *         Arguments for admin notice.
 *
 *         @type string id        ID of the notice.
 *         @type string className Class names for the notice.
 *         @type string message   The notice's message.
 *         @type string type      The type of update the notice is for. Either 'plugin' or 'theme'.
 *     }
 */
    public function wpPrintAdminNoticeTemplates(): void;
}
