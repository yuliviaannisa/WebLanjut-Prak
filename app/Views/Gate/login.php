<?php echo $this->extend('layout/index'); ?>
<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <form action="Login/fungsi_login" method="post">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="username" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
    <small id="usernameHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Checklist this box</label>
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>
  <br><a href="Login/register">Register</a>
</form>
        </div>
    </div>
</div> 
<?php echo $this->endSection(); ?>