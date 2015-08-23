@extends('shared.master')

@section('content')
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="someone@example.com">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" id='login'>Sign In</button>
              <span class="pull-right"><a id='register'>Register</a></span><span><a id='help'>Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" id='cancel' aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
@stop