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
            <div class="widget-header"> <i class="icon-search"></i>
              <h3>Search and edit by individual</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
             <?php echo $this->Form->create('Sign', array('action' => 'individual', 'class' => 'form-horizontal')); ?>

										<fieldset>
											
                                <br/>            
                    <div class="control-group">											
						<?php echo $this->Form->label('contact', __('Select list to search for'), array('style' => 'padding-right:5px;width:155px;', 'class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('contact', array('type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
                                            
                    <div class="form-actions">
											<?php echo $this->Form->button('Submit', 
							array('type' => 'submit', 'name' => 'individual', 'class' => 'btn btn-primary')); ?>

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
              <h3>Search and edit by date</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
             <?php echo $this->Form->create('Sign', array('action' => 'sdate', 'class' => 'form-horizontal')); ?>

										<fieldset>
										<br/>	
                                            
                    <div class="control-group">											
						<?php echo $this->Form->label('RDate', __('Enter date (mm/dd/yyyy)'), array('style' => 'padding-right:5px;width:155px;', 'class' => 'control-label')); ?>
						<div class="controls">
					        <?php echo $this->Form->input('RDate', array('maxlength' => 0, 'type' => 'text', 'label' => false)); ?>
						</div> <!-- /controls -->				
					</div> <!-- /control-group -->
                                            
                    <div class="form-actions">
											<?php echo $this->Form->button('Submit', 
							array('type' => 'submit', 'name' => 'date', 'class' => 'btn btn-primary')); ?>

										</div> <!-- /form-actions -->
										</fieldset>
									<?php echo $this->Form->end(); ?>
            </div>
            <!-- /widget-content --> 
          </div>
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