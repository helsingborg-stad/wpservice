<?php

namespace WpService\Contracts;

interface XmlrpcGetpostcategory
{
/**
 * Retrieves the post category or categories from XML-RPC XML.
 *
 * If the `category` element is not found in the XML, the default post category
 * from the `$post_default_category` global will be used instead.
 * The return type will then be a string.
 *
 * If the `category` element is found, the return type will be an array.
 *
 * @since 0.71
 *
 * @global string $post_default_category Default XML-RPC post category.
 *
 * @param string $content XML-RPC XML Request content.
 * @return string[]|string An array of category names or default category name.
 */
    public function xmlrpcGetpostcategory(string $content): array|string;
}
