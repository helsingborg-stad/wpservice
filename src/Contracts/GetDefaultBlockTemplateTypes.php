<?php

namespace WpService\Contracts;

interface GetDefaultBlockTemplateTypes
{
    /**
     * Returns a filtered list of default template types, containing their
     * localized titles and descriptions.
     *
     * @since 5.9.0
     *
     * @return array[] {
     *     The default template types.
     *
     * @type array ...$0 {
     *         Data for the template type.
     *
     * @type string $title       Template type title.
     * @type string $description Template type description.
     *    }
     * }
     */
    public function getDefaultBlockTemplateTypes(): array;
}
