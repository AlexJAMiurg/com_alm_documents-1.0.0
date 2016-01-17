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

jimport('joomla.application.component.controller');

/**
 * Class Alm_documentsController
 *
 * @since  1.6
 */
class Alm_documentsController extends JControllerLegacy
{
	/**
	 * Method to display a view.
	 *
	 * @param   boolean  $cachable   If true, the view output will be cached
	 * @param   mixed    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  JController   This object to support chaining.
	 *
	 * @since    1.5
	 */
	public function display($cachable = false, $urlparams = false)
	{
		require_once JPATH_COMPONENT . '/helpers/alm_documents.php';

		$view = JFactory::getApplication()->input->getCmd('view', 'documentstables');
		JFactory::getApplication()->input->set('view', $view);

		parent::display($cachable, $urlparams);

		return $this;
	}
}
