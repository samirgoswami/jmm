<?php
defined('_JEXEC') or die('Restricted access');
?>
<form method="post" id="adminForm" name="adminForm">
<textarea placeholder="Enter your SQL Quiries......" rows="10" cols="150" id="query" name="query"><?php echo JRequest::getVar('query','');?></textarea><br>
<input type="submit" class="btn_runquery large" value="Run Query">
	<?php
	if($this->items && count($this->items)>0){
		?>
		<hr>
	<table class="adminlist">
		<thead>
			<tr>
				<?php
				foreach($this->items[0] as $col=>$val){
				?>
				<th>
					<?php echo $col;?>
				</th>
				<?php
				}
				?>
							
			</tr>
		</thead>
		<tbody>
			<?php foreach ($this->items as $i => $item): ?>	
				
				<tr class="row<?php echo $i % 2?>">
					
					<?php
					$z=0;
					foreach($this->items[$i] as $col=>$val){
					?>
					<?php
					if(count($this->items[$i])>4 && $z!=0){
						echo '<td align="center">';
					}else{						
						echo '<td>';
					}
					?>
					
						<?php echo $val;?>
					</td>
					</td>
					<?php
					$z++;
					}
					?>
					
				</tr>
				
			<?php endforeach?>
		</tbody>
	</table>
	<?php
	}
	?>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
	<?php echo JHtml::_('form.token');?>
</form>