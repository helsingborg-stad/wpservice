<?php

namespace WpService\Contracts;

interface AddBlogOption
{
    /**
 * Adds a new option for a given blog ID.
 *
 * You do not need to serialize values. If the value needs to be serialized, then
 * it will be serialized before it is inserted into the database. Remember,
 * resources can not be serialized or added as an option.
 *
 * You can create options without values and then update the values later.
 * Existing options will not be updated and checks are performed to ensure that you
 * aren't adding a protected WordPress option. Care should be taken to not name
 * options the same as the ones which are protected.
 *
 * @since MU (3.0.0)
 *
 * @param int $id     A blog ID. Can be null to refer to the current blog.
 * @param string $option Name of option to add. Expected to not be SQL-escaped.
 * @param mixed $value  Option value, can be anything. Expected to not be SQL-escaped.
 * @return bool True if the option was added, false otherwise.
 */
    public function addBlogOption(int $id, string $option, mixed $value): bool;
}
