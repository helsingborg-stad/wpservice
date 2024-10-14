<?php

namespace WpService\Contracts;

interface WpPrivacyGeneratePersonalDataExportGroupHtml
{
/**
 * Generate a single group for the personal data export report.
 *
 * @since 4.9.6
 * @since 5.4.0 Added the `$group_id` and `$groups_count` parameters.
 *
 * @param array $groupData {
 *     The group data to render.
 *
 * @type string $group_label  The user-facing heading for the group, e.g. 'Comments'.
 * @type array  $items        {
 *         An array of group items.
 *
 * @type array  $group_item_data  {
 *             An array of name-value pairs for the item.
 *
 * @type string $name   The user-facing name of an item name-value pair, e.g. 'IP Address'.
 * @type string $value  The user-facing value of an item data pair, e.g. '50.60.70.0'.
 *         }
 *     }
 * }
 * @param string $groupId     The group identifier.
 * @param int $groupsCount The number of all groups
 * @return string The HTML for this group and its items.
 */
    public function wpPrivacyGeneratePersonalDataExportGroupHtml(array $groupData, string $groupId = '', int $groupsCount = 1): string;
}
