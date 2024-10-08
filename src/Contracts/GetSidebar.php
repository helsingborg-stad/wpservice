<?php

namespace WpService\Contracts;

interface GetSidebar
{
    /**
 * Loads sidebar template.
 *
 * Includes the sidebar template for a theme or if a name is specified then a
 * specialized sidebar will be included.
 *
 * For the parameter, if the file is called "sidebar-special.php" then specify
 * "special".
 *
 * @since 1.5.0
 * @since 5.5.0 A return value was added.
 * @since 5.5.0 The `$args` parameter was added.
 *
 * @param string $name The name of the specialized sidebar.
 * @param array $args Optional. Additional arguments passed to the sidebar template.
 *                     Default empty array.
 * @return void|false Void on success, false if the template does not exist.
 */
    public function getSidebar(string $name = null, array $args = []): mixed;
}
