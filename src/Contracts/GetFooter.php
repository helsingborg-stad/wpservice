<?php

namespace WpService\Contracts;

interface GetFooter
{
    /**
 * Loads footer template.
 *
 * Includes the footer template for a theme or if a name is specified then a
 * specialized footer will be included.
 *
 * For the parameter, if the file is called "footer-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 * @since 5.5.0 A return value was added.
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @param string $name The name of the specialized footer.
 * @param array $args Optional. Additional arguments passed to the footer template.
 *                     Default empty array.
 * @return void|false Void on success, false if the template does not exist.
 */
    public function getFooter(string $name = null, array $args = []): mixed;
}
