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
		<li><?php
		$title = $this->Html->tag('span', 'View Users');
		echo $this->Html->link( '<i class="icon-group"></i>'.$title, '/staffs/index', array('escape' => false));
		?>
		</li>
		<li class="active"><?php
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
	      				<h3>Enter User Information</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						<br/>
			<?php echo $this->Form->create('Staff', array('class' => 'form-horizontal')); ?>
				<fieldset>
					
					<div class="control-group">											
						<?php echo $this->Form->label('staffName', __('Name'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('staffName', array('value' => $staff['Staff']['staffName'], 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<div class="control-group">											
						<?php echo $this->Form->label('email', __('Email'), array('class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('email', array('value' => $staff['Staff']['email'], 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
					<?php $a = array('False' => 'True', 'True' => 'False'); ?>
					<div class="control-group">											
						<?php echo $this->Form->label('doNOTusename', __('Active'), array('class' => 'control-label')); ?>
						<div class="controls">
					<?php echo $this->Form->input('doNOTusename', array('value' => $staff['Staff']['doNOTusename'], 'label' => false, 'options' => $a)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					<br />
					
					<div class="form-actions">
					<?php echo $this->Form->input('staffID', array('type' => 'hidden', 'value' => $staff['Staff']['staffID'])); ?>
						<?php echo $this->Form->button('Save', 
array('type' => 'submit', 'name' => 'btn', 'class' => 'btn btn-primary')); ?>

						<?php echo $this->Form->button('Cancel', 
array('type' => 'button', 'name' => 'btn', 'class' => 'btn', 'onclick' => "location.href='".Router::url('/staffs/index', true)."'")); ?>

					</div> <!-- /form-actions -->
				</fieldset>
			<?php echo $this->Form->end(); ?>
					</div> <!-- /widget-content -->						
				</div> <!-- /widget --> 
</div>							