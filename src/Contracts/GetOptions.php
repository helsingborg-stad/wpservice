<?php

namespace WpService\Contracts;

interface GetOptions
{
    /**
     * Retrieves multiple options.
     *
     * @param array $options An array of option names to retrieve.
     * @return array An array of option values.
     */
    public function getOptions(array $options = []): array;
}
