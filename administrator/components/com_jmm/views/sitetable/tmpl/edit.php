<?php
defined('_JEXEC') or die('Restricted access');
/**
 * @package		JMM
 * @link		http://adidac.github.com/jmm/index.html
 * @license		GNU/GPL
 * @copyright	Biswarup Adhikari
*/
?>
<form action="index.php?option=com_jmm&amp;layout=edit&amp;id=<?php echo $this->item->id;?>" method="POST" name="adminForm" class="form-validate">
<div class="width-60 fltlft">
	<fieldset class="adminform">
		<ul class="adminformList">
		<?php foreach($this->form->getFieldset() as $field):?>
			<li>
				<?php echo $field->label;?>
				<?php echo $field->input;?>
				
			</li>
			
			<?php endforeach ?>
		</ul>
	</fieldset>
	
</div>
<input type="hidden" name="task" value="sitetable.edit">
<?php echo JHtml::_('form.token');?>
</form>