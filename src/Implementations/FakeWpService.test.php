<?php

namespace WpService\Implementations;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use WP_Post;
use WP_Role;
use WP_Screen;
use WP_Term;
use WP_User;

class FakeWpServiceTest extends TestCase
{
    /**
     * @testdox addAction()
     */
    public function testAddAction()
    {
        $wpService = new FakeWpService(['addAction' => 'testTag']);
        $callable  = fn () => null;

        $result = $wpService->addAction('testTag', $callable, 10, 1);

        $this->assertEquals([ 'testTag', $callable, 10, 1 ], $wpService->methodCalls['addAction'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox addFilter()
     */
    public function testAddFilter()
    {
        $callableReturn = fn($hookName) => $hookName === 'testTag';
        $wpService      = new FakeWpService(['addFilter' => $callableReturn]);
        $callable       = fn () => null;

        $result = $wpService->addFilter('testTag', $callable, 10, 1);

        $this->assertEquals([ 'testTag', $callable, 10, 1 ], $wpService->methodCalls['addFilter'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox applyFilters()
     */
    public function testApplyFilters()
    {
        $callableReturn = fn($hookName) => $hookName === 'testTag' ? 'foo' : null;
        $wpService      = new FakeWpService(['applyFilters' => $callableReturn]);

        $result = $wpService->applyFilters('testTag', 'bar', 10, 1);

        $this->assertEquals([ 'testTag', 'bar', 10, 1 ], $wpService->methodCalls['applyFilters'][0]);
        $this->assertEquals('foo', $result);
    }

    /**
     * @testdox deleteTerm()
     */
    public function testDeleteTerm()
    {
        $wpService = new FakeWpService(['deleteTerm' => true]);

        $result = $wpService->deleteTerm(1, 'testTaxonomy');

        $this->assertEquals([ 1, 'testTaxonomy' ], $wpService->methodCalls['deleteTerm'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox getPermalink()
     */
    public function testGetPermalink()
    {
        $callableReturn = fn($post) => $post === 1 ? 'http://example.com/foo' : false;
        $wpService      = new FakeWpService(['getPermalink' => $callableReturn]);

        $result = $wpService->getPermalink(1);

        $this->assertEquals([1], $wpService->methodCalls['getPermalink'][0]);
        $this->assertEquals('http://example.com/foo', $result);
    }

    /**
     * @testdox getPost()
     */
    public function testGetPost()
    {
        $post      = $this->getWpPost(['ID' => 1]);
        $wpService = new FakeWpService(['getPost' => $post]);

        $result = $wpService->getPost(1);

        $this->assertEquals([1], $wpService->methodCalls['getPost'][0]);
        $this->assertEquals($post, $result);
    }

    /**
     * @testdox getPostMeta()
     */
    public function testGetPostMeta()
    {
        $callableReturn = fn($postId, $key) => $postId === 1 && $key === 'testKey' ? 'foo' : null;
        $wpService      = new FakeWpService(['getPostMeta' => $callableReturn]);

        $result = $wpService->getPostMeta(1, 'testKey', true);

        $this->assertEquals([1, 'testKey', true], $wpService->methodCalls['getPostMeta'][0]);
        $this->assertEquals('foo', $result);
    }

    /**
     * @testdox getPostParent()
     */
    public function testGetPostParent()
    {
        $parent         = $this->getWpPost(['ID' => 1]);
        $callableReturn = fn($postId) => $postId === 1 ? $parent : null;
        $wpService      = new FakeWpService(['getPostParent' => $callableReturn]);

        $result = $wpService->getPostParent(1);

        $this->assertEquals([1], $wpService->methodCalls['getPostParent'][0]);
        $this->assertEquals($parent, $result);
    }

    /**
     * @testdox getPosts()
     */
    public function testGetPosts()
    {
        $posts     = [$this->getWpPost(['ID' => 1])];
        $wpService = new FakeWpService(['getPosts' => $posts]);

        $result = $wpService->getPosts(['post_type' => 'testPostType']);

        $this->assertEquals([['post_type' => 'testPostType']], $wpService->methodCalls['getPosts'][0]);
        $this->assertEquals($posts, $result);
    }

    /**
     * @testdox getTerm()
     */
    public function testGetTerm()
    {
        $term           = $this->getWpTerm(['term_id' => 1]);
        $callableReturn = fn($termId, $taxonomy) => $termId === 1 && $taxonomy === 'testTaxonomy' ? $term : null;
        $wpService      = new FakeWpService(['getTerm' => $callableReturn]);

        $result = $wpService->getTerm(1, 'testTaxonomy');

        $this->assertEquals([1, 'testTaxonomy'], $wpService->methodCalls['getTerm'][0]);
        $this->assertEquals($term, $result);
    }

    /**
     * @testdox getTermMeta()
     */
    public function testGetTermMeta()
    {
        $callableReturn = fn($termId, $key) => $termId === 1 && $key === 'testKey' ? 'foo' : null;
        $wpService      = new FakeWpService(['getTermMeta' => $callableReturn]);

        $result = $wpService->getTermMeta(1, 'testKey', true);

        $this->assertEquals([1, 'testKey', true], $wpService->methodCalls['getTermMeta'][0]);
        $this->assertEquals('foo', $result);
    }

    /**
     * @testdox getTerms()
     */
    public function testGetTerms()
    {
        $terms     = [$this->getWpTerm(['term_id' => 1])];
        $wpService = new FakeWpService(['getTerms' => $terms]);

        $result = $wpService->getTerms('testTaxonomy');

        $this->assertEquals(['testTaxonomy'], $wpService->methodCalls['getTerms'][0]);
        $this->assertEquals($terms, $result);
    }

    /**
     * @testdox getThePostThumbnailUrl()
     */
    public function testGetThePostThumbnailUrl()
    {
        $wpService = new FakeWpService(['getThePostThumbnailUrl' => 'http://example.com/foo']);

        $result = $wpService->getThePostThumbnailUrl(1, 'testSize');

        $this->assertEquals([1, 'testSize'], $wpService->methodCalls['getThePostThumbnailUrl'][0]);
        $this->assertEquals('http://example.com/foo', $result);
    }

    /**
     * @testdox getTheTitle()
     */
    public function testGetTheTitle()
    {
        $callableReturn = fn($postId) => $postId === 1 ? 'Foo' : null;
        $wpService      = new FakeWpService(['getTheTitle' => $callableReturn]);

        $result = $wpService->getTheTitle(1);

        $this->assertEquals([1], $wpService->methodCalls['getTheTitle'][0]);
        $this->assertEquals('Foo', $result);
    }

    /**
     * @testdox isWPError()
     */
    public function testIsWPError()
    {
        $wpService = new FakeWpService(['isWPError' => false]);

        $result = $wpService->isWPError('foo');

        $this->assertEquals(['foo'], $wpService->methodCalls['isWPError'][0]);
        $this->assertFalse($result);
    }

    /**
     * @testdox registerPostType()
     */
    public function testRegisterPostType()
    {
        $wpService = new FakeWpService();

        $wpService->registerPostType('testPostType', ['testArg' => 'foo']);

        $this->assertEquals(['testPostType', ['testArg' => 'foo']], $wpService->methodCalls['registerPostType'][0]);
    }

    /**
     * @testdox registerTaxonomy()
     */
    public function testRegisterTaxonomy()
    {
        $wpService = new FakeWpService();

        $wpService->registerTaxonomy('testTaxonomy', 'testPostType', ['testArg' => 'foo']);

        $this->assertEquals(
            ['testTaxonomy', 'testPostType', ['testArg' => 'foo']],
            $wpService->methodCalls['registerTaxonomy'][0]
        );
    }

    /**
     * @testdox removeMenuPage()
     */
    public function testRemoveMenuPage()
    {
        $callableReturn = fn($menuSlug) => $menuSlug === 'testMenuSlug' ? ['removedTestPage'] : null;
        $wpService      = new FakeWpService(['removeMenuPage' => $callableReturn]);

        $result = $wpService->removeMenuPage('testMenuSlug');

        $this->assertEquals(['testMenuSlug'], $wpService->methodCalls['removeMenuPage'][0]);
        $this->assertEquals(['removedTestPage'], $result);
    }

    /**
     * @testdox removeSubMenuPage()
     */
    public function testRemoveSubMenuPage()
    {
        $callableReturn = function ($parentSlug, $submenuSlug) {
            return $parentSlug === 'testParentSlug' && $submenuSlug === 'testSubMenuSlug'
                ? ['removedTestPage']
                : null;
        };

        $wpService = new FakeWpService(['removeSubMenuPage' => $callableReturn]);

        $result = $wpService->removeSubMenuPage('testParentSlug', 'testSubMenuSlug');

        $this->assertEquals(['testParentSlug', 'testSubMenuSlug'], $wpService->methodCalls['removeSubMenuPage'][0]);
        $this->assertEquals(['removedTestPage'], $result);
    }

    /**
     * @testdox termExists() with taxonomy parameter
     */
    public function testTermExistsWithTaxonomyParameter()
    {
        $callableReturn = fn($term, $taxonomy) => $term === 'testTerm' && $taxonomy === 'testTaxonomy' ? 1 : null;
        $wpService      = new FakeWpService(['termExists' => $callableReturn]);

        $result = $wpService->termExists('testTerm', 'testTaxonomy');

        $this->assertEquals(['testTerm', 'testTaxonomy'], $wpService->methodCalls['termExists'][0]);
        $this->assertEquals(1, $result);
    }

    /**
     * @testdox termExists() without taxonomy parameter
     */
    public function testTermExistsWithoutTaxonomyParameter()
    {
        $wpService = new FakeWpService(['termExists' => 1]);

        $result = $wpService->termExists('testTerm');

        $this->assertEquals(['testTerm'], $wpService->methodCalls['termExists'][0]);
        $this->assertEquals(1, $result);
    }

    /**
     * @testdox getPostTerms()
     */
    public function testGetPostTerms()
    {
        $terms          = [$this->getWpTerm(['term_id' => 1])];
        $callableReturn = fn($postId, $taxonomy) => $postId === 1 && $taxonomy === 'testTaxonomy' ? $terms : null;
        $wpService      = new FakeWpService(['getPostTerms' => $callableReturn]);

        $result = $wpService->getPostTerms(1, 'testTaxonomy');

        $this->assertEquals([1, 'testTaxonomy'], $wpService->methodCalls['getPostTerms'][0]);
        $this->assertEquals($terms, $result);
    }

    /**
     * @testdox insertTerm() with taxonomy parameter provided
     */
    public function testInsertTermWithTaxonomyParameter()
    {
        $callableReturn = function ($term, $taxonomy, $args) {
            return $term === 'testTerm' && $taxonomy === 'testTaxonomy' && $args === ['testArg' => 'foo']
                ? ['term_id' => 1]
                : null;
        };

        $wpService = new FakeWpService(['insertTerm' => $callableReturn]);

        $result = $wpService->insertTerm('testTerm', 'testTaxonomy', ['testArg' => 'foo']);

        $this->assertEquals(
            ['testTerm', 'testTaxonomy', ['testArg' => 'foo']],
            $wpService->methodCalls['insertTerm'][0]
        );
        $this->assertEquals(['term_id' => 1], $result);
    }

    /**
     * @testdox insertTerm() without taxonomy parameter provided
     */
    public function testInsertTermWithoutTaxonomyParameter()
    {
        $callableReturn = fn($term) => $term === 'testTerm' ? ['term_id' => 1] : null;
        $wpService      = new FakeWpService(['insertTerm' => $callableReturn]);

        $result = $wpService->insertTerm('testTerm');

        $this->assertEquals(['testTerm'], $wpService->methodCalls['insertTerm'][0]);
        $this->assertEquals(['term_id' => 1], $result);
    }

    /**
     * @testdox setPostTerms()
     */
    public function testSetPostTerms()
    {
        $callableReturn = function ($postId, $terms, $taxonomy) {
            return $postId === 1 && $terms === ['testTerm'] && $taxonomy === 'testTaxonomy' ? ['term_id' => 1] : null;
        };

        $wpService = new FakeWpService(['setPostTerms' => $callableReturn]);

        $result = $wpService->setPostTerms(1, ['testTerm'], 'testTaxonomy');

        $this->assertEquals([1, ['testTerm'], 'testTaxonomy'], $wpService->methodCalls['setPostTerms'][0]);
        $this->assertEquals(['term_id' => 1], $result);
    }

    /**
     * @testdox loadPluginTextDomain()
     */
    public function testLoadPluginTextDomain()
    {
        $wpService = new FakeWpService();

        $wpService->loadPluginTextDomain('testDomain', 'testPath', 'testRelativeTo');

        $this->assertEquals(
            ['testDomain', 'testPath', 'testRelativeTo'],
            $wpService->methodCalls['loadPluginTextDomain'][0]
        );
    }

    /**
     * @testdox getTheId()
     */
    public function testGetTheId()
    {
        $wpService = new FakeWpService(['getTheId' => 1]);

        $result = $wpService->getTheId();

        $this->assertEquals([], $wpService->methodCalls['getTheId'][0]);
        $this->assertEquals(1, $result);
    }

    /**
     * @testdox getEditTermLink()
     */
    public function testGetEditTermLink()
    {
        $callableReturn = fn($termId, $taxonomy) => $termId === 1 && $taxonomy === 'testTaxonomy'
            ? 'http://example.com/foo'
            : false;

        $wpService = new FakeWpService(['getEditTermLink' => $callableReturn]);

        $result = $wpService->getEditTermLink(1, 'testTaxonomy');

        $this->assertEquals([1, 'testTaxonomy'], $wpService->methodCalls['getEditTermLink'][0]);
        $this->assertEquals('http://example.com/foo', $result);
    }

    /**
     * @testdox restEnsureResponse()
     */
    public function testRestEnsureResponse()
    {
        $wpRestResponse = $this->getMockBuilder('WP_REST_Response')->disableOriginalConstructor()->getMock();
        $wpService      = new FakeWpService(['restEnsureResponse' => $wpRestResponse]);

        $result = $wpService->restEnsureResponse('foo');

        $this->assertEquals(['foo'], $wpService->methodCalls['restEnsureResponse'][0]);
        $this->assertEquals($wpRestResponse, $result);
    }

    /**
     * @testdox getChildren()
     */
    public function testGetChildren()
    {
        $children  = [$this->getWpPost(['ID' => 1])];
        $wpService = new FakeWpService(['getChildren' => $children]);

        $result = $wpService->getChildren(1);

        $this->assertEquals([1], $wpService->methodCalls['getChildren'][0]);
        $this->assertEquals($children, $result);
    }

    /**
     * @testdox deletePost()
     */
    public function testDeletePost()
    {
        $wpService = new FakeWpService(['deletePost' => true]);

        $wpService->deletePost(1, true);

        $this->assertEquals([1, true], $wpService->methodCalls['deletePost'][0]);
    }

    /**
     * @testdox adminNotice()
     */
    public function testAdminNotice()
    {
        $wpService = new FakeWpService();

        $wpService->adminNotice('testMessage', []);

        $this->assertEquals(['testMessage', []], $wpService->methodCalls['adminNotice'][0]);
    }

    /**
     * @testdox getCurrentScreen()
     */
    public function testGetCurrentScreen()
    {
        $wpScreen  = $this->getWpScreen();
        $wpService = new FakeWpService(['getCurrentScreen' => $wpScreen]);

        $result = $wpService->getCurrentScreen();

        $this->assertEquals([], $wpService->methodCalls['getCurrentScreen'][0]);
        $this->assertEquals($wpScreen, $result);
    }



    /**
     * @testdox nextScheduled()
     */
    public function testNextScheduled()
    {
        $timeStamp = time();
        $wpService = new FakeWpService(['nextScheduled' => $timeStamp]);

        $result = $wpService->nextScheduled('testHook');

        $this->assertEquals(['testHook'], $wpService->methodCalls['nextScheduled'][0]);
        $this->assertEquals($timeStamp, $result);
    }

    /**
     * @testdox scheduleEvent()
     */
    public function testScheduleEvent()
    {
        $wpService = new FakeWpService(['scheduleEvent' => true]);

        $result = $wpService->scheduleEvent(123, 'testRecurrence', 'testHook');

        $this->assertEquals([123, 'testRecurrence', 'testHook'], $wpService->methodCalls['scheduleEvent'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox getOption()
     */
    public function testGetOption()
    {
        $wpService = new FakeWpService(['getOption' => 'testValue']);

        $result = $wpService->getOption('testOption');

        $this->assertEquals(['testOption'], $wpService->methodCalls['getOption'][0]);
        $this->assertEquals('testValue', $result);
    }

    /**
     * @testdox enqueueStyle()
     */
    public function testEnqueueStyle()
    {
        $wpService = new FakeWpService();

        $wpService->enqueueStyle('testHandle', 'testSrc', ['testDeps'], 'testVersion', 'testMedia');

        $this->assertEquals(
            ['testHandle', 'testSrc', ['testDeps'], 'testVersion', 'testMedia'],
            $wpService->methodCalls['enqueueStyle'][0]
        );
    }

    /**
     * @testdox enqueueScript()
     */
    public function testEnqueueScript()
    {
        $wpService = new FakeWpService();

        $wpService->enqueueScript('testHandle', 'testSrc', ['testDeps'], 'testVersion', true);

        $this->assertEquals(
            ['testHandle', 'testSrc', ['testDeps'], 'testVersion', true],
            $wpService->methodCalls['enqueueScript'][0]
        );
    }

    /**
     * @testdox registerStyle()
     */
    public function testRegisterStyle()
    {
        $wpService = new FakeWpService();

        $wpService->registerStyle('testHandle', 'testSrc', ['testDeps'], 'testVersion', 'testMedia');

        $this->assertEquals(
            ['testHandle', 'testSrc', ['testDeps'], 'testVersion', 'testMedia'],
            $wpService->methodCalls['registerStyle'][0]
        );
    }

    /**
     * @testdox registerScript()
     */
    public function testRegisterScript()
    {
        $wpService = new FakeWpService();

        $wpService->registerScript('testHandle', 'testSrc', ['testDeps'], 'testVersion', true);

        $this->assertEquals(
            ['testHandle', 'testSrc', ['testDeps'], 'testVersion', true],
            $wpService->methodCalls['registerScript'][0]
        );
    }

    /**
     * @testdox isAdmin()
     */
    public function testIsAdmin()
    {
        $wpService = new FakeWpService(['isAdmin' => true]);

        $result = $wpService->isAdmin();

        $this->assertEquals([], $wpService->methodCalls['isAdmin'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox getEnvironmentType()
     */
    public function testGetEnvironmentType()
    {
        $wpService = new FakeWpService(['getEnvironmentType' => 'testEnvironment']);

        $result = $wpService->getEnvironmentType();

        $this->assertEquals([], $wpService->methodCalls['getEnvironmentType'][0]);
        $this->assertEquals('testEnvironment', $result);
    }

    /**
     * @testdox pluginDirPath()
     */
    public function testPluginDirPath()
    {
        $wpService = new FakeWpService(['pluginDirPath' => 'testPath']);

        $result = $wpService->pluginDirPath('testFile');

        $this->assertEquals(['testFile'], $wpService->methodCalls['pluginDirPath'][0]);
        $this->assertEquals('testPath', $result);
    }

    /**
     * @testdox pluginsUrl()
     */
    public function testPluginsUrl()
    {
        $wpService = new FakeWpService(['pluginsUrl' => 'testUrl']);

        $result = $wpService->pluginsUrl('testFile');

        $this->assertEquals(['testFile'], $wpService->methodCalls['pluginsUrl'][0]);
        $this->assertEquals('testUrl', $result);
    }

    /**
     * @testdox pluginBasename()
     */
    public function testPluginBasename()
    {
        $wpService = new FakeWpService(['pluginBasename' => 'testBasename']);

        $result = $wpService->pluginBasename('testFile');

        $this->assertEquals(['testFile'], $wpService->methodCalls['pluginBasename'][0]);
        $this->assertEquals('testBasename', $result);
    }

    /**
     * @testdox addRole()
     */
    public function testAddRole()
    {
        $role      = $this->getWpRole();
        $wpService = new FakeWpService(['addRole' => $role]);

        $result = $wpService->addRole('testRole', 'testDisplayName', ['testCapabilities']);

        $this->assertEquals(
            ['testRole', 'testDisplayName', ['testCapabilities']],
            $wpService->methodCalls['addRole'][0]
        );
        $this->assertEquals($role, $result);
    }

    /**
     * @testdox addRole() with specific return value
     */
    public function testAddRoleWithSpecificReturnValue()
    {
        $role           = $this->getWpRole();
        $callableReturn = fn($roleName, $displayName, $capabilities) => $roleName === 'testRole' ? $role : null;
        $wpService      = new FakeWpService(['addRole' => $callableReturn]);

        $result = $wpService->addRole('testRole', 'testDisplayName', ['testCapabilities']);

        $this->assertEquals(
            ['testRole', 'testDisplayName', ['testCapabilities']],
            $wpService->methodCalls['addRole'][0]
        );
        $this->assertEquals($role, $result);
    }

    /**
     * @testdox getUsers()
     */
    public function testGetUsers()
    {
        $users     = [$this->getWpUser(['ID' => 1])];
        $wpService = new FakeWpService(['getUsers' => $users]);

        $result = $wpService->getUsers(['role' => 'testRole']);

        $this->assertEquals([['role' => 'testRole']], $wpService->methodCalls['getUsers'][0]);
        $this->assertEquals($users, $result);
    }

    /**
     * @testdox getCurrentUser()
     */
    public function testGetCurrentUser()
    {
        $wpUser    = $this->getWpUser(['ID' => 1]);
        $wpService = new FakeWpService(['getCurrentUser' => $wpUser]);

        $result = $wpService->getCurrentUser();

        $this->assertEquals([], $wpService->methodCalls['getCurrentUser'][0]);
        $this->assertEquals($wpUser, $result);
    }

    /**
     * @testdox escHtml()
     */
    public function testEscHtml()
    {
        $wpService = new FakeWpService();

        $result = $wpService->escHtml('testHtml');

        $this->assertEquals(['testHtml'], $wpService->methodCalls['escHtml'][0]);
        $this->assertEquals('testHtml', $result);
    }

    /**
     * @testdox getPostStatuses()
     */
    public function testGetPostStatuses()
    {
        $wpService = new FakeWpService(['getPostStatuses' => ['testStatus' => 'testStatusData']]);

        $result = $wpService->getPostStatuses();

        $this->assertEquals([], $wpService->methodCalls['getPostStatuses'][0]);
        $this->assertEquals(['testStatus' => 'testStatusData'], $result);
    }

    /**
     * @testdox mail()
     */
    public function testMail()
    {
        $wpService = new FakeWpService(['mail' => true]);

        $result = $wpService->mail('testTo', 'testSubject', 'testMessage', 'testHeaders', 'testAttachments');

        $this->assertEquals(
            ['testTo', 'testSubject', 'testMessage', 'testHeaders', 'testAttachments'],
            $wpService->methodCalls['mail'][0]
        );
        $this->assertTrue($result);
    }

    /**
     * @testdox doAction()
     */
    public function testDoAction()
    {
        $wpService = new FakeWpService();

        $wpService->doAction('testTag', 'testArg');

        $this->assertEquals(['testTag', 'testArg'], $wpService->methodCalls['doAction'][0]);
    }

    /**
     * @testdox getUserMeta()
     */
    public function testGetUserMeta()
    {
        $callableReturn = fn($userId, $key) => $userId === 1 && $key === 'testKey' ? 'testUserMeta' : null;
        $wpService      = new FakeWpService(['getUserMeta' => $callableReturn]);

        $result = $wpService->getUserMeta(1, 'testKey', true);

        $this->assertEquals([1, 'testKey', true], $wpService->methodCalls['getUserMeta'][0]);
        $this->assertEquals('testUserMeta', $result);
    }

    /**
     * @testdox getUserdata()
     */
    public function testGetUserdata()
    {
        $user           = $this->getWpUser(['ID' => 1]);
        $callableReturn = fn($userId) => $userId === 1 ? $user : null;
        $wpService      = new FakeWpService(['getUserdata' => $callableReturn]);

        $result = $wpService->getUserdata(1);

        $this->assertEquals([1], $wpService->methodCalls['getUserdata'][0]);
        $this->assertEquals($user, $result);
    }

    /**
     * @testdox __()
     */
    public function test__() // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    {
        $wpService = new FakeWpService();

        $result = $wpService->__('testString', 'testDomain');

        $this->assertEquals(['testString', 'testDomain'], $wpService->methodCalls['__'][0]);
        $this->assertEquals('testString', $result);
    }

    /**
     * @testdox _e()
     */
    public function test_e() // phpcs:ignore PSR1.Methods.CamelCapsMethodName.NotCamelCaps
    {
        ob_start(); //Prevent output to the console

        $wpService = new FakeWpService();

        $wpService->_e('testString', 'testDomain');

        $this->assertEquals(['testString', 'testDomain'], $wpService->methodCalls['_e'][0]);

        ob_end_clean(); // Prevent output to the console
    }

    /**
     * @testdox getEditPostLink()
     */
    public function testGetEditPostLink()
    {
        $callableReturn = fn($postId) => $postId === 1 ? 'http://example.com/foo' : false;
        $wpService      = new FakeWpService(['getEditPostLink' => $callableReturn]);

        $result = $wpService->getEditPostLink(1);

        $this->assertEquals([1], $wpService->methodCalls['getEditPostLink'][0]);
        $this->assertEquals('http://example.com/foo', $result);
    }

    /**
     * @testdox getThemeMod()
     */
    public function testGetThemeMod()
    {
        $wpService = new FakeWpService(['getThemeMod' => 'testThemeMod']);

        $result = $wpService->getThemeMod('testName', 'testDefault');

        $this->assertEquals(['testName', 'testDefault'], $wpService->methodCalls['getThemeMod'][0]);
        $this->assertEquals('testThemeMod', $result);
    }

    /**
     * @testdox getThemeMods()
     */
    public function testGetThemeMods()
    {
        $wpService = new FakeWpService(['getThemeMods' => ['testThemeMod' => 'testThemeModData']]);

        $result = $wpService->getThemeMods();

        $this->assertEquals([], $wpService->methodCalls['getThemeMods'][0]);
        $this->assertEquals(['testThemeMod' => 'testThemeModData'], $result);
    }

    /**
     * @testdox getStylesheetDirectoryUri()
     */
    public function testGetStylesheetDirectoryUri()
    {
        $wpService = new FakeWpService(['getStylesheetDirectoryUri' => 'http://example.com/foo']);

        $result = $wpService->getStylesheetDirectoryUri();

        $this->assertEquals([], $wpService->methodCalls['getStylesheetDirectoryUri'][0]);
        $this->assertEquals('http://example.com/foo', $result);
    }

    /**
     * @testdox getBloginfo()
     */
    public function testGetBloginfo()
    {
        $wpService = new FakeWpService(['getBloginfo' => 'testBloginfo']);

        $result = $wpService->getBloginfo('testName');

        $this->assertEquals(['testName'], $wpService->methodCalls['getBloginfo'][0]);
        $this->assertEquals('testBloginfo', $result);
    }

    /**
     * @testdox autop()
     */
    public function testAutop()
    {
        $wpService = new FakeWpService(['autop' => 'testAutop']);

        $result = $wpService->autop('testString');

        $this->assertEquals(['testString'], $wpService->methodCalls['autop'][0]);
        $this->assertEquals('testAutop', $result);
    }

    /**
     * @testdox cacheAdd()
     */
    public function testCacheAdd()
    {
        $wpService = new FakeWpService(['cacheAdd' => true]);

        $result = $wpService->cacheAdd('testKey', 'testValue', 'testGroup', 10);

        $this->assertEquals(['testKey', 'testValue', 'testGroup', 10], $wpService->methodCalls['cacheAdd'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheAddMultiple()
     */
    public function testCacheAddMultiple()
    {
        $wpService = new FakeWpService(['cacheAddMultiple' => [true]]);

        $result = $wpService->cacheAddMultiple(['testKey' => 'testValue'], 'testGroup', 10);

        $this->assertEquals(
            [['testKey' => 'testValue'], 'testGroup', 10],
            $wpService->methodCalls['cacheAddMultiple'][0]
        );
        $this->assertEquals([true], $result);
    }

    /**
     * @testdox cacheDelete()
     */
    public function testCacheDelete()
    {
        $wpService = new FakeWpService(['cacheDelete' => true]);

        $result = $wpService->cacheDelete('testKey', 'testGroup');

        $this->assertEquals(['testKey', 'testGroup'], $wpService->methodCalls['cacheDelete'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheDeleteMultiple()
     */
    public function testCacheDeleteMultiple()
    {
        $wpService = new FakeWpService(['cacheDeleteMultiple' => true]);

        $result = $wpService->cacheDeleteMultiple(['testKey'], 'testGroup');

        $this->assertEquals([['testKey'], 'testGroup'], $wpService->methodCalls['cacheDeleteMultiple'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheFlush()
     */
    public function testCacheFlush()
    {
        $wpService = new FakeWpService(['cacheFlush' => true]);

        $result = $wpService->cacheFlush();

        $this->assertEquals([], $wpService->methodCalls['cacheFlush'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheGet()
     */
    public function testCacheGet()
    {
        $wpService = new FakeWpService(['cacheGet' => 'testValue']);

        $result = $wpService->cacheGet('testKey', 'testGroup', true);

        $this->assertEquals(['testKey', 'testGroup', true], $wpService->methodCalls['cacheGet'][0]);
        $this->assertEquals('testValue', $result);
    }

    /**
     * @testdox cacheGetMultiple()
     */
    public function testCacheGetMultiple()
    {
        $wpService = new FakeWpService(['cacheGetMultiple' => ['testKey' => 'testValue']]);

        $result = $wpService->cacheGetMultiple(['testKey'], 'testGroup', true);

        $this->assertEquals([['testKey'], 'testGroup', true], $wpService->methodCalls['cacheGetMultiple'][0]);
        $this->assertEquals(['testKey' => 'testValue'], $result);
    }

    /**
     * @testdox cacheReplace()
     */
    public function testCacheReplace()
    {
        $wpService = new FakeWpService(['cacheReplace' => true]);

        $result = $wpService->cacheReplace('testKey', 'testValue', 'testGroup', 10);

        $this->assertEquals(['testKey', 'testValue', 'testGroup', 10], $wpService->methodCalls['cacheReplace'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheSet()
     */
    public function testCacheSet()
    {
        $wpService = new FakeWpService(['cacheSet' => true]);

        $result = $wpService->cacheSet('testKey', 'testValue', 'testGroup', 10);

        $this->assertEquals(['testKey', 'testValue', 'testGroup', 10], $wpService->methodCalls['cacheSet'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox cacheSetMultiple()
     */
    public function testCacheSetMultiple()
    {
        $wpService = new FakeWpService(['cacheSetMultiple' => [true]]);

        $result = $wpService->cacheSetMultiple(['testKey' => 'testValue'], 'testGroup', 10);

        $this->assertEquals(
            [['testKey' => 'testValue'], 'testGroup', 10],
            $wpService->methodCalls['cacheSetMultiple'][0]
        );
        $this->assertEquals([true], $result);
    }

    /**
     * @testdox sanitizeTitle()
     */
    public function testSanitizeTitle()
    {
        $wpService = new FakeWpService(['sanitizeTitle' => 'testSanitizedTitle']);

        $result = $wpService->sanitizeTitle('testTitle');

        $this->assertEquals(['testTitle'], $wpService->methodCalls['sanitizeTitle'][0]);
        $this->assertEquals('testSanitizedTitle', $result);
    }

    /**
     * @testdox insertPost()
     */
    public function testInsertPost()
    {
        $wpService = new FakeWpService(['insertPost' => 1]);

        $result = $wpService->insertPost(['testArg' => 'foo']);

        $this->assertEquals([['testArg' => 'foo']], $wpService->methodCalls['insertPost'][0]);
        $this->assertEquals(1, $result);
    }

    /**
     * @testdox mediaSideloadImage()
     */
    public function testMediaSideloadImage()
    {
        $callableReturn = fn($url) => $url === 'testUrl' ? 'testUrlData' : null;
        $wpService      = new FakeWpService(['mediaSideloadImage' => $callableReturn]);

        $result = $wpService->mediaSideloadImage('testUrl', 1, 'testDescription');

        $this->assertEquals(['testUrl', 1, 'testDescription'], $wpService->methodCalls['mediaSideloadImage'][0]);
        $this->assertEquals('testUrlData', $result);
    }

    /**
     * @testdox getPostType()
     */
    public function testGetPostType()
    {
        $callableReturn = fn($postId) => $postId === 1 ? 'foo' : null;
        $wpService      = new FakeWpService(['getPostType' => $callableReturn]);

        $result = $wpService->getPostType(1);

        $this->assertEquals([1], $wpService->methodCalls['getPostType'][0]);
        $this->assertEquals('foo', $result);
    }

    /**
     * @testdox getPostTypes()
     */
    public function testGetPostTypes()
    {
        $wpService = new FakeWpService(['getPostTypes' => ['testPostType']]);

        $result = $wpService->getPostTypes();

        $this->assertEquals([], $wpService->methodCalls['getPostTypes'][0]);
        $this->assertEquals(['testPostType'], $result);
    }

    /**
     * @testdox remoteGet()
     */
    public function testRemoteGet()
    {
        $callableReturn = fn($url) => $url === 'testUrl' ? ['testResponse'] : [];
        $wpService      = new FakeWpService(['remoteGet' => $callableReturn]);
        $result         = $wpService->remoteGet('testUrl', ['testArg' => 'foo']);

        $this->assertEquals(['testUrl', ['testArg' => 'foo']], $wpService->methodCalls['remoteGet'][0]);
        $this->assertEquals(['testResponse'], $result);
    }

    /**
     * @testdox remoteRetrieveBody()
     */
    public function testRemoteRetrieveBody()
    {
        $wpService = new FakeWpService(['remoteRetrieveBody' => 'testRemoteRetrieveBody']);

        $result = $wpService->remoteRetrieveBody(['testResponse']);

        $this->assertEquals([['testResponse']], $wpService->methodCalls['remoteRetrieveBody'][0]);
        $this->assertEquals('testRemoteRetrieveBody', $result);
    }

    /**
     * @testdox setThemeMod()
     */
    public function testSetThemeMod()
    {
        $wpService = new FakeWpService(['setThemeMod' => true]);

        $result = $wpService->setThemeMod('testName', 'testValue');

        $this->assertEquals(['testName', 'testValue'], $wpService->methodCalls['setThemeMod'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox updateOption()
     */
    public function testUpdateOption()
    {
        $wpService = new FakeWpService(['updateOption' => true]);

        $result = $wpService->updateOption('testOption', 'testValue');

        $this->assertEquals(['testOption', 'testValue'], $wpService->methodCalls['updateOption'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox taxonomyExists()
     */
    public function testTaxonomyExists()
    {
        $wpService = new FakeWpService(['taxonomyExists' => true]);

        $result = $wpService->taxonomyExists('testTaxonomy');

        $this->assertEquals(['testTaxonomy'], $wpService->methodCalls['taxonomyExists'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox registerTaxonomyForObjectType()
     */
    public function testRegisterTaxonomyForObjectType()
    {
        $wpService = new FakeWpService();

        $wpService->registerTaxonomyForObjectType('testTaxonomy', 'testObjectType');

        $this->assertEquals(
            ['testTaxonomy', 'testObjectType'],
            $wpService->methodCalls['registerTaxonomyForObjectType'][0]
        );
    }

    /**
     * @testdox isSingle()
     */
    public function testIsSingle()
    {
        $wpService = new FakeWpService(['isSingle' => true]);

        $result = $wpService->isSingle();

        $this->assertEquals([], $wpService->methodCalls['isSingle'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox addMetaBox()
     */
    public function testAddMetaBox()
    {
        $wpService = new FakeWpService();

        $callable = fn () => null;
        $wpService->addMetaBox('testId', 'testTitle', $callable, 'testScreen', 'testContext', 'testPriority');

        $this->assertEquals(
            ['testId', 'testTitle', $callable, 'testScreen', 'testContext', 'testPriority'],
            $wpService->methodCalls['addMetaBox'][0]
        );
    }

    /**
     * @testdox navMenuDisabledCheck()
     */
    public function testNavMenuDisabledCheck()
    {
        $navMenuId      = 123;
        $callableReturn = fn($selectedId) => $selectedId === $navMenuId ? 'disabled' : 'enabled';
        $wpService      = new FakeWpService(['navMenuDisabledCheck' => $callableReturn]);

        ob_start();
        $result = $wpService->navMenuDisabledCheck($navMenuId, true);
        $output = ob_get_clean();

        $this->assertEquals([$navMenuId, true], $wpService->methodCalls['navMenuDisabledCheck'][0]);
        $this->assertEquals('disabled', $result);
        $this->assertEquals('disabled', $output);
    }

    /**
     * @testdox walkNavMenuTree()
     */
    public function testWalkNavMenuTree()
    {
        $wpService = new FakeWpService(['walkNavMenuTree' => '<nav/>']);
        $args      = (object)['arg' => 'value'];

        $result = $wpService->walkNavMenuTree(['one', 'two'], false, $args);

        $this->assertEquals([['one', 'two'], false, $args], $wpService->methodCalls['walkNavMenuTree'][0]);
        $this->assertEquals('<nav/>', $result);
    }

    /**
     * @testdox getSubmitButton()
     */
    public function testGetSubmitButton()
    {
        $wpService = new FakeWpService(['getSubmitButton' => '<button/>']);

        $result = $wpService->getSubmitButton('testText', 'testType', 'testName', 'testWrap', 'testOther');

        $this->assertEquals(
            ['testText', 'testType', 'testName', 'testWrap', 'testOther'],
            $wpService->methodCalls['getSubmitButton'][0]
        );
        $this->assertEquals('<button/>', $result);
    }

    /**
     * @testdox submitButton()
     */
    public function testSubmitButton()
    {
        $wpService = new FakeWpService(['submitButton' => function () {
            echo '<button/>';
        }]);

        ob_start();
        $wpService->submitButton('testText', 'testType', 'testName', 'testWrap', 'testOther');
        $output = ob_get_clean();

        $this->assertEquals(
            ['testText', 'testType', 'testName', 'testWrap', 'testOther'],
            $wpService->methodCalls['submitButton'][0]
        );
        $this->assertEquals('<button/>', $output);
    }

    /**
     * @testdox getQueryVar()
     */
    public function testGetQueryVar()
    {
        $wpService = new FakeWpService(['getQueryVar' => 42]);
        $result    = $wpService->getQueryVar('var');
        $this->assertEquals('var', $wpService->methodCalls['getQueryVar'][0][0]);
        $this->assertEquals(42, $result);
    }

    /**
     * @testdox updatePostMeta()
     */
    public function testUpdatePostMeta()
    {
        $wpService = new FakeWpService(['updatePostMeta' => true]);

        $result = $wpService->updatePostMeta(1, 'testKey', 'testValue');

        $this->assertEquals([1, 'testKey', 'testValue'], $wpService->methodCalls['updatePostMeta'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox getPostTypeObject()
     */
    public function testGetPostTypeObject()
    {
        $postTypeObject = $this->getPostTypeObject('testPostType');
        $wpService      = new FakeWpService(['getPostTypeObject' => $postTypeObject]);

        $result = $wpService->getPostTypeObject('testPostType');

        $this->assertEquals(['testPostType'], $wpService->methodCalls['getPostTypeObject'][0]);
        $this->assertEquals($postTypeObject, $result);
    }

    /**
     * @testdox getReadyCronJobs()
     */
    public function testGetReadyCronJobs()
    {
        $wpService = new FakeWpService(['getReadyCronJobs' => ['testCronJob']]);

        $result = $wpService->getReadyCronJobs();

        $this->assertEquals([], $wpService->methodCalls['getReadyCronJobs'][0]);
        $this->assertEquals(['testCronJob'], $result);
    }

    /**
     * @testdox unscheduleEvent()
     */
    public function testUnscheduleEvent()
    {
        $timestamp = time();
        $wpService = new FakeWpService(['unscheduleEvent' => true]);

        $result = $wpService->unscheduleEvent($timestamp, 'testHook');

        $this->assertEquals([$timestamp, 'testHook'], $wpService->methodCalls['unscheduleEvent'][0]);
        $this->assertTrue($result);
    }

    /**
     * @testdox clearScheduledHook()
     */
    public function testClearScheduledHook()
    {
        $wpService = new FakeWpService(['clearScheduledHook' => 123]);

        $result = $wpService->clearScheduledHook('testHook');

        $this->assertEquals(['testHook'], $wpService->methodCalls['clearScheduledHook'][0]);
        $this->assertEquals(123, $result);
    }

    /**
     * @testdox getCronArray()
     */
    public function testGetCronArray()
    {
        $wpService = new FakeWpService(['getCronArray' => ['testCronArray']]);

        $result = $wpService->getCronArray();

        $this->assertEquals([], $wpService->methodCalls['getCronArray'][0]);
        $this->assertEquals(['testCronArray'], $result);
    }

    private function getWpScreen(array $properties = []): WP_Screen|MockObject
    {
        $wpScreen = $this->getMockBuilder('WP_Screen')->disableOriginalConstructor()->getMock();

        foreach ($properties as $property => $value) {
            @$wpScreen->$property = $value;
        }

        return $wpScreen;
    }

    private function getWpRole(array $properties = []): WP_Role|MockObject
    {
        $role = $this->getMockBuilder('WP_Role')->disableOriginalConstructor()->getMock();

        foreach ($properties as $property => $value) {
            @$role->$property = $value;
        }

        return $role;
    }

    private function getWpUser(array $properties): WP_User|MockObject
    {
        $user = $this->getMockBuilder('WP_User')->disableOriginalConstructor()->getMock();

        foreach ($properties as $property => $value) {
            @$user->$property = $value;
        }

        return $user;
    }

    private function getWpTerm(array $properties): WP_Term|MockObject
    {
        $term = $this->getMockBuilder('WP_Term')->disableOriginalConstructor()->getMock();

        foreach ($properties as $property => $value) {
            @$term->{$property} = $value;
        }

        return $term;
    }

    private function getWpPost(array $properties = []): WP_Post|MockObject
    {
        $post = $this->getMockBuilder('WP_Post')->disableOriginalConstructor()->getMock();

        foreach ($properties as $property => $value) {
            @$post->{$property} = $value;
        }

        return $post;
    }

    private function getPostTypeObject(string $postType): WP_Post_Type|MockObject
    {
        $postTypeObject = $this->getMockBuilder('WP_Post_Type')->disableOriginalConstructor()->getMock();

        $postTypeObject->name = $postType;

        return $postTypeObject;
    }
}
