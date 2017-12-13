<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url() ?>">콜마스터 API
</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url() ?>">메뉴   <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="<?php echo site_url() ?>/auth/">사용자관리</a></li>
        <li class="active"><a href="<?php echo site_url() ?>/auth/create_user">사용자등록</a></li>
        <li class="active"><a href="<?php echo site_url() ?>/auth/create_group">그룹등록</a></li>
        <li class="active"><a href="<?php echo site_url() ?>/auth/change_password">비밀번호 변경</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php echo site_url() ?>/auth/"><?php echo $usersx ?></a></li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url() ?>/auth/">사용자 관리</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url() ?>/auth/logout">로그아웃</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">