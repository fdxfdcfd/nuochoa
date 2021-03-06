@extends('templates.master')

@section('title', 'Login')

@section('content')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo url('/signin');?>" method="post">
							<input name='username' type="text" placeholder="User Name" />
							<input name="password"type="password" placeholder="Password" />
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo url('/signup');?>" method="post">
							<input name='username' type="text" placeholder="Name"/>
							<input name='email' type="email" placeholder="Email Address"/>
							<input name='password' type="password" placeholder="Password"/>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@stop