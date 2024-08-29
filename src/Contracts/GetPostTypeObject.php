<?php

namespace WpService\Contracts;

use WP_Post_Type;

interface GetPostTypeObject
{
    public function getPostTypeObject(string $postType): ?WP_Post_Type;
}
