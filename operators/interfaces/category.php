<?php
/**
*
* Blog extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 phpBB Blog Group
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace phpbb_blog\blog\operators\interfaces;

interface category
{
	protected $categoryRepository;

	/**
	 * Gets a list of alias' for categories
	 *
	 * @param  boolean $unused True if you want to include un-used categories
	 * @return array
	 * @access public
	 */
	public function getCategoriesSimpleList($unused = false)

	/**
	 * Gets details about all the categories
	 *
	 * @param  boolean $unused True if you want to include un-used categories
	 * @param  string  $sort   Sort by size (most number of post using the tag) or id (age)
	 * @return array
	 * @access public
	 */
	public function getCategoriesArray($unused = false, $sort = 'size')

	public function createCategory($data)

	public function deleteCategory($id)

	public function editCategory($data)

	public function recalculatePosts($id)

	public function getCategoryData($id)
}
