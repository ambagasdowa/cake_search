<div class="calendars index">
	<h2><?php __('Calendars');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('allday');?></th>
			<th><?php echo $this->Paginator->sort('editable');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('constraint');?></th>
			<th><?php echo $this->Paginator->sort('color');?></th>
			<th><?php echo $this->Paginator->sort('rendering');?></th>
			<th><?php echo $this->Paginator->sort('overlap');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('create');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($calendars as $calendar):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $calendar['Calendar']['id']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['title']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['allday']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['editable']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['start']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['end']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['url']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['constraint']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['color']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['rendering']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['overlap']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['description']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['create']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['modified']; ?>&nbsp;</td>
		<td><?php echo $calendar['Calendar']['status']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $calendar['Calendar']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $calendar['Calendar']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $calendar['Calendar']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $calendar['Calendar']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Calendar', true), array('action' => 'add')); ?></li>
	</ul>
</div>