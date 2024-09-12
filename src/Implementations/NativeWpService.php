<?php

namespace WpService\Implementations;

use WpService\WpService;
use WP_Error;
use WP_Post;
use WP_Post_Type;
use WP_REST_Response;
use WP_Role;
use WP_Screen;
use WP_Taxonomy;
use WP_Term;
use WP_User;

/**
 * Class NativeWpService
 *
 * Implements the WPService interface.
 */
class NativeWpService implements WPService
{
    /**
     * @inheritDoc
     */
    public function addAction(
        string $tag,
        callable $function_to_add,
        int $priority = 10,
        int $accepted_args = 1
    ): bool {
        return add_action($tag, $function_to_add, $priority, $accepted_args);
    }

    /**
     * @inheritDoc
     */
    public function addFilter(
        string $tag,
        callable $function_to_add,
        int $priority = 10,
        int $accepted_args = 1
    ): bool {
        return add_filter($tag, $function_to_add, $priority, $accepted_args);
    }

    /**
     * @inheritDoc
     */
    public function addMetaBox(
        string $id,
        string $title,
        callable $callback,
        string|array|WP_Screen $screen = null,
        string $context = ‘advanced’,
        string $priority = ‘default’,
        array $callback_args = null
    ): void {
        add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args);
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
    public function deleteTerm(int $term, string $taxonomy, array|string $args = array()): bool|int|WP_Error
    {
        return wp_delete_term($term, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function getPermalink(null|int|WP_Post $post = null, bool $leavename = false): string|false
    {
        return get_permalink($post, $leavename);
    }

    /**
     * @inheritDoc
     */
    public function getPost(
        null|int|WP_Post $post = null,
        string $output = OBJECT,
        string $filter = "raw"
    ): WP_Post|array|null {
        return get_post($post, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getPostMeta($postId, $key = '', $single = false): mixed
    {
        return get_post_meta($postId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function getPostParent(int|WP_Post|null $postId): ?WP_Post
    {
        $parent = get_post_parent($postId);

        if (is_a($parent, WP_Post::class)) {
            return $parent;
        }

        return null;
    }

    /**
     * @inheritDoc
     */
    public function getPosts(?array $args): array
    {
        return get_posts($args);
    }

    /**
     * @inheritDoc
     */
    public function getTaxonomy(string $taxonomy): WP_Taxonomy|false
    {
        return get_taxonomy($taxonomy);
    }

    /**
     * @inheritDoc
     */
    public function getTerm(
        int|object $term,
        string $taxonomy = '',
        string $output = OBJECT,
        string $filter = 'raw'
    ): WP_Term|array|WP_Error|null {
        return get_term($term, $taxonomy, $output, $filter);
    }

    /**
     * @inheritDoc
     */
    public function getTermMeta(int $term_id, string $key = '', bool $single = false): mixed
    {
        return get_term_meta($term_id, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function getTerms(array|string $args = array(), array|string $deprecated = ""): array|string|WP_Error
    {
        return get_terms($args, $deprecated);
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailUrl(
        int|WP_Post $postId,
        string|array $size = 'post-thumbnail'
    ): string|false {
        return get_the_post_thumbnail_url($postId, $size);
    }

    /**
     * @inheritDoc
     */
    public function getTheTitle(int|WP_Post $post = 0): string
    {
        return get_the_title($post);
    }

    /**
     * @inheritDoc
     */
    public function isWPError(mixed $thing): bool
    {
        return is_wp_error($thing);
    }

    /**
     * @inheritDoc
     */
    public function registerPostType(string $postType, array $args = []): void
    {
        register_post_type($postType, $args);
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): void
    {
        register_taxonomy($taxonomy, $objectType, $args);
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
    public function removeSubMenuPage(string $menuSlug, string $submenuSlug): array|false
    {
        return remove_submenu_page($menuSlug, $submenuSlug);
    }

    /**
     * @inheritDoc
     */
    public function termExists(int|string $term, string $taxonomy = "", ?int $parentTerm = null): null|int|array
    {
        return term_exists($term, $taxonomy, $parentTerm);
    }

    /**
     * @inheritDoc
     */
    public function getPostTerms(
        int $post_id,
        string|array $taxonomy = 'post_tag',
        array $args = array()
    ): array|WP_Error {
        return wp_get_post_terms($post_id, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function insertTerm(
        string $term,
        string $taxonomy = "",
        array $args = []
    ): array|WP_Error {
        return wp_insert_term($term, $taxonomy, $args);
    }

    /**
     * @inheritDoc
     */
    public function setPostTerms(
        int $postId,
        string|array $terms = "",
        string $taxonomy = "post_tag",
        bool $append = false
    ): array|false|WP_Error {
        return wp_set_post_terms($postId, $terms, $taxonomy, $append);
    }

    /**
     * @inheritDoc
     */
    public function loadPluginTextDomain(string $domain, string $path, string $relativeTo): void
    {
        load_plugin_textdomain($domain, $path, $relativeTo);
    }

    /**
     * @inheritDoc
     */
    public function getTheId(): int|false
    {
        return get_the_ID();
    }

    /**
     * @inheritDoc
     */
    public function getEditTermLink(int|WP_Term $term, string $taxonomy = '', string $objectType = ''): ?string
    {
        return get_edit_term_link($term, $taxonomy, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function restEnsureResponse($response): WP_REST_Response|WP_Error
    {
        return rest_ensure_response($response);
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
    public function deletePost(int $postId, bool $forceDelete): void
    {
        wp_delete_post($postId, $forceDelete);
    }

    /**
     * @inheritDoc
     */
    public function adminNotice(string $message, array $args): void
    {
        wp_admin_notice($message, $args);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentScreen(): ?WP_Screen
    {
        return get_current_screen();
    }

    /**
     * @inheritDoc
     */
    public function navMenuDisabledCheck(int|string $nav_menu_selected_id, bool $display = true): string|false
    {
        return wp_nav_menu_disabled_check($nav_menu_selected_id, $display);
    }

    /**
     * @inheritDoc
     */
    public function nextScheduled(string $hook, array $args = []): int|false
    {
        return wp_next_scheduled($hook, $args);
    }

    /**
     * @inheritDoc
     */
    public function scheduleEvent(
        int $timestamp,
        string $recurrence,
        string $hook,
        array $args = [],
        bool $wpError = false
    ): bool|WP_Error {
        return wp_schedule_event($timestamp, $recurrence, $hook, $args, $wpError);
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
    public function getObjectTaxonomies(string|array $objectType, string $output = 'names'): array
    {
        return get_object_taxonomies($objectType, $output);
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
    public function enqueueStyle(
        string $handle
    ): void {
        if (wp_style_is($handle, 'registered') === false) {
            throw new \Exception(
                "The style with handle {$handle} is not registered and cannot be enqueued."
            );
        }
        if (wp_style_is($handle, 'enqueued') === true) {
            throw new \Exception(
                "The style with handle {$handle} is already enqueued and cannot be enqueued again."
            );
        }
        wp_enqueue_style($handle);
    }

    /**
     * @inheritDoc
     */
    public function enqueueScript(
        string $handle
    ): void {
        if (wp_script_is($handle, 'registered') === false) {
            throw new \Exception(
                "The script with handle " . esc_html($handle) . " is not registered and cannot be enqueued."
            );
        }

        if (wp_script_is($handle, 'enqueued') === true) {
            throw new \Exception(
                "The script with handle " . esc_html($handle) . " is already enqueued and cannot be enqueued again."
            );
        }
        wp_enqueue_script($handle);
    }

    /**
     * @inheritDoc
     */
    public function registerStyle(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        string $media = 'all'
    ): void {
        wp_register_style($handle, $src, $deps, $ver, $media);
    }

    /**
     * @inheritDoc
     */
    public function registerScript(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        bool $in_footer = true
    ): void {
        wp_register_script($handle, $src, $deps, $ver, $in_footer);
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
    public function getEnvironmentType(): string
    {
        return wp_get_environment_type();
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
    public function pluginsUrl(string $path = '', string $plugin = ''): string
    {
        return plugins_url($path, $plugin);
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
    public function addRole(string $role, string $displayName, array $capabilities): ?WP_Role
    {
        return add_role($role, $displayName, $capabilities) ?: null;
    }

    /**
     * @inheritDoc
     */
    public function getUsers(array $args): array
    {
        return get_users($args);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentUser(): WP_User
    {
        return wp_get_current_user();
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
    public function getPostStatuses(): array
    {
        return get_post_statuses();
    }

    /**
     * @inheritDoc
     */
    public function mail(
        string|array $to,
        string $subject,
        string $message,
        string|array $headers = '',
        string|array $attachments = array()
    ): bool {
        return wp_mail($to, $subject, $message, $headers, $attachments);
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
    public function getUserMeta(int $userId, string $key, bool $single = false): mixed
    {
        return get_user_meta($userId, $key, $single);
    }

    /**
     * @inheritDoc
     */
    public function getUserdata(int $userId): WP_User|false
    {
        return get_userdata($userId);
    }

    /**
     * @inheritDoc
     */
    public function __($text, $domain = 'default'): string // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        return __($text, $domain); // phpcs:ignore
    }

    /**
     * @inheritDoc
     */
    public function _e($text, $domain = 'default'): void // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        _e($text, $domain); // phpcs:ignore
    }

    /**
     * @inheritDoc
     */
    public function getEditPostLink(int|WP_Post $post, string $context = 'display'): ?string
    {
        return get_edit_post_link($post, $context);
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
    public function getThemeMods(): array
    {
        return get_theme_mods();
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
    public function getBloginfo(string $show, string $filter = 'raw'): string
    {
        return get_bloginfo($show, $filter);
    }

    /**
     * @inheritDoc
     */
    public function autop(string $text, bool $br = true): string
    {
        return wpautop($text, $br);
    }

    /**
     * @inheritDoc
     */
    public function cacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_add($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function cacheAddMultiple(array $items, string $group = '', int $expire = 0): array
    {
        return wp_cache_add_multiple($items, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function cacheDelete(int|string $key, string $group = ''): bool
    {
        return wp_cache_delete($key, $group);
    }

    /**
     * @inheritDoc
     */
    public function cacheDeleteMultiple(array $keys, string $group = ''): bool
    {
        return wp_cache_delete_multiple($keys, $group);
    }

    /**
     * @inheritDoc
     */
    public function cacheFlush(): bool
    {
        return wp_cache_flush();
    }

    /**
     * @inheritDoc
     */
    public function cacheGet(int|string $key, string $group = '', bool $force = false, ?bool &$found = null): mixed
    {
        return wp_cache_get($key, $group, $force, $found);
    }

    /**
     * @inheritDoc
     */
    public function cacheGetMultiple(array $keys, string $group = '', bool $force = false): array
    {
        return wp_cache_get_multiple($keys, $group, $force);
    }

    /**
     * @inheritDoc
     */
    public function cacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_replace($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function cacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return wp_cache_set($key, $data, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function cacheSetMultiple(array $items, string $group = '', int $expire = 0): array
    {
        return wp_cache_set_multiple($items, $group, $expire);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitle($title, $fallbackTitle = '', $context = 'save'): string
    {
        return sanitize_title($title, $fallbackTitle, $context);
    }

    /**
     * @inheritDoc
     */
    public function insertPost($postarr, $wpError = false, $fireAfterHooks = true): int|WP_Error
    {
        return wp_insert_post($postarr, $wpError, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function mediaSideloadImage($file, $postId = 0, $desc = null, $returnType = 'html'): string|int|WP_Error
    {
        require_once(ABSPATH . 'wp-admin/includes/media.php');
        require_once(ABSPATH . 'wp-admin/includes/file.php');
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        return media_sideload_image($file, $postId, $desc, $returnType);
    }

    /**
     * @inheritDoc
     */
    public function getPostType(null|int|WP_Post $post = null): string|false
    {
        return get_post_type($post);
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
    public function remoteGet(string $url, array $args = []): array|WP_Error
    {
        return wp_remote_get($url, $args);
    }

    /**
     * @inheritDoc
     */
    public function remoteRetrieveBody(array|WP_Error $response): string
    {
        return wp_remote_retrieve_body($response);
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
    public function updateOption(string $option, mixed $value, string|bool $autoload = null): bool
    {
        return update_option($option, $value, $autoload);
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
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        return register_taxonomy_for_object_type($taxonomy, $objectType);
    }

    /**
     * @inheritDoc
     */
    public function isSingle($post = ''): bool
    {
        return is_single($post);
    }

    /**
     * @inheritDoc
     */
    public function walkNavMenuTree(array $items, int $depth, object $args): string
    {
        return walk_nav_menu_tree($items, $depth, $args);
    }

    /**
     * @inheritDoc
     */
    public function getSubmitButton(
        string $text = '',
        string $type = 'primary',
        string $name = 'submit',
        bool $wrap = true,
        array|string $otherAttributes = ''
    ): string {
        return get_submit_button($text, $type, $name, $wrap, $otherAttributes);
    }

    /**
     * @inheritDoc
     */
    public function submitButton(
        string $text = '',
        string $type = 'primary',
        string $name = 'submit',
        bool $wrap = true,
        array|string $otherAttributes = ''
    ): void {
        submit_button($text, $type, $name, $wrap, $otherAttributes);
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
    public function getQueryVar(string $var, mixed $default = ''): mixed
    {
        return get_query_var($var, $default);
    }

    /**
     * @inheritDoc
     */
    public function updatePostMeta(int $postId, string $metaKey, mixed $metaValue, mixed $prevValue = ''): bool
    {
        return update_post_meta($postId, $metaKey, $metaValue, $prevValue);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypeObject(string $postType): ?WP_Post_Type
    {
        return get_post_type_object($postType);
    }

    /**
     * @inheritDoc
     */
    public function getReadyCronJobs(): array
    {
        return wp_get_ready_cron_jobs();
    }

    /**
     * @inheritDoc
     */
    public function unscheduleEvent(int $timestamp, string $hook, array $args = [], $wpError = false): bool|WP_Error
    {
        return wp_unschedule_event($timestamp, $hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function clearScheduledHook(string $hook, array $args = [], $wpError = false): int|false|WP_Error
    {
        return wp_clear_scheduled_hook($hook, $args, $wpError);
    }

    /**
     * @inheritDoc
     */
    public function getCronArray(): array
    {
        return _get_cron_array();
    }

    /**
     * @inheritDoc
     */
    public function getSchedules(): array
    {
        return wp_get_schedules();
    }

    /**
     * @inheritDoc
     */
    public function updatePost(
        array|object $postArray = [],
        bool $WPError = false,
        bool $fireAfterHooks = true
    ): int|WP_Error|WP_Post {
        return wp_update_post($postArray, $WPError, $fireAfterHooks);
    }

    /**
     * @inheritDoc
     */
    public function getOptions(array $options = []): array
    {
        return get_options($options);
    }

    /**
     * @inheritDoc
     */
    public function updateAttachmentMetadata(int $attachmentId, array $data): int|false
    {
        return wp_update_attachment_metadata($attachmentId, $data);
    }

    /**
     * @inheritDoc
     */
    public function getAttachmentMetadata(int $attachmentId, bool $unfiltered = false): array|false
    {
        return wp_get_attachment_metadata($attachmentId, $unfiltered);
    }

    /**
     * @inheritDoc
     */
    public function getImageEditor(string $path, array $args = []): mixed
    {
        return wp_get_image_editor($path, $args);
    }

    /**
     * @inheritDoc
     */
    public function getAttachedFile(int $attachmentId, $unfiltered = false): string
    {
        return get_attached_file($attachmentId, $unfiltered);
    }
}
