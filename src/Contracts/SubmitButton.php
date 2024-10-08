<?php

namespace WpService\Contracts;

interface SubmitButton
{
    /**
 * Echoes a submit button, with provided text and appropriate class(es).
 *
 * @since 3.1.0
 *
 * @see get_submit_button()
 *
 * @param string $text             Optional. The text of the button. Defaults to 'Save Changes'.
 * @param string $type             Optional. The type and CSS class(es) of the button. Core values
 *                                       include 'primary', 'small', and 'large'. Default 'primary'.
 * @param string $name             Optional. The HTML name of the submit button. If no `id` attribute
 *                                       is given in the `$other_attributes` parameter, `$name` will be used
 *                                       as the button's `id`. Default 'submit'.
 * @param bool $wrap             Optional. True if the output button should be wrapped in a paragraph tag,
 *                                       false otherwise. Default true.
 * @param array|string $otherAttributes Optional. Other attributes that should be output with the button,
 *                                       mapping attributes to their values, e.g. `array( 'id' => 'search-submit' )`.
 *                                       These key/value attribute pairs will be output as `attribute="value"`,
 *                                       where attribute is the key. Attributes can also be provided as a string,
 *                                       e.g. `id="search-submit"`, though the array format is generally preferred.
 *                                       Default empty string.
 */
    public function submitButton(string $text = '', string $type = 'primary', string $name = 'submit', bool $wrap = true, array|string $otherAttributes = ''): void;
}
