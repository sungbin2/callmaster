<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1 class="text-center"><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password,' ','class="form-control"');?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm,' ','class="form-control"');?>
	</p>

	<?php echo form_input($user_id,' ','class="form-control"');?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'),'class="btn btn-primary btn-block"');?></p>

<?php echo form_close();?>
</div>
</div>