<?php

namespace WpService\Contracts;

interface GetSitestats
{
    /**
     * Gets the network's site and user counts.
     *
     * @since MU (3.0.0)
     *
     * @return int[] {
     *     Site and user count for the network.
     *
     * @type int $blogs Number of sites on the network.
     * @type int $users Number of users on the network.
     * }
     */
    public function getSitestats(): array;
}
