<div class="col-md-4 col-md-offset-4">
  <div class="panel panel-default">
    <div class="panel-body">
    <legend>Sign In</legend>
      <form class="form" role="form" id="frmSignIn">
        <div class="form-group">
          <label for="username" class="sr-only">Username</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input type="text" name="username" class="form-control" id="username"
              placeholder="Enter username">
          </div><!-- /.input-group username -->
        </div><!-- /.form-group username -->
        <div class="form-group">
          <label for="password" class="sr-only">Password</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
            <input type="password" name="password" class="form-control" id="password"
              placeholder="Password">
          </div><!-- /.input-group password -->
        </div><!-- /.form-group -->
        <p class="text-center label-danger error" id="loginfailed">Login Failed</p>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="frmSignInSubmitBtn">
          <i class="fa fa-sign-in" id="frmSignInLoading"></i> 
          Sign In
        </button>

      </form><!-- form login -->
    </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div><!-- /.column -->


