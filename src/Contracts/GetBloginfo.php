<?php

namespace WpService\Contracts;

interface GetBloginfo
{
    /**
     * Retrieves the requested bloginfo value.
     *
     * @param string $show The parameter to retrieve.
     * @param string $filter Optional. How to filter the parameter. Default 'raw'.
     * @return string The requested bloginfo value.
     */
    public function getBloginfo(string $show, string $filter = 'raw'): string;
}
