<?php

namespace WpService;

use WpService\Contracts;

interface WpService extends
    Contracts\__,
    Contracts\_E,
    Contracts\AddAction,
    Contracts\AddFilter,
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
    Contracts\DeletePost,
    Contracts\DeleteTerm,
    Contracts\DoAction,
    Contracts\EnqueueScript,
    Contracts\EnqueueStyle,
    Contracts\EscHtml,
    Contracts\GetBloginfo,
    Contracts\GetChildren,
    Contracts\GetCurrentScreen,
    Contracts\GetCurrentUser,
    Contracts\GetEditPostLink,
    Contracts\GetEditTermLink,
    Contracts\GetEnvironmentType,
    Contracts\GetOption,
    Contracts\GetPermalink,
    Contracts\GetPost,
    Contracts\GetPostMeta,
    Contracts\GetPostParent,
    Contracts\GetPosts,
    Contracts\GetPostStatuses,
    Contracts\GetPostTerms,
    Contracts\GetStylesheetDirectoryUri,
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
    Contracts\InsertTerm,
    Contracts\IsAdmin,
    Contracts\IsWPError,
    Contracts\LoadPluginTextDomain,
    Contracts\Mail,
    Contracts\NextScheduled,
    Contracts\PluginBasename,
    Contracts\PluginDirPath,
    Contracts\PluginsUrl,
    Contracts\RegisterPostType,
    Contracts\RegisterScript,
    Contracts\RegisterStyle,
    Contracts\RegisterTaxonomy,
    Contracts\RemoveMenuPage,
    Contracts\RemoveSubMenuPage,
    Contracts\RestEnsureResponse,
    Contracts\ScheduleEvent,
    Contracts\SetPostTerms,
    Contracts\TermExists
{
}
