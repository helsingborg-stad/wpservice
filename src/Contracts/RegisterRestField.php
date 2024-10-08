<?php

namespace WpService\Contracts;

interface RegisterRestField
{
    /**
 * Registers a new field on an existing WordPress object type.
 *
 * @since 4.7.0
 *
 * @global array $wp_rest_additional_fields Holds registered fields, organized
 *                                          by object type.
 *
 * @param string|array $objectType Object(s) the field is being registered to,
 *                                  "post"|"term"|"comment" etc.
 * @param string $attribute   The attribute name.
 * @param array $args {
 *     Optional. An array of arguments used to handle the registered field.
 *
 *     @type callable|null $get_callback    Optional. The callback function used to retrieve the field value. Default is
 *                                          'null', the field will not be returned in the response. The function will
 *                                          be passed the prepared object data.
 *     @type callable|null $update_callback Optional. The callback function used to set and update the field value. Default
 *                                          is 'null', the value cannot be set or updated. The function will be passed
 *                                          the model object, like WP_Post.
 *     @type array|null $schema             Optional. The schema for this field.
 *                                          Default is 'null', no schema entry will be returned.
 * }
 */
    public function registerRestField(string|array $objectType, string $attribute, array $args = []): void;
}
