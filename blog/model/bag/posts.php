<?php
/**
 *
 * @package phpBBBlog
 * @copyright (c) 2012 phpBBBlog group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * Posts container
 *
 * Class that holds all the posts that are
 * available in a category
 */
class phpbb_ext_phpbbblog_model_bag_posts extends phpbb_ext_phpbbblog_model_bag_base
{
	/**
	 * Load posts
	 *
	 * Load the posts, by default all
	 * posts are fetched, but it is also posible
	 * to load only specific categories.
	 *
	 * @param int|array $ids Specific posts to load
	 */
	public function load($ids = array())
	{
		$rowset = $this->load_bag();

		foreach ($rowset as $row)
		{
			$this[] = new phpbb_ext_phpbbblog_model_object_post(array_shift($row), $row, $this->db);
		}
	}
}
