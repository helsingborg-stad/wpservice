<?php

namespace WpService\Contracts;

interface GalleryShortcode
{
/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 * @since 2.8.0 Added the `$attr` parameter to set the shortcode output. New attributes included
 *              such as `size`, `itemtag`, `icontag`, `captiontag`, and columns. Changed markup from
 *              `div` tags to `dl`, `dt` and `dd` tags. Support more than one gallery on the
 *              same page.
 * @since 2.9.0 Added support for `include` and `exclude` to shortcode.
 * @since 3.5.0 Use get_post() instead of global `$post`. Handle mapping of `ids` to `include`
 *              and `orderby`.
 * @since 3.6.0 Added validation for tags used in gallery shortcode. Add orientation information to items.
 * @since 3.7.0 Introduced the `link` attribute.
 * @since 3.9.0 `html5` gallery support, accepting 'itemtag', 'icontag', and 'captiontag' attributes.
 * @since 4.0.0 Removed use of `extract()`.
 * @since 4.1.0 Added attribute to `wp_get_attachment_link()` to output `aria-describedby`.
 * @since 4.2.0 Passed the shortcode instance ID to `post_gallery` and `post_playlist` filters.
 * @since 4.6.0 Standardized filter docs to match documentation standards for PHP.
 * @since 5.1.0 Code cleanup for WPCS 1.0.0 coding standards.
 * @since 5.3.0 Saved progress of intermediate image creation after upload.
 * @since 5.5.0 Ensured that galleries can be output as a list of links in feeds.
 * @since 5.6.0 Replaced order-style PHP type conversion functions with typecasts. Fix logic for
 *              an array of image dimensions.
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 * @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 * @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 * @type int          $id         Post ID.
 * @type string       $itemtag    HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 * @type string       $icontag    HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 * @type string       $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 * @type int          $columns    Number of columns of images to display. Default 3.
 * @type string|int[] $size       Size of the images to display. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'thumbnail'.
 * @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 * @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 * @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 * @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
    public function galleryShortcode(array $attr): string;
}
