<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Alm_documents
 * @author     Alexander <jakimov_alex@mail.ru>
 * @copyright  © 2016. Все права защищены.
 * @license    GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('Alm_documentsFrontendHelper', JPATH_COMPONENT . '/helpers/alm_documents.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Alm_documents');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
