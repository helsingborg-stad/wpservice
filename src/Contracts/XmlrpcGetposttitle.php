<?php

namespace WpService\Contracts;

interface XmlrpcGetposttitle
{
    /**
 * Retrieves post title from XMLRPC XML.
 *
 * If the title element is not part of the XML, then the default post title from
 * the $post_default_title will be used instead.
 *
 * @since 0.71
 *
 * @global string $post_default_title Default XML-RPC post title.
 *
 * @param string $content XMLRPC XML Request content
 * @return string Post title
 */
    public function xmlrpcGetposttitle(string $content): string;
}
