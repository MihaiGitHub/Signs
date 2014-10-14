<ul class="mainnav">
        <li class="active"><?php
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
          <div class="widget">
            <div class="widget-header"> <i class="icon-calendar"></i>
              <h3>Date Report</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
             <?php echo $this->Form->create('Sign', array('action' => 'datereport', 'class' => 'form-horizontal')); ?>
				<fieldset>						
                    <br/>            
                    <div class="control-group">											
						<?php echo $this->Form->label('startDate', __('Start Date'), array('style' => 'padding-right:5px;width:155px;', 'class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('startDate', array('id' => 'startDate', 'type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
                       
					<div class="control-group">											
						<?php echo $this->Form->label('endDate', __('End Date'), array('style' => 'padding-right:5px;width:155px;', 'class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('endDate', array('id' => 'endDate', 'type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
					
                    <div class="form-actions">
						<?php echo $this->Form->button('Submit', 
							array('type' => 'submit', 'name' => 'btn', 'value' => 'date', 'class' => 'btn btn-primary')); ?>
					</div> <!-- /form-actions -->
				</fieldset>
			<?php echo $this->Form->end(); ?>
            </div>
            <!-- /widget-content --> 
          </div>
		</div>
		
		<div class="widget widget-nopad">
          <div class="widget">
            <div class="widget-header"> <i class="icon-hand-right"></i>
              <h3>Impounded Signs Report</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <?php echo $this->Form->create('Sign', array('action' => 'impoundreport', 'class' => 'form-horizontal')); ?>
				<fieldset>							
                <br/>                                        
                <div class="form-actions">
					<?php echo $this->Form->button('Submit', 
							array('type' => 'submit', 'name' => 'btn', 'value' => 'impounded', 'class' => 'btn btn-primary')); ?>
				</div> <!-- /form-actions -->
				</fieldset>
			<?php echo $this->Form->end(); ?>
            </div>
            <!-- /widget-content --> 
          </div>
		</div>
		
		<div class="widget widget-nopad">
          <div class="widget">
            <div class="widget-header"> <i class="icon-search"></i>
              <h3>Street Name Search</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <?php echo $this->Form->create('Sign', array('action' => 'addressreport', 'class' => 'form-horizontal')); ?>

			<fieldset>
			<br/>            
            <div class="control-group">											
				<?php echo $this->Form->label('stName', __('Enter street name only'), array('style' => 'padding-right:5px;width:155px;', 'class' => 'control-label')); ?>
				<div class="controls">
					<?php echo $this->Form->input('stName', array('type' => 'text', 'label' => false)); ?>
				</div> <!-- /controls -->				
			</div> <!-- /control-group -->
                                            
            <div class="form-actions">
			<?php echo $this->Form->button('Submit', 
							array('type' => 'submit', 'name' => 'btn', 'value' => 'streetname', 'class' => 'btn btn-primary')); ?>

			</div> <!-- /form-actions -->
			</fieldset>
			<?php echo $this->Form->end(); ?>
            </div>
            <!-- /widget-content --> 
          </div>
		</div>
<script>
$(function() {
	$("#startDate").datepicker({
	 	changeMonth: true,
		changeYear: true,
		dateFormat: "mm/dd/yy" 
	}).val();
	
	$("#endDate").datepicker({
	 	changeMonth: true,
		changeYear: true,
		dateFormat: "mm/dd/yy" 
	}).val();
});	
</script>	 