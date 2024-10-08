<?php

namespace WpService\Contracts;

interface DoAccordionSections
{
    /**
 * Meta Box Accordion Template Function.
 *
 * Largely made up of abstracted code from do_meta_boxes(), this
 * function serves to build meta boxes as list items for display as
 * a collapsible accordion.
 *
 * @since 3.6.0
 *
 * @uses global $wp_meta_boxes Used to retrieve registered meta boxes.
 *
 * @param string|object $screen      The screen identifier.
 * @param string $context     The screen context for which to display accordion sections.
 * @param mixed $dataObject Gets passed to the section callback function as the first parameter.
 * @return int Number of meta boxes as accordion sections.
 */
    public function doAccordionSections(string|object $screen, string $context, mixed $dataObject): int;
}
