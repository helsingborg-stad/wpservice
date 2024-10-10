<?php

namespace WpService\Implementations;

/**
 * Class FakeWpService
 */
class FakeWpService implements \WpService\WpService
{
    public array $methodCalls = [];

    /**
     * Class constructor.
     *
     * @param array $returnValues
     */
    public function __construct(private array $returnValues = [])
    {
    }

    /**
     * Registers a function call.
     *
     * @param string $method
     * @param array $methodArguments
     */
    private function registerFunctionCall(string $method, array $methodArguments): void
    {
        if (!isset($this->methodCalls[$method])) {
            $this->methodCalls[$method] = [];
        }

        $this->methodCalls[$method][] = $methodArguments;
    }

    /**
     * Retrieves the return value for a given method.
     *
     * @param string $method The name of the method.
     * @param array $methodArgs The arguments to be passed to the method.
     * @param mixed $default The default value to return if the method does not have a return value.
     * @return mixed The return value of the method, or the default value if the method does not have a return value.
     */
    private function getReturnValue($method, array $methodArgs = [], $default = null): mixed
    {
        if (!isset($this->returnValues[$method])) {
            return $default;
        }

        if (is_callable($this->returnValues[$method])) {
            return $this->returnValues[$method](...$methodArgs);
        }

        return $this->returnValues[$method] ?? $default;
    }

