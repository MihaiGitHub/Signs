      <ul class="mainnav">
        <li><?php
		$title = $this->Html->tag('span', 'Reports');
		echo $this->Html->link( '<i class="icon-list-alt"></i>'.$title, '/signs/index', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'Edit Signs');
		echo $this->Html->link( '<i class="icon-edit"></i>'.$title, '/signs/edit', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'Add Signs');
		echo $this->Html->link( '<i class="icon-save"></i>'.$title, '/signs/save', array('escape' => false));
		?>
		</li>
		<li class="active"><?php
		$title = $this->Html->tag('span', 'View Users');
		echo $this->Html->link( '<i class="icon-group"></i>'.$title, '/staffs/index', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'Add User');
		echo $this->Html->link( '<i class="icon-user"></i>'.$title, '/staffs/add', array('escape' => false));
		?>
		</li>
	  </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div id="content">

<div id="main" class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <!-- /span6 -->
        <div class="span6">
		
		<div class="widget widget-table action-table">
	<div class="widget-header"> <i class="icon-list"></i>
	  <h3>User Listing</h3>
	</div>
	<!-- /widget-header -->
	<div class="widget-content">
	  <table class="table table-striped table-bordered">
		<thead>
		  <tr>
			<th><?php echo $this->Paginator->sort('Staff.staffName', 'Name'); ?></th>
			<th><?php echo $this->Paginator->sort('Staff.email', 'Email'); ?></th>
			<th><?php echo $this->Paginator->sort('Staff.doNOTusename', 'Active'); ?></th>
			<th class="td-actions"> </th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($staffs as $staff){ ?>
			<tr>
				
				<td><?php echo $staff['Staff']['staffName']; ?></td>
				<td><?php echo $staff['Staff']['email']; ?></td>
				<td><?php echo ($staff['Staff']['doNOTusename'] == 'False') ? 'True' : 'False'; ?></td>
				<td class="td-actions">	
				<?php echo $this->Html->link('Edit', '/staffs/edit/'.$staff['Staff']['staffID'], 
								array('class' => 'btn btn-small btn-success', 'escape' => false)); ?>&nbsp; 
				</td>
			</tr>	
		<?php } ?>
		</tbody>
	  </table>
	
	</div>
	<?php 
	echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
	echo $this->Paginator->numbers(); 
	echo $this->Paginator->next(' Next » ', null, null, array('class' => 'disabled'));
	echo $this->Paginator->counter(); 
	?>
	<!-- /widget-content --> 
</div><br/>