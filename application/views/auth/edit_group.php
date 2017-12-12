<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1 class="text-center"><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name,' ','class="form-control"');?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description,' ','class="form-control"');?>
      </p>

      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'),'class="btn btn-primary btn-block"');?></p>

<?php echo form_close();?>
</div>
</div>