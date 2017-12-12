<div class="row">
<div class="col-md-4 col-md-offset-4">
<h1 class="text-center"><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p class="form-group">
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity,' ','class="form-control"');?>
  </p>

  <p class="form-group">
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password,' ','class="form-control"');?>
  </p>

  <p class="form-group">
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'),'class="btn btn-primary btn-block"');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
<p class="text-center"><a href="<?php echo site_url() ?>"><i class="fa fa-home"></i> Home Page</a></p>
</div>
</div>