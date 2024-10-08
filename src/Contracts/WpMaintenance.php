<?php

namespace WpService\Contracts;

interface WpMaintenance
{
    /**
 * Dies with a maintenance message when conditions are met.
 *
 * The default message can be replaced by using a drop-in (maintenance.php in
 * the wp-content directory).
 *
 * @since 3.0.0
 * @access private
 */
    public function wpMaintenance(): void;
}
