<?php
/**
 * @package		JMM
 * @link		http://adidac.github.com/jmm/index.html
 * @license		GNU/GPL
 * @copyright	Biswarup Adhikari
*/
defined('_JEXEC') or die('Restricted access');
$rows=$this->rows;
$cols=$this->columns;
$params=$this->params;
$document =JFactory::getDocument();
$themeFile=JPATH_COMPONENT.DS.'templates'.DS.$this->theme.DS.'index.php';
$themeCSSFile=JPATH_COMPONENT.DS.'templates'.DS.$this->theme.DS.'css'.DS.'default.css';
$themeJSFile=JPATH_COMPONENT.DS.'templates'.DS.$this->theme.DS.'js'.DS.'custom.js';
if(file_exists($themeCSSFile)){
	$document->addStyleSheet($this->themeBaseURL.'/css/default.css');
}
if(file_exists($themeJSFile)){
	$document->addScript($this->themeBaseURL.'/js/custom.js');
}
if(file_exists($themeFile)){
	require_once($themeFile);
}else{
	$themeFile=JPATH_COMPONENT.DS.'templates'.DS.'default'.DS.'index.php';	
	require_once($themeFile);
}

?>
<?php
if($this->defaultPagination){
?>
<form action="index.php?option=com_jmm&amp;view=table" method="post" id="adminForm" name="adminForm">
<div class="jmm-pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
<input type="hidden" name="option" value="com_jmm" />
<input type="hidden" name="view" value="table" />
<?php echo JHtml::_('form.token');?>
</form>
<?php
}
?>