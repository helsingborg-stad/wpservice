<?php

namespace WpService\Contracts;

interface GetArchivesLink
{
    /**
 * Retrieves archive link content based on predefined or custom code.
 *
 * The format can be one of four styles. The 'link' for head element, 'option'
 * for use in the select element, 'html' for use in list (either ol or ul HTML
 * elements). Custom content is also supported using the before and after
 * parameters.
 *
 * The 'link' format uses the `<link>` HTML element with the **archives**
 * relationship. The before and after parameters are not used. The text
 * parameter is used to describe the link.
 *
 * The 'option' format uses the option HTML element for use in select element.
 * The value is the url parameter and the before and after parameters are used
 * between the text description.
 *
 * The 'html' format, which is the default, uses the li HTML element for use in
 * the list HTML elements. The before parameter is before the link and the after
 * parameter is after the closing link.
 *
 * The custom format uses the before parameter before the link ('a' HTML
 * element) and the after parameter after the closing link tag. If the above
 * three values for the format are not used, then custom format is assumed.
 *
 * @since 1.0.0
 * @since 5.2.0 Added the `$selected` parameter.
 *
 * @param string $url      URL to archive.
 * @param string $text     Archive text description.
 * @param string $format   Optional. Can be 'link', 'option', 'html', or custom. Default 'html'.
 * @param string $before   Optional. Content to prepend to the description. Default empty.
 * @param string $after    Optional. Content to append to the description. Default empty.
 * @param bool $selected Optional. Set to true if the current page is the selected archive page.
 * @return string HTML link content for archive.
 */
    public function getArchivesLink(string $url, string $text, string $format, string $before, string $after, bool $selected): string;
}
