<?php

namespace WpService\Contracts;

interface XfnCheck
{
    /**
     * Displays 'checked' checkboxes attribute for XFN microformat options.
     *
     * @since 1.0.1
     *
     * @global object $link Current link object.
     *
     * @param string $xfnRelationship XFN relationship category. Possible values are:
     *                                 'friendship', 'physical', 'professional',
     *                                 'geographical', 'family', 'romantic', 'identity'.
     * @param string $xfnValue        Optional. The XFN value to mark as checked
     *                                 if it matches the current link's relationship.
     *                                 Default empty string.
     * @param mixed $deprecated       Deprecated. Not used.
     */
    public function xfnCheck(string $xfnRelationship, string $xfnValue = '', mixed $deprecated = ''): void;
}
