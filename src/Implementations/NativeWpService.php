<?php

namespace WpService\Implementations;

use WpService\WpService;
use WP_Error;
use WP_Post;
use WP_REST_Response;
use WP_Role;
use WP_Screen;
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
    public function applyFilters(string $hook_name, mixed $value, mixed $args): mixed
    {
        return apply_filters($hook_name, $value, $args);
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
}
