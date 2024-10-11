<?php

namespace WpService\Implementations;

/**
 * Class NativeWpService
 */
class NativeWpService implements \WpService\WpService
{
        /**
         * @inheritDoc
         */
    public function doActivateHeader(): void
    {
        do_activate_header();
    }

    /**
     * @inheritDoc
     */
    public function wpmuActivateStylesheet(): void
    {
        wpmu_activate_stylesheet();
    }

    /**
     * @inheritDoc
     */
    public function exportAddJs(): void
    {
        export_add_js();
    }

    /**
     * @inheritDoc
     */
    public function exportDateOptions(string $postType = 'post'): void
    {
        export_date_options($postType);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxNoprivHeartbeat(): void
    {
        wp_ajax_nopriv_heartbeat();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxFetchList(): void
    {
        wp_ajax_fetch_list();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAjaxTagSearch(): void
    {
        wp_ajax_ajax_tag_search();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpCompressionTest(): void
    {
        wp_ajax_wp_compression_test();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxImgeditPreview(): void
    {
        wp_ajax_imgedit_preview();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxOembedCache(): void
    {
        wp_ajax_oembed_cache();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAutocompleteUser(): void
    {
        wp_ajax_autocomplete_user();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetCommunityEvents(): void
    {
        wp_ajax_get_community_events();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDashboardWidgets(): void
    {
        wp_ajax_dashboard_widgets();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxLoggedIn(): void
    {
        wp_ajax_logged_in();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteComment(): void
    {
        wp_ajax_delete_comment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteTag(): void
    {
        wp_ajax_delete_tag();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteLink(): void
    {
        wp_ajax_delete_link();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteMeta(): void
    {
        wp_ajax_delete_meta();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePost(string $action): void
    {
        wp_ajax_delete_post($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxTrashPost(string $action): void
    {
        wp_ajax_trash_post($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUntrashPost(string $action): void
    {
        wp_ajax_untrash_post($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePage(string $action): void
    {
        wp_ajax_delete_page($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDimComment(): void
    {
        wp_ajax_dim_comment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddLinkCategory(string $action): void
    {
        wp_ajax_add_link_category($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddTag(): void
    {
        wp_ajax_add_tag();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetTagcloud(): void
    {
        wp_ajax_get_tagcloud();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetComments(string $action): void
    {
        wp_ajax_get_comments($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxReplytoComment(string $action): void
    {
        wp_ajax_replyto_comment($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxEditComment(): void
    {
        wp_ajax_edit_comment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddMenuItem(): void
    {
        wp_ajax_add_menu_item();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddMeta(): void
    {
        wp_ajax_add_meta();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxAddUser(string $action): void
    {
        wp_ajax_add_user($action);
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxClosedPostboxes(): void
    {
        wp_ajax_closed_postboxes();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHiddenColumns(): void
    {
        wp_ajax_hidden_columns();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateWelcomePanel(): void
    {
        wp_ajax_update_welcome_panel();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuGetMetabox(): void
    {
        wp_ajax_menu_get_metabox();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpLinkAjax(): void
    {
        wp_ajax_wp_link_ajax();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuLocationsSave(): void
    {
        wp_ajax_menu_locations_save();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMetaBoxOrder(): void
    {
        wp_ajax_meta_box_order();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMenuQuickSearch(): void
    {
        wp_ajax_menu_quick_search();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetPermalink(): void
    {
        wp_ajax_get_permalink();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSamplePermalink(): void
    {
        wp_ajax_sample_permalink();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInlineSave(): void
    {
        wp_ajax_inline_save();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInlineSaveTax(): void
    {
        wp_ajax_inline_save_tax();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxFindPosts(): void
    {
        wp_ajax_find_posts();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWidgetsOrder(): void
    {
        wp_ajax_widgets_order();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveWidget(): void
    {
        wp_ajax_save_widget();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateWidget(): void
    {
        wp_ajax_update_widget();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteInactiveWidgets(): void
    {
        wp_ajax_delete_inactive_widgets();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxMediaCreateImageSubsizes(): void
    {
        wp_ajax_media_create_image_subsizes();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUploadAttachment(): void
    {
        wp_ajax_upload_attachment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxImageEditor(): void
    {
        wp_ajax_image_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSetPostThumbnail(): void
    {
        wp_ajax_set_post_thumbnail();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetPostThumbnailHtml(): void
    {
        wp_ajax_get_post_thumbnail_html();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSetAttachmentThumbnail(): void
    {
        wp_ajax_set_attachment_thumbnail();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDateFormat(): void
    {
        wp_ajax_date_format();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxTimeFormat(): void
    {
        wp_ajax_time_format();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpRemovePostLock(): void
    {
        wp_ajax_wp_remove_post_lock();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDismissWpPointer(): void
    {
        wp_ajax_dismiss_wp_pointer();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetAttachment(): void
    {
        wp_ajax_get_attachment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxQueryAttachments(): void
    {
        wp_ajax_query_attachments();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachment(): void
    {
        wp_ajax_save_attachment();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachmentCompat(): void
    {
        wp_ajax_save_attachment_compat();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveAttachmentOrder(): void
    {
        wp_ajax_save_attachment_order();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendAttachmentToEditor(): void
    {
        wp_ajax_send_attachment_to_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendLinkToEditor(): void
    {
        wp_ajax_send_link_to_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHeartbeat(): void
    {
        wp_ajax_heartbeat();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGetRevisionDiffs(): void
    {
        wp_ajax_get_revision_diffs();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveUserColorScheme(): void
    {
        wp_ajax_save_user_color_scheme();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxQueryThemes(): void
    {
        wp_ajax_query_themes();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxParseEmbed(): void
    {
        wp_ajax_parse_embed();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxParseMediaShortcode(): void
    {
        wp_ajax_parse_media_shortcode();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDestroySessions(): void
    {
        wp_ajax_destroy_sessions();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxCropImage(): void
    {
        wp_ajax_crop_image();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxGeneratePassword(): void
    {
        wp_ajax_generate_password();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxNoprivGeneratePassword(): void
    {
        wp_ajax_nopriv_generate_password();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSaveWporgUsername(): void
    {
        wp_ajax_save_wporg_username();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInstallTheme(): void
    {
        wp_ajax_install_theme();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdateTheme(): void
    {
        wp_ajax_update_theme();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeleteTheme(): void
    {
        wp_ajax_delete_theme();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxInstallPlugin(): void
    {
        wp_ajax_install_plugin();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxActivatePlugin(): void
    {
        wp_ajax_activate_plugin();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxUpdatePlugin(): void
    {
        wp_ajax_update_plugin();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxDeletePlugin(): void
    {
        wp_ajax_delete_plugin();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSearchPlugins(): void
    {
        wp_ajax_search_plugins();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSearchInstallPlugins(): void
    {
        wp_ajax_search_install_plugins();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxEditThemePluginFile(): void
    {
        wp_ajax_edit_theme_plugin_file();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpPrivacyExportPersonalData(): void
    {
        wp_ajax_wp_privacy_export_personal_data();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxWpPrivacyErasePersonalData(): void
    {
        wp_ajax_wp_privacy_erase_personal_data();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxHealthCheckSiteStatusResult(): void
    {
        wp_ajax_health_check_site_status_result();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxRestNonce(): void
    {
        wp_ajax_rest_nonce();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxToggleAutoUpdates(): void
    {
        wp_ajax_toggle_auto_updates();
    }

    /**
     * @inheritDoc
     */
    public function wpAjaxSendPasswordReset(): void
    {
        wp_ajax_send_password_reset();
    }

    /**
     * @inheritDoc
     */
    public function addLink(): int|\WP_Error
    {
        return add_link();
    }

    /**
     * @inheritDoc
     */
    public function editLink(int $linkId = 0): int|\WP_Error
    {
        return edit_link($linkId);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultLinkToEdit(): \stdClass
    {
        return get_default_link_to_edit();
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteLink(int $linkId): true
    {
        return wp_delete_link($linkId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetLinkCats(int $linkId = 0): array
    {
        return wp_get_link_cats($linkId);
    }

    /**
     * @inheritDoc
     */
    public function getLinkToEdit(int|\stdClass $link): object
    {
        return get_link_to_edit($link);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertLink(array $linkdata, bool $wpError = false): int|\WP_Error
    {
        return wp_insert_link($linkdata, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpSetLinkCats(int $linkId = 0, array $linkCategories = []): void
    {
        wp_set_link_cats($linkId, $linkCategories);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateLink(array $linkdata): int|\WP_Error
    {
        return wp_update_link($linkdata);
    }

    /**
     * @inheritDoc
     */
    public function getCliArgs(string $param, bool $required = false): mixed
    {
        return get_cli_args($param, $required);
    }

    /**
     * @inheritDoc
     */
    public function commentExists(string $commentAuthor, string $commentDate, string $timezone = 'blog'): string|null
    {
        return comment_exists($commentAuthor, $commentDate, $timezone);
    }

    /**
     * @inheritDoc
     */
    public function editComment(): int|\WP_Error
    {
        return edit_comment();
    }

    /**
     * @inheritDoc
     */
    public function getCommentToEdit(int $id): \WP_Comment|false
    {
        return get_comment_to_edit($id);
    }

    /**
     * @inheritDoc
     */
    public function getPendingCommentsNum(int|array $postId): int|array
    {
        return get_pending_comments_num($postId);
    }

    /**
     * @inheritDoc
     */
    public function floatedAdminAvatar(string $name): string
    {
        return floated_admin_avatar($name);
    }

    /**
     * @inheritDoc
     */
    public function enqueueCommentHotkeysJs(): void
    {
        enqueue_comment_hotkeys_js();
    }

    /**
     * @inheritDoc
     */
    public function commentFooterDie(string $msg): void
    {
        comment_footer_die($msg);
    }

    /**
     * @inheritDoc
     */
    public function wpCredits(string $version = '', string $locale = ''): array|false
    {
        return wp_credits($version, $locale);
    }

    /**
     * @inheritDoc
     */
    public function wpCreditsSectionTitle(array $groupData = []): void
    {
        wp_credits_section_title($groupData);
    }

    /**
     * @inheritDoc
     */
    public function wpCreditsSectionList(array $credits = [], string $slug = ''): void
    {
        wp_credits_section_list($credits, $slug);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSetup(): void
    {
        wp_dashboard_setup();
    }

    /**
     * @inheritDoc
     */
    public function wpAddDashboardWidget(string $widgetId, string $widgetName, callable $callback, callable $controlCallback = null, array $callbackArgs = null, string $context = 'normal', string $priority = 'core'): void
    {
        wp_add_dashboard_widget($widgetId, $widgetName, $callback, $controlCallback, $callbackArgs, $context, $priority);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboard(): void
    {
        wp_dashboard();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRightNow(): void
    {
        wp_dashboard_right_now();
    }

    /**
     * @inheritDoc
     */
    public function wpNetworkDashboardRightNow(): void
    {
        wp_network_dashboard_right_now();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardQuickPress(string|false $errorMsg = false): void
    {
        wp_dashboard_quick_press($errorMsg);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentDrafts(array|false $drafts = false): void
    {
        wp_dashboard_recent_drafts($drafts);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSiteActivity(): void
    {
        wp_dashboard_site_activity();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentPosts(array $args): bool
    {
        return wp_dashboard_recent_posts($args);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRecentComments(int $totalItems = 5): bool
    {
        return wp_dashboard_recent_comments($totalItems);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRssOutput(string $widgetId): void
    {
        wp_dashboard_rss_output($widgetId);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardCachedRssWidget(string $widgetId, callable $callback, array $checkUrls = [], mixed ...$args): bool
    {
        return wp_dashboard_cached_rss_widget($widgetId, $callback, $checkUrls, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardTriggerWidgetControl(int|false $widgetControlId = false): void
    {
        wp_dashboard_trigger_widget_control($widgetControlId);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardRssControl(string $widgetId, array $formInputs = []): void
    {
        wp_dashboard_rss_control($widgetId, $formInputs);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardEventsNews(): void
    {
        wp_dashboard_events_news();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintCommunityEventsMarkup(): void
    {
        wp_print_community_events_markup();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintCommunityEventsTemplates(): void
    {
        wp_print_community_events_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPrimary(): void
    {
        wp_dashboard_primary();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPrimaryOutput(string $widgetId, array $feeds): void
    {
        wp_dashboard_primary_output($widgetId, $feeds);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardQuota(): mixed
    {
        return wp_dashboard_quota();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardBrowserNag(): void
    {
        wp_dashboard_browser_nag();
    }

    /**
     * @inheritDoc
     */
    public function dashboardBrowserNagClass(array $classes): array
    {
        return dashboard_browser_nag_class($classes);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckBrowserVersion(): array|false
    {
        return wp_check_browser_version();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardPhpNag(): void
    {
        wp_dashboard_php_nag();
    }

    /**
     * @inheritDoc
     */
    public function dashboardPhpNagClass(array $classes): array
    {
        return dashboard_php_nag_class($classes);
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardSiteHealth(): void
    {
        wp_dashboard_site_health();
    }

    /**
     * @inheritDoc
     */
    public function wpDashboardEmpty(): void
    {
        wp_dashboard_empty();
    }

    /**
     * @inheritDoc
     */
    public function wpWelcomePanel(): void
    {
        wp_welcome_panel();
    }

    /**
     * @inheritDoc
     */
    public function exportWp(array $args = []): void
    {
        export_wp($args);
    }

    /**
     * @inheritDoc
     */
    public function getFileDescription(string $file): string
    {
        return get_file_description($file);
    }

    /**
     * @inheritDoc
     */
    public function getHomePath(): string
    {
        return get_home_path();
    }

    /**
     * @inheritDoc
     */
    public function listFiles(string $folder = '', int $levels = 100, array $exclusions = [], bool $includeHidden = false): array|false
    {
        return list_files($folder, $levels, $exclusions, $includeHidden);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginFileEditableExtensions(string $plugin): array
    {
        return wp_get_plugin_file_editable_extensions($plugin);
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeFileEditableExtensions(\WP_Theme $theme): array
    {
        return wp_get_theme_file_editable_extensions($theme);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFileEditorTemplates(): void
    {
        wp_print_file_editor_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpEditThemePluginFile(array $args): true|\WP_Error
    {
        return wp_edit_theme_plugin_file($args);
    }

    /**
     * @inheritDoc
     */
    public function wpTempnam(string $filename = '', string $dir = ''): string
    {
        return wp_tempnam($filename, $dir);
    }

    /**
     * @inheritDoc
     */
    public function validateFileToEdit(string $file, array $allowedFiles = []): mixed
    {
        return validate_file_to_edit($file, $allowedFiles);
    }

    /**
     * @inheritDoc
     */
    public function wpHandleUpload(array &$file, array|false $overrides = false, string|null $time = null): array
    {
        return wp_handle_upload($file, $overrides, $time);
    }

    /**
     * @inheritDoc
     */
    public function wpHandleSideload(array &$file, array|false $overrides = false, string|null $time = null): array
    {
        return wp_handle_sideload($file, $overrides, $time);
    }

    /**
     * @inheritDoc
     */
    public function downloadUrl(string $url, int $timeout = 300, bool $signatureVerification = false): string|\WP_Error
    {
        return download_url($url, $timeout, $signatureVerification);
    }

    /**
     * @inheritDoc
     */
    public function verifyFileMd5(string $filename, string $expectedMd5): bool|\WP_Error
    {
        return verify_file_md5($filename, $expectedMd5);
    }

    /**
     * @inheritDoc
     */
    public function verifyFileSignature(string $filename, string|array $signatures, string|false $filenameForErrors = false): bool|\WP_Error
    {
        return verify_file_signature($filename, $signatures, $filenameForErrors);
    }

    /**
     * @inheritDoc
     */
    public function wpTrustedKeys(): array
    {
        return wp_trusted_keys();
    }

    /**
     * @inheritDoc
     */
    public function wpZipFileIsValid(string $file): bool
    {
        return wp_zip_file_is_valid($file);
    }

    /**
     * @inheritDoc
     */
    public function unzipFile(string $file, string $to): true|\WP_Error
    {
        return unzip_file($file, $to);
    }

    /**
     * @inheritDoc
     */
    public function copyDir(string $from, string $to, array $skipList = []): true|\WP_Error
    {
        return copy_dir($from, $to, $skipList);
    }

    /**
     * @inheritDoc
     */
    public function moveDir(string $from, string $to, bool $overwrite = false): true|\WP_Error
    {
        return move_dir($from, $to, $overwrite);
    }

    /**
     * @inheritDoc
     */
    public function wPFilesystem(array|false $args = false, string|false $context = false, bool $allowRelaxedFileOwnership = false): bool|null
    {
        return WP_Filesystem($args, $context, $allowRelaxedFileOwnership);
    }

    /**
     * @inheritDoc
     */
    public function getFilesystemMethod(array $args = [], string $context = '', bool $allowRelaxedFileOwnership = false): string
    {
        return get_filesystem_method($args, $context, $allowRelaxedFileOwnership);
    }

    /**
     * @inheritDoc
     */
    public function requestFilesystemCredentials(string $formPost, string $type = '', bool|\WP_Error $error = false, string $context = '', array $extraFields = null, bool $allowRelaxedFileOwnership = false): bool|array
    {
        return request_filesystem_credentials($formPost, $type, $error, $context, $extraFields, $allowRelaxedFileOwnership);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintRequestFilesystemCredentialsModal(): void
    {
        wp_print_request_filesystem_credentials_modal();
    }

    /**
     * @inheritDoc
     */
    public function wpOpcacheInvalidate(string $filepath, bool $force = false): bool
    {
        return wp_opcache_invalidate($filepath, $force);
    }

    /**
     * @inheritDoc
     */
    public function wpOpcacheInvalidateDirectory(string $dir): void
    {
        wp_opcache_invalidate_directory($dir);
    }

    /**
     * @inheritDoc
     */
    public function wpImageEditor(int $postId, false|object $msg = false): void
    {
        wp_image_editor($postId, $msg);
    }

    /**
     * @inheritDoc
     */
    public function wpStreamImage(\WP_Image_Editor $image, string $mimeType, int $attachmentId): bool
    {
        return wp_stream_image($image, $mimeType, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpSaveImageFile(string $filename, \WP_Image_Editor $image, string $mimeType, int $postId): array|\WP_Error|bool
    {
        return wp_save_image_file($filename, $image, $mimeType, $postId);
    }

    /**
     * @inheritDoc
     */
    public function imageEditApplyChanges(\WP_Image_Editor $image, array $changes): \WP_Image_Editor
    {
        return image_edit_apply_changes($image, $changes);
    }

    /**
     * @inheritDoc
     */
    public function streamPreviewImage(int $postId): bool
    {
        return stream_preview_image($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpRestoreImage(int $postId): \stdClass
    {
        return wp_restore_image($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpSaveImage(int $postId): \stdClass
    {
        return wp_save_image($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpCropImage(string|int $src, int $srcX, int $srcY, int $srcW, int $srcH, int $dstW, int $dstH, bool $srcAbs = false, string|false $dstFile = false): string|\WP_Error
    {
        return wp_crop_image($src, $srcX, $srcY, $srcW, $srcH, $dstW, $dstH, $srcAbs, $dstFile);
    }

    /**
     * @inheritDoc
     */
    public function wpGetMissingImageSubsizes(int $attachmentId): array
    {
        return wp_get_missing_image_subsizes($attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateImageSubsizes(int $attachmentId): array|\WP_Error
    {
        return wp_update_image_subsizes($attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateImageSubsizes(string $file, int $attachmentId): array
    {
        return wp_create_image_subsizes($file, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpCopyParentAttachmentProperties(string $cropped, int $parentAttachmentId, string $context = ''): array
    {
        return wp_copy_parent_attachment_properties($cropped, $parentAttachmentId, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateAttachmentMetadata(int $attachmentId, string $file): array
    {
        return wp_generate_attachment_metadata($attachmentId, $file);
    }

    /**
     * @inheritDoc
     */
    public function wpExifFrac2dec(string $str): int|float
    {
        return wp_exif_frac2dec($str);
    }

    /**
     * @inheritDoc
     */
    public function wpExifDate2ts(string $str): int|false
    {
        return wp_exif_date2ts($str);
    }

    /**
     * @inheritDoc
     */
    public function wpReadImageMetadata(string $file): array|false
    {
        return wp_read_image_metadata($file);
    }

    /**
     * @inheritDoc
     */
    public function fileIsValidImage(string $path): bool
    {
        return file_is_valid_image($path);
    }

    /**
     * @inheritDoc
     */
    public function fileIsDisplayableImage(string $path): bool
    {
        return file_is_displayable_image($path);
    }

    /**
     * @inheritDoc
     */
    public function loadImageToEdit(int $attachmentId, string $mimeType, string|array $size = 'full'): \resource|\GdImage|false
    {
        return load_image_to_edit($attachmentId, $mimeType, $size);
    }

    /**
     * @inheritDoc
     */
    public function getImporters(): array
    {
        return get_importers();
    }

    /**
     * @inheritDoc
     */
    public function registerImporter(string $id, string $name, string $description, callable $callback): mixed
    {
        return register_importer($id, $name, $description, $callback);
    }

    /**
     * @inheritDoc
     */
    public function wpImportCleanup(string $id): void
    {
        wp_import_cleanup($id);
    }

    /**
     * @inheritDoc
     */
    public function wpImportHandleUpload(): array
    {
        return wp_import_handle_upload();
    }

    /**
     * @inheritDoc
     */
    public function wpGetPopularImporters(): array
    {
        return wp_get_popular_importers();
    }

    /**
     * @inheritDoc
     */
    public function registerColumnHeaders(string $screen, array $columns): void
    {
        register_column_headers($screen, $columns);
    }

    /**
     * @inheritDoc
     */
    public function printColumnHeaders(string|\WP_Screen $screen, bool $withId = true): void
    {
        print_column_headers($screen, $withId);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTabs(): array
    {
        return media_upload_tabs();
    }

    /**
     * @inheritDoc
     */
    public function updateGalleryTab(array $tabs): array
    {
        return update_gallery_tab($tabs);
    }

    /**
     * @inheritDoc
     */
    public function theMediaUploadTabs(): void
    {
        the_media_upload_tabs();
    }

    /**
     * @inheritDoc
     */
    public function getImageSendToEditor(int $id, string $caption, string $title, string $align, string $url = '', bool|string $rel = false, string|array $size = 'medium', string $alt = ''): string
    {
        return get_image_send_to_editor($id, $caption, $title, $align, $url, $rel, $size, $alt);
    }

    /**
     * @inheritDoc
     */
    public function imageAddCaption(string $html, int $id, string $caption, string $title, string $align, string $url, string $size, string $alt = ''): string
    {
        return image_add_caption($html, $id, $caption, $title, $align, $url, $size, $alt);
    }

    /**
     * @inheritDoc
     */
    public function mediaSendToEditor(string $html): void
    {
        media_send_to_editor($html);
    }

    /**
     * @inheritDoc
     */
    public function mediaHandleUpload(string $fileId, int $postId, array $postData = [], array $overrides = []): int|\WP_Error
    {
        return media_handle_upload($fileId, $postId, $postData, $overrides);
    }

    /**
     * @inheritDoc
     */
    public function mediaHandleSideload(array $fileArray, int $postId = 0, string $desc = null, array $postData = []): int|\WP_Error
    {
        return media_handle_sideload($fileArray, $postId, $desc, $postData);
    }

    /**
     * @inheritDoc
     */
    public function wpIframe(callable $contentFunc, mixed ...$args): void
    {
        wp_iframe($contentFunc, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function mediaButtons(string $editorId = 'content'): void
    {
        media_buttons($editorId);
    }

    /**
     * @inheritDoc
     */
    public function getUploadIframeSrc(string $type = null, int $postId = null, string $tab = null): string
    {
        return get_upload_iframe_src($type, $postId, $tab);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadFormHandler(): mixed
    {
        return media_upload_form_handler();
    }

    /**
     * @inheritDoc
     */
    public function wpMediaUploadHandler(): null|string
    {
        return wp_media_upload_handler();
    }

    /**
     * @inheritDoc
     */
    public function mediaSideloadImage(string $file, int $postId = 0, string $desc = null, string $returnType = 'html'): string|int|\WP_Error
    {
        return media_sideload_image($file, $postId, $desc, $returnType);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadGallery(): string|null
    {
        return media_upload_gallery();
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadLibrary(): string|null
    {
        return media_upload_library();
    }

    /**
     * @inheritDoc
     */
    public function imageAlignInputFields(\WP_Post $post, string $checked = ''): string
    {
        return image_align_input_fields($post, $checked);
    }

    /**
     * @inheritDoc
     */
    public function imageSizeInputFields(\WP_Post $post, bool|string $check = ''): array
    {
        return image_size_input_fields($post, $check);
    }

    /**
     * @inheritDoc
     */
    public function imageLinkInputFields(\WP_Post $post, string $urlType = ''): string
    {
        return image_link_input_fields($post, $urlType);
    }

    /**
     * @inheritDoc
     */
    public function wpCaptionInputTextarea(\WP_Post $editPost): string
    {
        return wp_caption_input_textarea($editPost);
    }

    /**
     * @inheritDoc
     */
    public function imageAttachmentFieldsToEdit(array $formFields, object $post): array
    {
        return image_attachment_fields_to_edit($formFields, $post);
    }

    /**
     * @inheritDoc
     */
    public function mediaSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array
    {
        return media_single_attachment_fields_to_edit($formFields, $post);
    }

    /**
     * @inheritDoc
     */
    public function mediaPostSingleAttachmentFieldsToEdit(array $formFields, \WP_Post $post): array
    {
        return media_post_single_attachment_fields_to_edit($formFields, $post);
    }

    /**
     * @inheritDoc
     */
    public function imageMediaSendToEditor(string $html, int $attachmentId, array $attachment): string
    {
        return image_media_send_to_editor($html, $attachmentId, $attachment);
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentFieldsToEdit(\WP_Post $post, array $errors = null): array
    {
        return get_attachment_fields_to_edit($post, $errors);
    }

    /**
     * @inheritDoc
     */
    public function getMediaItems(int $postId, array $errors): string
    {
        return get_media_items($postId, $errors);
    }

    /**
     * @inheritDoc
     */
    public function getMediaItem(int $attachmentId, string|array $args = null): string
    {
        return get_media_item($attachmentId, $args);
    }

    /**
     * @inheritDoc
     */
    public function getCompatMediaMarkup(int $attachmentId, array $args = null): array
    {
        return get_compat_media_markup($attachmentId, $args);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadHeader(): void
    {
        media_upload_header();
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadForm(array $errors = null): void
    {
        media_upload_form($errors);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTypeForm(string $type = 'file', array $errors = null, int|\WP_Error $id = null): void
    {
        media_upload_type_form($type, $errors, $id);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTypeUrlForm(string $type = null, object $errors = null, int $id = null): void
    {
        media_upload_type_url_form($type, $errors, $id);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadGalleryForm(array $errors): void
    {
        media_upload_gallery_form($errors);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadLibraryForm(array $errors): void
    {
        media_upload_library_form($errors);
    }

    /**
     * @inheritDoc
     */
    public function wpMediaInsertUrlForm(string $defaultView = 'image'): string
    {
        return wp_media_insert_url_form($defaultView);
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadFlashBypass(): void
    {
        media_upload_flash_bypass();
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadHtmlBypass(): void
    {
        media_upload_html_bypass();
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadTextAfter(): void
    {
        media_upload_text_after();
    }

    /**
     * @inheritDoc
     */
    public function mediaUploadMaxImageResize(): void
    {
        media_upload_max_image_resize();
    }

    /**
     * @inheritDoc
     */
    public function multisiteOverQuotaMessage(): void
    {
        multisite_over_quota_message();
    }

    /**
     * @inheritDoc
     */
    public function editFormImageEditor(\WP_Post $post): void
    {
        edit_form_image_editor($post);
    }

    /**
     * @inheritDoc
     */
    public function attachmentSubmitboxMetadata(): void
    {
        attachment_submitbox_metadata();
    }

    /**
     * @inheritDoc
     */
    public function wpAddId3TagData(array &$metadata, array $data): void
    {
        wp_add_id3_tag_data($metadata, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpReadVideoMetadata(string $file): array|false
    {
        return wp_read_video_metadata($file);
    }

    /**
     * @inheritDoc
     */
    public function wpReadAudioMetadata(string $file): array|false
    {
        return wp_read_audio_metadata($file);
    }

    /**
     * @inheritDoc
     */
    public function wpGetMediaCreationTimestamp(array $metadata): int|false
    {
        return wp_get_media_creation_timestamp($metadata);
    }

    /**
     * @inheritDoc
     */
    public function wpMediaAttachAction(int $parentId, string $action = 'attach'): void
    {
        wp_media_attach_action($parentId, $action);
    }

    /**
     * @inheritDoc
     */
    public function addCssclass(string $classToAdd, string $classes): string
    {
        return add_cssclass($classToAdd, $classes);
    }

    /**
     * @inheritDoc
     */
    public function addMenuClasses(array $menu): array
    {
        return add_menu_classes($menu);
    }

    /**
     * @inheritDoc
     */
    public function sortMenu(array $a, array $b): int
    {
        return sort_menu($a, $b);
    }

    /**
     * @inheritDoc
     */
    public function postSubmitMetaBox(\WP_Post $post, array $args = []): void
    {
        post_submit_meta_box($post, $args);
    }

    /**
     * @inheritDoc
     */
    public function attachmentSubmitMetaBox(\WP_Post $post): void
    {
        attachment_submit_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postFormatMetaBox(\WP_Post $post, array $box): void
    {
        post_format_meta_box($post, $box);
    }

    /**
     * @inheritDoc
     */
    public function postTagsMetaBox(\WP_Post $post, array $box): void
    {
        post_tags_meta_box($post, $box);
    }

    /**
     * @inheritDoc
     */
    public function postCategoriesMetaBox(\WP_Post $post, array $box): void
    {
        post_categories_meta_box($post, $box);
    }

    /**
     * @inheritDoc
     */
    public function postExcerptMetaBox(\WP_Post $post): void
    {
        post_excerpt_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postTrackbackMetaBox(\WP_Post $post): void
    {
        post_trackback_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postCustomMetaBox(\WP_Post $post): void
    {
        post_custom_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postCommentStatusMetaBox(\WP_Post $post): void
    {
        post_comment_status_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postCommentMetaBoxThead(array $result): array
    {
        return post_comment_meta_box_thead($result);
    }

    /**
     * @inheritDoc
     */
    public function postCommentMetaBox(\WP_Post $post): void
    {
        post_comment_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postSlugMetaBox(\WP_Post $post): void
    {
        post_slug_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postAuthorMetaBox(\WP_Post $post): void
    {
        post_author_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function postRevisionsMetaBox(\WP_Post $post): void
    {
        post_revisions_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function pageAttributesMetaBox(\WP_Post $post): void
    {
        page_attributes_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function linkSubmitMetaBox(object $link): void
    {
        link_submit_meta_box($link);
    }

    /**
     * @inheritDoc
     */
    public function linkCategoriesMetaBox(object $link): void
    {
        link_categories_meta_box($link);
    }

    /**
     * @inheritDoc
     */
    public function linkTargetMetaBox(object $link): void
    {
        link_target_meta_box($link);
    }

    /**
     * @inheritDoc
     */
    public function xfnCheck(string $xfnRelationship, string $xfnValue = '', mixed $deprecated = ''): void
    {
        xfn_check($xfnRelationship, $xfnValue, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function linkXfnMetaBox(object $link): void
    {
        link_xfn_meta_box($link);
    }

    /**
     * @inheritDoc
     */
    public function linkAdvancedMetaBox(object $link): void
    {
        link_advanced_meta_box($link);
    }

    /**
     * @inheritDoc
     */
    public function postThumbnailMetaBox(\WP_Post $post): void
    {
        post_thumbnail_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function attachmentId3DataMetaBox(\WP_Post $post): void
    {
        attachment_id3_data_meta_box($post);
    }

    /**
     * @inheritDoc
     */
    public function registerAndDoPostMetaBoxes(\WP_Post $post): void
    {
        register_and_do_post_meta_boxes($post);
    }

    /**
     * @inheritDoc
     */
    public function gotModRewrite(): bool
    {
        return got_mod_rewrite();
    }

    /**
     * @inheritDoc
     */
    public function gotUrlRewrite(): bool
    {
        return got_url_rewrite();
    }

    /**
     * @inheritDoc
     */
    public function extractFromMarkers(string $filename, string $marker): array
    {
        return extract_from_markers($filename, $marker);
    }

    /**
     * @inheritDoc
     */
    public function insertWithMarkers(string $filename, string $marker, array|string $insertion): bool
    {
        return insert_with_markers($filename, $marker, $insertion);
    }

    /**
     * @inheritDoc
     */
    public function saveModRewriteRules(): bool|null
    {
        return save_mod_rewrite_rules();
    }

    /**
     * @inheritDoc
     */
    public function iis7SaveUrlRewriteRules(): bool|null
    {
        return iis7_save_url_rewrite_rules();
    }

    /**
     * @inheritDoc
     */
    public function updateRecentlyEdited(string $file): void
    {
        update_recently_edited($file);
    }

    /**
     * @inheritDoc
     */
    public function updateHomeSiteurl(string $oldValue, string $value): void
    {
        update_home_siteurl($oldValue, $value);
    }

    /**
     * @inheritDoc
     */
    public function wpResetVars(array $vars): void
    {
        wp_reset_vars($vars);
    }

    /**
     * @inheritDoc
     */
    public function showMessage(string|\WP_Error $message): void
    {
        show_message($message);
    }

    /**
     * @inheritDoc
     */
    public function wpDocLinkParse(string $content): array
    {
        return wp_doc_link_parse($content);
    }

    /**
     * @inheritDoc
     */
    public function setScreenOptions(): void
    {
        set_screen_options();
    }

    /**
     * @inheritDoc
     */
    public function iis7RewriteRuleExists(string $filename): bool
    {
        return iis7_rewrite_rule_exists($filename);
    }

    /**
     * @inheritDoc
     */
    public function iis7DeleteRewriteRule(string $filename): bool
    {
        return iis7_delete_rewrite_rule($filename);
    }

    /**
     * @inheritDoc
     */
    public function iis7AddRewriteRule(string $filename, string $rewriteRule): bool
    {
        return iis7_add_rewrite_rule($filename, $rewriteRule);
    }

    /**
     * @inheritDoc
     */
    public function saveDomDocument(\DOMDocument $doc, string $filename): void
    {
        saveDomDocument($doc, $filename);
    }

    /**
     * @inheritDoc
     */
    public function adminColorSchemePicker(int $userId): void
    {
        admin_color_scheme_picker($userId);
    }

    /**
     * @inheritDoc
     */
    public function wpColorSchemeSettings(): void
    {
        wp_color_scheme_settings();
    }

    /**
     * @inheritDoc
     */
    public function wpAdminViewportMeta(): void
    {
        wp_admin_viewport_meta();
    }

    /**
     * @inheritDoc
     */
    public function wpCheckLockedPosts(array $response, array $data, string $screenId): array
    {
        return wp_check_locked_posts($response, $data, $screenId);
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshPostLock(array $response, array $data, string $screenId): array
    {
        return wp_refresh_post_lock($response, $data, $screenId);
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshPostNonces(array $response, array $data, string $screenId): array
    {
        return wp_refresh_post_nonces($response, $data, $screenId);
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshMetaboxLoaderNonces(array $response, array $data): array
    {
        return wp_refresh_metabox_loader_nonces($response, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpRefreshHeartbeatNonces(array $response): array
    {
        return wp_refresh_heartbeat_nonces($response);
    }

    /**
     * @inheritDoc
     */
    public function wpHeartbeatSetSuspension(array $settings): array
    {
        return wp_heartbeat_set_suspension($settings);
    }

    /**
     * @inheritDoc
     */
    public function heartbeatAutosave(array $response, array $data): array
    {
        return heartbeat_autosave($response, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCanonicalUrl(): void
    {
        wp_admin_canonical_url();
    }

    /**
     * @inheritDoc
     */
    public function wpAdminHeaders(): void
    {
        wp_admin_headers();
    }

    /**
     * @inheritDoc
     */
    public function wpPageReloadOnBackButtonJs(): void
    {
        wp_page_reload_on_back_button_js();
    }

    /**
     * @inheritDoc
     */
    public function updateOptionNewAdminEmail(string $oldValue, string $value): void
    {
        update_option_new_admin_email($oldValue, $value);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPhpVersion(): array|false
    {
        return wp_check_php_version();
    }

    /**
     * @inheritDoc
     */
    public function checkUploadSize(array $file): array
    {
        return check_upload_size($file);
    }

    /**
     * @inheritDoc
     */
    public function wpmuDeleteBlog(int $blogId, bool $drop = false): void
    {
        wpmu_delete_blog($blogId, $drop);
    }

    /**
     * @inheritDoc
     */
    public function wpmuDeleteUser(int $id): bool
    {
        return wpmu_delete_user($id);
    }

    /**
     * @inheritDoc
     */
    public function uploadIsUserOverQuota(bool $displayMessage = true): bool
    {
        return upload_is_user_over_quota($displayMessage);
    }

    /**
     * @inheritDoc
     */
    public function displaySpaceUsage(): void
    {
        display_space_usage();
    }

    /**
     * @inheritDoc
     */
    public function fixImportFormSize(int $size): int
    {
        return fix_import_form_size($size);
    }

    /**
     * @inheritDoc
     */
    public function uploadSpaceSetting(int $id): void
    {
        upload_space_setting($id);
    }

    /**
     * @inheritDoc
     */
    public function refreshUserDetails(int $id): int|false
    {
        return refresh_user_details($id);
    }

    /**
     * @inheritDoc
     */
    public function formatCodeLang(string $code = ''): string
    {
        return format_code_lang($code);
    }

    /**
     * @inheritDoc
     */
    public function checkImportNewUsers(string $permission): bool
    {
        return check_import_new_users($permission);
    }

    /**
     * @inheritDoc
     */
    public function muDropdownLanguages(array $langFiles = [], string $current = ''): void
    {
        mu_dropdown_languages($langFiles, $current);
    }

    /**
     * @inheritDoc
     */
    public function siteAdminNotice(): mixed
    {
        return site_admin_notice();
    }

    /**
     * @inheritDoc
     */
    public function avoidBlogPagePermalinkCollision(array $data, array $postarr): array
    {
        return avoid_blog_page_permalink_collision($data, $postarr);
    }

    /**
     * @inheritDoc
     */
    public function choosePrimaryBlog(): void
    {
        choose_primary_blog();
    }

    /**
     * @inheritDoc
     */
    public function canEditNetwork(int $networkId): bool
    {
        return can_edit_network($networkId);
    }

    /**
     * @inheritDoc
     */
    public function confirmDeleteUsers(array $users): bool
    {
        return confirm_delete_users($users);
    }

    /**
     * @inheritDoc
     */
    public function networkSettingsAddJs(): void
    {
        network_settings_add_js();
    }

    /**
     * @inheritDoc
     */
    public function networkEditSiteNav(array $args = []): void
    {
        network_edit_site_nav($args);
    }

    /**
     * @inheritDoc
     */
    public function getSiteScreenHelpTabArgs(): array
    {
        return get_site_screen_help_tab_args();
    }

    /**
     * @inheritDoc
     */
    public function getSiteScreenHelpSidebarContent(): string
    {
        return get_site_screen_help_sidebar_content();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuSetup(): void
    {
        wp_nav_menu_setup();
    }

    /**
     * @inheritDoc
     */
    public function wpInitialNavMenuMetaBoxes(): void
    {
        wp_initial_nav_menu_meta_boxes();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuPostTypeMetaBoxes(): void
    {
        wp_nav_menu_post_type_meta_boxes();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuTaxonomyMetaBoxes(): void
    {
        wp_nav_menu_taxonomy_meta_boxes();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuDisabledCheck(int|string $navMenuSelectedId, bool $display = true): string|false
    {
        return wp_nav_menu_disabled_check($navMenuSelectedId, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemLinkMetaBox(): void
    {
        wp_nav_menu_item_link_meta_box();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemPostTypeMetaBox(string $dataObject, array $box): void
    {
        wp_nav_menu_item_post_type_meta_box($dataObject, $box);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuItemTaxonomyMetaBox(string $dataObject, array $box): void
    {
        wp_nav_menu_item_taxonomy_meta_box($dataObject, $box);
    }

    /**
     * @inheritDoc
     */
    public function wpSaveNavMenuItems(int $menuId = 0, array $menuData = []): array
    {
        return wp_save_nav_menu_items($menuId, $menuData);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuToEdit(int $menuId = 0): string|\WP_Error
    {
        return wp_get_nav_menu_to_edit($menuId);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuManageColumns(): array
    {
        return wp_nav_menu_manage_columns();
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuUpdateMenuItems(int|string $navMenuSelectedId, string $navMenuSelectedTitle): array
    {
        return wp_nav_menu_update_menu_items($navMenuSelectedId, $navMenuSelectedTitle);
    }

    /**
     * @inheritDoc
     */
    public function networkDomainCheck(): string|false
    {
        return network_domain_check();
    }

    /**
     * @inheritDoc
     */
    public function allowSubdomainInstall(): bool
    {
        return allow_subdomain_install();
    }

    /**
     * @inheritDoc
     */
    public function allowSubdirectoryInstall(): bool
    {
        return allow_subdirectory_install();
    }

    /**
     * @inheritDoc
     */
    public function getCleanBasedomain(): string
    {
        return get_clean_basedomain();
    }

    /**
     * @inheritDoc
     */
    public function networkStep1(false|\WP_Error $errors = false): void
    {
        network_step1($errors);
    }

    /**
     * @inheritDoc
     */
    public function networkStep2(false|\WP_Error $errors = false): void
    {
        network_step2($errors);
    }

    /**
     * @inheritDoc
     */
    public function optionsDiscussionAddJs(): void
    {
        options_discussion_add_js();
    }

    /**
     * @inheritDoc
     */
    public function optionsGeneralAddJs(): void
    {
        options_general_add_js();
    }

    /**
     * @inheritDoc
     */
    public function optionsReadingAddJs(): void
    {
        options_reading_add_js();
    }

    /**
     * @inheritDoc
     */
    public function optionsReadingBlogCharset(): void
    {
        options_reading_blog_charset();
    }

    /**
     * @inheritDoc
     */
    public function pluginsApi(string $action, array|object $args = []): array|object
    {
        return plugins_api($action, $args);
    }

    /**
     * @inheritDoc
     */
    public function installPopularTags(array $args = []): array|\WP_Error
    {
        return install_popular_tags($args);
    }

    /**
     * @inheritDoc
     */
    public function installDashboard(): void
    {
        install_dashboard();
    }

    /**
     * @inheritDoc
     */
    public function installSearchForm(bool $deprecated = true): void
    {
        install_search_form($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function installPluginsUpload(): void
    {
        install_plugins_upload();
    }

    /**
     * @inheritDoc
     */
    public function installPluginsFavoritesForm(): void
    {
        install_plugins_favorites_form();
    }

    /**
     * @inheritDoc
     */
    public function displayPluginsTable(): void
    {
        display_plugins_table();
    }

    /**
     * @inheritDoc
     */
    public function installPluginInstallStatus(array|object $api, bool $loop = false): array
    {
        return install_plugin_install_status($api, $loop);
    }

    /**
     * @inheritDoc
     */
    public function installPluginInformation(): void
    {
        install_plugin_information();
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginActionButton(string $name, array|object $data, bool $compatiblePhp, bool $compatibleWp): string
    {
        return wp_get_plugin_action_button($name, $data, $compatiblePhp, $compatibleWp);
    }

    /**
     * @inheritDoc
     */
    public function getPluginData(string $pluginFile, bool $markup = true, bool $translate = true): array
    {
        return get_plugin_data($pluginFile, $markup, $translate);
    }

    /**
     * @inheritDoc
     */
    public function getPluginFiles(string $plugin): array
    {
        return get_plugin_files($plugin);
    }

    /**
     * @inheritDoc
     */
    public function getPlugins(string $pluginFolder = ''): array
    {
        return get_plugins($pluginFolder);
    }

    /**
     * @inheritDoc
     */
    public function getMuPlugins(): array
    {
        return get_mu_plugins();
    }

    /**
     * @inheritDoc
     */
    public function getDropins(): array
    {
        return get_dropins();
    }

    /**
     * @inheritDoc
     */
    public function isPluginActive(string $plugin): bool
    {
        return is_plugin_active($plugin);
    }

    /**
     * @inheritDoc
     */
    public function isPluginInactive(string $plugin): bool
    {
        return is_plugin_inactive($plugin);
    }

    /**
     * @inheritDoc
     */
    public function isPluginActiveForNetwork(string $plugin): bool
    {
        return is_plugin_active_for_network($plugin);
    }

    /**
     * @inheritDoc
     */
    public function isNetworkOnlyPlugin(string $plugin): bool
    {
        return is_network_only_plugin($plugin);
    }

    /**
     * @inheritDoc
     */
    public function activatePlugin(string $plugin, string $redirect = '', bool $networkWide = false, bool $silent = false): null|\WP_Error
    {
        return activate_plugin($plugin, $redirect, $networkWide, $silent);
    }

    /**
     * @inheritDoc
     */
    public function deactivatePlugins(string|array $plugins, bool $silent = false, bool|null $networkWide = null): void
    {
        deactivate_plugins($plugins, $silent, $networkWide);
    }

    /**
     * @inheritDoc
     */
    public function activatePlugins(string|array $plugins, string $redirect = '', bool $networkWide = false, bool $silent = false): true|\WP_Error
    {
        return activate_plugins($plugins, $redirect, $networkWide, $silent);
    }

    /**
     * @inheritDoc
     */
    public function deletePlugins(array $plugins, string $deprecated = ''): bool|null|\WP_Error
    {
        return delete_plugins($plugins, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function validateActivePlugins(): array
    {
        return validate_active_plugins();
    }

    /**
     * @inheritDoc
     */
    public function validatePlugin(string $plugin): int|\WP_Error
    {
        return validate_plugin($plugin);
    }

    /**
     * @inheritDoc
     */
    public function validatePluginRequirements(string $plugin): true|\WP_Error
    {
        return validate_plugin_requirements($plugin);
    }

    /**
     * @inheritDoc
     */
    public function isUninstallablePlugin(string $plugin): bool
    {
        return is_uninstallable_plugin($plugin);
    }

    /**
     * @inheritDoc
     */
    public function uninstallPlugin(string $plugin): mixed
    {
        return uninstall_plugin($plugin);
    }

    /**
     * @inheritDoc
     */
    public function addMenuPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, string $iconUrl = '', int|float $position = null): string
    {
        return add_menu_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $iconUrl, $position);
    }

    /**
     * @inheritDoc
     */
    public function addSubmenuPage(string $parentSlug, string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int|float $position = null): string|false
    {
        return add_submenu_page($parentSlug, $pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addManagementPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_management_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addOptionsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_options_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addThemePage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_theme_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addPluginsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_plugins_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addUsersPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_users_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addDashboardPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_dashboard_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addPostsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_posts_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addMediaPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_media_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addLinksPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_links_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addPagesPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_pages_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function addCommentsPage(string $pageTitle, string $menuTitle, string $capability, string $menuSlug, callable $callback = null, int $position = null): string|false
    {
        return add_comments_page($pageTitle, $menuTitle, $capability, $menuSlug, $callback, $position);
    }

    /**
     * @inheritDoc
     */
    public function removeMenuPage(string $menuSlug): array|false
    {
        return remove_menu_page($menuSlug);
    }

    /**
     * @inheritDoc
     */
    public function removeSubmenuPage(string $menuSlug, string $submenuSlug): array|false
    {
        return remove_submenu_page($menuSlug, $submenuSlug);
    }

    /**
     * @inheritDoc
     */
    public function menuPageUrl(string $menuSlug, bool $display = true): string
    {
        return menu_page_url($menuSlug, $display);
    }

    /**
     * @inheritDoc
     */
    public function getAdminPageParent(string $parentPage = ''): string
    {
        return get_admin_page_parent($parentPage);
    }

    /**
     * @inheritDoc
     */
    public function getAdminPageTitle(): string
    {
        return get_admin_page_title();
    }

    /**
     * @inheritDoc
     */
    public function getPluginPageHook(string $pluginPage, string $parentPage): string|null
    {
        return get_plugin_page_hook($pluginPage, $parentPage);
    }

    /**
     * @inheritDoc
     */
    public function getPluginPageHookname(string $pluginPage, string $parentPage): string
    {
        return get_plugin_page_hookname($pluginPage, $parentPage);
    }

    /**
     * @inheritDoc
     */
    public function userCanAccessAdminPage(): bool
    {
        return user_can_access_admin_page();
    }

    /**
     * @inheritDoc
     */
    public function optionUpdateFilter(array $options): array
    {
        return option_update_filter($options);
    }

    /**
     * @inheritDoc
     */
    public function addAllowedOptions(array $newOptions, string|array $options = ''): array
    {
        return add_allowed_options($newOptions, $options);
    }

    /**
     * @inheritDoc
     */
    public function removeAllowedOptions(array $delOptions, string|array $options = ''): array
    {
        return remove_allowed_options($delOptions, $options);
    }

    /**
     * @inheritDoc
     */
    public function settingsFields(string $optionGroup): void
    {
        settings_fields($optionGroup);
    }

    /**
     * @inheritDoc
     */
    public function wpCleanPluginsCache(bool $clearUpdateCache = true): void
    {
        wp_clean_plugins_cache($clearUpdateCache);
    }

    /**
     * @inheritDoc
     */
    public function pluginSandboxScrape(string $plugin): void
    {
        plugin_sandbox_scrape($plugin);
    }

    /**
     * @inheritDoc
     */
    public function wpAddPrivacyPolicyContent(string $pluginName, string $policyText): void
    {
        wp_add_privacy_policy_content($pluginName, $policyText);
    }

    /**
     * @inheritDoc
     */
    public function isPluginPaused(string $plugin): bool
    {
        return is_plugin_paused($plugin);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPluginError(string $plugin): array|false
    {
        return wp_get_plugin_error($plugin);
    }

    /**
     * @inheritDoc
     */
    public function resumePlugin(string $plugin, string $redirect = ''): true|\WP_Error
    {
        return resume_plugin($plugin, $redirect);
    }

    /**
     * @inheritDoc
     */
    public function pausedPluginsNotice(): void
    {
        paused_plugins_notice();
    }

    /**
     * @inheritDoc
     */
    public function editPost(array|null $postData = null): int
    {
        return edit_post($postData);
    }

    /**
     * @inheritDoc
     */
    public function bulkEditPosts(array|null $postData = null): array
    {
        return bulk_edit_posts($postData);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultPostToEdit(string $postType = 'post', bool $createInDb = false): \WP_Post
    {
        return get_default_post_to_edit($postType, $createInDb);
    }

    /**
     * @inheritDoc
     */
    public function postExists(string $title, string $content = '', string $date = '', string $type = '', string $status = ''): int
    {
        return post_exists($title, $content, $date, $type, $status);
    }

    /**
     * @inheritDoc
     */
    public function wpWritePost(): int|\WP_Error
    {
        return wp_write_post();
    }

    /**
     * @inheritDoc
     */
    public function writePost(): mixed
    {
        return write_post();
    }

    /**
     * @inheritDoc
     */
    public function addMeta(int $postId): int|bool
    {
        return add_meta($postId);
    }

    /**
     * @inheritDoc
     */
    public function deleteMeta(int $mid): bool
    {
        return delete_meta($mid);
    }

    /**
     * @inheritDoc
     */
    public function getMetaKeys(): array
    {
        return get_meta_keys();
    }

    /**
     * @inheritDoc
     */
    public function getPostMetaById(int $mid): object|bool
    {
        return get_post_meta_by_id($mid);
    }

    /**
     * @inheritDoc
     */
    public function hasMeta(int $postId): array
    {
        return has_meta($postId);
    }

    /**
     * @inheritDoc
     */
    public function updateMeta(int $metaId, string $metaKey, string $metaValue): bool
    {
        return update_meta($metaId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getAvailablePostStatuses(string $type = 'post'): array
    {
        return get_available_post_statuses($type);
    }

    /**
     * @inheritDoc
     */
    public function wpEditPostsQuery(array|false $q = false): array
    {
        return wp_edit_posts_query($q);
    }

    /**
     * @inheritDoc
     */
    public function wpEditAttachmentsQueryVars(array|false $q = false): array
    {
        return wp_edit_attachments_query_vars($q);
    }

    /**
     * @inheritDoc
     */
    public function wpEditAttachmentsQuery(array|false $q = false): array
    {
        return wp_edit_attachments_query($q);
    }

    /**
     * @inheritDoc
     */
    public function postboxClasses(string $boxId, string $screenId): string
    {
        return postbox_classes($boxId, $screenId);
    }

    /**
     * @inheritDoc
     */
    public function getSamplePermalink(int|\WP_Post $post, string|null $title = null, string|null $name = null): array
    {
        return get_sample_permalink($post, $title, $name);
    }

    /**
     * @inheritDoc
     */
    public function getSamplePermalinkHtml(int|\WP_Post $post, string|null $newTitle = null, string|null $newSlug = null): string
    {
        return get_sample_permalink_html($post, $newTitle, $newSlug);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPostLock(int|\WP_Post $post): int|false
    {
        return wp_check_post_lock($post);
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostLock(int|\WP_Post $post): array|false
    {
        return wp_set_post_lock($post);
    }

    /**
     * @inheritDoc
     */
    public function wpCreatePostAutosave(array|int $postData): int|\WP_Error
    {
        return wp_create_post_autosave($postData);
    }

    /**
     * @inheritDoc
     */
    public function wpAutosavePostRevisionedMetaFields(array $newAutosave): void
    {
        wp_autosave_post_revisioned_meta_fields($newAutosave);
    }

    /**
     * @inheritDoc
     */
    public function postPreview(): string
    {
        return post_preview();
    }

    /**
     * @inheritDoc
     */
    public function wpAutosave(array $postData): mixed
    {
        return wp_autosave($postData);
    }

    /**
     * @inheritDoc
     */
    public function redirectPost(int|string $postId = ''): void
    {
        redirect_post($postId);
    }

    /**
     * @inheritDoc
     */
    public function taxonomyMetaBoxSanitizeCbCheckboxes(string $taxonomy, array $terms): array
    {
        return taxonomy_meta_box_sanitize_cb_checkboxes($taxonomy, $terms);
    }

    /**
     * @inheritDoc
     */
    public function taxonomyMetaBoxSanitizeCbInput(string $taxonomy, array|string $terms): array
    {
        return taxonomy_meta_box_sanitize_cb_input($taxonomy, $terms);
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorServerBlockSettings(): array
    {
        return get_block_editor_server_block_settings();
    }

    /**
     * @inheritDoc
     */
    public function theBlockEditorMetaBoxes(): void
    {
        the_block_editor_meta_boxes();
    }

    /**
     * @inheritDoc
     */
    public function theBlockEditorMetaBoxPostFormHiddenFields(\WP_Post $post): void
    {
        the_block_editor_meta_box_post_form_hidden_fields($post);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyGeneratePersonalDataExportGroupHtml(array $groupData, string $groupId = '', int $groupsCount = 1): string
    {
        return wp_privacy_generate_personal_data_export_group_html($groupData, $groupId, $groupsCount);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyGeneratePersonalDataExportFile(int $requestId): void
    {
        wp_privacy_generate_personal_data_export_file($requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacySendPersonalDataExportEmail(int $requestId): true|\WP_Error
    {
        return wp_privacy_send_personal_data_export_email($requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyProcessPersonalDataExportPage(array $response, int $exporterIndex, string $emailAddress, int $page, int $requestId, bool $sendAsEmail, string $exporterKey): array
    {
        return wp_privacy_process_personal_data_export_page($response, $exporterIndex, $emailAddress, $page, $requestId, $sendAsEmail, $exporterKey);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyProcessPersonalDataErasurePage(array $response, int $eraserIndex, string $emailAddress, int $page, int $requestId): array
    {
        return wp_privacy_process_personal_data_erasure_page($response, $eraserIndex, $emailAddress, $page, $requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetRevisionUiDiff(\WP_Post|int $post, int $compareFrom, int $compareTo): array|false
    {
        return wp_get_revision_ui_diff($post, $compareFrom, $compareTo);
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareRevisionsForJs(\WP_Post|int $post, int $selectedRevisionId, int $from = null): array
    {
        return wp_prepare_revisions_for_js($post, $selectedRevisionId, $from);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintRevisionTemplates(): void
    {
        wp_print_revision_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpGetDbSchema(string $scope = 'all', int $blogId = null): string
    {
        return wp_get_db_schema($scope, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function populateOptions(array $options = []): void
    {
        populate_options($options);
    }

    /**
     * @inheritDoc
     */
    public function populateRoles(): void
    {
        populate_roles();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles160(): void
    {
        populate_roles_160();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles210(): void
    {
        populate_roles_210();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles230(): void
    {
        populate_roles_230();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles250(): void
    {
        populate_roles_250();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles260(): void
    {
        populate_roles_260();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles270(): void
    {
        populate_roles_270();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles280(): void
    {
        populate_roles_280();
    }

    /**
     * @inheritDoc
     */
    public function populateRoles300(): void
    {
        populate_roles_300();
    }

    /**
     * @inheritDoc
     */
    public function installNetwork(): void
    {
        install_network();
    }

    /**
     * @inheritDoc
     */
    public function populateNetwork(int $networkId = 1, string $domain = '', string $email = '', string $siteName = '', string $path = '/', bool $subdomainInstall = false): true|\WP_Error
    {
        return populate_network($networkId, $domain, $email, $siteName, $path, $subdomainInstall);
    }

    /**
     * @inheritDoc
     */
    public function populateNetworkMeta(int $networkId, array $meta = []): void
    {
        populate_network_meta($networkId, $meta);
    }

    /**
     * @inheritDoc
     */
    public function populateSiteMeta(int $siteId, array $meta = []): void
    {
        populate_site_meta($siteId, $meta);
    }

    /**
     * @inheritDoc
     */
    public function getColumnHeaders(string|\WP_Screen $screen): array
    {
        return get_column_headers($screen);
    }

    /**
     * @inheritDoc
     */
    public function getHiddenColumns(string|\WP_Screen $screen): array
    {
        return get_hidden_columns($screen);
    }

    /**
     * @inheritDoc
     */
    public function metaBoxPrefs(\WP_Screen $screen): void
    {
        meta_box_prefs($screen);
    }

    /**
     * @inheritDoc
     */
    public function getHiddenMetaBoxes(string|\WP_Screen $screen): array
    {
        return get_hidden_meta_boxes($screen);
    }

    /**
     * @inheritDoc
     */
    public function addScreenOption(string $option, mixed $args = []): void
    {
        add_screen_option($option, $args);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentScreen(): \WP_Screen|null
    {
        return get_current_screen();
    }

    /**
     * @inheritDoc
     */
    public function setCurrentScreen(string|\WP_Screen $hookName = ''): void
    {
        set_current_screen($hookName);
    }

    /**
     * @inheritDoc
     */
    public function categoryExists(int|string $catName, int $categoryParent = null): string|null
    {
        return category_exists($catName, $categoryParent);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryToEdit(int $id): object
    {
        return get_category_to_edit($id);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateCategory(int|string $catName, int $categoryParent = 0): int|\WP_Error
    {
        return wp_create_category($catName, $categoryParent);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateCategories(array $categories, int|string $postId = ''): array
    {
        return wp_create_categories($categories, $postId);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertCategory(array $catarr, bool $wpError = false): int|\WP_Error
    {
        return wp_insert_category($catarr, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCategory(array $catarr): int|false
    {
        return wp_update_category($catarr);
    }

    /**
     * @inheritDoc
     */
    public function tagExists(int|string $tagName): mixed
    {
        return tag_exists($tagName);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateTag(int|string $tagName): array|\WP_Error
    {
        return wp_create_tag($tagName);
    }

    /**
     * @inheritDoc
     */
    public function getTagsToEdit(int $postId, string $taxonomy = 'post_tag'): string|false|\WP_Error
    {
        return get_tags_to_edit($postId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTermsToEdit(int $postId, string $taxonomy = 'post_tag'): string|false|\WP_Error
    {
        return get_terms_to_edit($postId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateTerm(string $tagName, string $taxonomy = 'post_tag'): array|\WP_Error
    {
        return wp_create_term($tagName, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpCategoryChecklist(int $postId = 0, int $descendantsAndSelf = 0, array|false $selectedCats = false, array|false $popularCats = false, \Walker $walker = null, bool $checkedOntop = true): void
    {
        wp_category_checklist($postId, $descendantsAndSelf, $selectedCats, $popularCats, $walker, $checkedOntop);
    }

    /**
     * @inheritDoc
     */
    public function wpTermsChecklist(int $postId = 0, array|string $args = []): string
    {
        return wp_terms_checklist($postId, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpPopularTermsChecklist(string $taxonomy, int $defaultTerm = 0, int $number = 10, bool $display = true): array
    {
        return wp_popular_terms_checklist($taxonomy, $defaultTerm, $number, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpLinkCategoryChecklist(int $linkId = 0): void
    {
        wp_link_category_checklist($linkId);
    }

    /**
     * @inheritDoc
     */
    public function getInlineData(\WP_Post $post): void
    {
        get_inline_data($post);
    }

    /**
     * @inheritDoc
     */
    public function wpCommentReply(int $position = 1, bool $checkbox = false, string $mode = 'single', bool $tableRow = true): void
    {
        wp_comment_reply($position, $checkbox, $mode, $tableRow);
    }

    /**
     * @inheritDoc
     */
    public function wpCommentTrashnotice(): void
    {
        wp_comment_trashnotice();
    }

    /**
     * @inheritDoc
     */
    public function listMeta(array $meta): void
    {
        list_meta($meta);
    }

    /**
     * @inheritDoc
     */
    public function metaForm(\WP_Post $post = null): void
    {
        meta_form($post);
    }

    /**
     * @inheritDoc
     */
    public function touchTime(int|bool $edit = 1, int|bool $forPost = 1, int $tabIndex = 0, int|bool $multi = 0): void
    {
        touch_time($edit, $forPost, $tabIndex, $multi);
    }

    /**
     * @inheritDoc
     */
    public function pageTemplateDropdown(string $defaultTemplate = '', string $postType = 'page'): void
    {
        page_template_dropdown($defaultTemplate, $postType);
    }

    /**
     * @inheritDoc
     */
    public function parentDropdown(int $defaultPage = 0, int $parentPage = 0, int $level = 0, int|\WP_Post $post = null): mixed
    {
        return parent_dropdown($defaultPage, $parentPage, $level, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownRoles(string $selected = ''): void
    {
        wp_dropdown_roles($selected);
    }

    /**
     * @inheritDoc
     */
    public function wpImportUploadForm(string $action): void
    {
        wp_import_upload_form($action);
    }

    /**
     * @inheritDoc
     */
    public function addMetaBox(string $id, string $title, callable $callback, string|array|\WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callbackArgs = null): void
    {
        add_meta_box($id, $title, $callback, $screen, $context, $priority, $callbackArgs);
    }

    /**
     * @inheritDoc
     */
    public function doBlockEditorIncompatibleMetaBox(mixed $dataObject, array $box): void
    {
        do_block_editor_incompatible_meta_box($dataObject, $box);
    }

    /**
     * @inheritDoc
     */
    public function doMetaBoxes(string|\WP_Screen $screen, string $context, mixed $dataObject): int
    {
        return do_meta_boxes($screen, $context, $dataObject);
    }

    /**
     * @inheritDoc
     */
    public function removeMetaBox(string $id, string|array|\WP_Screen $screen, string $context): void
    {
        remove_meta_box($id, $screen, $context);
    }

    /**
     * @inheritDoc
     */
    public function doAccordionSections(string|object $screen, string $context, mixed $dataObject): int
    {
        return do_accordion_sections($screen, $context, $dataObject);
    }

    /**
     * @inheritDoc
     */
    public function addSettingsSection(string $id, string $title, callable $callback, string $page, array $args = []): void
    {
        add_settings_section($id, $title, $callback, $page, $args);
    }

    /**
     * @inheritDoc
     */
    public function addSettingsField(string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = []): void
    {
        add_settings_field($id, $title, $callback, $page, $section, $args);
    }

    /**
     * @inheritDoc
     */
    public function doSettingsSections(string $page): void
    {
        do_settings_sections($page);
    }

    /**
     * @inheritDoc
     */
    public function doSettingsFields(string $page, string $section): void
    {
        do_settings_fields($page, $section);
    }

    /**
     * @inheritDoc
     */
    public function addSettingsError(string $setting, string $code, string $message, string $type = 'error'): void
    {
        add_settings_error($setting, $code, $message, $type);
    }

    /**
     * @inheritDoc
     */
    public function getSettingsErrors(string $setting = '', bool $sanitize = false): array
    {
        return get_settings_errors($setting, $sanitize);
    }

    /**
     * @inheritDoc
     */
    public function settingsErrors(string $setting = '', bool $sanitize = false, bool $hideOnUpdate = false): void
    {
        settings_errors($setting, $sanitize, $hideOnUpdate);
    }

    /**
     * @inheritDoc
     */
    public function findPostsDiv(string $foundAction = ''): void
    {
        find_posts_div($foundAction);
    }

    /**
     * @inheritDoc
     */
    public function thePostPassword(): void
    {
        the_post_password();
    }

    /**
     * @inheritDoc
     */
    public function iframeHeader(string $title = '', bool $deprecated = false): void
    {
        iframe_header($title, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function iframeFooter(): void
    {
        iframe_footer();
    }

    /**
     * @inheritDoc
     */
    public function getPostStates(\WP_Post $post): array
    {
        return get_post_states($post);
    }

    /**
     * @inheritDoc
     */
    public function getMediaStates(\WP_Post $post): array
    {
        return get_media_states($post);
    }

    /**
     * @inheritDoc
     */
    public function compressionTest(): void
    {
        compression_test();
    }

    /**
     * @inheritDoc
     */
    public function submitButton(string $text = '', string $type = 'primary', string $name = 'submit', bool $wrap = true, array|string $otherAttributes = ''): void
    {
        submit_button($text, $type, $name, $wrap, $otherAttributes);
    }

    /**
     * @inheritDoc
     */
    public function getSubmitButton(string $text = '', string $type = 'primary large', string $name = 'submit', bool $wrap = true, array|string $otherAttributes = ''): string
    {
        return get_submit_button($text, $type, $name, $wrap, $otherAttributes);
    }

    /**
     * @inheritDoc
     */
    public function convertToScreen(string $hookName): \WP_Screen
    {
        return convert_to_screen($hookName);
    }

    /**
     * @inheritDoc
     */
    public function wpStarRating(array $args = []): string
    {
        return wp_star_rating($args);
    }

    /**
     * @inheritDoc
     */
    public function installThemeSearchForm(bool $typeSelector = true): void
    {
        install_theme_search_form($typeSelector);
    }

    /**
     * @inheritDoc
     */
    public function installThemesDashboard(): void
    {
        install_themes_dashboard();
    }

    /**
     * @inheritDoc
     */
    public function installThemesUpload(): void
    {
        install_themes_upload();
    }

    /**
     * @inheritDoc
     */
    public function displayThemes(): void
    {
        display_themes();
    }

    /**
     * @inheritDoc
     */
    public function installThemeInformation(): void
    {
        install_theme_information();
    }

    /**
     * @inheritDoc
     */
    public function deleteTheme(string $stylesheet, string $redirect = ''): bool|null|\WP_Error
    {
        return delete_theme($stylesheet, $redirect);
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplates(\WP_Post|null $post = null, string $postType = 'page'): array
    {
        return get_page_templates($post, $postType);
    }

    /**
     * @inheritDoc
     */
    public function themeUpdateAvailable(\WP_Theme $theme): void
    {
        theme_update_available($theme);
    }

    /**
     * @inheritDoc
     */
    public function getThemeUpdateAvailable(\WP_Theme $theme): string|false
    {
        return get_theme_update_available($theme);
    }

    /**
     * @inheritDoc
     */
    public function getThemeFeatureList(bool $api = true): array
    {
        return get_theme_feature_list($api);
    }

    /**
     * @inheritDoc
     */
    public function themesApi(string $action, array|object $args = []): array|object
    {
        return themes_api($action, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareThemesForJs(array $themes = null): array
    {
        return wp_prepare_themes_for_js($themes);
    }

    /**
     * @inheritDoc
     */
    public function customizeThemesPrintTemplates(): void
    {
        customize_themes_print_templates();
    }

    /**
     * @inheritDoc
     */
    public function isThemePaused(string $theme): bool
    {
        return is_theme_paused($theme);
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeError(string $theme): array|false
    {
        return wp_get_theme_error($theme);
    }

    /**
     * @inheritDoc
     */
    public function resumeTheme(string $theme, string $redirect = ''): bool|\WP_Error
    {
        return resume_theme($theme, $redirect);
    }

    /**
     * @inheritDoc
     */
    public function pausedThemesNotice(): void
    {
        paused_themes_notice();
    }

    /**
     * @inheritDoc
     */
    public function translationsApi(string $type, array|object $args = null): array|\WP_Error
    {
        return translations_api($type, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAvailableTranslations(): array
    {
        return wp_get_available_translations();
    }

    /**
     * @inheritDoc
     */
    public function wpInstallLanguageForm(array $languages): void
    {
        wp_install_language_form($languages);
    }

    /**
     * @inheritDoc
     */
    public function wpDownloadLanguagePack(string $download): string|false
    {
        return wp_download_language_pack($download);
    }

    /**
     * @inheritDoc
     */
    public function wpCanInstallLanguagePack(): bool
    {
        return wp_can_install_language_pack();
    }

    /**
     * @inheritDoc
     */
    public function updateCore(string $from, string $to): string|\WP_Error
    {
        return update_core($from, $to);
    }

    /**
     * @inheritDoc
     */
    public function getPreferredFromUpdateCore(): object|array|false
    {
        return get_preferred_from_update_core();
    }

    /**
     * @inheritDoc
     */
    public function getCoreUpdates(array $options = []): array|false
    {
        return get_core_updates($options);
    }

    /**
     * @inheritDoc
     */
    public function findCoreAutoUpdate(): object|false
    {
        return find_core_auto_update();
    }

    /**
     * @inheritDoc
     */
    public function getCoreChecksums(string $version, string $locale): array|false
    {
        return get_core_checksums($version, $locale);
    }

    /**
     * @inheritDoc
     */
    public function dismissCoreUpdate(object $update): bool
    {
        return dismiss_core_update($update);
    }

    /**
     * @inheritDoc
     */
    public function undismissCoreUpdate(string $version, string $locale): bool
    {
        return undismiss_core_update($version, $locale);
    }

    /**
     * @inheritDoc
     */
    public function findCoreUpdate(string $version, string $locale): object|false
    {
        return find_core_update($version, $locale);
    }

    /**
     * @inheritDoc
     */
    public function coreUpdateFooter(string $msg = ''): string
    {
        return core_update_footer($msg);
    }

    /**
     * @inheritDoc
     */
    public function updateNag(): mixed
    {
        return update_nag();
    }

    /**
     * @inheritDoc
     */
    public function updateRightNowMessage(): void
    {
        update_right_now_message();
    }

    /**
     * @inheritDoc
     */
    public function getPluginUpdates(): array
    {
        return get_plugin_updates();
    }

    /**
     * @inheritDoc
     */
    public function wpPluginUpdateRows(): void
    {
        wp_plugin_update_rows();
    }

    /**
     * @inheritDoc
     */
    public function wpPluginUpdateRow(string $file, array $pluginData): mixed
    {
        return wp_plugin_update_row($file, $pluginData);
    }

    /**
     * @inheritDoc
     */
    public function getThemeUpdates(): array
    {
        return get_theme_updates();
    }

    /**
     * @inheritDoc
     */
    public function wpThemeUpdateRows(): void
    {
        wp_theme_update_rows();
    }

    /**
     * @inheritDoc
     */
    public function wpThemeUpdateRow(string $themeKey, \WP_Theme $theme): mixed
    {
        return wp_theme_update_row($themeKey, $theme);
    }

    /**
     * @inheritDoc
     */
    public function maintenanceNag(): mixed
    {
        return maintenance_nag();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintAdminNoticeTemplates(): void
    {
        wp_print_admin_notice_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintUpdateRowTemplates(): void
    {
        wp_print_update_row_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpRecoveryModeNag(): void
    {
        wp_recovery_mode_nag();
    }

    /**
     * @inheritDoc
     */
    public function wpIsAutoUpdateEnabledForType(string $type): bool
    {
        return wp_is_auto_update_enabled_for_type($type);
    }

    /**
     * @inheritDoc
     */
    public function wpIsAutoUpdateForcedForItem(string $type, bool|null $update, object $item): bool
    {
        return wp_is_auto_update_forced_for_item($type, $update, $item);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAutoUpdateMessage(): string
    {
        return wp_get_auto_update_message();
    }

    /**
     * @inheritDoc
     */
    public function addUser(): int|\WP_Error
    {
        return add_user();
    }

    /**
     * @inheritDoc
     */
    public function editUser(int $userId = 0): int|\WP_Error
    {
        return edit_user($userId);
    }

    /**
     * @inheritDoc
     */
    public function getEditableRoles(): array
    {
        return get_editable_roles();
    }

    /**
     * @inheritDoc
     */
    public function getUserToEdit(int $userId): \WP_User|false
    {
        return get_user_to_edit($userId);
    }

    /**
     * @inheritDoc
     */
    public function getUsersDrafts(int $userId): array
    {
        return get_users_drafts($userId);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteUser(int $id, int $reassign = null): bool
    {
        return wp_delete_user($id, $reassign);
    }

    /**
     * @inheritDoc
     */
    public function wpRevokeUser(int $id): void
    {
        wp_revoke_user($id);
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNagHandler(false $errors = false): void
    {
        default_password_nag_handler($errors);
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNagEditUser(int $userID, \WP_User $oldData): void
    {
        default_password_nag_edit_user($userID, $oldData);
    }

    /**
     * @inheritDoc
     */
    public function defaultPasswordNag(): void
    {
        default_password_nag();
    }

    /**
     * @inheritDoc
     */
    public function useSslPreference(\WP_User $user): void
    {
        use_ssl_preference($user);
    }

    /**
     * @inheritDoc
     */
    public function adminCreatedUserEmail(string $text): string
    {
        return admin_created_user_email($text);
    }

    /**
     * @inheritDoc
     */
    public function wpIsAuthorizeApplicationPasswordRequestValid(array $request, \WP_User $user): true|\WP_Error
    {
        return wp_is_authorize_application_password_request_valid($request, $user);
    }

    /**
     * @inheritDoc
     */
    public function wpIsAuthorizeApplicationRedirectUrlValid(string $url): true|\WP_Error
    {
        return wp_is_authorize_application_redirect_url_valid($url);
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgets(): void
    {
        wp_list_widgets();
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgetControls(string $sidebar, string $sidebarName = ''): void
    {
        wp_list_widget_controls($sidebar, $sidebarName);
    }

    /**
     * @inheritDoc
     */
    public function wpListWidgetControlsDynamicSidebar(array $params): array
    {
        return wp_list_widget_controls_dynamic_sidebar($params);
    }

    /**
     * @inheritDoc
     */
    public function nextWidgetIdNumber(string $idBase): int
    {
        return next_widget_id_number($idBase);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetControl(array $sidebarArgs): array
    {
        return wp_widget_control($sidebarArgs);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsAccessBodyClass(string $classes): string
    {
        return wp_widgets_access_body_class($classes);
    }

    /**
     * @inheritDoc
     */
    public function displayHeader(string $bodyClasses = ''): void
    {
        display_header($bodyClasses);
    }

    /**
     * @inheritDoc
     */
    public function displaySetupForm(string|null $error = null): void
    {
        display_setup_form($error);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuMaxDepth(string $classes): string
    {
        return wp_nav_menu_max_depth($classes);
    }

    /**
     * @inheritDoc
     */
    public function setupConfigDisplayHeader(string|array $bodyClasses = []): void
    {
        setup_config_display_header($bodyClasses);
    }

    /**
     * @inheritDoc
     */
    public function wpThemeAutoUpdateSettingTemplate(): string
    {
        return wp_theme_auto_update_setting_template();
    }

    /**
     * @inheritDoc
     */
    public function listCoreUpdate(object $update): void
    {
        list_core_update($update);
    }

    /**
     * @inheritDoc
     */
    public function dismissedUpdates(): void
    {
        dismissed_updates();
    }

    /**
     * @inheritDoc
     */
    public function coreUpgradePreamble(): void
    {
        core_upgrade_preamble();
    }

    /**
     * @inheritDoc
     */
    public function coreAutoUpdatesSettings(): void
    {
        core_auto_updates_settings();
    }

    /**
     * @inheritDoc
     */
    public function listPluginUpdates(): void
    {
        list_plugin_updates();
    }

    /**
     * @inheritDoc
     */
    public function listThemeUpdates(): void
    {
        list_theme_updates();
    }

    /**
     * @inheritDoc
     */
    public function listTranslationUpdates(): void
    {
        list_translation_updates();
    }

    /**
     * @inheritDoc
     */
    public function doCoreUpgrade(bool $reinstall = false): void
    {
        do_core_upgrade($reinstall);
    }

    /**
     * @inheritDoc
     */
    public function doDismissCoreUpdate(): void
    {
        do_dismiss_core_update();
    }

    /**
     * @inheritDoc
     */
    public function doUndismissCoreUpdate(): void
    {
        do_undismiss_core_update();
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarRender(): void
    {
        wp_admin_bar_render();
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarWpMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_wp_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSidebarToggle(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_sidebar_toggle($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMyAccountItem(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_my_account_item($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMyAccountMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_my_account_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSiteMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_site_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarEditSiteMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_edit_site_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarCustomizeMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_customize_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarMySitesMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_my_sites_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarShortlinkMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_shortlink_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarEditMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_edit_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarNewContentMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_new_content_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarCommentsMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_comments_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarAppearanceMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_appearance_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarUpdatesMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_updates_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarSearchMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_search_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarRecoveryModeMenu(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_recovery_mode_menu($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminBarAddSecondaryGroups(\WP_Admin_Bar $wpAdminBar): void
    {
        wp_admin_bar_add_secondary_groups($wpAdminBar);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueAdminBarHeaderStyles(): void
    {
        wp_enqueue_admin_bar_header_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueAdminBarBumpStyles(): void
    {
        wp_enqueue_admin_bar_bump_styles();
    }

    /**
     * @inheritDoc
     */
    public function showAdminBar(bool $show): void
    {
        show_admin_bar($show);
    }

    /**
     * @inheritDoc
     */
    public function isAdminBarShowing(): bool
    {
        return is_admin_bar_showing();
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthor(string $deprecated = ''): string
    {
        return get_the_author($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function theAuthor(string $deprecated = '', bool $deprecatedEcho = true): string
    {
        return the_author($deprecated, $deprecatedEcho);
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedAuthor(): mixed
    {
        return get_the_modified_author();
    }

    /**
     * @inheritDoc
     */
    public function theModifiedAuthor(): void
    {
        the_modified_author();
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorMeta(string $field = '', int|false $userId = false): string
    {
        return get_the_author_meta($field, $userId);
    }

    /**
     * @inheritDoc
     */
    public function theAuthorMeta(string $field = '', int|false $userId = false): void
    {
        the_author_meta($field, $userId);
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorLink(): string
    {
        return get_the_author_link();
    }

    /**
     * @inheritDoc
     */
    public function theAuthorLink(): void
    {
        the_author_link();
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorPosts(): int
    {
        return get_the_author_posts();
    }

    /**
     * @inheritDoc
     */
    public function theAuthorPosts(): void
    {
        the_author_posts();
    }

    /**
     * @inheritDoc
     */
    public function getTheAuthorPostsLink(): string
    {
        return get_the_author_posts_link();
    }

    /**
     * @inheritDoc
     */
    public function theAuthorPostsLink(string $deprecated = ''): void
    {
        the_author_posts_link($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getAuthorPostsUrl(int $authorId, string $authorNicename = ''): string
    {
        return get_author_posts_url($authorId, $authorNicename);
    }

    /**
     * @inheritDoc
     */
    public function wpListAuthors(string|array $args = ''): mixed
    {
        return wp_list_authors($args);
    }

    /**
     * @inheritDoc
     */
    public function isMultiAuthor(): bool
    {
        return is_multi_author();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockBindingsSource(string $sourceName, array $sourceProperties): \WP_Block_Bindings_Source|false
    {
        return register_block_bindings_source($sourceName, $sourceProperties);
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|false
    {
        return unregister_block_bindings_source($sourceName);
    }

    /**
     * @inheritDoc
     */
    public function getAllRegisteredBlockBindingsSources(): array
    {
        return get_all_registered_block_bindings_sources();
    }

    /**
     * @inheritDoc
     */
    public function getBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|null
    {
        return get_block_bindings_source($sourceName);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockCategories(): array
    {
        return get_default_block_categories();
    }

    /**
     * @inheritDoc
     */
    public function getBlockCategories(\WP_Post|\WP_Block_Editor_Context $postOrBlockEditorContext): array
    {
        return get_block_categories($postOrBlockEditorContext);
    }

    /**
     * @inheritDoc
     */
    public function getAllowedBlockTypes(\WP_Block_Editor_Context $blockEditorContext): bool|array
    {
        return get_allowed_block_types($blockEditorContext);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockEditorSettings(): array
    {
        return get_default_block_editor_settings();
    }

    /**
     * @inheritDoc
     */
    public function getLegacyWidgetBlockEditorSettings(): array
    {
        return get_legacy_widget_block_editor_settings();
    }

    /**
     * @inheritDoc
     */
    public function wpGetFirstBlock(array $blocks, string $blockName): array
    {
        return wp_get_first_block($blocks, $blockName);
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorSettings(array $customSettings, \WP_Block_Editor_Context $blockEditorContext): array
    {
        return get_block_editor_settings($customSettings, $blockEditorContext);
    }

    /**
     * @inheritDoc
     */
    public function blockEditorRestApiPreload(array $preloadPaths, \WP_Block_Editor_Context $blockEditorContext): void
    {
        block_editor_rest_api_preload($preloadPaths, $blockEditorContext);
    }

    /**
     * @inheritDoc
     */
    public function getBlockEditorThemeStyles(): array
    {
        return get_block_editor_theme_styles();
    }

    /**
     * @inheritDoc
     */
    public function getClassicThemeSupportsBlockEditorSettings(): array
    {
        return get_classic_theme_supports_block_editor_settings();
    }

    /**
     * @inheritDoc
     */
    public function wpGetBlockStyleVariationNameFromClass(string $classString): array|null
    {
        return wp_get_block_style_variation_name_from_class($classString);
    }

    /**
     * @inheritDoc
     */
    public function wpRenderElementsClassName(string $blockContent, array $block): string
    {
        return wp_render_elements_class_name($blockContent, $block);
    }

    /**
     * @inheritDoc
     */
    public function wpTypographyGetPresetInlineStyleValue(string $styleValue, string $cssProperty): string
    {
        return wp_typography_get_preset_inline_style_value($styleValue, $cssProperty);
    }

    /**
     * @inheritDoc
     */
    public function wpRenderTypographySupport(string $blockContent, array $block): string
    {
        return wp_render_typography_support($blockContent, $block);
    }

    /**
     * @inheritDoc
     */
    public function wpGetTypographyValueAndUnit(string|int|float $rawValue, array $options = []): array|null
    {
        return wp_get_typography_value_and_unit($rawValue, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpGetTypographyFontSizeValue(array $preset, bool|array $settings = []): string|null
    {
        return wp_get_typography_font_size_value($preset, $settings);
    }

    /**
     * @inheritDoc
     */
    public function getBlockThemeFolders(string $themeStylesheet = null): array
    {
        return get_block_theme_folders($themeStylesheet);
    }

    /**
     * @inheritDoc
     */
    public function getAllowedBlockTemplatePartAreas(): array
    {
        return get_allowed_block_template_part_areas();
    }

    /**
     * @inheritDoc
     */
    public function getDefaultBlockTemplateTypes(): array
    {
        return get_default_block_template_types();
    }

    /**
     * @inheritDoc
     */
    public function getBlockTemplates(array $query = [], string $templateType = 'wp_template'): array
    {
        return get_block_templates($query, $templateType);
    }

    /**
     * @inheritDoc
     */
    public function getBlockTemplate(string $id, string $templateType = 'wp_template'): \WP_Block_Template|null
    {
        return get_block_template($id, $templateType);
    }

    /**
     * @inheritDoc
     */
    public function getBlockFileTemplate(string $id, string $templateType = 'wp_template'): \WP_Block_Template|null
    {
        return get_block_file_template($id, $templateType);
    }

    /**
     * @inheritDoc
     */
    public function blockTemplatePart(string $part): void
    {
        block_template_part($part);
    }

    /**
     * @inheritDoc
     */
    public function blockHeaderArea(): void
    {
        block_header_area();
    }

    /**
     * @inheritDoc
     */
    public function blockFooterArea(): void
    {
        block_footer_area();
    }

    /**
     * @inheritDoc
     */
    public function wpIsThemeDirectoryIgnored(string $path): bool
    {
        return wp_is_theme_directory_ignored($path);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateBlockTemplatesExportFile(): \WP_Error|string
    {
        return wp_generate_block_templates_export_file();
    }

    /**
     * @inheritDoc
     */
    public function getTemplateHierarchy(string $slug, bool $isCustom = false, string $templatePrefix = ''): array
    {
        return get_template_hierarchy($slug, $isCustom, $templatePrefix);
    }

    /**
     * @inheritDoc
     */
    public function locateBlockTemplate(string $template, string $type, array $templates): string
    {
        return locate_block_template($template, $type, $templates);
    }

    /**
     * @inheritDoc
     */
    public function removeBlockAssetPathPrefix(string $assetHandleOrPath): string
    {
        return remove_block_asset_path_prefix($assetHandleOrPath);
    }

    /**
     * @inheritDoc
     */
    public function generateBlockAssetHandle(string $blockName, string $fieldName, int $index = 0): string
    {
        return generate_block_asset_handle($blockName, $fieldName, $index);
    }

    /**
     * @inheritDoc
     */
    public function getBlockAssetUrl(string $path): string|false
    {
        return get_block_asset_url($path);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockScriptModuleId(array $metadata, string $fieldName, int $index = 0): string|false
    {
        return register_block_script_module_id($metadata, $fieldName, $index);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockScriptHandle(array $metadata, string $fieldName, int $index = 0): string|false
    {
        return register_block_script_handle($metadata, $fieldName, $index);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockStyleHandle(array $metadata, string $fieldName, int $index = 0): string|false
    {
        return register_block_style_handle($metadata, $fieldName, $index);
    }

    /**
     * @inheritDoc
     */
    public function getBlockMetadataI18nSchema(): object
    {
        return get_block_metadata_i18n_schema();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockTypeFromMetadata(string $fileOrFolder, array $args = []): \WP_Block_Type|false
    {
        return register_block_type_from_metadata($fileOrFolder, $args);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockType(string|\WP_Block_Type $blockType, array $args = []): \WP_Block_Type|false
    {
        return register_block_type($blockType, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockType(string|\WP_Block_Type $name): \WP_Block_Type|false
    {
        return unregister_block_type($name);
    }

    /**
     * @inheritDoc
     */
    public function hasBlocks(int|string|\WP_Post|null $post = null): bool
    {
        return has_blocks($post);
    }

    /**
     * @inheritDoc
     */
    public function hasBlock(string $blockName, int|string|\WP_Post|null $post = null): bool
    {
        return has_block($blockName, $post);
    }

    /**
     * @inheritDoc
     */
    public function getDynamicBlockNames(): array
    {
        return get_dynamic_block_names();
    }

    /**
     * @inheritDoc
     */
    public function getHookedBlocks(): array
    {
        return get_hooked_blocks();
    }

    /**
     * @inheritDoc
     */
    public function insertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response
    {
        return insert_hooked_blocks_into_rest_response($response, $post);
    }

    /**
     * @inheritDoc
     */
    public function serializeBlockAttributes(array $blockAttributes): string
    {
        return serialize_block_attributes($blockAttributes);
    }

    /**
     * @inheritDoc
     */
    public function stripCoreBlockNamespace(string|null $blockName = null): string
    {
        return strip_core_block_namespace($blockName);
    }

    /**
     * @inheritDoc
     */
    public function getCommentDelimitedBlockContent(string|null $blockName, array $blockAttributes, string $blockContent): string
    {
        return get_comment_delimited_block_content($blockName, $blockAttributes, $blockContent);
    }

    /**
     * @inheritDoc
     */
    public function serializeBlock(array $block): string
    {
        return serialize_block($block);
    }

    /**
     * @inheritDoc
     */
    public function serializeBlocks(array $blocks): string
    {
        return serialize_blocks($blocks);
    }

    /**
     * @inheritDoc
     */
    public function resolvePatternBlocks(array $blocks): array
    {
        return resolve_pattern_blocks($blocks);
    }

    /**
     * @inheritDoc
     */
    public function filterBlockContent(string $text, array|string $allowedHtml = 'post', array $allowedProtocols = []): string
    {
        return filter_block_content($text, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function filterBlockKses(\WP_Block_Parser_Block $block, array|string $allowedHtml, array $allowedProtocols = []): array
    {
        return filter_block_kses($block, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function filterBlockKsesValue(array|string $value, array|string $allowedHtml, array $allowedProtocols = [], array $blockContext = null): array|string
    {
        return filter_block_kses_value($value, $allowedHtml, $allowedProtocols, $blockContext);
    }

    /**
     * @inheritDoc
     */
    public function filterBlockCoreTemplatePartAttributes(string $attributeValue, string $attributeName, array|string $allowedHtml): string
    {
        return filter_block_core_template_part_attributes($attributeValue, $attributeName, $allowedHtml);
    }

    /**
     * @inheritDoc
     */
    public function excerptRemoveBlocks(string $content): string
    {
        return excerpt_remove_blocks($content);
    }

    /**
     * @inheritDoc
     */
    public function excerptRemoveFootnotes(string $content): string
    {
        return excerpt_remove_footnotes($content);
    }

    /**
     * @inheritDoc
     */
    public function renderBlock(array $parsedBlock): string
    {
        return render_block($parsedBlock);
    }

    /**
     * @inheritDoc
     */
    public function parseBlocks(string $content): array
    {
        return parse_blocks($content);
    }

    /**
     * @inheritDoc
     */
    public function doBlocks(string $content): string
    {
        return do_blocks($content);
    }

    /**
     * @inheritDoc
     */
    public function blockVersion(string $content): int
    {
        return block_version($content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockStyle(string|array $blockName, array $styleProperties): bool
    {
        return register_block_style($blockName, $styleProperties);
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockStyle(string $blockName, string $blockStyleName): bool
    {
        return unregister_block_style($blockName, $blockStyleName);
    }

    /**
     * @inheritDoc
     */
    public function blockHasSupport(\WP_Block_Type $blockType, string|array $feature, mixed $defaultValue = false): bool
    {
        return block_has_support($blockType, $feature, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function wpMigrateOldTypographyShape(array $metadata): array
    {
        return wp_migrate_old_typography_shape($metadata);
    }

    /**
     * @inheritDoc
     */
    public function buildQueryVarsFromQueryBlock(\WP_Block $block, int $page): array
    {
        return build_query_vars_from_query_block($block, $page);
    }

    /**
     * @inheritDoc
     */
    public function getQueryPaginationArrow(\WP_Block $block, bool $isNext): string|null
    {
        return get_query_pagination_arrow($block, $isNext);
    }

    /**
     * @inheritDoc
     */
    public function buildCommentQueryVarsFromBlock(\WP_Block $block): array
    {
        return build_comment_query_vars_from_block($block);
    }

    /**
     * @inheritDoc
     */
    public function getCommentsPaginationArrow(\WP_Block $block, string $paginationType = 'next'): string|null
    {
        return get_comments_pagination_arrow($block, $paginationType);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreArchives(array $attributes): string
    {
        return render_block_core_archives($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreArchives(): void
    {
        register_block_core_archives();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreAvatar(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_avatar($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function getBlockCoreAvatarBorderAttributes(array $attributes): array
    {
        return get_block_core_avatar_border_attributes($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreAvatar(): void
    {
        register_block_core_avatar();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreBlock(array $attributes): string
    {
        return render_block_core_block($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreBlock(): void
    {
        register_block_core_block();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreButton(array $attributes, string $content): string
    {
        return render_block_core_button($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreButton(): void
    {
        register_block_core_button();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCalendar(array $attributes): string
    {
        return render_block_core_calendar($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCalendar(): void
    {
        register_block_core_calendar();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarHasPublishedPosts(): bool
    {
        return block_core_calendar_has_published_posts();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPosts(): bool
    {
        return block_core_calendar_update_has_published_posts();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPostOnDelete(int $postId): void
    {
        block_core_calendar_update_has_published_post_on_delete($postId);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCalendarUpdateHasPublishedPostOnTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void
    {
        block_core_calendar_update_has_published_post_on_transition_post_status($newStatus, $oldStatus, $post);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCategories(array $attributes): string
    {
        return render_block_core_categories($attributes);
    }

    /**
     * @inheritDoc
     */
    public function buildDropdownScriptBlockCoreCategories(string $dropdownId): string
    {
        return build_dropdown_script_block_core_categories($dropdownId);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCategories(): void
    {
        register_block_core_categories();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentAuthorName(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_author_name($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentAuthorName(): void
    {
        register_block_core_comment_author_name();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentContent(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_content($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentContent(): void
    {
        register_block_core_comment_content();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentDate(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_date($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentDate(): void
    {
        register_block_core_comment_date();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentEditLink(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_edit_link($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentEditLink(): void
    {
        register_block_core_comment_edit_link();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentReplyLink(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_reply_link($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentReplyLink(): void
    {
        register_block_core_comment_reply_link();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreCommentTemplateRenderComments(array $comments, \WP_Block $block): string
    {
        return block_core_comment_template_render_comments($comments, $block);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentTemplate(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comment_template($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentTemplate(): void
    {
        register_block_core_comment_template();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationNext(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comments_pagination_next($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationNext(): void
    {
        register_block_core_comments_pagination_next();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationNumbers(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comments_pagination_numbers($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationNumbers(): void
    {
        register_block_core_comments_pagination_numbers();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPaginationPrevious(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comments_pagination_previous($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPaginationPrevious(): void
    {
        register_block_core_comments_pagination_previous();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsPagination(array $attributes, string $content): string
    {
        return render_block_core_comments_pagination($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsPagination(): void
    {
        register_block_core_comments_pagination();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCommentsTitle(array $attributes): string
    {
        return render_block_core_comments_title($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCommentsTitle(): void
    {
        register_block_core_comments_title();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreComments(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_comments($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreComments(): void
    {
        register_block_core_comments();
    }

    /**
     * @inheritDoc
     */
    public function commentsBlockFormDefaults(array $fields): array
    {
        return comments_block_form_defaults($fields);
    }

    /**
     * @inheritDoc
     */
    public function enqueueLegacyPostCommentsBlockStyles(string $blockName): void
    {
        enqueue_legacy_post_comments_block_styles($blockName);
    }

    /**
     * @inheritDoc
     */
    public function registerLegacyPostCommentsBlock(): void
    {
        register_legacy_post_comments_block();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreCover(array $attributes, string $content): string
    {
        return render_block_core_cover($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreCover(): void
    {
        register_block_core_cover();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreFile(array $attributes, string $content): string
    {
        return render_block_core_file($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFile(): void
    {
        register_block_core_file();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreFootnotes(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_footnotes($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFootnotes(): void
    {
        register_block_core_footnotes();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreFootnotesPostMeta(): void
    {
        register_block_core_footnotes_post_meta();
    }

    /**
     * @inheritDoc
     */
    public function wpAddFootnotesToRevision(array $fields): array
    {
        return wp_add_footnotes_to_revision($fields);
    }

    /**
     * @inheritDoc
     */
    public function wpGetFootnotesFromRevision(string $revisionField, string $field, object $revision): string
    {
        return wp_get_footnotes_from_revision($revisionField, $field, $revision);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreGalleryDataIdBackcompatibility(array $parsedBlock): array
    {
        return block_core_gallery_data_id_backcompatibility($parsedBlock);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreGalleryRender(array $attributes, string $content): string
    {
        return block_core_gallery_render($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreGallery(): void
    {
        register_block_core_gallery();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHeadingRender(array $attributes, string $content): string
    {
        return block_core_heading_render($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreHeading(): void
    {
        register_block_core_heading();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildCssColors(array $context): array
    {
        return block_core_home_link_build_css_colors($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildCssFontSizes(array $context): array
    {
        return block_core_home_link_build_css_font_sizes($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreHomeLinkBuildLiWrapperAttributes(array $context): string
    {
        return block_core_home_link_build_li_wrapper_attributes($context);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreHomeLink(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_home_link($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreHomeLink(): void
    {
        register_block_core_home_link();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreImage(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_image($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImageGetLightboxSettings(array $block): array
    {
        return block_core_image_get_lightbox_settings($block);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImageRenderLightbox(string $blockContent, array $block): string
    {
        return block_core_image_render_lightbox($blockContent, $block);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreImagePrintLightboxOverlay(): void
    {
        block_core_image_print_lightbox_overlay();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreImage(): void
    {
        register_block_core_image();
    }

    /**
     * @inheritDoc
     */
    public function registerCoreBlockStyleHandles(): void
    {
        register_core_block_style_handles();
    }

    /**
     * @inheritDoc
     */
    public function registerCoreBlockTypesFromMetadata(): void
    {
        register_core_block_types_from_metadata();
    }

    /**
     * @inheritDoc
     */
    public function wpLatestCommentsDraftOrPostTitle(int|\WP_Post $post = 0): string
    {
        return wp_latest_comments_draft_or_post_title($post);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLatestComments(array $attributes = []): string
    {
        return render_block_core_latest_comments($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLatestComments(): void
    {
        register_block_core_latest_comments();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreLatestPostsGetExcerptLength(): int
    {
        return block_core_latest_posts_get_excerpt_length();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLatestPosts(array $attributes): string
    {
        return render_block_core_latest_posts($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLatestPosts(): void
    {
        register_block_core_latest_posts();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreLatestPostsMigrateCategories(array $block): array
    {
        return block_core_latest_posts_migrate_categories($block);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLegacyWidget(array $attributes): string
    {
        return render_block_core_legacy_widget($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLegacyWidget(): void
    {
        register_block_core_legacy_widget();
    }

    /**
     * @inheritDoc
     */
    public function handleLegacyWidgetPreviewIframe(): void
    {
        handle_legacy_widget_preview_iframe();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreListRender(array $attributes, string $content): string
    {
        return block_core_list_render($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreList(): void
    {
        register_block_core_list();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreLoginout(array $attributes): string
    {
        return render_block_core_loginout($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreLoginout(): void
    {
        register_block_core_loginout();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreMediaText(array $attributes, string $content): string
    {
        return render_block_core_media_text($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreMediaText(): void
    {
        register_block_core_media_text();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildCssColors(array $context, array $attributes, bool $isSubMenu = false): array
    {
        return block_core_navigation_link_build_css_colors($context, $attributes, $isSubMenu);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildCssFontSizes(array $context): array
    {
        return block_core_navigation_link_build_css_font_sizes($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkRenderSubmenuIcon(): string
    {
        return block_core_navigation_link_render_submenu_icon();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkMaybeUrldecode(string $url): string
    {
        return block_core_navigation_link_maybe_urldecode($url);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigationLink(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_navigation_link($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function buildVariationForNavigationLink(\WP_Taxonomy|\WP_Post_Type $entity, string $kind): array
    {
        return build_variation_for_navigation_link($entity, $kind);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkFilterVariations(array $variations, \WP_Block_Type $blockType): void
    {
        block_core_navigation_link_filter_variations($variations, $blockType);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationLinkBuildVariations(): array
    {
        return block_core_navigation_link_build_variations();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigationLink(): void
    {
        register_block_core_navigation_link();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSubmenuBuildCssFontSizes(array $context): array
    {
        return block_core_navigation_submenu_build_css_font_sizes($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSubmenuRenderSubmenuIcon(): string
    {
        return block_core_navigation_submenu_render_submenu_icon();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigationSubmenu(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_navigation_submenu($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigationSubmenu(): void
    {
        register_block_core_navigation_submenu();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetMenuItemsAtLocation(string $location): array
    {
        return block_core_navigation_get_menu_items_at_location($location);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSortMenuItemsByParentId(array $menuItems): array
    {
        return block_core_navigation_sort_menu_items_by_parent_id($menuItems);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetInnerBlocksFromUnstableLocation(array $attributes): \WP_Block_List
    {
        return block_core_navigation_get_inner_blocks_from_unstable_location($attributes);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationAddDirectivesToSubmenu(\WP_HTML_Tag_Processor $tags, array $blockAttributes): string
    {
        return block_core_navigation_add_directives_to_submenu($tags, $blockAttributes);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBuildCssColors(array $attributes): array
    {
        return block_core_navigation_build_css_colors($attributes);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBuildCssFontSizes(array $attributes): array
    {
        return block_core_navigation_build_css_font_sizes($attributes);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationRenderSubmenuIcon(): string
    {
        return block_core_navigation_render_submenu_icon();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationFilterOutEmptyBlocks(array $parsedBlocks): array
    {
        return block_core_navigation_filter_out_empty_blocks($parsedBlocks);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationBlockContainsCoreNavigation(\WP_Block_List $innerBlocks): bool
    {
        return block_core_navigation_block_contains_core_navigation($innerBlocks);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetFallbackBlocks(): array
    {
        return block_core_navigation_get_fallback_blocks();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationGetPostIds(\WP_Block_List $innerBlocks): array
    {
        return block_core_navigation_get_post_ids($innerBlocks);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationFromBlockGetPostIds(\WP_Block $block): array
    {
        return block_core_navigation_from_block_get_post_ids($block);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreNavigation(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_navigation($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreNavigation(): void
    {
        register_block_core_navigation();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationTypographicPresetsBackcompatibility(array $parsedBlock): array
    {
        return block_core_navigation_typographic_presets_backcompatibility($parsedBlock);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationRemoveSerializedParentBlock(string $serializedBlock): string
    {
        return block_core_navigation_remove_serialized_parent_block($serializedBlock);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationMockParsedBlock(array $innerBlocks, \WP_Post $post): array
    {
        return block_core_navigation_mock_parsed_block($innerBlocks, $post);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationInsertHookedBlocks(array $innerBlocks, \WP_Post $post): string
    {
        return block_core_navigation_insert_hooked_blocks($innerBlocks, $post);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationSetIgnoredHookedBlocksMetadata(array $innerBlocks, \WP_Post $post): string
    {
        return block_core_navigation_set_ignored_hooked_blocks_metadata($innerBlocks, $post);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreNavigationInsertHookedBlocksIntoRestResponse(\WP_REST_Response $response, \WP_Post $post): \WP_REST_Response
    {
        return block_core_navigation_insert_hooked_blocks_into_rest_response($response, $post);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePageListItem(): void
    {
        register_block_core_page_list_item();
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListBuildCssColors(array $attributes, array $context): array
    {
        return block_core_page_list_build_css_colors($attributes, $context);
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListBuildCssFontSizes(array $context): array
    {
        return block_core_page_list_build_css_font_sizes($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListRenderNestedPageList(bool $openSubmenusOnClick, bool $showSubmenuIcons, bool $isNavigationChild, array $nestedPages, bool $isNested, array $activePageAncestorIds = [], array $colors = [], int $depth = 0): string
    {
        return block_core_page_list_render_nested_page_list($openSubmenusOnClick, $showSubmenuIcons, $isNavigationChild, $nestedPages, $isNested, $activePageAncestorIds, $colors, $depth);
    }

    /**
     * @inheritDoc
     */
    public function blockCorePageListNestPages(array $currentLevel, array $children): array
    {
        return block_core_page_list_nest_pages($currentLevel, $children);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePageList(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_page_list($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePageList(): void
    {
        register_block_core_page_list();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePattern(): void
    {
        register_block_core_pattern();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePattern(array $attributes): string
    {
        return render_block_core_pattern($attributes);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthorBiography(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_author_biography($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthorBiography(): void
    {
        register_block_core_post_author_biography();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthorName(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_author_name($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthorName(): void
    {
        register_block_core_post_author_name();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostAuthor(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_author($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostAuthor(): void
    {
        register_block_core_post_author();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostCommentsForm(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_comments_form($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostCommentsForm(): void
    {
        register_block_core_post_comments_form();
    }

    /**
     * @inheritDoc
     */
    public function postCommentsFormBlockFormDefaults(array $fields): array
    {
        return post_comments_form_block_form_defaults($fields);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostContent(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_content($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostContent(): void
    {
        register_block_core_post_content();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostDate(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_date($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostDate(): void
    {
        register_block_core_post_date();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostExcerpt(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_excerpt($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostExcerpt(): void
    {
        register_block_core_post_excerpt();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostFeaturedImage(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_featured_image($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function getBlockCorePostFeaturedImageOverlayElementMarkup(array $attributes): string
    {
        return get_block_core_post_featured_image_overlay_element_markup($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getBlockCorePostFeaturedImageBorderAttributes(array $attributes): array
    {
        return get_block_core_post_featured_image_border_attributes($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostFeaturedImage(): void
    {
        register_block_core_post_featured_image();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostNavigationLink(array $attributes, string $content): string
    {
        return render_block_core_post_navigation_link($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostNavigationLink(): void
    {
        register_block_core_post_navigation_link();
    }

    /**
     * @inheritDoc
     */
    public function blockCorePostTemplateUsesFeaturedImage(\WP_Block_List $innerBlocks): bool
    {
        return block_core_post_template_uses_featured_image($innerBlocks);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTemplate(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_template($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTemplate(): void
    {
        register_block_core_post_template();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTerms(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_terms($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function blockCorePostTermsBuildVariations(): array
    {
        return block_core_post_terms_build_variations();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTerms(): void
    {
        register_block_core_post_terms();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCorePostTitle(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_post_title($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCorePostTitle(): void
    {
        register_block_core_post_title();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryNoResults(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_query_no_results($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryNoResults(): void
    {
        register_block_core_query_no_results();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationNext(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_query_pagination_next($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationNext(): void
    {
        register_block_core_query_pagination_next();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationNumbers(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_query_pagination_numbers($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationNumbers(): void
    {
        register_block_core_query_pagination_numbers();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPaginationPrevious(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_query_pagination_previous($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPaginationPrevious(): void
    {
        register_block_core_query_pagination_previous();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryPagination(array $attributes, string $content): string
    {
        return render_block_core_query_pagination($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryPagination(): void
    {
        register_block_core_query_pagination();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQueryTitle(array $attributes): string
    {
        return render_block_core_query_title($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQueryTitle(): void
    {
        register_block_core_query_title();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreQuery(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_query($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreQuery(): void
    {
        register_block_core_query();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreQueryDisableEnhancedPagination(array $parsedBlock): string
    {
        return block_core_query_disable_enhanced_pagination($parsedBlock);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreReadMore(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_read_more($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreReadMore(): void
    {
        register_block_core_read_more();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreRss(array $attributes): string
    {
        return render_block_core_rss($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreRss(): void
    {
        register_block_core_rss();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSearch(array $attributes): string
    {
        return render_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSearch(): void
    {
        register_block_core_search();
    }

    /**
     * @inheritDoc
     */
    public function classnamesForBlockCoreSearch(array $attributes): string
    {
        return classnames_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function applyBlockCoreSearchBorderStyle(array $attributes, string $property, string $side, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void
    {
        apply_block_core_search_border_style($attributes, $property, $side, $wrapperStyles, $buttonStyles, $inputStyles);
    }

    /**
     * @inheritDoc
     */
    public function applyBlockCoreSearchBorderStyles(array $attributes, string $property, array &$wrapperStyles, array &$buttonStyles, array &$inputStyles): void
    {
        apply_block_core_search_border_styles($attributes, $property, $wrapperStyles, $buttonStyles, $inputStyles);
    }

    /**
     * @inheritDoc
     */
    public function stylesForBlockCoreSearch(array $attributes): array
    {
        return styles_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getTypographyClassesForBlockCoreSearch(array $attributes): string
    {
        return get_typography_classes_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getTypographyStylesForBlockCoreSearch(array $attributes): string
    {
        return get_typography_styles_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getBorderColorClassesForBlockCoreSearch(array $attributes): string
    {
        return get_border_color_classes_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function getColorClassesForBlockCoreSearch(array $attributes): string
    {
        return get_color_classes_for_block_core_search($attributes);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreShortcode(array $attributes, string $content): string
    {
        return render_block_core_shortcode($attributes, $content);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreShortcode(): void
    {
        register_block_core_shortcode();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteLogo(array $attributes): string
    {
        return render_block_core_site_logo($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteLogoSetting(): void
    {
        register_block_core_site_logo_setting();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteIconSetting(): void
    {
        register_block_core_site_icon_setting();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteLogo(): void
    {
        register_block_core_site_logo();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteTagline(array $attributes): string
    {
        return render_block_core_site_tagline($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteTagline(): void
    {
        register_block_core_site_tagline();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSiteTitle(array $attributes): string
    {
        return render_block_core_site_title($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSiteTitle(): void
    {
        register_block_core_site_title();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreSocialLink(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_social_link($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreSocialLink(): void
    {
        register_block_core_social_link();
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetIcon(string $service): string
    {
        return block_core_social_link_get_icon($service);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetName(string $service): string
    {
        return block_core_social_link_get_name($service);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkServices(string $service = '', string $field = ''): array|string
    {
        return block_core_social_link_services($service, $field);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetColorStyles(array $context): string
    {
        return block_core_social_link_get_color_styles($context);
    }

    /**
     * @inheritDoc
     */
    public function blockCoreSocialLinkGetColorClasses(array $context): string
    {
        return block_core_social_link_get_color_classes($context);
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTagCloud(array $attributes): string
    {
        return render_block_core_tag_cloud($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTagCloud(): void
    {
        register_block_core_tag_cloud();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTemplatePart(array $attributes): string
    {
        return render_block_core_template_part($attributes);
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockAreaVariations(array $instanceVariations): array
    {
        return build_template_part_block_area_variations($instanceVariations);
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockInstanceVariations(): array
    {
        return build_template_part_block_instance_variations();
    }

    /**
     * @inheritDoc
     */
    public function buildTemplatePartBlockVariations(): array
    {
        return build_template_part_block_variations();
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTemplatePart(): void
    {
        register_block_core_template_part();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreTermDescription(array $attributes): string
    {
        return render_block_core_term_description($attributes);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreTermDescription(): void
    {
        register_block_core_term_description();
    }

    /**
     * @inheritDoc
     */
    public function renderBlockCoreWidgetGroup(array $attributes, string $content, \WP_Block $block): string
    {
        return render_block_core_widget_group($attributes, $content, $block);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockCoreWidgetGroup(): void
    {
        register_block_core_widget_group();
    }

    /**
     * @inheritDoc
     */
    public function noteSidebarBeingRendered(int|string $index): void
    {
        note_sidebar_being_rendered($index);
    }

    /**
     * @inheritDoc
     */
    public function discardSidebarBeingRendered(): void
    {
        discard_sidebar_being_rendered();
    }

    /**
     * @inheritDoc
     */
    public function wpListBookmarks(string|array $args = ''): mixed
    {
        return wp_list_bookmarks($args);
    }

    /**
     * @inheritDoc
     */
    public function getBookmark(int|\stdClass $bookmark, string $output = OBJECT, string $filter = 'raw'): array|object|null
    {
        return get_bookmark($bookmark, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getBookmarkField(string $field, int $bookmark, string $context = 'display'): string|\WP_Error
    {
        return get_bookmark_field($field, $bookmark, $context);
    }

    /**
     * @inheritDoc
     */
    public function getBookmarks(string|array $args = ''): array
    {
        return get_bookmarks($args);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeBookmark(\stdClass|array $bookmark, string $context = 'display'): \stdClass|array
    {
        return sanitize_bookmark($bookmark, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeBookmarkField(string $field, mixed $value, int $bookmarkId, string $context): mixed
    {
        return sanitize_bookmark_field($field, $value, $bookmarkId, $context);
    }

    /**
     * @inheritDoc
     */
    public function cleanBookmarkCache(int $bookmarkId): void
    {
        clean_bookmark_cache($bookmarkId);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheInit(): void
    {
        wp_cache_init();
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_add($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddMultiple(array $data, string $group = '', int $expire = 0): array
    {
        return wp_cache_add_multiple($data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_replace($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_set($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetMultiple(array $data, string $group = '', int $expire = 0): array
    {
        return wp_cache_set_multiple($data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGet(int|string $key, string $group = '', bool $force = false, bool &$found = null): mixed
    {
        return wp_cache_get($key, $group, $force, $found);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGetMultiple(array $keys, string $group = '', bool $force = false): array
    {
        return wp_cache_get_multiple($keys, $group, $force);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDelete(int|string $key, string $group = ''): bool
    {
        return wp_cache_delete($key, $group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDeleteMultiple(array $keys, string $group = ''): array
    {
        return wp_cache_delete_multiple($keys, $group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheIncr(int|string $key, int $offset = 1, string $group = ''): int|false
    {
        return wp_cache_incr($key, $offset, $group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheDecr(int|string $key, int $offset = 1, string $group = ''): int|false
    {
        return wp_cache_decr($key, $offset, $group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlush(): bool
    {
        return wp_cache_flush();
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlushRuntime(): bool
    {
        return wp_cache_flush_runtime();
    }

    /**
     * @inheritDoc
     */
    public function wpCacheFlushGroup(string $group): bool
    {
        return wp_cache_flush_group($group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSupports(string $feature): bool
    {
        return wp_cache_supports($feature);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheClose(): true
    {
        return wp_cache_close();
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddGlobalGroups(string|array $groups): void
    {
        wp_cache_add_global_groups($groups);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheAddNonPersistentGroups(string|array $groups): void
    {
        wp_cache_add_non_persistent_groups($groups);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSwitchToBlog(int $blogId): void
    {
        wp_cache_switch_to_blog($blogId);
    }

    /**
     * @inheritDoc
     */
    public function redirectCanonical(string $requestedUrl = null, bool $doRedirect = true): mixed
    {
        return redirect_canonical($requestedUrl, $doRedirect);
    }

    /**
     * @inheritDoc
     */
    public function stripFragmentFromUrl(string $url): string
    {
        return strip_fragment_from_url($url);
    }

    /**
     * @inheritDoc
     */
    public function redirectGuess404Permalink(): string|false
    {
        return redirect_guess_404_permalink();
    }

    /**
     * @inheritDoc
     */
    public function wpRedirectAdminLocations(): void
    {
        wp_redirect_admin_locations();
    }

    /**
     * @inheritDoc
     */
    public function mapMetaCap(string $cap, int $userId, mixed ...$args): array
    {
        return map_meta_cap($cap, $userId, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function currentUserCan(string $capability, mixed ...$args): bool
    {
        return current_user_can($capability, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function currentUserCanForBlog(int $blogId, string $capability, mixed ...$args): bool
    {
        return current_user_can_for_blog($blogId, $capability, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function authorCan(int|\WP_Post $post, string $capability, mixed ...$args): bool
    {
        return author_can($post, $capability, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function userCan(int|\WP_User $user, string $capability, mixed ...$args): bool
    {
        return user_can($user, $capability, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function wpRoles(): \WP_Roles
    {
        return wp_roles();
    }

    /**
     * @inheritDoc
     */
    public function getRole(string $role): \WP_Role|null
    {
        return get_role($role);
    }

    /**
     * @inheritDoc
     */
    public function addRole(string $role, string $displayName, array $capabilities = []): mixed
    {
        return add_role($role, $displayName, $capabilities);
    }

    /**
     * @inheritDoc
     */
    public function removeRole(string $role): void
    {
        remove_role($role);
    }

    /**
     * @inheritDoc
     */
    public function getSuperAdmins(): array
    {
        return get_super_admins();
    }

    /**
     * @inheritDoc
     */
    public function isSuperAdmin(int|false $userId = false): bool
    {
        return is_super_admin($userId);
    }

    /**
     * @inheritDoc
     */
    public function grantSuperAdmin(int $userId): bool
    {
        return grant_super_admin($userId);
    }

    /**
     * @inheritDoc
     */
    public function revokeSuperAdmin(int $userId): bool
    {
        return revoke_super_admin($userId);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantInstallLanguagesCap(array $allcaps): array
    {
        return wp_maybe_grant_install_languages_cap($allcaps);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantResumeExtensionsCaps(array $allcaps): array
    {
        return wp_maybe_grant_resume_extensions_caps($allcaps);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGrantSiteHealthCaps(array $allcaps, array $caps, array $args, \WP_User $user): array
    {
        return wp_maybe_grant_site_health_caps($allcaps, $caps, $args, $user);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryLink(int|object $category): string
    {
        return get_category_link($category);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryParents(int $categoryId, bool $link = false, string $separator = '/', bool $nicename = false, array $deprecated = []): string|\WP_Error
    {
        return get_category_parents($categoryId, $link, $separator, $nicename, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getTheCategory(int|false $postId = false): array
    {
        return get_the_category($postId);
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryByID(int $catId): string|\WP_Error
    {
        return get_the_category_by_ID($catId);
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryList(string $separator = '', string $parents = '', int|false $postId = false): string
    {
        return get_the_category_list($separator, $parents, $postId);
    }

    /**
     * @inheritDoc
     */
    public function inCategory(int|string|array $category, int|\WP_Post $post = null): bool
    {
        return in_category($category, $post);
    }

    /**
     * @inheritDoc
     */
    public function theCategory(string $separator = '', string $parents = '', int|false $postId = false): void
    {
        the_category($separator, $parents, $postId);
    }

    /**
     * @inheritDoc
     */
    public function categoryDescription(int $category = 0): string
    {
        return category_description($category);
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownCategories(array|string $args = ''): string
    {
        return wp_dropdown_categories($args);
    }

    /**
     * @inheritDoc
     */
    public function wpListCategories(array|string $args = ''): mixed
    {
        return wp_list_categories($args);
    }

    /**
     * @inheritDoc
     */
    public function wpTagCloud(array|string $args = ''): mixed
    {
        return wp_tag_cloud($args);
    }

    /**
     * @inheritDoc
     */
    public function defaultTopicCountScale(int $count): int
    {
        return default_topic_count_scale($count);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateTagCloud(array $tags, string|array $args = ''): string|array
    {
        return wp_generate_tag_cloud($tags, $args);
    }

    /**
     * @inheritDoc
     */
    public function walkCategoryTree(mixed ...$args): string
    {
        return walk_category_tree(...$args);
    }

    /**
     * @inheritDoc
     */
    public function walkCategoryDropdownTree(mixed ...$args): string
    {
        return walk_category_dropdown_tree(...$args);
    }

    /**
     * @inheritDoc
     */
    public function getTagLink(int|object $tag): string
    {
        return get_tag_link($tag);
    }

    /**
     * @inheritDoc
     */
    public function getTheTags(int|\WP_Post $post = 0): array|false|\WP_Error
    {
        return get_the_tags($post);
    }

    /**
     * @inheritDoc
     */
    public function getTheTagList(string $before = '', string $sep = '', string $after = '', int $postId = 0): string|false|\WP_Error
    {
        return get_the_tag_list($before, $sep, $after, $postId);
    }

    /**
     * @inheritDoc
     */
    public function theTags(string $before = null, string $sep = ', ', string $after = ''): void
    {
        the_tags($before, $sep, $after);
    }

    /**
     * @inheritDoc
     */
    public function tagDescription(int $tag = 0): string
    {
        return tag_description($tag);
    }

    /**
     * @inheritDoc
     */
    public function termDescription(int $term = 0, null $deprecated = null): string
    {
        return term_description($term, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getTheTerms(int|\WP_Post $post, string $taxonomy): array|false|\WP_Error
    {
        return get_the_terms($post, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTheTermList(int $postId, string $taxonomy, string $before = '', string $sep = '', string $after = ''): string|false|\WP_Error
    {
        return get_the_term_list($postId, $taxonomy, $before, $sep, $after);
    }

    /**
     * @inheritDoc
     */
    public function getTermParentsList(int $termId, string $taxonomy, string|array $args = []): string|\WP_Error
    {
        return get_term_parents_list($termId, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function theTerms(int $postId, string $taxonomy, string $before = '', string $sep = ', ', string $after = ''): mixed
    {
        return the_terms($postId, $taxonomy, $before, $sep, $after);
    }

    /**
     * @inheritDoc
     */
    public function hasCategory(string|int|array $category = '', int|\WP_Post $post = null): bool
    {
        return has_category($category, $post);
    }

    /**
     * @inheritDoc
     */
    public function hasTag(string|int|array $tag = '', int|\WP_Post $post = null): bool
    {
        return has_tag($tag, $post);
    }

    /**
     * @inheritDoc
     */
    public function hasTerm(string|int|array $term = '', string $taxonomy = '', int|\WP_Post $post = null): bool
    {
        return has_term($term, $taxonomy, $post);
    }

    /**
     * @inheritDoc
     */
    public function getCategories(string|array $args = ''): array
    {
        return get_categories($args);
    }

    /**
     * @inheritDoc
     */
    public function getCategory(int|object $category, string $output = OBJECT, string $filter = 'raw'): array|null|object
    {
        return get_category($category, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryByPath(string $categoryPath, bool $fullMatch = true, string $output = OBJECT): \WP_Term|array|\WP_Error|null
    {
        return get_category_by_path($categoryPath, $fullMatch, $output);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryBySlug(string $slug): object|false
    {
        return get_category_by_slug($slug);
    }

    /**
     * @inheritDoc
     */
    public function getCatID(string $catName): int
    {
        return get_cat_ID($catName);
    }

    /**
     * @inheritDoc
     */
    public function getCatName(int $catId): string
    {
        return get_cat_name($catId);
    }

    /**
     * @inheritDoc
     */
    public function catIsAncestorOf(int|object $cat1, int|object $cat2): bool
    {
        return cat_is_ancestor_of($cat1, $cat2);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCategory(object|array $category, string $context = 'display'): object|array
    {
        return sanitize_category($category, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCategoryField(string $field, mixed $value, int $catId, string $context): mixed
    {
        return sanitize_category_field($field, $value, $catId, $context);
    }

    /**
     * @inheritDoc
     */
    public function getTags(string|array $args = ''): array|int|\WP_Error
    {
        return get_tags($args);
    }

    /**
     * @inheritDoc
     */
    public function getTag(int|object $tag, string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|\WP_Error|null
    {
        return get_tag($tag, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function cleanCategoryCache(int $id): void
    {
        clean_category_cache($id);
    }

    /**
     * @inheritDoc
     */
    public function wpSimplepieAutoload(string $class): void
    {
        wp_simplepie_autoload($class);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockPatternCategory(string $categoryName, array $categoryProperties): bool
    {
        return register_block_pattern_category($categoryName, $categoryProperties);
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockPatternCategory(string $categoryName): bool
    {
        return unregister_block_pattern_category($categoryName);
    }

    /**
     * @inheritDoc
     */
    public function registerBlockPattern(string $patternName, array $patternProperties): bool
    {
        return register_block_pattern($patternName, $patternProperties);
    }

    /**
     * @inheritDoc
     */
    public function unregisterBlockPattern(string $patternName): bool
    {
        return unregister_block_pattern($patternName);
    }

    /**
     * @inheritDoc
     */
    public function getBlockWrapperAttributes(array $extraAttributes = []): string
    {
        return get_block_wrapper_attributes($extraAttributes);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthor(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_author($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthor(int|\WP_Comment $commentId = 0): void
    {
        comment_author($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorEmail(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_author_email($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorEmail(int|\WP_Comment $commentId = 0): void
    {
        comment_author_email($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorEmailLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = null): void
    {
        comment_author_email_link($linkText, $before, $after, $comment);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorEmailLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = null): string
    {
        return get_comment_author_email_link($linkText, $before, $after, $comment);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorLink(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_author_link($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorLink(int|\WP_Comment $commentId = 0): void
    {
        comment_author_link($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorIP(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_author_IP($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorIP(int|\WP_Comment $commentId = 0): void
    {
        comment_author_IP($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorUrl(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_author_url($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorUrl(int|\WP_Comment $commentId = 0): void
    {
        comment_author_url($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorUrlLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0): string
    {
        return get_comment_author_url_link($linkText, $before, $after, $comment);
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorUrlLink(string $linkText = '', string $before = '', string $after = '', int|\WP_Comment $comment = 0): void
    {
        comment_author_url_link($linkText, $before, $after, $comment);
    }

    /**
     * @inheritDoc
     */
    public function commentClass(string|array $cssClass = '', int|\WP_Comment $comment = null, int|\WP_Post $post = null, bool $display = true): mixed
    {
        return comment_class($cssClass, $comment, $post, $display);
    }

    /**
     * @inheritDoc
     */
    public function getCommentClass(string|array $cssClass = '', int|\WP_Comment $commentId = null, int|\WP_Post $post = null): array
    {
        return get_comment_class($cssClass, $commentId, $post);
    }

    /**
     * @inheritDoc
     */
    public function getCommentDate(string $format = '', int|\WP_Comment $commentId = 0): string
    {
        return get_comment_date($format, $commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentDate(string $format = '', int|\WP_Comment $commentId = 0): void
    {
        comment_date($format, $commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentExcerpt(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_excerpt($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentExcerpt(int|\WP_Comment $commentId = 0): void
    {
        comment_excerpt($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentID(): string
    {
        return get_comment_ID();
    }

    /**
     * @inheritDoc
     */
    public function commentID(): void
    {
        comment_ID();
    }

    /**
     * @inheritDoc
     */
    public function getCommentLink(\WP_Comment|int|null $comment = null, array $args = []): string
    {
        return get_comment_link($comment, $args);
    }

    /**
     * @inheritDoc
     */
    public function getCommentsLink(int|\WP_Post $post = 0): string
    {
        return get_comments_link($post);
    }

    /**
     * @inheritDoc
     */
    public function commentsLink(string $deprecated = '', string $deprecated2 = ''): void
    {
        comments_link($deprecated, $deprecated2);
    }

    /**
     * @inheritDoc
     */
    public function getCommentsNumber(int|\WP_Post $post = 0): string|int
    {
        return get_comments_number($post);
    }

    /**
     * @inheritDoc
     */
    public function commentsNumber(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post = 0): void
    {
        comments_number($zero, $one, $more, $post);
    }

    /**
     * @inheritDoc
     */
    public function getCommentsNumberText(string|false $zero = false, string|false $one = false, string|false $more = false, int|\WP_Post $post = 0): string
    {
        return get_comments_number_text($zero, $one, $more, $post);
    }

    /**
     * @inheritDoc
     */
    public function getCommentText(int|\WP_Comment $commentId = 0, array $args = []): string
    {
        return get_comment_text($commentId, $args);
    }

    /**
     * @inheritDoc
     */
    public function commentText(int|\WP_Comment $commentId = 0, array $args = []): void
    {
        comment_text($commentId, $args);
    }

    /**
     * @inheritDoc
     */
    public function getCommentTime(string $format = '', bool $gmt = false, bool $translate = true, int|\WP_Comment $commentId = 0): string
    {
        return get_comment_time($format, $gmt, $translate, $commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentTime(string $format = '', int|\WP_Comment $commentId = 0): void
    {
        comment_time($format, $commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentType(int|\WP_Comment $commentId = 0): string
    {
        return get_comment_type($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentType(string|false $commenttxt = false, string|false $trackbacktxt = false, string|false $pingbacktxt = false): void
    {
        comment_type($commenttxt, $trackbacktxt, $pingbacktxt);
    }

    /**
     * @inheritDoc
     */
    public function getTrackbackUrl(): string
    {
        return get_trackback_url();
    }

    /**
     * @inheritDoc
     */
    public function trackbackUrl(bool $deprecatedEcho = true): mixed
    {
        return trackback_url($deprecatedEcho);
    }

    /**
     * @inheritDoc
     */
    public function trackbackRdf(int|string $deprecated = ''): void
    {
        trackback_rdf($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function commentsOpen(int|\WP_Post $post = null): bool
    {
        return comments_open($post);
    }

    /**
     * @inheritDoc
     */
    public function pingsOpen(int|\WP_Post $post = null): bool
    {
        return pings_open($post);
    }

    /**
     * @inheritDoc
     */
    public function wpCommentFormUnfilteredHtmlNonce(): void
    {
        wp_comment_form_unfiltered_html_nonce();
    }

    /**
     * @inheritDoc
     */
    public function commentsTemplate(string $file = '/comments.php', bool $separateComments = false): void
    {
        comments_template($file, $separateComments);
    }

    /**
     * @inheritDoc
     */
    public function commentsPopupLink(false|string $zero = false, false|string $one = false, false|string $more = false, string $cssClass = '', false|string $none = false): void
    {
        comments_popup_link($zero, $one, $more, $cssClass, $none);
    }

    /**
     * @inheritDoc
     */
    public function getCommentReplyLink(array $args = [], int|\WP_Comment $comment = null, int|\WP_Post $post = null): string|false|null
    {
        return get_comment_reply_link($args, $comment, $post);
    }

    /**
     * @inheritDoc
     */
    public function commentReplyLink(array $args = [], int|\WP_Comment $comment = null, int|\WP_Post $post = null): void
    {
        comment_reply_link($args, $comment, $post);
    }

    /**
     * @inheritDoc
     */
    public function getPostReplyLink(array $args = [], int|\WP_Post $post = null): string|false|null
    {
        return get_post_reply_link($args, $post);
    }

    /**
     * @inheritDoc
     */
    public function postReplyLink(array $args = [], int|\WP_Post $post = null): void
    {
        post_reply_link($args, $post);
    }

    /**
     * @inheritDoc
     */
    public function getCancelCommentReplyLink(string $linkText = '', int|\WP_Post|null $post = null): string
    {
        return get_cancel_comment_reply_link($linkText, $post);
    }

    /**
     * @inheritDoc
     */
    public function cancelCommentReplyLink(string $linkText = ''): void
    {
        cancel_comment_reply_link($linkText);
    }

    /**
     * @inheritDoc
     */
    public function getCommentIdFields(int|\WP_Post|null $post = null): string
    {
        return get_comment_id_fields($post);
    }

    /**
     * @inheritDoc
     */
    public function commentIdFields(int|\WP_Post|null $post = null): void
    {
        comment_id_fields($post);
    }

    /**
     * @inheritDoc
     */
    public function commentFormTitle(string|false $noReplyText = false, string|false $replyText = false, bool $linkToParent = true, int|\WP_Post|null $post = null): void
    {
        comment_form_title($noReplyText, $replyText, $linkToParent, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpListComments(string|array $args = [], array $comments = null): mixed
    {
        return wp_list_comments($args, $comments);
    }

    /**
     * @inheritDoc
     */
    public function commentForm(array $args = [], int|\WP_Post $post = null): void
    {
        comment_form($args, $post);
    }

    /**
     * @inheritDoc
     */
    public function checkComment(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent, string $commentType): bool
    {
        return check_comment($author, $email, $url, $comment, $userIp, $userAgent, $commentType);
    }

    /**
     * @inheritDoc
     */
    public function getApprovedComments(int $postId, array $args = []): array|int
    {
        return get_approved_comments($postId, $args);
    }

    /**
     * @inheritDoc
     */
    public function getComment(\WP_Comment|string|int $comment = null, string $output = OBJECT): \WP_Comment|array|null
    {
        return get_comment($comment, $output);
    }

    /**
     * @inheritDoc
     */
    public function getComments(string|array $args = ''): array|int
    {
        return get_comments($args);
    }

    /**
     * @inheritDoc
     */
    public function getCommentStatuses(): array
    {
        return get_comment_statuses();
    }

    /**
     * @inheritDoc
     */
    public function getDefaultCommentStatus(string $postType = 'post', string $commentType = 'comment'): string
    {
        return get_default_comment_status($postType, $commentType);
    }

    /**
     * @inheritDoc
     */
    public function getLastcommentmodified(string $timezone = 'server'): string|false
    {
        return get_lastcommentmodified($timezone);
    }

    /**
     * @inheritDoc
     */
    public function getCommentCount(int $postId = 0): array
    {
        return get_comment_count($postId);
    }

    /**
     * @inheritDoc
     */
    public function addCommentMeta(int $commentId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        return add_comment_meta($commentId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function deleteCommentMeta(int $commentId, string $metaKey, mixed $metaValue = ''): bool
    {
        return delete_comment_meta($commentId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getCommentMeta(int $commentId, string $key = '', bool $single = false): mixed
    {
        return get_comment_meta($commentId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadCommentMeta(array $commentIds): void
    {
        wp_lazyload_comment_meta($commentIds);
    }

    /**
     * @inheritDoc
     */
    public function updateCommentMeta(int $commentId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        return update_comment_meta($commentId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function wpSetCommentCookies(\WP_Comment $comment, \WP_User $user, bool $cookiesConsent = true): void
    {
        wp_set_comment_cookies($comment, $user, $cookiesConsent);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeCommentCookies(): void
    {
        sanitize_comment_cookies();
    }

    /**
     * @inheritDoc
     */
    public function wpAllowComment(array $commentdata, bool $wpError = false): int|string|\WP_Error
    {
        return wp_allow_comment($commentdata, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function checkCommentFloodDb(): void
    {
        check_comment_flood_db();
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentFlood(bool $isFlood, string $ip, string $email, string $date, bool $avoidDie = false): bool
    {
        return wp_check_comment_flood($isFlood, $ip, $email, $date, $avoidDie);
    }

    /**
     * @inheritDoc
     */
    public function separateComments(array &$comments): array
    {
        return separate_comments($comments);
    }

    /**
     * @inheritDoc
     */
    public function getCommentPagesCount(array $comments = null, int $perPage = null, bool $threaded = null): int
    {
        return get_comment_pages_count($comments, $perPage, $threaded);
    }

    /**
     * @inheritDoc
     */
    public function getPageOfComment(int $commentId, array $args = []): int|null
    {
        return get_page_of_comment($commentId, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCommentFieldsMaxLengths(): array
    {
        return wp_get_comment_fields_max_lengths();
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentDataMaxLengths(array $commentData): \WP_Error|true
    {
        return wp_check_comment_data_max_lengths($commentData);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckCommentDisallowedList(string $author, string $email, string $url, string $comment, string $userIp, string $userAgent): bool
    {
        return wp_check_comment_disallowed_list($author, $email, $url, $comment, $userIp, $userAgent);
    }

    /**
     * @inheritDoc
     */
    public function wpCountComments(int $postId = 0): \stdClass
    {
        return wp_count_comments($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteComment(int|\WP_Comment $commentId, bool $forceDelete = false): bool
    {
        return wp_delete_comment($commentId, $forceDelete);
    }

    /**
     * @inheritDoc
     */
    public function wpTrashComment(int|\WP_Comment $commentId): bool
    {
        return wp_trash_comment($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashComment(int|\WP_Comment $commentId): bool
    {
        return wp_untrash_comment($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpSpamComment(int|\WP_Comment $commentId): bool
    {
        return wp_spam_comment($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpUnspamComment(int|\WP_Comment $commentId): bool
    {
        return wp_unspam_comment($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCommentStatus(int|\WP_Comment $commentId): string|false
    {
        return wp_get_comment_status($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpTransitionCommentStatus(string $newStatus, string $oldStatus, \WP_Comment $comment): void
    {
        wp_transition_comment_status($newStatus, $oldStatus, $comment);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCurrentCommenter(): array
    {
        return wp_get_current_commenter();
    }

    /**
     * @inheritDoc
     */
    public function wpGetUnapprovedCommentAuthorEmail(): string
    {
        return wp_get_unapproved_comment_author_email();
    }

    /**
     * @inheritDoc
     */
    public function wpInsertComment(array $commentdata): int|false
    {
        return wp_insert_comment($commentdata);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterComment(array $commentdata): array
    {
        return wp_filter_comment($commentdata);
    }

    /**
     * @inheritDoc
     */
    public function wpThrottleCommentFlood(bool $block, int $timeLastcomment, int $timeNewcomment): bool
    {
        return wp_throttle_comment_flood($block, $timeLastcomment, $timeNewcomment);
    }

    /**
     * @inheritDoc
     */
    public function wpNewComment(array $commentdata, bool $wpError = false): int|false|\WP_Error
    {
        return wp_new_comment($commentdata, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpNewCommentNotifyModerator(int $commentId): bool
    {
        return wp_new_comment_notify_moderator($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpNewCommentNotifyPostauthor(int $commentId): bool
    {
        return wp_new_comment_notify_postauthor($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpSetCommentStatus(int|\WP_Comment $commentId, string $commentStatus, bool $wpError = false): bool|\WP_Error
    {
        return wp_set_comment_status($commentId, $commentStatus, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateComment(array $commentarr, bool $wpError = false): int|false|\WP_Error
    {
        return wp_update_comment($commentarr, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpDeferCommentCounting(bool $defer = null): bool
    {
        return wp_defer_comment_counting($defer);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCommentCount(int|null $postId, bool $doDeferred = false): mixed
    {
        return wp_update_comment_count($postId, $doDeferred);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCommentCountNow(int $postId): bool
    {
        return wp_update_comment_count_now($postId);
    }

    /**
     * @inheritDoc
     */
    public function discoverPingbackServerUri(string $url, string $deprecated = ''): string|false
    {
        return discover_pingback_server_uri($url, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function doAllPings(): void
    {
        do_all_pings();
    }

    /**
     * @inheritDoc
     */
    public function doAllPingbacks(): void
    {
        do_all_pingbacks();
    }

    /**
     * @inheritDoc
     */
    public function doAllEnclosures(): void
    {
        do_all_enclosures();
    }

    /**
     * @inheritDoc
     */
    public function doAllTrackbacks(): void
    {
        do_all_trackbacks();
    }

    /**
     * @inheritDoc
     */
    public function doTrackbacks(int|\WP_Post $post): mixed
    {
        return do_trackbacks($post);
    }

    /**
     * @inheritDoc
     */
    public function genericPing(int $postId = 0): int
    {
        return generic_ping($postId);
    }

    /**
     * @inheritDoc
     */
    public function pingback(string $content, int|\WP_Post $post): void
    {
        pingback($content, $post);
    }

    /**
     * @inheritDoc
     */
    public function privacyPingFilter(mixed $sites): mixed
    {
        return privacy_ping_filter($sites);
    }

    /**
     * @inheritDoc
     */
    public function trackback(string $trackbackUrl, string $title, string $excerpt, int $postId): mixed
    {
        return trackback($trackbackUrl, $title, $excerpt, $postId);
    }

    /**
     * @inheritDoc
     */
    public function weblogPing(string $server = '', string $path = ''): void
    {
        weblog_ping($server, $path);
    }

    /**
     * @inheritDoc
     */
    public function pingbackPingSourceUri(string $sourceUri): string
    {
        return pingback_ping_source_uri($sourceUri);
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcPingbackError(\IXR_Error $ixrError): \IXR_Error
    {
        return xmlrpc_pingback_error($ixrError);
    }

    /**
     * @inheritDoc
     */
    public function cleanCommentCache(int|array $ids): void
    {
        clean_comment_cache($ids);
    }

    /**
     * @inheritDoc
     */
    public function updateCommentCache(array $comments, bool $updateMetaCache = true): void
    {
        update_comment_cache($comments, $updateMetaCache);
    }

    /**
     * @inheritDoc
     */
    public function wpHandleCommentSubmission(array $commentData): \WP_Comment|\WP_Error
    {
        return wp_handle_comment_submission($commentData);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterCommentPersonalDataExporter(array $exporters): array
    {
        return wp_register_comment_personal_data_exporter($exporters);
    }

    /**
     * @inheritDoc
     */
    public function wpCommentsPersonalDataExporter(string $emailAddress, int $page = 1): array
    {
        return wp_comments_personal_data_exporter($emailAddress, $page);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterCommentPersonalDataEraser(array $erasers): array
    {
        return wp_register_comment_personal_data_eraser($erasers);
    }

    /**
     * @inheritDoc
     */
    public function wpCommentsPersonalDataEraser(string $emailAddress, int $page = 1): array
    {
        return wp_comments_personal_data_eraser($emailAddress, $page);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetCommentsLastChanged(): void
    {
        wp_cache_set_comments_last_changed();
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleSingleEvent(int $timestamp, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        return wp_schedule_single_event($timestamp, $hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleEvent(int $timestamp, string $recurrence, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        return wp_schedule_event($timestamp, $recurrence, $hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpRescheduleEvent(int $timestamp, string $recurrence, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        return wp_reschedule_event($timestamp, $recurrence, $hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpUnscheduleEvent(int $timestamp, string $hook, array $args = [], bool $wpError = false): bool|\WP_Error
    {
        return wp_unschedule_event($timestamp, $hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpClearScheduledHook(string $hook, array $args = [], bool $wpError = false): int|false|\WP_Error
    {
        return wp_clear_scheduled_hook($hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpUnscheduleHook(string $hook, bool $wpError = false): int|false|\WP_Error
    {
        return wp_unschedule_hook($hook, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function wpGetScheduledEvent(string $hook, array $args = [], int|null $timestamp = null): object|false
    {
        return wp_get_scheduled_event($hook, $args, $timestamp);
    }

    /**
     * @inheritDoc
     */
    public function wpNextScheduled(string $hook, array $args = []): int|false
    {
        return wp_next_scheduled($hook, $args);
    }

    /**
     * @inheritDoc
     */
    public function spawnCron(int $gmtTime = 0): bool
    {
        return spawn_cron($gmtTime);
    }

    /**
     * @inheritDoc
     */
    public function wpCron(): mixed
    {
        return wp_cron();
    }

    /**
     * @inheritDoc
     */
    public function wpGetSchedules(): array
    {
        return wp_get_schedules();
    }

    /**
     * @inheritDoc
     */
    public function wpGetSchedule(string $hook, array $args = []): string|false
    {
        return wp_get_schedule($hook, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetReadyCronJobs(): array
    {
        return wp_get_ready_cron_jobs();
    }

    /**
     * @inheritDoc
     */
    public function wpInitialConstants(): void
    {
        wp_initial_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpPluginDirectoryConstants(): void
    {
        wp_plugin_directory_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpCookieConstants(): void
    {
        wp_cookie_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpSslConstants(): void
    {
        wp_ssl_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpFunctionalityConstants(): void
    {
        wp_functionality_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpTemplatingConstants(): void
    {
        wp_templating_constants();
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedRegisterHandler(string $id, string $regex, callable $callback, int $priority = 10): void
    {
        wp_embed_register_handler($id, $regex, $callback, $priority);
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedUnregisterHandler(string $id, int $priority = 10): void
    {
        wp_embed_unregister_handler($id, $priority);
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedDefaults(string $url = ''): array
    {
        return wp_embed_defaults($url);
    }

    /**
     * @inheritDoc
     */
    public function wpOembedGet(string $url, array|string $args = ''): string|false
    {
        return wp_oembed_get($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpOembedAddProvider(string $format, string $provider, bool $regex = false): void
    {
        wp_oembed_add_provider($format, $provider, $regex);
    }

    /**
     * @inheritDoc
     */
    public function wpOembedRemoveProvider(string $format): bool
    {
        return wp_oembed_remove_provider($format);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeLoadEmbeds(): void
    {
        wp_maybe_load_embeds();
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerYoutube(array $matches, array $attr, string $url, array $rawattr): string
    {
        return wp_embed_handler_youtube($matches, $attr, $url, $rawattr);
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerAudio(array $matches, array $attr, string $url, array $rawattr): string
    {
        return wp_embed_handler_audio($matches, $attr, $url, $rawattr);
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedHandlerVideo(array $matches, array $attr, string $url, array $rawattr): string
    {
        return wp_embed_handler_video($matches, $attr, $url, $rawattr);
    }

    /**
     * @inheritDoc
     */
    public function wpOembedRegisterRoute(): void
    {
        wp_oembed_register_route();
    }

    /**
     * @inheritDoc
     */
    public function wpOembedAddDiscoveryLinks(): void
    {
        wp_oembed_add_discovery_links();
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeEnqueueOembedHostJs(string $html): string
    {
        return wp_maybe_enqueue_oembed_host_js($html);
    }

    /**
     * @inheritDoc
     */
    public function getPostEmbedUrl(int|\WP_Post $post = null): string|false
    {
        return get_post_embed_url($post);
    }

    /**
     * @inheritDoc
     */
    public function getOembedEndpointUrl(string $permalink = '', string $format = 'json'): string
    {
        return get_oembed_endpoint_url($permalink, $format);
    }

    /**
     * @inheritDoc
     */
    public function getPostEmbedHtml(int $width, int $height, int|\WP_Post $post = null): string|false
    {
        return get_post_embed_html($width, $height, $post);
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseData(\WP_Post|int $post, int $width): array|false
    {
        return get_oembed_response_data($post, $width);
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseDataForUrl(string $url, array $args): object|false
    {
        return get_oembed_response_data_for_url($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function getOembedResponseDataRich(array $data, \WP_Post $post, int $width, int $height): array
    {
        return get_oembed_response_data_rich($data, $post, $width, $height);
    }

    /**
     * @inheritDoc
     */
    public function wpOembedEnsureFormat(string $format): string
    {
        return wp_oembed_ensure_format($format);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOembedIframeTitleAttribute(string $result, object $data, string $url): string
    {
        return wp_filter_oembed_iframe_title_attribute($result, $data, $url);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOembedResult(string $result, object $data, string $url): string
    {
        return wp_filter_oembed_result($result, $data, $url);
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedExcerptMore(string $moreString): string
    {
        return wp_embed_excerpt_more($moreString);
    }

    /**
     * @inheritDoc
     */
    public function theExcerptEmbed(): void
    {
        the_excerpt_embed();
    }

    /**
     * @inheritDoc
     */
    public function wpEmbedExcerptAttachment(string $content): string
    {
        return wp_embed_excerpt_attachment($content);
    }

    /**
     * @inheritDoc
     */
    public function enqueueEmbedScripts(): void
    {
        enqueue_embed_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEmbedStyles(): void
    {
        wp_enqueue_embed_styles();
    }

    /**
     * @inheritDoc
     */
    public function printEmbedScripts(): void
    {
        print_embed_scripts();
    }

    /**
     * @inheritDoc
     */
    public function printEmbedCommentsButton(): void
    {
        print_embed_comments_button();
    }

    /**
     * @inheritDoc
     */
    public function printEmbedSharingButton(): void
    {
        print_embed_sharing_button();
    }

    /**
     * @inheritDoc
     */
    public function printEmbedSharingDialog(): void
    {
        print_embed_sharing_dialog();
    }

    /**
     * @inheritDoc
     */
    public function theEmbedSiteTitle(): void
    {
        the_embed_site_title();
    }

    /**
     * @inheritDoc
     */
    public function wpFilterPreOembedResult(null|string $result, string $url, array $args): null|string
    {
        return wp_filter_pre_oembed_result($result, $url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpPausedPlugins(): \WP_Paused_Extensions_Storage
    {
        return wp_paused_plugins();
    }

    /**
     * @inheritDoc
     */
    public function wpPausedThemes(): \WP_Paused_Extensions_Storage
    {
        return wp_paused_themes();
    }

    /**
     * @inheritDoc
     */
    public function wpGetExtensionErrorDescription(array $error): string
    {
        return wp_get_extension_error_description($error);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterFatalErrorHandler(): void
    {
        wp_register_fatal_error_handler();
    }

    /**
     * @inheritDoc
     */
    public function wpIsFatalErrorHandlerEnabled(): bool
    {
        return wp_is_fatal_error_handler_enabled();
    }

    /**
     * @inheritDoc
     */
    public function wpRecoveryMode(): \WP_Recovery_Mode
    {
        return wp_recovery_mode();
    }

    /**
     * @inheritDoc
     */
    public function getBloginfoRss(string $show = ''): string
    {
        return get_bloginfo_rss($show);
    }

    /**
     * @inheritDoc
     */
    public function bloginfoRss(string $show = ''): void
    {
        bloginfo_rss($show);
    }

    /**
     * @inheritDoc
     */
    public function getDefaultFeed(): string
    {
        return get_default_feed();
    }

    /**
     * @inheritDoc
     */
    public function getWpTitleRss(string $deprecated = '&#8211;'): string
    {
        return get_wp_title_rss($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function wpTitleRss(string $deprecated = '&#8211;'): void
    {
        wp_title_rss($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getTheTitleRss(int|\WP_Post $post = 0): string
    {
        return get_the_title_rss($post);
    }

    /**
     * @inheritDoc
     */
    public function theTitleRss(): void
    {
        the_title_rss();
    }

    /**
     * @inheritDoc
     */
    public function getTheContentFeed(string $feedType = null): string
    {
        return get_the_content_feed($feedType);
    }

    /**
     * @inheritDoc
     */
    public function theContentFeed(string $feedType = null): void
    {
        the_content_feed($feedType);
    }

    /**
     * @inheritDoc
     */
    public function theExcerptRss(): void
    {
        the_excerpt_rss();
    }

    /**
     * @inheritDoc
     */
    public function thePermalinkRss(): void
    {
        the_permalink_rss();
    }

    /**
     * @inheritDoc
     */
    public function commentsLinkFeed(): void
    {
        comments_link_feed();
    }

    /**
     * @inheritDoc
     */
    public function commentGuid(int|\WP_Comment $commentId = null): void
    {
        comment_guid($commentId);
    }

    /**
     * @inheritDoc
     */
    public function getCommentGuid(int|\WP_Comment $commentId = null): string|false
    {
        return get_comment_guid($commentId);
    }

    /**
     * @inheritDoc
     */
    public function commentLink(int|\WP_Comment $comment = null): void
    {
        comment_link($comment);
    }

    /**
     * @inheritDoc
     */
    public function getCommentAuthorRss(): string
    {
        return get_comment_author_rss();
    }

    /**
     * @inheritDoc
     */
    public function commentAuthorRss(): void
    {
        comment_author_rss();
    }

    /**
     * @inheritDoc
     */
    public function commentTextRss(): void
    {
        comment_text_rss();
    }

    /**
     * @inheritDoc
     */
    public function getTheCategoryRss(string $type = null): string
    {
        return get_the_category_rss($type);
    }

    /**
     * @inheritDoc
     */
    public function theCategoryRss(string $type = null): void
    {
        the_category_rss($type);
    }

    /**
     * @inheritDoc
     */
    public function htmlTypeRss(): void
    {
        html_type_rss();
    }

    /**
     * @inheritDoc
     */
    public function rssEnclosure(): void
    {
        rss_enclosure();
    }

    /**
     * @inheritDoc
     */
    public function atomEnclosure(): void
    {
        atom_enclosure();
    }

    /**
     * @inheritDoc
     */
    public function prepAtomTextConstruct(string $data): array
    {
        return prep_atom_text_construct($data);
    }

    /**
     * @inheritDoc
     */
    public function atomSiteIcon(): void
    {
        atom_site_icon();
    }

    /**
     * @inheritDoc
     */
    public function rss2SiteIcon(): void
    {
        rss2_site_icon();
    }

    /**
     * @inheritDoc
     */
    public function getSelfLink(): string
    {
        return get_self_link();
    }

    /**
     * @inheritDoc
     */
    public function selfLink(): void
    {
        self_link();
    }

    /**
     * @inheritDoc
     */
    public function getFeedBuildDate(string $format): string|false
    {
        return get_feed_build_date($format);
    }

    /**
     * @inheritDoc
     */
    public function feedContentType(string $type = ''): string
    {
        return feed_content_type($type);
    }

    /**
     * @inheritDoc
     */
    public function fetchFeed(string|array $url): \SimplePie|\WP_Error
    {
        return fetch_feed($url);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFontFaces(array $fonts = []): void
    {
        wp_print_font_faces($fonts);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterFontCollection(string $slug, array $args): \WP_Font_Collection|\WP_Error
    {
        return wp_register_font_collection($slug, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterFontCollection(string $slug): bool
    {
        return wp_unregister_font_collection($slug);
    }

    /**
     * @inheritDoc
     */
    public function wpGetFontDir(): array
    {
        return wp_get_font_dir();
    }

    /**
     * @inheritDoc
     */
    public function wpFontDir(bool $createDir = true): array
    {
        return wp_font_dir($createDir);
    }

    /**
     * @inheritDoc
     */
    public function wptexturize(string $text, bool $reset = false): string
    {
        return wptexturize($text, $reset);
    }

    /**
     * @inheritDoc
     */
    public function wptexturizePrimes(string $haystack, string $needle, string $prime, string $openQuote, string $closeQuote): string
    {
        return wptexturize_primes($haystack, $needle, $prime, $openQuote, $closeQuote);
    }

    /**
     * @inheritDoc
     */
    public function wpautop(string $text, bool $br = true): string
    {
        return wpautop($text, $br);
    }

    /**
     * @inheritDoc
     */
    public function wpHtmlSplit(string $input): array
    {
        return wp_html_split($input);
    }

    /**
     * @inheritDoc
     */
    public function getHtmlSplitRegex(): string
    {
        return get_html_split_regex();
    }

    /**
     * @inheritDoc
     */
    public function wpReplaceInHtmlTags(string $haystack, array $replacePairs): string
    {
        return wp_replace_in_html_tags($haystack, $replacePairs);
    }

    /**
     * @inheritDoc
     */
    public function shortcodeUnautop(string $text): string
    {
        return shortcode_unautop($text);
    }

    /**
     * @inheritDoc
     */
    public function seemsUtf8(string $str): bool
    {
        return seems_utf8($str);
    }

    /**
     * @inheritDoc
     */
    public function wpSpecialcharsDecode(string $text, string|int $quoteStyle = ENT_NOQUOTES): string
    {
        return wp_specialchars_decode($text, $quoteStyle);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckInvalidUtf8(string $text, bool $strip = false): string
    {
        return wp_check_invalid_utf8($text, $strip);
    }

    /**
     * @inheritDoc
     */
    public function utf8UriEncode(string $utf8String, int $length = 0, bool $encodeAsciiCharacters = false): string
    {
        return utf8_uri_encode($utf8String, $length, $encodeAsciiCharacters);
    }

    /**
     * @inheritDoc
     */
    public function removeAccents(string $text, string $locale = ''): string
    {
        return remove_accents($text, $locale);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeFileName(string $filename): string
    {
        return sanitize_file_name($filename);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUser(string $username, bool $strict = false): string
    {
        return sanitize_user($username, $strict);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeKey(string $key): string
    {
        return sanitize_key($key);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitle(string $title, string $fallbackTitle = '', string $context = 'save'): string
    {
        return sanitize_title($title, $fallbackTitle, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitleForQuery(string $title): string
    {
        return sanitize_title_for_query($title);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitleWithDashes(string $title, string $rawTitle = '', string $context = 'display'): string
    {
        return sanitize_title_with_dashes($title, $rawTitle, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeSqlOrderby(string $orderby): string|false
    {
        return sanitize_sql_orderby($orderby);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHtmlClass(string $classname, string $fallback = ''): string
    {
        return sanitize_html_class($classname, $fallback);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeLocaleName(string $localeName): string
    {
        return sanitize_locale_name($localeName);
    }

    /**
     * @inheritDoc
     */
    public function convertChars(string $content, string $deprecated = ''): string
    {
        return convert_chars($content, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function convertInvalidEntities(string $content): string
    {
        return convert_invalid_entities($content);
    }

    /**
     * @inheritDoc
     */
    public function balanceTags(string $text, bool $force = false): string
    {
        return balanceTags($text, $force);
    }

    /**
     * @inheritDoc
     */
    public function forceBalanceTags(string $text): string
    {
        return force_balance_tags($text);
    }

    /**
     * @inheritDoc
     */
    public function formatToEdit(string $content, bool $richText = false): string
    {
        return format_to_edit($content, $richText);
    }

    /**
     * @inheritDoc
     */
    public function zeroise(int $number, int $threshold): string
    {
        return zeroise($number, $threshold);
    }

    /**
     * @inheritDoc
     */
    public function backslashit(string $value): string
    {
        return backslashit($value);
    }

    /**
     * @inheritDoc
     */
    public function trailingslashit(string $value): string
    {
        return trailingslashit($value);
    }

    /**
     * @inheritDoc
     */
    public function untrailingslashit($value): string
    {
        return untrailingslashit($value);
    }

    /**
     * @inheritDoc
     */
    public function addslashesGpc(string|array $gpc): string|array
    {
        return addslashes_gpc($gpc);
    }

    /**
     * @inheritDoc
     */
    public function stripslashesDeep(mixed $value): mixed
    {
        return stripslashes_deep($value);
    }

    /**
     * @inheritDoc
     */
    public function stripslashesFromStringsOnly(mixed $value): mixed
    {
        return stripslashes_from_strings_only($value);
    }

    /**
     * @inheritDoc
     */
    public function urlencodeDeep(mixed $value): mixed
    {
        return urlencode_deep($value);
    }

    /**
     * @inheritDoc
     */
    public function rawurlencodeDeep(mixed $value): mixed
    {
        return rawurlencode_deep($value);
    }

    /**
     * @inheritDoc
     */
    public function urldecodeDeep(mixed $value): mixed
    {
        return urldecode_deep($value);
    }

    /**
     * @inheritDoc
     */
    public function antispambot(string $emailAddress, int $hexEncoding = 0): string
    {
        return antispambot($emailAddress, $hexEncoding);
    }

    /**
     * @inheritDoc
     */
    public function makeClickable(string $text): string
    {
        return make_clickable($text);
    }

    /**
     * @inheritDoc
     */
    public function wpRelCallback(array $matches, string $rel): string
    {
        return wp_rel_callback($matches, $rel);
    }

    /**
     * @inheritDoc
     */
    public function wpRelNofollow(string $text): string
    {
        return wp_rel_nofollow($text);
    }

    /**
     * @inheritDoc
     */
    public function wpRelUgc(string $text): string
    {
        return wp_rel_ugc($text);
    }

    /**
     * @inheritDoc
     */
    public function wpTargetedLinkRel(string $text): string
    {
        return wp_targeted_link_rel($text);
    }

    /**
     * @inheritDoc
     */
    public function wpTargetedLinkRelCallback(array $matches): string
    {
        return wp_targeted_link_rel_callback($matches);
    }

    /**
     * @inheritDoc
     */
    public function wpInitTargetedLinkRelFilters(): void
    {
        wp_init_targeted_link_rel_filters();
    }

    /**
     * @inheritDoc
     */
    public function wpRemoveTargetedLinkRelFilters(): void
    {
        wp_remove_targeted_link_rel_filters();
    }

    /**
     * @inheritDoc
     */
    public function translateSmiley(array $matches): string
    {
        return translate_smiley($matches);
    }

    /**
     * @inheritDoc
     */
    public function convertSmilies(string $text): string
    {
        return convert_smilies($text);
    }

    /**
     * @inheritDoc
     */
    public function isEmail(string $email, bool $deprecated = false): string|false
    {
        return is_email($email, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function wpIsoDescrambler(string $subject): string
    {
        return wp_iso_descrambler($subject);
    }

    /**
     * @inheritDoc
     */
    public function getGmtFromDate(string $dateString, string $format = 'Y-m-d H:i:s'): string
    {
        return get_gmt_from_date($dateString, $format);
    }

    /**
     * @inheritDoc
     */
    public function getDateFromGmt(string $dateString, string $format = 'Y-m-d H:i:s'): string
    {
        return get_date_from_gmt($dateString, $format);
    }

    /**
     * @inheritDoc
     */
    public function iso8601TimezoneToOffset(string $timezone): int|float
    {
        return iso8601_timezone_to_offset($timezone);
    }

    /**
     * @inheritDoc
     */
    public function iso8601ToDatetime(string $dateString, string $timezone = 'user'): string|false
    {
        return iso8601_to_datetime($dateString, $timezone);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeEmail(string $email): string
    {
        return sanitize_email($email);
    }

    /**
     * @inheritDoc
     */
    public function humanTimeDiff(int $from, int $to = 0): string
    {
        return human_time_diff($from, $to);
    }

    /**
     * @inheritDoc
     */
    public function wpTrimExcerpt(string $text = '', int|object $post = null): string
    {
        return wp_trim_excerpt($text, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpTrimWords(string $text, int $numWords = 55, string $more = null): string
    {
        return wp_trim_words($text, $numWords, $more);
    }

    /**
     * @inheritDoc
     */
    public function ent2ncr(string $text): string
    {
        return ent2ncr($text);
    }

    /**
     * @inheritDoc
     */
    public function formatForEditor(string $text, string $defaultEditor = null): string
    {
        return format_for_editor($text, $defaultEditor);
    }

    /**
     * @inheritDoc
     */
    public function escSql(string|array $data): string|array
    {
        return esc_sql($data);
    }

    /**
     * @inheritDoc
     */
    public function escUrl(string $url, array $protocols = null, string $context = 'display'): string
    {
        return esc_url($url, $protocols, $context);
    }

    /**
     * @inheritDoc
     */
    public function escUrlRaw(string $url, array $protocols = null): string
    {
        return esc_url_raw($url, $protocols);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUrl(string $url, array $protocols = null): string
    {
        return sanitize_url($url, $protocols);
    }

    /**
     * @inheritDoc
     */
    public function htmlentities2(string $text): string
    {
        return htmlentities2($text);
    }

    /**
     * @inheritDoc
     */
    public function escJs(string $text): string
    {
        return esc_js($text);
    }

    /**
     * @inheritDoc
     */
    public function escHtml(string $text): string
    {
        return esc_html($text);
    }

    /**
     * @inheritDoc
     */
    public function escAttr(string $text): string
    {
        return esc_attr($text);
    }

    /**
     * @inheritDoc
     */
    public function escTextarea(string $text): string
    {
        return esc_textarea($text);
    }

    /**
     * @inheritDoc
     */
    public function escXml(string $text): string
    {
        return esc_xml($text);
    }

    /**
     * @inheritDoc
     */
    public function tagEscape(string $tagName): string
    {
        return tag_escape($tagName);
    }

    /**
     * @inheritDoc
     */
    public function wpMakeLinkRelative(string $link): string
    {
        return wp_make_link_relative($link);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeOption(string $option, mixed $value): mixed
    {
        return sanitize_option($option, $value);
    }

    /**
     * @inheritDoc
     */
    public function mapDeep(mixed $value, callable $callback): mixed
    {
        return map_deep($value, $callback);
    }

    /**
     * @inheritDoc
     */
    public function wpParseStr(string $inputString, array &$result): void
    {
        wp_parse_str($inputString, $result);
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesLessThan(string $content): string
    {
        return wp_pre_kses_less_than($content);
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesLessThanCallback(array $matches): string
    {
        return wp_pre_kses_less_than_callback($matches);
    }

    /**
     * @inheritDoc
     */
    public function wpPreKsesBlockAttributes(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        return wp_pre_kses_block_attributes($content, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpSprintf(string $pattern, mixed ...$args): string
    {
        return wp_sprintf($pattern, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function wpSprintfL(string $pattern, array $args): string
    {
        return wp_sprintf_l($pattern, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpHtmlExcerpt(string $str, int $count, string $more = null): string
    {
        return wp_html_excerpt($str, $count, $more);
    }

    /**
     * @inheritDoc
     */
    public function linksAddBaseUrl(string $content, string $base, array $attrs = []): string
    {
        return links_add_base_url($content, $base, $attrs);
    }

    /**
     * @inheritDoc
     */
    public function linksAddTarget(string $content, string $target = '_blank', array $tags = []): string
    {
        return links_add_target($content, $target, $tags);
    }

    /**
     * @inheritDoc
     */
    public function normalizeWhitespace(string $str): string
    {
        return normalize_whitespace($str);
    }

    /**
     * @inheritDoc
     */
    public function wpStripAllTags(string $text, bool $removeBreaks = false): string
    {
        return wp_strip_all_tags($text, $removeBreaks);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTextField(string $str): string
    {
        return sanitize_text_field($str);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTextareaField(string $str): string
    {
        return sanitize_textarea_field($str);
    }

    /**
     * @inheritDoc
     */
    public function wpBasename(string $path, string $suffix = ''): string
    {
        return wp_basename($path, $suffix);
    }

    /**
     * @inheritDoc
     */
    public function capitalPDangit(string $text): string
    {
        return capital_P_dangit($text);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeMimeType(string $mimeType): string
    {
        return sanitize_mime_type($mimeType);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTrackbackUrls(string $toPing): string
    {
        return sanitize_trackback_urls($toPing);
    }

    /**
     * @inheritDoc
     */
    public function wpSlash(string|array $value): string|array
    {
        return wp_slash($value);
    }

    /**
     * @inheritDoc
     */
    public function wpUnslash(string|array $value): string|array
    {
        return wp_unslash($value);
    }

    /**
     * @inheritDoc
     */
    public function getUrlInContent(string $content): string|false
    {
        return get_url_in_content($content);
    }

    /**
     * @inheritDoc
     */
    public function wpSpacesRegexp(): string
    {
        return wp_spaces_regexp();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEmojiStyles(): void
    {
        wp_enqueue_emoji_styles();
    }

    /**
     * @inheritDoc
     */
    public function printEmojiDetectionScript(): void
    {
        print_emoji_detection_script();
    }

    /**
     * @inheritDoc
     */
    public function wpEncodeEmoji(string $content): string
    {
        return wp_encode_emoji($content);
    }

    /**
     * @inheritDoc
     */
    public function wpStaticizeEmoji(string $text): string
    {
        return wp_staticize_emoji($text);
    }

    /**
     * @inheritDoc
     */
    public function wpStaticizeEmojiForEmail(array $mail): array
    {
        return wp_staticize_emoji_for_email($mail);
    }

    /**
     * @inheritDoc
     */
    public function urlShorten(string $url, int $length = 35): string
    {
        return url_shorten($url, $length);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHexColor(string $color): mixed
    {
        return sanitize_hex_color($color);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeHexColorNoHash(string $color): string|null
    {
        return sanitize_hex_color_no_hash($color);
    }

    /**
     * @inheritDoc
     */
    public function maybeHashHexColor(string $color): string
    {
        return maybe_hash_hex_color($color);
    }

    /**
     * @inheritDoc
     */
    public function mysql2date(string $format, string $date, bool $translate = true): string|int|false
    {
        return mysql2date($format, $date, $translate);
    }

    /**
     * @inheritDoc
     */
    public function currentTime(string $type, int|bool $gmt = 0): int|string
    {
        return current_time($type, $gmt);
    }

    /**
     * @inheritDoc
     */
    public function currentDatetime(): \DateTimeImmutable
    {
        return current_datetime();
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneString(): string
    {
        return wp_timezone_string();
    }

    /**
     * @inheritDoc
     */
    public function wpTimezone(): \DateTimeZone
    {
        return wp_timezone();
    }

    /**
     * @inheritDoc
     */
    public function dateI18n(string $format, int|bool $timestampWithOffset = false, bool $gmt = false): string
    {
        return date_i18n($format, $timestampWithOffset, $gmt);
    }

    /**
     * @inheritDoc
     */
    public function wpDate(string $format, int $timestamp = null, \DateTimeZone $timezone = null): string|false
    {
        return wp_date($format, $timestamp, $timezone);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeDeclineDate(string $date, string $format = ''): string
    {
        return wp_maybe_decline_date($date, $format);
    }

    /**
     * @inheritDoc
     */
    public function numberFormatI18n(float $number, int $decimals = 0): string
    {
        return number_format_i18n($number, $decimals);
    }

    /**
     * @inheritDoc
     */
    public function sizeFormat(int|string $bytes, int $decimals = 0): string|false
    {
        return size_format($bytes, $decimals);
    }

    /**
     * @inheritDoc
     */
    public function humanReadableDuration(string $duration = ''): string|false
    {
        return human_readable_duration($duration);
    }

    /**
     * @inheritDoc
     */
    public function getWeekstartend(string $mysqlstring, int|string $startOfWeek = ''): array
    {
        return get_weekstartend($mysqlstring, $startOfWeek);
    }

    /**
     * @inheritDoc
     */
    public function maybeSerialize(string|array|object $data): mixed
    {
        return maybe_serialize($data);
    }

    /**
     * @inheritDoc
     */
    public function maybeUnserialize(string $data): mixed
    {
        return maybe_unserialize($data);
    }

    /**
     * @inheritDoc
     */
    public function isSerialized(string $data, bool $strict = true): bool
    {
        return is_serialized($data, $strict);
    }

    /**
     * @inheritDoc
     */
    public function isSerializedString(string $data): bool
    {
        return is_serialized_string($data);
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcGetposttitle(string $content): string
    {
        return xmlrpc_getposttitle($content);
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcGetpostcategory(string $content): string|array
    {
        return xmlrpc_getpostcategory($content);
    }

    /**
     * @inheritDoc
     */
    public function xmlrpcRemovepostdata(string $content): string
    {
        return xmlrpc_removepostdata($content);
    }

    /**
     * @inheritDoc
     */
    public function wpExtractUrls(string $content): array
    {
        return wp_extract_urls($content);
    }

    /**
     * @inheritDoc
     */
    public function doEnclose(string|null $content, int|\WP_Post $post): mixed
    {
        return do_enclose($content, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpGetHttpHeaders(string $url, bool $deprecated = false): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|false
    {
        return wp_get_http_headers($url, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function isNewDay(): int
    {
        return is_new_day();
    }

    /**
     * @inheritDoc
     */
    public function buildQuery(array $data): string
    {
        return build_query($data);
    }

    /**
     * @inheritDoc
     */
    public function addQueryArg(...$args): string
    {
        return add_query_arg(...$args);
    }

    /**
     * @inheritDoc
     */
    public function removeQueryArg(string|array $key, false|string $query = false): string
    {
        return remove_query_arg($key, $query);
    }

    /**
     * @inheritDoc
     */
    public function wpRemovableQueryArgs(): array
    {
        return wp_removable_query_args();
    }

    /**
     * @inheritDoc
     */
    public function addMagicQuotes(array $inputArray): array
    {
        return add_magic_quotes($inputArray);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteFopen(string $uri): string|false
    {
        return wp_remote_fopen($uri);
    }

    /**
     * @inheritDoc
     */
    public function wp(string|array $queryVars = ''): void
    {
        wp($queryVars);
    }

    /**
     * @inheritDoc
     */
    public function getStatusHeaderDesc(int $code): string
    {
        return get_status_header_desc($code);
    }

    /**
     * @inheritDoc
     */
    public function statusHeader(int $code, string $description = ''): void
    {
        status_header($code, $description);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNocacheHeaders(): array
    {
        return wp_get_nocache_headers();
    }

    /**
     * @inheritDoc
     */
    public function nocacheHeaders(): void
    {
        nocache_headers();
    }

    /**
     * @inheritDoc
     */
    public function cacheJavascriptHeaders(): void
    {
        cache_javascript_headers();
    }

    /**
     * @inheritDoc
     */
    public function getNumQueries(): int
    {
        return get_num_queries();
    }

    /**
     * @inheritDoc
     */
    public function boolFromYn(string $yn): bool
    {
        return bool_from_yn($yn);
    }

    /**
     * @inheritDoc
     */
    public function doFeed(): void
    {
        do_feed();
    }

    /**
     * @inheritDoc
     */
    public function doFeedRdf(): void
    {
        do_feed_rdf();
    }

    /**
     * @inheritDoc
     */
    public function doFeedRss(): void
    {
        do_feed_rss();
    }

    /**
     * @inheritDoc
     */
    public function doFeedRss2(bool $forComments): void
    {
        do_feed_rss2($forComments);
    }

    /**
     * @inheritDoc
     */
    public function doFeedAtom(bool $forComments): void
    {
        do_feed_atom($forComments);
    }

    /**
     * @inheritDoc
     */
    public function doRobots(): void
    {
        do_robots();
    }

    /**
     * @inheritDoc
     */
    public function doFavicon(): void
    {
        do_favicon();
    }

    /**
     * @inheritDoc
     */
    public function isBlogInstalled(): bool
    {
        return is_blog_installed();
    }

    /**
     * @inheritDoc
     */
    public function wpNonceUrl(string $actionurl, int|string $action, string $name = '_wpnonce'): string
    {
        return wp_nonce_url($actionurl, $action, $name);
    }

    /**
     * @inheritDoc
     */
    public function wpNonceField(int|string $action, string $name = '_wpnonce', bool $referer = true, bool $display = true): string
    {
        return wp_nonce_field($action, $name, $referer, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpRefererField(bool $display = true): string
    {
        return wp_referer_field($display);
    }

    /**
     * @inheritDoc
     */
    public function wpOriginalRefererField(bool $display = true, string $jumpBackTo = 'current'): string
    {
        return wp_original_referer_field($display, $jumpBackTo);
    }

    /**
     * @inheritDoc
     */
    public function wpGetReferer(): string|false
    {
        return wp_get_referer();
    }

    /**
     * @inheritDoc
     */
    public function wpGetRawReferer(): string|false
    {
        return wp_get_raw_referer();
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalReferer(): string|false
    {
        return wp_get_original_referer();
    }

    /**
     * @inheritDoc
     */
    public function wpMkdirP(string $target): bool
    {
        return wp_mkdir_p($target);
    }

    /**
     * @inheritDoc
     */
    public function pathIsAbsolute(string $path): bool
    {
        return path_is_absolute($path);
    }

    /**
     * @inheritDoc
     */
    public function pathJoin(string $base, string $path): string
    {
        return path_join($base, $path);
    }

    /**
     * @inheritDoc
     */
    public function wpNormalizePath(string $path): string
    {
        return wp_normalize_path($path);
    }

    /**
     * @inheritDoc
     */
    public function getTempDir(): string
    {
        return get_temp_dir();
    }

    /**
     * @inheritDoc
     */
    public function wpIsWritable(string $path): bool
    {
        return wp_is_writable($path);
    }

    /**
     * @inheritDoc
     */
    public function winIsWritable(string $path): bool
    {
        return win_is_writable($path);
    }

    /**
     * @inheritDoc
     */
    public function wpGetUploadDir(): array
    {
        return wp_get_upload_dir();
    }

    /**
     * @inheritDoc
     */
    public function wpUploadDir(string|null $time = null, bool $createDir = true, bool $refreshCache = false): array
    {
        return wp_upload_dir($time, $createDir, $refreshCache);
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueFilename(string $dir, string $filename, callable $uniqueFilenameCallback = null): string
    {
        return wp_unique_filename($dir, $filename, $uniqueFilenameCallback);
    }

    /**
     * @inheritDoc
     */
    public function wpUploadBits(string $name, null|string $deprecated, string $bits, string|null $time = null): array
    {
        return wp_upload_bits($name, $deprecated, $bits, $time);
    }

    /**
     * @inheritDoc
     */
    public function wpExt2type(string $ext): mixed
    {
        return wp_ext2type($ext);
    }

    /**
     * @inheritDoc
     */
    public function wpGetDefaultExtensionForMimeType(string $mimeType): string|false
    {
        return wp_get_default_extension_for_mime_type($mimeType);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckFiletype(string $filename, array|null $mimes = null): array
    {
        return wp_check_filetype($filename, $mimes);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckFiletypeAndExt(string $file, string $filename, array|null $mimes = null): array
    {
        return wp_check_filetype_and_ext($file, $filename, $mimes);
    }

    /**
     * @inheritDoc
     */
    public function wpGetImageMime(string $file): string|false
    {
        return wp_get_image_mime($file);
    }

    /**
     * @inheritDoc
     */
    public function wpGetMimeTypes(): array
    {
        return wp_get_mime_types();
    }

    /**
     * @inheritDoc
     */
    public function wpGetExtTypes(): array
    {
        return wp_get_ext_types();
    }

    /**
     * @inheritDoc
     */
    public function wpFilesize(string $path): int
    {
        return wp_filesize($path);
    }

    /**
     * @inheritDoc
     */
    public function getAllowedMimeTypes(int|\WP_User $user = null): array
    {
        return get_allowed_mime_types($user);
    }

    /**
     * @inheritDoc
     */
    public function wpNonceAys(string $action): void
    {
        wp_nonce_ays($action);
    }

    /**
     * @inheritDoc
     */
    public function wpDie(string|\WP_Error $message = '', string|int $title = '', string|array|int $args = []): void
    {
        wp_die($message, $title, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpJsonEncode(mixed $value, int $flags = 0, int $depth = 512): string|false
    {
        return wp_json_encode($value, $flags, $depth);
    }

    /**
     * @inheritDoc
     */
    public function wpSendJson(mixed $response, int $statusCode = null, int $flags = 0): void
    {
        wp_send_json($response, $statusCode, $flags);
    }

    /**
     * @inheritDoc
     */
    public function wpSendJsonSuccess(mixed $value = null, int $statusCode = null, int $flags = 0): void
    {
        wp_send_json_success($value, $statusCode, $flags);
    }

    /**
     * @inheritDoc
     */
    public function wpSendJsonError(mixed $value = null, int $statusCode = null, int $flags = 0): void
    {
        wp_send_json_error($value, $statusCode, $flags);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckJsonpCallback(string $callback): bool
    {
        return wp_check_jsonp_callback($callback);
    }

    /**
     * @inheritDoc
     */
    public function wpJsonFileDecode(string $filename, array $options = []): mixed
    {
        return wp_json_file_decode($filename, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpIsServingRestRequest(): bool
    {
        return wp_is_serving_rest_request();
    }

    /**
     * @inheritDoc
     */
    public function smiliesInit(): void
    {
        smilies_init();
    }

    /**
     * @inheritDoc
     */
    public function wpParseArgs(string|array|object $args, array $defaults = []): array
    {
        return wp_parse_args($args, $defaults);
    }

    /**
     * @inheritDoc
     */
    public function wpParseList(array|string $inputList): array
    {
        return wp_parse_list($inputList);
    }

    /**
     * @inheritDoc
     */
    public function wpParseIdList(array|string $inputList): array
    {
        return wp_parse_id_list($inputList);
    }

    /**
     * @inheritDoc
     */
    public function wpParseSlugList(array|string $inputList): array
    {
        return wp_parse_slug_list($inputList);
    }

    /**
     * @inheritDoc
     */
    public function wpArraySliceAssoc(array $inputArray, array $keys): array
    {
        return wp_array_slice_assoc($inputArray, $keys);
    }

    /**
     * @inheritDoc
     */
    public function wpRecursiveKsort(array &$inputArray): void
    {
        wp_recursive_ksort($inputArray);
    }

    /**
     * @inheritDoc
     */
    public function wpIsNumericArray(mixed $data): bool
    {
        return wp_is_numeric_array($data);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterObjectList(array $inputList, array $args = [], string $operator = 'and', bool|string $field = false): array
    {
        return wp_filter_object_list($inputList, $args, $operator, $field);
    }

    /**
     * @inheritDoc
     */
    public function wpListFilter(array $inputList, array $args = [], string $operator = 'AND'): array
    {
        return wp_list_filter($inputList, $args, $operator);
    }

    /**
     * @inheritDoc
     */
    public function wpListPluck(array $inputList, int|string $field, int|string $indexKey = null): array
    {
        return wp_list_pluck($inputList, $field, $indexKey);
    }

    /**
     * @inheritDoc
     */
    public function wpListSort(array $inputList, string|array $orderby = [], string $order = 'ASC', bool $preserveKeys = false): array
    {
        return wp_list_sort($inputList, $orderby, $order, $preserveKeys);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeLoadWidgets(): void
    {
        wp_maybe_load_widgets();
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsAddMenu(): void
    {
        wp_widgets_add_menu();
    }

    /**
     * @inheritDoc
     */
    public function wpObEndFlushAll(): void
    {
        wp_ob_end_flush_all();
    }

    /**
     * @inheritDoc
     */
    public function deadDb(): void
    {
        dead_db();
    }

    /**
     * @inheritDoc
     */
    public function absint(mixed $maybeint): int
    {
        return absint($maybeint);
    }

    /**
     * @inheritDoc
     */
    public function wpTriggerError(string $functionName, string $message, int $errorLevel = E_USER_NOTICE): void
    {
        wp_trigger_error($functionName, $message, $errorLevel);
    }

    /**
     * @inheritDoc
     */
    public function isLighttpdBefore150(): bool
    {
        return is_lighttpd_before_150();
    }

    /**
     * @inheritDoc
     */
    public function apacheModLoaded(string $mod, bool $defaultValue = false): bool
    {
        return apache_mod_loaded($mod, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function iis7SupportsPermalinks(): bool
    {
        return iis7_supports_permalinks();
    }

    /**
     * @inheritDoc
     */
    public function validateFile(string $file, array $allowedFiles = []): int
    {
        return validate_file($file, $allowedFiles);
    }

    /**
     * @inheritDoc
     */
    public function forceSslAdmin(string|bool $force = null): bool
    {
        return force_ssl_admin($force);
    }

    /**
     * @inheritDoc
     */
    public function wpGuessUrl(): string
    {
        return wp_guess_url();
    }

    /**
     * @inheritDoc
     */
    public function wpSuspendCacheAddition(bool $suspend = null): bool
    {
        return wp_suspend_cache_addition($suspend);
    }

    /**
     * @inheritDoc
     */
    public function wpSuspendCacheInvalidation(bool $suspend = true): bool
    {
        return wp_suspend_cache_invalidation($suspend);
    }

    /**
     * @inheritDoc
     */
    public function isMainSite(int $siteId = null, int $networkId = null): bool
    {
        return is_main_site($siteId, $networkId);
    }

    /**
     * @inheritDoc
     */
    public function getMainSiteId(int $networkId = null): int
    {
        return get_main_site_id($networkId);
    }

    /**
     * @inheritDoc
     */
    public function isMainNetwork(int $networkId = null): bool
    {
        return is_main_network($networkId);
    }

    /**
     * @inheritDoc
     */
    public function getMainNetworkId(): int
    {
        return get_main_network_id();
    }

    /**
     * @inheritDoc
     */
    public function isSiteMetaSupported(): bool
    {
        return is_site_meta_supported();
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneOverrideOffset(): float|false
    {
        return wp_timezone_override_offset();
    }

    /**
     * @inheritDoc
     */
    public function wpTimezoneChoice(string $selectedZone, string $locale = null): string
    {
        return wp_timezone_choice($selectedZone, $locale);
    }

    /**
     * @inheritDoc
     */
    public function wpScheduledDelete(): void
    {
        wp_scheduled_delete();
    }

    /**
     * @inheritDoc
     */
    public function getFileData(string $file, array $defaultHeaders, string $context = ''): array
    {
        return get_file_data($file, $defaultHeaders, $context);
    }

    /**
     * @inheritDoc
     */
    public function sendNosniffHeader(): void
    {
        send_nosniff_header();
    }

    /**
     * @inheritDoc
     */
    public function sendFrameOptionsHeader(): void
    {
        send_frame_options_header();
    }

    /**
     * @inheritDoc
     */
    public function wpAllowedProtocols(): array
    {
        return wp_allowed_protocols();
    }

    /**
     * @inheritDoc
     */
    public function wpDebugBacktraceSummary(string $ignoreClass = null, int $skipFrames = 0, bool $pretty = true): string|array
    {
        return wp_debug_backtrace_summary($ignoreClass, $skipFrames, $pretty);
    }

    /**
     * @inheritDoc
     */
    public function wpIsStream(string $path): bool
    {
        return wp_is_stream($path);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckdate(int $month, int $day, int $year, string $sourceDate): bool
    {
        return wp_checkdate($month, $day, $year, $sourceDate);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheckLoad(): void
    {
        wp_auth_check_load();
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheckHtml(): void
    {
        wp_auth_check_html();
    }

    /**
     * @inheritDoc
     */
    public function wpAuthCheck(array $response): array
    {
        return wp_auth_check($response);
    }

    /**
     * @inheritDoc
     */
    public function getTagRegex(string $tag): string
    {
        return get_tag_regex($tag);
    }

    /**
     * @inheritDoc
     */
    public function isUtf8Charset(string|null $blogCharset = null): bool
    {
        return is_utf8_charset($blogCharset);
    }

    /**
     * @inheritDoc
     */
    public function mbstringBinarySafeEncoding(bool $reset = false): void
    {
        mbstring_binary_safe_encoding($reset);
    }

    /**
     * @inheritDoc
     */
    public function resetMbstringEncoding(): void
    {
        reset_mbstring_encoding();
    }

    /**
     * @inheritDoc
     */
    public function wpValidateBoolean(mixed $value): bool
    {
        return wp_validate_boolean($value);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteFile(string $file): void
    {
        wp_delete_file($file);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteFileFromDirectory(string $file, string $directory): bool
    {
        return wp_delete_file_from_directory($file, $directory);
    }

    /**
     * @inheritDoc
     */
    public function wpPostPreviewJs(): void
    {
        wp_post_preview_js();
    }

    /**
     * @inheritDoc
     */
    public function mysqlToRfc3339(string $dateString): string
    {
        return mysql_to_rfc3339($dateString);
    }

    /**
     * @inheritDoc
     */
    public function wpRaiseMemoryLimit(string $context = 'admin'): int|string|false
    {
        return wp_raise_memory_limit($context);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateUuid4(): string
    {
        return wp_generate_uuid4();
    }

    /**
     * @inheritDoc
     */
    public function wpIsUuid(mixed $uuid, int $version = null): bool
    {
        return wp_is_uuid($uuid, $version);
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueId(string $prefix = ''): string
    {
        return wp_unique_id($prefix);
    }

    /**
     * @inheritDoc
     */
    public function wpUniquePrefixedId(string $prefix = ''): string
    {
        return wp_unique_prefixed_id($prefix);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheGetLastChanged(string $group): string
    {
        return wp_cache_get_last_changed($group);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetLastChanged(string $group): string
    {
        return wp_cache_set_last_changed($group);
    }

    /**
     * @inheritDoc
     */
    public function wpSiteAdminEmailChangeNotification(string $oldEmail, string $newEmail, string $optionName): void
    {
        wp_site_admin_email_change_notification($oldEmail, $newEmail, $optionName);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyAnonymizeIp(string $ipAddr, bool $ipv6Fallback = false): string
    {
        return wp_privacy_anonymize_ip($ipAddr, $ipv6Fallback);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyAnonymizeData(string $type, string $data = ''): string
    {
        return wp_privacy_anonymize_data($type, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyExportsDir(): string
    {
        return wp_privacy_exports_dir();
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyExportsUrl(): string
    {
        return wp_privacy_exports_url();
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleDeleteOldPrivacyExportFiles(): void
    {
        wp_schedule_delete_old_privacy_export_files();
    }

    /**
     * @inheritDoc
     */
    public function wpPrivacyDeleteOldExportFiles(): void
    {
        wp_privacy_delete_old_export_files();
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdatePhpUrl(): string
    {
        return wp_get_update_php_url();
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePhpAnnotation(string $before = '<p class="description">', string $after = '</p>', bool $display = true): mixed
    {
        return wp_update_php_annotation($before, $after, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdatePhpAnnotation(): string
    {
        return wp_get_update_php_annotation();
    }

    /**
     * @inheritDoc
     */
    public function wpGetDirectPhpUpdateUrl(): string
    {
        return wp_get_direct_php_update_url();
    }

    /**
     * @inheritDoc
     */
    public function wpDirectPhpUpdateButton(): void
    {
        wp_direct_php_update_button();
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdateHttpsUrl(): string
    {
        return wp_get_update_https_url();
    }

    /**
     * @inheritDoc
     */
    public function wpGetDirectUpdateHttpsUrl(): string
    {
        return wp_get_direct_update_https_url();
    }

    /**
     * @inheritDoc
     */
    public function getDirsize(string $directory, int $maxExecutionTime = null): int|false|null
    {
        return get_dirsize($directory, $maxExecutionTime);
    }

    /**
     * @inheritDoc
     */
    public function recurseDirsize(string $directory, string|array $exclude = null, int $maxExecutionTime = null, array &$directoryCache = null): int|false|null
    {
        return recurse_dirsize($directory, $exclude, $maxExecutionTime, $directoryCache);
    }

    /**
     * @inheritDoc
     */
    public function cleanDirsizeCache(string $path): void
    {
        clean_dirsize_cache($path);
    }

    /**
     * @inheritDoc
     */
    public function isWpVersionCompatible(string $required): bool
    {
        return is_wp_version_compatible($required);
    }

    /**
     * @inheritDoc
     */
    public function isPhpVersionCompatible(string $required): bool
    {
        return is_php_version_compatible($required);
    }

    /**
     * @inheritDoc
     */
    public function wpFuzzyNumberMatch(int|float $expected, int|float $actual, int|float $precision = 1): bool
    {
        return wp_fuzzy_number_match($expected, $actual, $precision);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAdminNotice(string $message, array $args = []): string
    {
        return wp_get_admin_notice($message, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminNotice(string $message, array $args = []): void
    {
        wp_admin_notice($message, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpScripts(): \WP_Scripts
    {
        return wp_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintScripts(string|array|false $handles = false): array
    {
        return wp_print_scripts($handles);
    }

    /**
     * @inheritDoc
     */
    public function wpAddInlineScript(string $handle, string $data, string $position = 'after'): bool
    {
        return wp_add_inline_script($handle, $data, $position);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterScript(string $handle, string|false $src, array $deps = [], string|bool|null $ver = false, array|bool $args = []): bool
    {
        return wp_register_script($handle, $src, $deps, $ver, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeScript(string $handle, string $objectName, array $l10n): bool
    {
        return wp_localize_script($handle, $objectName, $l10n);
    }

    /**
     * @inheritDoc
     */
    public function wpSetScriptTranslations(string $handle, string $domain = 'default', string $path = ''): bool
    {
        return wp_set_script_translations($handle, $domain, $path);
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterScript(string $handle): void
    {
        wp_deregister_script($handle);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScript(string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, array|bool $args = []): void
    {
        wp_enqueue_script($handle, $src, $deps, $ver, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueScript(string $handle): void
    {
        wp_dequeue_script($handle);
    }

    /**
     * @inheritDoc
     */
    public function wpScriptIs(string $handle, string $status = 'enqueued'): bool
    {
        return wp_script_is($handle, $status);
    }

    /**
     * @inheritDoc
     */
    public function wpScriptAddData(string $handle, string $key, mixed $value): bool
    {
        return wp_script_add_data($handle, $key, $value);
    }

    /**
     * @inheritDoc
     */
    public function wpStyles(): \WP_Styles
    {
        return wp_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintStyles(string|bool|array $handles = false): array
    {
        return wp_print_styles($handles);
    }

    /**
     * @inheritDoc
     */
    public function wpAddInlineStyle(string $handle, string $data): bool
    {
        return wp_add_inline_style($handle, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterStyle(string $handle, string|false $src, array $deps = [], string|bool|null $ver = false, string $media = 'all'): bool
    {
        return wp_register_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterStyle(string $handle): void
    {
        wp_deregister_style($handle);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueStyle(string $handle, string $src = '', array $deps = [], string|bool|null $ver = false, string $media = 'all'): void
    {
        wp_enqueue_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueStyle(string $handle): void
    {
        wp_dequeue_style($handle);
    }

    /**
     * @inheritDoc
     */
    public function wpStyleIs(string $handle, string $status = 'enqueued'): bool
    {
        return wp_style_is($handle, $status);
    }

    /**
     * @inheritDoc
     */
    public function wpStyleAddData(string $handle, string $key, mixed $value): bool
    {
        return wp_style_add_data($handle, $key, $value);
    }

    /**
     * @inheritDoc
     */
    public function getHeader(string $name = null, array $args = []): mixed
    {
        return get_header($name, $args);
    }

    /**
     * @inheritDoc
     */
    public function getFooter(string $name = null, array $args = []): mixed
    {
        return get_footer($name, $args);
    }

    /**
     * @inheritDoc
     */
    public function getSidebar(string $name = null, array $args = []): mixed
    {
        return get_sidebar($name, $args);
    }

    /**
     * @inheritDoc
     */
    public function getTemplatePart(string $slug, string|null $name = null, array $args = []): mixed
    {
        return get_template_part($slug, $name, $args);
    }

    /**
     * @inheritDoc
     */
    public function getSearchForm(array $args = []): mixed
    {
        return get_search_form($args);
    }

    /**
     * @inheritDoc
     */
    public function wpLoginout(string $redirect = '', bool $display = true): mixed
    {
        return wp_loginout($redirect, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpLogoutUrl(string $redirect = ''): string
    {
        return wp_logout_url($redirect);
    }

    /**
     * @inheritDoc
     */
    public function wpLoginUrl(string $redirect = '', bool $forceReauth = false): string
    {
        return wp_login_url($redirect, $forceReauth);
    }

    /**
     * @inheritDoc
     */
    public function wpRegistrationUrl(): string
    {
        return wp_registration_url();
    }

    /**
     * @inheritDoc
     */
    public function wpLoginForm(array $args = []): mixed
    {
        return wp_login_form($args);
    }

    /**
     * @inheritDoc
     */
    public function wpLostpasswordUrl(string $redirect = ''): string
    {
        return wp_lostpassword_url($redirect);
    }

    /**
     * @inheritDoc
     */
    public function wpRegister(string $before = '<li>', string $after = '</li>', bool $display = true): mixed
    {
        return wp_register($before, $after, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpMeta(): void
    {
        wp_meta();
    }

    /**
     * @inheritDoc
     */
    public function bloginfo(string $show = ''): void
    {
        bloginfo($show);
    }

    /**
     * @inheritDoc
     */
    public function getBloginfo(string $show = '', string $filter = 'raw'): string
    {
        return get_bloginfo($show, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getSiteIconUrl(int $size = 512, string $url = '', int $blogId = 0): string
    {
        return get_site_icon_url($size, $url, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function siteIconUrl(int $size = 512, string $url = '', int $blogId = 0): void
    {
        site_icon_url($size, $url, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function hasSiteIcon(int $blogId = 0): bool
    {
        return has_site_icon($blogId);
    }

    /**
     * @inheritDoc
     */
    public function hasCustomLogo(int $blogId = 0): bool
    {
        return has_custom_logo($blogId);
    }

    /**
     * @inheritDoc
     */
    public function getCustomLogo(int $blogId = 0): string
    {
        return get_custom_logo($blogId);
    }

    /**
     * @inheritDoc
     */
    public function theCustomLogo(int $blogId = 0): void
    {
        the_custom_logo($blogId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetDocumentTitle(): string
    {
        return wp_get_document_title();
    }

    /**
     * @inheritDoc
     */
    public function wpTitle(string $sep = '&raquo;', bool $display = true, string $seplocation = ''): mixed
    {
        return wp_title($sep, $display, $seplocation);
    }

    /**
     * @inheritDoc
     */
    public function singlePostTitle(string $prefix = '', bool $display = true): mixed
    {
        return single_post_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function postTypeArchiveTitle(string $prefix = '', bool $display = true): mixed
    {
        return post_type_archive_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function singleCatTitle(string $prefix = '', bool $display = true): mixed
    {
        return single_cat_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function singleTagTitle(string $prefix = '', bool $display = true): mixed
    {
        return single_tag_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function singleTermTitle(string $prefix = '', bool $display = true): mixed
    {
        return single_term_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function singleMonthTitle(string $prefix = '', bool $display = true): mixed
    {
        return single_month_title($prefix, $display);
    }

    /**
     * @inheritDoc
     */
    public function theArchiveTitle(string $before = '', string $after = ''): void
    {
        the_archive_title($before, $after);
    }

    /**
     * @inheritDoc
     */
    public function getTheArchiveTitle(): string
    {
        return get_the_archive_title();
    }

    /**
     * @inheritDoc
     */
    public function theArchiveDescription(string $before = '', string $after = ''): void
    {
        the_archive_description($before, $after);
    }

    /**
     * @inheritDoc
     */
    public function getTheArchiveDescription(): string
    {
        return get_the_archive_description();
    }

    /**
     * @inheritDoc
     */
    public function getThePostTypeDescription(): string
    {
        return get_the_post_type_description();
    }

    /**
     * @inheritDoc
     */
    public function getArchivesLink(string $url, string $text, string $format = 'html', string $before = '', string $after = '', bool $selected = false): string
    {
        return get_archives_link($url, $text, $format, $before, $after, $selected);
    }

    /**
     * @inheritDoc
     */
    public function wpGetArchives(string|array $args = ''): mixed
    {
        return wp_get_archives($args);
    }

    /**
     * @inheritDoc
     */
    public function calendarWeekMod(int $num): float
    {
        return calendar_week_mod($num);
    }

    /**
     * @inheritDoc
     */
    public function getCalendar(bool $initial = true, bool $display = true): mixed
    {
        return get_calendar($initial, $display);
    }

    /**
     * @inheritDoc
     */
    public function deleteGetCalendarCache(): void
    {
        delete_get_calendar_cache();
    }

    /**
     * @inheritDoc
     */
    public function allowedTags(): string
    {
        return allowed_tags();
    }

    /**
     * @inheritDoc
     */
    public function theDateXml(): void
    {
        the_date_xml();
    }

    /**
     * @inheritDoc
     */
    public function theDate(string $format = '', string $before = '', string $after = '', bool $display = true): mixed
    {
        return the_date($format, $before, $after, $display);
    }

    /**
     * @inheritDoc
     */
    public function getTheDate(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        return get_the_date($format, $post);
    }

    /**
     * @inheritDoc
     */
    public function theModifiedDate(string $format = '', string $before = '', string $after = '', bool $display = true): mixed
    {
        return the_modified_date($format, $before, $after, $display);
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedDate(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        return get_the_modified_date($format, $post);
    }

    /**
     * @inheritDoc
     */
    public function theTime(string $format = ''): void
    {
        the_time($format);
    }

    /**
     * @inheritDoc
     */
    public function getTheTime(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        return get_the_time($format, $post);
    }

    /**
     * @inheritDoc
     */
    public function getPostTime(string $format = 'U', bool $gmt = false, int|\WP_Post $post = null, bool $translate = false): string|int|false
    {
        return get_post_time($format, $gmt, $post, $translate);
    }

    /**
     * @inheritDoc
     */
    public function getPostDatetime(int|\WP_Post $post = null, string $field = 'date', string $source = 'local'): \DateTimeImmutable|false
    {
        return get_post_datetime($post, $field, $source);
    }

    /**
     * @inheritDoc
     */
    public function getPostTimestamp(int|\WP_Post $post = null, string $field = 'date'): int|false
    {
        return get_post_timestamp($post, $field);
    }

    /**
     * @inheritDoc
     */
    public function theModifiedTime(string $format = ''): void
    {
        the_modified_time($format);
    }

    /**
     * @inheritDoc
     */
    public function getTheModifiedTime(string $format = '', int|\WP_Post $post = null): string|int|false
    {
        return get_the_modified_time($format, $post);
    }

    /**
     * @inheritDoc
     */
    public function getPostModifiedTime(string $format = 'U', bool $gmt = false, int|\WP_Post $post = null, bool $translate = false): string|int|false
    {
        return get_post_modified_time($format, $gmt, $post, $translate);
    }

    /**
     * @inheritDoc
     */
    public function theWeekday(): void
    {
        the_weekday();
    }

    /**
     * @inheritDoc
     */
    public function theWeekdayDate(string $before = '', string $after = ''): void
    {
        the_weekday_date($before, $after);
    }

    /**
     * @inheritDoc
     */
    public function wpHead(): void
    {
        wp_head();
    }

    /**
     * @inheritDoc
     */
    public function wpFooter(): void
    {
        wp_footer();
    }

    /**
     * @inheritDoc
     */
    public function wpBodyOpen(): void
    {
        wp_body_open();
    }

    /**
     * @inheritDoc
     */
    public function feedLinks(array $args = []): void
    {
        feed_links($args);
    }

    /**
     * @inheritDoc
     */
    public function feedLinksExtra(array $args = []): void
    {
        feed_links_extra($args);
    }

    /**
     * @inheritDoc
     */
    public function rsdLink(): void
    {
        rsd_link();
    }

    /**
     * @inheritDoc
     */
    public function wpStrictCrossOriginReferrer(): void
    {
        wp_strict_cross_origin_referrer();
    }

    /**
     * @inheritDoc
     */
    public function wpSiteIcon(): void
    {
        wp_site_icon();
    }

    /**
     * @inheritDoc
     */
    public function wpResourceHints(): void
    {
        wp_resource_hints();
    }

    /**
     * @inheritDoc
     */
    public function wpPreloadResources(): void
    {
        wp_preload_resources();
    }

    /**
     * @inheritDoc
     */
    public function wpDependenciesUniqueHosts(): array
    {
        return wp_dependencies_unique_hosts();
    }

    /**
     * @inheritDoc
     */
    public function userCanRichedit(): bool
    {
        return user_can_richedit();
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultEditor(): string
    {
        return wp_default_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpEditor(string $content, string $editorId, array $settings = []): void
    {
        wp_editor($content, $editorId, $settings);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditor(): void
    {
        wp_enqueue_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueCodeEditor(array $args): array|false
    {
        return wp_enqueue_code_editor($args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCodeEditorSettings(array $args): array|false
    {
        return wp_get_code_editor_settings($args);
    }

    /**
     * @inheritDoc
     */
    public function getSearchQuery(bool $escaped = true): string
    {
        return get_search_query($escaped);
    }

    /**
     * @inheritDoc
     */
    public function theSearchQuery(): void
    {
        the_search_query();
    }

    /**
     * @inheritDoc
     */
    public function getLanguageAttributes(string $doctype = 'html'): string
    {
        return get_language_attributes($doctype);
    }

    /**
     * @inheritDoc
     */
    public function languageAttributes(string $doctype = 'html'): void
    {
        language_attributes($doctype);
    }

    /**
     * @inheritDoc
     */
    public function paginateLinks(string|array $args = ''): mixed
    {
        return paginate_links($args);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCssColor(string $key, string $name, string $url, array $colors = [], array $icons = []): void
    {
        wp_admin_css_color($key, $name, $url, $colors, $icons);
    }

    /**
     * @inheritDoc
     */
    public function registerAdminColorSchemes(): void
    {
        register_admin_color_schemes();
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCssUri(string $file = 'wp-admin'): string
    {
        return wp_admin_css_uri($file);
    }

    /**
     * @inheritDoc
     */
    public function wpAdminCss(string $file = 'wp-admin', bool $forceEcho = false): void
    {
        wp_admin_css($file, $forceEcho);
    }

    /**
     * @inheritDoc
     */
    public function addThickbox(): void
    {
        add_thickbox();
    }

    /**
     * @inheritDoc
     */
    public function wpGenerator(): void
    {
        wp_generator();
    }

    /**
     * @inheritDoc
     */
    public function theGenerator(string $type): void
    {
        the_generator($type);
    }

    /**
     * @inheritDoc
     */
    public function getTheGenerator(string $type = ''): mixed
    {
        return get_the_generator($type);
    }

    /**
     * @inheritDoc
     */
    public function checked(mixed $checked, mixed $current = true, bool $display = true): string
    {
        return checked($checked, $current, $display);
    }

    /**
     * @inheritDoc
     */
    public function selected(mixed $selected, mixed $current = true, bool $display = true): string
    {
        return selected($selected, $current, $display);
    }

    /**
     * @inheritDoc
     */
    public function disabled(mixed $disabled, mixed $current = true, bool $display = true): string
    {
        return disabled($disabled, $current, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpReadonly(mixed $readonlyValue, mixed $current = true, bool $display = true): string
    {
        return wp_readonly($readonlyValue, $current, $display);
    }

    /**
     * @inheritDoc
     */
    public function wpRequiredFieldIndicator(): string
    {
        return wp_required_field_indicator();
    }

    /**
     * @inheritDoc
     */
    public function wpRequiredFieldMessage(): string
    {
        return wp_required_field_message();
    }

    /**
     * @inheritDoc
     */
    public function wpHeartbeatSettings(array $settings): array
    {
        return wp_heartbeat_settings($settings);
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalSettings(array $path = [], array $context = []): mixed
    {
        return wp_get_global_settings($path, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStyles(array $path = [], array $context = []): mixed
    {
        return wp_get_global_styles($path, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStylesheet(array $types = []): string
    {
        return wp_get_global_stylesheet($types);
    }

    /**
     * @inheritDoc
     */
    public function wpGetGlobalStylesCustomCss(): string
    {
        return wp_get_global_styles_custom_css();
    }

    /**
     * @inheritDoc
     */
    public function wpAddGlobalStylesForBlocks(): void
    {
        wp_add_global_styles_for_blocks();
    }

    /**
     * @inheritDoc
     */
    public function wpThemeHasThemeJson(): bool
    {
        return wp_theme_has_theme_json();
    }

    /**
     * @inheritDoc
     */
    public function wpCleanThemeJsonCache(): void
    {
        wp_clean_theme_json_cache();
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDirectoryPatternSlugs(): array
    {
        return wp_get_theme_directory_pattern_slugs();
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDataCustomTemplates(): array
    {
        return wp_get_theme_data_custom_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemeDataTemplateParts(): array
    {
        return wp_get_theme_data_template_parts();
    }

    /**
     * @inheritDoc
     */
    public function wpGetBlockCssSelector(\WP_Block_Type $blockType, string|array $target = 'root', bool $fallback = false): string|null
    {
        return wp_get_block_css_selector($blockType, $target, $fallback);
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteRequest(string $url, array $args = []): array|\WP_Error
    {
        return wp_safe_remote_request($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteGet(string $url, array $args = []): array|\WP_Error
    {
        return wp_safe_remote_get($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemotePost(string $url, array $args = []): array|\WP_Error
    {
        return wp_safe_remote_post($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRemoteHead(string $url, array $args = []): array|\WP_Error
    {
        return wp_safe_remote_head($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRequest(string $url, array $args = []): array|\WP_Error
    {
        return wp_remote_request($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteGet(string $url, array $args = []): array|\WP_Error
    {
        return wp_remote_get($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpRemotePost(string $url, array $args = []): array|\WP_Error
    {
        return wp_remote_post($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteHead(string $url, array $args = []): array|\WP_Error
    {
        return wp_remote_head($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveHeaders(array|\WP_Error $response): \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array
    {
        return wp_remote_retrieve_headers($response);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveHeader(array|\WP_Error $response, string $header): array|string
    {
        return wp_remote_retrieve_header($response, $header);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveResponseCode(array|\WP_Error $response): int|string
    {
        return wp_remote_retrieve_response_code($response);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveResponseMessage(array|\WP_Error $response): string
    {
        return wp_remote_retrieve_response_message($response);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveBody(array|\WP_Error $response): string
    {
        return wp_remote_retrieve_body($response);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookies(array|\WP_Error $response): array
    {
        return wp_remote_retrieve_cookies($response);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookie(array|\WP_Error $response, string $name): \WP_Http_Cookie|string
    {
        return wp_remote_retrieve_cookie($response, $name);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoteRetrieveCookieValue(array|\WP_Error $response, string $name): string
    {
        return wp_remote_retrieve_cookie_value($response, $name);
    }

    /**
     * @inheritDoc
     */
    public function wpHttpSupports(array $capabilities = [], string $url = null): bool
    {
        return wp_http_supports($capabilities, $url);
    }

    /**
     * @inheritDoc
     */
    public function getHttpOrigin(): string
    {
        return get_http_origin();
    }

    /**
     * @inheritDoc
     */
    public function getAllowedHttpOrigins(): array
    {
        return get_allowed_http_origins();
    }

    /**
     * @inheritDoc
     */
    public function isAllowedHttpOrigin(string|null $origin = null): string
    {
        return is_allowed_http_origin($origin);
    }

    /**
     * @inheritDoc
     */
    public function sendOriginHeaders(): string|false
    {
        return send_origin_headers();
    }

    /**
     * @inheritDoc
     */
    public function wpHttpValidateUrl(string $url): string|false
    {
        return wp_http_validate_url($url);
    }

    /**
     * @inheritDoc
     */
    public function allowedHttpRequestHosts(bool $isExternal, string $host): bool
    {
        return allowed_http_request_hosts($isExternal, $host);
    }

    /**
     * @inheritDoc
     */
    public function msAllowedHttpRequestHosts(bool $isExternal, string $host): bool
    {
        return ms_allowed_http_request_hosts($isExternal, $host);
    }

    /**
     * @inheritDoc
     */
    public function wpParseUrl(string $url, int $component): mixed
    {
        return wp_parse_url($url, $component);
    }

    /**
     * @inheritDoc
     */
    public function wpIsUsingHttps(): bool
    {
        return wp_is_using_https();
    }

    /**
     * @inheritDoc
     */
    public function wpIsHomeUrlUsingHttps(): bool
    {
        return wp_is_home_url_using_https();
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteUrlUsingHttps(): bool
    {
        return wp_is_site_url_using_https();
    }

    /**
     * @inheritDoc
     */
    public function wpIsHttpsSupported(): bool
    {
        return wp_is_https_supported();
    }

    /**
     * @inheritDoc
     */
    public function wpShouldReplaceInsecureHomeUrl(): bool
    {
        return wp_should_replace_insecure_home_url();
    }

    /**
     * @inheritDoc
     */
    public function wpReplaceInsecureHomeUrl(string $content): string
    {
        return wp_replace_insecure_home_url($content);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUrlsToHttps(): bool
    {
        return wp_update_urls_to_https();
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivity(): \WP_Interactivity_API
    {
        return wp_interactivity();
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityProcessDirectives(string $html): string
    {
        return wp_interactivity_process_directives($html);
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityState(string $storeNamespace = null, array $state = []): array
    {
        return wp_interactivity_state($storeNamespace, $state);
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityConfig(string $storeNamespace, array $config = []): array
    {
        return wp_interactivity_config($storeNamespace, $config);
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityDataWpContext(array $context, string $storeNamespace = ''): string
    {
        return wp_interactivity_data_wp_context($context, $storeNamespace);
    }

    /**
     * @inheritDoc
     */
    public function wpInteractivityGetContext(string $storeNamespace = null): array
    {
        return wp_interactivity_get_context($storeNamespace);
    }

    /**
     * @inheritDoc
     */
    public function wpKses(string $content, array|string $allowedHtml, array $allowedProtocols = []): string
    {
        return wp_kses($content, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesOneAttr(string $attr, string $element): string
    {
        return wp_kses_one_attr($attr, $element);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAllowedHtml(string|array $context = ''): array
    {
        return wp_kses_allowed_html($context);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHook(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        return wp_kses_hook($content, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesVersion(): string
    {
        return wp_kses_version();
    }

    /**
     * @inheritDoc
     */
    public function wpKsesSplit(string $content, array|string $allowedHtml, array $allowedProtocols): string
    {
        return wp_kses_split($content, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesUriAttributes(): array
    {
        return wp_kses_uri_attributes();
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttr(string $element, string $attr, array|string $allowedHtml, array $allowedProtocols): string
    {
        return wp_kses_attr($element, $attr, $allowedHtml, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttrCheck(string &$name, string &$value, string &$whole, string $vless, string $element, array $allowedHtml): bool
    {
        return wp_kses_attr_check($name, $value, $whole, $vless, $element, $allowedHtml);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHair(string $attr, array $allowedProtocols): array
    {
        return wp_kses_hair($attr, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesAttrParse(string $element): array|false
    {
        return wp_kses_attr_parse($element);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHairParse(string $attr): array|false
    {
        return wp_kses_hair_parse($attr);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesCheckAttrVal(string $value, string $vless, string $checkname, mixed $checkvalue): bool
    {
        return wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesBadProtocol(string $content, array $allowedProtocols): string
    {
        return wp_kses_bad_protocol($content, $allowedProtocols);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNoNull(string $content, array $options = null): string
    {
        return wp_kses_no_null($content, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesStripslashes(string $content): string
    {
        return wp_kses_stripslashes($content);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesArrayLc(array $inarray): array
    {
        return wp_kses_array_lc($inarray);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesHtmlError(string $attr): string
    {
        return wp_kses_html_error($attr);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesBadProtocolOnce(string $content, array $allowedProtocols, int $count = 1): string
    {
        return wp_kses_bad_protocol_once($content, $allowedProtocols, $count);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNormalizeEntities(string $content, string $context = 'html'): string
    {
        return wp_kses_normalize_entities($content, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesNamedEntities(array $matches): string
    {
        return wp_kses_named_entities($matches);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesXmlNamedEntities(array $matches): string
    {
        return wp_kses_xml_named_entities($matches);
    }

    /**
     * @inheritDoc
     */
    public function validUnicode(int $i): bool
    {
        return valid_unicode($i);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesDecodeEntities(string $content): string
    {
        return wp_kses_decode_entities($content);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterKses(string $data): string
    {
        return wp_filter_kses($data);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesData(string $data): string
    {
        return wp_kses_data($data);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterPostKses(string $data): string
    {
        return wp_filter_post_kses($data);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterGlobalStylesPost(string $data): string
    {
        return wp_filter_global_styles_post($data);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesPost(string $data): string
    {
        return wp_kses_post($data);
    }

    /**
     * @inheritDoc
     */
    public function wpKsesPostDeep(mixed $data): mixed
    {
        return wp_kses_post_deep($data);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterNohtmlKses(string $data): string
    {
        return wp_filter_nohtml_kses($data);
    }

    /**
     * @inheritDoc
     */
    public function ksesInitFilters(): void
    {
        kses_init_filters();
    }

    /**
     * @inheritDoc
     */
    public function ksesRemoveFilters(): void
    {
        kses_remove_filters();
    }

    /**
     * @inheritDoc
     */
    public function ksesInit(): void
    {
        kses_init();
    }

    /**
     * @inheritDoc
     */
    public function safecssFilterAttr(string $css, string $deprecated = ''): string
    {
        return safecss_filter_attr($css, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getLocale(): string
    {
        return get_locale();
    }

    /**
     * @inheritDoc
     */
    public function getUserLocale(int|\WP_User $user = 0): string
    {
        return get_user_locale($user);
    }

    /**
     * @inheritDoc
     */
    public function determineLocale(): string
    {
        return determine_locale();
    }

    /**
     * @inheritDoc
     */
    public function translate(string $text, string $domain = 'default'): string
    {
        return translate($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function beforeLastBar(string $text): string
    {
        return before_last_bar($text);
    }

    /**
     * @inheritDoc
     */
    public function translateWithGettextContext(string $text, string $context, string $domain = 'default'): string
    {
        return translate_with_gettext_context($text, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function __(string $text, string $domain = 'default'): string
    {
        return __($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escAttr__(string $text, string $domain = 'default'): string
    {
        return esc_attr__($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escHtml__(string $text, string $domain = 'default'): string
    {
        return esc_html__($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _e(string $text, string $domain = 'default'): void
    {
        _e($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escAttrE(string $text, string $domain = 'default'): void
    {
        esc_attr_e($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escHtmlE(string $text, string $domain = 'default'): void
    {
        esc_html_e($text, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _x(string $text, string $context, string $domain = 'default'): string
    {
        return _x($text, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _ex(string $text, string $context, string $domain = 'default'): void
    {
        _ex($text, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escAttrX(string $text, string $context, string $domain = 'default'): string
    {
        return esc_attr_x($text, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function escHtmlX(string $text, string $context, string $domain = 'default'): string
    {
        return esc_html_x($text, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _n(string $single, string $plural, int $number, string $domain = 'default'): string
    {
        return _n($single, $plural, $number, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _nx(string $single, string $plural, int $number, string $context, string $domain = 'default'): string
    {
        return _nx($single, $plural, $number, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _nNoop(string $singular, string $plural, string $domain = null): array
    {
        return _n_noop($singular, $plural, $domain);
    }

    /**
     * @inheritDoc
     */
    public function _nxNoop(string $singular, string $plural, string $context, string $domain = null): array
    {
        return _nx_noop($singular, $plural, $context, $domain);
    }

    /**
     * @inheritDoc
     */
    public function translateNoopedPlural(array $noopedPlural, int $count, string $domain = 'default'): string
    {
        return translate_nooped_plural($noopedPlural, $count, $domain);
    }

    /**
     * @inheritDoc
     */
    public function loadTextdomain(string $domain, string $mofile, string $locale = null): bool
    {
        return load_textdomain($domain, $mofile, $locale);
    }

    /**
     * @inheritDoc
     */
    public function unloadTextdomain(string $domain, bool $reloadable = false): bool
    {
        return unload_textdomain($domain, $reloadable);
    }

    /**
     * @inheritDoc
     */
    public function loadDefaultTextdomain(string $locale = null): bool
    {
        return load_default_textdomain($locale);
    }

    /**
     * @inheritDoc
     */
    public function loadPluginTextdomain(string $domain, string|false $deprecated = false, string|false $pluginRelPath = false): bool
    {
        return load_plugin_textdomain($domain, $deprecated, $pluginRelPath);
    }

    /**
     * @inheritDoc
     */
    public function loadMupluginTextdomain(string $domain, string $muPluginRelPath = ''): bool
    {
        return load_muplugin_textdomain($domain, $muPluginRelPath);
    }

    /**
     * @inheritDoc
     */
    public function loadThemeTextdomain(string $domain, string|false $path = false): bool
    {
        return load_theme_textdomain($domain, $path);
    }

    /**
     * @inheritDoc
     */
    public function loadChildThemeTextdomain(string $domain, string|false $path = false): bool
    {
        return load_child_theme_textdomain($domain, $path);
    }

    /**
     * @inheritDoc
     */
    public function loadScriptTextdomain(string $handle, string $domain = 'default', string $path = ''): string|false
    {
        return load_script_textdomain($handle, $domain, $path);
    }

    /**
     * @inheritDoc
     */
    public function loadScriptTranslations(string|false $file, string $handle, string $domain): string|false
    {
        return load_script_translations($file, $handle, $domain);
    }

    /**
     * @inheritDoc
     */
    public function getTranslationsForDomain(string $domain): \Translations|\NOOP_Translations
    {
        return get_translations_for_domain($domain);
    }

    /**
     * @inheritDoc
     */
    public function isTextdomainLoaded(string $domain): bool
    {
        return is_textdomain_loaded($domain);
    }

    /**
     * @inheritDoc
     */
    public function translateUserRole(string $name, string $domain = 'default'): string
    {
        return translate_user_role($name, $domain);
    }

    /**
     * @inheritDoc
     */
    public function getAvailableLanguages(string $dir = null): array
    {
        return get_available_languages($dir);
    }

    /**
     * @inheritDoc
     */
    public function wpGetInstalledTranslations(string $type): array
    {
        return wp_get_installed_translations($type);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPomoFileData(string $poFile): array
    {
        return wp_get_pomo_file_data($poFile);
    }

    /**
     * @inheritDoc
     */
    public function wpGetL10nPhpFileData(string $phpFile): array
    {
        return wp_get_l10n_php_file_data($phpFile);
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownLanguages(string|array $args = []): string
    {
        return wp_dropdown_languages($args);
    }

    /**
     * @inheritDoc
     */
    public function isRtl(): bool
    {
        return is_rtl();
    }

    /**
     * @inheritDoc
     */
    public function switchToLocale(string $locale): bool
    {
        return switch_to_locale($locale);
    }

    /**
     * @inheritDoc
     */
    public function switchToUserLocale(int $userId): bool
    {
        return switch_to_user_locale($userId);
    }

    /**
     * @inheritDoc
     */
    public function restorePreviousLocale(): string|false
    {
        return restore_previous_locale();
    }

    /**
     * @inheritDoc
     */
    public function restoreCurrentLocale(): string|false
    {
        return restore_current_locale();
    }

    /**
     * @inheritDoc
     */
    public function isLocaleSwitched(): bool
    {
        return is_locale_switched();
    }

    /**
     * @inheritDoc
     */
    public function wpGetListItemSeparator(): string
    {
        return wp_get_list_item_separator();
    }

    /**
     * @inheritDoc
     */
    public function wpGetWordCountType(): string
    {
        return wp_get_word_count_type();
    }

    /**
     * @inheritDoc
     */
    public function thePermalink(int|\WP_Post $post = 0): void
    {
        the_permalink($post);
    }

    /**
     * @inheritDoc
     */
    public function userTrailingslashit(string $url, string $typeOfUrl = ''): string
    {
        return user_trailingslashit($url, $typeOfUrl);
    }

    /**
     * @inheritDoc
     */
    public function permalinkAnchor(string $mode = 'id'): void
    {
        permalink_anchor($mode);
    }

    /**
     * @inheritDoc
     */
    public function wpForcePlainPostPermalink(\WP_Post|int|null $post = null, bool|null $sample = null): bool
    {
        return wp_force_plain_post_permalink($post, $sample);
    }

    /**
     * @inheritDoc
     */
    public function getThePermalink(int|\WP_Post $post = 0, bool $leavename = false): string|false
    {
        return get_the_permalink($post, $leavename);
    }

    /**
     * @inheritDoc
     */
    public function getPermalink(int|\WP_Post $post = 0, bool $leavename = false): string|false
    {
        return get_permalink($post, $leavename);
    }

    /**
     * @inheritDoc
     */
    public function getPostPermalink(int|\WP_Post $post = 0, bool $leavename = false, bool $sample = false): string|false
    {
        return get_post_permalink($post, $leavename, $sample);
    }

    /**
     * @inheritDoc
     */
    public function getPageLink(int|\WP_Post|false $post = false, bool $leavename = false, bool $sample = false): string
    {
        return get_page_link($post, $leavename, $sample);
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentLink(int|\WP_Post $post = null, bool $leavename = false): string
    {
        return get_attachment_link($post, $leavename);
    }

    /**
     * @inheritDoc
     */
    public function getYearLink(int|false $year): string
    {
        return get_year_link($year);
    }

    /**
     * @inheritDoc
     */
    public function getMonthLink(int|false $year, int|false $month): string
    {
        return get_month_link($year, $month);
    }

    /**
     * @inheritDoc
     */
    public function getDayLink(int|false $year, int|false $month, int|false $day): string
    {
        return get_day_link($year, $month, $day);
    }

    /**
     * @inheritDoc
     */
    public function theFeedLink(string $anchor, string $feed = ''): void
    {
        the_feed_link($anchor, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getFeedLink(string $feed = ''): string
    {
        return get_feed_link($feed);
    }

    /**
     * @inheritDoc
     */
    public function getPostCommentsFeedLink(int $postId = 0, string $feed = ''): string
    {
        return get_post_comments_feed_link($postId, $feed);
    }

    /**
     * @inheritDoc
     */
    public function postCommentsFeedLink(string $linkText = '', int|string $postId = '', string $feed = ''): void
    {
        post_comments_feed_link($linkText, $postId, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getAuthorFeedLink(int $authorId, string $feed = ''): string
    {
        return get_author_feed_link($authorId, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getCategoryFeedLink(int|object $cat, string $feed = ''): string
    {
        return get_category_feed_link($cat, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getTermFeedLink(int|object $term, string $taxonomy = '', string $feed = ''): string|false
    {
        return get_term_feed_link($term, $taxonomy, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getTagFeedLink(int|object $tag, string $feed = ''): string
    {
        return get_tag_feed_link($tag, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getEditTagLink(int|object $tag, string $taxonomy = 'post_tag'): string
    {
        return get_edit_tag_link($tag, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function editTagLink(string $link = '', string $before = '', string $after = '', \WP_Term $tag = null): void
    {
        edit_tag_link($link, $before, $after, $tag);
    }

    /**
     * @inheritDoc
     */
    public function getEditTermLink(int|object $term, string $taxonomy = '', string $objectType = ''): string|null
    {
        return get_edit_term_link($term, $taxonomy, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function editTermLink(string $link = '', string $before = '', string $after = '', int|\WP_Term|null $term = null, bool $display = true): mixed
    {
        return edit_term_link($link, $before, $after, $term, $display);
    }

    /**
     * @inheritDoc
     */
    public function getSearchLink(string $query = ''): string
    {
        return get_search_link($query);
    }

    /**
     * @inheritDoc
     */
    public function getSearchFeedLink(string $searchQuery = '', string $feed = ''): string
    {
        return get_search_feed_link($searchQuery, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getSearchCommentsFeedLink(string $searchQuery = '', string $feed = ''): string
    {
        return get_search_comments_feed_link($searchQuery, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveLink(string $postType): string|false
    {
        return get_post_type_archive_link($postType);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveFeedLink(string $postType, string $feed = ''): string|false
    {
        return get_post_type_archive_feed_link($postType, $feed);
    }

    /**
     * @inheritDoc
     */
    public function getPreviewPostLink(int|\WP_Post $post = null, array $queryArgs = [], string $previewLink = ''): string|null
    {
        return get_preview_post_link($post, $queryArgs, $previewLink);
    }

    /**
     * @inheritDoc
     */
    public function getEditPostLink(int|\WP_Post $post = 0, string $context = 'display'): string|null
    {
        return get_edit_post_link($post, $context);
    }

    /**
     * @inheritDoc
     */
    public function editPostLink(string $text = null, string $before = '', string $after = '', int|\WP_Post $post = 0, string $cssClass = 'post-edit-link'): void
    {
        edit_post_link($text, $before, $after, $post, $cssClass);
    }

    /**
     * @inheritDoc
     */
    public function getDeletePostLink(int|\WP_Post $post = 0, string $deprecated = '', bool $forceDelete = false): mixed
    {
        return get_delete_post_link($post, $deprecated, $forceDelete);
    }

    /**
     * @inheritDoc
     */
    public function getEditCommentLink(int|\WP_Comment $commentId = 0): mixed
    {
        return get_edit_comment_link($commentId);
    }

    /**
     * @inheritDoc
     */
    public function editCommentLink(string $text = null, string $before = '', string $after = ''): void
    {
        edit_comment_link($text, $before, $after);
    }

    /**
     * @inheritDoc
     */
    public function getEditBookmarkLink(int|\stdClass $link = 0): mixed
    {
        return get_edit_bookmark_link($link);
    }

    /**
     * @inheritDoc
     */
    public function editBookmarkLink(string $link = '', string $before = '', string $after = '', int $bookmark = null): void
    {
        edit_bookmark_link($link, $before, $after, $bookmark);
    }

    /**
     * @inheritDoc
     */
    public function getEditUserLink(int $userId = null): string
    {
        return get_edit_user_link($userId);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPost(bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): \WP_Post|null|string
    {
        return get_previous_post($inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getNextPost(bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): \WP_Post|null|string
    {
        return get_next_post($inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPost(bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): \WP_Post|null|string
    {
        return get_adjacent_post($inSameTerm, $excludedTerms, $previous, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): mixed
    {
        return get_adjacent_post_rel_link($title, $inSameTerm, $excludedTerms, $previous, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostsRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        adjacent_posts_rel_link($title, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostsRelLinkWpHead(): void
    {
        adjacent_posts_rel_link_wp_head();
    }

    /**
     * @inheritDoc
     */
    public function nextPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        next_post_rel_link($title, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function prevPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        prev_post_rel_link($title, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getBoundaryPost(bool $inSameTerm = false, array|string $excludedTerms = '', bool $start = true, string $taxonomy = 'category'): array|null
    {
        return get_boundary_post($inSameTerm, $excludedTerms, $start, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostLink(string $format = '&laquo; %link', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string
    {
        return get_previous_post_link($format, $link, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function previousPostLink(string $format = '&laquo; %link', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        previous_post_link($format, $link, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getNextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string
    {
        return get_next_post_link($format, $link, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function nextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void
    {
        next_post_link($format, $link, $inSameTerm, $excludedTerms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentPostLink(string $format, string $link, bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): string
    {
        return get_adjacent_post_link($format, $link, $inSameTerm, $excludedTerms, $previous, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function adjacentPostLink(string $format, string $link, bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): void
    {
        adjacent_post_link($format, $link, $inSameTerm, $excludedTerms, $previous, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getPagenumLink(int $pagenum = 1, bool $escape = true): string
    {
        return get_pagenum_link($pagenum, $escape);
    }

    /**
     * @inheritDoc
     */
    public function getNextPostsPageLink(int $maxPage = 0): mixed
    {
        return get_next_posts_page_link($maxPage);
    }

    /**
     * @inheritDoc
     */
    public function nextPosts(int $maxPage = 0, bool $display = true): mixed
    {
        return next_posts($maxPage, $display);
    }

    /**
     * @inheritDoc
     */
    public function getNextPostsLink(string $label = null, int $maxPage = 0): mixed
    {
        return get_next_posts_link($label, $maxPage);
    }

    /**
     * @inheritDoc
     */
    public function nextPostsLink(string $label = null, int $maxPage = 0): void
    {
        next_posts_link($label, $maxPage);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostsPageLink(): mixed
    {
        return get_previous_posts_page_link();
    }

    /**
     * @inheritDoc
     */
    public function previousPosts(bool $display = true): mixed
    {
        return previous_posts($display);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousPostsLink(string $label = null): mixed
    {
        return get_previous_posts_link($label);
    }

    /**
     * @inheritDoc
     */
    public function previousPostsLink(string $label = null): void
    {
        previous_posts_link($label);
    }

    /**
     * @inheritDoc
     */
    public function getPostsNavLink(string|array $args = []): string
    {
        return get_posts_nav_link($args);
    }

    /**
     * @inheritDoc
     */
    public function postsNavLink(string $sep = '', string $prelabel = '', string $nxtlabel = ''): void
    {
        posts_nav_link($sep, $prelabel, $nxtlabel);
    }

    /**
     * @inheritDoc
     */
    public function getThePostNavigation(array $args = []): string
    {
        return get_the_post_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function thePostNavigation(array $args = []): void
    {
        the_post_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function getThePostsNavigation(array $args = []): string
    {
        return get_the_posts_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function thePostsNavigation(array $args = []): void
    {
        the_posts_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function getThePostsPagination(array $args = []): string
    {
        return get_the_posts_pagination($args);
    }

    /**
     * @inheritDoc
     */
    public function thePostsPagination(array $args = []): void
    {
        the_posts_pagination($args);
    }

    /**
     * @inheritDoc
     */
    public function getCommentsPagenumLink(int $pagenum = 1, int $maxPage = 0): string
    {
        return get_comments_pagenum_link($pagenum, $maxPage);
    }

    /**
     * @inheritDoc
     */
    public function getNextCommentsLink(string $label = '', int $maxPage = 0): mixed
    {
        return get_next_comments_link($label, $maxPage);
    }

    /**
     * @inheritDoc
     */
    public function nextCommentsLink(string $label = '', int $maxPage = 0): void
    {
        next_comments_link($label, $maxPage);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousCommentsLink(string $label = ''): mixed
    {
        return get_previous_comments_link($label);
    }

    /**
     * @inheritDoc
     */
    public function previousCommentsLink(string $label = ''): void
    {
        previous_comments_link($label);
    }

    /**
     * @inheritDoc
     */
    public function paginateCommentsLinks(string|array $args = []): mixed
    {
        return paginate_comments_links($args);
    }

    /**
     * @inheritDoc
     */
    public function getTheCommentsNavigation(array $args = []): string
    {
        return get_the_comments_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function theCommentsNavigation(array $args = []): void
    {
        the_comments_navigation($args);
    }

    /**
     * @inheritDoc
     */
    public function getTheCommentsPagination(array $args = []): string
    {
        return get_the_comments_pagination($args);
    }

    /**
     * @inheritDoc
     */
    public function theCommentsPagination(array $args = []): void
    {
        the_comments_pagination($args);
    }

    /**
     * @inheritDoc
     */
    public function homeUrl(string $path = '', string|null $scheme = null): string
    {
        return home_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function getHomeUrl(int|null $blogId = null, string $path = '', string|null $scheme = null): string
    {
        return get_home_url($blogId, $path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function siteUrl(string $path = '', string|null $scheme = null): string
    {
        return site_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function getSiteUrl(int|null $blogId = null, string $path = '', string|null $scheme = null): string
    {
        return get_site_url($blogId, $path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function adminUrl(string $path = '', string $scheme = 'admin'): string
    {
        return admin_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function getAdminUrl(int|null $blogId = null, string $path = '', string $scheme = 'admin'): string
    {
        return get_admin_url($blogId, $path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function includesUrl(string $path = '', string|null $scheme = null): string
    {
        return includes_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function contentUrl(string $path = ''): string
    {
        return content_url($path);
    }

    /**
     * @inheritDoc
     */
    public function pluginsUrl(string $path = '', string $plugin = ''): string
    {
        return plugins_url($path, $plugin);
    }

    /**
     * @inheritDoc
     */
    public function networkSiteUrl(string $path = '', string|null $scheme = null): string
    {
        return network_site_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function networkHomeUrl(string $path = '', string|null $scheme = null): string
    {
        return network_home_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function networkAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        return network_admin_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function userAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        return user_admin_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function selfAdminUrl(string $path = '', string $scheme = 'admin'): string
    {
        return self_admin_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function setUrlScheme(string $url, string|null $scheme = null): string
    {
        return set_url_scheme($url, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function getDashboardUrl(int $userId = 0, string $path = '', string $scheme = 'admin'): string
    {
        return get_dashboard_url($userId, $path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function getEditProfileUrl(int $userId = 0, string $scheme = 'admin'): string
    {
        return get_edit_profile_url($userId, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCanonicalUrl(int|\WP_Post $post = null): string|false
    {
        return wp_get_canonical_url($post);
    }

    /**
     * @inheritDoc
     */
    public function relCanonical(): void
    {
        rel_canonical();
    }

    /**
     * @inheritDoc
     */
    public function wpGetShortlink(int $id = 0, string $context = 'post', bool $allowSlugs = true): string
    {
        return wp_get_shortlink($id, $context, $allowSlugs);
    }

    /**
     * @inheritDoc
     */
    public function wpShortlinkWpHead(): void
    {
        wp_shortlink_wp_head();
    }

    /**
     * @inheritDoc
     */
    public function wpShortlinkHeader(): void
    {
        wp_shortlink_header();
    }

    /**
     * @inheritDoc
     */
    public function theShortlink(string $text = '', string $title = '', string $before = '', string $after = ''): void
    {
        the_shortlink($text, $title, $before, $after);
    }

    /**
     * @inheritDoc
     */
    public function getAvatarUrl(mixed $idOrEmail, array $args = null): string|false
    {
        return get_avatar_url($idOrEmail, $args);
    }

    /**
     * @inheritDoc
     */
    public function isAvatarCommentType(string $commentType): bool
    {
        return is_avatar_comment_type($commentType);
    }

    /**
     * @inheritDoc
     */
    public function getAvatarData(mixed $idOrEmail, array $args = null): array
    {
        return get_avatar_data($idOrEmail, $args);
    }

    /**
     * @inheritDoc
     */
    public function getThemeFileUri(string $file = ''): string
    {
        return get_theme_file_uri($file);
    }

    /**
     * @inheritDoc
     */
    public function getParentThemeFileUri(string $file = ''): string
    {
        return get_parent_theme_file_uri($file);
    }

    /**
     * @inheritDoc
     */
    public function getThemeFilePath(string $file = ''): string
    {
        return get_theme_file_path($file);
    }

    /**
     * @inheritDoc
     */
    public function getParentThemeFilePath(string $file = ''): string
    {
        return get_parent_theme_file_path($file);
    }

    /**
     * @inheritDoc
     */
    public function getPrivacyPolicyUrl(): string
    {
        return get_privacy_policy_url();
    }

    /**
     * @inheritDoc
     */
    public function thePrivacyPolicyLink(string $before = '', string $after = ''): void
    {
        the_privacy_policy_link($before, $after);
    }

    /**
     * @inheritDoc
     */
    public function getThePrivacyPolicyLink(string $before = '', string $after = ''): string
    {
        return get_the_privacy_policy_link($before, $after);
    }

    /**
     * @inheritDoc
     */
    public function wpInternalHosts(): array
    {
        return wp_internal_hosts();
    }

    /**
     * @inheritDoc
     */
    public function wpIsInternalLink(string $link): bool
    {
        return wp_is_internal_link($link);
    }

    /**
     * @inheritDoc
     */
    public function wpGetServerProtocol(): string
    {
        return wp_get_server_protocol();
    }

    /**
     * @inheritDoc
     */
    public function wpPopulateBasicAuthFromAuthorizationHeader(): void
    {
        wp_populate_basic_auth_from_authorization_header();
    }

    /**
     * @inheritDoc
     */
    public function wpGetEnvironmentType(): string
    {
        return wp_get_environment_type();
    }

    /**
     * @inheritDoc
     */
    public function wpGetDevelopmentMode(): string
    {
        return wp_get_development_mode();
    }

    /**
     * @inheritDoc
     */
    public function wpIsDevelopmentMode(string $mode): bool
    {
        return wp_is_development_mode($mode);
    }

    /**
     * @inheritDoc
     */
    public function wpIsMaintenanceMode(): bool
    {
        return wp_is_maintenance_mode();
    }

    /**
     * @inheritDoc
     */
    public function timerFloat(): float
    {
        return timer_float();
    }

    /**
     * @inheritDoc
     */
    public function timerStop(int|bool $display = 0, int $precision = 3): string
    {
        return timer_stop($display, $precision);
    }

    /**
     * @inheritDoc
     */
    public function requireWpDb(): void
    {
        require_wp_db();
    }

    /**
     * @inheritDoc
     */
    public function wpUsingExtObjectCache(bool $using = null): bool
    {
        return wp_using_ext_object_cache($using);
    }

    /**
     * @inheritDoc
     */
    public function wpSkipPausedPlugins(array $plugins): array
    {
        return wp_skip_paused_plugins($plugins);
    }

    /**
     * @inheritDoc
     */
    public function wpSkipPausedThemes(array $themes): array
    {
        return wp_skip_paused_themes($themes);
    }

    /**
     * @inheritDoc
     */
    public function wpIsRecoveryMode(): bool
    {
        return wp_is_recovery_mode();
    }

    /**
     * @inheritDoc
     */
    public function isProtectedEndpoint(): bool
    {
        return is_protected_endpoint();
    }

    /**
     * @inheritDoc
     */
    public function isProtectedAjaxAction(): bool
    {
        return is_protected_ajax_action();
    }

    /**
     * @inheritDoc
     */
    public function isLogin(): bool
    {
        return is_login();
    }

    /**
     * @inheritDoc
     */
    public function isAdmin(): bool
    {
        return is_admin();
    }

    /**
     * @inheritDoc
     */
    public function isBlogAdmin(): bool
    {
        return is_blog_admin();
    }

    /**
     * @inheritDoc
     */
    public function isNetworkAdmin(): bool
    {
        return is_network_admin();
    }

    /**
     * @inheritDoc
     */
    public function isUserAdmin(): bool
    {
        return is_user_admin();
    }

    /**
     * @inheritDoc
     */
    public function isMultisite(): bool
    {
        return is_multisite();
    }

    /**
     * @inheritDoc
     */
    public function getCurrentBlogId(): int
    {
        return get_current_blog_id();
    }

    /**
     * @inheritDoc
     */
    public function getCurrentNetworkId(): int
    {
        return get_current_network_id();
    }

    /**
     * @inheritDoc
     */
    public function wpInstalling(bool $isInstalling = null): bool
    {
        return wp_installing($isInstalling);
    }

    /**
     * @inheritDoc
     */
    public function isSsl(): bool
    {
        return is_ssl();
    }

    /**
     * @inheritDoc
     */
    public function wpConvertHrToBytes(string $value): int
    {
        return wp_convert_hr_to_bytes($value);
    }

    /**
     * @inheritDoc
     */
    public function wpIsIniValueChangeable(string $setting): bool
    {
        return wp_is_ini_value_changeable($setting);
    }

    /**
     * @inheritDoc
     */
    public function wpDoingAjax(): bool
    {
        return wp_doing_ajax();
    }

    /**
     * @inheritDoc
     */
    public function wpUsingThemes(): bool
    {
        return wp_using_themes();
    }

    /**
     * @inheritDoc
     */
    public function wpDoingCron(): bool
    {
        return wp_doing_cron();
    }

    /**
     * @inheritDoc
     */
    public function isWpError(mixed $thing): bool
    {
        return is_wp_error($thing);
    }

    /**
     * @inheritDoc
     */
    public function wpIsFileModAllowed(string $context): bool
    {
        return wp_is_file_mod_allowed($context);
    }

    /**
     * @inheritDoc
     */
    public function wpStartScrapingEditedFileErrors(): void
    {
        wp_start_scraping_edited_file_errors();
    }

    /**
     * @inheritDoc
     */
    public function wpFinalizeScrapingEditedFileErrors(string $scrapeKey): void
    {
        wp_finalize_scraping_edited_file_errors($scrapeKey);
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonRequest(): bool
    {
        return wp_is_json_request();
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonpRequest(): bool
    {
        return wp_is_jsonp_request();
    }

    /**
     * @inheritDoc
     */
    public function wpIsJsonMediaType(string $mediaType): bool
    {
        return wp_is_json_media_type($mediaType);
    }

    /**
     * @inheritDoc
     */
    public function wpIsXmlRequest(): bool
    {
        return wp_is_xml_request();
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteProtectedByBasicAuth(string $context = ''): bool
    {
        return wp_is_site_protected_by_basic_auth($context);
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscoreAudioTemplate(): void
    {
        wp_underscore_audio_template();
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscoreVideoTemplate(): void
    {
        wp_underscore_video_template();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintMediaTemplates(): void
    {
        wp_print_media_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpGetAdditionalImageSizes(): array
    {
        return wp_get_additional_image_sizes();
    }

    /**
     * @inheritDoc
     */
    public function imageConstrainSizeForEditor(int $width, int $height, string|array $size = 'medium', string $context = null): array
    {
        return image_constrain_size_for_editor($width, $height, $size, $context);
    }

    /**
     * @inheritDoc
     */
    public function imageHwstring(int|string $width, int|string $height): string
    {
        return image_hwstring($width, $height);
    }

    /**
     * @inheritDoc
     */
    public function imageDownsize(int $id, string|array $size = 'medium'): array|false
    {
        return image_downsize($id, $size);
    }

    /**
     * @inheritDoc
     */
    public function addImageSize(string $name, int $width = 0, int $height = 0, bool|array $crop = false): void
    {
        add_image_size($name, $width, $height, $crop);
    }

    /**
     * @inheritDoc
     */
    public function hasImageSize(string $name): bool
    {
        return has_image_size($name);
    }

    /**
     * @inheritDoc
     */
    public function removeImageSize(string $name): bool
    {
        return remove_image_size($name);
    }

    /**
     * @inheritDoc
     */
    public function setPostThumbnailSize(int $width = 0, int $height = 0, bool|array $crop = false): void
    {
        set_post_thumbnail_size($width, $height, $crop);
    }

    /**
     * @inheritDoc
     */
    public function getImageTag(int $id, string $alt, string $title, string $align, string|array $size = 'medium'): string
    {
        return get_image_tag($id, $alt, $title, $align, $size);
    }

    /**
     * @inheritDoc
     */
    public function wpConstrainDimensions(int $currentWidth, int $currentHeight, int $maxWidth = 0, int $maxHeight = 0): array
    {
        return wp_constrain_dimensions($currentWidth, $currentHeight, $maxWidth, $maxHeight);
    }

    /**
     * @inheritDoc
     */
    public function imageResizeDimensions(int $origW, int $origH, int $destW, int $destH, bool|array $crop = false): array|false
    {
        return image_resize_dimensions($origW, $origH, $destW, $destH, $crop);
    }

    /**
     * @inheritDoc
     */
    public function imageMakeIntermediateSize(string $file, int $width, int $height, bool|array $crop = false): array|false
    {
        return image_make_intermediate_size($file, $width, $height, $crop);
    }

    /**
     * @inheritDoc
     */
    public function wpImageMatchesRatio(int $sourceWidth, int $sourceHeight, int $targetWidth, int $targetHeight): bool
    {
        return wp_image_matches_ratio($sourceWidth, $sourceHeight, $targetWidth, $targetHeight);
    }

    /**
     * @inheritDoc
     */
    public function imageGetIntermediateSize(int $postId, string|array $size = 'thumbnail'): array|false
    {
        return image_get_intermediate_size($postId, $size);
    }

    /**
     * @inheritDoc
     */
    public function getIntermediateImageSizes(): array
    {
        return get_intermediate_image_sizes();
    }

    /**
     * @inheritDoc
     */
    public function wpGetRegisteredImageSubsizes(): array
    {
        return wp_get_registered_image_subsizes();
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSrc(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): array|false
    {
        return wp_get_attachment_image_src($attachmentId, $size, $icon);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImage(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false, string|array $attr = ''): string
    {
        return wp_get_attachment_image($attachmentId, $size, $icon, $attr);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageUrl(int $attachmentId, string|array $size = 'thumbnail', bool $icon = false): string|false
    {
        return wp_get_attachment_image_url($attachmentId, $size, $icon);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSrcset(int $attachmentId, string|array $size = 'medium', array|null $imageMeta = null): string|false
    {
        return wp_get_attachment_image_srcset($attachmentId, $size, $imageMeta);
    }

    /**
     * @inheritDoc
     */
    public function wpCalculateImageSrcset(array $sizeArray, string $imageSrc, array $imageMeta, int $attachmentId = 0): string|false
    {
        return wp_calculate_image_srcset($sizeArray, $imageSrc, $imageMeta, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentImageSizes(int $attachmentId, string|array $size = 'medium', array|null $imageMeta = null): string|false
    {
        return wp_get_attachment_image_sizes($attachmentId, $size, $imageMeta);
    }

    /**
     * @inheritDoc
     */
    public function wpCalculateImageSizes(string|array $size, string|null $imageSrc = null, array|null $imageMeta = null, int $attachmentId = 0): string|false
    {
        return wp_calculate_image_sizes($size, $imageSrc, $imageMeta, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpImageFileMatchesImageMeta(string $imageLocation, array $imageMeta, int $attachmentId = 0): bool
    {
        return wp_image_file_matches_image_meta($imageLocation, $imageMeta, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpImageSrcGetDimensions(string $imageSrc, array $imageMeta, int $attachmentId = 0): array|false
    {
        return wp_image_src_get_dimensions($imageSrc, $imageMeta, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpImageAddSrcsetAndSizes(string $image, array $imageMeta, int $attachmentId): string
    {
        return wp_image_add_srcset_and_sizes($image, $imageMeta, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpLazyLoadingEnabled(string $tagName, string $context): bool
    {
        return wp_lazy_loading_enabled($tagName, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpFilterContentTags(string $content, string $context = null): string
    {
        return wp_filter_content_tags($content, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddLoadingOptimizationAttrs(string $image, string $context): string
    {
        return wp_img_tag_add_loading_optimization_attrs($image, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddWidthAndHeightAttr(string $image, string $context, int $attachmentId): string
    {
        return wp_img_tag_add_width_and_height_attr($image, $context, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpImgTagAddSrcsetAndSizesAttr(string $image, string $context, int $attachmentId): string
    {
        return wp_img_tag_add_srcset_and_sizes_attr($image, $context, $attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpIframeTagAddLoadingAttr(string $iframe, string $context): string
    {
        return wp_iframe_tag_add_loading_attr($iframe, $context);
    }

    /**
     * @inheritDoc
     */
    public function imgCaptionShortcode(array $attr, string $content = ''): string
    {
        return img_caption_shortcode($attr, $content);
    }

    /**
     * @inheritDoc
     */
    public function galleryShortcode(array $attr): string
    {
        return gallery_shortcode($attr);
    }

    /**
     * @inheritDoc
     */
    public function wpUnderscorePlaylistTemplates(): void
    {
        wp_underscore_playlist_templates();
    }

    /**
     * @inheritDoc
     */
    public function wpPlaylistScripts(string $type): void
    {
        wp_playlist_scripts($type);
    }

    /**
     * @inheritDoc
     */
    public function wpPlaylistShortcode(array $attr): string
    {
        return wp_playlist_shortcode($attr);
    }

    /**
     * @inheritDoc
     */
    public function wpMediaelementFallback(string $url): string
    {
        return wp_mediaelement_fallback($url);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAudioExtensions(): array
    {
        return wp_get_audio_extensions();
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentId3Keys(\WP_Post $attachment, string $context = 'display'): array
    {
        return wp_get_attachment_id3_keys($attachment, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpAudioShortcode(array $attr, string $content = ''): mixed
    {
        return wp_audio_shortcode($attr, $content);
    }

    /**
     * @inheritDoc
     */
    public function wpGetVideoExtensions(): array
    {
        return wp_get_video_extensions();
    }

    /**
     * @inheritDoc
     */
    public function wpVideoShortcode(array $attr, string $content = ''): mixed
    {
        return wp_video_shortcode($attr, $content);
    }

    /**
     * @inheritDoc
     */
    public function getPreviousImageLink(string|array $size = 'thumbnail', string|false $text = false): string
    {
        return get_previous_image_link($size, $text);
    }

    /**
     * @inheritDoc
     */
    public function previousImageLink(string|array $size = 'thumbnail', string|false $text = false): void
    {
        previous_image_link($size, $text);
    }

    /**
     * @inheritDoc
     */
    public function getNextImageLink(string|array $size = 'thumbnail', string|false $text = false): string
    {
        return get_next_image_link($size, $text);
    }

    /**
     * @inheritDoc
     */
    public function nextImageLink(string|array $size = 'thumbnail', string|false $text = false): void
    {
        next_image_link($size, $text);
    }

    /**
     * @inheritDoc
     */
    public function getAdjacentImageLink(bool $prev = true, string|array $size = 'thumbnail', bool $text = false): string
    {
        return get_adjacent_image_link($prev, $size, $text);
    }

    /**
     * @inheritDoc
     */
    public function adjacentImageLink(bool $prev = true, string|array $size = 'thumbnail', bool $text = false): void
    {
        adjacent_image_link($prev, $size, $text);
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentTaxonomies(int|array|object $attachment, string $output = 'names'): array
    {
        return get_attachment_taxonomies($attachment, $output);
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomiesForAttachments(string $output = 'names'): array
    {
        return get_taxonomies_for_attachments($output);
    }

    /**
     * @inheritDoc
     */
    public function isGdImage(\resource|\GdImage|false $image): bool
    {
        return is_gd_image($image);
    }

    /**
     * @inheritDoc
     */
    public function wpImagecreatetruecolor(int $width, int $height): \resource|\GdImage|false
    {
        return wp_imagecreatetruecolor($width, $height);
    }

    /**
     * @inheritDoc
     */
    public function wpExpandDimensions(int $exampleWidth, int $exampleHeight, int $maxWidth, int $maxHeight): array
    {
        return wp_expand_dimensions($exampleWidth, $exampleHeight, $maxWidth, $maxHeight);
    }

    /**
     * @inheritDoc
     */
    public function wpMaxUploadSize(): int
    {
        return wp_max_upload_size();
    }

    /**
     * @inheritDoc
     */
    public function wpGetImageEditor(string $path, array $args = []): \WP_Image_Editor|\WP_Error
    {
        return wp_get_image_editor($path, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpImageEditorSupports(string|array $args = []): bool
    {
        return wp_image_editor_supports($args);
    }

    /**
     * @inheritDoc
     */
    public function wpPluploadDefaultSettings(): void
    {
        wp_plupload_default_settings();
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareAttachmentForJs(int|\WP_Post $attachment): mixed
    {
        return wp_prepare_attachment_for_js($attachment);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueMedia(array $args = []): void
    {
        wp_enqueue_media($args);
    }

    /**
     * @inheritDoc
     */
    public function getAttachedMedia(string $type, int|\WP_Post $post = 0): array
    {
        return get_attached_media($type, $post);
    }

    /**
     * @inheritDoc
     */
    public function getMediaEmbeddedInContent(string $content, array $types = null): array
    {
        return get_media_embedded_in_content($content, $types);
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleries(int|\WP_Post $post, bool $html = true): array
    {
        return get_post_galleries($post, $html);
    }

    /**
     * @inheritDoc
     */
    public function getPostGallery(int|\WP_Post $post = 0, bool $html = true): string|array
    {
        return get_post_gallery($post, $html);
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleriesImages(int|\WP_Post $post = 0): array
    {
        return get_post_galleries_images($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostGalleryImages(int|\WP_Post $post = 0): array
    {
        return get_post_gallery_images($post);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeGenerateAttachmentMetadata(\WP_Post $attachment): void
    {
        wp_maybe_generate_attachment_metadata($attachment);
    }

    /**
     * @inheritDoc
     */
    public function attachmentUrlToPostid(string $url): int
    {
        return attachment_url_to_postid($url);
    }

    /**
     * @inheritDoc
     */
    public function wpviewMediaSandboxStyles(): array
    {
        return wpview_media_sandbox_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterMediaPersonalDataExporter(array $exporters): array
    {
        return wp_register_media_personal_data_exporter($exporters);
    }

    /**
     * @inheritDoc
     */
    public function wpMediaPersonalDataExporter(string $emailAddress, int $page = 1): array
    {
        return wp_media_personal_data_exporter($emailAddress, $page);
    }

    /**
     * @inheritDoc
     */
    public function wpShowHeicUploadError(array $pluploadSettings): array
    {
        return wp_show_heic_upload_error($pluploadSettings);
    }

    /**
     * @inheritDoc
     */
    public function wpGetimagesize(string $filename, array &$imageInfo = null): array|false
    {
        return wp_getimagesize($filename, $imageInfo);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAvifInfo(string $filename): array
    {
        return wp_get_avif_info($filename);
    }

    /**
     * @inheritDoc
     */
    public function wpGetWebpInfo(string $filename): array
    {
        return wp_get_webp_info($filename);
    }

    /**
     * @inheritDoc
     */
    public function wpGetLoadingOptimizationAttributes(string $tagName, array $attr, string $context): array
    {
        return wp_get_loading_optimization_attributes($tagName, $attr, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpOmitLoadingAttrThreshold(bool $force = false): int
    {
        return wp_omit_loading_attr_threshold($force);
    }

    /**
     * @inheritDoc
     */
    public function addMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        return add_metadata($metaType, $objectId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function updateMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        return update_metadata($metaType, $objectId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function deleteMetadata(string $metaType, int $objectId, string $metaKey, mixed $metaValue = '', bool $deleteAll = false): bool
    {
        return delete_metadata($metaType, $objectId, $metaKey, $metaValue, $deleteAll);
    }

    /**
     * @inheritDoc
     */
    public function getMetadata(string $metaType, int $objectId, string $metaKey = '', bool $single = false): mixed
    {
        return get_metadata($metaType, $objectId, $metaKey, $single);
    }

    /**
     * @inheritDoc
     */
    public function getMetadataRaw(string $metaType, int $objectId, string $metaKey = '', bool $single = false): mixed
    {
        return get_metadata_raw($metaType, $objectId, $metaKey, $single);
    }

    /**
     * @inheritDoc
     */
    public function getMetadataDefault(string $metaType, int $objectId, string $metaKey, bool $single = false): mixed
    {
        return get_metadata_default($metaType, $objectId, $metaKey, $single);
    }

    /**
     * @inheritDoc
     */
    public function metadataExists(string $metaType, int $objectId, string $metaKey): bool
    {
        return metadata_exists($metaType, $objectId, $metaKey);
    }

    /**
     * @inheritDoc
     */
    public function getMetadataByMid(string $metaType, int $metaId): \stdClass|false
    {
        return get_metadata_by_mid($metaType, $metaId);
    }

    /**
     * @inheritDoc
     */
    public function updateMetadataByMid(string $metaType, int $metaId, string $metaValue, string|false $metaKey = false): bool
    {
        return update_metadata_by_mid($metaType, $metaId, $metaValue, $metaKey);
    }

    /**
     * @inheritDoc
     */
    public function deleteMetadataByMid(string $metaType, int $metaId): bool
    {
        return delete_metadata_by_mid($metaType, $metaId);
    }

    /**
     * @inheritDoc
     */
    public function updateMetaCache(string $metaType, string|array $objectIds): array|false
    {
        return update_meta_cache($metaType, $objectIds);
    }

    /**
     * @inheritDoc
     */
    public function wpMetadataLazyloader(): \WP_Metadata_Lazyloader
    {
        return wp_metadata_lazyloader();
    }

    /**
     * @inheritDoc
     */
    public function getMetaSql(array $metaQuery, string $type, string $primaryTable, string $primaryIdColumn, object $context = null): array|false
    {
        return get_meta_sql($metaQuery, $type, $primaryTable, $primaryIdColumn, $context);
    }

    /**
     * @inheritDoc
     */
    public function isProtectedMeta(string $metaKey, string $metaType = ''): bool
    {
        return is_protected_meta($metaKey, $metaType);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeMeta(string $metaKey, mixed $metaValue, string $objectType, string $objectSubtype = ''): mixed
    {
        return sanitize_meta($metaKey, $metaValue, $objectType, $objectSubtype);
    }

    /**
     * @inheritDoc
     */
    public function registerMeta(string $objectType, string $metaKey, array $args, string|array $deprecated = null): bool
    {
        return register_meta($objectType, $metaKey, $args, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function filterDefaultMetadata(mixed $value, int $objectId, string $metaKey, bool $single, string $metaType): mixed
    {
        return filter_default_metadata($value, $objectId, $metaKey, $single, $metaType);
    }

    /**
     * @inheritDoc
     */
    public function registeredMetaKeyExists(string $objectType, string $metaKey, string $objectSubtype = ''): bool
    {
        return registered_meta_key_exists($objectType, $metaKey, $objectSubtype);
    }

    /**
     * @inheritDoc
     */
    public function unregisterMetaKey(string $objectType, string $metaKey, string $objectSubtype = ''): bool
    {
        return unregister_meta_key($objectType, $metaKey, $objectSubtype);
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredMetaKeys(string $objectType, string $objectSubtype = ''): array
    {
        return get_registered_meta_keys($objectType, $objectSubtype);
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredMetadata(string $objectType, int $objectId, string $metaKey = ''): mixed
    {
        return get_registered_metadata($objectType, $objectId, $metaKey);
    }

    /**
     * @inheritDoc
     */
    public function getObjectSubtype(string $objectType, int $objectId): string
    {
        return get_object_subtype($objectType, $objectId);
    }

    /**
     * @inheritDoc
     */
    public function wpmuUpdateBlogsDate(): void
    {
        wpmu_update_blogs_date();
    }

    /**
     * @inheritDoc
     */
    public function getBlogaddressById(int $blogId): string
    {
        return get_blogaddress_by_id($blogId);
    }

    /**
     * @inheritDoc
     */
    public function getBlogaddressByName(string $blogname): string
    {
        return get_blogaddress_by_name($blogname);
    }

    /**
     * @inheritDoc
     */
    public function getIdFromBlogname(string $slug): int|null
    {
        return get_id_from_blogname($slug);
    }

    /**
     * @inheritDoc
     */
    public function getBlogDetails(int|string|array $fields = null, bool $getAll = true): \WP_Site|false
    {
        return get_blog_details($fields, $getAll);
    }

    /**
     * @inheritDoc
     */
    public function refreshBlogDetails(int $blogId = 0): void
    {
        refresh_blog_details($blogId);
    }

    /**
     * @inheritDoc
     */
    public function updateBlogDetails(int $blogId, array $details = []): bool
    {
        return update_blog_details($blogId, $details);
    }

    /**
     * @inheritDoc
     */
    public function cleanSiteDetailsCache(int $siteId = 0): void
    {
        clean_site_details_cache($siteId);
    }

    /**
     * @inheritDoc
     */
    public function getBlogOption(int $id, string $option, mixed $defaultValue = false): mixed
    {
        return get_blog_option($id, $option, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function addBlogOption(int $id, string $option, mixed $value): bool
    {
        return add_blog_option($id, $option, $value);
    }

    /**
     * @inheritDoc
     */
    public function deleteBlogOption(int $id, string $option): bool
    {
        return delete_blog_option($id, $option);
    }

    /**
     * @inheritDoc
     */
    public function updateBlogOption(int $id, string $option, mixed $value, mixed $deprecated = null): bool
    {
        return update_blog_option($id, $option, $value, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function switchToBlog(int $newBlogId, bool $deprecated = null): true
    {
        return switch_to_blog($newBlogId, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function restoreCurrentBlog(): bool
    {
        return restore_current_blog();
    }

    /**
     * @inheritDoc
     */
    public function wpSwitchRolesAndUser(int $newSiteId, int $oldSiteId): void
    {
        wp_switch_roles_and_user($newSiteId, $oldSiteId);
    }

    /**
     * @inheritDoc
     */
    public function msIsSwitched(): bool
    {
        return ms_is_switched();
    }

    /**
     * @inheritDoc
     */
    public function isArchived(int $id): string
    {
        return is_archived($id);
    }

    /**
     * @inheritDoc
     */
    public function updateArchived(int $id, string $archived): string
    {
        return update_archived($id, $archived);
    }

    /**
     * @inheritDoc
     */
    public function updateBlogStatus(int $blogId, string $pref, string $value, null $deprecated = null): string|false
    {
        return update_blog_status($blogId, $pref, $value, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getBlogStatus(int $id, string $pref): bool|string|null
    {
        return get_blog_status($id, $pref);
    }

    /**
     * @inheritDoc
     */
    public function getLastUpdated(mixed $deprecated = '', int $start = 0, int $quantity = 40): array
    {
        return get_last_updated($deprecated, $start, $quantity);
    }

    /**
     * @inheritDoc
     */
    public function wpCountSites(int $networkId = null): array
    {
        return wp_count_sites($networkId);
    }

    /**
     * @inheritDoc
     */
    public function msUploadConstants(): void
    {
        ms_upload_constants();
    }

    /**
     * @inheritDoc
     */
    public function msCookieConstants(): void
    {
        ms_cookie_constants();
    }

    /**
     * @inheritDoc
     */
    public function msFileConstants(): void
    {
        ms_file_constants();
    }

    /**
     * @inheritDoc
     */
    public function msSubdomainConstants(): void
    {
        ms_subdomain_constants();
    }

    /**
     * @inheritDoc
     */
    public function getSitestats(): array
    {
        return get_sitestats();
    }

    /**
     * @inheritDoc
     */
    public function getActiveBlogForUser(int $userId): mixed
    {
        return get_active_blog_for_user($userId);
    }

    /**
     * @inheritDoc
     */
    public function getBlogCount(int|null $networkId = null): int
    {
        return get_blog_count($networkId);
    }

    /**
     * @inheritDoc
     */
    public function getBlogPost(int $blogId, int $postId): \WP_Post|null
    {
        return get_blog_post($blogId, $postId);
    }

    /**
     * @inheritDoc
     */
    public function addUserToBlog(int $blogId, int $userId, string $role): true|\WP_Error
    {
        return add_user_to_blog($blogId, $userId, $role);
    }

    /**
     * @inheritDoc
     */
    public function removeUserFromBlog(int $userId, int $blogId = 0, int $reassign = 0): true|\WP_Error
    {
        return remove_user_from_blog($userId, $blogId, $reassign);
    }

    /**
     * @inheritDoc
     */
    public function getBlogPermalink(int $blogId, int $postId): string
    {
        return get_blog_permalink($blogId, $postId);
    }

    /**
     * @inheritDoc
     */
    public function getBlogIdFromUrl(string $domain, string $path = '/'): int
    {
        return get_blog_id_from_url($domain, $path);
    }

    /**
     * @inheritDoc
     */
    public function isEmailAddressUnsafe(string $userEmail): bool
    {
        return is_email_address_unsafe($userEmail);
    }

    /**
     * @inheritDoc
     */
    public function wpmuValidateUserSignup(string $userName, string $userEmail): array
    {
        return wpmu_validate_user_signup($userName, $userEmail);
    }

    /**
     * @inheritDoc
     */
    public function wpmuValidateBlogSignup(string $blogname, string $blogTitle, \WP_User|string $user = ''): array
    {
        return wpmu_validate_blog_signup($blogname, $blogTitle, $user);
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupBlog(string $domain, string $path, string $title, string $user, string $userEmail, array $meta = []): void
    {
        wpmu_signup_blog($domain, $path, $title, $user, $userEmail, $meta);
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupUser(string $user, string $userEmail, array $meta = []): void
    {
        wpmu_signup_user($user, $userEmail, $meta);
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupBlogNotification(string $domain, string $path, string $title, string $userLogin, string $userEmail, string $key, array $meta = []): bool
    {
        return wpmu_signup_blog_notification($domain, $path, $title, $userLogin, $userEmail, $key, $meta);
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupUserNotification(string $userLogin, string $userEmail, string $key, array $meta = []): bool
    {
        return wpmu_signup_user_notification($userLogin, $userEmail, $key, $meta);
    }

    /**
     * @inheritDoc
     */
    public function wpmuActivateSignup(string $key): array|\WP_Error
    {
        return wpmu_activate_signup($key);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteSignupOnUserDelete(int $id, int|null $reassign, \WP_User $user): void
    {
        wp_delete_signup_on_user_delete($id, $reassign, $user);
    }

    /**
     * @inheritDoc
     */
    public function wpmuCreateUser(string $userName, string $password, string $email): int|false
    {
        return wpmu_create_user($userName, $password, $email);
    }

    /**
     * @inheritDoc
     */
    public function wpmuCreateBlog(string $domain, string $path, string $title, int $userId, array $options = [], int $networkId = 1): int|\WP_Error
    {
        return wpmu_create_blog($domain, $path, $title, $userId, $options, $networkId);
    }

    /**
     * @inheritDoc
     */
    public function newblogNotifySiteadmin(\WP_Site|int $blogId, string $deprecated = ''): bool
    {
        return newblog_notify_siteadmin($blogId, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function newuserNotifySiteadmin(int $userId): bool
    {
        return newuser_notify_siteadmin($userId);
    }

    /**
     * @inheritDoc
     */
    public function domainExists(string $domain, string $path, int $networkId = 1): int|null
    {
        return domain_exists($domain, $path, $networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpmuWelcomeNotification(int $blogId, int $userId, string $password, string $title, array $meta = []): bool
    {
        return wpmu_welcome_notification($blogId, $userId, $password, $title, $meta);
    }

    /**
     * @inheritDoc
     */
    public function wpmuNewSiteAdminNotification(int $siteId, int $userId): bool
    {
        return wpmu_new_site_admin_notification($siteId, $userId);
    }

    /**
     * @inheritDoc
     */
    public function wpmuWelcomeUserNotification(int $userId, string $password, array $meta = []): bool
    {
        return wpmu_welcome_user_notification($userId, $password, $meta);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentSite(): \WP_Network
    {
        return get_current_site();
    }

    /**
     * @inheritDoc
     */
    public function getMostRecentPostOfUser(int $userId): array
    {
        return get_most_recent_post_of_user($userId);
    }

    /**
     * @inheritDoc
     */
    public function checkUploadMimes(array $mimes): array
    {
        return check_upload_mimes($mimes);
    }

    /**
     * @inheritDoc
     */
    public function updatePostsCount(string $deprecated = ''): void
    {
        update_posts_count($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function wpmuLogNewRegistrations(\WP_Site|int $blogId, int|array $userId): void
    {
        wpmu_log_new_registrations($blogId, $userId);
    }

    /**
     * @inheritDoc
     */
    public function redirectThisSite(array|string $deprecated = ''): array
    {
        return redirect_this_site($deprecated);
    }

    /**
     * @inheritDoc
     */
    public function uploadIsFileTooBig(array $upload): string|array
    {
        return upload_is_file_too_big($upload);
    }

    /**
     * @inheritDoc
     */
    public function signupNonceFields(): void
    {
        signup_nonce_fields();
    }

    /**
     * @inheritDoc
     */
    public function signupNonceCheck(array $result): array
    {
        return signup_nonce_check($result);
    }

    /**
     * @inheritDoc
     */
    public function maybeRedirect404(): void
    {
        maybe_redirect_404();
    }

    /**
     * @inheritDoc
     */
    public function maybeAddExistingUserToBlog(): void
    {
        maybe_add_existing_user_to_blog();
    }

    /**
     * @inheritDoc
     */
    public function addExistingUserToBlog(array|false $details = false): mixed
    {
        return add_existing_user_to_blog($details);
    }

    /**
     * @inheritDoc
     */
    public function addNewUserToBlog(int $userId, string $password, array $meta): void
    {
        add_new_user_to_blog($userId, $password, $meta);
    }

    /**
     * @inheritDoc
     */
    public function fixPhpmailerMessageid(\PHPMailer $phpmailer): void
    {
        fix_phpmailer_messageid($phpmailer);
    }

    /**
     * @inheritDoc
     */
    public function isUserSpammy(string|\WP_User $user = null): bool
    {
        return is_user_spammy($user);
    }

    /**
     * @inheritDoc
     */
    public function updateBlogPublic(int $oldValue, int $value): void
    {
        update_blog_public($oldValue, $value);
    }

    /**
     * @inheritDoc
     */
    public function usersCanRegisterSignupFilter(): bool
    {
        return users_can_register_signup_filter();
    }

    /**
     * @inheritDoc
     */
    public function welcomeUserMsgFilter(string $text): string
    {
        return welcome_user_msg_filter($text);
    }

    /**
     * @inheritDoc
     */
    public function forceSslContent(bool|string $force = ''): bool
    {
        return force_ssl_content($force);
    }

    /**
     * @inheritDoc
     */
    public function filterSSL(string $url): string
    {
        return filter_SSL($url);
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateNetworkCounts(): void
    {
        wp_schedule_update_network_counts();
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkCounts(int|null $networkId = null): void
    {
        wp_update_network_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkSiteCounts(int|null $networkId = null): void
    {
        wp_maybe_update_network_site_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkUserCounts(int|null $networkId = null): void
    {
        wp_maybe_update_network_user_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkSiteCounts(int|null $networkId = null): void
    {
        wp_update_network_site_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNetworkUserCounts(int|null $networkId = null): void
    {
        wp_update_network_user_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function getSpaceUsed(): int
    {
        return get_space_used();
    }

    /**
     * @inheritDoc
     */
    public function getSpaceAllowed(): int
    {
        return get_space_allowed();
    }

    /**
     * @inheritDoc
     */
    public function getUploadSpaceAvailable(): int
    {
        return get_upload_space_available();
    }

    /**
     * @inheritDoc
     */
    public function isUploadSpaceAvailable(): bool
    {
        return is_upload_space_available();
    }

    /**
     * @inheritDoc
     */
    public function uploadSizeLimitFilter(int $size): int
    {
        return upload_size_limit_filter($size);
    }

    /**
     * @inheritDoc
     */
    public function wpIsLargeNetwork(string $using = 'sites', int|null $networkId = null): bool
    {
        return wp_is_large_network($using, $networkId);
    }

    /**
     * @inheritDoc
     */
    public function getSubdirectoryReservedNames(): array
    {
        return get_subdirectory_reserved_names();
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkOptionNewAdminEmail(string $oldValue, string $value): void
    {
        update_network_option_new_admin_email($oldValue, $value);
    }

    /**
     * @inheritDoc
     */
    public function wpNetworkAdminEmailChangeNotification(string $optionName, string $newEmail, string $oldEmail, int $networkId): void
    {
        wp_network_admin_email_change_notification($optionName, $newEmail, $oldEmail, $networkId);
    }

    /**
     * @inheritDoc
     */
    public function isSubdomainInstall(): bool
    {
        return is_subdomain_install();
    }

    /**
     * @inheritDoc
     */
    public function msSiteCheck(): true|string
    {
        return ms_site_check();
    }

    /**
     * @inheritDoc
     */
    public function getNetworkByPath(string $domain, string $path, int|null $segments = null): \WP_Network|false
    {
        return get_network_by_path($domain, $path, $segments);
    }

    /**
     * @inheritDoc
     */
    public function getSiteByPath(string $domain, string $path, int|null $segments = null): \WP_Site|false
    {
        return get_site_by_path($domain, $path, $segments);
    }

    /**
     * @inheritDoc
     */
    public function getNetwork(\WP_Network|int|null $network = null): \WP_Network|null
    {
        return get_network($network);
    }

    /**
     * @inheritDoc
     */
    public function getNetworks(string|array $args = []): array|int
    {
        return get_networks($args);
    }

    /**
     * @inheritDoc
     */
    public function cleanNetworkCache(int|array $ids): void
    {
        clean_network_cache($ids);
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkCache(array $networks): void
    {
        update_network_cache($networks);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertSite(array $data): int|\WP_Error
    {
        return wp_insert_site($data);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateSite(int $siteId, array $data): int|\WP_Error
    {
        return wp_update_site($siteId, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteSite(int $siteId): \WP_Site|\WP_Error
    {
        return wp_delete_site($siteId);
    }

    /**
     * @inheritDoc
     */
    public function getSite(\WP_Site|int|null $site = null): \WP_Site|null
    {
        return get_site($site);
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadSiteMeta(array $siteIds): void
    {
        wp_lazyload_site_meta($siteIds);
    }

    /**
     * @inheritDoc
     */
    public function updateSiteCache(array $sites, bool $updateMetaCache = true): void
    {
        update_site_cache($sites, $updateMetaCache);
    }

    /**
     * @inheritDoc
     */
    public function updateSitemetaCache(array $siteIds): array|false
    {
        return update_sitemeta_cache($siteIds);
    }

    /**
     * @inheritDoc
     */
    public function getSites(string|array $args = []): array|int
    {
        return get_sites($args);
    }

    /**
     * @inheritDoc
     */
    public function wpPrepareSiteData(array $data, array $defaults, \WP_Site|null $oldSite = null): array|\WP_Error
    {
        return wp_prepare_site_data($data, $defaults, $oldSite);
    }

    /**
     * @inheritDoc
     */
    public function wpNormalizeSiteData(array $data): array
    {
        return wp_normalize_site_data($data);
    }

    /**
     * @inheritDoc
     */
    public function wpValidateSiteData(\WP_Error $errors, array $data, \WP_Site|null $oldSite = null): void
    {
        wp_validate_site_data($errors, $data, $oldSite);
    }

    /**
     * @inheritDoc
     */
    public function wpInitializeSite(int|\WP_Site $siteId, array $args = []): true|\WP_Error
    {
        return wp_initialize_site($siteId, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpUninitializeSite(int|\WP_Site $siteId): true|\WP_Error
    {
        return wp_uninitialize_site($siteId);
    }

    /**
     * @inheritDoc
     */
    public function wpIsSiteInitialized(int|\WP_Site $siteId): bool
    {
        return wp_is_site_initialized($siteId);
    }

    /**
     * @inheritDoc
     */
    public function cleanBlogCache(\WP_Site|int $blog): void
    {
        clean_blog_cache($blog);
    }

    /**
     * @inheritDoc
     */
    public function addSiteMeta(int $siteId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        return add_site_meta($siteId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteMeta(int $siteId, string $metaKey, mixed $metaValue = ''): bool
    {
        return delete_site_meta($siteId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getSiteMeta(int $siteId, string $key = '', bool $single = false): mixed
    {
        return get_site_meta($siteId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function updateSiteMeta(int $siteId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        return update_site_meta($siteId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteMetaByKey(string $metaKey): bool
    {
        return delete_site_meta_by_key($metaKey);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateNetworkSiteCountsOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void
    {
        wp_maybe_update_network_site_counts_on_update($newSite, $oldSite);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeTransitionSiteStatusesOnUpdate(\WP_Site $newSite, \WP_Site|null $oldSite = null): void
    {
        wp_maybe_transition_site_statuses_on_update($newSite, $oldSite);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeCleanNewSiteCacheOnUpdate(\WP_Site $newSite, \WP_Site $oldSite): void
    {
        wp_maybe_clean_new_site_cache_on_update($newSite, $oldSite);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateBlogPublicOptionOnSiteUpdate(int $siteId, string $isPublic): void
    {
        wp_update_blog_public_option_on_site_update($siteId, $isPublic);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetSitesLastChanged(): void
    {
        wp_cache_set_sites_last_changed();
    }

    /**
     * @inheritDoc
     */
    public function wpCheckSiteMetaSupportPrefilter(mixed $check): mixed
    {
        return wp_check_site_meta_support_prefilter($check);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenu(array $args = []): mixed
    {
        return wp_nav_menu($args);
    }

    /**
     * @inheritDoc
     */
    public function walkNavMenuTree(array $items, int $depth, \stdClass $args): string
    {
        return walk_nav_menu_tree($items, $depth, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpNavMenuRemoveMenuItemHasChildrenClass(array $classes, \WP_Post $menuItem, \stdClass|false $args = false, int|false $depth = false): array
    {
        return wp_nav_menu_remove_menu_item_has_children_class($classes, $menuItem, $args, $depth);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuObject(int|string|\WP_Term $menu): \WP_Term|false
    {
        return wp_get_nav_menu_object($menu);
    }

    /**
     * @inheritDoc
     */
    public function isNavMenu(int|string|\WP_Term $menu): bool
    {
        return is_nav_menu($menu);
    }

    /**
     * @inheritDoc
     */
    public function registerNavMenus(array $locations = []): void
    {
        register_nav_menus($locations);
    }

    /**
     * @inheritDoc
     */
    public function unregisterNavMenu(string $location): bool
    {
        return unregister_nav_menu($location);
    }

    /**
     * @inheritDoc
     */
    public function registerNavMenu(string $location, string $description): void
    {
        register_nav_menu($location, $description);
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredNavMenus(): array
    {
        return get_registered_nav_menus();
    }

    /**
     * @inheritDoc
     */
    public function getNavMenuLocations(): array
    {
        return get_nav_menu_locations();
    }

    /**
     * @inheritDoc
     */
    public function hasNavMenu(string $location): bool
    {
        return has_nav_menu($location);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuName(string $location): string
    {
        return wp_get_nav_menu_name($location);
    }

    /**
     * @inheritDoc
     */
    public function isNavMenuItem(int $menuItemId = 0): bool
    {
        return is_nav_menu_item($menuItemId);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateNavMenu(string $menuName): int|\WP_Error
    {
        return wp_create_nav_menu($menuName);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteNavMenu(int|string|\WP_Term $menu): bool|\WP_Error
    {
        return wp_delete_nav_menu($menu);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNavMenuObject(int $menuId = 0, array $menuData = []): int|\WP_Error
    {
        return wp_update_nav_menu_object($menuId, $menuData);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateNavMenuItem(int $menuId = 0, int $menuItemDbId = 0, array $menuItemData = [], bool $fireAfterHooks = true): int|\WP_Error
    {
        return wp_update_nav_menu_item($menuId, $menuItemDbId, $menuItemData, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenus(array $args = []): array
    {
        return wp_get_nav_menus($args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetNavMenuItems(int|string|\WP_Term $menu, array $args = []): array|false
    {
        return wp_get_nav_menu_items($menu, $args);
    }

    /**
     * @inheritDoc
     */
    public function updateMenuItemCache(array $menuItems): void
    {
        update_menu_item_cache($menuItems);
    }

    /**
     * @inheritDoc
     */
    public function wpSetupNavMenuItem(object $menuItem): object
    {
        return wp_setup_nav_menu_item($menuItem);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAssociatedNavMenuItems(int $objectId = 0, string $objectType = 'post_type', string $taxonomy = ''): array
    {
        return wp_get_associated_nav_menu_items($objectId, $objectType, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpMapNavMenuLocations(array $newNavMenuLocations, array $oldNavMenuLocations): array
    {
        return wp_map_nav_menu_locations($newNavMenuLocations, $oldNavMenuLocations);
    }

    /**
     * @inheritDoc
     */
    public function getOption(string $option, mixed $defaultValue = false): mixed
    {
        return get_option($option, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeOptionCaches(array $options): void
    {
        wp_prime_option_caches($options);
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeOptionCachesByGroup(string $optionGroup): void
    {
        wp_prime_option_caches_by_group($optionGroup);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(array $options): array
    {
        return get_options($options);
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionAutoloadValues(array $options): array
    {
        return wp_set_option_autoload_values($options);
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionsAutoload(array $options, string|bool $autoload): array
    {
        return wp_set_options_autoload($options, $autoload);
    }

    /**
     * @inheritDoc
     */
    public function wpSetOptionAutoload(string $option, string|bool $autoload): bool
    {
        return wp_set_option_autoload($option, $autoload);
    }

    /**
     * @inheritDoc
     */
    public function wpProtectSpecialOption(string $option): void
    {
        wp_protect_special_option($option);
    }

    /**
     * @inheritDoc
     */
    public function formOption(string $option): void
    {
        form_option($option);
    }

    /**
     * @inheritDoc
     */
    public function wpLoadAlloptions(bool $forceCache = false): array
    {
        return wp_load_alloptions($forceCache);
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeSiteOptionCaches(array $options): void
    {
        wp_prime_site_option_caches($options);
    }

    /**
     * @inheritDoc
     */
    public function wpPrimeNetworkOptionCaches(int $networkId, array $options): void
    {
        wp_prime_network_option_caches($networkId, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpLoadCoreSiteOptions(int $networkId = null): void
    {
        wp_load_core_site_options($networkId);
    }

    /**
     * @inheritDoc
     */
    public function updateOption(string $option, mixed $value, bool|null $autoload = null): bool
    {
        return update_option($option, $value, $autoload);
    }

    /**
     * @inheritDoc
     */
    public function addOption(string $option, mixed $value = '', string $deprecated = '', bool|null $autoload = null): bool
    {
        return add_option($option, $value, $deprecated, $autoload);
    }

    /**
     * @inheritDoc
     */
    public function deleteOption(string $option): bool
    {
        return delete_option($option);
    }

    /**
     * @inheritDoc
     */
    public function deleteTransient(string $transient): bool
    {
        return delete_transient($transient);
    }

    /**
     * @inheritDoc
     */
    public function getTransient(string $transient): mixed
    {
        return get_transient($transient);
    }

    /**
     * @inheritDoc
     */
    public function setTransient(string $transient, mixed $value, int $expiration = 0): bool
    {
        return set_transient($transient, $value, $expiration);
    }

    /**
     * @inheritDoc
     */
    public function deleteExpiredTransients(bool $forceDb = false): void
    {
        delete_expired_transients($forceDb);
    }

    /**
     * @inheritDoc
     */
    public function wpUserSettings(): void
    {
        wp_user_settings();
    }

    /**
     * @inheritDoc
     */
    public function getUserSetting(string $name, string|false $defaultValue = false): mixed
    {
        return get_user_setting($name, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function setUserSetting(string $name, string $value): bool|null
    {
        return set_user_setting($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function deleteUserSetting(string $names): bool|null
    {
        return delete_user_setting($names);
    }

    /**
     * @inheritDoc
     */
    public function getAllUserSettings(): array
    {
        return get_all_user_settings();
    }

    /**
     * @inheritDoc
     */
    public function deleteAllUserSettings(): void
    {
        delete_all_user_settings();
    }

    /**
     * @inheritDoc
     */
    public function getSiteOption(string $option, mixed $defaultValue = false, bool $deprecated = true): mixed
    {
        return get_site_option($option, $defaultValue, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function addSiteOption(string $option, mixed $value): bool
    {
        return add_site_option($option, $value);
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteOption(string $option): bool
    {
        return delete_site_option($option);
    }

    /**
     * @inheritDoc
     */
    public function updateSiteOption(string $option, mixed $value): bool
    {
        return update_site_option($option, $value);
    }

    /**
     * @inheritDoc
     */
    public function getNetworkOption(int $networkId, string $option, mixed $defaultValue = false): mixed
    {
        return get_network_option($networkId, $option, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function addNetworkOption(int $networkId, string $option, mixed $value): bool
    {
        return add_network_option($networkId, $option, $value);
    }

    /**
     * @inheritDoc
     */
    public function deleteNetworkOption(int $networkId, string $option): bool
    {
        return delete_network_option($networkId, $option);
    }

    /**
     * @inheritDoc
     */
    public function updateNetworkOption(int $networkId, string $option, mixed $value): bool
    {
        return update_network_option($networkId, $option, $value);
    }

    /**
     * @inheritDoc
     */
    public function deleteSiteTransient(string $transient): bool
    {
        return delete_site_transient($transient);
    }

    /**
     * @inheritDoc
     */
    public function getSiteTransient(string $transient): mixed
    {
        return get_site_transient($transient);
    }

    /**
     * @inheritDoc
     */
    public function setSiteTransient(string $transient, mixed $value, int $expiration = 0): bool
    {
        return set_site_transient($transient, $value, $expiration);
    }

    /**
     * @inheritDoc
     */
    public function registerInitialSettings(): void
    {
        register_initial_settings();
    }

    /**
     * @inheritDoc
     */
    public function registerSetting(string $optionGroup, string $optionName, array $args = []): void
    {
        register_setting($optionGroup, $optionName, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterSetting(string $optionGroup, string $optionName, callable $deprecated = null): void
    {
        unregister_setting($optionGroup, $optionName, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredSettings(): array
    {
        return get_registered_settings();
    }

    /**
     * @inheritDoc
     */
    public function filterDefaultOption(mixed $defaultValue, string $option, bool $passedDefault): mixed
    {
        return filter_default_option($defaultValue, $option, $passedDefault);
    }

    /**
     * @inheritDoc
     */
    public function wpAutoloadValuesToAutoload(): array
    {
        return wp_autoload_values_to_autoload();
    }

    /**
     * @inheritDoc
     */
    public function wpSetCurrentUser(int|null $id, string $name = ''): \WP_User
    {
        return wp_set_current_user($id, $name);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCurrentUser(): \WP_User
    {
        return wp_get_current_user();
    }

    /**
     * @inheritDoc
     */
    public function getUserdata(int $userId): \WP_User|false
    {
        return get_userdata($userId);
    }

    /**
     * @inheritDoc
     */
    public function getUserBy(string $field, int|string $value): \WP_User|false
    {
        return get_user_by($field, $value);
    }

    /**
     * @inheritDoc
     */
    public function cacheUsers(array $userIds): void
    {
        cache_users($userIds);
    }

    /**
     * @inheritDoc
     */
    public function wpMail(string|array $to, string $subject, string $message, string|array $headers = '', string|array $attachments = []): bool
    {
        return wp_mail($to, $subject, $message, $headers, $attachments);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticate(string $username, string $password): \WP_User|\WP_Error
    {
        return wp_authenticate($username, $password);
    }

    /**
     * @inheritDoc
     */
    public function wpLogout(): void
    {
        wp_logout();
    }

    /**
     * @inheritDoc
     */
    public function wpValidateAuthCookie(string $cookie = '', string $scheme = ''): int|false
    {
        return wp_validate_auth_cookie($cookie, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateAuthCookie(int $userId, int $expiration, string $scheme = 'auth', string $token = ''): string
    {
        return wp_generate_auth_cookie($userId, $expiration, $scheme, $token);
    }

    /**
     * @inheritDoc
     */
    public function wpParseAuthCookie(string $cookie = '', string $scheme = ''): array|false
    {
        return wp_parse_auth_cookie($cookie, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function wpSetAuthCookie(int $userId, bool $remember = false, bool|string $secure = '', string $token = ''): void
    {
        wp_set_auth_cookie($userId, $remember, $secure, $token);
    }

    /**
     * @inheritDoc
     */
    public function wpClearAuthCookie(): void
    {
        wp_clear_auth_cookie();
    }

    /**
     * @inheritDoc
     */
    public function isUserLoggedIn(): bool
    {
        return is_user_logged_in();
    }

    /**
     * @inheritDoc
     */
    public function authRedirect(): void
    {
        auth_redirect();
    }

    /**
     * @inheritDoc
     */
    public function checkAdminReferer(int|string $action, string $queryArg = '_wpnonce'): int|false
    {
        return check_admin_referer($action, $queryArg);
    }

    /**
     * @inheritDoc
     */
    public function checkAjaxReferer(int|string $action, false|string $queryArg = false, bool $stop = true): int|false
    {
        return check_ajax_referer($action, $queryArg, $stop);
    }

    /**
     * @inheritDoc
     */
    public function wpRedirect(string $location, int $status = 302, string|false $xRedirectBy = 'WordPress'): bool
    {
        return wp_redirect($location, $status, $xRedirectBy);
    }

    /**
     * @inheritDoc
     */
    public function wpSanitizeRedirect(string $location): string
    {
        return wp_sanitize_redirect($location);
    }

    /**
     * @inheritDoc
     */
    public function wpSafeRedirect(string $location, int $status = 302, string|false $xRedirectBy = 'WordPress'): bool
    {
        return wp_safe_redirect($location, $status, $xRedirectBy);
    }

    /**
     * @inheritDoc
     */
    public function wpValidateRedirect(string $location, string $fallbackUrl = ''): string
    {
        return wp_validate_redirect($location, $fallbackUrl);
    }

    /**
     * @inheritDoc
     */
    public function wpNotifyPostauthor(int|\WP_Comment $commentId, string $deprecated = null): bool
    {
        return wp_notify_postauthor($commentId, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function wpNotifyModerator(int $commentId): true
    {
        return wp_notify_moderator($commentId);
    }

    /**
     * @inheritDoc
     */
    public function wpPasswordChangeNotification(\WP_User $user): void
    {
        wp_password_change_notification($user);
    }

    /**
     * @inheritDoc
     */
    public function wpNewUserNotification(int $userId, null $deprecated = null, string $notify = ''): void
    {
        wp_new_user_notification($userId, $deprecated, $notify);
    }

    /**
     * @inheritDoc
     */
    public function wpNonceTick(string|int $action): float
    {
        return wp_nonce_tick($action);
    }

    /**
     * @inheritDoc
     */
    public function wpVerifyNonce(string $nonce, string|int $action): int|false
    {
        return wp_verify_nonce($nonce, $action);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateNonce(string|int $action): string
    {
        return wp_create_nonce($action);
    }

    /**
     * @inheritDoc
     */
    public function wpSalt(string $scheme = 'auth'): string
    {
        return wp_salt($scheme);
    }

    /**
     * @inheritDoc
     */
    public function wpHash(string $data, string $scheme = 'auth'): string
    {
        return wp_hash($data, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function wpHashPassword(string $password): string
    {
        return wp_hash_password($password);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPassword(string $password, string $hash, string|int $userId = ''): bool
    {
        return wp_check_password($password, $hash, $userId);
    }

    /**
     * @inheritDoc
     */
    public function wpGeneratePassword(int $length = 12, bool $specialChars = true, bool $extraSpecialChars = false): string
    {
        return wp_generate_password($length, $specialChars, $extraSpecialChars);
    }

    /**
     * @inheritDoc
     */
    public function wpRand(int $min = null, int $max = null): int
    {
        return wp_rand($min, $max);
    }

    /**
     * @inheritDoc
     */
    public function wpSetPassword(string $password, int $userId): void
    {
        wp_set_password($password, $userId);
    }

    /**
     * @inheritDoc
     */
    public function getAvatar(mixed $idOrEmail, int $size = 96, string $defaultValue = '', string $alt = '', array $args = null): string|false
    {
        return get_avatar($idOrEmail, $size, $defaultValue, $alt, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpTextDiff(string $leftString, string $rightString, string|array $args = null): string
    {
        return wp_text_diff($leftString, $rightString, $args);
    }

    /**
     * @inheritDoc
     */
    public function addFilter(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): true
    {
        return add_filter($hookName, $callback, $priority, $acceptedArgs);
    }

    /**
     * @inheritDoc
     */
    public function applyFilters(string $hookName, mixed $value, mixed ...$args): mixed
    {
        return apply_filters($hookName, $value, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function applyFiltersRefArray(string $hookName, array $args): mixed
    {
        return apply_filters_ref_array($hookName, $args);
    }

    /**
     * @inheritDoc
     */
    public function hasFilter(string $hookName, callable|string|array|false $callback = false): bool|int
    {
        return has_filter($hookName, $callback);
    }

    /**
     * @inheritDoc
     */
    public function removeFilter(string $hookName, callable|string|array $callback, int $priority = 10): bool
    {
        return remove_filter($hookName, $callback, $priority);
    }

    /**
     * @inheritDoc
     */
    public function removeAllFilters(string $hookName, int|false $priority = false): true
    {
        return remove_all_filters($hookName, $priority);
    }

    /**
     * @inheritDoc
     */
    public function currentFilter(): string
    {
        return current_filter();
    }

    /**
     * @inheritDoc
     */
    public function doingFilter(string|null $hookName = null): bool
    {
        return doing_filter($hookName);
    }

    /**
     * @inheritDoc
     */
    public function didFilter(string $hookName): int
    {
        return did_filter($hookName);
    }

    /**
     * @inheritDoc
     */
    public function addAction(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): true
    {
        return add_action($hookName, $callback, $priority, $acceptedArgs);
    }

    /**
     * @inheritDoc
     */
    public function doAction(string $hookName, mixed ...$arg): void
    {
        do_action($hookName, ...$arg);
    }

    /**
     * @inheritDoc
     */
    public function doActionRefArray(string $hookName, array $args): void
    {
        do_action_ref_array($hookName, $args);
    }

    /**
     * @inheritDoc
     */
    public function hasAction(string $hookName, callable|string|array|false $callback = false): bool|int
    {
        return has_action($hookName, $callback);
    }

    /**
     * @inheritDoc
     */
    public function removeAction(string $hookName, callable|string|array $callback, int $priority = 10): bool
    {
        return remove_action($hookName, $callback, $priority);
    }

    /**
     * @inheritDoc
     */
    public function removeAllActions(string $hookName, int|false $priority = false): true
    {
        return remove_all_actions($hookName, $priority);
    }

    /**
     * @inheritDoc
     */
    public function currentAction(): string
    {
        return current_action();
    }

    /**
     * @inheritDoc
     */
    public function doingAction(string|null $hookName = null): bool
    {
        return doing_action($hookName);
    }

    /**
     * @inheritDoc
     */
    public function didAction(string $hookName): int
    {
        return did_action($hookName);
    }

    /**
     * @inheritDoc
     */
    public function applyFiltersDeprecated(string $hookName, array $args, string $version, string $replacement = '', string $message = ''): mixed
    {
        return apply_filters_deprecated($hookName, $args, $version, $replacement, $message);
    }

    /**
     * @inheritDoc
     */
    public function doActionDeprecated(string $hookName, array $args, string $version, string $replacement = '', string $message = ''): void
    {
        do_action_deprecated($hookName, $args, $version, $replacement, $message);
    }

    /**
     * @inheritDoc
     */
    public function pluginBasename(string $file): string
    {
        return plugin_basename($file);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterPluginRealpath(string $file): bool
    {
        return wp_register_plugin_realpath($file);
    }

    /**
     * @inheritDoc
     */
    public function pluginDirPath(string $file): string
    {
        return plugin_dir_path($file);
    }

    /**
     * @inheritDoc
     */
    public function pluginDirUrl(string $file): string
    {
        return plugin_dir_url($file);
    }

    /**
     * @inheritDoc
     */
    public function registerActivationHook(string $file, callable $callback): void
    {
        register_activation_hook($file, $callback);
    }

    /**
     * @inheritDoc
     */
    public function registerDeactivationHook(string $file, callable $callback): void
    {
        register_deactivation_hook($file, $callback);
    }

    /**
     * @inheritDoc
     */
    public function registerUninstallHook(string $file, callable $callback): void
    {
        register_uninstall_hook($file, $callback);
    }

    /**
     * @inheritDoc
     */
    public function getPostFormat(int|\WP_Post|null $post = null): string|false
    {
        return get_post_format($post);
    }

    /**
     * @inheritDoc
     */
    public function hasPostFormat(string|array $format = [], \WP_Post|int|null $post = null): bool
    {
        return has_post_format($format, $post);
    }

    /**
     * @inheritDoc
     */
    public function setPostFormat(int|\WP_Post $post, string $format): array|\WP_Error|false
    {
        return set_post_format($post, $format);
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatStrings(): array
    {
        return get_post_format_strings();
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatSlugs(): array
    {
        return get_post_format_slugs();
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatString(string $slug): string
    {
        return get_post_format_string($slug);
    }

    /**
     * @inheritDoc
     */
    public function getPostFormatLink(string $format): string|\WP_Error|false
    {
        return get_post_format_link($format);
    }

    /**
     * @inheritDoc
     */
    public function theID(): void
    {
        the_ID();
    }

    /**
     * @inheritDoc
     */
    public function getTheID(): int|false
    {
        return get_the_ID();
    }

    /**
     * @inheritDoc
     */
    public function theTitle(string $before = '', string $after = '', bool $display = true): mixed
    {
        return the_title($before, $after, $display);
    }

    /**
     * @inheritDoc
     */
    public function theTitleAttribute(string|array $args = ''): mixed
    {
        return the_title_attribute($args);
    }

    /**
     * @inheritDoc
     */
    public function getTheTitle(int|\WP_Post $post = 0): string
    {
        return get_the_title($post);
    }

    /**
     * @inheritDoc
     */
    public function theGuid(int|\WP_Post $post = 0): void
    {
        the_guid($post);
    }

    /**
     * @inheritDoc
     */
    public function getTheGuid(int|\WP_Post $post = 0): string
    {
        return get_the_guid($post);
    }

    /**
     * @inheritDoc
     */
    public function theContent(string $moreLinkText = null, bool $stripTeaser = false): void
    {
        the_content($moreLinkText, $stripTeaser);
    }

    /**
     * @inheritDoc
     */
    public function getTheContent(string $moreLinkText = null, bool $stripTeaser = false, int|object $post = null): string
    {
        return get_the_content($moreLinkText, $stripTeaser, $post);
    }

    /**
     * @inheritDoc
     */
    public function theExcerpt(): void
    {
        the_excerpt();
    }

    /**
     * @inheritDoc
     */
    public function getTheExcerpt(int|\WP_Post $post = null): string
    {
        return get_the_excerpt($post);
    }

    /**
     * @inheritDoc
     */
    public function hasExcerpt(int|\WP_Post $post = 0): bool
    {
        return has_excerpt($post);
    }

    /**
     * @inheritDoc
     */
    public function postClass(string|array $cssClass = '', int|\WP_Post $post = null): void
    {
        post_class($cssClass, $post);
    }

    /**
     * @inheritDoc
     */
    public function getPostClass(string|array $cssClass = '', int|\WP_Post $post = null): array
    {
        return get_post_class($cssClass, $post);
    }

    /**
     * @inheritDoc
     */
    public function bodyClass(string|array $cssClass = ''): void
    {
        body_class($cssClass);
    }

    /**
     * @inheritDoc
     */
    public function getBodyClass(string|array $cssClass = ''): array
    {
        return get_body_class($cssClass);
    }

    /**
     * @inheritDoc
     */
    public function postPasswordRequired(int|\WP_Post|null $post = null): bool
    {
        return post_password_required($post);
    }

    /**
     * @inheritDoc
     */
    public function wpLinkPages(string|array $args = ''): string
    {
        return wp_link_pages($args);
    }

    /**
     * @inheritDoc
     */
    public function postCustom(string $key = ''): array|string|false
    {
        return post_custom($key);
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownPages(array|string $args = ''): string
    {
        return wp_dropdown_pages($args);
    }

    /**
     * @inheritDoc
     */
    public function wpListPages(array|string $args = ''): mixed
    {
        return wp_list_pages($args);
    }

    /**
     * @inheritDoc
     */
    public function wpPageMenu(array|string $args = []): mixed
    {
        return wp_page_menu($args);
    }

    /**
     * @inheritDoc
     */
    public function walkPageTree(array $pages, int $depth, int $currentPage, array $args): string
    {
        return walk_page_tree($pages, $depth, $currentPage, $args);
    }

    /**
     * @inheritDoc
     */
    public function walkPageDropdownTree(mixed ...$args): string
    {
        return walk_page_dropdown_tree(...$args);
    }

    /**
     * @inheritDoc
     */
    public function theAttachmentLink(int|\WP_Post $post = 0, bool $fullsize = false, bool $deprecated = false, bool $permalink = false): void
    {
        the_attachment_link($post, $fullsize, $deprecated, $permalink);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentLink(int|\WP_Post $post = 0, string|array $size = 'thumbnail', bool $permalink = false, bool $icon = false, string|false $text = false, array|string $attr = ''): string
    {
        return wp_get_attachment_link($post, $size, $permalink, $icon, $text, $attr);
    }

    /**
     * @inheritDoc
     */
    public function prependAttachment(string $content): string
    {
        return prepend_attachment($content);
    }

    /**
     * @inheritDoc
     */
    public function getThePasswordForm(int|\WP_Post $post = 0): string
    {
        return get_the_password_form($post);
    }

    /**
     * @inheritDoc
     */
    public function isPageTemplate(string|array $template = ''): bool
    {
        return is_page_template($template);
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplateSlug(int|\WP_Post $post = null): string|false
    {
        return get_page_template_slug($post);
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionTitle(int|\WP_Post $revision, bool $link = true): string|false
    {
        return wp_post_revision_title($revision, $link);
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionTitleExpanded(int|\WP_Post $revision, bool $link = true): string|false
    {
        return wp_post_revision_title_expanded($revision, $link);
    }

    /**
     * @inheritDoc
     */
    public function wpListPostRevisions(int|\WP_Post $post = 0, string $type = 'all'): void
    {
        wp_list_post_revisions($post, $type);
    }

    /**
     * @inheritDoc
     */
    public function getPostParent(int|\WP_Post|null $post = null): \WP_Post|null
    {
        return get_post_parent($post);
    }

    /**
     * @inheritDoc
     */
    public function hasPostParent(int|\WP_Post|null $post = null): bool
    {
        return has_post_parent($post);
    }

    /**
     * @inheritDoc
     */
    public function hasPostThumbnail(int|\WP_Post $post = null): bool
    {
        return has_post_thumbnail($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostThumbnailId(int|\WP_Post $post = null): int|false
    {
        return get_post_thumbnail_id($post);
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnail(string|array $size = 'post-thumbnail', string|array $attr = ''): void
    {
        the_post_thumbnail($size, $attr);
    }

    /**
     * @inheritDoc
     */
    public function updatePostThumbnailCache(\WP_Query $wpQuery = null): void
    {
        update_post_thumbnail_cache($wpQuery);
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnail(int|\WP_Post $post = null, string|array $size = 'post-thumbnail', string|array $attr = ''): string
    {
        return get_the_post_thumbnail($post, $size, $attr);
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailUrl(int|\WP_Post $post = null, string|array $size = 'post-thumbnail'): string|false
    {
        return get_the_post_thumbnail_url($post, $size);
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnailUrl(string|array $size = 'post-thumbnail'): void
    {
        the_post_thumbnail_url($size);
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailCaption(int|\WP_Post $post = null): string
    {
        return get_the_post_thumbnail_caption($post);
    }

    /**
     * @inheritDoc
     */
    public function thePostThumbnailCaption(int|\WP_Post $post = null): void
    {
        the_post_thumbnail_caption($post);
    }

    /**
     * @inheritDoc
     */
    public function createInitialPostTypes(): void
    {
        create_initial_post_types();
    }

    /**
     * @inheritDoc
     */
    public function getAttachedFile(int $attachmentId, bool $unfiltered = false): string|false
    {
        return get_attached_file($attachmentId, $unfiltered);
    }

    /**
     * @inheritDoc
     */
    public function updateAttachedFile(int $attachmentId, string $file): bool
    {
        return update_attached_file($attachmentId, $file);
    }

    /**
     * @inheritDoc
     */
    public function getChildren(mixed $args = '', string $output = OBJECT): array
    {
        return get_children($args, $output);
    }

    /**
     * @inheritDoc
     */
    public function getExtended(string $post): array
    {
        return get_extended($post);
    }

    /**
     * @inheritDoc
     */
    public function getPost(int|\WP_Post|null $post = null, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null
    {
        return get_post($post, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getPostAncestors(int|\WP_Post $post): array
    {
        return get_post_ancestors($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostField(string $field, int|\WP_Post $post = null, string $context = 'display'): string
    {
        return get_post_field($field, $post, $context);
    }

    /**
     * @inheritDoc
     */
    public function getPostMimeType(int|\WP_Post $post = null): string|false
    {
        return get_post_mime_type($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostStatus(int|\WP_Post $post = null): string|false
    {
        return get_post_status($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostStatuses(): array
    {
        return get_post_statuses();
    }

    /**
     * @inheritDoc
     */
    public function getPageStatuses(): array
    {
        return get_page_statuses();
    }

    /**
     * @inheritDoc
     */
    public function registerPostStatus(string $postStatus, array|string $args = []): object
    {
        return register_post_status($postStatus, $args);
    }

    /**
     * @inheritDoc
     */
    public function getPostStatusObject(string $postStatus): \stdClass|null
    {
        return get_post_status_object($postStatus);
    }

    /**
     * @inheritDoc
     */
    public function getPostStati(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        return get_post_stati($args, $output, $operator);
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeHierarchical(string $postType): bool
    {
        return is_post_type_hierarchical($postType);
    }

    /**
     * @inheritDoc
     */
    public function postTypeExists(string $postType): bool
    {
        return post_type_exists($postType);
    }

    /**
     * @inheritDoc
     */
    public function getPostType(int|\WP_Post|null $post = null): string|false
    {
        return get_post_type($post);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeObject(string $postType): \WP_Post_Type|null
    {
        return get_post_type_object($postType);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypes(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        return get_post_types($args, $output, $operator);
    }

    /**
     * @inheritDoc
     */
    public function registerPostType(string $postType, array|string $args = []): \WP_Post_Type|\WP_Error
    {
        return register_post_type($postType, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterPostType(string $postType): true|\WP_Error
    {
        return unregister_post_type($postType);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeCapabilities(object $args): object
    {
        return get_post_type_capabilities($args);
    }

    /**
     * @inheritDoc
     */
    public function addPostTypeSupport(string $postType, string|array $feature, mixed ...$args): void
    {
        add_post_type_support($postType, $feature, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function removePostTypeSupport(string $postType, string $feature): void
    {
        remove_post_type_support($postType, $feature);
    }

    /**
     * @inheritDoc
     */
    public function getAllPostTypeSupports(string $postType): array
    {
        return get_all_post_type_supports($postType);
    }

    /**
     * @inheritDoc
     */
    public function postTypeSupports(string $postType, string $feature): bool
    {
        return post_type_supports($postType, $feature);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypesBySupport(array|string $feature, string $operator = 'and'): array
    {
        return get_post_types_by_support($feature, $operator);
    }

    /**
     * @inheritDoc
     */
    public function setPostType(int $postId = 0, string $postType = 'post'): int|false
    {
        return set_post_type($postId, $postType);
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeViewable(string|\WP_Post_Type $postType): bool
    {
        return is_post_type_viewable($postType);
    }

    /**
     * @inheritDoc
     */
    public function isPostStatusViewable(string|\stdClass $postStatus): bool
    {
        return is_post_status_viewable($postStatus);
    }

    /**
     * @inheritDoc
     */
    public function isPostPubliclyViewable(int|\WP_Post|null $post = null): bool
    {
        return is_post_publicly_viewable($post);
    }

    /**
     * @inheritDoc
     */
    public function getPosts(array $args = null): array
    {
        return get_posts($args);
    }

    /**
     * @inheritDoc
     */
    public function addPostMeta(int $postId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        return add_post_meta($postId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function deletePostMeta(int $postId, string $metaKey, mixed $metaValue = ''): bool
    {
        return delete_post_meta($postId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getPostMeta(int $postId, string $key = '', bool $single = false): mixed
    {
        return get_post_meta($postId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function updatePostMeta(int $postId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        return update_post_meta($postId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function deletePostMetaByKey(string $postMetaKey): bool
    {
        return delete_post_meta_by_key($postMetaKey);
    }

    /**
     * @inheritDoc
     */
    public function registerPostMeta(string $postType, string $metaKey, array $args): bool
    {
        return register_post_meta($postType, $metaKey, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterPostMeta(string $postType, string $metaKey): bool
    {
        return unregister_post_meta($postType, $metaKey);
    }

    /**
     * @inheritDoc
     */
    public function getPostCustom(int $postId = 0): mixed
    {
        return get_post_custom($postId);
    }

    /**
     * @inheritDoc
     */
    public function getPostCustomKeys(int $postId = 0): mixed
    {
        return get_post_custom_keys($postId);
    }

    /**
     * @inheritDoc
     */
    public function getPostCustomValues(string $key = '', int $postId = 0): array|null
    {
        return get_post_custom_values($key, $postId);
    }

    /**
     * @inheritDoc
     */
    public function isSticky(int $postId = 0): bool
    {
        return is_sticky($postId);
    }

    /**
     * @inheritDoc
     */
    public function sanitizePost(array|object $post, string $context = 'display'): array|object
    {
        return sanitize_post($post, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizePostField(string $field, mixed $value, int $postId, string $context = 'display'): mixed
    {
        return sanitize_post_field($field, $value, $postId, $context);
    }

    /**
     * @inheritDoc
     */
    public function stickPost(int $postId): void
    {
        stick_post($postId);
    }

    /**
     * @inheritDoc
     */
    public function unstickPost(int $postId): void
    {
        unstick_post($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpCountPosts(string $type = 'post', string $perm = ''): \stdClass
    {
        return wp_count_posts($type, $perm);
    }

    /**
     * @inheritDoc
     */
    public function wpCountAttachments(string|array $mimeType = ''): \stdClass
    {
        return wp_count_attachments($mimeType);
    }

    /**
     * @inheritDoc
     */
    public function getPostMimeTypes(): array
    {
        return get_post_mime_types();
    }

    /**
     * @inheritDoc
     */
    public function wpMatchMimeTypes(string|array $wildcardMimeTypes, string|array $realMimeTypes): array
    {
        return wp_match_mime_types($wildcardMimeTypes, $realMimeTypes);
    }

    /**
     * @inheritDoc
     */
    public function wpPostMimeTypeWhere(string|array $postMimeTypes, string $tableAlias = ''): string
    {
        return wp_post_mime_type_where($postMimeTypes, $tableAlias);
    }

    /**
     * @inheritDoc
     */
    public function wpDeletePost(int $postId = 0, bool $forceDelete = false): \WP_Post|false|null
    {
        return wp_delete_post($postId, $forceDelete);
    }

    /**
     * @inheritDoc
     */
    public function wpTrashPost(int $postId = 0): \WP_Post|false|null
    {
        return wp_trash_post($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPost(int $postId = 0): \WP_Post|false|null
    {
        return wp_untrash_post($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpTrashPostComments(int|\WP_Post|null $post = null): mixed
    {
        return wp_trash_post_comments($post);
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPostComments(int|\WP_Post|null $post = null): mixed
    {
        return wp_untrash_post_comments($post);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostCategories(int $postId = 0, array $args = []): array|\WP_Error
    {
        return wp_get_post_categories($postId, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostTags(int $postId = 0, array $args = []): array|\WP_Error
    {
        return wp_get_post_tags($postId, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostTerms(int $postId = 0, string|array $taxonomy = 'post_tag', array $args = []): array|\WP_Error
    {
        return wp_get_post_terms($postId, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetRecentPosts(array $args = [], string $output = ARRAY_A): array|false
    {
        return wp_get_recent_posts($args, $output);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertPost(array $postarr, bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        return wp_insert_post($postarr, $wpError, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePost(array|object $postarr = [], bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        return wp_update_post($postarr, $wpError, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function wpPublishPost(int|\WP_Post $post): void
    {
        wp_publish_post($post);
    }

    /**
     * @inheritDoc
     */
    public function checkAndPublishFuturePost(int|\WP_Post $post): void
    {
        check_and_publish_future_post($post);
    }

    /**
     * @inheritDoc
     */
    public function wpResolvePostDate(string $postDate = '', string $postDateGmt = ''): string|false
    {
        return wp_resolve_post_date($postDate, $postDateGmt);
    }

    /**
     * @inheritDoc
     */
    public function wpUniquePostSlug(string $slug, int $postId, string $postStatus, string $postType, int $postParent): string
    {
        return wp_unique_post_slug($slug, $postId, $postStatus, $postType, $postParent);
    }

    /**
     * @inheritDoc
     */
    public function wpAddPostTags(int $postId = 0, string|array $tags = ''): array|false|\WP_Error
    {
        return wp_add_post_tags($postId, $tags);
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostTags(int $postId = 0, string|array $tags = '', bool $append = false): array|false|\WP_Error
    {
        return wp_set_post_tags($postId, $tags, $append);
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostTerms(int $postId = 0, string|array $terms = '', string $taxonomy = 'post_tag', bool $append = false): array|false|\WP_Error
    {
        return wp_set_post_terms($postId, $terms, $taxonomy, $append);
    }

    /**
     * @inheritDoc
     */
    public function wpSetPostCategories(int $postId = 0, array|int $postCategories = [], bool $append = false): array|false|\WP_Error
    {
        return wp_set_post_categories($postId, $postCategories, $append);
    }

    /**
     * @inheritDoc
     */
    public function wpTransitionPostStatus(string $newStatus, string $oldStatus, \WP_Post $post): void
    {
        wp_transition_post_status($newStatus, $oldStatus, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpAfterInsertPost(int|\WP_Post $post, bool $update, null|\WP_Post $postBefore): void
    {
        wp_after_insert_post($post, $update, $postBefore);
    }

    /**
     * @inheritDoc
     */
    public function addPing(int|\WP_Post $post, string|array $uri): int|false
    {
        return add_ping($post, $uri);
    }

    /**
     * @inheritDoc
     */
    public function getEnclosed(int $postId): array
    {
        return get_enclosed($postId);
    }

    /**
     * @inheritDoc
     */
    public function getPung(int|\WP_Post $post): array|false
    {
        return get_pung($post);
    }

    /**
     * @inheritDoc
     */
    public function getToPing(int|\WP_Post $post): array|false
    {
        return get_to_ping($post);
    }

    /**
     * @inheritDoc
     */
    public function trackbackUrlList(string $tbList, int $postId): void
    {
        trackback_url_list($tbList, $postId);
    }

    /**
     * @inheritDoc
     */
    public function getAllPageIds(): array
    {
        return get_all_page_ids();
    }

    /**
     * @inheritDoc
     */
    public function getPageByPath(string $pagePath, string $output = OBJECT, string|array $postType = 'page'): \WP_Post|array|null
    {
        return get_page_by_path($pagePath, $output, $postType);
    }

    /**
     * @inheritDoc
     */
    public function getPageChildren(int $pageId, array $pages): array
    {
        return get_page_children($pageId, $pages);
    }

    /**
     * @inheritDoc
     */
    public function getPageHierarchy(array &$pages, int $pageId = 0): array
    {
        return get_page_hierarchy($pages, $pageId);
    }

    /**
     * @inheritDoc
     */
    public function getPageUri(int|object $page = 0): string|false
    {
        return get_page_uri($page);
    }

    /**
     * @inheritDoc
     */
    public function getPages(array|string $args = []): array|false
    {
        return get_pages($args);
    }

    /**
     * @inheritDoc
     */
    public function isLocalAttachment(string $url): bool
    {
        return is_local_attachment($url);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertAttachment(string|array $args, string|false $file = false, int $parentPostId = 0, bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error
    {
        return wp_insert_attachment($args, $file, $parentPostId, $wpError, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAttachment(int $postId, bool $forceDelete = false): \WP_Post|false|null
    {
        return wp_delete_attachment($postId, $forceDelete);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAttachmentFiles(int $postId, array $meta, array $backupSizes, string $file): bool
    {
        return wp_delete_attachment_files($postId, $meta, $backupSizes, $file);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentMetadata(int $attachmentId = 0, bool $unfiltered = false): array|false
    {
        return wp_get_attachment_metadata($attachmentId, $unfiltered);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateAttachmentMetadata(int $attachmentId, array $data): int|false
    {
        return wp_update_attachment_metadata($attachmentId, $data);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentUrl(int $attachmentId = 0): string|false
    {
        return wp_get_attachment_url($attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentCaption(int $postId = 0): string|false
    {
        return wp_get_attachment_caption($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetAttachmentThumbUrl(int $postId = 0): string|false
    {
        return wp_get_attachment_thumb_url($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpAttachmentIs(string $type, int|\WP_Post $post = null): bool
    {
        return wp_attachment_is($type, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpAttachmentIsImage(int|\WP_Post $post = null): bool
    {
        return wp_attachment_is_image($post);
    }

    /**
     * @inheritDoc
     */
    public function wpMimeTypeIcon(string|int $mime = 0, string $preferredExt = '.png'): string|false
    {
        return wp_mime_type_icon($mime, $preferredExt);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckForChangedSlugs(int $postId, \WP_Post $post, \WP_Post $postBefore): void
    {
        wp_check_for_changed_slugs($postId, $post, $postBefore);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckForChangedDates(int $postId, \WP_Post $post, \WP_Post $postBefore): void
    {
        wp_check_for_changed_dates($postId, $post, $postBefore);
    }

    /**
     * @inheritDoc
     */
    public function getPrivatePostsCapSql(string|array $postType): string
    {
        return get_private_posts_cap_sql($postType);
    }

    /**
     * @inheritDoc
     */
    public function getPostsByAuthorSql(string|array $postType, bool $full = true, int $postAuthor = null, bool $publicOnly = false): string
    {
        return get_posts_by_author_sql($postType, $full, $postAuthor, $publicOnly);
    }

    /**
     * @inheritDoc
     */
    public function getLastpostdate(string $timezone = 'server', string $postType = 'any'): string
    {
        return get_lastpostdate($timezone, $postType);
    }

    /**
     * @inheritDoc
     */
    public function getLastpostmodified(string $timezone = 'server', string $postType = 'any'): string
    {
        return get_lastpostmodified($timezone, $postType);
    }

    /**
     * @inheritDoc
     */
    public function updatePostCache(array &$posts): void
    {
        update_post_cache($posts);
    }

    /**
     * @inheritDoc
     */
    public function cleanPostCache(int|\WP_Post $post): void
    {
        clean_post_cache($post);
    }

    /**
     * @inheritDoc
     */
    public function updatePostCaches(array &$posts, string $postType = 'post', bool $updateTermCache = true, bool $updateMetaCache = true): void
    {
        update_post_caches($posts, $postType, $updateTermCache, $updateMetaCache);
    }

    /**
     * @inheritDoc
     */
    public function updatePostAuthorCaches(array $posts): void
    {
        update_post_author_caches($posts);
    }

    /**
     * @inheritDoc
     */
    public function updatePostParentCaches(array $posts): void
    {
        update_post_parent_caches($posts);
    }

    /**
     * @inheritDoc
     */
    public function updatePostmetaCache(array $postIds): array|false
    {
        return update_postmeta_cache($postIds);
    }

    /**
     * @inheritDoc
     */
    public function cleanAttachmentCache(int $id, bool $cleanTerms = false): void
    {
        clean_attachment_cache($id, $cleanTerms);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostParentId(int|\WP_Post|null $post = null): int|false
    {
        return wp_get_post_parent_id($post);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckPostHierarchyForLoops(int $postParent, int $postId): int
    {
        return wp_check_post_hierarchy_for_loops($postParent, $postId);
    }

    /**
     * @inheritDoc
     */
    public function setPostThumbnail(int|\WP_Post $post, int $thumbnailId): int|bool
    {
        return set_post_thumbnail($post, $thumbnailId);
    }

    /**
     * @inheritDoc
     */
    public function deletePostThumbnail(int|\WP_Post $post): bool
    {
        return delete_post_thumbnail($post);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAutoDrafts(): void
    {
        wp_delete_auto_drafts();
    }

    /**
     * @inheritDoc
     */
    public function wpQueuePostsForTermMetaLazyload(array $posts): void
    {
        wp_queue_posts_for_term_meta_lazyload($posts);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetPostsLastChanged(): void
    {
        wp_cache_set_posts_last_changed();
    }

    /**
     * @inheritDoc
     */
    public function getAvailablePostMimeTypes(string $type = 'attachment'): array
    {
        return get_available_post_mime_types($type);
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalImagePath(int $attachmentId, bool $unfiltered = false): string|false
    {
        return wp_get_original_image_path($attachmentId, $unfiltered);
    }

    /**
     * @inheritDoc
     */
    public function wpGetOriginalImageUrl(int $attachmentId): string|false
    {
        return wp_get_original_image_url($attachmentId);
    }

    /**
     * @inheritDoc
     */
    public function wpUntrashPostSetPreviousStatus(string $newStatus, int $postId, string $previousStatus): string
    {
        return wp_untrash_post_set_previous_status($newStatus, $postId, $previousStatus);
    }

    /**
     * @inheritDoc
     */
    public function useBlockEditorForPost(int|\WP_Post $post): bool
    {
        return use_block_editor_for_post($post);
    }

    /**
     * @inheritDoc
     */
    public function useBlockEditorForPostType(string $postType): bool
    {
        return use_block_editor_for_post_type($postType);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateInitialPostMeta(): void
    {
        wp_create_initial_post_meta();
    }

    /**
     * @inheritDoc
     */
    public function getQueryVar(string $queryVar, mixed $defaultValue = ''): mixed
    {
        return get_query_var($queryVar, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function getQueriedObject(): \WP_Term|\WP_Post_Type|\WP_Post|\WP_User|null
    {
        return get_queried_object();
    }

    /**
     * @inheritDoc
     */
    public function getQueriedObjectId(): int
    {
        return get_queried_object_id();
    }

    /**
     * @inheritDoc
     */
    public function setQueryVar(string $queryVar, mixed $value): void
    {
        set_query_var($queryVar, $value);
    }

    /**
     * @inheritDoc
     */
    public function queryPosts(array|string $query): array
    {
        return query_posts($query);
    }

    /**
     * @inheritDoc
     */
    public function wpResetQuery(): void
    {
        wp_reset_query();
    }

    /**
     * @inheritDoc
     */
    public function wpResetPostdata(): void
    {
        wp_reset_postdata();
    }

    /**
     * @inheritDoc
     */
    public function isArchive(): bool
    {
        return is_archive();
    }

    /**
     * @inheritDoc
     */
    public function isPostTypeArchive(string|array $postTypes = ''): bool
    {
        return is_post_type_archive($postTypes);
    }

    /**
     * @inheritDoc
     */
    public function isAttachment(int|string|array $attachment = ''): bool
    {
        return is_attachment($attachment);
    }

    /**
     * @inheritDoc
     */
    public function isAuthor(int|string|array $author = ''): bool
    {
        return is_author($author);
    }

    /**
     * @inheritDoc
     */
    public function isCategory(int|string|array $category = ''): bool
    {
        return is_category($category);
    }

    /**
     * @inheritDoc
     */
    public function isTag(int|string|array $tag = ''): bool
    {
        return is_tag($tag);
    }

    /**
     * @inheritDoc
     */
    public function isTax(string|array $taxonomy = '', int|string|array $term = ''): bool
    {
        return is_tax($taxonomy, $term);
    }

    /**
     * @inheritDoc
     */
    public function isDate(): bool
    {
        return is_date();
    }

    /**
     * @inheritDoc
     */
    public function isDay(): bool
    {
        return is_day();
    }

    /**
     * @inheritDoc
     */
    public function isFeed(string|array $feeds = ''): bool
    {
        return is_feed($feeds);
    }

    /**
     * @inheritDoc
     */
    public function isCommentFeed(): bool
    {
        return is_comment_feed();
    }

    /**
     * @inheritDoc
     */
    public function isFrontPage(): bool
    {
        return is_front_page();
    }

    /**
     * @inheritDoc
     */
    public function isHome(): bool
    {
        return is_home();
    }

    /**
     * @inheritDoc
     */
    public function isPrivacyPolicy(): bool
    {
        return is_privacy_policy();
    }

    /**
     * @inheritDoc
     */
    public function isMonth(): bool
    {
        return is_month();
    }

    /**
     * @inheritDoc
     */
    public function isPage(int|string|array $page = ''): bool
    {
        return is_page($page);
    }

    /**
     * @inheritDoc
     */
    public function isPaged(): bool
    {
        return is_paged();
    }

    /**
     * @inheritDoc
     */
    public function isPreview(): bool
    {
        return is_preview();
    }

    /**
     * @inheritDoc
     */
    public function isRobots(): bool
    {
        return is_robots();
    }

    /**
     * @inheritDoc
     */
    public function isFavicon(): bool
    {
        return is_favicon();
    }

    /**
     * @inheritDoc
     */
    public function isSearch(): bool
    {
        return is_search();
    }

    /**
     * @inheritDoc
     */
    public function isSingle(int|string|array $post = ''): bool
    {
        return is_single($post);
    }

    /**
     * @inheritDoc
     */
    public function isSingular(string|array $postTypes = ''): bool
    {
        return is_singular($postTypes);
    }

    /**
     * @inheritDoc
     */
    public function isTime(): bool
    {
        return is_time();
    }

    /**
     * @inheritDoc
     */
    public function isTrackback(): bool
    {
        return is_trackback();
    }

    /**
     * @inheritDoc
     */
    public function isYear(): bool
    {
        return is_year();
    }

    /**
     * @inheritDoc
     */
    public function is404(): bool
    {
        return is_404();
    }

    /**
     * @inheritDoc
     */
    public function isEmbed(): bool
    {
        return is_embed();
    }

    /**
     * @inheritDoc
     */
    public function isMainQuery(): bool
    {
        return is_main_query();
    }

    /**
     * @inheritDoc
     */
    public function havePosts(): bool
    {
        return have_posts();
    }

    /**
     * @inheritDoc
     */
    public function inTheLoop(): bool
    {
        return in_the_loop();
    }

    /**
     * @inheritDoc
     */
    public function rewindPosts(): void
    {
        rewind_posts();
    }

    /**
     * @inheritDoc
     */
    public function thePost(): void
    {
        the_post();
    }

    /**
     * @inheritDoc
     */
    public function haveComments(): bool
    {
        return have_comments();
    }

    /**
     * @inheritDoc
     */
    public function theComment(): void
    {
        the_comment();
    }

    /**
     * @inheritDoc
     */
    public function wpOldSlugRedirect(): void
    {
        wp_old_slug_redirect();
    }

    /**
     * @inheritDoc
     */
    public function setupPostdata(int|object $post): bool
    {
        return setup_postdata($post);
    }

    /**
     * @inheritDoc
     */
    public function generatePostdata(int|object $post): array|false
    {
        return generate_postdata($post);
    }

    /**
     * @inheritDoc
     */
    public function registerRestRoute(string $routeNamespace, string $route, array $args = [], bool $override = false): bool
    {
        return register_rest_route($routeNamespace, $route, $args, $override);
    }

    /**
     * @inheritDoc
     */
    public function registerRestField(string|array $objectType, string $attribute, array $args = []): void
    {
        register_rest_field($objectType, $attribute, $args);
    }

    /**
     * @inheritDoc
     */
    public function restApiInit(): void
    {
        rest_api_init();
    }

    /**
     * @inheritDoc
     */
    public function restApiRegisterRewrites(): void
    {
        rest_api_register_rewrites();
    }

    /**
     * @inheritDoc
     */
    public function restApiDefaultFilters(): void
    {
        rest_api_default_filters();
    }

    /**
     * @inheritDoc
     */
    public function createInitialRestRoutes(): void
    {
        create_initial_rest_routes();
    }

    /**
     * @inheritDoc
     */
    public function restApiLoaded(): void
    {
        rest_api_loaded();
    }

    /**
     * @inheritDoc
     */
    public function restGetUrlPrefix(): string
    {
        return rest_get_url_prefix();
    }

    /**
     * @inheritDoc
     */
    public function getRestUrl(int|null $blogId = null, string $path = '/', string $scheme = 'rest'): string
    {
        return get_rest_url($blogId, $path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function restUrl(string $path = '', string $scheme = 'rest'): string
    {
        return rest_url($path, $scheme);
    }

    /**
     * @inheritDoc
     */
    public function restDoRequest(\WP_REST_Request|string $request): \WP_REST_Response
    {
        return rest_do_request($request);
    }

    /**
     * @inheritDoc
     */
    public function restGetServer(): \WP_REST_Server
    {
        return rest_get_server();
    }

    /**
     * @inheritDoc
     */
    public function restEnsureRequest(array|string|\WP_REST_Request $request): \WP_REST_Request
    {
        return rest_ensure_request($request);
    }

    /**
     * @inheritDoc
     */
    public function restEnsureResponse(mixed $response): \WP_REST_Response|\WP_Error
    {
        return rest_ensure_response($response);
    }

    /**
     * @inheritDoc
     */
    public function restHandleDeprecatedFunction(string $functionName, string $replacement, string $version): void
    {
        rest_handle_deprecated_function($functionName, $replacement, $version);
    }

    /**
     * @inheritDoc
     */
    public function restHandleDeprecatedArgument(string $functionName, string $message, string $version): void
    {
        rest_handle_deprecated_argument($functionName, $message, $version);
    }

    /**
     * @inheritDoc
     */
    public function restHandleDoingItWrong(string $functionName, string $message, string|null $version): void
    {
        rest_handle_doing_it_wrong($functionName, $message, $version);
    }

    /**
     * @inheritDoc
     */
    public function restSendCorsHeaders(mixed $value): mixed
    {
        return rest_send_cors_headers($value);
    }

    /**
     * @inheritDoc
     */
    public function restHandleOptionsRequest(mixed $response, \WP_REST_Server $handler, \WP_REST_Request $request): \WP_REST_Response
    {
        return rest_handle_options_request($response, $handler, $request);
    }

    /**
     * @inheritDoc
     */
    public function restSendAllowHeader(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response
    {
        return rest_send_allow_header($response, $server, $request);
    }

    /**
     * @inheritDoc
     */
    public function restFilterResponseFields(\WP_REST_Response $response, \WP_REST_Server $server, \WP_REST_Request $request): \WP_REST_Response
    {
        return rest_filter_response_fields($response, $server, $request);
    }

    /**
     * @inheritDoc
     */
    public function restIsFieldIncluded(string $field, array $fields): bool
    {
        return rest_is_field_included($field, $fields);
    }

    /**
     * @inheritDoc
     */
    public function restOutputRsd(): void
    {
        rest_output_rsd();
    }

    /**
     * @inheritDoc
     */
    public function restOutputLinkWpHead(): void
    {
        rest_output_link_wp_head();
    }

    /**
     * @inheritDoc
     */
    public function restOutputLinkHeader(): void
    {
        rest_output_link_header();
    }

    /**
     * @inheritDoc
     */
    public function restCookieCheckErrors(mixed $result): mixed
    {
        return rest_cookie_check_errors($result);
    }

    /**
     * @inheritDoc
     */
    public function restCookieCollectStatus(): void
    {
        rest_cookie_collect_status();
    }

    /**
     * @inheritDoc
     */
    public function restApplicationPasswordCollectStatus(\WP_Error $userOrError, array $appPassword = []): void
    {
        rest_application_password_collect_status($userOrError, $appPassword);
    }

    /**
     * @inheritDoc
     */
    public function restGetAuthenticatedAppPassword(): string|null
    {
        return rest_get_authenticated_app_password();
    }

    /**
     * @inheritDoc
     */
    public function restApplicationPasswordCheckErrors(\WP_Error|null|true $result): \WP_Error|null|true
    {
        return rest_application_password_check_errors($result);
    }

    /**
     * @inheritDoc
     */
    public function restAddApplicationPasswordsToIndex(\WP_REST_Response $response): \WP_REST_Response
    {
        return rest_add_application_passwords_to_index($response);
    }

    /**
     * @inheritDoc
     */
    public function restGetAvatarUrls(mixed $idOrEmail): string|array
    {
        return rest_get_avatar_urls($idOrEmail);
    }

    /**
     * @inheritDoc
     */
    public function restGetAvatarSizes(): array
    {
        return rest_get_avatar_sizes();
    }

    /**
     * @inheritDoc
     */
    public function restParseDate(string $date, bool $forceUtc = false): int|false
    {
        return rest_parse_date($date, $forceUtc);
    }

    /**
     * @inheritDoc
     */
    public function restParseHexColor(string $color): string|false
    {
        return rest_parse_hex_color($color);
    }

    /**
     * @inheritDoc
     */
    public function restGetDateWithGmt(string $date, bool $isUtc = false): array|null
    {
        return rest_get_date_with_gmt($date, $isUtc);
    }

    /**
     * @inheritDoc
     */
    public function restAuthorizationRequiredCode(): int
    {
        return rest_authorization_required_code();
    }

    /**
     * @inheritDoc
     */
    public function restValidateRequestArg(mixed $value, \WP_REST_Request $request, string $param): true|\WP_Error
    {
        return rest_validate_request_arg($value, $request, $param);
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed
    {
        return rest_sanitize_request_arg($value, $request, $param);
    }

    /**
     * @inheritDoc
     */
    public function restParseRequestArg(mixed $value, \WP_REST_Request $request, string $param): mixed
    {
        return rest_parse_request_arg($value, $request, $param);
    }

    /**
     * @inheritDoc
     */
    public function restIsIpAddress(string $ip): string|false
    {
        return rest_is_ip_address($ip);
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeBoolean(bool|string|int $value): bool
    {
        return rest_sanitize_boolean($value);
    }

    /**
     * @inheritDoc
     */
    public function restIsBoolean(bool|string $maybeBool): bool
    {
        return rest_is_boolean($maybeBool);
    }

    /**
     * @inheritDoc
     */
    public function restIsInteger(mixed $maybeInteger): bool
    {
        return rest_is_integer($maybeInteger);
    }

    /**
     * @inheritDoc
     */
    public function restIsArray(mixed $maybeArray): bool
    {
        return rest_is_array($maybeArray);
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeArray(mixed $maybeArray): array
    {
        return rest_sanitize_array($maybeArray);
    }

    /**
     * @inheritDoc
     */
    public function restIsObject(mixed $maybeObject): bool
    {
        return rest_is_object($maybeObject);
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeObject(mixed $maybeObject): array
    {
        return rest_sanitize_object($maybeObject);
    }

    /**
     * @inheritDoc
     */
    public function restGetBestTypeForValue(mixed $value, array $types): string
    {
        return rest_get_best_type_for_value($value, $types);
    }

    /**
     * @inheritDoc
     */
    public function restHandleMultiTypeSchema(mixed $value, array $args, string $param = ''): string
    {
        return rest_handle_multi_type_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateArrayContainsUniqueItems(array $inputArray): bool
    {
        return rest_validate_array_contains_unique_items($inputArray);
    }

    /**
     * @inheritDoc
     */
    public function restStabilizeValue(mixed $value): mixed
    {
        return rest_stabilize_value($value);
    }

    /**
     * @inheritDoc
     */
    public function restValidateJsonSchemaPattern(string $pattern, string $value): bool
    {
        return rest_validate_json_schema_pattern($pattern, $value);
    }

    /**
     * @inheritDoc
     */
    public function restFindMatchingPatternPropertySchema(string $property, array $args): array|null
    {
        return rest_find_matching_pattern_property_schema($property, $args);
    }

    /**
     * @inheritDoc
     */
    public function restFormatCombiningOperationError(string $param, array $error): \WP_Error
    {
        return rest_format_combining_operation_error($param, $error);
    }

    /**
     * @inheritDoc
     */
    public function restGetCombiningOperationError(array $value, string $param, array $errors): \WP_Error
    {
        return rest_get_combining_operation_error($value, $param, $errors);
    }

    /**
     * @inheritDoc
     */
    public function restFindAnyMatchingSchema(mixed $value, array $args, string $param): array|\WP_Error
    {
        return rest_find_any_matching_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restFindOneMatchingSchema(mixed $value, array $args, string $param, bool $stopAfterFirstMatch = false): array|\WP_Error
    {
        return rest_find_one_matching_schema($value, $args, $param, $stopAfterFirstMatch);
    }

    /**
     * @inheritDoc
     */
    public function restAreValuesEqual(mixed $value1, mixed $value2): bool
    {
        return rest_are_values_equal($value1, $value2);
    }

    /**
     * @inheritDoc
     */
    public function restValidateEnum(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_enum($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restGetAllowedSchemaKeywords(): array
    {
        return rest_get_allowed_schema_keywords();
    }

    /**
     * @inheritDoc
     */
    public function restValidateValueFromSchema(mixed $value, array $args, string $param = ''): true|\WP_Error
    {
        return rest_validate_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateNullValueFromSchema(mixed $value, string $param): true|\WP_Error
    {
        return rest_validate_null_value_from_schema($value, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateBooleanValueFromSchema(mixed $value, string $param): true|\WP_Error
    {
        return rest_validate_boolean_value_from_schema($value, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateObjectValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_object_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateArrayValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_array_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateNumberValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_number_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateStringValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_string_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restValidateIntegerValueFromSchema(mixed $value, array $args, string $param): true|\WP_Error
    {
        return rest_validate_integer_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restSanitizeValueFromSchema(mixed $value, array $args, string $param = ''): mixed
    {
        return rest_sanitize_value_from_schema($value, $args, $param);
    }

    /**
     * @inheritDoc
     */
    public function restPreloadApiRequest(array $memo, string $path): array
    {
        return rest_preload_api_request($memo, $path);
    }

    /**
     * @inheritDoc
     */
    public function restParseEmbedParam(string|array $embed): true|array
    {
        return rest_parse_embed_param($embed);
    }

    /**
     * @inheritDoc
     */
    public function restFilterResponseByContext(array|object $responseData, array $schema, string $context): array|object
    {
        return rest_filter_response_by_context($responseData, $schema, $context);
    }

    /**
     * @inheritDoc
     */
    public function restDefaultAdditionalPropertiesToFalse(array $schema): array
    {
        return rest_default_additional_properties_to_false($schema);
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForPost(int|\WP_Post $post): string
    {
        return rest_get_route_for_post($post);
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForPostTypeItems(string $postType): string
    {
        return rest_get_route_for_post_type_items($postType);
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForTerm(int|\WP_Term $term): string
    {
        return rest_get_route_for_term($term);
    }

    /**
     * @inheritDoc
     */
    public function restGetRouteForTaxonomyItems(string $taxonomy): string
    {
        return rest_get_route_for_taxonomy_items($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function restGetQueriedResourceRoute(): string
    {
        return rest_get_queried_resource_route();
    }

    /**
     * @inheritDoc
     */
    public function restGetEndpointArgsForSchema(array $schema, string $method): array
    {
        return rest_get_endpoint_args_for_schema($schema, $method);
    }

    /**
     * @inheritDoc
     */
    public function restConvertErrorToResponse(\WP_Error $error): \WP_REST_Response
    {
        return rest_convert_error_to_response($error);
    }

    /**
     * @inheritDoc
     */
    public function wpIsRestEndpoint(): bool
    {
        return wp_is_rest_endpoint();
    }

    /**
     * @inheritDoc
     */
    public function wpSavePostRevisionOnInsert(int $postId, \WP_Post $post, bool $update): void
    {
        wp_save_post_revision_on_insert($postId, $post, $update);
    }

    /**
     * @inheritDoc
     */
    public function wpSavePostRevision(int $postId): mixed
    {
        return wp_save_post_revision($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostAutosave(int $postId, int $userId = 0): \WP_Post|false
    {
        return wp_get_post_autosave($postId, $userId);
    }

    /**
     * @inheritDoc
     */
    public function wpIsPostRevision(int|\WP_Post $post): int|false
    {
        return wp_is_post_revision($post);
    }

    /**
     * @inheritDoc
     */
    public function wpIsPostAutosave(int|\WP_Post $post): int|false
    {
        return wp_is_post_autosave($post);
    }

    /**
     * @inheritDoc
     */
    public function wpSaveRevisionedMetaFields(int $revisionId, int $postId): void
    {
        wp_save_revisioned_meta_fields($revisionId, $postId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevision(int|\WP_Post &$post, string $output = OBJECT, string $filter = 'raw'): \WP_Post|array|null
    {
        return wp_get_post_revision($post, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function wpRestorePostRevision(int|\WP_Post $revision, array $fields = null): int|false|null
    {
        return wp_restore_post_revision($revision, $fields);
    }

    /**
     * @inheritDoc
     */
    public function wpRestorePostRevisionMeta(int $postId, int $revisionId): void
    {
        wp_restore_post_revision_meta($postId, $revisionId);
    }

    /**
     * @inheritDoc
     */
    public function wpPostRevisionMetaKeys(string $postType): array
    {
        return wp_post_revision_meta_keys($postType);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckRevisionedMetaFieldsHaveChanged(bool $postHasChanged, \WP_Post $lastRevision, \WP_Post $post): bool
    {
        return wp_check_revisioned_meta_fields_have_changed($postHasChanged, $lastRevision, $post);
    }

    /**
     * @inheritDoc
     */
    public function wpDeletePostRevision(int|\WP_Post $revision): \WP_Post|false|null
    {
        return wp_delete_post_revision($revision);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevisions(int|\WP_Post $post = 0, array|null $args = null): array
    {
        return wp_get_post_revisions($post, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetLatestRevisionIdAndTotalCount(int|\WP_Post $post = 0): array|\WP_Error
    {
        return wp_get_latest_revision_id_and_total_count($post);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPostRevisionsUrl(int|\WP_Post $post = 0): string|null
    {
        return wp_get_post_revisions_url($post);
    }

    /**
     * @inheritDoc
     */
    public function wpRevisionsEnabled(\WP_Post $post): bool
    {
        return wp_revisions_enabled($post);
    }

    /**
     * @inheritDoc
     */
    public function wpRevisionsToKeep(\WP_Post $post): int
    {
        return wp_revisions_to_keep($post);
    }

    /**
     * @inheritDoc
     */
    public function addRewriteRule(string $regex, string|array $query, string $after = 'bottom'): void
    {
        add_rewrite_rule($regex, $query, $after);
    }

    /**
     * @inheritDoc
     */
    public function addRewriteTag(string $tag, string $regex, string $query = ''): void
    {
        add_rewrite_tag($tag, $regex, $query);
    }

    /**
     * @inheritDoc
     */
    public function removeRewriteTag(string $tag): void
    {
        remove_rewrite_tag($tag);
    }

    /**
     * @inheritDoc
     */
    public function addPermastruct(string $name, string $struct, array $args = []): void
    {
        add_permastruct($name, $struct, $args);
    }

    /**
     * @inheritDoc
     */
    public function removePermastruct(string $name): void
    {
        remove_permastruct($name);
    }

    /**
     * @inheritDoc
     */
    public function addFeed(string $feedname, callable $callback): string
    {
        return add_feed($feedname, $callback);
    }

    /**
     * @inheritDoc
     */
    public function flushRewriteRules(bool $hard = true): void
    {
        flush_rewrite_rules($hard);
    }

    /**
     * @inheritDoc
     */
    public function addRewriteEndpoint(string $name, int $places, string|bool $queryVar = true): void
    {
        add_rewrite_endpoint($name, $places, $queryVar);
    }

    /**
     * @inheritDoc
     */
    public function wpResolveNumericSlugConflicts(array $queryVars = []): array
    {
        return wp_resolve_numeric_slug_conflicts($queryVars);
    }

    /**
     * @inheritDoc
     */
    public function urlToPostid(string $url): int
    {
        return url_to_postid($url);
    }

    /**
     * @inheritDoc
     */
    public function wpRobots(): void
    {
        wp_robots();
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindex(array $robots): array
    {
        return wp_robots_noindex($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindexEmbeds(array $robots): array
    {
        return wp_robots_noindex_embeds($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoindexSearch(array $robots): array
    {
        return wp_robots_noindex_search($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsNoRobots(array $robots): array
    {
        return wp_robots_no_robots($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsSensitivePage(array $robots): array
    {
        return wp_robots_sensitive_page($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRobotsMaxImagePreviewLarge(array $robots): array
    {
        return wp_robots_max_image_preview_large($robots);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterTinymceScripts(\WP_Scripts $scripts, bool $forceUncompressed = false): void
    {
        wp_register_tinymce_scripts($scripts, $forceUncompressed);
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesVendor(\WP_Scripts $scripts): void
    {
        wp_default_packages_vendor($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpGetScriptPolyfill(\WP_Scripts $scripts, array $tests): string
    {
        return wp_get_script_polyfill($scripts, $tests);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterDevelopmentScripts(\WP_Scripts $scripts): void
    {
        wp_register_development_scripts($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesScripts(\WP_Scripts $scripts): void
    {
        wp_default_packages_scripts($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackagesInlineScripts(\WP_Scripts $scripts): void
    {
        wp_default_packages_inline_scripts($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpTinymceInlineScripts(): void
    {
        wp_tinymce_inline_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultPackages(\WP_Scripts $scripts): void
    {
        wp_default_packages($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpScriptsGetSuffix(string $type = ''): string
    {
        return wp_scripts_get_suffix($type);
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultScripts(\WP_Scripts $scripts): void
    {
        wp_default_scripts($scripts);
    }

    /**
     * @inheritDoc
     */
    public function wpDefaultStyles(\WP_Styles $styles): void
    {
        wp_default_styles($styles);
    }

    /**
     * @inheritDoc
     */
    public function wpPrototypeBeforeJquery(array $jsArray): array
    {
        return wp_prototype_before_jquery($jsArray);
    }

    /**
     * @inheritDoc
     */
    public function wpJustInTimeScriptLocalization(): void
    {
        wp_just_in_time_script_localization();
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeJqueryUiDatepicker(): void
    {
        wp_localize_jquery_ui_datepicker();
    }

    /**
     * @inheritDoc
     */
    public function wpLocalizeCommunityEvents(): void
    {
        wp_localize_community_events();
    }

    /**
     * @inheritDoc
     */
    public function wpStyleLoaderSrc(string $src, string $handle): string|false
    {
        return wp_style_loader_src($src, $handle);
    }

    /**
     * @inheritDoc
     */
    public function printHeadScripts(): array
    {
        return print_head_scripts();
    }

    /**
     * @inheritDoc
     */
    public function printFooterScripts(): array
    {
        return print_footer_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintHeadScripts(): array
    {
        return wp_print_head_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpPrintFooterScripts(): void
    {
        wp_print_footer_scripts();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScripts(): void
    {
        wp_enqueue_scripts();
    }

    /**
     * @inheritDoc
     */
    public function printAdminStyles(): array
    {
        return print_admin_styles();
    }

    /**
     * @inheritDoc
     */
    public function printLateStyles(): mixed
    {
        return print_late_styles();
    }

    /**
     * @inheritDoc
     */
    public function scriptConcatSettings(): void
    {
        script_concat_settings();
    }

    /**
     * @inheritDoc
     */
    public function wpCommonBlockScriptsAndStyles(): void
    {
        wp_common_block_scripts_and_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpFilterOutBlockNodes(array $nodes): array
    {
        return wp_filter_out_block_nodes($nodes);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStyles(): void
    {
        wp_enqueue_global_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStylesCustomCss(): void
    {
        wp_enqueue_global_styles_custom_css();
    }

    /**
     * @inheritDoc
     */
    public function wpShouldLoadBlockEditorScriptsAndStyles(): bool
    {
        return wp_should_load_block_editor_scripts_and_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpShouldLoadSeparateCoreBlockAssets(): bool
    {
        return wp_should_load_separate_core_block_assets();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueRegisteredBlockScriptsAndStyles(): void
    {
        wp_enqueue_registered_block_scripts_and_styles();
    }

    /**
     * @inheritDoc
     */
    public function enqueueBlockStylesAssets(): void
    {
        enqueue_block_styles_assets();
    }

    /**
     * @inheritDoc
     */
    public function enqueueEditorBlockStylesAssets(): void
    {
        enqueue_editor_block_styles_assets();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditorBlockDirectoryAssets(): void
    {
        wp_enqueue_editor_block_directory_assets();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueEditorFormatLibraryAssets(): void
    {
        wp_enqueue_editor_format_library_assets();
    }

    /**
     * @inheritDoc
     */
    public function wpSanitizeScriptAttributes(array $attributes): string
    {
        return wp_sanitize_script_attributes($attributes);
    }

    /**
     * @inheritDoc
     */
    public function wpGetScriptTag(array $attributes): string
    {
        return wp_get_script_tag($attributes);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintScriptTag(array $attributes): void
    {
        wp_print_script_tag($attributes);
    }

    /**
     * @inheritDoc
     */
    public function wpGetInlineScriptTag(string $data, array $attributes = []): string
    {
        return wp_get_inline_script_tag($data, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function wpPrintInlineScriptTag(string $data, array $attributes = []): void
    {
        wp_print_inline_script_tag($data, $attributes);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeInlineStyles(): void
    {
        wp_maybe_inline_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueGlobalStylesCssCustomProperties(): void
    {
        wp_enqueue_global_styles_css_custom_properties();
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueBlockSupportStyles(string $style, int $priority = 10): void
    {
        wp_enqueue_block_support_styles($style, $priority);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueStoredStyles(array $options = []): void
    {
        wp_enqueue_stored_styles($options);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueBlockStyle(string $blockName, array $args): void
    {
        wp_enqueue_block_style($blockName, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueClassicThemeStyles(): void
    {
        wp_enqueue_classic_theme_styles();
    }

    /**
     * @inheritDoc
     */
    public function wpAddEditorClassicThemeStyles(array $editorSettings): array
    {
        return wp_add_editor_classic_theme_styles($editorSettings);
    }

    /**
     * @inheritDoc
     */
    public function wpScriptModules(): \WP_Script_Modules
    {
        return wp_script_modules();
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterScriptModule(string $id, string $src, array $deps = [], string|false|null $version = false): void
    {
        wp_register_script_module($id, $src, $deps, $version);
    }

    /**
     * @inheritDoc
     */
    public function wpEnqueueScriptModule(string $id, string $src = '', array $deps = [], string|false|null $version = false): void
    {
        wp_enqueue_script_module($id, $src, $deps, $version);
    }

    /**
     * @inheritDoc
     */
    public function wpDequeueScriptModule(string $id): void
    {
        wp_dequeue_script_module($id);
    }

    /**
     * @inheritDoc
     */
    public function wpDeregisterScriptModule(string $id): void
    {
        wp_deregister_script_module($id);
    }

    /**
     * @inheritDoc
     */
    public function addShortcode(string $tag, callable $callback): void
    {
        add_shortcode($tag, $callback);
    }

    /**
     * @inheritDoc
     */
    public function removeShortcode(string $tag): void
    {
        remove_shortcode($tag);
    }

    /**
     * @inheritDoc
     */
    public function removeAllShortcodes(): void
    {
        remove_all_shortcodes();
    }

    /**
     * @inheritDoc
     */
    public function shortcodeExists(string $tag): bool
    {
        return shortcode_exists($tag);
    }

    /**
     * @inheritDoc
     */
    public function hasShortcode(string $content, string $tag): bool
    {
        return has_shortcode($content, $tag);
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeTagsInContent(string $content): array
    {
        return get_shortcode_tags_in_content($content);
    }

    /**
     * @inheritDoc
     */
    public function applyShortcodes(string $content, bool $ignoreHtml = false): string
    {
        return apply_shortcodes($content, $ignoreHtml);
    }

    /**
     * @inheritDoc
     */
    public function doShortcode(string $content, bool $ignoreHtml = false): string
    {
        return do_shortcode($content, $ignoreHtml);
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeRegex(array $tagnames = null): string
    {
        return get_shortcode_regex($tagnames);
    }

    /**
     * @inheritDoc
     */
    public function doShortcodesInHtmlTags(string $content, bool $ignoreHtml, array $tagnames): string
    {
        return do_shortcodes_in_html_tags($content, $ignoreHtml, $tagnames);
    }

    /**
     * @inheritDoc
     */
    public function unescapeInvalidShortcodes(string $content): string
    {
        return unescape_invalid_shortcodes($content);
    }

    /**
     * @inheritDoc
     */
    public function getShortcodeAttsRegex(): string
    {
        return get_shortcode_atts_regex();
    }

    /**
     * @inheritDoc
     */
    public function shortcodeParseAtts(string $text): array
    {
        return shortcode_parse_atts($text);
    }

    /**
     * @inheritDoc
     */
    public function shortcodeAtts(array $pairs, array $atts, string $shortcode = ''): array
    {
        return shortcode_atts($pairs, $atts, $shortcode);
    }

    /**
     * @inheritDoc
     */
    public function stripShortcodes(string $content): string
    {
        return strip_shortcodes($content);
    }

    /**
     * @inheritDoc
     */
    public function stripShortcodeTag(array $m): string|false
    {
        return strip_shortcode_tag($m);
    }

    /**
     * @inheritDoc
     */
    public function wpSitemapsGetServer(): \WP_Sitemaps
    {
        return wp_sitemaps_get_server();
    }

    /**
     * @inheritDoc
     */
    public function wpGetSitemapProviders(): array
    {
        return wp_get_sitemap_providers();
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterSitemapProvider(string $name, \WP_Sitemaps_Provider $provider): bool
    {
        return wp_register_sitemap_provider($name, $provider);
    }

    /**
     * @inheritDoc
     */
    public function wpSitemapsGetMaxUrls(string $objectType): int
    {
        return wp_sitemaps_get_max_urls($objectType);
    }

    /**
     * @inheritDoc
     */
    public function getSitemapUrl(string $name, string $subtypeName = '', int $page = 1): string|false
    {
        return get_sitemap_url($name, $subtypeName, $page);
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStyles(array $blockStyles, array $options = []): array
    {
        return wp_style_engine_get_styles($blockStyles, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStylesheetFromCssRules(array $cssRules, array $options = []): string
    {
        return wp_style_engine_get_stylesheet_from_css_rules($cssRules, $options);
    }

    /**
     * @inheritDoc
     */
    public function wpStyleEngineGetStylesheetFromContext(string $context, array $options = []): string
    {
        return wp_style_engine_get_stylesheet_from_context($context, $options);
    }

    /**
     * @inheritDoc
     */
    public function createInitialTaxonomies(): void
    {
        create_initial_taxonomies();
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomies(array $args = [], string $output = 'names', string $operator = 'and'): array
    {
        return get_taxonomies($args, $output, $operator);
    }

    /**
     * @inheritDoc
     */
    public function getObjectTaxonomies(string|array|\WP_Post $objectType, string $output = 'names'): array
    {
        return get_object_taxonomies($objectType, $output);
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomy(string $taxonomy): \WP_Taxonomy|false
    {
        return get_taxonomy($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function taxonomyExists(string $taxonomy): bool
    {
        return taxonomy_exists($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function isTaxonomyHierarchical(string $taxonomy): bool
    {
        return is_taxonomy_hierarchical($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): \WP_Taxonomy|\WP_Error
    {
        return register_taxonomy($taxonomy, $objectType, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterTaxonomy(string $taxonomy): true|\WP_Error
    {
        return unregister_taxonomy($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomyLabels(\WP_Taxonomy $tax): object
    {
        return get_taxonomy_labels($tax);
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        return register_taxonomy_for_object_type($taxonomy, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function unregisterTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        return unregister_taxonomy_for_object_type($taxonomy, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function getObjectsInTerm(int|array $termIds, string|array $taxonomies, array|string $args = []): array|\WP_Error
    {
        return get_objects_in_term($termIds, $taxonomies, $args);
    }

    /**
     * @inheritDoc
     */
    public function getTaxSql(array $taxQuery, string $primaryTable, string $primaryIdColumn): array
    {
        return get_tax_sql($taxQuery, $primaryTable, $primaryIdColumn);
    }

    /**
     * @inheritDoc
     */
    public function getTerm(int|object $term, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|\WP_Error|null
    {
        return get_term($term, $taxonomy, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getTermBy(string $field, string|int $value, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|false
    {
        return get_term_by($field, $value, $taxonomy, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getTermChildren(int $termId, string $taxonomy): array|\WP_Error
    {
        return get_term_children($termId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTermField(string $field, int|\WP_Term $term, string $taxonomy = '', string $context = 'display'): string|int|null|\WP_Error
    {
        return get_term_field($field, $term, $taxonomy, $context);
    }

    /**
     * @inheritDoc
     */
    public function getTermToEdit(int|object $id, string $taxonomy): string|int|null|\WP_Error
    {
        return get_term_to_edit($id, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTerms(array|string $args = [], array|string $deprecated = ''): array|string|\WP_Error
    {
        return get_terms($args, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function addTermMeta(int $termId, string $metaKey, mixed $metaValue, bool $unique = false): int|false|\WP_Error
    {
        return add_term_meta($termId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function deleteTermMeta(int $termId, string $metaKey, mixed $metaValue = ''): bool
    {
        return delete_term_meta($termId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getTermMeta(int $termId, string $key = '', bool $single = false): mixed
    {
        return get_term_meta($termId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function updateTermMeta(int $termId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool|\WP_Error
    {
        return update_term_meta($termId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function updateTermmetaCache(array $termIds): array|false
    {
        return update_termmeta_cache($termIds);
    }

    /**
     * @inheritDoc
     */
    public function wpLazyloadTermMeta(array $termIds): void
    {
        wp_lazyload_term_meta($termIds);
    }

    /**
     * @inheritDoc
     */
    public function hasTermMeta(int $termId): array|false
    {
        return has_term_meta($termId);
    }

    /**
     * @inheritDoc
     */
    public function registerTermMeta(string $taxonomy, string $metaKey, array $args): bool
    {
        return register_term_meta($taxonomy, $metaKey, $args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterTermMeta(string $taxonomy, string $metaKey): bool
    {
        return unregister_term_meta($taxonomy, $metaKey);
    }

    /**
     * @inheritDoc
     */
    public function termExists(int|string $term, string $taxonomy = '', int $parentTerm = null): mixed
    {
        return term_exists($term, $taxonomy, $parentTerm);
    }

    /**
     * @inheritDoc
     */
    public function termIsAncestorOf(int|object $term1, int|object $term2, string $taxonomy): bool
    {
        return term_is_ancestor_of($term1, $term2, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTerm(array|object $term, string $taxonomy, string $context = 'display'): array|object
    {
        return sanitize_term($term, $taxonomy, $context);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTermField(string $field, string $value, int $termId, string $taxonomy, string $context): mixed
    {
        return sanitize_term_field($field, $value, $termId, $taxonomy, $context);
    }

    /**
     * @inheritDoc
     */
    public function wpCountTerms(array|string $args = [], array|string $deprecated = ''): string|\WP_Error
    {
        return wp_count_terms($args, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteObjectTermRelationships(int $objectId, string|array $taxonomies): void
    {
        wp_delete_object_term_relationships($objectId, $taxonomies);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteTerm(int $term, string $taxonomy, array|string $args = []): bool|int|\WP_Error
    {
        return wp_delete_term($term, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteCategory(int $catId): bool|int|\WP_Error
    {
        return wp_delete_category($catId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetObjectTerms(int|array $objectIds, string|array $taxonomies, array|string $args = []): array|string|\WP_Error
    {
        return wp_get_object_terms($objectIds, $taxonomies, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertTerm(string $term, string $taxonomy, array|string $args = []): array|\WP_Error
    {
        return wp_insert_term($term, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpSetObjectTerms(int $objectId, string|int|array $terms, string $taxonomy, bool $append = false): array|\WP_Error
    {
        return wp_set_object_terms($objectId, $terms, $taxonomy, $append);
    }

    /**
     * @inheritDoc
     */
    public function wpAddObjectTerms(int $objectId, string|int|array $terms, array|string $taxonomy): array|\WP_Error
    {
        return wp_add_object_terms($objectId, $terms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpRemoveObjectTerms(int $objectId, string|int|array $terms, string $taxonomy): bool|\WP_Error
    {
        return wp_remove_object_terms($objectId, $terms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpUniqueTermSlug(string $slug, object $term): string
    {
        return wp_unique_term_slug($slug, $term);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTerm(int $termId, string $taxonomy, array $args = []): array|\WP_Error
    {
        return wp_update_term($termId, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpDeferTermCounting(bool $defer = null): bool
    {
        return wp_defer_term_counting($defer);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTermCount(int|array $terms, string $taxonomy, bool $doDeferred = false): bool
    {
        return wp_update_term_count($terms, $taxonomy, $doDeferred);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateTermCountNow(array $terms, string $taxonomy): true
    {
        return wp_update_term_count_now($terms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function cleanObjectTermCache(int|array $objectIds, array|string $objectType): void
    {
        clean_object_term_cache($objectIds, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function cleanTermCache(int|array $ids, string $taxonomy = '', bool $cleanTaxonomy = true): void
    {
        clean_term_cache($ids, $taxonomy, $cleanTaxonomy);
    }

    /**
     * @inheritDoc
     */
    public function cleanTaxonomyCache(string $taxonomy): void
    {
        clean_taxonomy_cache($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getObjectTermCache(int $id, string $taxonomy): bool|array|\WP_Error
    {
        return get_object_term_cache($id, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function updateObjectTermCache(string|array $objectIds, string|array $objectType): mixed
    {
        return update_object_term_cache($objectIds, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function updateTermCache(array $terms, string $taxonomy = ''): void
    {
        update_term_cache($terms, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpGetSplitTerms(int $oldTermId): array
    {
        return wp_get_split_terms($oldTermId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetSplitTerm(int $oldTermId, string $taxonomy): int|false
    {
        return wp_get_split_term($oldTermId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpTermIsShared(int $termId): bool
    {
        return wp_term_is_shared($termId);
    }

    /**
     * @inheritDoc
     */
    public function getTermLink(\WP_Term|int|string $term, string $taxonomy = ''): string|\WP_Error
    {
        return get_term_link($term, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function theTaxonomies(array $args = []): void
    {
        the_taxonomies($args);
    }

    /**
     * @inheritDoc
     */
    public function getTheTaxonomies(int|\WP_Post $post = 0, array $args = []): array
    {
        return get_the_taxonomies($post, $args);
    }

    /**
     * @inheritDoc
     */
    public function getPostTaxonomies(int|\WP_Post $post = 0): array
    {
        return get_post_taxonomies($post);
    }

    /**
     * @inheritDoc
     */
    public function isObjectInTerm(int $objectId, string $taxonomy, int|string|array $terms = null): bool|\WP_Error
    {
        return is_object_in_term($objectId, $taxonomy, $terms);
    }

    /**
     * @inheritDoc
     */
    public function isObjectInTaxonomy(string $objectType, string $taxonomy): bool
    {
        return is_object_in_taxonomy($objectType, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getAncestors(int $objectId = 0, string $objectType = '', string $resourceType = ''): array
    {
        return get_ancestors($objectId, $objectType, $resourceType);
    }

    /**
     * @inheritDoc
     */
    public function wpGetTermTaxonomyParentId(int $termId, string $taxonomy): int|false
    {
        return wp_get_term_taxonomy_parent_id($termId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function wpCheckTermHierarchyForLoops(int $parentTerm, int $termId, string $taxonomy): int
    {
        return wp_check_term_hierarchy_for_loops($parentTerm, $termId, $taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function isTaxonomyViewable(string|\WP_Taxonomy $taxonomy): bool
    {
        return is_taxonomy_viewable($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function isTermPubliclyViewable(int|\WP_Term $term): bool
    {
        return is_term_publicly_viewable($term);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetTermsLastChanged(): void
    {
        wp_cache_set_terms_last_changed();
    }

    /**
     * @inheritDoc
     */
    public function wpCheckTermMetaSupportPrefilter(mixed $check): mixed
    {
        return wp_check_term_meta_support_prefilter($check);
    }

    /**
     * @inheritDoc
     */
    public function getQueryTemplate(string $type, array $templates = []): string
    {
        return get_query_template($type, $templates);
    }

    /**
     * @inheritDoc
     */
    public function getIndexTemplate(): string
    {
        return get_index_template();
    }

    /**
     * @inheritDoc
     */
    public function get404Template(): string
    {
        return get_404_template();
    }

    /**
     * @inheritDoc
     */
    public function getArchiveTemplate(): string
    {
        return get_archive_template();
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeArchiveTemplate(): string
    {
        return get_post_type_archive_template();
    }

    /**
     * @inheritDoc
     */
    public function getAuthorTemplate(): string
    {
        return get_author_template();
    }

    /**
     * @inheritDoc
     */
    public function getCategoryTemplate(): string
    {
        return get_category_template();
    }

    /**
     * @inheritDoc
     */
    public function getTagTemplate(): string
    {
        return get_tag_template();
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomyTemplate(): string
    {
        return get_taxonomy_template();
    }

    /**
     * @inheritDoc
     */
    public function getDateTemplate(): string
    {
        return get_date_template();
    }

    /**
     * @inheritDoc
     */
    public function getHomeTemplate(): string
    {
        return get_home_template();
    }

    /**
     * @inheritDoc
     */
    public function getFrontPageTemplate(): string
    {
        return get_front_page_template();
    }

    /**
     * @inheritDoc
     */
    public function getPrivacyPolicyTemplate(): string
    {
        return get_privacy_policy_template();
    }

    /**
     * @inheritDoc
     */
    public function getPageTemplate(): string
    {
        return get_page_template();
    }

    /**
     * @inheritDoc
     */
    public function getSearchTemplate(): string
    {
        return get_search_template();
    }

    /**
     * @inheritDoc
     */
    public function getSingleTemplate(): string
    {
        return get_single_template();
    }

    /**
     * @inheritDoc
     */
    public function getEmbedTemplate(): string
    {
        return get_embed_template();
    }

    /**
     * @inheritDoc
     */
    public function getSingularTemplate(): string
    {
        return get_singular_template();
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentTemplate(): string
    {
        return get_attachment_template();
    }

    /**
     * @inheritDoc
     */
    public function wpSetTemplateGlobals(): void
    {
        wp_set_template_globals();
    }

    /**
     * @inheritDoc
     */
    public function locateTemplate(string|array $templateNames, bool $load = false, bool $loadOnce = true, array $args = []): string
    {
        return locate_template($templateNames, $load, $loadOnce, $args);
    }

    /**
     * @inheritDoc
     */
    public function loadTemplate(string $templateFile, bool $loadOnce = true, array $args = []): void
    {
        load_template($templateFile, $loadOnce, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemePreviewPath(string $currentStylesheet = null): string
    {
        return wp_get_theme_preview_path($currentStylesheet);
    }

    /**
     * @inheritDoc
     */
    public function wpAttachThemePreviewMiddleware(): void
    {
        wp_attach_theme_preview_middleware();
    }

    /**
     * @inheritDoc
     */
    public function wpInitializeThemePreviewHooks(): void
    {
        wp_initialize_theme_preview_hooks();
    }

    /**
     * @inheritDoc
     */
    public function wpSetUniqueSlugOnCreateTemplatePart(int $postId): void
    {
        wp_set_unique_slug_on_create_template_part($postId);
    }

    /**
     * @inheritDoc
     */
    public function wpGetThemes(array $args = []): array
    {
        return wp_get_themes($args);
    }

    /**
     * @inheritDoc
     */
    public function wpGetTheme(string $stylesheet = '', string $themeRoot = ''): \WP_Theme
    {
        return wp_get_theme($stylesheet, $themeRoot);
    }

    /**
     * @inheritDoc
     */
    public function wpCleanThemesCache(bool $clearUpdateCache = true): void
    {
        wp_clean_themes_cache($clearUpdateCache);
    }

    /**
     * @inheritDoc
     */
    public function isChildTheme(): bool
    {
        return is_child_theme();
    }

    /**
     * @inheritDoc
     */
    public function getStylesheet(): string
    {
        return get_stylesheet();
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectory(): string
    {
        return get_stylesheet_directory();
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectoryUri(): string
    {
        return get_stylesheet_directory_uri();
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetUri(): string
    {
        return get_stylesheet_uri();
    }

    /**
     * @inheritDoc
     */
    public function getLocaleStylesheetUri(): string
    {
        return get_locale_stylesheet_uri();
    }

    /**
     * @inheritDoc
     */
    public function getTemplate(): string
    {
        return get_template();
    }

    /**
     * @inheritDoc
     */
    public function getTemplateDirectory(): string
    {
        return get_template_directory();
    }

    /**
     * @inheritDoc
     */
    public function getTemplateDirectoryUri(): string
    {
        return get_template_directory_uri();
    }

    /**
     * @inheritDoc
     */
    public function getThemeRoots(): array|string
    {
        return get_theme_roots();
    }

    /**
     * @inheritDoc
     */
    public function registerThemeDirectory(string $directory): bool
    {
        return register_theme_directory($directory);
    }

    /**
     * @inheritDoc
     */
    public function searchThemeDirectories(bool $force = false): array|false
    {
        return search_theme_directories($force);
    }

    /**
     * @inheritDoc
     */
    public function getThemeRoot(string $stylesheetOrTemplate = ''): string
    {
        return get_theme_root($stylesheetOrTemplate);
    }

    /**
     * @inheritDoc
     */
    public function getThemeRootUri(string $stylesheetOrTemplate = '', string $themeRoot = ''): string
    {
        return get_theme_root_uri($stylesheetOrTemplate, $themeRoot);
    }

    /**
     * @inheritDoc
     */
    public function getRawThemeRoot(string $stylesheetOrTemplate, bool $skipCache = false): string
    {
        return get_raw_theme_root($stylesheetOrTemplate, $skipCache);
    }

    /**
     * @inheritDoc
     */
    public function localeStylesheet(): void
    {
        locale_stylesheet();
    }

    /**
     * @inheritDoc
     */
    public function switchTheme(string $stylesheet): void
    {
        switch_theme($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function validateCurrentTheme(): bool
    {
        return validate_current_theme();
    }

    /**
     * @inheritDoc
     */
    public function validateThemeRequirements(string $stylesheet): true|\WP_Error
    {
        return validate_theme_requirements($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function getThemeMods(): array
    {
        return get_theme_mods();
    }

    /**
     * @inheritDoc
     */
    public function getThemeMod(string $name, mixed $defaultValue = false): mixed
    {
        return get_theme_mod($name, $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function setThemeMod(string $name, mixed $value): bool
    {
        return set_theme_mod($name, $value);
    }

    /**
     * @inheritDoc
     */
    public function removeThemeMod(string $name): void
    {
        remove_theme_mod($name);
    }

    /**
     * @inheritDoc
     */
    public function removeThemeMods(): void
    {
        remove_theme_mods();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderTextcolor(): string
    {
        return get_header_textcolor();
    }

    /**
     * @inheritDoc
     */
    public function headerTextcolor(): void
    {
        header_textcolor();
    }

    /**
     * @inheritDoc
     */
    public function displayHeaderText(): bool
    {
        return display_header_text();
    }

    /**
     * @inheritDoc
     */
    public function hasHeaderImage(): bool
    {
        return has_header_image();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderImage(): string|false
    {
        return get_header_image();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderImageTag(array $attr = []): string
    {
        return get_header_image_tag($attr);
    }

    /**
     * @inheritDoc
     */
    public function theHeaderImageTag(array $attr = []): void
    {
        the_header_image_tag($attr);
    }

    /**
     * @inheritDoc
     */
    public function getRandomHeaderImage(): string
    {
        return get_random_header_image();
    }

    /**
     * @inheritDoc
     */
    public function isRandomHeaderImage(string $type = 'any'): bool
    {
        return is_random_header_image($type);
    }

    /**
     * @inheritDoc
     */
    public function headerImage(): void
    {
        header_image();
    }

    /**
     * @inheritDoc
     */
    public function getUploadedHeaderImages(): array
    {
        return get_uploaded_header_images();
    }

    /**
     * @inheritDoc
     */
    public function getCustomHeader(): object
    {
        return get_custom_header();
    }

    /**
     * @inheritDoc
     */
    public function registerDefaultHeaders(array $headers): void
    {
        register_default_headers($headers);
    }

    /**
     * @inheritDoc
     */
    public function unregisterDefaultHeaders(string|array $header): mixed
    {
        return unregister_default_headers($header);
    }

    /**
     * @inheritDoc
     */
    public function hasHeaderVideo(): bool
    {
        return has_header_video();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderVideoUrl(): string|false
    {
        return get_header_video_url();
    }

    /**
     * @inheritDoc
     */
    public function theHeaderVideoUrl(): void
    {
        the_header_video_url();
    }

    /**
     * @inheritDoc
     */
    public function getHeaderVideoSettings(): array
    {
        return get_header_video_settings();
    }

    /**
     * @inheritDoc
     */
    public function hasCustomHeader(): bool
    {
        return has_custom_header();
    }

    /**
     * @inheritDoc
     */
    public function isHeaderVideoActive(): bool
    {
        return is_header_video_active();
    }

    /**
     * @inheritDoc
     */
    public function getCustomHeaderMarkup(): string
    {
        return get_custom_header_markup();
    }

    /**
     * @inheritDoc
     */
    public function theCustomHeaderMarkup(): void
    {
        the_custom_header_markup();
    }

    /**
     * @inheritDoc
     */
    public function getBackgroundImage(): string
    {
        return get_background_image();
    }

    /**
     * @inheritDoc
     */
    public function backgroundImage(): void
    {
        background_image();
    }

    /**
     * @inheritDoc
     */
    public function getBackgroundColor(): string
    {
        return get_background_color();
    }

    /**
     * @inheritDoc
     */
    public function backgroundColor(): void
    {
        background_color();
    }

    /**
     * @inheritDoc
     */
    public function wpCustomCssCb(): void
    {
        wp_custom_css_cb();
    }

    /**
     * @inheritDoc
     */
    public function wpGetCustomCssPost(string $stylesheet = ''): \WP_Post|null
    {
        return wp_get_custom_css_post($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function wpGetCustomCss(string $stylesheet = ''): string
    {
        return wp_get_custom_css($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateCustomCssPost(string $css, array $args = []): \WP_Post|\WP_Error
    {
        return wp_update_custom_css_post($css, $args);
    }

    /**
     * @inheritDoc
     */
    public function addEditorStyle(array|string $stylesheet = 'editor-style.css'): void
    {
        add_editor_style($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function removeEditorStyles(): bool
    {
        return remove_editor_styles();
    }

    /**
     * @inheritDoc
     */
    public function getEditorStylesheets(): array
    {
        return get_editor_stylesheets();
    }

    /**
     * @inheritDoc
     */
    public function getThemeStarterContent(): array
    {
        return get_theme_starter_content();
    }

    /**
     * @inheritDoc
     */
    public function addThemeSupport(string $feature, mixed ...$args): mixed
    {
        return add_theme_support($feature, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function getThemeSupport(string $feature, mixed ...$args): mixed
    {
        return get_theme_support($feature, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function removeThemeSupport(string $feature): mixed
    {
        return remove_theme_support($feature);
    }

    /**
     * @inheritDoc
     */
    public function currentThemeSupports(string $feature, mixed ...$args): bool
    {
        return current_theme_supports($feature, ...$args);
    }

    /**
     * @inheritDoc
     */
    public function requireIfThemeSupports(string $feature, string $file): bool
    {
        return require_if_theme_supports($feature, $file);
    }

    /**
     * @inheritDoc
     */
    public function registerThemeFeature(string $feature, array $args = []): true|\WP_Error
    {
        return register_theme_feature($feature, $args);
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredThemeFeatures(): array
    {
        return get_registered_theme_features();
    }

    /**
     * @inheritDoc
     */
    public function getRegisteredThemeFeature(string $feature): array|null
    {
        return get_registered_theme_feature($feature);
    }

    /**
     * @inheritDoc
     */
    public function checkThemeSwitched(): void
    {
        check_theme_switched();
    }

    /**
     * @inheritDoc
     */
    public function wpCustomizeUrl(string $stylesheet = ''): string
    {
        return wp_customize_url($stylesheet);
    }

    /**
     * @inheritDoc
     */
    public function wpCustomizeSupportScript(): void
    {
        wp_customize_support_script();
    }

    /**
     * @inheritDoc
     */
    public function isCustomizePreview(): bool
    {
        return is_customize_preview();
    }

    /**
     * @inheritDoc
     */
    public function createInitialThemeFeatures(): void
    {
        create_initial_theme_features();
    }

    /**
     * @inheritDoc
     */
    public function wpIsBlockTheme(): bool
    {
        return wp_is_block_theme();
    }

    /**
     * @inheritDoc
     */
    public function wpThemeGetElementClassName(string $element): string
    {
        return wp_theme_get_element_class_name($element);
    }

    /**
     * @inheritDoc
     */
    public function wpVersionCheck(array $extraStats = [], bool $forceCheck = false): void
    {
        wp_version_check($extraStats, $forceCheck);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdatePlugins(array $extraStats = []): void
    {
        wp_update_plugins($extraStats);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateThemes(array $extraStats = []): void
    {
        wp_update_themes($extraStats);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeAutoUpdate(): void
    {
        wp_maybe_auto_update();
    }

    /**
     * @inheritDoc
     */
    public function wpGetTranslationUpdates(): array
    {
        return wp_get_translation_updates();
    }

    /**
     * @inheritDoc
     */
    public function wpGetUpdateData(): array
    {
        return wp_get_update_data();
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateChecks(): void
    {
        wp_schedule_update_checks();
    }

    /**
     * @inheritDoc
     */
    public function wpCleanUpdateCache(): void
    {
        wp_clean_update_cache();
    }

    /**
     * @inheritDoc
     */
    public function wpDeleteAllTempBackups(): void
    {
        wp_delete_all_temp_backups();
    }

    /**
     * @inheritDoc
     */
    public function wpSignon(array $credentials = [], string|bool $secureCookie = ''): \WP_User|\WP_Error
    {
        return wp_signon($credentials, $secureCookie);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateUsernamePassword(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error
    {
        return wp_authenticate_username_password($user, $username, $password);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateEmailPassword(\WP_User|\WP_Error|null $user, string $email, string $password): \WP_User|\WP_Error
    {
        return wp_authenticate_email_password($user, $email, $password);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateCookie(\WP_User|\WP_Error|null $user, string $username, string $password): \WP_User|\WP_Error
    {
        return wp_authenticate_cookie($user, $username, $password);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateApplicationPassword(\WP_User|\WP_Error|null $inputUser, string $username, string $password): \WP_User|\WP_Error|null
    {
        return wp_authenticate_application_password($inputUser, $username, $password);
    }

    /**
     * @inheritDoc
     */
    public function wpValidateApplicationPassword(int|false $inputUser): int|false
    {
        return wp_validate_application_password($inputUser);
    }

    /**
     * @inheritDoc
     */
    public function wpAuthenticateSpamCheck(\WP_User|\WP_Error|null $user): \WP_User|\WP_Error
    {
        return wp_authenticate_spam_check($user);
    }

    /**
     * @inheritDoc
     */
    public function wpValidateLoggedInCookie(int|false $userId): int|false
    {
        return wp_validate_logged_in_cookie($userId);
    }

    /**
     * @inheritDoc
     */
    public function countUserPosts(int $userid, array|string $postType = 'post', bool $publicOnly = false): string
    {
        return count_user_posts($userid, $postType, $publicOnly);
    }

    /**
     * @inheritDoc
     */
    public function countManyUsersPosts(array $users, string|array $postType = 'post', bool $publicOnly = false): array
    {
        return count_many_users_posts($users, $postType, $publicOnly);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentUserId(): int
    {
        return get_current_user_id();
    }

    /**
     * @inheritDoc
     */
    public function getUserOption(string $option, int $user = 0, string $deprecated = ''): mixed
    {
        return get_user_option($option, $user, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function updateUserOption(int $userId, string $optionName, mixed $newvalue, bool $isGlobal = false): int|bool
    {
        return update_user_option($userId, $optionName, $newvalue, $isGlobal);
    }

    /**
     * @inheritDoc
     */
    public function deleteUserOption(int $userId, string $optionName, bool $isGlobal = false): bool
    {
        return delete_user_option($userId, $optionName, $isGlobal);
    }

    /**
     * @inheritDoc
     */
    public function getUsers(array $args = []): array
    {
        return get_users($args);
    }

    /**
     * @inheritDoc
     */
    public function wpListUsers(string|array $args = []): string|null
    {
        return wp_list_users($args);
    }

    /**
     * @inheritDoc
     */
    public function getBlogsOfUser(int $userId, bool $all = false): array
    {
        return get_blogs_of_user($userId, $all);
    }

    /**
     * @inheritDoc
     */
    public function isUserMemberOfBlog(int $userId = 0, int $blogId = 0): bool
    {
        return is_user_member_of_blog($userId, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function addUserMeta(int $userId, string $metaKey, mixed $metaValue, bool $unique = false): int|false
    {
        return add_user_meta($userId, $metaKey, $metaValue, $unique);
    }

    /**
     * @inheritDoc
     */
    public function deleteUserMeta(int $userId, string $metaKey, mixed $metaValue = ''): bool
    {
        return delete_user_meta($userId, $metaKey, $metaValue);
    }

    /**
     * @inheritDoc
     */
    public function getUserMeta(int $userId, string $key = '', bool $single = false): mixed
    {
        return get_user_meta($userId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function updateUserMeta(int $userId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): int|bool
    {
        return update_user_meta($userId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function countUsers(string $strategy = 'time', int|null $siteId = null): array
    {
        return count_users($strategy, $siteId);
    }

    /**
     * @inheritDoc
     */
    public function getUserCount(int|null $networkId = null): int
    {
        return get_user_count($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpMaybeUpdateUserCounts(int|null $networkId = null): bool
    {
        return wp_maybe_update_user_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUserCounts(int|null $networkId = null): bool
    {
        return wp_update_user_counts($networkId);
    }

    /**
     * @inheritDoc
     */
    public function wpScheduleUpdateUserCounts(): void
    {
        wp_schedule_update_user_counts();
    }

    /**
     * @inheritDoc
     */
    public function wpIsLargeUserCount(int|null $networkId = null): bool
    {
        return wp_is_large_user_count($networkId);
    }

    /**
     * @inheritDoc
     */
    public function setupUserdata(int $forUserId = 0): void
    {
        setup_userdata($forUserId);
    }

    /**
     * @inheritDoc
     */
    public function wpDropdownUsers(array|string $args = ''): string
    {
        return wp_dropdown_users($args);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeUserField(string $field, mixed $value, int $userId, string $context): mixed
    {
        return sanitize_user_field($field, $value, $userId, $context);
    }

    /**
     * @inheritDoc
     */
    public function updateUserCaches(object $user): mixed
    {
        return update_user_caches($user);
    }

    /**
     * @inheritDoc
     */
    public function cleanUserCache(\WP_User|int $user): void
    {
        clean_user_cache($user);
    }

    /**
     * @inheritDoc
     */
    public function usernameExists(string $username): int|false
    {
        return username_exists($username);
    }

    /**
     * @inheritDoc
     */
    public function emailExists(string $email): int|false
    {
        return email_exists($email);
    }

    /**
     * @inheritDoc
     */
    public function validateUsername(string $username): bool
    {
        return validate_username($username);
    }

    /**
     * @inheritDoc
     */
    public function wpInsertUser(array|object $userdata): int|\WP_Error
    {
        return wp_insert_user($userdata);
    }

    /**
     * @inheritDoc
     */
    public function wpUpdateUser(array|object $userdata): int|\WP_Error
    {
        return wp_update_user($userdata);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateUser(string $username, string $password, string $email = ''): int|\WP_Error
    {
        return wp_create_user($username, $password, $email);
    }

    /**
     * @inheritDoc
     */
    public function wpGetUserContactMethods(\WP_User|null $user = null): array
    {
        return wp_get_user_contact_methods($user);
    }

    /**
     * @inheritDoc
     */
    public function wpGetPasswordHint(): string
    {
        return wp_get_password_hint();
    }

    /**
     * @inheritDoc
     */
    public function getPasswordResetKey(\WP_User $user): string|\WP_Error
    {
        return get_password_reset_key($user);
    }

    /**
     * @inheritDoc
     */
    public function checkPasswordResetKey(string $key, string $login): \WP_User|\WP_Error
    {
        return check_password_reset_key($key, $login);
    }

    /**
     * @inheritDoc
     */
    public function retrievePassword(string $userLogin = null): true|\WP_Error
    {
        return retrieve_password($userLogin);
    }

    /**
     * @inheritDoc
     */
    public function resetPassword(\WP_User $user, string $newPass): void
    {
        reset_password($user, $newPass);
    }

    /**
     * @inheritDoc
     */
    public function registerNewUser(string $userLogin, string $userEmail): int|\WP_Error
    {
        return register_new_user($userLogin, $userEmail);
    }

    /**
     * @inheritDoc
     */
    public function wpSendNewUserNotifications(int $userId, string $notify = 'both'): void
    {
        wp_send_new_user_notifications($userId, $notify);
    }

    /**
     * @inheritDoc
     */
    public function wpGetSessionToken(): string
    {
        return wp_get_session_token();
    }

    /**
     * @inheritDoc
     */
    public function wpGetAllSessions(): array
    {
        return wp_get_all_sessions();
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyCurrentSession(): void
    {
        wp_destroy_current_session();
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyOtherSessions(): void
    {
        wp_destroy_other_sessions();
    }

    /**
     * @inheritDoc
     */
    public function wpDestroyAllSessions(): void
    {
        wp_destroy_all_sessions();
    }

    /**
     * @inheritDoc
     */
    public function wpGetUsersWithNoRole(int|null $siteId = null): array
    {
        return wp_get_users_with_no_role($siteId);
    }

    /**
     * @inheritDoc
     */
    public function sendConfirmationOnProfileEmail(): void
    {
        send_confirmation_on_profile_email();
    }

    /**
     * @inheritDoc
     */
    public function newUserEmailAdminNotice(): void
    {
        new_user_email_admin_notice();
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterUserPersonalDataExporter(array $exporters): array
    {
        return wp_register_user_personal_data_exporter($exporters);
    }

    /**
     * @inheritDoc
     */
    public function wpUserPersonalDataExporter(string $emailAddress): array
    {
        return wp_user_personal_data_exporter($emailAddress);
    }

    /**
     * @inheritDoc
     */
    public function wpCreateUserRequest(string $emailAddress = '', string $actionName = '', array $requestData = [], string $status = 'pending'): int|\WP_Error
    {
        return wp_create_user_request($emailAddress, $actionName, $requestData, $status);
    }

    /**
     * @inheritDoc
     */
    public function wpUserRequestActionDescription(string $actionName): string
    {
        return wp_user_request_action_description($actionName);
    }

    /**
     * @inheritDoc
     */
    public function wpSendUserRequest(string $requestId): true|\WP_Error
    {
        return wp_send_user_request($requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpGenerateUserRequestKey(int $requestId): string
    {
        return wp_generate_user_request_key($requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpValidateUserRequestKey(string $requestId, string $key): true|\WP_Error
    {
        return wp_validate_user_request_key($requestId, $key);
    }

    /**
     * @inheritDoc
     */
    public function wpGetUserRequest(int $requestId): \WP_User_Request|false
    {
        return wp_get_user_request($requestId);
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsSupported(): bool
    {
        return wp_is_application_passwords_supported();
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsAvailable(): bool
    {
        return wp_is_application_passwords_available();
    }

    /**
     * @inheritDoc
     */
    public function wpIsApplicationPasswordsAvailableForUser(int|\WP_User $user): bool
    {
        return wp_is_application_passwords_available_for_user($user);
    }

    /**
     * @inheritDoc
     */
    public function wpCacheSetUsersLastChanged(): void
    {
        wp_cache_set_users_last_changed();
    }

    /**
     * @inheritDoc
     */
    public function wpIsPasswordResetAllowedForUser(int|\WP_User $user): bool|\WP_Error
    {
        return wp_is_password_reset_allowed_for_user($user);
    }

    /**
     * @inheritDoc
     */
    public function wpIsMobile(): bool
    {
        return wp_is_mobile();
    }

    /**
     * @inheritDoc
     */
    public function registerWidget(string|\WP_Widget $widget): void
    {
        register_widget($widget);
    }

    /**
     * @inheritDoc
     */
    public function unregisterWidget(string|\WP_Widget $widget): void
    {
        unregister_widget($widget);
    }

    /**
     * @inheritDoc
     */
    public function registerSidebars(int $number = 1, array|string $args = []): void
    {
        register_sidebars($number, $args);
    }

    /**
     * @inheritDoc
     */
    public function registerSidebar(array|string $args = []): string
    {
        return register_sidebar($args);
    }

    /**
     * @inheritDoc
     */
    public function unregisterSidebar(string|int $sidebarId): void
    {
        unregister_sidebar($sidebarId);
    }

    /**
     * @inheritDoc
     */
    public function isRegisteredSidebar(string|int $sidebarId): bool
    {
        return is_registered_sidebar($sidebarId);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterSidebarWidget(int|string $id, string $name, callable $outputCallback, array $options = [], mixed ...$params): void
    {
        wp_register_sidebar_widget($id, $name, $outputCallback, $options, ...$params);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetDescription(int|string $id): mixed
    {
        return wp_widget_description($id);
    }

    /**
     * @inheritDoc
     */
    public function wpSidebarDescription(string $id): mixed
    {
        return wp_sidebar_description($id);
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterSidebarWidget(int|string $id): void
    {
        wp_unregister_sidebar_widget($id);
    }

    /**
     * @inheritDoc
     */
    public function wpRegisterWidgetControl(int|string $id, string $name, callable $controlCallback, array $options = [], mixed ...$params): void
    {
        wp_register_widget_control($id, $name, $controlCallback, $options, ...$params);
    }

    /**
     * @inheritDoc
     */
    public function wpUnregisterWidgetControl(int|string $id): void
    {
        wp_unregister_widget_control($id);
    }

    /**
     * @inheritDoc
     */
    public function dynamicSidebar(int|string $index = 1): bool
    {
        return dynamic_sidebar($index);
    }

    /**
     * @inheritDoc
     */
    public function isActiveWidget(callable|false $callback = false, string|false $widgetId = false, string|false $idBase = false, bool $skipInactive = true): string|false
    {
        return is_active_widget($callback, $widgetId, $idBase, $skipInactive);
    }

    /**
     * @inheritDoc
     */
    public function isDynamicSidebar(): bool
    {
        return is_dynamic_sidebar();
    }

    /**
     * @inheritDoc
     */
    public function isActiveSidebar(string|int $index): bool
    {
        return is_active_sidebar($index);
    }

    /**
     * @inheritDoc
     */
    public function wpGetSidebar(string $id): array|null
    {
        return wp_get_sidebar($id);
    }

    /**
     * @inheritDoc
     */
    public function wpConvertWidgetSettings(string $baseName, string $optionName, array $settings): array
    {
        return wp_convert_widget_settings($baseName, $optionName, $settings);
    }

    /**
     * @inheritDoc
     */
    public function theWidget(string $widget, array $instance = [], array $args = []): void
    {
        the_widget($widget, $instance, $args);
    }

    /**
     * @inheritDoc
     */
    public function retrieveWidgets(string|bool $themeChanged = false): array
    {
        return retrieve_widgets($themeChanged);
    }

    /**
     * @inheritDoc
     */
    public function wpMapSidebarsWidgets(array $existingSidebarsWidgets): array
    {
        return wp_map_sidebars_widgets($existingSidebarsWidgets);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssOutput(string|array|object $rss, array $args = []): void
    {
        wp_widget_rss_output($rss, $args);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssForm(array|string $args, array $inputs = null): void
    {
        wp_widget_rss_form($args, $inputs);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetRssProcess(array $widgetRss, bool $checkFeed = true): array
    {
        return wp_widget_rss_process($widgetRss, $checkFeed);
    }

    /**
     * @inheritDoc
     */
    public function wpWidgetsInit(): void
    {
        wp_widgets_init();
    }

    /**
     * @inheritDoc
     */
    public function wpUseWidgetsBlockEditor(): bool
    {
        return wp_use_widgets_block_editor();
    }

    /**
     * @inheritDoc
     */
    public function wpParseWidgetId(string $id): array
    {
        return wp_parse_widget_id($id);
    }

    /**
     * @inheritDoc
     */
    public function wpFindWidgetsSidebar(string $widgetId): string|null
    {
        return wp_find_widgets_sidebar($widgetId);
    }

    /**
     * @inheritDoc
     */
    public function wpAssignWidgetToSidebar(string $widgetId, string $sidebarId): void
    {
        wp_assign_widget_to_sidebar($widgetId, $sidebarId);
    }

    /**
     * @inheritDoc
     */
    public function wpRenderWidget(string $widgetId, string $sidebarId): string
    {
        return wp_render_widget($widgetId, $sidebarId);
    }

    /**
     * @inheritDoc
     */
    public function wpRenderWidgetControl(string $id): string|null
    {
        return wp_render_widget_control($id);
    }

    /**
     * @inheritDoc
     */
    public function loginHeader(string|null $title = null, string $message = '', \WP_Error|null $wpError = null): void
    {
        login_header($title, $message, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function loginFooter(string $inputId = ''): void
    {
        login_footer($inputId);
    }

    /**
     * @inheritDoc
     */
    public function wpShakeJs(): void
    {
        wp_shake_js();
    }

    /**
     * @inheritDoc
     */
    public function wpLoginViewportMeta(): void
    {
        wp_login_viewport_meta();
    }

    /**
     * @inheritDoc
     */
    public function doSignupHeader(): void
    {
        do_signup_header();
    }

    /**
     * @inheritDoc
     */
    public function wpmuSignupStylesheet(): void
    {
        wpmu_signup_stylesheet();
    }

    /**
     * @inheritDoc
     */
    public function showBlogForm(string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        show_blog_form($blogname, $blogTitle, $errors);
    }

    /**
     * @inheritDoc
     */
    public function validateBlogForm(): array
    {
        return validate_blog_form();
    }

    /**
     * @inheritDoc
     */
    public function showUserForm(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void
    {
        show_user_form($userName, $userEmail, $errors);
    }

    /**
     * @inheritDoc
     */
    public function validateUserForm(): array
    {
        return validate_user_form();
    }

    /**
     * @inheritDoc
     */
    public function signupAnotherBlog(string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        signup_another_blog($blogname, $blogTitle, $errors);
    }

    /**
     * @inheritDoc
     */
    public function validateAnotherBlogSignup(): null|bool
    {
        return validate_another_blog_signup();
    }

    /**
     * @inheritDoc
     */
    public function confirmAnotherBlogSignup(string $domain, string $path, string $blogTitle, string $userName, string $userEmail = '', array $meta = [], int $blogId = 0): void
    {
        confirm_another_blog_signup($domain, $path, $blogTitle, $userName, $userEmail, $meta, $blogId);
    }

    /**
     * @inheritDoc
     */
    public function signupUser(string $userName = '', string $userEmail = '', \WP_Error|string $errors = ''): void
    {
        signup_user($userName, $userEmail, $errors);
    }

    /**
     * @inheritDoc
     */
    public function validateUserSignup(): bool
    {
        return validate_user_signup();
    }

    /**
     * @inheritDoc
     */
    public function confirmUserSignup(string $userName, string $userEmail): void
    {
        confirm_user_signup($userName, $userEmail);
    }

    /**
     * @inheritDoc
     */
    public function signupBlog(string $userName = '', string $userEmail = '', string $blogname = '', string $blogTitle = '', \WP_Error|string $errors = ''): void
    {
        signup_blog($userName, $userEmail, $blogname, $blogTitle, $errors);
    }

    /**
     * @inheritDoc
     */
    public function validateBlogSignup(): bool
    {
        return validate_blog_signup();
    }

    /**
     * @inheritDoc
     */
    public function confirmBlogSignup(string $domain, string $path, string $blogTitle, string $userName = '', string $userEmail = '', array $meta = []): void
    {
        confirm_blog_signup($domain, $path, $blogTitle, $userName, $userEmail, $meta);
    }

    /**
     * @inheritDoc
     */
    public function signupGetAvailableLanguages(): array
    {
        return signup_get_available_languages();
    }

    /**
     * @inheritDoc
     */
    public function trackbackResponse(int|bool $error = 0, string $errorMessage = ''): void
    {
        trackback_response($error, $errorMessage);
    }
}
