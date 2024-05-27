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
 * Class WpServiceDecorator
 *
 * Implements the WPService interface.
 */
class WpServiceDecorator implements WPService
{
    /**
     * Class constructor.
     *
     * @param WPService $inner The inner WPService instance.
     */
    public function __construct(private WPService $inner)
    {
    }

    /**
     * @inheritDoc
     */
    public function addAction(
        string $tag,
        callable $functionToAdd,
        int $priority = 10,
        int $accepted_args = 1
    ): bool {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addFilter(
        string $tag,
        callable $functionToAdd,
        int $priority = 10,
        int $accepted_args = 1
    ): bool {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function applyFilters(string $hookName, mixed $value, mixed $args): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deleteTerm(int $term, string $taxonomy, array|string $args = array()): bool|int|WP_Error
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPermalink(null|int|WP_Post $post = null, bool $leavename = false): string|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPost(
        null|int|WP_Post $post = null,
        string $output = OBJECT,
        string $filter = "raw"
    ): WP_Post|array|null {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostMeta($postId, $key = '', $single = false): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostParent(int|WP_Post|null $postId): ?WP_Post
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPosts(?array $args): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
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
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTermMeta(int $term_id, string $key = '', bool $single = false): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTerms(array|string $args = array(), array|string $deprecated = ""): array|string|WP_Error
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailUrl(
        int|WP_Post $postId,
        string|array $size = 'post-thumbnail'
    ): string|false {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheTitle(int|WP_Post $post = 0): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isWPError(mixed $thing): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerPostType(string $postType, array $args = []): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeMenuPage(string $menuSlug): array|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeSubMenuPage(string $menuSlug, string $submenuSlug): array|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function termExists(int|string $term, string $taxonomy = "", ?int $parentTerm = null): null|int|array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTerms(
        int $postId,
        string|array $taxonomy = 'post_tag',
        array $args = array()
    ): array|WP_Error {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function insertTerm(
        string $term,
        string $taxonomy = "",
        array $args = []
    ): array|WP_Error {
        return $this->inner->{__FUNCTION__}(...func_get_args());
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
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function loadPluginTextDomain(string $domain, string $path, string $relativeTo): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheId(): int|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditTermLink(int|WP_Term $term, string $taxonomy = '', string $objectType = ''): ?string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function restEnsureResponse($response): WP_REST_Response|WP_Error
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getChildren(mixed $args = '', string $output = OBJECT): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function deletePost(int $postId, bool $forceDelete): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adminNotice(string $message, array $args): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentScreen(): ?WP_Screen
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function nextScheduled(string $hook, array $args = []): int|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
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
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getOption(string $option, mixed $defaultValue = false): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueStyle(
        string $handle
    ): void {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueScript(
        string $handle
    ): void {
        $this->inner->{__FUNCTION__}(...func_get_args());
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
        $this->inner->{__FUNCTION__}(...func_get_args());
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
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAdmin(): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEnvironmentType(): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginDirPath(string $file): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginsUrl(string $path = '', string $plugin = ''): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function pluginBasename(string $file): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function addRole(string $role, string $displayName, array $capabilities): ?WP_Role
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUsers(array $args): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentUser(): WP_User
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function escHtml(string $text): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostStatuses(): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
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
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function doAction(string $hookName, mixed ...$arg): void
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserMeta(int $userId, string $key, bool $single = false): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getUserdata(int $userId): WP_User|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function __($text, $domain = 'default'): string // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function _e($text, $domain = 'default'): void // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getEditPostLink(int|WP_Post $post, string $context = 'display'): ?string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeMod(string $name, mixed $defaultValue = false): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getThemeMods(): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectoryUri(): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getBloginfo(string $show, string $filter = 'raw'): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function autop(string $text, bool $br = true): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }


    /**
     * @inheritDoc
     */
    public function cacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheAddMultiple(array $items, string $group = '', int $expire = 0): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheDelete(int|string $key, string $group = ''): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheDeleteMultiple(array $keys, string $group = ''): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheFlush(): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheGet(int|string $key, string $group = '', bool $force = false, ?bool &$found = null): mixed
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheGetMultiple(array $keys, string $group = '', bool $force = false): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function cacheSetMultiple(array $items, string $group = '', int $expire = 0): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitle($title, $fallbackTitle = '', $context = 'save'): string
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function insertPost($postarr, $wpError = false, $fireAfterHooks = true): int|WP_Error
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function mediaSideloadImage($file, $postId = 0, $desc = null, $returnType = 'html'): string|int|WP_Error
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostType(null|int|WP_Post $post = null): string|false
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getPostTypes(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function setThemeMod(string $name, mixed $value): bool
    {
        return $this->inner->{__FUNCTION__}(...func_get_args());
    }
}
