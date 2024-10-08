<?php

namespace WpService\Contracts;

interface WpPrepareAttachmentForJs
{
    /**
 * Prepares an attachment post object for JS, where it is expected
 * to be JSON-encoded and fit into an Attachment model.
 *
 * @since 3.5.0
 *
 * @param int|\WP_Post $attachment Attachment ID or object.
 * @return array|void {
 *     Array of attachment details, or void if the parameter does not correspond to an attachment.
 *
 *     @type string $alt                   Alt text of the attachment.
 *     @type string $author                ID of the attachment author, as a string.
 *     @type string $authorName            Name of the attachment author.
 *     @type string $caption               Caption for the attachment.
 *     @type array  $compat                Containing item and meta.
 *     @type string $context               Context, whether it's used as the site icon for example.
 *     @type int    $date                  Uploaded date, timestamp in milliseconds.
 *     @type string $dateFormatted         Formatted date (e.g. June 29, 2018).
 *     @type string $description           Description of the attachment.
 *     @type string $editLink              URL to the edit page for the attachment.
 *     @type string $filename              File name of the attachment.
 *     @type string $filesizeHumanReadable Filesize of the attachment in human readable format (e.g. 1 MB).
 *     @type int    $filesizeInBytes       Filesize of the attachment in bytes.
 *     @type int    $height                If the attachment is an image, represents the height of the image in pixels.
 *     @type string $icon                  Icon URL of the attachment (e.g. /wp-includes/images/media/archive.png).
 *     @type int    $id                    ID of the attachment.
 *     @type string $link                  URL to the attachment.
 *     @type int    $menuOrder             Menu order of the attachment post.
 *     @type array  $meta                  Meta data for the attachment.
 *     @type string $mime                  Mime type of the attachment (e.g. image/jpeg or application/zip).
 *     @type int    $modified              Last modified, timestamp in milliseconds.
 *     @type string $name                  Name, same as title of the attachment.
 *     @type array  $nonces                Nonces for update, delete and edit.
 *     @type string $orientation           If the attachment is an image, represents the image orientation
 *                                         (landscape or portrait).
 *     @type array  $sizes                 If the attachment is an image, contains an array of arrays
 *                                         for the images sizes: thumbnail, medium, large, and full.
 *     @type string $status                Post status of the attachment (usually 'inherit').
 *     @type string $subtype               Mime subtype of the attachment (usually the last part, e.g. jpeg or zip).
 *     @type string $title                 Title of the attachment (usually slugified file name without the extension).
 *     @type string $type                  Type of the attachment (usually first part of the mime type, e.g. image).
 *     @type int    $uploadedTo            Parent post to which the attachment was uploaded.
 *     @type string $uploadedToLink        URL to the edit page of the parent post of the attachment.
 *     @type string $uploadedToTitle       Post title of the parent of the attachment.
 *     @type string $url                   Direct URL to the attachment file (from wp-content).
 *     @type int    $width                 If the attachment is an image, represents the width of the image in pixels.
 * }
 *
 */
public function wpPrepareAttachmentForJs(int|\WP_Post $attachment): array;
}
