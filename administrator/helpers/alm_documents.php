<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Alm_documents
 * @author     Alexander <jakimov_alex@mail.ru>
 * @copyright  © 2016. Все права защищены.
 * @license    GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Alm_documents helper.
 *
 * @since  1.6
 */
class Alm_documentsHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param   string  $vName  string
	 *
	 * @return void
	 */
	public static function addSubmenu($vName = '')
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_ALM_DOCUMENTS_TITLE_DOCUMENTSTABLES'),
			'index.php?option=com_alm_documents&view=documentstables',
			$vName == 'documentstables'
		);

	}

	/**
	 * Gets a list of the actions that can be performed.
	 *
	 * @return    JObject
	 *
	 * @since    1.6
	 */
	public static function getActions()
	{
		$user   = JFactory::getUser();
		$result = new JObject;

		$assetName = 'com_alm_documents';

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action)
		{
			$result->set($action, $user->authorise($action, $assetName));
		}

		return $result;
	}
}
