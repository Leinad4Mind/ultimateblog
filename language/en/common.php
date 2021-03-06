<?php
/**
 *
 * Ultimate Blog. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Mr. Goldy
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BLOG'		=> 'Blog',
	'BLOGS'		=> 'Blogs',
	'BLOG_COUNT'	=> array(
		1 => '%d blog',
		2 => '%d blogs',
	),

	'BLOG_ADD'				=> 'Add blog',
	'BLOG_ADDED'			=> 'Your blog (“<strong>%1$s</strong>”) has been successfully added.<br><br><strong><a href="%2$s">« Click here to view your blog</a></strong>',
	'BLOG_ARCHIVE'			=> 'Archive',
	'BLOG_ARCHIVE_DESCRIPTION'		=> 'A list of months, grouped by year, in which blogs were posted. Click on a month to view all blogs for that specific period.',
	'BLOG_ARCHIVE_DESCRIPTION_DATE'	=> 'All blogs posted in the month of %1$s %2$s.', // %1$s is month (October), %2$s is year (2049)
	'BLOG_AUTHOR'					=> 'author',

	'BLOG_BEST_RATING'				=> 'Blog with best rating',
	'BLOG_BLOG_CATEGORY'			=> 'Blog category',
	'BLOG_BLOG_PER_DAY'				=> 'Blogs per day',

	'BLOG_CATEGORY'					=> 'Category',
	'BLOG_CATEGORIES'				=> 'Categories',
	'BLOG_CATEGORIES_DESCRIPTION'	=> 'A list of categories in which blogs are posted. Click on a category to view all blogs for that specific blogs.',
	'BLOG_CATEGORIES_GO'			=> 'Go to category',
	'BLOG_CATEGORIES_PRIVATE'			=> 'Private category',
	'BLOG_CATEGORIES_PUBLIC'			=> 'Public category',
	'BLOG_CHANGE_AUTHOR'			=> 'Change author',

	'BLOG_COMMENTS'					=> 'Comments',
	'BLOG_COMMENTS_DELETE'			=> 'Delete this comment',
	'BLOG_COMMENTS_DELETE_CONFIRM'	=> 'Are you sure you wish to delete this comment?',
	'BLOG_COMMENTS_DELETE_REPLIES'	=> 'This will also delete all replies made to this comment.',
	'BLOG_COMMENTS_EDIT'			=> 'Edit this comment',
	'BLOG_COMMENTS_LINK'			=> 'Link to this comment',
	'BLOG_COMMENTS_PER_DAY'			=> 'Comments per day',
	'BLOG_COMMENTS_POST'			=> 'Post a comment',
	'BLOG_COMMENTS_REPLY'			=> 'Reply to this comment',
	'BLOG_COMMENTS_REPORT'			=> 'Report this comment',
	'BLOG_COMMENTS_REPORTED'		=> 'This comment has been reported.',
	'BLOG_COMMENTS_SHOW_MORE'		=> 'Show more comments',
	'BLOG_COMMENTS_SHOW_REPLIES'	=> 'Show replies (%s)',

	'BLOG_DELETE'					=> 'Delete blog',
	'BLOG_DELETE_CONFIRM'			=> 'You are about to delete “<strong>%s</strong>”.<br>Are you sure you want to delete this blog?<br>This action can <strong>not</strong> be undone!',
	'BLOG_DESCRIPTION'				=> 'Blog description',
	'BLOG_DESCRIPTION_PLACEHOLDER'	=> 'Add a mandatory blog description. It needs to have between 50 and 125 characters.',

	'BLOG_EDIT'					=> 'Edit blog',
	'BLOG_EDIT_DELETE'			=> 'Delete edit reason',
	'BLOG_EDIT_REASON'			=> 'Edit reason',
	'BLOG_EDIT_REASONS'			=> 'Edit reasons',
	'BLOG_EDIT_TOTAL'			=> 'Total edits',
	'BLOG_EDIT_VIEW'			=> 'View all edits',
	'BLOG_EDITED'				=> 'Your blog (“<strong>%1$s</strong>”) has been successfully edited.<br><br><strong><a href="%2$s">« Click here to view your blog</a></strong>',
	'BLOG_EDITED_ON'			=> 'Edited on',

	'BLOG_ERROR_ARCHIVE_EMPTY'		=> 'There are <strong>no blogs</strong> for this specific month and year combination.',
	'BLOG_ERROR_CANT_ADD'			=> 'You do <strong>not</strong> have the permission to post a blog.',
	'BLOG_ERROR_CANT_COMMENT'		=> 'You do <strong>not</strong> have the permission to post a comment.',
	'BLOG_ERROR_CANT_COMMENT_DELETE' => 'You do <strong>not</strong> have the permission to delete a comment.',
	'BLOG_ERROR_CANT_COMMENT_EDIT'	=> 'You do <strong>not</strong> have the permission to edit a comment.',
	'BLOG_ERROR_CANT_DELETE'		=> 'You do <strong>not</strong> have the permission to delete a blog.',
	'BLOG_ERROR_CANT_EDIT'			=> 'You do <strong>not</strong> have the permission to edit this blog.',
	'BLOG_ERROR_CANT_EDIT_DELETE'	=> 'You do <strong>not</strong> have the permission to delete this edit reason.',
	'BLOG_ERROR_CANT_VIEW'			=> 'You do <strong>not</strong> have the permission to view this page.',
	'BLOG_ERROR_CATEGORY_NONE'		=> 'You have <strong>not</strong> selected any category. You need to select <strong>one <em>(1)</em> or more</strong> categories.',
	'BLOG_ERROR_DESC_BOUNDS'		=> 'Your blog description is out of bounds. It has to be <strong>between 50 and 125</strong> characters. It currently has %d characters.',
	'BLOG_ERROR_DISABLED'			=> 'The Ultimate Blog extension for this board has been disabled.',
	'BLOG_ERROR_EDIT_REASON'		=> 'You have to supply an edit reason, with <strong>less than 100</strong> characters.',
	'BLOG_ERROR_INVALID_MODE'		=> 'You have entered an <strong>invalid</strong> mode.',
	'BLOG_ERROR_FRIENDS_ONLY'		=> 'This blog is only visible to users in the <strong>friendslist of the author</strong>.',
	'BLOG_ERROR_MIN_CHARS'			=> 'Your blog text has too few characters. It needs to have atleast <strong>%1$s</strong> characters and it currently has only <strong>%2$s</strong> characters.',
	'BLOG_ERROR_NO_BLOG'			=> 'There is <strong>no</strong> blog post for this id.',
	'BLOG_ERROR_NO_CATEGORY'		=> 'There is <strong>no</strong> blog category for this id.',
	'BLOG_ERROR_NO_USER_BLOG'		=> 'There are <strong>no</strong> blog posts for this user.',
	'BLOG_ERROR_NO_TITLE'			=> 'You have <strong>not</strong> entered a blog title.',

	'BLOG_FRIENDS_ONLY'			=> 'Only visible for <strong>YOUR</strong> friends',

	'BLOG_IMAGE'				=> 'Blog image',
	'BLOG_IMAGE_EXPLAIN'		=> '<em>(w 350px | h 225px)</em>',
	'BLOG_INDEX'				=> 'Index',
	'BLOG_INDEX_COMMENTED'		=> 'Last commented',
	'BLOG_INDEX_LATEST'			=> 'Latest',
	'BLOG_INDEX_RATED'			=> 'Highest rated',
	'BLOG_INDEX_VIEWED'			=> 'Most viewed',

	'BLOG_LOCK_COMMENTS'		=> 'Prevent commenting',
	'BLOG_LOCK_RATING'			=> 'Prevent rating',

	'BLOG_MOST_COMMENTS'		=> 'Blog with most comments',
	'BLOG_MOST_VIEWS'			=> 'Blog with most views',

	'BLOG_NEW'					=> 'New blogs',
	'BLOG_NUMBER_BLOGS'			=> 'Number of blogs',
	'BLOG_NUMBER_CATEGORIES'	=> 'Number of categories',
	'BLOG_NUMBER_COMMENTS'		=> 'Number of comments',
	'BLOG_NUMBER_BLOGVIEWS'		=> 'Number of blog views',

	'BLOG_PERM_ADD_CAN'				=> 'You <strong>can</strong> post new blogs',
	'BLOG_PERM_ADD_NOT'				=> 'You <strong>cannot</strong> post new blogs',
	'BLOG_PERM_COMMENT_CAN'			=> 'You <strong>can</strong> comment on blogs',
	'BLOG_PERM_COMMENT_NOT'			=> 'You <strong>cannot</strong> comment on blogs',
	'BLOG_PERM_COMMENT_VIEW_CAN'	=> 'You <strong>can</strong> view blog comments',
	'BLOG_PERM_COMMENT_VIEW_NOT'	=> 'You <strong>cannot</strong> view blog comments',
	'BLOG_PERM_DELETE_CAN'			=> 'You <strong>can</strong> delete your own blogs',
	'BLOG_PERM_DELETE_NOT'			=> 'You <strong>cannot</strong> delete your own blogs',
	'BLOG_PERM_EDIT_CAN'			=> 'You <strong>can</strong> edit your own blogs',
	'BLOG_PERM_EDIT_NOT'			=> 'You <strong>cannot</strong> edit your own blogs',
	'BLOG_PERM_EDIT_VIEW_CAN'		=> 'You <strong>can</strong> view blog edit reasons',
	'BLOG_PERM_EDIT_VIEW_NOT'		=> 'You <strong>cannot</strong> view blog edit reasons',
	'BLOG_PERM_NOAPPROVE_CAN'		=> 'You <strong>can</strong> post new blogs without approval',
	'BLOG_PERM_NOAPPROVE_NOT'		=> 'You <strong>cannot</strong> post new blogs without approval',
	'BLOG_PERM_RATE_CAN'			=> 'You <strong>can</strong> rate blogs',
	'BLOG_PERM_RATE_NOT'			=> 'You <strong>cannot</strong> rate blogs',
	'BLOG_PERM_REPORT_CAN'			=> 'You <strong>can</strong> report blogs and comments',
	'BLOG_PERM_REPORT_NOT'			=> 'You <strong>cannot</strong> report blogs and comments',

	'BLOG_POSTED_ON'			=> 'Posted on',
	'BLOG_PREVIEW'				=> 'Blog preview',

	'BLOG_RATING_AVG'			=> 'Average rating',
	'BLOG_RATING_NONE'			=> '<em>Not rated yet</em>',
	'BLOG_RATING_YOUR'			=> 'Your rating',
	'BLOG_RATING_COUNT'			=> array(
		1	=> '%d rating',
		2	=> '%d ratings',
	),
	'BLOG_REQUIRED_RATINGS'			=> 'Required ratings',
	'BLOG_READ_FULL'				=> 'Read the full blog',
	'BLOG_REPORT_BLOG'				=> 'Report blog',
	'BLOG_REPORT_BLOG_EXPLAIN'		=> 'Use this form to report the selected blog entry. Reporting should generally be used only if the blog breaks forum and/or blog rules.',
	'BLOG_REPORT_COMMENT'			=> 'Report comment',
	'BLOG_REPORT_COMMENT_EXPLAIN'	=> 'Use this form to report the selected comment entry. Reporting should generally be used only if the comment breaks forum and/or blog rules.',
	'BLOG_REPORTED'					=> 'This blog has been reported.',

	'BLOG_SHOW_AMOUNT'			=> 'Show amount',
	'BLOG_SHOW_MOSTVIEWS'		=> 'Show blogs with the most views',
	'BLOG_START_DATE'			=> 'Start date',

	'BLOG_TITLE'				=> 'Blog title',
	'BLOGS_TOTAL'				=> 'Total blogs',
	'BLOGS_TOTAL_SEARCH'		=> 'Search users’s blogs',

	'BLOG_UNAPPROVED'			=> 'Unapproved',
	'BLOG_UPTIME'				=> 'Uptime',
	'BLOG_USER_MOST_BLOGS'		=> 'User with most blogs',
	'BLOG_USER_MOST_COMMENTS'	=> 'User with most comments',

	'BLOG_VIEW_PERMISSIONS'		=> 'View your permissions',
	'BLOG_VIEWS'				=> 'Views',

	'BLOG_WORST_RATING'			=> 'Blog with worst rating',

	'UB_NOTIFICATION_BLOG_DELETED'		=> '<strong>Blog deleted</strong> by %1$s:<br>"%2$s"', // 1: Deleter name | 2: Blog title
	'UB_NOTIFICATION_BLOG_EDITED'		=> '<strong>Blog edited</strong> by %1$s:<br>"%2$s"', // 1: Editor name | 2: Blog title
	'UB_NOTIFICATION_BLOG_REPORT'		=> '<strong>Blog report closed</strong> by %1$s for:<br>"%2$s"', // 1: Moderator name | 2: Blog title
	'UB_NOTIFICATION_COMMENT_ADDED'		=> '<strong>Comment added</strong> by %1$s for:<br>"%2$s"', // 1: Author name | 2: Blog title
	'UB_NOTIFICATION_COMMENT_DELETED'	=> '<strong>Comment deleted</strong> by %1$s for:<br>"%2$s"', // 1: Deleter name | 2: Blog title
	'UB_NOTIFICATION_COMMENT_EDITED'	=> '<strong>Comment edited</strong> by %1$s for:<br>"%2$s"', // 1: Editor name | 2: Blog title
	'UB_NOTIFICATION_COMMENT_REPORT'	=> '<strong>Comment report closed</strong> by %1$s for:<br>"%2$s"', // 1: Moderator name | 2: Blog title
	'UB_NOTIFICATION_DEFAULT'			=> 'Notification for Ultimate Blog', // Should never get this.

	'UB_VIEWONLINE_ARCHIVE'		=> 'Viewing the %1$s archive for %3$s %2$s', // 1: Ultimate Blog title | 2: Numeric year (eg. 2017) | 3: Textual month (eg. January)
	'UB_VIEWONLINE_ARCHIVES'	=> 'Viewing the %s archives',
	'UB_VIEWONLINE_CATEGORY'	=> 'Viewing %1$s entries in %2$s', // 1: Ultimate Blog title | 2: Category namespace
	'UB_VIEWONLINE_CATEGORIES'	=> 'Viewing %s categories',
	'UB_VIEWONLINE_POSTING'		=> 'Posting a new %s entry',
	'UB_VIEWONLINE_USER'		=> 'Viewing a user\'s %s entries',
	'UB_VIEWONLINE_BLOG'		=> 'Reading a %s entry',
	'UB_VIEWONLINE_INDEX'		=> 'Viewing the %s index',
));
