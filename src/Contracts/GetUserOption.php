<?php

namespace WpService\Contracts;

interface GetUserOption
{
    /**
     * Retrieves user option that can be either per Site or per Network.
     *
     * If the user ID is not given, then the current user will be used instead. If
     * the user ID is given, then the user data will be retrieved. The filter for
     * the result, will also pass the original option name and finally the user data
     * object as the third parameter.
     *
     * The option will first check for the per site name and then the per Network name.
     *
     * @since 2.0.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param string $option     User option name.
     * @param int $user       Optional. User ID.
     * @param string $deprecated Use get_option() to check for an option in the options table.
     * @return mixed User option value on success, false on failure.
     */
    public function getUserOption(string $option, int $user = 0, string $deprecated = ''): mixed;
}
