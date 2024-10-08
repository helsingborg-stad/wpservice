<?php

namespace WpService\Contracts;

interface GetTemplateHierarchy
{
    /**
 * Gets the template hierarchy for the given template slug to be created.
 *
 * Note: Always add `index` as the last fallback template.
 *
 * @since 6.1.0
 *
 * @param string $slug            The template slug to be created.
 * @param bool $isCustom       Optional. Indicates if a template is custom or
 *                                part of the template hierarchy. Default false.
 * @param string $templatePrefix Optional. The template prefix for the created template.
 *                                Used to extract the main template type, e.g.
 *                                in `taxonomy-books` the `taxonomy` is extracted.
 *                                Default empty string.
 * @return string[] The template hierarchy.
 */
    public function getTemplateHierarchy(string $slug, bool $isCustom = false, string $templatePrefix = ''): array;
}
