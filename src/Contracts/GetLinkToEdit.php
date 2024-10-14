<?php

namespace WpService\Contracts;

interface GetLinkToEdit
{
/**
 * Retrieves link data based on its ID.
 *
 * @since 2.0.0
 *
 * @param int|\stdClass $link Link ID or object to retrieve.
 * @return object Link object for editing.
 */
    public function getLinkToEdit(int|\stdClass $link): object;
}
