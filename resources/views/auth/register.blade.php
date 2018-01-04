@extends('layout/template')

@section('title') Register | E - Library @stop


@section('body')



    <div class="container">
        <div class="row">
            @include('include/side_bar')
            <div class="col-md-4 col-sm-offset-2">
                @if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif
                <h3 class="text-center text-primary">User Register Form</h3>
                <div class="panel panel-primary">
                    <div class="panel-body">


                    <form method="post" action="{{route('post_register')}}">
                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            @if($errors->has('name'))<span class="help-block">{{$errors->first('name')}}</span> @endif
                            <label for="name" class="control-label">Name :</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            @if($errors->has('email'))<span class="help-block">{{$errors->first('email')}}</span> @endif
                            <label for="email" class="control-label">Email :</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group @if($errors->has('password')) has-error @endif">
                            @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif
                            <label for="password" class="control-label">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group @if($errors->has('confirm_password')) has-error @endif">
                            @if($errors->has('confirm_password'))<span class="help-block">{{$errors->first('confirm_password')}}</span> @endif
                            <label for="confirm_password" class="control-label">Confirm_Password :</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-lg btn-primary">Sign Up</button>
                        </div>
                        {{csrf_field()}}
                    </form>
                    </div>

                </div>
            </div>
        </div>
        @include('include/footer')
    </div>


    @stop