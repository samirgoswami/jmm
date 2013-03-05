<?php
/**
 * @package		JMM
 * @link		http://adidac.github.com/jmm/index.html
 * @license		GNU/GPL
 * @copyright	Biswarup Adhikari
*/
defined('_JEXEC') or die('Restricted access');
error_reporting(E_ALL);
ini_set('display_errors',1);
//set_error_handler("JMMErrorHandler");
function JMMErrorHandler($errno, $errstr, $errfile, $errline){
	/**
	 * Do not Display Any Errors Warning
	 */
	echo $errstr.' On File '.$errfile.' On Line Number'.$errline.' <hr>';
}
function printobj($obj){
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}
function dd($obj){
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}
defined('_JEXEC') or die('Restricted access');
JLoader::register('JMMCommon',JPATH_ADMINISTRATOR .DS.'components'. DS .'com_jmm'.DS. 'models' . DS . 'jmmcommon.php');
JLoader::register('JMM',JPATH_COMPONENT .DS.'helpers'. DS . 'jmm.php');
jimport('joomla.application.component.controller');
$controller = JController::getInstance('JMM');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
