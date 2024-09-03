<?php

namespace WpService;

use WpService\Contracts;

interface WpService extends
    Contracts\__,
    Contracts\_E,
    Contracts\AddAction,
    Contracts\AddFilter,
    Contracts\AddMetaBox,
    Contracts\AddRole,
    Contracts\AdminNotice,
    Contracts\ApplyFilters,
    Contracts\Autop,
    Contracts\CacheAdd,
    Contracts\CacheAddMultiple,
    Contracts\CacheDelete,
    Contracts\CacheDeleteMultiple,
    Contracts\CacheFlush,
    Contracts\CacheGet,
    Contracts\CacheGetMultiple,
    Contracts\CacheReplace,
    Contracts\CacheSet,
    Contracts\CacheSetMultiple,
    Contracts\ClearScheduledHook,
    Contracts\DeletePost,
    Contracts\DeleteTerm,
    Contracts\DoAction,
    Contracts\EnqueueScript,
    Contracts\EnqueueStyle,
    Contracts\EscHtml,
    Contracts\GetBloginfo,
    Contracts\GetChildren,
    Contracts\GetCronArray,
    Contracts\GetCurrentScreen,
    Contracts\GetCurrentUser,
    Contracts\GetEditPostLink,
    Contracts\GetEditTermLink,
    Contracts\GetEnvironmentType,
    Contracts\GetObjectTaxonomies,
    Contracts\GetOption,
    Contracts\GetPermalink,
    Contracts\GetPost,
    Contracts\GetPostMeta,
    Contracts\GetPostParent,
    Contracts\GetPosts,
    Contracts\GetPostStatuses,
    Contracts\GetPostTerms,
    Contracts\GetPostType,
    Contracts\GetPostTypeObject,
    Contracts\GetPostTypes,
    Contracts\GetQueryVar,
    Contracts\GetReadyCronJobs,
    Contracts\GetSchedules,
    Contracts\GetStylesheetDirectoryUri,
    Contracts\GetSubmitButton,
    Contracts\GetTerm,
    Contracts\GetTermMeta,
    Contracts\GetTerms,
    Contracts\GetTheId,
    Contracts\GetThemeMod,
    Contracts\GetThemeMods,
    Contracts\GetThePostThumbnailUrl,
    Contracts\GetTheTitle,
    Contracts\GetUserdata,
    Contracts\GetUserMeta,
    Contracts\GetUsers,
    Contracts\InsertPost,
    Contracts\InsertTerm,
    Contracts\IsAdmin,
    Contracts\IsSingle,
    Contracts\IsUserLoggedIn,
    Contracts\IsWPError,
    Contracts\LoadPluginTextDomain,
    Contracts\Mail,
    Contracts\MediaSideloadImage,
    Contracts\NavMenuDisabledCheck,
    Contracts\NextScheduled,
    Contracts\PluginBasename,
    Contracts\PluginDirPath,
    Contracts\PluginsUrl,
    Contracts\RegisterPostType,
    Contracts\RegisterScript,
    Contracts\RegisterStyle,
    Contracts\RegisterTaxonomy,
    Contracts\RegisterTaxonomyForObjectType,
    Contracts\RemoteGet,
    Contracts\RemoteRetrieveBody,
    Contracts\RemoveMenuPage,
    Contracts\RemoveSubMenuPage,
    Contracts\RestEnsureResponse,
    Contracts\SanitizeTitle,
    Contracts\ScheduleEvent,
    Contracts\SetPostTerms,
    Contracts\SetThemeMod,
    Contracts\SubmitButton,
    Contracts\TaxonomyExists,
    Contracts\TermExists,
    Contracts\UnscheduleEvent,
    Contracts\UpdateOption,
    Contracts\UpdatePostMeta,
    Contracts\WalkNavMenuTree
{
}
