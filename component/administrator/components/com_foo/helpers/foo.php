<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
 */

use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die;

/**
 * Foo helper.
 *
 * @package   [PACKAGE_NAME]
 * @since     1.0.0
 */
class FooHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function addSubmenu($vName)
	{
		HTMLHelper::_('sidebar.addEntry', Text::_('COM_FOO'), 'index.php?option=com_foo&view=foo', $vName === 'foo');
	}
}
