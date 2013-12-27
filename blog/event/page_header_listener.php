<?php
/**
 *
 * @package phpBBBlog
 * @copyright (c) 2012 phpBBBlog group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace phpbb_blog\blog\event;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * core.page_header listener
 *
 * The listener class that is called from the `core.page_header`
 * event.
 */
class page_header_listener extends base
{
	/**
	 * {@inheritDoc}
	 */
	static public function getSubscribedEvents()
	{
		return parent::getBlogSubscribedEvents(array(
			'core.page_header' => 'page_header',
		));
	}

	/**
	 * @param Event $event
	 */
	public function page_header($event)
	{
		// Assign common template variables
		$this->template->assign_vars(array(
		));
	}
}
