@extends('admin.loglayout')
@section('content')
  <div class="container">
    <form class="login-form" action="{{ url('login') }}" method="post">
        {{ csrf_field() }}
      <div class="login-wrap">
          @if(Session::has('success'))
          <p class="alert alert-success" id="success" style="font-weight:bold;">{{ Session::get('success') }}</p>
          @endif

        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>

      
        
    </form>
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://softcode.com/">Softcode</a>
        </div>
    </div>
  </div>


@endsection

<script src=" https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
  $(document).ready(function(){
    $("#success").fadeOut(5000);
  });
  //alert('yes');
  </script>