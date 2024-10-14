<?php

namespace WpService\Contracts;

interface GetTaxonomyLabels
{
/**
 * Builds an object with all taxonomy labels out of a taxonomy object.
 *
 * @since 3.0.0
 * @since 4.3.0 Added the `no_terms` label.
 * @since 4.4.0 Added the `items_list_navigation` and `items_list` labels.
 * @since 4.9.0 Added the `most_used` and `back_to_items` labels.
 * @since 5.7.0 Added the `filter_by_item` label.
 * @since 5.8.0 Added the `item_link` and `item_link_description` labels.
 * @since 5.9.0 Added the `name_field_description`, `slug_field_description`,
 *              `parent_field_description`, and `desc_field_description` labels.
 * @since 6.6.0 Added the `template_name` label.
 *
 * @param \WP_Taxonomy $tax Taxonomy object.
 * @return object {
 *     Taxonomy labels object. The first default value is for non-hierarchical taxonomies
 *     (like tags) and the second one is for hierarchical taxonomies (like categories).
 *
 * @type string $name                       General name for the taxonomy, usually plural. The same
 *                                              as and overridden by `$tax->label`. Default 'Tags'/'Categories'.
 * @type string $singular_name              Name for one object of this taxonomy. Default 'Tag'/'Category'.
 * @type string $search_items               Default 'Search Tags'/'Search Categories'.
 * @type string $popular_items              This label is only used for non-hierarchical taxonomies.
 *                                              Default 'Popular Tags'.
 * @type string $all_items                  Default 'All Tags'/'All Categories'.
 * @type string $parent_item                This label is only used for hierarchical taxonomies. Default
 *                                              'Parent Category'.
 * @type string $parent_item_colon          The same as `parent_item`, but with colon `:` in the end.
 * @type string $name_field_description     Description for the Name field on Edit Tags screen.
 *                                              Default 'The name is how it appears on your site'.
 * @type string $slug_field_description     Description for the Slug field on Edit Tags screen.
 *                                              Default 'The &#8220;slug&#8221; is the URL-friendly version
 *                                              of the name. It is usually all lowercase and contains
 *                                              only letters, numbers, and hyphens'.
 * @type string $parent_field_description   Description for the Parent field on Edit Tags screen.
 *                                              Default 'Assign a parent term to create a hierarchy.
 *                                              The term Jazz, for example, would be the parent
 *                                              of Bebop and Big Band'.
 * @type string $desc_field_description     Description for the Description field on Edit Tags screen.
 *                                              Default 'The description is not prominent by default;
 *                                              however, some themes may show it'.
 * @type string $edit_item                  Default 'Edit Tag'/'Edit Category'.
 * @type string $view_item                  Default 'View Tag'/'View Category'.
 * @type string $update_item                Default 'Update Tag'/'Update Category'.
 * @type string $add_new_item               Default 'Add New Tag'/'Add New Category'.
 * @type string $new_item_name              Default 'New Tag Name'/'New Category Name'.
 * @type string $template_name              Default 'Tag Archives'/'Category Archives'.
 * @type string $separate_items_with_commas This label is only used for non-hierarchical taxonomies. Default
 *                                              'Separate tags with commas', used in the meta box.
 * @type string $add_or_remove_items        This label is only used for non-hierarchical taxonomies. Default
 *                                              'Add or remove tags', used in the meta box when JavaScript
 *                                              is disabled.
 * @type string $choose_from_most_used      This label is only used on non-hierarchical taxonomies. Default
 *                                              'Choose from the most used tags', used in the meta box.
 * @type string $not_found                  Default 'No tags found'/'No categories found', used in
 *                                              the meta box and taxonomy list table.
 * @type string $no_terms                   Default 'No tags'/'No categories', used in the posts and media
 *                                              list tables.
 * @type string $filter_by_item             This label is only used for hierarchical taxonomies. Default
 *                                              'Filter by category', used in the posts list table.
 * @type string $items_list_navigation      Label for the table pagination hidden heading.
 * @type string $items_list                 Label for the table hidden heading.
 * @type string $most_used                  Title for the Most Used tab. Default 'Most Used'.
 * @type string $back_to_items              Label displayed after a term has been updated.
 * @type string $item_link                  Used in the block editor. Title for a navigation link block variation.
 *                                              Default 'Tag Link'/'Category Link'.
 * @type string $item_link_description      Used in the block editor. Description for a navigation link block
 *                                              variation. Default 'A link to a tag'/'A link to a category'.
 * }
 */
    public function getTaxonomyLabels(\WP_Taxonomy $tax): object;
}
