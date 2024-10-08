<?php

namespace WpService\Contracts;

interface DefaultTopicCountScale
{
    /**
     * Default topic count scaling for tag links.
     *
     * @since 2.9.0
     *
     * @param int $count Number of posts with that tag.
     * @return int Scaled count.
     */
    public function defaultTopicCountScale(int $count): int;
}
