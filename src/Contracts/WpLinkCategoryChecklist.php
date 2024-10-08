<?php

namespace WpService\Contracts;

interface WpLinkCategoryChecklist
{
    /**
     * Outputs a link category checklist element.
     *
     * @since 2.5.1
     *
     * @param int $linkId Optional. The link ID. Default 0.
     */
    public function wpLinkCategoryChecklist(int $linkId = 0): void;
}
