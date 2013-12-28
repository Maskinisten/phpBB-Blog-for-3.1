<?php
/**
 *
 * @package phpBB Blog
 * @copyright (c) 2013 phpBB Blog Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace phpbb_blog\blog\model\bag;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
 * Categories container
 *
 * Class that holds all the categories that are
 * available on the blog
 */
class categories extends base
{
	/**
	 * Load categories
	 *
	 * Load the required categories, by default all
	 * categories are fetched, but it is also posible
	 * to load only specific categories.
	 *
	 * @param int|array $ids Specific categories to load
	 */
	public function load($ids = array())
	{
		$rowset = $this->load_bag($ids);

		foreach ($rowset as $row)
		{
			$this[] = new \phpbb_blog\blog\model_object_category(array_shift($row), $row, $this->db, $this->table);
		}
	}

	/**
	 * Get a specific category
	 *
	 * @param int $id The category id
	 * @return null|phpbb_blog\blog\model_category
	 */
	public function get_category($id)
	{
		foreach ($this as $category)
		{
			if ($category->get_id() == $id)
			{
				return $category;
			}
		}

		return null;
	}

	/**
	 * Get all the categories
	 *
	 * @return array
	 */
	public function get_categories()
	{
		return parent::get_object_data();
	}
}
