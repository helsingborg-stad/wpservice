<?php

namespace WpService\Contracts;

interface WpKsesHair
{
/**
 * Builds an attribute list from string containing attributes.
 *
 * This function does a lot of work. It parses an attribute list into an array
 * with attribute data, and tries to do the right thing even if it gets weird
 * input. It will add quotes around attribute values that don't have any quotes
 * or apostrophes around them, to make it easier to produce HTML code that will
 * conform to W3C's HTML specification. It will also remove bad URL protocols
 * from attribute values. It also reduces duplicate attributes by using the
 * attribute defined first (`foo='bar' foo='baz'` will result in `foo='bar'`).
 *
 * @since 1.0.0
 *
 * @param string $attr              Attribute list from HTML element to closing HTML element tag.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 * @return array[] Array of attribute information after parsing.
 */
    public function wpKsesHair(string $attr, array $allowedProtocols): array;
}
