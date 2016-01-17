<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Alm_documents
 * @author     Alexander <jakimov_alex@mail.ru>
 * @copyright  © 2016. Все права защищены.
 * @license    GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

require_once JPATH_COMPONENT . '/controller.php';

/**
 * Documentstables list controller class.
 *
 * @since  1.6
 */
class Alm_documentsControllerDocumentstables extends Alm_documentsController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return object	The model
	 *
	 * @since	1.6
	 */
	public function &getModel($name = 'Documentstables', $prefix = 'Alm_documentsModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}
}