        /**
         * @inheritDoc
         */
    public function doActivateHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuActivateStylesheet(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function exportAddJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function exportDateOptions(string $postType = 'post'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxNoprivHeartbeat(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxFetchList(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAjaxTagSearch(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpCompressionTest(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxImgeditPreview(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxOembedCache(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAutocompleteUser(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetCommunityEvents(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDashboardWidgets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxLoggedIn(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteComment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteTag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePost(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxTrashPost(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUntrashPost(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePage(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDimComment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddLinkCategory(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddTag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetTagcloud(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetComments(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxReplytoComment(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxEditComment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddMenuItem(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddUser(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxClosedPostboxes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHiddenColumns(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateWelcomePanel(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuGetMetabox(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpLinkAjax(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuLocationsSave(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMetaBoxOrder(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuQuickSearch(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetPermalink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSamplePermalink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInlineSave(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInlineSaveTax(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxFindPosts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWidgetsOrder(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveWidget(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateWidget(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteInactiveWidgets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMediaCreateImageSubsizes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUploadAttachment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxImageEditor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSetPostThumbnail(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetPostThumbnailHtml(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSetAttachmentThumbnail(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDateFormat(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxTimeFormat(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpRemovePostLock(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDismissWpPointer(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetAttachment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxQueryAttachments(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachmentCompat(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachmentOrder(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendAttachmentToEditor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendLinkToEditor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHeartbeat(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetRevisionDiffs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveUserColorScheme(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxQueryThemes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxParseEmbed(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxParseMediaShortcode(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDestroySessions(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxCropImage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGeneratePassword(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxNoprivGeneratePassword(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveWporgUsername(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInstallTheme(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateTheme(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteTheme(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInstallPlugin(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxActivatePlugin(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdatePlugin(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePlugin(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSearchPlugins(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSearchInstallPlugins(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxEditThemePluginFile(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpPrivacyExportPersonalData(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpPrivacyErasePersonalData(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHealthCheckSiteStatusResult(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxRestNonce(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxToggleAutoUpdates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendPasswordReset(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addLink(): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editLink(int $linkId = 0): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultLinkToEdit(): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteLink(int $linkId): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetLinkCats(int $linkId = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLinkToEdit(int|\stdClass $link): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertLink(array $linkdata, bool $wpError = false): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetLinkCats(int $linkId = 0, array $linkCategories = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateLink(array $linkdata): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCliArgs(string $param, bool $required = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentExists(string $commentAuthor, string $commentDate, string $timezone = 'blog'): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editComment(): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentToEdit(int $id): \WP_Comment|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPendingCommentsNum(int|array $postId): int|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function floatedAdminAvatar(string $name): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueCommentHotkeysJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentFooterDie(string $msg): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCredits(string $version = '', string $locale = ''): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreditsSectionTitle(array $groupData = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreditsSectionList(array $credits = [], string $slug = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSetup(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddDashboardWidget(string $widgetId, string $widgetName, callable $callback, callable $controlCallback = null, array $callbackArgs = null, string $context = 'normal', string $priority = 'core'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboard(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRightNow(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNetworkDashboardRightNow(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardQuickPress(string|false $errorMsg = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentDrafts(array|false $drafts = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSiteActivity(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentPosts(array $args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentComments(int $totalItems = 5): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRssOutput(string $widgetId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardCachedRssWidget(string $widgetId, callable $callback, array $checkUrls = [], mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardTriggerWidgetControl(int|false $widgetControlId = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRssControl(string $widgetId, array $formInputs = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardEventsNews(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintCommunityEventsMarkup(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintCommunityEventsTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPrimary(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPrimaryOutput(string $widgetId, array $feeds): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardQuota(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardBrowserNag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dashboardBrowserNagClass(array $classes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckBrowserVersion(): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPhpNag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dashboardPhpNagClass(array $classes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSiteHealth(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardEmpty(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWelcomePanel(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function exportWp(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFileDescription(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHomePath(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listFiles(string $folder = '', int $levels = 100, array $exclusions = [], bool $includeHidden = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginFileEditableExtensions(string $plugin): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeFileEditableExtensions(\WP_Theme $theme): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFileEditorTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEditThemePluginFile(array $args): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTempnam(string $filename = '', string $dir = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateFileToEdit(string $file, array $allowedFiles = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHandleUpload(array &$file, array|false $overrides = false, string|null $time = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHandleSideload(array &$file, array|false $overrides = false, string|null $time = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function downloadUrl(string $url, int $timeout = 300, bool $signatureVerification = false): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function verifyFileMd5(string $filename, mixed $expectedMd5): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function verifyFileSignature(string $filename, string|array $signatures, string|false $filenameForErrors = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrustedKeys(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpZipFileIsValid(string $file): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unzipFile(string $file, string $to): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function copyDir(string $from, string $to, array $skipList = []): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function moveDir(string $from, string $to, bool $overwrite = false): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wPFilesystem(array|false $args = false, string|false $context = false, bool $allowRelaxedFileOwnership = false): bool|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFilesystemMethod(array $args = [], string $context = '', bool $allowRelaxedFileOwnership = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function requestFilesystemCredentials(string $formPost, string $type = '', bool|\WP_Error $error = false, string $context = '', array $extraFields = null, bool $allowRelaxedFileOwnership = false): bool|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintRequestFilesystemCredentialsModal(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOpcacheInvalidate(string $filepath, bool $force = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOpcacheInvalidateDirectory(string $dir): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageEditor(int $postId, false|object $msg = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStreamImage(\WP_Image_Editor $image, string $mimeType, int $attachmentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSaveImageFile(string $filename, \WP_Image_Editor $image, string $mimeType, int $postId): array|\WP_Error|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageEditApplyChanges(\WP_Image_Editor $image, array $changes): \WP_Image_Editor
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function streamPreviewImage(int $postId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRestoreImage(int $postId): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSaveImage(int $postId): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCropImage(string|int $src, int $srcX, int $srcY, int $srcW, int $srcH, int $dstW, int $dstH, bool $srcAbs = false, string|false $dstFile = false): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetMissingImageSubsizes(int $attachmentId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateImageSubsizes(int $attachmentId): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateImageSubsizes(string $file, int $attachmentId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCopyParentAttachmentProperties(string $cropped, int $parentAttachmentId, string $context = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateAttachmentMetadata(int $attachmentId, string $file): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpExifFrac2dec(string $str): int|float
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpExifDate2ts(string $str): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReadImageMetadata(string $file): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function fileIsValidImage(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function fileIsDisplayableImage(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadImageToEdit(int $attachmentId, string $mimeType, string|array $size = 'full'): \resource|\GdImage|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getImporters(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerImporter(string $id, string $name, string $description, callable $callback): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImportCleanup(string $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImportHandleUpload(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPopularImporters(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerColumnHeaders(string $screen, array $columns): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printColumnHeaders(string|\WP_Screen $screen, bool $withId = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTabs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateGalleryTab(array $tabs): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theMediaUploadTabs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getImageSendToEditor(int $id, string $caption, string $title, string $align, string $url = '', bool|string $rel = false, string|array $size = 'medium', string $alt = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageAddCaption(string $html, int $id, string $caption, string $title, string $align, string $url, string $size, string $alt = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaSendToEditor(string $html): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaHandleUpload(string $fileId, int $postId, array $postData = [], array $overrides = []): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaHandleSideload(array $fileArray, int $postId = 0, string $desc = null, array $postData = []): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIframe(callable $contentFunc, mixed ...$args): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaButtons(string $editorId = 'content'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUploadIframeSrc(string $type = null, int $postId = null, string $tab = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadFormHandler(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMediaUploadHandler(): null|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaSideloadImage(string $file, int $postId = 0, string $desc = null, string $returnType = 'html'): string|int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadGallery(): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadLibrary(): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageAlignInputFields(\WP_Post $post, string $checked = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageSizeInputFields(\WP_Post $post, bool|string $check = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageLinkInputFields(\WP_Post $post, string $urlType = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCaptionInputTextarea(\WP_Post $editPost): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageAttachmentFieldsToEdit(array $formFields, object $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaPostSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageMediaSendToEditor(string $html, int $attachmentId, array $attachment): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentFieldsToEdit(\WP_Post $post, array $errors = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMediaItems(int $postId, array $errors): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMediaItem(int $attachmentId, string|array $args = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCompatMediaMarkup(int $attachmentId, array $args = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadForm(array $errors = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTypeForm(string $type = 'file', array $errors = null, int|\WP_Error $id = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTypeUrlForm(string $type = null, object $errors = null, int $id = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadGalleryForm(array $errors): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadLibraryForm(array $errors): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMediaInsertUrlForm(string $defaultView = 'image'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadFlashBypass(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadHtmlBypass(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTextAfter(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadMaxImageResize(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function multisiteOverQuotaMessage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editFormImageEditor(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function attachmentSubmitboxMetadata(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddId3TagData(array &$metadata, array $data): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReadVideoMetadata(string $file): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReadAudioMetadata(string $file): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetMediaCreationTimestamp(array $metadata): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMediaAttachAction(int $parentId, string $action = 'attach'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addCssclass(string $classToAdd, string $classes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMenuClasses(array $menu): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sortMenu(array $a, array $b): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postSubmitMetaBox(\WP_Post $post, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function attachmentSubmitMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postFormatMetaBox(\WP_Post $post, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postTagsMetaBox(\WP_Post $post, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCategoriesMetaBox(\WP_Post $post, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postExcerptMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postTrackbackMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCustomMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCommentStatusMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCommentMetaBoxThead(array $result): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCommentMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postSlugMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postAuthorMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postRevisionsMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pageAttributesMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linkSubmitMetaBox(object $link): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linkCategoriesMetaBox(object $link): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linkTargetMetaBox(object $link): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function xfnCheck(string $xfnRelationship, string $xfnValue = '', mixed $deprecated = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linkXfnMetaBox(object $link): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linkAdvancedMetaBox(object $link): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postThumbnailMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function attachmentId3DataMetaBox(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerAndDoPostMetaBoxes(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function gotModRewrite(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function gotUrlRewrite(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function extractFromMarkers(string $filename, string $marker): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function insertWithMarkers(string $filename, string $marker, array|string $insertion): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function saveModRewriteRules(): bool|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iis7SaveUrlRewriteRules(): bool|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateRecentlyEdited(string $file): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateHomeSiteurl(string $oldValue, string $value): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResetVars(array $vars): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function showMessage(string|\WP_Error $message): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDocLinkParse(string $content): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setScreenOptions(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iis7RewriteRuleExists(string $filename): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iis7DeleteRewriteRule(string $filename): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iis7AddRewriteRule(string $filename, string $rewriteRule): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function saveDomDocument(\DOMDocument $doc, string $filename): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adminColorSchemePicker(int $userId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpColorSchemeSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminViewportMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckLockedPosts(array $response, array $data, string $screenId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshPostLock(array $response, array $data, string $screenId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshPostNonces(array $response, array $data, string $screenId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshMetaboxLoaderNonces(array $response, array $data): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshHeartbeatNonces(array $response): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHeartbeatSetSuspension(array $settings): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function heartbeatAutosave(array $response, array $data): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCanonicalUrl(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminHeaders(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPageReloadOnBackButtonJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateOptionNewAdminEmail(string $oldValue, string $value): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPhpVersion(): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkUploadSize(array $file): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuDeleteBlog(int $blogId, bool $drop = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuDeleteUser(int $id): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function uploadIsUserOverQuota(bool $displayMessage = true): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displaySpaceUsage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function fixImportFormSize(int $size): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function uploadSpaceSetting(int $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function refreshUserDetails(int $id): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function formatCodeLang(string $code = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkImportNewUsers(string $permission): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function muDropdownLanguages(array $langFiles = [], string $current = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function siteAdminNotice(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function avoidBlogPagePermalinkCollision(array $data, array $postarr): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function choosePrimaryBlog(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function canEditNetwork(int $networkId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function confirmDeleteUsers(array $users): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkSettingsAddJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkEditSiteNav(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteScreenHelpTabArgs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteScreenHelpSidebarContent(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuSetup(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInitialNavMenuMetaBoxes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuPostTypeMetaBoxes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuTaxonomyMetaBoxes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuDisabledCheck(int|string $navMenuSelectedId, bool $display = true): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemLinkMetaBox(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemPostTypeMetaBox(string $dataObject, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemTaxonomyMetaBox(string $dataObject, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSaveNavMenuItems(int $menuId = 0, array $menuData = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuToEdit(int $menuId = 0): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuManageColumns(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuUpdateMenuItems(int|string $navMenuSelectedId, string $navMenuSelectedTitle): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkDomainCheck(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function allowSubdomainInstall(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function allowSubdirectoryInstall(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCleanBasedomain(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkStep1(false|\WP_Error $errors = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkStep2(false|\WP_Error $errors = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function optionsDiscussionAddJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function optionsGeneralAddJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function optionsReadingAddJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function optionsReadingBlogCharset(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginsApi(string $action, array|object $args = []): array|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installPopularTags(array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installDashboard(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installSearchForm(bool $deprecated = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installPluginsUpload(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installPluginsFavoritesForm(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displayPluginsTable(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installPluginInstallStatus(array|object $api, bool $loop = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installPluginInformation(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginActionButton(string $name, array|object $data, bool $compatiblePhp, bool $compatibleWp): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPluginData(string $pluginFile, bool $markup = true, bool $translate = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPluginFiles(string $plugin): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPlugins(string $pluginFolder = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMuPlugins(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDropins(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPluginActive(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPluginInactive(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPluginActiveForNetwork(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isNetworkOnlyPlugin(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function activatePlugin(string $plugin, string $redirect = '', bool $networkWide = false, bool $silent = false): null|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deactivatePlugins(string|array $plugins, bool $silent = false, bool|null $networkWide = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function activatePlugins(string|array $plugins, string $redirect = '', bool $networkWide = false, bool $silent = false): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deletePlugins(array $plugins, string $deprecated = ''): bool|null|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateActivePlugins(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validatePlugin(string $plugin): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validatePluginRequirements(string $plugin): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUninstallablePlugin(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function uninstallPlugin(string $plugin): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMenuPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, string $iconUrl = '', int|float $position = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSubmenuPage(string $parentSlug, string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int|float $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addManagementPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addOptionsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addThemePage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPluginsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addUsersPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addDashboardPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPostsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMediaPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addLinksPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPagesPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addCommentsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeMenuPage(string $menuSlug): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeSubmenuPage(string $menuSlug, string $submenuSlug): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function menuPageUrl(string $menuSlug, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdminPageParent(string $parentPage = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdminPageTitle(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPluginPageHook(string $pluginPage, string $parentPage): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPluginPageHookname(string $pluginPage, string $parentPage): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function userCanAccessAdminPage(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function optionUpdateFilter(array $options): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addAllowedOptions(array $newOptions, string|array $options = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAllowedOptions(array $delOptions, string|array $options = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function settingsFields(string $optionGroup): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCleanPluginsCache(bool $clearUpdateCache = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginSandboxScrape(string $plugin): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddPrivacyPolicyContent(string $pluginName, string $policyText): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPluginPaused(string $plugin): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginError(string $plugin): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function resumePlugin(string $plugin, string $redirect = ''): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pausedPluginsNotice(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editPost(array|null $postData = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function bulkEditPosts(array|null $postData = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultPostToEdit(string $postType = 'post', bool $createInDb = false): \WP_Post
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postExists(string $title, string $content = '', string $date = '', string $type = '', string $status = ''): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWritePost(): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function writePost(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMeta(int $postId): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteMeta(int $mid): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetaKeys(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostMetaById(int $mid): object|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasMeta(int $postId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateMeta(int $metaId, string $metaKey, string $metaValue): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvailablePostStatuses(string $type = 'post'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEditPostsQuery(array|false $q = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEditAttachmentsQueryVars(array|false $q = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEditAttachmentsQuery(array|false $q = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postboxClasses(string $boxId, string $screenId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSamplePermalink(int|\WP_Post $post, string|null $title = null, string|null $name = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSamplePermalinkHtml(int|\WP_Post $post, string|null $newTitle = null, string|null $newSlug = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPostLock(int|\WP_Post $post): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostLock(int|\WP_Post $post): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreatePostAutosave(array|int $postData): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAutosavePostRevisionedMetaFields(array $newAutosave): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postPreview(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAutosave(array $postData): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function redirectPost(int|string $postId = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function taxonomyMetaBoxSanitizeCbCheckboxes(string $taxonomy, array $terms): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function taxonomyMetaBoxSanitizeCbInput(string $taxonomy, array|string $terms): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorServerBlockSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theBlockEditorMetaBoxes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theBlockEditorMetaBoxPostFormHiddenFields(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyGeneratePersonalDataExportGroupHtml(array $groupData, string $groupId = '', int $groupsCount = 1): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyGeneratePersonalDataExportFile(int $requestId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacySendPersonalDataExportEmail(int $requestId): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyProcessPersonalDataExportPage(array $response, int $exporterIndex, string $emailAddress, int $page, int $requestId, bool $sendAsEmail, string $exporterKey): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyProcessPersonalDataErasurePage(array $response, int $eraserIndex, string $emailAddress, int $page, int $requestId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetRevisionUiDiff(\WP_Post|int $post, int $compareFrom, int $compareTo): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareRevisionsForJs(\WP_Post|int $post, int $selectedRevisionId, int $from = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintRevisionTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDbSchema(string $scope = 'all', int $blogId = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateOptions(array $options = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles160(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles210(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles230(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles250(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles260(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles270(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles280(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateRoles300(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installNetwork(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateNetwork(int $networkId = 1, string $domain = '', string $email = '', string $siteName = '', string $path = '/', bool $subdomainInstall = false): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateNetworkMeta(int $networkId, array $meta = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function populateSiteMeta(int $siteId, array $meta = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getColumnHeaders(string|\WP_Screen $screen): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHiddenColumns(string|\WP_Screen $screen): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function metaBoxPrefs(\WP_Screen $screen): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHiddenMetaBoxes(string|\WP_Screen $screen): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addScreenOption(string $option, mixed $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentScreen(): \WP_Screen|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setCurrentScreen(string|\WP_Screen $hookName = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function categoryExists(int|string $catName, int $categoryParent = null): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryToEdit(int $id): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateCategory(int|string $catName, int $categoryParent = 0): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateCategories(array $categories, int|string $postId = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertCategory(array $catarr, bool $wpError = false): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCategory(array $catarr): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function tagExists(int|string $tagName): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateTag(int|string $tagName): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTagsToEdit(int $postId, string $taxonomy = 'post_tag'): string|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermsToEdit(int $postId, string $taxonomy = 'post_tag'): string|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateTerm(string $tagName, string $taxonomy = 'post_tag'): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCategoryChecklist(int $postId = 0, int $descendantsAndSelf = 0, array|false $selectedCats = false, array|false $popularCats = false, \Walker $walker = null, bool $checkedOntop = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTermsChecklist(int $postId = 0, array|string $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPopularTermsChecklist(string $taxonomy, int $defaultTerm = 0, int $number = 10, bool $display = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLinkCategoryChecklist(int $linkId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getInlineData(\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommentReply(int $position = 1, bool $checkbox = false, string $mode = 'single', bool $tableRow = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommentTrashnotice(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listMeta(array $meta): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function metaForm(\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function touchTime(int|bool $edit = 1, int|bool $forPost = 1, int $tabIndex = 0, int|bool $multi = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pageTemplateDropdown(string $defaultTemplate = '', string $postType = 'page'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function parentDropdown(int $defaultPage = 0, int $parentPage = 0, int $level = 0, int|\WP_Post $post = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownRoles(string $selected = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImportUploadForm(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMetaBox(string $id, string $title, callable $callback, string|array|\WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callbackArgs = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doBlockEditorIncompatibleMetaBox(mixed $dataObject, array $box): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doMetaBoxes(string|\WP_Screen $screen, string $context, mixed $dataObject): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeMetaBox(string $id, string|array|\WP_Screen $screen, string $context): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAccordionSections(string|object $screen, string $context, mixed $dataObject): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSettingsSection(string $id, string $title, callable $callback, string $page, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSettingsField(string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doSettingsSections(string $page): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doSettingsFields(string $page, string $section): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSettingsError(string $setting, string $code, string $message, string $type = 'error'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSettingsErrors(string $setting = '', bool $sanitize = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function settingsErrors(string $setting = '', bool $sanitize = false, bool $hideOnUpdate = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function findPostsDiv(string $foundAction = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostPassword(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iframeHeader(string $title = '', bool $deprecated = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iframeFooter(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStates(\WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMediaStates(\WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function compressionTest(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function submitButton(string $text = '', string $type = 'primary', string $name = 'submit', bool $wrap = true, array|string $otherAttributes = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSubmitButton(string $text = '', string $type = 'primary large', string $name = 'submit', bool $wrap = true, array|string $otherAttributes = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function convertToScreen(string $hookName): \WP_Screen
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStarRating(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installThemeSearchForm(bool $typeSelector = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installThemesDashboard(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installThemesUpload(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displayThemes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function installThemeInformation(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteTheme(string $stylesheet, string $redirect = ''): bool|null|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplates(\WP_Post|null $post = null, string $postType = 'page'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function themeUpdateAvailable(\WP_Theme $theme): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeUpdateAvailable(\WP_Theme $theme): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeFeatureList(bool $api = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function themesApi(string $action, array|object $args = []): array|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareThemesForJs(array $themes = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function customizeThemesPrintTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isThemePaused(string $theme): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeError(string $theme): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function resumeTheme(string $theme, string $redirect = ''): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pausedThemesNotice(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translationsApi(string $type, array|object $args = null): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAvailableTranslations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInstallLanguageForm(array $languages): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDownloadLanguagePack(string $download): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCanInstallLanguagePack(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateCore(string $from, string $to): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreferredFromUpdateCore(): object|array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCoreUpdates(array $options = []): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function findCoreAutoUpdate(): object|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCoreChecksums(string $version, string $locale): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dismissCoreUpdate(object $update): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function undismissCoreUpdate(string $version, string $locale): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function findCoreUpdate(string $version, string $locale): object|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function coreUpdateFooter(string $msg = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateNag(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateRightNowMessage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPluginUpdates(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPluginUpdateRows(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPluginUpdateRow(string $file, array $pluginData): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeUpdates(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThemeUpdateRows(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThemeUpdateRow(string $themeKey, \WP_Theme $theme): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maintenanceNag(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintAdminNoticeTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintUpdateRowTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRecoveryModeNag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsAutoUpdateEnabledForType(string $type): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsAutoUpdateForcedForItem(string $type, bool|null $update, object $item): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAutoUpdateMessage(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addUser(): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editUser(int $userId = 0): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditableRoles(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserToEdit(int $userId): \WP_User|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUsersDrafts(int $userId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteUser(int $id, int $reassign = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRevokeUser(int $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNagHandler(false $errors = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNagEditUser(int $userID, \WP_User $oldData): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNag(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function useSslPreference(\WP_User $user): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adminCreatedUserEmail(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsAuthorizeApplicationPasswordRequestValid(array $request, \WP_User $user): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsAuthorizeApplicationRedirectUrlValid(string $url): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgetControls(string $sidebar, string $sidebarName = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgetControlsDynamicSidebar(array $params): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextWidgetIdNumber(string $idBase): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetControl(array $sidebarArgs): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsAccessBodyClass(string $classes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displayHeader(string $bodyClasses = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displaySetupForm(string|null $error = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuMaxDepth(string $classes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setupConfigDisplayHeader(string|array $bodyClasses = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThemeAutoUpdateSettingTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listCoreUpdate(object $update): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dismissedUpdates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function coreUpgradePreamble(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function coreAutoUpdatesSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listPluginUpdates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listThemeUpdates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function listTranslationUpdates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doCoreUpgrade(bool $reinstall = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doDismissCoreUpdate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doUndismissCoreUpdate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarRender(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarWpMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSidebarToggle(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMyAccountItem(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMyAccountMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSiteMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarEditSiteMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarCustomizeMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMySitesMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarShortlinkMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarEditMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarNewContentMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarCommentsMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarAppearanceMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarUpdatesMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSearchMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarRecoveryModeMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarAddSecondaryGroups(\WP_Admin_Bar $wpAdminBar): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueAdminBarHeaderStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueAdminBarBumpStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function showAdminBar(bool $show): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAdminBarShowing(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthor(string $deprecated = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAuthor(string $deprecated = '', bool $deprecatedEcho = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedAuthor(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theModifiedAuthor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorMeta(string $field = '', int|false $userId = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAuthorMeta(string $field = '', int|false $userId = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorLink(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAuthorLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorPosts(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAuthorPosts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorPostsLink(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAuthorPostsLink(string $deprecated = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAuthorPostsUrl(int $authorId, string $authorNicename = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListAuthors(string|array $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMultiAuthor(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockBindingsSource(string $sourceName, array $sourceProperties): \WP_Block_Bindings_Source|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllRegisteredBlockBindingsSources(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockCategories(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockCategories(\WP_Post|\WP_Block_Editor_Context $postOrBlockEditorContext): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllowedBlockTypes(\WP_Block_Editor_Context $blockEditorContext): bool|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockEditorSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLegacyWidgetBlockEditorSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetFirstBlock(array $blocks, string $blockName): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorSettings(array $customSettings, \WP_Block_Editor_Context $blockEditorContext): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockEditorRestApiPreload(array $preloadPaths, \WP_Block_Editor_Context $blockEditorContext): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorThemeStyles(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getClassicThemeSupportsBlockEditorSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetBlockStyleVariationNameFromClass(string $classString): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRenderElementsClassName(mixed $blockContent, mixed $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTypographyGetPresetInlineStyleValue(string $styleValue, string $cssProperty): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRenderTypographySupport(string $blockContent, array $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetTypographyValueAndUnit(string|int|float $rawValue, array $options = []): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetTypographyFontSizeValue(array $preset, bool|array $settings = []): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockThemeFolders(string $themeStylesheet = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllowedBlockTemplatePartAreas(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockTemplateTypes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockTemplates(array $query = [], string $templateType = 'wp_template'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockTemplate(string $id, string $templateType = 'wp_template'): \WP_Block_Template|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockFileTemplate(string $id, string $templateType = 'wp_template'): \WP_Block_Template|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockTemplatePart(string $part): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockHeaderArea(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockFooterArea(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsThemeDirectoryIgnored(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateBlockTemplatesExportFile(): \WP_Error|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTemplateHierarchy(string $slug, bool $isCustom = false, string $templatePrefix = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function locateBlockTemplate(string $template, string $type, array $templates): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeBlockAssetPathPrefix(string $assetHandleOrPath): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function generateBlockAssetHandle(string $blockName, string $fieldName, int $index = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockAssetUrl(string $path): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockScriptModuleId(array $metadata, string $fieldName, int $index = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockScriptHandle(array $metadata, string $fieldName, int $index = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockStyleHandle(array $metadata, string $fieldName, int $index = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockMetadataI18nSchema(): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockTypeFromMetadata(string $fileOrFolder, array $args = []): \WP_Block_Type|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockType(string|\WP_Block_Type $blockType, array $args = []): \WP_Block_Type|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockType(string|\WP_Block_Type $name): \WP_Block_Type|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasBlocks(int|string|\WP_Post|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasBlock(string $blockName, int|string|\WP_Post|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDynamicBlockNames(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHookedBlocks(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function insertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function serializeBlockAttributes(array $blockAttributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripCoreBlockNamespace(string|null $blockName = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentDelimitedBlockContent(string|null $blockName, array $blockAttributes, string $blockContent): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function serializeBlock(array $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function serializeBlocks(array $blocks): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function resolvePatternBlocks(array $blocks): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterBlockContent(string $text, array|string $allowedHtml = 'post', array $allowedProtocols = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterBlockKses(\WP_Block_Parser_Block $block, array|string $allowedHtml, array $allowedProtocols = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterBlockKsesValue(array|string $value, array|string $allowedHtml, array $allowedProtocols = [], array $blockContext = null): array|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterBlockCoreTemplatePartAttributes(string $attributeValue, string $attributeName, array|string $allowedHtml): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function excerptRemoveBlocks(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function excerptRemoveFootnotes(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlock(array $parsedBlock): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function parseBlocks(string $content): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doBlocks(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockVersion(string $content): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockStyle(string|array $blockName, array $styleProperties): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockStyle(string $blockName, string $blockStyleName): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockHasSupport(\WP_Block_Type $blockType, string|array $feature, mixed $defaultValue = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMigrateOldTypographyShape(array $metadata): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildQueryVarsFromQueryBlock(\WP_Block $block, int $page): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getQueryPaginationArrow(\WP_Block $block, bool $isNext): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildCommentQueryVarsFromBlock(\WP_Block $block): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentsPaginationArrow(\WP_Block $block, string $paginationType = 'next'): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreArchives(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreArchives(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreAvatar(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockCoreAvatarBorderAttributes(array $attributes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreAvatar(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreBlock(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreBlock(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreButton(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreButton(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCalendar(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCalendar(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarHasPublishedPosts(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPosts(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPostOnDelete(int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPostOnTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCategories(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildDropdownScriptBlockCoreCategories(string $dropdownId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCategories(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentAuthorName(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentAuthorName(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentContent(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentContent(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentDate(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentDate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentEditLink(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentEditLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentReplyLink(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentReplyLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCommentTemplateRenderComments(array $comments, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentTemplate(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentTemplate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationNext(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationNext(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationNumbers(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationNumbers(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationPrevious(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationPrevious(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPagination(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPagination(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsTitle(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsTitle(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreComments(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreComments(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsBlockFormDefaults(array $fields): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueLegacyPostCommentsBlockStyles(string $blockName): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerLegacyPostCommentsBlock(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCover(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCover(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreFile(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFile(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreFootnotes(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFootnotes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFootnotesPostMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddFootnotesToRevision(array $fields): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetFootnotesFromRevision(string $revisionField, string $field, object $revision): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreGalleryDataIdBackcompatibility(array $parsedBlock): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreGalleryRender(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreGallery(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHeadingRender(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreHeading(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildCssColors(mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildCssFontSizes(mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildLiWrapperAttributes(mixed $context): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreHomeLink(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreHomeLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreImage(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImageGetLightboxSettings(array $block): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImageRenderLightbox(string $blockContent, array $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImagePrintLightboxOverlay(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreImage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerCoreBlockStyleHandles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerCoreBlockTypesFromMetadata(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLatestCommentsDraftOrPostTitle(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLatestComments(array $attributes = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLatestComments(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreLatestPostsGetExcerptLength(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLatestPosts(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLatestPosts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreLatestPostsMigrateCategories(array $block): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLegacyWidget(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLegacyWidget(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function handleLegacyWidgetPreviewIframe(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreListRender(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreList(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLoginout(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLoginout(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreMediaText(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreMediaText(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildCssColors(mixed $context, mixed $attributes, mixed $isSubMenu = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildCssFontSizes(mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkRenderSubmenuIcon(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkMaybeUrldecode(string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigationLink(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildVariationForNavigationLink(\WP_Taxonomy|\WP_Post_Type $entity, string $kind): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkFilterVariations(array $variations, \WP_Block_Type $blockType): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildVariations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigationLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSubmenuBuildCssFontSizes(mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSubmenuRenderSubmenuIcon(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigationSubmenu(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigationSubmenu(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetMenuItemsAtLocation(string $location): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSortMenuItemsByParentId(array $menuItems): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetInnerBlocksFromUnstableLocation(array $attributes): \WP_Block_List
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationAddDirectivesToSubmenu(\WP_HTML_Tag_Processor $tags, array $blockAttributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBuildCssColors(array $attributes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBuildCssFontSizes(array $attributes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationRenderSubmenuIcon(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationFilterOutEmptyBlocks(array $parsedBlocks): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBlockContainsCoreNavigation(\WP_Block_List $innerBlocks): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetFallbackBlocks(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetPostIds(\WP_Block_List $innerBlocks): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationFromBlockGetPostIds(\WP_Block $block): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigation(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigation(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationTypographicPresetsBackcompatibility(array $parsedBlock): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationRemoveSerializedParentBlock(string $serializedBlock): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationMockParsedBlock(array $innerBlocks, \WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationInsertHookedBlocks(array $innerBlocks, \WP_Post $post): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSetIgnoredHookedBlocksMetadata(array $innerBlocks, \WP_Post $post): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationInsertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePageListItem(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListBuildCssColors(mixed $attributes, mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListBuildCssFontSizes(mixed $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListRenderNestedPageList(bool $openSubmenusOnClick, bool $showSubmenuIcons, bool $isNavigationChild, array $nestedPages, bool $isNested, array $activePageAncestorIds = [], array $colors = [], int $depth = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListNestPages(array $currentLevel, array $children): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePageList(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePageList(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePattern(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePattern(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthorBiography(mixed $attributes, mixed $content, mixed $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthorBiography(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthorName(mixed $attributes, mixed $content, mixed $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthorName(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthor(mixed $attributes, mixed $content, mixed $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostCommentsForm(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostCommentsForm(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCommentsFormBlockFormDefaults(array $fields): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostContent(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostContent(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostDate(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostDate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostExcerpt(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostExcerpt(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostFeaturedImage(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockCorePostFeaturedImageOverlayElementMarkup(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockCorePostFeaturedImageBorderAttributes(array $attributes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostFeaturedImage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostNavigationLink(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostNavigationLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePostTemplateUsesFeaturedImage(\WP_Block_List $innerBlocks): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTemplate(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTemplate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTerms(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCorePostTermsBuildVariations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTerms(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTitle(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTitle(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryNoResults(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryNoResults(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationNext(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationNext(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationNumbers(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationNumbers(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationPrevious(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationPrevious(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPagination(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPagination(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryTitle(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryTitle(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQuery(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQuery(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreQueryDisableEnhancedPagination(array $parsedBlock): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreReadMore(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreReadMore(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreRss(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSearch(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function classnamesForBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyBlockCoreSearchBorderStyle(array $attributes, string $property, string $side, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyBlockCoreSearchBorderStyles(array $attributes, string $property, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stylesForBlockCoreSearch(mixed $attributes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTypographyClassesForBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTypographyStylesForBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBorderColorClassesForBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getColorClassesForBlockCoreSearch(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreShortcode(array $attributes, string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreShortcode(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteLogo(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteLogoSetting(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteIconSetting(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteLogo(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteTagline(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteTagline(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteTitle(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteTitle(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSocialLink(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSocialLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetIcon(string $service): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetName(string $service): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkServices(string $service = '', string $field = ''): array|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetColorStyles(array $context): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetColorClasses(array $context): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTagCloud(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTagCloud(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTemplatePart(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockAreaVariations(array $instanceVariations): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockInstanceVariations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockVariations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTemplatePart(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTermDescription(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTermDescription(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreWidgetGroup(array $attributes, string $content, \WP_Block $block): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreWidgetGroup(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function noteSidebarBeingRendered(int|string $index): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function discardSidebarBeingRendered(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListBookmarks(string|array $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBookmark(int|\stdClass $bookmark, string $output = OBJECT, string $filter = 'raw'): array|object|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBookmarkField(string $field, int $bookmark, string $context = 'display'): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBookmarks(string|array $args = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeBookmark(\stdClass|array $bookmark, string $context = 'display'): \stdClass|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeBookmarkField(string $field, mixed $value, int $bookmarkId, string $context): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanBookmarkCache(int $bookmarkId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheInit(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddMultiple(array $data, string $group = '', int $expire = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetMultiple(array $data, string $group = '', int $expire = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGet(int|string $key, string $group = '', bool $force = false, bool &$found = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGetMultiple(array $keys, string $group = '', bool $force = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDelete(int|string $key, string $group = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDeleteMultiple(array $keys, string $group = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheIncr(int|string $key, int $offset = 1, string $group = ''): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDecr(int|string $key, int $offset = 1, string $group = ''): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlush(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlushRuntime(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlushGroup(string $group): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSupports(string $feature): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheClose(): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddGlobalGroups(string|array $groups): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddNonPersistentGroups(string|array $groups): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSwitchToBlog(int $blogId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function redirectCanonical(string $requestedUrl = null, bool $doRedirect = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripFragmentFromUrl(string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function redirectGuess404Permalink(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRedirectAdminLocations(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mapMetaCap(string $cap, int $userId, mixed ...$args): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentUserCan(string $capability, mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentUserCanForBlog(int $blogId, string $capability, mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function authorCan(int|\WP_Post $post, string $capability, mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function userCan(int|\WP_User $user, string $capability, mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRoles(): \WP_Roles
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRole(string $role): \WP_Role|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addRole(string $role, string $displayName, array $capabilities = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeRole(string $role): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSuperAdmins(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSuperAdmin(int|false $userId = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function grantSuperAdmin(int $userId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function revokeSuperAdmin(int $userId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantInstallLanguagesCap(array $allcaps): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantResumeExtensionsCaps(array $allcaps): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantSiteHealthCaps(array $allcaps, array $caps, array $args, \WP_User $user): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryLink(int|object $category): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryParents(int $categoryId, bool $link = false, string $separator = '/', bool $nicename = false, array $deprecated = []): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCategory(int|false $postId = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryByID(int $catId): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryList(string $separator = '', string $parents = '', int|false $postId = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function inCategory(int|string|array $category, int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCategory(string $separator = '', string $parents = '', int|false $postId = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function categoryDescription(int $category = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownCategories(array|string $args = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListCategories(array|string $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTagCloud(array|string $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function defaultTopicCountScale(int $count): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateTagCloud(array $tags, string|array $args = ''): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function walkCategoryTree(mixed ...$args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function walkCategoryDropdownTree(mixed ...$args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTagLink(int|object $tag): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTags(int|\WP_Post $post = 0): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTagList(string $before = '', string $sep = '', string $after = '', int $postId = 0): string|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTags(string $before = null, string $sep = ', ', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function tagDescription(int $tag = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function termDescription(int $term = 0, null $deprecated = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTerms(int|\WP_Post $post, string $taxonomy): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTermList(int $postId, string $taxonomy, string $before = '', string $sep = '', string $after = ''): string|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermParentsList(int $termId, string $taxonomy, string|array $args = []): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTerms(int $postId, string $taxonomy, string $before = '', string $sep = ', ', string $after = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasCategory(string|int|array $category = '', int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasTag(string|int|array $tag = '', int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasTerm(string|int|array $term = '', string $taxonomy = '', int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategories(string|array $args = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategory(int|object $category, string $output = OBJECT, string $filter = 'raw'): array|null|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryByPath(string $categoryPath, bool $fullMatch = true, string $output = OBJECT): \WP_Term|array|\WP_Error|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryBySlug(string $slug): object|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCatID(string $catName): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCatName(int $catId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function catIsAncestorOf(mixed $cat1, mixed $cat2): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCategory(object|array $category, string $context = 'display'): object|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCategoryField(string $field, mixed $value, int $catId, string $context): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTags(string|array $args = ''): array|int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTag(int|object $tag, string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|\WP_Error|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanCategoryCache(int $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSimplepieAutoload(string $class): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockPatternCategory(string $categoryName, array $categoryProperties): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockPatternCategory(string $categoryName): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerBlockPattern(string $patternName, array $patternProperties): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockPattern(string $patternName): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlockWrapperAttributes(array $extraAttributes = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthor(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthor(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorEmail(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorEmail(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorEmailLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorEmailLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorLink(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorLink(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorIP(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorIP(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorUrl(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorUrl(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorUrlLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorUrlLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentClass(string|array $cssClass = '', int|\WP_Comment $comment = null, int|\WP_Post $post = null, bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentClass(string|array $cssClass = '', int|\WP_Comment $commentId = null, int|\WP_Post $post = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentDate(string $format = '', int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentDate(string $format = '', int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentExcerpt(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentExcerpt(int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentID(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentID(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentLink(\WP_Comment|int|null $comment = null, array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentsLink(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsLink(string $deprecated = '', mixed $deprecated2 = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentsNumber(int|\WP_Post $post = 0): string|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsNumber(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentsNumberText(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentText(int|\WP_Comment $commentId = 0, array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentText(int|\WP_Comment $commentId = 0, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentTime(string $format = '', bool $gmt = false, bool $translate = true, int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentTime(string $format = '', int|\WP_Comment $commentId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentType(int|\WP_Comment $commentId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentType(string|false $commenttxt = false, string|false $trackbacktxt = false, string|false $pingbacktxt = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTrackbackUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trackbackUrl(bool $deprecatedEcho = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trackbackRdf(int|string $deprecated = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsOpen(int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pingsOpen(int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommentFormUnfilteredHtmlNonce(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsTemplate(string $file = '/comments.php', bool $separateComments = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsPopupLink(false|string $zero = false, false|string $one = false, false|string $more = false, string $cssClass = '', false|string $none = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentReplyLink(array $args = [], int|\WP_Comment $comment = null, int|\WP_Post $post = null): string|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentReplyLink(array $args = [], int|\WP_Comment $comment = null, int|\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostReplyLink(array $args = [], int|\WP_Post $post = null): string|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postReplyLink(array $args = [], int|\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCancelCommentReplyLink(string $linkText = '', int|\WP_Post|null $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cancelCommentReplyLink(string $linkText = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentIdFields(int|\WP_Post|null $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentIdFields(int|\WP_Post|null $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentFormTitle(string|false $noReplyText = false, string|false $replyText = false, bool $linkToParent = true, int|\WP_Post|null $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListComments(string|array $args = [], array $comments = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentForm(array $args = [], int|\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkComment(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent, string $commentType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getApprovedComments(int $postId, array $args = []): array|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getComment(\WP_Comment|string|int $comment = null, string $output = OBJECT): \WP_Comment|array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getComments(string|array $args = ''): array|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentStatuses(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultCommentStatus(string $postType = 'post', string $commentType = 'comment'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLastcommentmodified(string $timezone = 'server'): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentCount(int $postId = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addCommentMeta(int $commentId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteCommentMeta(int $commentId, string $metaKey, mixed $metaValue = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentMeta(int $commentId, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadCommentMeta(array $commentIds): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateCommentMeta(int $commentId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetCommentCookies(\WP_Comment $comment, \WP_User $user, bool $cookiesConsent = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCommentCookies(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAllowComment(array $commentdata, bool $wpError = false): int|string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkCommentFloodDb(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentFlood(bool $isFlood, string $ip, string $email, string $date, bool $avoidDie = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function separateComments(array &$comments): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentPagesCount(array $comments = null, int $perPage = null, bool $threaded = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageOfComment(int $commentId, array $args = []): int|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCommentFieldsMaxLengths(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentDataMaxLengths(array $commentData): \WP_Error|true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentDisallowedList(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCountComments(int $postId = 0): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteComment(int|\WP_Comment $commentId, bool $forceDelete = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrashComment(int|\WP_Comment $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashComment(int|\WP_Comment $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSpamComment(int|\WP_Comment $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnspamComment(int|\WP_Comment $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCommentStatus(int|\WP_Comment $commentId): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTransitionCommentStatus(string $newStatus, string $oldStatus, \WP_Comment $comment): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCurrentCommenter(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUnapprovedCommentAuthorEmail(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertComment(array $commentdata): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterComment(array $commentdata): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThrottleCommentFlood(bool $block, int $timeLastcomment, int $timeNewcomment): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNewComment(array $commentdata, bool $wpError = false): int|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNewCommentNotifyModerator(int $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNewCommentNotifyPostauthor(int $commentId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetCommentStatus(int|\WP_Comment $commentId, string $commentStatus, bool $wpError = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateComment(array $commentarr, bool $wpError = false): int|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeferCommentCounting(bool $defer = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCommentCount(int|null $postId, bool $doDeferred = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCommentCountNow(int $postId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function discoverPingbackServerUri(string $url, string $deprecated = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAllPings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAllPingbacks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAllEnclosures(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAllTrackbacks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doTrackbacks(int|\WP_Post $post): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function genericPing(int $postId = 0): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pingback(string $content, int|\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function privacyPingFilter(mixed $sites): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trackback(string $trackbackUrl, string $title, string $excerpt, int $postId): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function weblogPing(string $server = '', string $path = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pingbackPingSourceUri(string $sourceUri): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcPingbackError(\IXR_Error $ixrError): \IXR_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanCommentCache(int|array $ids): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateCommentCache(array $comments, bool $updateMetaCache = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHandleCommentSubmission(array $commentData): \WP_Comment|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterCommentPersonalDataExporter(array $exporters): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommentsPersonalDataExporter(string $emailAddress, int $page = 1): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterCommentPersonalDataEraser(array $erasers): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommentsPersonalDataEraser(string $emailAddress, int $page = 1): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetCommentsLastChanged(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleSingleEvent(int $timestamp, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleEvent(int $timestamp, string $recurrence, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRescheduleEvent(int $timestamp, string $recurrence, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnscheduleEvent(int $timestamp, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpClearScheduledHook(string $hook, array $args = [], bool $wpError = false): int|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnscheduleHook(string $hook, bool $wpError = false): int|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetScheduledEvent(string $hook, array $args = [], int|null $timestamp = null): object|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNextScheduled(string $hook, array $args = []): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function spawnCron(int $gmtTime = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCron(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSchedules(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSchedule(string $hook, array $args = []): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetReadyCronJobs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInitialConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPluginDirectoryConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCookieConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSslConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFunctionalityConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTemplatingConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedRegisterHandler(string $id, string $regex, callable $callback, int $priority = 10): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedUnregisterHandler(string $id, int $priority = 10): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedDefaults(string $url = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedGet(string $url, array|string $args = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedAddProvider(string $format, string $provider, bool $regex = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedRemoveProvider(string $format): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeLoadEmbeds(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerYoutube(array $matches, array $attr, string $url, array $rawattr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerAudio(array $matches, array $attr, string $url, array $rawattr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerVideo(array $matches, array $attr, string $url, array $rawattr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedRegisterRoute(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedAddDiscoveryLinks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeEnqueueOembedHostJs(string $html): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostEmbedUrl(int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOembedEndpointUrl(string $permalink = '', string $format = 'json'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostEmbedHtml(int $width, int $height, int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseData(\WP_Post|int $post, int $width): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseDataForUrl(string $url, array $args): object|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseDataRich(array $data, \WP_Post $post, int $width, int $height): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOembedEnsureFormat(string $format): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOembedIframeTitleAttribute(string $result, object $data, string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOembedResult(string $result, object $data, string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedExcerptMore(string $moreString): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theExcerptEmbed(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedExcerptAttachment(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueEmbedScripts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEmbedStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printEmbedScripts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printEmbedCommentsButton(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printEmbedSharingButton(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printEmbedSharingDialog(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theEmbedSiteTitle(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterPreOembedResult(null|string $result, string $url, array $args): null|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPausedPlugins(): \WP_Paused_Extensions_Storage
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPausedThemes(): \WP_Paused_Extensions_Storage
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetExtensionErrorDescription(array $error): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterFatalErrorHandler(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsFatalErrorHandlerEnabled(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRecoveryMode(): \WP_Recovery_Mode
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBloginfoRss(string $show = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function bloginfoRss(string $show = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDefaultFeed(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getWpTitleRss(string $deprecated = '&#8211;'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTitleRss(string $deprecated = '&#8211;'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTitleRss(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTitleRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheContentFeed(string $feedType = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theContentFeed(string $feedType = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theExcerptRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePermalinkRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentsLinkFeed(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentGuid(int|\WP_Comment $commentId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentGuid(int|\WP_Comment $commentId = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentLink(int|\WP_Comment $comment = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorRss(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function commentTextRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryRss(string $type = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCategoryRss(string $type = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function htmlTypeRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function rssEnclosure(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function atomEnclosure(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function prepAtomTextConstruct(string $data): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function atomSiteIcon(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function rss2SiteIcon(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSelfLink(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function selfLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFeedBuildDate(string $format): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function feedContentType(string $type = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function fetchFeed(string|array $url): \SimplePie|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFontFaces(array $fonts = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterFontCollection(string $slug, array $args): \WP_Font_Collection|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterFontCollection(string $slug): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetFontDir(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFontDir(bool $createDir = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wptexturize(string $text, bool $reset = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wptexturizePrimes(string $haystack, string $needle, string $prime, string $openQuote, string $closeQuote): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpautop(string $text, bool $br = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHtmlSplit(string $input): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHtmlSplitRegex(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReplaceInHtmlTags(string $haystack, array $replacePairs): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function shortcodeUnautop(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function seemsUtf8(string $str): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSpecialcharsDecode(string $text, string|int $quoteStyle = ENT_NOQUOTES): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckInvalidUtf8(string $text, bool $strip = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function utf8UriEncode(mixed $utf8String, int $length = 0, bool $encodeAsciiCharacters = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAccents(string $text, string $locale = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeFileName(string $filename): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUser(string $username, bool $strict = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeKey(string $key): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitle(string $title, string $fallbackTitle = '', string $context = 'save'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitleForQuery(string $title): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitleWithDashes(string $title, string $rawTitle = '', string $context = 'display'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeSqlOrderby(string $orderby): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHtmlClass(string $classname, string $fallback = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeLocaleName(string $localeName): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function convertChars(string $content, string $deprecated = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function convertInvalidEntities(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function balanceTags(string $text, bool $force = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function forceBalanceTags(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function formatToEdit(string $content, bool $richText = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function zeroise(int $number, int $threshold): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function backslashit(string $value): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trailingslashit(string $value): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function untrailingslashit(mixed $value): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addslashesGpc(string|array $gpc): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripslashesDeep(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripslashesFromStringsOnly(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function urlencodeDeep(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function rawurlencodeDeep(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function urldecodeDeep(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function antispambot(string $emailAddress, int $hexEncoding = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function makeClickable(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRelCallback(array $matches, string $rel): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRelNofollow(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRelUgc(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTargetedLinkRel(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTargetedLinkRelCallback(array $matches): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInitTargetedLinkRelFilters(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoveTargetedLinkRelFilters(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translateSmiley(array $matches): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function convertSmilies(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isEmail(string $email, bool $deprecated = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsoDescrambler(string $subject): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getGmtFromDate(string $dateString, string $format = 'Y-m-d H:i:s'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDateFromGmt(string $dateString, string $format = 'Y-m-d H:i:s'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iso8601TimezoneToOffset(string $timezone): int|float
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iso8601ToDatetime(string $dateString, string $timezone = 'user'): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeEmail(string $email): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function humanTimeDiff(int $from, int $to = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrimExcerpt(string $text = '', int|object $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrimWords(string $text, int $numWords = 55, string $more = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function ent2ncr(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function formatForEditor(string $text, string $defaultEditor = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escSql(string|array $data): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escUrl(string $url, array $protocols = null, string $context = 'display'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escUrlRaw(string $url, array $protocols = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUrl(string $url, array $protocols = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function htmlentities2(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escJs(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escHtml(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escAttr(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escTextarea(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escXml(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function tagEscape(string $tagName): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMakeLinkRelative(string $link): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeOption(string $option, mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mapDeep(mixed $value, callable $callback): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseStr(string $inputString, array &$result): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesLessThan(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesLessThanCallback(array $matches): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesBlockAttributes(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSprintf(string $pattern, mixed ...$args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSprintfL(string $pattern, array $args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHtmlExcerpt(string $str, int $count, string $more = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linksAddBaseUrl(string $content, string $base, array $attrs = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function linksAddTarget(string $content, string $target = '_blank', array $tags = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function normalizeWhitespace(string $str): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStripAllTags(string $text, bool $removeBreaks = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTextField(string $str): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTextareaField(string $str): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpBasename(string $path, string $suffix = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function capitalPDangit(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeMimeType(string $mimeType): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTrackbackUrls(string $toPing): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSlash(string|array $value): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnslash(string|array $value): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUrlInContent(string $content): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSpacesRegexp(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEmojiStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printEmojiDetectionScript(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEncodeEmoji(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStaticizeEmoji(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStaticizeEmojiForEmail(array $mail): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function urlShorten(string $url, int $length = 35): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHexColor(string $color): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHexColorNoHash(string $color): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maybeHashHexColor(string $color): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mysql2date(string $format, string $date, bool $translate = true): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentTime(string $type, int|bool $gmt = 0): int|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentDatetime(): \DateTimeImmutable
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneString(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTimezone(): \DateTimeZone
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dateI18n(string $format, int|bool $timestampWithOffset = false, bool $gmt = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDate(string $format, int $timestamp = null, \DateTimeZone $timezone = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeDeclineDate(string $date, string $format = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function numberFormatI18n(float $number, int $decimals = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sizeFormat(int|string $bytes, int $decimals = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function humanReadableDuration(string $duration = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getWeekstartend(string $mysqlstring, int|string $startOfWeek = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maybeSerialize(string|array|object $data): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maybeUnserialize(string $data): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSerialized(string $data, bool $strict = true): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSerializedString(string $data): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcGetposttitle(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcGetpostcategory(string $content): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcRemovepostdata(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpExtractUrls(string $content): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doEnclose(string|null $content, int|\WP_Post $post): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetHttpHeaders(string $url, bool $deprecated = false): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isNewDay(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function buildQuery(array $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addQueryArg(mixed ...$args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeQueryArg(string|array $key, false|string $query = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemovableQueryArgs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMagicQuotes(array $inputArray): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteFopen(string $uri): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wp(string|array $queryVars = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStatusHeaderDesc(int $code): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function statusHeader(int $code, string $description = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNocacheHeaders(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nocacheHeaders(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheJavascriptHeaders(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNumQueries(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function boolFromYn(string $yn): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFeed(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFeedRdf(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFeedRss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFeedRss2(bool $forComments): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFeedAtom(bool $forComments): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doRobots(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doFavicon(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isBlogInstalled(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNonceUrl(string $actionurl, int|string $action, string $name = '_wpnonce'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNonceField(int|string $action, string $name = '_wpnonce', bool $referer = true, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRefererField(bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOriginalRefererField(bool $display = true, string $jumpBackTo = 'current'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetReferer(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetRawReferer(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalReferer(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMkdirP(string $target): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pathIsAbsolute(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pathJoin(string $base, string $path): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNormalizePath(string $path): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTempDir(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsWritable(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function winIsWritable(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUploadDir(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUploadDir(string|null $time = null, bool $createDir = true, bool $refreshCache = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueFilename(string $dir, string $filename, callable $uniqueFilenameCallback = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUploadBits(string $name, null|string $deprecated, string $bits, string|null $time = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpExt2type(string $ext): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDefaultExtensionForMimeType(string $mimeType): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckFiletype(string $filename, array|null $mimes = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckFiletypeAndExt(string $file, string $filename, array|null $mimes = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetImageMime(string $file): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetMimeTypes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetExtTypes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilesize(string $path): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllowedMimeTypes(int|\WP_User $user = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNonceAys(string $action): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDie(string|\WP_Error $message = '', string|int $title = '', string|array|int $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpJsonEncode(mixed $value, int $flags = 0, int $depth = 512): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSendJson(mixed $response, int $statusCode = null, int $flags = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSendJsonSuccess(mixed $value = null, int $statusCode = null, int $flags = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSendJsonError(mixed $value = null, int $statusCode = null, int $flags = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckJsonpCallback(string $callback): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpJsonFileDecode(string $filename, array $options = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsServingRestRequest(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function smiliesInit(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseArgs(string|array|object $args, array $defaults = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseList(array|string $inputList): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseIdList(array|string $inputList): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseSlugList(array|string $inputList): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpArraySliceAssoc(array $inputArray, array $keys): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRecursiveKsort(array &$inputArray): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsNumericArray(mixed $data): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterObjectList(array $inputList, array $args = [], string $operator = 'and', bool|string $field = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListFilter(array $inputList, array $args = [], string $operator = 'AND'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListPluck(array $inputList, int|string $field, int|string $indexKey = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListSort(array $inputList, string|array $orderby = [], string $order = 'ASC', bool $preserveKeys = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeLoadWidgets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsAddMenu(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpObEndFlushAll(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deadDb(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function absint(mixed $maybeint): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTriggerError(string $functionName, string $message, int $errorLevel = E_USER_NOTICE): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isLighttpdBefore150(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function apacheModLoaded(string $mod, bool $defaultValue = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function iis7SupportsPermalinks(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateFile(string $file, array $allowedFiles = []): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function forceSslAdmin(string|bool $force = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGuessUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSuspendCacheAddition(bool $suspend = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSuspendCacheInvalidation(bool $suspend = true): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMainSite(int $siteId = null, int $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMainSiteId(int $networkId = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMainNetwork(int $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMainNetworkId(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSiteMetaSupported(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneOverrideOffset(): float|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneChoice(string $selectedZone, string $locale = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduledDelete(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFileData(string $file, array $defaultHeaders, string $context = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sendNosniffHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sendFrameOptionsHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAllowedProtocols(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDebugBacktraceSummary(string $ignoreClass = null, int $skipFrames = 0, bool $pretty = true): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsStream(string $path): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckdate(int $month, int $day, int $year, string $sourceDate): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheckLoad(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheckHtml(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheck(array $response): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTagRegex(string $tag): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUtf8Charset(string|null $blogCharset = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mbstringBinarySafeEncoding(bool $reset = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function resetMbstringEncoding(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateBoolean(mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteFile(string $file): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteFileFromDirectory(string $file, string $directory): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPostPreviewJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mysqlToRfc3339(string $dateString): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRaiseMemoryLimit(string $context = 'admin'): int|string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateUuid4(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsUuid(mixed $uuid, int $version = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueId(string $prefix = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUniquePrefixedId(string $prefix = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGetLastChanged(string $group): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetLastChanged(string $group): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSiteAdminEmailChangeNotification(string $oldEmail, string $newEmail, string $optionName): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyAnonymizeIp(string $ipAddr, mixed $ipv6Fallback = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyAnonymizeData(string $type, string $data = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyExportsDir(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyExportsUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleDeleteOldPrivacyExportFiles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyDeleteOldExportFiles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdatePhpUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePhpAnnotation(string $before = '<p class="description">', string $after = '</p>', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdatePhpAnnotation(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDirectPhpUpdateUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDirectPhpUpdateButton(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdateHttpsUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDirectUpdateHttpsUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDirsize(string $directory, int $maxExecutionTime = null): int|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function recurseDirsize(string $directory, string|array $exclude = null, int $maxExecutionTime = null, array &$directoryCache = null): int|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanDirsizeCache(string $path): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isWpVersionCompatible(string $required): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPhpVersionCompatible(string $required): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFuzzyNumberMatch(int|float $expected, int|float $actual, int|float $precision = 1): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAdminNotice(string $message, array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminNotice(string $message, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScripts(): \WP_Scripts
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintScripts(string|array|false $handles = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddInlineScript(string $handle, string $data, string $position = 'after'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterScript(string $handle, string|false $src, array $deps = [], string|bool|null $ver = false, array|bool $args = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeScript(string $handle, string $objectName, mixed $l10n): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetScriptTranslations(string $handle, string $domain = 'default', string $path = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterScript(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScript(string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, array|bool $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueScript(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScriptIs(string $handle, string $status = 'enqueued'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScriptAddData(string $handle, string $key, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyles(): \WP_Styles
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintStyles(string|bool|array $handles = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddInlineStyle(string $handle, string $data): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterStyle(string $handle, string|false $src, array $deps = [], string|bool|null $ver = false, string $media = 'all'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterStyle(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueStyle(string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, string $media = 'all'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueStyle(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleIs(string $handle, string $status = 'enqueued'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleAddData(string $handle, string $key, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeader(string $name = null, array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFooter(string $name = null, array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSidebar(string $name = null, array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTemplatePart(string $slug, string|null $name = null, array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchForm(array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoginout(string $redirect = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLogoutUrl(string $redirect = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoginUrl(string $redirect = '', bool $forceReauth = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegistrationUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoginForm(array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLostpasswordUrl(string $redirect = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegister(string $before = '<li>', string $after = '</li>', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function bloginfo(string $show = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBloginfo(string $show = '', string $filter = 'raw'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteIconUrl(int $size = 512, string $url = '', int $blogId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function siteIconUrl(int $size = 512, string $url = '', int $blogId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasSiteIcon(int $blogId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasCustomLogo(int $blogId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCustomLogo(int $blogId = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCustomLogo(int $blogId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDocumentTitle(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTitle(string $sep = '&raquo;', bool $display = true, string $seplocation = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function singlePostTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postTypeArchiveTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function singleCatTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function singleTagTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function singleTermTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function singleMonthTitle(string $prefix = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theArchiveTitle(string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheArchiveTitle(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theArchiveDescription(string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheArchiveDescription(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostTypeDescription(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getArchivesLink(string $url, string $text, string $format = 'html', string $before = '', string $after = '', bool $selected = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetArchives(string|array $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function calendarWeekMod(int $num): float
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCalendar(bool $initial = true, bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteGetCalendarCache(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function allowedTags(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theDateXml(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theDate(string $format = '', string $before = '', string $after = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheDate(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theModifiedDate(string $format = '', string $before = '', string $after = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedDate(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTime(string $format = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTime(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTime(string $format = 'U', bool $gmt = false, int|\WP_Post $post = null, bool $translate = false): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostDatetime(int|\WP_Post $post = null, string $field = 'date', string $source = 'local'): \DateTimeImmutable|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTimestamp(int|\WP_Post $post = null, string $field = 'date'): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theModifiedTime(string $format = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedTime(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostModifiedTime(string $format = 'U', bool $gmt = false, int|\WP_Post $post = null, bool $translate = false): string|int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theWeekday(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theWeekdayDate(string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHead(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFooter(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpBodyOpen(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function feedLinks(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function feedLinksExtra(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function rsdLink(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStrictCrossOriginReferrer(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSiteIcon(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResourceHints(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPreloadResources(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDependenciesUniqueHosts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function userCanRichedit(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultEditor(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEditor(string $content, string $editorId, array $settings = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueCodeEditor(array $args): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCodeEditorSettings(array $args): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchQuery(bool $escaped = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theSearchQuery(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLanguageAttributes(string $doctype = 'html'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function languageAttributes(string $doctype = 'html'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function paginateLinks(string|array $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCssColor(string $key, string $name, string $url, array $colors = [], array $icons = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerAdminColorSchemes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCssUri(string $file = 'wp-admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCss(string $file = 'wp-admin', bool $forceEcho = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addThickbox(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerator(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theGenerator(string $type): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheGenerator(string $type = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checked(mixed $checked, mixed $current = true, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function selected(mixed $selected, mixed $current = true, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function disabled(mixed $disabled, mixed $current = true, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReadonly(mixed $readonlyValue, mixed $current = true, bool $display = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRequiredFieldIndicator(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRequiredFieldMessage(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHeartbeatSettings(array $settings): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalSettings(array $path = [], array $context = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStyles(array $path = [], array $context = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStylesheet(array $types = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStylesCustomCss(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddGlobalStylesForBlocks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThemeHasThemeJson(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCleanThemeJsonCache(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDirectoryPatternSlugs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDataCustomTemplates(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDataTemplateParts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetBlockCssSelector(\WP_Block_Type $blockType, string|array $target = 'root', bool $fallback = false): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteRequest(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteGet(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemotePost(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteHead(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRequest(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteGet(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemotePost(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteHead(string $url, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveHeaders(array|\WP_Error $response): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveHeader(array|\WP_Error $response, string $header): array|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveResponseCode(array|\WP_Error $response): int|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveResponseMessage(array|\WP_Error $response): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveBody(array|\WP_Error $response): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookies(array|\WP_Error $response): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookie(array|\WP_Error $response, string $name): \WP_Http_Cookie|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookieValue(array|\WP_Error $response, string $name): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHttpSupports(array $capabilities = [], string $url = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHttpOrigin(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllowedHttpOrigins(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAllowedHttpOrigin(string|null $origin = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sendOriginHeaders(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHttpValidateUrl(string $url): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function allowedHttpRequestHosts(bool $isExternal, string $host): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msAllowedHttpRequestHosts(bool $isExternal, string $host): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseUrl(string $url, int $component): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsUsingHttps(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsHomeUrlUsingHttps(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteUrlUsingHttps(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsHttpsSupported(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShouldReplaceInsecureHomeUrl(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpReplaceInsecureHomeUrl(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUrlsToHttps(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivity(): \WP_Interactivity_API
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityProcessDirectives(string $html): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityState(string $storeNamespace = null, array $state = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityConfig(string $storeNamespace, array $config = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityDataWpContext(array $context, string $storeNamespace = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityGetContext(string $storeNamespace = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKses(string $content, array|string $allowedHtml, array $allowedProtocols = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesOneAttr(string $attr, string $element): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAllowedHtml(string|array $context = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHook(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesVersion(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesSplit(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesUriAttributes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttr(string $element, string $attr, array|string $allowedHtml, array $allowedProtocols): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttrCheck(string &$name, string &$value, string &$whole, string $vless, string $element, array $allowedHtml): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHair(string $attr, array $allowedProtocols): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttrParse(string $element): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHairParse(string $attr): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesCheckAttrVal(string $value, string $vless, string $checkname, mixed $checkvalue): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesBadProtocol(string $content, array $allowedProtocols): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNoNull(string $content, array $options = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesStripslashes(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesArrayLc(array $inarray): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHtmlError(string $attr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesBadProtocolOnce(string $content, array $allowedProtocols, int $count = 1): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNormalizeEntities(string $content, string $context = 'html'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNamedEntities(array $matches): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesXmlNamedEntities(array $matches): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validUnicode(int $i): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesDecodeEntities(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterKses(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesData(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterPostKses(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterGlobalStylesPost(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesPost(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpKsesPostDeep(mixed $data): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterNohtmlKses(string $data): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function ksesInitFilters(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function ksesRemoveFilters(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function ksesInit(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function safecssFilterAttr(string $css, string $deprecated = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLocale(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserLocale(int|\WP_User $user = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function determineLocale(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translate(string $text, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function beforeLastBar(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translateWithGettextContext(string $text, string $context, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function __(string $text, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escAttr__(string $text, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escHtml__(string $text, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _e(string $text, string $domain = 'default'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escAttrE(string $text, string $domain = 'default'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escHtmlE(string $text, string $domain = 'default'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _x(string $text, string $context, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _ex(string $text, string $context, string $domain = 'default'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escAttrX(string $text, string $context, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escHtmlX(string $text, string $context, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _n(string $single, string $plural, int $number, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _nx(string $single, string $plural, int $number, string $context, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _nNoop(string $singular, string $plural, string $domain = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _nxNoop(string $singular, string $plural, string $context, string $domain = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translateNoopedPlural(array $noopedPlural, int $count, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadTextdomain(string $domain, string $mofile, string $locale = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unloadTextdomain(string $domain, bool $reloadable = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadDefaultTextdomain(string $locale = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadPluginTextdomain(string $domain, string|false $deprecated = false, string|false $pluginRelPath = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadMupluginTextdomain(string $domain, string $muPluginRelPath = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadThemeTextdomain(string $domain, string|false $path = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadChildThemeTextdomain(string $domain, string|false $path = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadScriptTextdomain(string $handle, string $domain = 'default', string $path = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadScriptTranslations(string|false $file, string $handle, string $domain): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTranslationsForDomain(string $domain): \Translations|\NOOP_Translations
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTextdomainLoaded(string $domain): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function translateUserRole(string $name, string $domain = 'default'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvailableLanguages(string $dir = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetInstalledTranslations(string $type): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPomoFileData(string $poFile): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetL10nPhpFileData(string $phpFile): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownLanguages(string|array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isRtl(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function switchToLocale(string $locale): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function switchToUserLocale(int $userId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restorePreviousLocale(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restoreCurrentLocale(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isLocaleSwitched(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetListItemSeparator(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetWordCountType(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePermalink(int|\WP_Post $post = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function userTrailingslashit(string $url, string $typeOfUrl = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function permalinkAnchor(string $mode = 'id'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpForcePlainPostPermalink(\WP_Post|int|null $post = null, bool|null $sample = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePermalink(int|\WP_Post $post = 0, bool $leavename = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPermalink(int|\WP_Post $post = 0, bool $leavename = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostPermalink(int|\WP_Post $post = 0, bool $leavename = false, bool $sample = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageLink(int|\WP_Post|false $post = false, bool $leavename = false, bool $sample = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentLink(int|\WP_Post $post = null, bool $leavename = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getYearLink(int|false $year): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMonthLink(int|false $year, int|false $month): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDayLink(int|false $year, int|false $month, int|false $day): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theFeedLink(string $anchor, string $feed = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFeedLink(string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostCommentsFeedLink(int $postId = 0, string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCommentsFeedLink(string $linkText = '', int|string $postId = '', string $feed = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAuthorFeedLink(int $authorId, string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryFeedLink(int|object $cat, string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermFeedLink(int|object $term, string $taxonomy = '', string $feed = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTagFeedLink(int|object $tag, string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditTagLink(int|object $tag, string $taxonomy = 'post_tag'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editTagLink(string $link = '', string $before = '', string $after = '', \WP_Term $tag = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditTermLink(int|object $term, string $taxonomy = '', string $objectType = ''): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editTermLink(string $link = '', string $before = '', string $after = '', int|\WP_Term|null $term = null, bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchLink(string $query = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchFeedLink(string $searchQuery = '', string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchCommentsFeedLink(string $searchQuery = '', string $feed = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveLink(string $postType): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveFeedLink(string $postType, string $feed = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviewPostLink(int|\WP_Post $post = null, array $queryArgs = [], string $previewLink = ''): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditPostLink(int|\WP_Post $post = 0, string $context = 'display'): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editPostLink(string $text = null, string $before = '', string $after = '', int|\WP_Post $post = 0, string $cssClass = 'post-edit-link'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDeletePostLink(int|\WP_Post $post = 0, string $deprecated = '', bool $forceDelete = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditCommentLink(int|\WP_Comment $commentId = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editCommentLink(string $text = null, string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditBookmarkLink(int|\stdClass $link = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function editBookmarkLink(string $link = '', string $before = '', string $after = '', int $bookmark = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditUserLink(int $userId = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPost(bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): \WP_Post|null|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextPost(bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): \WP_Post|null|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPost(bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): \WP_Post|null|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostsRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostsRelLinkWpHead(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function prevPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBoundaryPost(bool $inSameTerm = false, array|string $excludedTerms = '', bool $start = true, string $taxonomy = 'category'): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostLink(string $format = '&laquo; %link', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function previousPostLink(string $format = '&laquo; %link', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPostLink(string $format, string $link, bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostLink(string $format, string $link, bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPagenumLink(int $pagenum = 1, bool $escape = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextPostsPageLink(int $maxPage = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextPosts(int $maxPage = 0, bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextPostsLink(string $label = null, int $maxPage = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextPostsLink(string $label = null, int $maxPage = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostsPageLink(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function previousPosts(bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostsLink(string $label = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function previousPostsLink(string $label = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostsNavLink(string|array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postsNavLink(string $sep = '', string $prelabel = '', string $nxtlabel = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostNavigation(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostNavigation(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostsNavigation(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostsNavigation(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostsPagination(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostsPagination(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCommentsPagenumLink(int $pagenum = 1, int $maxPage = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextCommentsLink(string $label = '', int $maxPage = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextCommentsLink(string $label = '', int $maxPage = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousCommentsLink(string $label = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function previousCommentsLink(string $label = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function paginateCommentsLinks(string|array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCommentsNavigation(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCommentsNavigation(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheCommentsPagination(array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCommentsPagination(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function homeUrl(string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHomeUrl(int|null $blogId = null, string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function siteUrl(string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteUrl(int|null $blogId = null, string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adminUrl(string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdminUrl(int|null $blogId = null, string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function includesUrl(string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function contentUrl(string $path = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginsUrl(string $path = '', string $plugin = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkSiteUrl(string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkHomeUrl(string $path = '', string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function networkAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function userAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function selfAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setUrlScheme(string $url, string|null $scheme = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDashboardUrl(int $userId = 0, string $path = '', string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditProfileUrl(int $userId = 0, string $scheme = 'admin'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCanonicalUrl(int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function relCanonical(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetShortlink(int $id = 0, string $context = 'post', bool $allowSlugs = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShortlinkWpHead(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShortlinkHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theShortlink(string $text = '', string $title = '', string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvatarUrl(mixed $idOrEmail, array $args = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAvatarCommentType(string $commentType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvatarData(mixed $idOrEmail, array $args = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeFileUri(string $file = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getParentThemeFileUri(string $file = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeFilePath(string $file = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getParentThemeFilePath(string $file = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPrivacyPolicyUrl(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePrivacyPolicyLink(string $before = '', string $after = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePrivacyPolicyLink(string $before = '', string $after = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInternalHosts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsInternalLink(string $link): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetServerProtocol(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPopulateBasicAuthFromAuthorizationHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetEnvironmentType(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetDevelopmentMode(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsDevelopmentMode(string $mode): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsMaintenanceMode(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function timerFloat(): float
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function timerStop(int|bool $display = 0, int $precision = 3): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function requireWpDb(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUsingExtObjectCache(bool $using = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSkipPausedPlugins(array $plugins): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSkipPausedThemes(array $themes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsRecoveryMode(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isProtectedEndpoint(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isProtectedAjaxAction(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isLogin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAdmin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isBlogAdmin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isNetworkAdmin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUserAdmin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMultisite(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentBlogId(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentNetworkId(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInstalling(bool $isInstalling = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSsl(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpConvertHrToBytes(string $value): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsIniValueChangeable(string $setting): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDoingAjax(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUsingThemes(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDoingCron(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isWpError(mixed $thing): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsFileModAllowed(string $context): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStartScrapingEditedFileErrors(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFinalizeScrapingEditedFileErrors(string $scrapeKey): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonRequest(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonpRequest(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonMediaType(string $mediaType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsXmlRequest(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteProtectedByBasicAuth(string $context = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscoreAudioTemplate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscoreVideoTemplate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintMediaTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAdditionalImageSizes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageConstrainSizeForEditor(int $width, int $height, string|array $size = 'medium', string $context = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageHwstring(int|string $width, int|string $height): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageDownsize(int $id, string|array $size = 'medium'): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addImageSize(string $name, int $width = 0, int $height = 0, bool|array $crop = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasImageSize(string $name): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeImageSize(string $name): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setPostThumbnailSize(int $width = 0, int $height = 0, bool|array $crop = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getImageTag(int $id, string $alt, string $title, string $align, string|array $size = 'medium'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpConstrainDimensions(int $currentWidth, int $currentHeight, int $maxWidth = 0, int $maxHeight = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageResizeDimensions(int $origW, int $origH, int $destW, int $destH, bool|array $crop = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageMakeIntermediateSize(string $file, int $width, int $height, bool|array $crop = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageMatchesRatio(int $sourceWidth, int $sourceHeight, int $targetWidth, int $targetHeight): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imageGetIntermediateSize(int $postId, string|array $size = 'thumbnail'): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getIntermediateImageSizes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetRegisteredImageSubsizes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSrc(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImage(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false, string|array $attr = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageUrl(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSrcset(int $attachmentId, string|array $size = 'medium', array|null $imageMeta = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCalculateImageSrcset(array $sizeArray, string $imageSrc, array $imageMeta, int $attachmentId = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSizes(int $attachmentId, string|array $size = 'medium', array|null $imageMeta = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCalculateImageSizes(string|array $size, string|null $imageSrc = null, array|null $imageMeta = null, int $attachmentId = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageFileMatchesImageMeta(string $imageLocation, array $imageMeta, int $attachmentId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageSrcGetDimensions(string $imageSrc, array $imageMeta, int $attachmentId = 0): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageAddSrcsetAndSizes(string $image, array $imageMeta, int $attachmentId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLazyLoadingEnabled(string $tagName, string $context): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterContentTags(string $content, string $context = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddLoadingOptimizationAttrs(string $image, string $context): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddWidthAndHeightAttr(string $image, string $context, int $attachmentId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddSrcsetAndSizesAttr(string $image, string $context, int $attachmentId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIframeTagAddLoadingAttr(string $iframe, string $context): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function imgCaptionShortcode(array $attr, string $content = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function galleryShortcode(array $attr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscorePlaylistTemplates(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPlaylistScripts(string $type): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPlaylistShortcode(array $attr): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMediaelementFallback(string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAudioExtensions(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentId3Keys(\WP_Post $attachment, string $context = 'display'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAudioShortcode(array $attr, string $content = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetVideoExtensions(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpVideoShortcode(array $attr, string $content = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPreviousImageLink(string|array $size = 'thumbnail', string|false $text = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function previousImageLink(string|array $size = 'thumbnail', string|false $text = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNextImageLink(string|array $size = 'thumbnail', string|false $text = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextImageLink(string|array $size = 'thumbnail', string|false $text = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentImageLink(bool $prev = true, string|array $size = 'thumbnail', bool $text = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adjacentImageLink(bool $prev = true, string|array $size = 'thumbnail', bool $text = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentTaxonomies(int|array|object $attachment, string $output = 'names'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomiesForAttachments(string $output = 'names'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isGdImage(\resource|\GdImage|false $image): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImagecreatetruecolor(int $width, int $height): \resource|\GdImage|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpExpandDimensions(int $exampleWidth, int $exampleHeight, int $maxWidth, int $maxHeight): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaxUploadSize(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetImageEditor(string $path, array $args = []): \WP_Image_Editor|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpImageEditorSupports(string|array $args = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPluploadDefaultSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareAttachmentForJs(int|\WP_Post $attachment): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueMedia(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachedMedia(string $type, int|\WP_Post $post = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMediaEmbeddedInContent(string $content, array $types = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleries(int|\WP_Post $post, bool $html = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostGallery(int|\WP_Post $post = 0, bool $html = true): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleriesImages(int|\WP_Post $post = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleryImages(int|\WP_Post $post = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGenerateAttachmentMetadata(\WP_Post $attachment): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function attachmentUrlToPostid(string $url): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpviewMediaSandboxStyles(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterMediaPersonalDataExporter(array $exporters): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMediaPersonalDataExporter(string $emailAddress, int $page = 1): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShowHeicUploadError(array $pluploadSettings): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetimagesize(string $filename, array &$imageInfo = null): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAvifInfo(string $filename): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetWebpInfo(string $filename): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetLoadingOptimizationAttributes(string $tagName, array $attr, string $context): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOmitLoadingAttrThreshold(bool $force = false): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue = '', bool $deleteAll = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetadata(string $metaType, int $objectId, string $metaKey = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetadataRaw(string $metaType, int $objectId, string $metaKey = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetadataDefault(string $metaType, int $objectId, string $metaKey, bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function metadataExists(string $metaType, int $objectId, string $metaKey): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetadataByMid(string $metaType, int $metaId): \stdClass|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateMetadataByMid(string $metaType, int $metaId, string $metaValue, string|false $metaKey = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteMetadataByMid(string $metaType, int $metaId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateMetaCache(string $metaType, string|array $objectIds): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMetadataLazyloader(): \WP_Metadata_Lazyloader
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMetaSql(array $metaQuery, string $type, string $primaryTable, string $primaryIdColumn, object $context = null): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isProtectedMeta(string $metaKey, string $metaType = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeMeta(string $metaKey, mixed $metaValue, string $objectType, string $objectSubtype = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerMeta(string $objectType, string $metaKey, array $args, string|array $deprecated = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterDefaultMetadata(mixed $value, int $objectId, string $metaKey, bool $single, string $metaType): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registeredMetaKeyExists(string $objectType, string $metaKey, string $objectSubtype = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterMetaKey(string $objectType, string $metaKey, string $objectSubtype = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredMetaKeys(string $objectType, string $objectSubtype = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredMetadata(string $objectType, int $objectId, string $metaKey = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getObjectSubtype(string $objectType, int $objectId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuUpdateBlogsDate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogaddressById(int $blogId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogaddressByName(string $blogname): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getIdFromBlogname(string $slug): int|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogDetails(int|string|array $fields = null, bool $getAll = true): \WP_Site|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function refreshBlogDetails(int $blogId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateBlogDetails(int $blogId, array $details = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanSiteDetailsCache(int $siteId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogOption(int $id, string $option, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addBlogOption(int $id, string $option, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteBlogOption(int $id, string $option): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateBlogOption(int $id, string $option, mixed $value, mixed $deprecated = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function switchToBlog(int $newBlogId, bool $deprecated = null): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restoreCurrentBlog(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSwitchRolesAndUser(int $newSiteId, int $oldSiteId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msIsSwitched(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isArchived(int $id): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateArchived(int $id, string $archived): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateBlogStatus(int $blogId, string $pref, string $value, null $deprecated = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogStatus(int $id, string $pref): bool|string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLastUpdated(mixed $deprecated = '', int $start = 0, int $quantity = 40): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCountSites(int $networkId = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msUploadConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msCookieConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msFileConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msSubdomainConstants(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSitestats(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getActiveBlogForUser(int $userId): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogCount(int|null $networkId = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogPost(int $blogId, int $postId): \WP_Post|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addUserToBlog(int $blogId, int $userId, string $role): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeUserFromBlog(int $userId, int $blogId = 0, int $reassign = 0): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogPermalink(int $blogId, int $postId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogIdFromUrl(string $domain, string $path = '/'): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isEmailAddressUnsafe(string $userEmail): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuValidateUserSignup(string $userName, string $userEmail): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuValidateBlogSignup(string $blogname, string $blogTitle, \WP_User|string $user = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupBlog(string $domain, string $path, string $title, string $user, string $userEmail, array $meta = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupUser(string $user, string $userEmail, array $meta = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupBlogNotification(string $domain, string $path, string $title, string $userLogin, string $userEmail, string $key, array $meta = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupUserNotification(string $userLogin, string $userEmail, string $key, array $meta = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuActivateSignup(string $key): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteSignupOnUserDelete(int $id, int|null $reassign, \WP_User $user): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuCreateUser(string $userName, string $password, string $email): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuCreateBlog(string $domain, string $path, string $title, int $userId, array $options = [], int $networkId = 1): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function newblogNotifySiteadmin(\WP_Site|int $blogId, string $deprecated = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function newuserNotifySiteadmin(int $userId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function domainExists(string $domain, string $path, int $networkId = 1): int|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuWelcomeNotification(int $blogId, int $userId, string $password, string $title, array $meta = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuNewSiteAdminNotification(int $siteId, int $userId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuWelcomeUserNotification(int $userId, string $password, array $meta = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentSite(): \WP_Network
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getMostRecentPostOfUser(int $userId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkUploadMimes(array $mimes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostsCount(string $deprecated = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuLogNewRegistrations(\WP_Site|int $blogId, int|array $userId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function redirectThisSite(array|string $deprecated = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function uploadIsFileTooBig(array $upload): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupNonceFields(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupNonceCheck(array $result): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maybeRedirect404(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function maybeAddExistingUserToBlog(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addExistingUserToBlog(array|false $details = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addNewUserToBlog(int $userId, string $password, array $meta): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function fixPhpmailerMessageid(\PHPMailer $phpmailer): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUserSpammy(string|\WP_User $user = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateBlogPublic(int $oldValue, int $value): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function usersCanRegisterSignupFilter(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function welcomeUserMsgFilter(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function forceSslContent(bool|string $force = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterSSL(string $url): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateNetworkCounts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkCounts(int|null $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkSiteCounts(int|null $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkUserCounts(int|null $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkSiteCounts(int|null $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkUserCounts(int|null $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSpaceUsed(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSpaceAllowed(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUploadSpaceAvailable(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUploadSpaceAvailable(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function uploadSizeLimitFilter(int $size): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsLargeNetwork(string $using = 'sites', int|null $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSubdirectoryReservedNames(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkOptionNewAdminEmail(string $oldValue, string $value): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNetworkAdminEmailChangeNotification(string $optionName, string $newEmail, string $oldEmail, int $networkId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSubdomainInstall(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function msSiteCheck(): true|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNetworkByPath(string $domain, string $path, int|null $segments = null): \WP_Network|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteByPath(string $domain, string $path, int|null $segments = null): \WP_Site|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNetwork(\WP_Network|int|null $network = null): \WP_Network|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNetworks(string|array $args = []): array|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanNetworkCache(int|array $ids): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkCache(array $networks): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertSite(array $data): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateSite(int $siteId, array $data): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteSite(int $siteId): \WP_Site|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSite(\WP_Site|int|null $site = null): \WP_Site|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadSiteMeta(array $siteIds): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateSiteCache(array $sites, bool $updateMetaCache = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateSitemetaCache(array $siteIds): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSites(string|array $args = []): array|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareSiteData(array $data, array $defaults, \WP_Site|null $oldSite = null): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNormalizeSiteData(array $data): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateSiteData(\WP_Error $errors, array $data, \WP_Site|null $oldSite = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInitializeSite(int|\WP_Site $siteId, array $args = []): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUninitializeSite(int|\WP_Site $siteId): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteInitialized(int|\WP_Site $siteId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanBlogCache(\WP_Site|int $blog): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSiteMeta(int $siteId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteMeta(int $siteId, string $metaKey, mixed $metaValue = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteMeta(int $siteId, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateSiteMeta(int $siteId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteMetaByKey(string $metaKey): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkSiteCountsOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeTransitionSiteStatusesOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeCleanNewSiteCacheOnUpdate(\WP_Site $newSite, \WP_Site $oldSite): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateBlogPublicOptionOnSiteUpdate(int $siteId, string $isPublic): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetSitesLastChanged(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckSiteMetaSupportPrefilter(mixed $check): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenu(array $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function walkNavMenuTree(array $items, int $depth, \stdClass $args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuRemoveMenuItemHasChildrenClass(array $classes, \WP_Post $menuItem, \stdClass|false $args = false, int|false $depth = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuObject(int|string|\WP_Term $menu): \WP_Term|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isNavMenu(int|string|\WP_Term $menu): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerNavMenus(array $locations = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterNavMenu(string $location): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerNavMenu(string $location, string $description): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredNavMenus(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNavMenuLocations(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasNavMenu(string $location): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuName(string $location): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isNavMenuItem(int $menuItemId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateNavMenu(string $menuName): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteNavMenu(int|string|\WP_Term $menu): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNavMenuObject(int $menuId = 0, array $menuData = []): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNavMenuItem(int $menuId = 0, int $menuItemDbId = 0, array $menuItemData = [], bool $fireAfterHooks = true): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenus(array $args = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuItems(int|string|\WP_Term $menu, array $args = []): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateMenuItemCache(array $menuItems): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetupNavMenuItem(object $menuItem): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAssociatedNavMenuItems(int $objectId = 0, string $objectType = 'post_type', string $taxonomy = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMapNavMenuLocations(array $newNavMenuLocations, array $oldNavMenuLocations): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOption(string $option, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeOptionCaches(array $options): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeOptionCachesByGroup(string $optionGroup): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOptions(array $options): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionAutoloadValues(array $options): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionsAutoload(array $options, string|bool $autoload): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionAutoload(string $option, string|bool $autoload): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpProtectSpecialOption(string $option): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function formOption(string $option): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoadAlloptions(bool $forceCache = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeSiteOptionCaches(array $options): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeNetworkOptionCaches(int $networkId, array $options): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoadCoreSiteOptions(int $networkId = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateOption(string $option, mixed $value, bool|null $autoload = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addOption(string $option, mixed $value = '', string $deprecated = '', bool|null $autoload = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteOption(string $option): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteTransient(string $transient): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTransient(string $transient): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setTransient(string $transient, mixed $value, int $expiration = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteExpiredTransients(bool $forceDb = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUserSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserSetting(string $name, string|false $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setUserSetting(string $name, string $value): bool|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteUserSetting(string $names): bool|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllUserSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteAllUserSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteOption(string $option, mixed $defaultValue = false, bool $deprecated = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addSiteOption(string $option, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteOption(string $option): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateSiteOption(string $option, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getNetworkOption(int $networkId, string $option, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addNetworkOption(int $networkId, string $option, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteNetworkOption(int $networkId, string $option): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkOption(int $networkId, string $option, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteTransient(string $transient): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSiteTransient(string $transient): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setSiteTransient(string $transient, mixed $value, int $expiration = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerInitialSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerSetting(string $optionGroup, string $optionName, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterSetting(string $optionGroup, string $optionName, callable $deprecated = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function filterDefaultOption(mixed $defaultValue, string $option, bool $passedDefault): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAutoloadValuesToAutoload(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetCurrentUser(int|null $id, string $name = ''): \WP_User
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCurrentUser(): \WP_User
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserdata(int $userId): \WP_User|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserBy(string $field, int|string $value): \WP_User|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheUsers(array $userIds): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMail(string|array $to, string $subject, string $message, string|array $headers = '', string|array $attachments = []): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticate(string $username, string $password): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLogout(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateAuthCookie(string $cookie = '', string $scheme = ''): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateAuthCookie(int $userId, int $expiration, string $scheme = 'auth', string $token = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseAuthCookie(string $cookie = '', string $scheme = ''): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetAuthCookie(int $userId, bool $remember = false, bool|string $secure = '', string $token = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpClearAuthCookie(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUserLoggedIn(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function authRedirect(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkAdminReferer(int|string $action, string $queryArg = '_wpnonce'): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkAjaxReferer(int|string $action, false|string $queryArg = false, bool $stop = true): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRedirect(string $location, int $status = 302, string|false $xRedirectBy = 'WordPress'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSanitizeRedirect(string $location): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRedirect(string $location, int $status = 302, string|false $xRedirectBy = 'WordPress'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateRedirect(string $location, string $fallbackUrl = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNotifyPostauthor(int|\WP_Comment $commentId, string $deprecated = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNotifyModerator(int $commentId): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPasswordChangeNotification(\WP_User $user): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNewUserNotification(int $userId, null $deprecated = null, string $notify = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpNonceTick(string|int $action): float
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpVerifyNonce(string $nonce, string|int $action): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateNonce(string|int $action): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSalt(string $scheme = 'auth'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHash(string $data, string $scheme = 'auth'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpHashPassword(string $password): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPassword(string $password, string $hash, string|int $userId = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGeneratePassword(int $length = 12, bool $specialChars = true, bool $extraSpecialChars = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRand(int $min = null, int $max = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetPassword(string $password, int $userId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvatar(mixed $idOrEmail, int $size = 96, string $defaultValue = '', string $alt = '', array $args = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTextDiff(string $leftString, string $rightString, string|array $args = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addFilter(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyFilters(string $hookName, mixed $value, mixed ...$args): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyFiltersRefArray(string $hookName, array $args): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasFilter(string $hookName, callable|string|array|false $callback = false): bool|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeFilter(string $hookName, callable|string|array $callback, int $priority = 10): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAllFilters(string $hookName, int|false $priority = false): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentFilter(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doingFilter(string|null $hookName = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function didFilter(string $hookName): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addAction(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAction(string $hookName, mixed ...$arg): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doActionRefArray(string $hookName, array $args): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasAction(string $hookName, callable|string|array|false $callback = false): bool|int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAction(string $hookName, callable|string|array $callback, int $priority = 10): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAllActions(string $hookName, int|false $priority = false): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentAction(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doingAction(string|null $hookName = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function didAction(string $hookName): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyFiltersDeprecated(string $hookName, array $args, string $version, string $replacement = '', string $message = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doActionDeprecated(string $hookName, array $args, string $version, string $replacement = '', string $message = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginBasename(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterPluginRealpath(string $file): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginDirPath(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginDirUrl(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerActivationHook(string $file, callable $callback): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerDeactivationHook(string $file, callable $callback): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerUninstallHook(string $file, callable $callback): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostFormat(int|\WP_Post|null $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasPostFormat(string|array $format = [], \WP_Post|int|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setPostFormat(int|\WP_Post $post, string $format): array|\WP_Error|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatStrings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatSlugs(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatString(string $slug): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatLink(string $format): string|\WP_Error|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theID(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheID(): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTitle(string $before = '', string $after = '', bool $display = true): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTitleAttribute(string|array $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTitle(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theGuid(int|\WP_Post $post = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheGuid(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theContent(string $moreLinkText = null, bool $stripTeaser = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheContent(string $moreLinkText = null, bool $stripTeaser = false, int|object $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theExcerpt(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheExcerpt(int|\WP_Post $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasExcerpt(int|\WP_Post $post = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postClass(string|array $cssClass = '', int|\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostClass(string|array $cssClass = '', int|\WP_Post $post = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function bodyClass(string|array $cssClass = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBodyClass(string|array $cssClass = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postPasswordRequired(int|\WP_Post|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLinkPages(string|array $args = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postCustom(string $key = ''): array|string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownPages(array|string $args = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListPages(array|string $args = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPageMenu(array|string $args = []): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function walkPageTree(array $pages, int $depth, int $currentPage, array $args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function walkPageDropdownTree(mixed ...$args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theAttachmentLink(int|\WP_Post $post = 0, bool $fullsize = false, bool $deprecated = false, bool $permalink = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentLink(int|\WP_Post $post = 0, string|array $size = 'thumbnail', bool $permalink = false, bool $icon = false, string|false $text = false, array|string $attr = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function prependAttachment(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePasswordForm(int|\WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPageTemplate(string|array $template = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplateSlug(int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionTitle(int|\WP_Post $revision, bool $link = true): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionTitleExpanded(int|\WP_Post $revision, bool $link = true): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListPostRevisions(int|\WP_Post $post = 0, string $type = 'all'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostParent(int|\WP_Post|null $post = null): \WP_Post|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasPostParent(int|\WP_Post|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasPostThumbnail(int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostThumbnailId(int|\WP_Post $post = null): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnail(string|array $size = 'post-thumbnail', string|array $attr = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostThumbnailCache(\WP_Query $wpQuery = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnail(int|\WP_Post $post = null, string|array $size = 'post-thumbnail', string|array $attr = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailUrl(int|\WP_Post $post = null, string|array $size = 'post-thumbnail'): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnailUrl(string|array $size = 'post-thumbnail'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailCaption(int|\WP_Post $post = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnailCaption(int|\WP_Post $post = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function createInitialPostTypes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachedFile(int $attachmentId, bool $unfiltered = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateAttachedFile(int $attachmentId, string $file): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getChildren(mixed $args = '', string $output = OBJECT): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getExtended(string $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPost(int|\WP_Post|null $post = null, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostAncestors(int|\WP_Post $post): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostField(string $field, int|\WP_Post $post = null, string $context = 'display'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostMimeType(int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStatus(int|\WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStatuses(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageStatuses(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerPostStatus(string $postStatus, array|string $args = []): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStatusObject(string $postStatus): \stdClass|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStati(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeHierarchical(string $postType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postTypeExists(string $postType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostType(int|\WP_Post|null $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeObject(string $postType): \WP_Post_Type|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypes(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerPostType(string $postType, array|string $args = []): \WP_Post_Type|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterPostType(string $postType): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeCapabilities(object $args): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPostTypeSupport(string $postType, string|array $feature, mixed ...$args): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removePostTypeSupport(string $postType, string $feature): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllPostTypeSupports(string $postType): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function postTypeSupports(string $postType, string $feature): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypesBySupport(array|string $feature, string $operator = 'and'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setPostType(int $postId = 0, string $postType = 'post'): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeViewable(string|\WP_Post_Type $postType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPostStatusViewable(string|\stdClass $postStatus): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPostPubliclyViewable(int|\WP_Post|null $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPosts(array $args = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPostMeta(int $postId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deletePostMeta(int $postId, string $metaKey, mixed $metaValue = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostMeta(int $postId, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostMeta(int $postId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deletePostMetaByKey(string $postMetaKey): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerPostMeta(string $postType, string $metaKey, array $args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterPostMeta(string $postType, string $metaKey): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostCustom(int $postId = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostCustomKeys(int $postId = 0): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostCustomValues(string $key = '', int $postId = 0): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSticky(int $postId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizePost(array|object $post, string $context = 'display'): array|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizePostField(string $field, mixed $value, int $postId, string $context = 'display'): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stickPost(int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unstickPost(int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCountPosts(string $type = 'post', string $perm = ''): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCountAttachments(string|array $mimeType = ''): \stdClass
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostMimeTypes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMatchMimeTypes(string|array $wildcardMimeTypes, string|array $realMimeTypes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPostMimeTypeWhere(string|array $postMimeTypes, string $tableAlias = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeletePost(int $postId = 0, bool $forceDelete = false): \WP_Post|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrashPost(int $postId = 0): \WP_Post|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPost(int $postId = 0): \WP_Post|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTrashPostComments(int|\WP_Post|null $post = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPostComments(int|\WP_Post|null $post = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostCategories(int $postId = 0, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostTags(int $postId = 0, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostTerms(int $postId = 0, string|array $taxonomy = 'post_tag', array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetRecentPosts(array $args = [], string $output = ARRAY_A): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertPost(array $postarr, bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePost(array|object $postarr = [], bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPublishPost(int|\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkAndPublishFuturePost(int|\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResolvePostDate(string $postDate = '', string $postDateGmt = ''): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUniquePostSlug(string $slug, int $postId, string $postStatus, string $postType, int $postParent): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddPostTags(int $postId = 0, string|array $tags = ''): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostTags(int $postId = 0, string|array $tags = '', bool $append = false): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostTerms(int $postId = 0, string|array $terms = '', string $taxonomy = 'post_tag', bool $append = false): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostCategories(int $postId = 0, array|int $postCategories = [], bool $append = false): array|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAfterInsertPost(int|\WP_Post $post, bool $update, null|\WP_Post $postBefore): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPing(int|\WP_Post $post, string|array $uri): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEnclosed(int $postId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPung(int|\WP_Post $post): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getToPing(int|\WP_Post $post): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trackbackUrlList(string $tbList, int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAllPageIds(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageByPath(string $pagePath, string $output = OBJECT, string|array $postType = 'page'): \WP_Post|array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageChildren(int $pageId, array $pages): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageHierarchy(array &$pages, int $pageId = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageUri(int|object $page = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPages(array|string $args = []): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isLocalAttachment(string $url): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertAttachment(string|array $args, string|false $file = false, int $parentPostId = 0, bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAttachment(int $postId, bool $forceDelete = false): \WP_Post|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAttachmentFiles(int $postId, array $meta, array $backupSizes, string $file): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentMetadata(int $attachmentId = 0, bool $unfiltered = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateAttachmentMetadata(int $attachmentId, array $data): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentUrl(int $attachmentId = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentCaption(int $postId = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentThumbUrl(int $postId = 0): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAttachmentIs(string $type, int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAttachmentIsImage(int|\WP_Post $post = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMimeTypeIcon(string|int $mime = 0, string $preferredExt = '.png'): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckForChangedSlugs(int $postId, \WP_Post $post, \WP_Post $postBefore): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckForChangedDates(int $postId, \WP_Post $post, \WP_Post $postBefore): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPrivatePostsCapSql(string|array $postType): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostsByAuthorSql(string|array $postType, bool $full = true, int $postAuthor = null, bool $publicOnly = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLastpostdate(string $timezone = 'server', string $postType = 'any'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLastpostmodified(string $timezone = 'server', string $postType = 'any'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostCache(array &$posts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanPostCache(int|\WP_Post $post): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostCaches(array &$posts, string $postType = 'post', bool $updateTermCache = true, bool $updateMetaCache = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostAuthorCaches(array $posts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostParentCaches(array $posts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updatePostmetaCache(array $postIds): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanAttachmentCache(int $id, bool $cleanTerms = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostParentId(int|\WP_Post|null $post = null): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPostHierarchyForLoops(int $postParent, int $postId): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setPostThumbnail(int|\WP_Post $post, int $thumbnailId): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deletePostThumbnail(int|\WP_Post $post): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAutoDrafts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpQueuePostsForTermMetaLazyload(array $posts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetPostsLastChanged(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAvailablePostMimeTypes(string $type = 'attachment'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalImagePath(int $attachmentId, bool $unfiltered = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalImageUrl(int $attachmentId): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPostSetPreviousStatus(string $newStatus, int $postId, string $previousStatus): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function useBlockEditorForPost(int|\WP_Post $post): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function useBlockEditorForPostType(string $postType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateInitialPostMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getQueryVar(string $queryVar, mixed $defaultValue = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getQueriedObject(): \WP_Term|\WP_Post_Type|\WP_Post|\WP_User|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getQueriedObjectId(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setQueryVar(string $queryVar, mixed $value): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function queryPosts(array|string $query): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResetQuery(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResetPostdata(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isArchive(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeArchive(string|array $postTypes = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAttachment(int|string|array $attachment = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAuthor(int|string|array $author = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isCategory(int|string|array $category = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTag(int|string|array $tag = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTax(string|array $taxonomy = '', int|string|array $term = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isDate(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isDay(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isFeed(string|array $feeds = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isCommentFeed(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isFrontPage(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isHome(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPrivacyPolicy(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMonth(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPage(int|string|array $page = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPaged(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isPreview(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isRobots(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isFavicon(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSearch(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSingle(int|string|array $post = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isSingular(string|array $postTypes = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTime(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTrackback(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isYear(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function is404(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isEmbed(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isMainQuery(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function havePosts(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function inTheLoop(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function rewindPosts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function thePost(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function haveComments(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theComment(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpOldSlugRedirect(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setupPostdata(int|object $post): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function generatePostdata(int|object $post): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerRestRoute(string $routeNamespace, string $route, array $args = [], bool $override = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerRestField(string|array $objectType, string $attribute, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApiInit(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApiRegisterRewrites(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApiDefaultFilters(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function createInitialRestRoutes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApiLoaded(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetUrlPrefix(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRestUrl(int|null $blogId = null, string $path = '/', string $scheme = 'rest'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restUrl(string $path = '', string $scheme = 'rest'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restDoRequest(\WP_REST_Request|string $request): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetServer(): \WP_REST_Server
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restEnsureRequest(array|string|\WP_REST_Request $request): \WP_REST_Request
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restEnsureResponse(mixed $response): \WP_REST_Response|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restHandleDeprecatedFunction(string $functionName, string $replacement, string $version): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restHandleDeprecatedArgument(string $functionName, string $message, string $version): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restHandleDoingItWrong(string $functionName, string $message, string|null $version): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSendCorsHeaders(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restHandleOptionsRequest(mixed $response, \WP_REST_Server $handler, \WP_REST_Request $request): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSendAllowHeader(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFilterResponseFields(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsFieldIncluded(string $field, array $fields): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restOutputRsd(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restOutputLinkWpHead(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restOutputLinkHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restCookieCheckErrors(mixed $result): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restCookieCollectStatus(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApplicationPasswordCollectStatus(\WP_Error $userOrError, array $appPassword = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetAuthenticatedAppPassword(): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restApplicationPasswordCheckErrors(\WP_Error|null|true $result): \WP_Error|null|true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restAddApplicationPasswordsToIndex(\WP_REST_Response $response): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetAvatarUrls(mixed $idOrEmail): string|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetAvatarSizes(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restParseDate(string $date, bool $forceUtc = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restParseHexColor(string $color): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetDateWithGmt(string $date, bool $isUtc = false): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restAuthorizationRequiredCode(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateRequestArg(mixed $value, \WP_REST_Request $request, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restParseRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsIpAddress(string $ip): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeBoolean(bool|string|int $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsBoolean(bool|string $maybeBool): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsInteger(mixed $maybeInteger): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsArray(mixed $maybeArray): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeArray(mixed $maybeArray): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restIsObject(mixed $maybeObject): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeObject(mixed $maybeObject): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetBestTypeForValue(mixed $value, array $types): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restHandleMultiTypeSchema(mixed $value, array $args, string $param = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateArrayContainsUniqueItems(array $inputArray): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restStabilizeValue(mixed $value): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateJsonSchemaPattern(string $pattern, string $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFindMatchingPatternPropertySchema(string $property, array $args): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFormatCombiningOperationError(string $param, array $error): \WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetCombiningOperationError(array $value, string $param, array $errors): \WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFindAnyMatchingSchema(mixed $value, array $args, string $param): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFindOneMatchingSchema(mixed $value, array $args, string $param, bool $stopAfterFirstMatch = false): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restAreValuesEqual(mixed $value1, mixed $value2): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateEnum(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetAllowedSchemaKeywords(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateValueFromSchema(mixed $value, array $args, string $param = ''): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateNullValueFromSchema(mixed $value, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateBooleanValueFromSchema(mixed $value, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateObjectValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateArrayValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateNumberValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateStringValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restValidateIntegerValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeValueFromSchema(mixed $value, array $args, string $param = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restPreloadApiRequest(array $memo, string $path): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restParseEmbedParam(string|array $embed): true|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restFilterResponseByContext(array|object $responseData, array $schema, string $context): array|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restDefaultAdditionalPropertiesToFalse(array $schema): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForPost(int|\WP_Post $post): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForPostTypeItems(string $postType): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForTerm(int|\WP_Term $term): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForTaxonomyItems(string $taxonomy): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetQueriedResourceRoute(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restGetEndpointArgsForSchema(array $schema, string $method): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restConvertErrorToResponse(\WP_Error $error): \WP_REST_Response
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsRestEndpoint(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSavePostRevisionOnInsert(int $postId, \WP_Post $post, bool $update): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSavePostRevision(int $postId): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostAutosave(int $postId, int $userId = 0): \WP_Post|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsPostRevision(int|\WP_Post $post): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsPostAutosave(int|\WP_Post $post): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSaveRevisionedMetaFields(int $revisionId, int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevision(int|\WP_Post &$post, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRestorePostRevision(int|\WP_Post $revision, array $fields = null): int|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRestorePostRevisionMeta(int $postId, int $revisionId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionMetaKeys(string $postType): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckRevisionedMetaFieldsHaveChanged(bool $postHasChanged, \WP_Post $lastRevision, \WP_Post $post): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeletePostRevision(int|\WP_Post $revision): \WP_Post|false|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevisions(int|\WP_Post $post = 0, array|null $args = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetLatestRevisionIdAndTotalCount(int|\WP_Post $post = 0): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevisionsUrl(int|\WP_Post $post = 0): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRevisionsEnabled(\WP_Post $post): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRevisionsToKeep(\WP_Post $post): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addRewriteRule(string $regex, string|array $query, string $after = 'bottom'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addRewriteTag(string $tag, string $regex, string $query = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeRewriteTag(string $tag): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addPermastruct(string $name, string $struct, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removePermastruct(string $name): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addFeed(string $feedname, callable $callback): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function flushRewriteRules(bool $hard = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addRewriteEndpoint(string $name, int $places, string|bool $queryVar = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpResolveNumericSlugConflicts(array $queryVars = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function urlToPostid(string $url): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobots(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindex(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindexEmbeds(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindexSearch(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoRobots(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsSensitivePage(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsMaxImagePreviewLarge(array $robots): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterTinymceScripts(\WP_Scripts $scripts, bool $forceUncompressed = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesVendor(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetScriptPolyfill(\WP_Scripts $scripts, array $tests): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterDevelopmentScripts(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesScripts(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesInlineScripts(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTinymceInlineScripts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackages(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScriptsGetSuffix(string $type = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultScripts(\WP_Scripts $scripts): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultStyles(\WP_Styles $styles): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrototypeBeforeJquery(array $jsArray): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpJustInTimeScriptLocalization(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeJqueryUiDatepicker(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeCommunityEvents(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleLoaderSrc(string $src, string $handle): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printHeadScripts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printFooterScripts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintHeadScripts(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFooterScripts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScripts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printAdminStyles(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function printLateStyles(): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function scriptConcatSettings(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCommonBlockScriptsAndStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOutBlockNodes(array $nodes): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStylesCustomCss(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShouldLoadBlockEditorScriptsAndStyles(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShouldLoadSeparateCoreBlockAssets(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueRegisteredBlockScriptsAndStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueBlockStylesAssets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueEditorBlockStylesAssets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditorBlockDirectoryAssets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditorFormatLibraryAssets(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSanitizeScriptAttributes(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetScriptTag(array $attributes): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintScriptTag(array $attributes): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetInlineScriptTag(string $data, array $attributes = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpPrintInlineScriptTag(string $data, array $attributes = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeInlineStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStylesCssCustomProperties(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueBlockSupportStyles(string $style, int $priority = 10): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueStoredStyles(array $options = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueBlockStyle(string $blockName, array $args): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueClassicThemeStyles(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddEditorClassicThemeStyles(array $editorSettings): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScriptModules(): \WP_Script_Modules
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterScriptModule(string $id, string $src, array $deps = [], string|false|null $version = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScriptModule(string $id, string $src = '', array $deps = [], string|false|null $version = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueScriptModule(string $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterScriptModule(string $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addShortcode(string $tag, callable $callback): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeShortcode(string $tag): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeAllShortcodes(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function shortcodeExists(string $tag): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasShortcode(string $content, string $tag): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeTagsInContent(string $content): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyShortcodes(string $content, bool $ignoreHtml = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doShortcode(string $content, bool $ignoreHtml = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeRegex(array $tagnames = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doShortcodesInHtmlTags(string $content, bool $ignoreHtml, array $tagnames): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unescapeInvalidShortcodes(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeAttsRegex(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function shortcodeParseAtts(string $text): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function shortcodeAtts(array $pairs, array $atts, string $shortcode = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripShortcodes(string $content): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function stripShortcodeTag(array $m): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSitemapsGetServer(): \WP_Sitemaps
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSitemapProviders(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterSitemapProvider(string $name, \WP_Sitemaps_Provider $provider): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSitemapsGetMaxUrls(string $objectType): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSitemapUrl(string $name, string $subtypeName = '', int $page = 1): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStyles(array $blockStyles, array $options = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStylesheetFromCssRules(array $cssRules, array $options = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStylesheetFromContext(string $context, array $options = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function createInitialTaxonomies(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomies(array $args = [], string $output = 'names', string $operator = 'and'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getObjectTaxonomies(string|array|\WP_Post $objectType, string $output = 'names'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomy(string $taxonomy): \WP_Taxonomy|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function taxonomyExists(string $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTaxonomyHierarchical(string $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): \WP_Taxonomy|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterTaxonomy(string $taxonomy): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomyLabels(\WP_Taxonomy $tax): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getObjectsInTerm(int|array $termIds, string|array $taxonomies, array|string $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxSql(array $taxQuery, string $primaryTable, string $primaryIdColumn): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTerm(int|object $term, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|\WP_Error|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermBy(string $field, string|int $value, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermChildren(int $termId, string $taxonomy): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermField(string $field, int|\WP_Term $term, string $taxonomy = '', string $context = 'display'): string|int|null|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermToEdit(int|object $id, string $taxonomy): string|int|null|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTerms(array|string $args = [], array|string $deprecated = ''): array|string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addTermMeta(int $termId, string $metaKey, mixed $metaValue, bool $unique = false): int|false|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteTermMeta(int $termId, string $metaKey, mixed $metaValue = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermMeta(int $termId, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateTermMeta(int $termId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateTermmetaCache(array $termIds): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadTermMeta(array $termIds): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasTermMeta(int $termId): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerTermMeta(string $taxonomy, string $metaKey, array $args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterTermMeta(string $taxonomy, string $metaKey): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function termExists(int|string $term, string $taxonomy = '', int $parentTerm = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function termIsAncestorOf(mixed $term1, mixed $term2, string $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTerm(array|object $term, string $taxonomy, string $context = 'display'): array|object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTermField(string $field, string $value, int $termId, string $taxonomy, string $context): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCountTerms(array|string $args = [], array|string $deprecated = ''): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteObjectTermRelationships(int $objectId, string|array $taxonomies): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteTerm(int $term, string $taxonomy, array|string $args = []): bool|int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteCategory(int $catId): bool|int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetObjectTerms(int|array $objectIds, string|array $taxonomies, array|string $args = []): array|string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertTerm(string $term, string $taxonomy, array|string $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetObjectTerms(int $objectId, string|int|array $terms, string $taxonomy, bool $append = false): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAddObjectTerms(int $objectId, string|int|array $terms, array|string $taxonomy): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRemoveObjectTerms(int $objectId, string|int|array $terms, string $taxonomy): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueTermSlug(string $slug, object $term): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTerm(int $termId, string $taxonomy, array $args = []): array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeferTermCounting(bool $defer = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTermCount(int|array $terms, string $taxonomy, bool $doDeferred = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTermCountNow(array $terms, string $taxonomy): true
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanObjectTermCache(int|array $objectIds, array|string $objectType): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanTermCache(int|array $ids, string $taxonomy = '', bool $cleanTaxonomy = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanTaxonomyCache(string $taxonomy): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getObjectTermCache(int $id, string $taxonomy): bool|array|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateObjectTermCache(string|array $objectIds, string|array $objectType): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateTermCache(array $terms, string $taxonomy = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSplitTerms(int $oldTermId): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSplitTerm(int $oldTermId, string $taxonomy): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpTermIsShared(int $termId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermLink(\WP_Term|int|string $term, string $taxonomy = ''): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theTaxonomies(array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTaxonomies(int|\WP_Post $post = 0, array $args = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTaxonomies(int|\WP_Post $post = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isObjectInTerm(int $objectId, string $taxonomy, int|string|array $terms = null): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isObjectInTaxonomy(string $objectType, string $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAncestors(int $objectId = 0, string $objectType = '', string $resourceType = ''): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetTermTaxonomyParentId(int $termId, string $taxonomy): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckTermHierarchyForLoops(int $parentTerm, int $termId, string $taxonomy): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTaxonomyViewable(string|\WP_Taxonomy $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isTermPubliclyViewable(int|\WP_Term $term): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetTermsLastChanged(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCheckTermMetaSupportPrefilter(mixed $check): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getQueryTemplate(string $type, array $templates = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getIndexTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function get404Template(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getArchiveTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAuthorTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCategoryTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTagTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomyTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getDateTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHomeTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getFrontPageTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPrivacyPolicyTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSearchTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSingleTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEmbedTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getSingularTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetTemplateGlobals(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function locateTemplate(string|array $templateNames, bool $load = false, bool $loadOnce = true, array $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadTemplate(string $templateFile, bool $loadOnce = true, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemePreviewPath(string $currentStylesheet = null): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAttachThemePreviewMiddleware(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInitializeThemePreviewHooks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSetUniqueSlugOnCreateTemplatePart(int $postId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemes(array $args = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetTheme(string $stylesheet = '', string $themeRoot = ''): \WP_Theme
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCleanThemesCache(bool $clearUpdateCache = true): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isChildTheme(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStylesheet(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectory(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectoryUri(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetUri(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getLocaleStylesheetUri(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTemplate(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTemplateDirectory(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTemplateDirectoryUri(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeRoots(): array|string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerThemeDirectory(string $directory): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function searchThemeDirectories(bool $force = false): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeRoot(string $stylesheetOrTemplate = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeRootUri(string $stylesheetOrTemplate = '', string $themeRoot = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRawThemeRoot(string $stylesheetOrTemplate, bool $skipCache = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function localeStylesheet(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function switchTheme(string $stylesheet): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateCurrentTheme(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateThemeRequirements(string $stylesheet): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeMods(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeMod(string $name, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setThemeMod(string $name, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeThemeMod(string $name): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeThemeMods(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderTextcolor(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function headerTextcolor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function displayHeaderText(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasHeaderImage(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderImage(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderImageTag(array $attr = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theHeaderImageTag(array $attr = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRandomHeaderImage(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isRandomHeaderImage(string $type = 'any'): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function headerImage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUploadedHeaderImages(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCustomHeader(): object
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerDefaultHeaders(array $headers): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterDefaultHeaders(string|array $header): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasHeaderVideo(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderVideoUrl(): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theHeaderVideoUrl(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getHeaderVideoSettings(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function hasCustomHeader(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isHeaderVideoActive(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCustomHeaderMarkup(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theCustomHeaderMarkup(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBackgroundImage(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function backgroundImage(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBackgroundColor(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function backgroundColor(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCustomCssCb(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCustomCssPost(string $stylesheet = ''): \WP_Post|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetCustomCss(string $stylesheet = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCustomCssPost(string $css, array $args = []): \WP_Post|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addEditorStyle(array|string $stylesheet = 'editor-style.css'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeEditorStyles(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditorStylesheets(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeStarterContent(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addThemeSupport(string $feature, mixed ...$args): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeSupport(string $feature, mixed ...$args): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeThemeSupport(string $feature): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function currentThemeSupports(string $feature, mixed ...$args): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function requireIfThemeSupports(string $feature, string $file): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerThemeFeature(string $feature, array $args = []): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredThemeFeatures(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredThemeFeature(string $feature): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkThemeSwitched(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCustomizeUrl(string $stylesheet = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCustomizeSupportScript(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isCustomizePreview(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function createInitialThemeFeatures(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsBlockTheme(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpThemeGetElementClassName(string $element): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpVersionCheck(array $extraStats = [], bool $forceCheck = false): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePlugins(array $extraStats = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateThemes(array $extraStats = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeAutoUpdate(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetTranslationUpdates(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdateData(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateChecks(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCleanUpdateCache(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAllTempBackups(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSignon(array $credentials = [], string|bool $secureCookie = ''): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateUsernamePassword(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateEmailPassword(\WP_User|\WP_Error|null $user, string $email, string $password): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateCookie(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateApplicationPassword(\WP_User|\WP_Error|null $inputUser, string $username, string $password): \WP_User|\WP_Error|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateApplicationPassword(int|false $inputUser): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateSpamCheck(\WP_User|\WP_Error|null $user): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateLoggedInCookie(int|false $userId): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function countUserPosts(int $userid, array|string $postType = 'post', bool $publicOnly = false): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function countManyUsersPosts(array $users, string|array $postType = 'post', bool $publicOnly = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentUserId(): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserOption(string $option, int $user = 0, string $deprecated = ''): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateUserOption(int $userId, string $optionName, mixed $newvalue, bool $isGlobal = false): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteUserOption(int $userId, string $optionName, bool $isGlobal = false): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUsers(array $args = []): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpListUsers(string|array $args = []): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBlogsOfUser(int $userId, bool $all = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isUserMemberOfBlog(int $userId = 0, int $blogId = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addUserMeta(int $userId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteUserMeta(int $userId, string $metaKey, mixed $metaValue = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserMeta(int $userId, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateUserMeta(int $userId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function countUsers(string $strategy = 'time', int|null $siteId = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserCount(int|null $networkId = null): int
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateUserCounts(int|null $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUserCounts(int|null $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateUserCounts(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsLargeUserCount(int|null $networkId = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setupUserdata(int $forUserId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownUsers(array|string $args = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUserField(string $field, mixed $value, int $userId, string $context): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function updateUserCaches(object $user): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cleanUserCache(\WP_User|int $user): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function usernameExists(string $username): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function emailExists(string $email): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateUsername(string $username): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpInsertUser(array|object $userdata): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUser(array|object $userdata): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateUser(string $username, string $password, string $email = ''): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUserContactMethods(\WP_User|null $user = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetPasswordHint(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPasswordResetKey(\WP_User $user): string|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function checkPasswordResetKey(string $key, string $login): \WP_User|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function retrievePassword(string $userLogin = null): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function resetPassword(\WP_User $user, string $newPass): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerNewUser(string $userLogin, string $userEmail): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSendNewUserNotifications(int $userId, string $notify = 'both'): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSessionToken(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetAllSessions(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyCurrentSession(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyOtherSessions(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyAllSessions(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUsersWithNoRole(int|null $siteId = null): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sendConfirmationOnProfileEmail(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function newUserEmailAdminNotice(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterUserPersonalDataExporter(array $exporters): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUserPersonalDataExporter(string $emailAddress): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCreateUserRequest(string $emailAddress = '', string $actionName = '', array $requestData = [], string $status = 'pending'): int|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUserRequestActionDescription(string $actionName): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSendUserRequest(string $requestId): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateUserRequestKey(int $requestId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpValidateUserRequestKey(string $requestId, string $key): true|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetUserRequest(int $requestId): \WP_User_Request|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsSupported(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsAvailable(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsAvailableForUser(int|\WP_User $user): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetUsersLastChanged(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsPasswordResetAllowedForUser(int|\WP_User $user): bool|\WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpIsMobile(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerWidget(string|\WP_Widget $widget): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterWidget(string|\WP_Widget $widget): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerSidebars(int $number = 1, array|string $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerSidebar(array|string $args = []): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function unregisterSidebar(string|int $sidebarId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isRegisteredSidebar(string|int $sidebarId): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterSidebarWidget(int|string $id, string $name, callable $outputCallback, array $options = [], mixed ...$params): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetDescription(int|string $id): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpSidebarDescription(string $id): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterSidebarWidget(int|string $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterWidgetControl(int|string $id, string $name, callable $controlCallback, array $options = [], mixed ...$params): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterWidgetControl(int|string $id): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function dynamicSidebar(int|string $index = 1): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isActiveWidget(callable|false $callback = false, string|false $widgetId = false, string|false $idBase = false, bool $skipInactive = true): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isDynamicSidebar(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isActiveSidebar(string|int $index): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpGetSidebar(string $id): array|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpConvertWidgetSettings(string $baseName, string $optionName, array $settings): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function theWidget(string $widget, array $instance = [], array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function retrieveWidgets(string|bool $themeChanged = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpMapSidebarsWidgets(array $existingSidebarsWidgets): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssOutput(string|array|object $rss, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssForm(array|string $args, array $inputs = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssProcess(array $widgetRss, bool $checkFeed = true): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsInit(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpUseWidgetsBlockEditor(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpParseWidgetId(string $id): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpFindWidgetsSidebar(string $widgetId): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpAssignWidgetToSidebar(string $widgetId, string $sidebarId): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRenderWidget(string $widgetId, string $sidebarId): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpRenderWidgetControl(string $id): string|null
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loginHeader(string|null $title = null, string $message = '', \WP_Error|null $wpError = null): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loginFooter(string $inputId = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpShakeJs(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpLoginViewportMeta(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doSignupHeader(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupStylesheet(): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function showBlogForm(string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateBlogForm(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function showUserForm(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateUserForm(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupAnotherBlog(string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateAnotherBlogSignup(): null|bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function confirmAnotherBlogSignup(string $domain, string $path, string $blogTitle, string $userName, string $userEmail = '', array $meta = [], int $blogId = 0): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupUser(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateUserSignup(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function confirmUserSignup(string $userName, string $userEmail): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupBlog(string $userName = '', string $userEmail = '', string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function validateBlogSignup(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function confirmBlogSignup(string $domain, string $path, string $blogTitle, string $userName = '', string $userEmail = '', array $meta = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function signupGetAvailableLanguages(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function trackbackResponse(int|bool $error = 0, string $errorMessage = ''): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }
}
