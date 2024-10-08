<?php

namespace WpService\Contracts;

interface GetBlogOption
{
    /**
     * Retrieves option value for a given blog id based on name of option.
     *
     * If the option does not exist or does not have a value, then the return value
     * will be false. This is useful to check whether you need to install an option
     * and is commonly used during installation of plugin options and to test
     * whether upgrading is required.
     *
     * If the option was serialized then it will be unserialized when it is returned.
     *
     * @since MU (3.0.0)
     *
     * @param int $id            A blog ID. Can be null to refer to the current blog.
     * @param string $option        Name of option to retrieve. Expected to not be SQL-escaped.
     * @param mixed $defaultValue Optional. Default value to return if the option does not exist.
     * @return mixed Value set for the option.
     */
    public function getBlogOption(int $id, string $option, mixed $defaultValue = false): mixed;
}
