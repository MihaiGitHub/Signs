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
		<li class="active"><?php
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
		   <div class="widget widget-nopad">

		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-pencil"></i>
	      				<h3>Enter Sign Information</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<br/>
			<?php echo $this->Form->create('Sign', array('class' => 'form-horizontal')); ?>
				<fieldset>
					<?php $a[] = ''; foreach($names as $key => $name){ $a[$name['Staff']['staffName']] = $name['Staff']['staffName']; } ?>
					<div class="control-group">											
						<?php echo $this->Form->label('byInsp', __('Picked up by'), array('class' => 'control-label')); ?>
						<div class="controls">
					<?php echo $this->Form->input('byInsp', array('label' => false, 'options' => $a)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('business', __('Business name'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('business', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('contact', __('Contact/realtor'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('contact', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('numberImpounded', __('Number of signs impounded'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('numberImpounded', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('numberDiscarded', __('Number of signs thrown away'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('numberDiscarded', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('comments', __('Comment'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('comments', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('stName', __('Street name/intersection'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('stName', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('size', __('Size'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('size', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('RDate', __('Date'), array('id' => 'RDate', 'class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('RDate', array('maxlength' => 0, 'type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					 <br />
					
					<div class="form-actions">
						<?php echo $this->Form->button('Save', 
array('type' => 'submit', 'name' => 'btn', 'class' => 'btn btn-primary')); ?>

						<?php echo $this->Form->button('Cancel', 
array('type' => 'button', 'name' => 'btn', 'class' => 'btn', 'onclick' => "location.href='".Router::url('/', true)."'")); ?>

					</div> <!-- /form-actions -->
				</fieldset>
			<?php echo $this->Form->end(); ?>
					</div> <!-- /widget-content -->						
				</div> <!-- /widget --> 
</div>				
<script>
$(function() {
	$("#SignRDate").datepicker({
	 	changeMonth: true,
		changeYear: true,
		dateFormat: "mm/dd/yy" 
	}).val();
});	
</script>	