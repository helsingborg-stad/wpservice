<?php

namespace WpService\Contracts;

interface XmlrpcGetposttitle
{
/**
 * Retrieves post title from XML-RPC XML.
 *
 * If the `title` element is not found in the XML, the default post title
 * from the `$post_default_title` global will be used instead.
 *
 * @since 0.71
 *
 * @global string $post_default_title Default XML-RPC post title.
 *
 * @param string $content XML-RPC XML Request content.
 * @return string Post title.
 */
    public function xmlrpcGetposttitle(string $content): string;
}
