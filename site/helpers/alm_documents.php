<?php

/**
 * @version    CVS: 1.0.0
 * @package    Com_Alm_documents
 * @author     Alexander <jakimov_alex@mail.ru>
 * @copyright  © 2016. Все права защищены.
 * @license    GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Class Alm_documentsFrontendHelper
 *
 * @since  1.6
 */
class Alm_documentsFrontendHelper
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_alm_documents/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_alm_documents/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'Alm_documentsModel');
		}

		return $model;
	}
}
