@extends('layout.master')
@section('title', 'User Signin')
@section('content')
    <h3 class="col-md-12 col-md-push-2">User Login</h3>
    <p class="col-md-12 col-md-push-2" style="margin-bottom: 30px;">user will be Login with valid email address and password</p>
    <hr>
    <form class="form-horizontal" action="/action_page.php">

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
@endsection