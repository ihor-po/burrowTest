<?php /* SVN: $Id: $ */ ?>
<ul class="breadcrumb top-mspace ver-space">
  <li><?php echo $this->Html->link( __l('Property Types'), array('controller'=>'property_types','action'=>'index', 'admin' => 'true'), array('escape' => false));?><span class="divider">/</span></li>
  <li class="active"><?php echo __l('Add Property Type'); ?></li>
</ul>
<div class="propertyTypes form sep-top">
<?php echo $this->Form->create('PropertyType', array('class' => 'form-horizontal space'));?>
	<fieldset>
<div class="padd-center clearfix">
<?php
		echo $this->Form->input('name', array('label' => __l('Name')));
		echo $this->Form->input('is_active', array('label' => __l('Enable'),'type'=>'checkbox'));
	?>
	</fieldset>
	<div class="form-actions">
      	<?php echo $this->Form->submit(__l('Add'), array('class' => 'btn btn-large btn-primary textb text-16')); ?>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
