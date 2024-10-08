<?php

namespace WpService\Contracts;

interface RestParseEmbedParam
{
    /**
 * Parses the "_embed" parameter into the list of resources to embed.
 *
 * @since 5.4.0
 *
 * @param string|array $embed Raw "_embed" parameter value.
 * @return true|string[] Either true to embed all embeds, or a list of relations to embed.
 */
    public function restParseEmbedParam(string|array $embed): true|array;
}
