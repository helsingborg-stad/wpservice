<?php

namespace WpService\Contracts;

interface GetAttachmentTemplate
{
/**
 * Retrieves path of attachment template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. {mime_type}-{sub_type}.php
 * 2. {sub_type}.php
 * 3. {mime_type}.php
 * 4. attachment.php
 *
 * An example of this is:
 *
 * 1. image-jpeg.php
 * 2. jpeg.php
 * 3. image.php
 * 4. attachment.php
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'attachment'.
 *
 * @since 2.0.0
 * @since 4.3.0 The order of the mime type logic was reversed so the hierarchy is more logical.
 *
 * @see get_query_template()
 *
 * @return string Full path to attachment template file.
 */
    public function getAttachmentTemplate(): string;
}
