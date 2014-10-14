      <ul class="mainnav">
        <li><?php
		$title = $this->Html->tag('span', 'Reports');
		echo $this->Html->link( '<i class="icon-list-alt"></i>'.$title, '/signs/index', array('escape' => false));
		?>
		</li>
		<li class="active"><?php
		$title = $this->Html->tag('span', 'Edit Signs');
		echo $this->Html->link( '<i class="icon-edit"></i>'.$title, '/signs/edit', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'Add Signs');
		echo $this->Html->link( '<i class="icon-save"></i>'.$title, '/signs/save', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'View Users');
		echo $this->Html->link( '<i class="icon-group"></i>'.$title, '/staffs/index', array('escape' => false));
		?>
		</li>
		<li><?php
		$title = $this->Html->tag('span', 'Add User');
		echo $this->Html->link( '<i class="icon-user"></i>'.$title, '#', array('escape' => false));
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
	  <h3>Search Results</h3>
	</div>
	<!-- /widget-header -->
	<div class="widget-content">
	  <table class="table table-striped table-bordered">
		<thead>
		  <tr>
			<th>Date</th>
			<th>Impounded by</th>
			<th>Business</th>
			<th>Contact</th>
			<th>&#35; Impounded</th>
			<th>&#35; Discarded</th>
			<th>Size</th>
			<th>Address</th>
			<th>Comment</th>
			<th class="td-actions"> </th>
		  </tr>
		</thead>
		<tbody>
		<?php $rows = 0; foreach($signs as $sign){ $rows++; ?>
			<tr>
				
				<td><?php echo $sign['Sign']['RDate']; ?></td>
				<td><?php echo $sign['Sign']['byInsp']; ?></td>
				<td><?php echo $sign['Sign']['business']; ?></td>
				<td><?php echo $sign['Sign']['contact']; ?></td>
				<td><?php echo $sign['Sign']['numberImpounded']; ?></td>
				<td><?php echo $sign['Sign']['numberDiscarded']; ?></td>
				<td><?php echo $sign['Sign']['size']; ?></td>
				<td><?php echo $sign['Sign']['stName']; ?></td>
				<td><?php echo $sign['Sign']['comments']; ?></td>
                <td class="td-actions">	
					<?php echo $this->Html->link('Edit', '/signs/signedit/'.$sign['Sign']['signID'], 
								array('class' => 'btn btn-small btn-success', 'escape' => false)); ?>
					<?php echo $this->Html->link('Delete', '/signs/delete/'.$sign['Sign']['signID'], 
								array('class' => 'btn btn-danger btn-small', 'escape' => false)); ?>
				</td>
			</tr>	
		<?php } if($rows == 0) echo '<tr><td colspan="10" class="emptyRow">There are no results to display</td></tr>'; ?>
		</tbody>
	  </table>
	</div>
	<!-- /widget-content --> 
	<?php 
	echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled'));
	echo $this->Paginator->numbers(); 
	echo $this->Paginator->next(' Next » ', null, null, array('class' => 'disabled'));
	echo $this->Paginator->counter(); 
	?>
</div><br/>