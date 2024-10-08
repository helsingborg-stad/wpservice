<?php

namespace WpService\Contracts;

interface CompressionTest
{
    /**
 * Tests support for compressing JavaScript from PHP.
 *
 * Outputs JavaScript that tests if compression from PHP works as expected
 * and sets an option with the result. Has no effect when the current user
 * is not an administrator. To run the test again the option 'can_compress_scripts'
 * has to be deleted.
 *
 * @since 2.8.0
 */
    public function compressionTest(): void;
}
