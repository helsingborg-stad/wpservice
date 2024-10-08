<?php

namespace WpService\Contracts;

interface RestIsFieldIncluded
{
    /**
 * Given an array of fields to include in a response, some of which may be
 * `nested.fields`, determine whether the provided field should be included
 * in the response body.
 *
 * If a parent field is passed in, the presence of any nested field within
 * that parent will cause the method to return `true`. For example "title"
 * will return true if any of `title`, `title.raw` or `title.rendered` is
 * provided.
 *
 * @since 5.3.0
 *
 * @param string $field  A field to test for inclusion in the response body.
 * @param array $fields An array of string fields supported by the endpoint.
 * @return bool Whether to include the field or not.
 */
    public function restIsFieldIncluded(string $field, array $fields): bool;
}
