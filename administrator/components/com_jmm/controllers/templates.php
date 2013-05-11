<?php
/**
 * @package		JMM
 * @link		http://adidac.github.com/jmm/index.html
 * @license		GNU/GPL
 * @copyright	Biswarup Adhikari
*/
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controlleradmin');
class JMMControllerTemplates extends JControllerAdmin
{
	protected $text_prefix='COM_JMM_TEMPLATES';
	
	public function getModel($name='Template',$prefix='JMMModel',$config=array('ignore_request'=>true))
	{
		$model=parent::getModel($name,$prefix,$config);
		return $model;
	}
	
}
