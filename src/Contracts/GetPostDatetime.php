<?php

namespace WpService\Contracts;

interface GetPostDatetime
{
    /**
 * Retrieves post published or modified time as a `DateTimeImmutable` object instance.
 *
 * The object will be set to the timezone from WordPress settings.
 *
 * For legacy reasons, this function allows to choose to instantiate from local or UTC time in database.
 * Normally this should make no difference to the result. However, the values might get out of sync in database,
 * typically because of timezone setting changes. The parameter ensures the ability to reproduce backwards
 * compatible behaviors in such cases.
 *
 * @since 5.3.0
 *
 * @param int|\WP_Post $post   Optional. Post ID or post object. Default is global `$post` object.
 * @param string $field  Optional. Published or modified time to use from database. Accepts 'date' or 'modified'.
 *                            Default 'date'.
 * @param string $source Optional. Local or UTC time to use from database. Accepts 'local' or 'gmt'.
 *                            Default 'local'.
 * @return \DateTimeImmutable|false Time object on success, false on failure.
 */
    public function getPostDatetime(int|\WP_Post $post, string $field, string $source): \DateTimeImmutable|false;
}
