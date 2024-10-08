<?php

namespace WpService\Contracts;

interface GetUsers
{
    /**
 * Retrieves list of users matching criteria.
 *
 * @since 3.1.0
 *
 * @see WP_User_Query
 *
 * @param array $args Optional. Arguments to retrieve users. See WP_User_Query::prepare_query()
 *                    for more information on accepted arguments.
 * @return array List of users.
 */
    public function getUsers(array $args = []): array;
}
