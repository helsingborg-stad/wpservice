<?php

namespace WpService\Contracts;

interface SubmitButton
{
    /**
     * Echoes a submit button, with provided text and appropriate class(es).
     *
     * @param string $text The text of the button. Defaults to ‘Save Changes’.
     * @param string        $type The type and CSS class(es) of the button.
     *                      Core values include 'primary', 'small', and 'large'. Default 'primary'.
     * @param string        $name The HTML name of the submit button.
     *                      If no id attribute is given in the $other_attributes parameter,
     *                      $name will be used as the button’s id. Default 'submit'.
     * @param bool $wrap True if the output button should be wrapped in a paragraph tag, false otherwise.
     * @param array|string  $otherAttributes Other attributes that should be output with the button,
     *                      mapping attributes to their values, e.g. array( 'id' => 'search-submit' ).
     *                      These key/value attribute pairs will be output as attribute="value",
     *                      where attribute is the key.
     *                      Attributes can also be provided as a string, e.g. id="search-submit",
     *                      though the array format is generally preferred.
     */
    public function submitButton(
        string $text = '',
        string $type = 'primary',
        string $name = 'submit',
        bool $wrap = true,
        array|string $otherAttributes = ''
    ): void;
}
