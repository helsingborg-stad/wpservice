<?php

namespace WpService\Contracts;

interface WpDeleteObjectTermRelationships
{
    /**
 * Unlinks the object from the taxonomy or taxonomies.
 *
 * Will remove all relationships between the object and any terms in
 * a particular taxonomy or taxonomies. Does not remove the term or
 * taxonomy itself.
 *
 * @since 2.3.0
 *
 * @param int $objectId  The term object ID that refers to the term.
 * @param string|array $taxonomies List of taxonomy names or single taxonomy name.
 */
    public function wpDeleteObjectTermRelationships(int $objectId, string|array $taxonomies): void;
}
