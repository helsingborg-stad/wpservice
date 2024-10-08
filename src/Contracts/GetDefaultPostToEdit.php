<?php

namespace WpService\Contracts;

interface GetDefaultPostToEdit
{
    /**
 * Returns default post information to use when populating the "Write Post" form.
 *
 * @since 2.0.0
 *
 * @param string $postType    Optional. A post type string. Default 'post'.
 * @param bool $createInDb Optional. Whether to insert the post into database. Default false.
 * @return \WP_Post Post object containing all the default post data as attributes
 */
    public function getDefaultPostToEdit(string $postType, bool $createInDb): \WP_Post;
}
