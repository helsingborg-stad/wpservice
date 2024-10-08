<?php

namespace WpService\Contracts;

interface WpPrivacyProcessPersonalDataErasurePage
{
    /**
 * Mark erasure requests as completed after processing is finished.
 *
 * This intercepts the Ajax responses to personal data eraser page requests, and
 * monitors the status of a request. Once all of the processing has finished, the
 * request is marked as completed.
 *
 * @since 4.9.6
 *
 * @see 'wp_privacy_personal_data_erasure_page'
 *
 * @param array $response      The response from the personal data eraser for
 *                              the given page.
 * @param int $eraserIndex  The index of the personal data eraser. Begins
 *                              at 1.
 * @param string $emailAddress The email address of the user whose personal
 *                              data this is.
 * @param int $page          The page of personal data for this eraser.
 *                              Begins at 1.
 * @param int $requestId    The request ID for this personal data erasure.
 * @return array The filtered response.
 */
    public function wpPrivacyProcessPersonalDataErasurePage(array $response, int $eraserIndex, string $emailAddress, int $page, int $requestId): array;
}
