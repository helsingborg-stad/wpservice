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
 * Class FakeWpService
 *
 * This class is a fake implementation of the WpService that is meant only to be used in tests.
 */
class FakeWpService implements WPService
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
    public function addAction(string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function addFilter(string $tag, callable $function_to_add, int $priority = 10, int $accepted_args = 1): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function applyFilters(string $hookName, mixed $value, mixed ...$args): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function deleteTerm(int $term, string $taxonomy, array|string $args = array()): bool|int|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPermalink(null|int|WP_Post $post = null, bool $leavename = false): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPost(
        null|int|WP_Post $post = null,
        string $output = "OBJECT",
        string $filter = "raw"
    ): WP_Post|array|null {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPostMeta($postId, $key = '', $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPostParent(int|WP_Post|null $postId): ?WP_Post
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getPosts(?array $args): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function getTerm(
        int|object $term,
        string $taxonomy = '',
        string $output = 'OBJECT',
        string $filter = 'raw'
    ): WP_Term|array|WP_Error|null {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getTermMeta(int $term_id, string $key = '', bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getTerms(array|string $args = array(), array|string $deprecated = ""): array|string|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function getThePostThumbnailUrl(
        int|WP_Post $postId,
        string|array $size = 'post-thumbnail'
    ): string|false {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getTheTitle(int|WP_Post $post = 0): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function isWPError(mixed $thing): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function registerPostType(string $postType, array $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomy(string $taxonomy, array|string $objectType, array|string $args = []): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function removeMenuPage(string $menuSlug): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function removeSubMenuPage(string $menuSlug, string $submenuSlug): array|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function termExists(int|string $term, string $taxonomy = "", ?int $parentTerm = null): null|int|array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getPostTerms(
        int $post_id,
        string|array $taxonomy = 'post_tag',
        array $args = array()
    ): array|WP_Error {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function insertTerm(
        string $term,
        string $taxonomy = "",
        array $args = []
    ): array|WP_Error {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
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
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function loadPluginTextDomain(string $domain, string $path, string $relativeTo): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getTheId(): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getEditTermLink(int|WP_Term $term, string $taxonomy = '', string $objectType = ''): ?string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function restEnsureResponse($response): WP_REST_Response|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getChildren(mixed $args = '', string $output = 'OBJECT'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function deletePost(int $postId, bool $forceDelete): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function adminNotice(string $message, array $args): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function getCurrentScreen(): ?WP_Screen
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function nextScheduled(string $hook, array $args = []): int|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
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
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getOption(string $option, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function enqueueStyle(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function enqueueScript(string $handle): void
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
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
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
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
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function isAdmin(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getEnvironmentType(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function pluginDirPath(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function pluginsUrl(string $path = '', string $plugin = ''): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function pluginBasename(string $file): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function addRole(string $role, string $displayName, array $capabilities): ?WP_Role
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getUsers(array $args): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentUser(): WP_User
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function escHtml(string $text): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null) ?? $text;
    }

    /**
     * @inheritDoc
     */
    public function getPostStatuses(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
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
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
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
    public function getUserMeta(int $userId, string $key, bool $single = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getUserdata(int $userId): WP_User|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function __($text, $domain = 'default'): string // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null) ?? $text;
    }

    /**
     * @inheritDoc
     */
    public function _e($text, $domain = 'default'): void // phpcs:ignore PSR2.Methods.MethodDeclaration.Underscore
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        $value = $this->getReturnValue(__FUNCTION__, func_get_args(), null) ?? $text;
        echo $value; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }

    /**
     * @inheritDoc
     */
    public function getEditPostLink(int|WP_Post $post, string $context = 'display'): ?string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function getThemeMod(string $name, mixed $defaultValue = false): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), $defaultValue);
    }

    /**
     * @inheritDoc
     */
    public function getThemeMods(): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function getStylesheetDirectoryUri(): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function getBloginfo(string $show, string $filter = 'raw'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function autop(string $text, bool $br = true): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null) ?? $text;
    }

    /**
     * @inheritDoc
     */
    public function cacheAdd(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function cacheAddMultiple(array $items, string $group = '', int $expire = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function cacheDelete(int|string $key, string $group = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function cacheDeleteMultiple(array $keys, string $group = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function cacheFlush(): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function cacheGet(int|string $key, string $group = '', bool $force = false, ?bool &$found = null): mixed
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null);
    }

    /**
     * @inheritDoc
     */
    public function cacheGetMultiple(array $keys, string $group = '', bool $force = false): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function cacheReplace(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function cacheSet(int|string $key, mixed $data, string $group = '', int $expire = 0): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function cacheSetMultiple(array $items, string $group = '', int $expire = 0): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function sanitizeTitle($title, $fallbackTitle = '', $context = 'save'): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), null) ?? $title;
    }

    /**
     * @inheritDoc
     */
    public function insertPost($postarr, $wpError = false, $fireAfterHooks = true): int|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function mediaSideloadImage($file, $postId = 0, $desc = null, $returnType = 'html'): string|int|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPostType(null|int|WP_Post $post = null): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function getPostTypes(array|string $args = [], string $output = 'names', string $operator = 'and'): array
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), []);
    }

    /**
     * @inheritDoc
     */
    public function remoteGet(string $url, array $args = []): array|WP_Error
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function remoteRetrieveBody(array|WP_Error $response): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }

    /**
     * @inheritDoc
     */
    public function setThemeMod(string $name, mixed $value): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), true);
    }

    /**
     * @inheritDoc
     */
    public function updateOption(string $option, mixed $value, string|bool $autoload = null): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), true);
    }

    /**
     * @inheritDoc
     */
    public function taxonomyExists(string $taxonomy): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function registerTaxonomyForObjectType(string $taxonomy, string $objectType): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function isSingle($post = ''): bool
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), false);
    }

    /**
     * @inheritDoc
     */
    public function addMetaBox(
        string $id,
        string $title,
        callable $callback,
        null|string|array|WP_Screen $screen = null,
        string $context = 'advanced',
        string $priority = 'default',
        ?array $callback_args = null
    ): void {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
    }

    /**
     * @inheritDoc
     */
    public function navMenuDisabledCheck(int|string $nav_menu_selected_id, bool $display = true): string|false
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        $value = $this->getReturnValue(__FUNCTION__, func_get_args(), false);

        if ($display) {
            echo $value; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }

        return $value;
    }

    /**
     * @inheritDoc
     */
    public function walkNavMenuTree(array $items, int $depth, object $args): string
    {
        $this->registerFunctionCall(__FUNCTION__, func_get_args());
        return $this->getReturnValue(__FUNCTION__, func_get_args(), '');
    }
}
