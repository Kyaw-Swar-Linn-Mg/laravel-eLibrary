@extends('layout/template')

@section('title') Welcome | E - Library @stop


@section('body')

    <div class="container">
        <div class="row">
            @include('include/side_bar')

            <div class="col-md-4 col-sm-offset-2">
                @if(Session('err')) <div class="alert alert-danger">{{Session('err')}}</div> @endif
                <h3 class="text-center text-primary">User Login Form</h3>
                <div class="panel panel-primary">
                    <div class="panel-body">


                        <form method="post" action="{{route('post_login')}}">
                            <div class="form-group @if($errors->has('name')) has-error @endif">
                                @if($errors->has('name'))<span class="help-block">{{$errors->first('name')}}</span> @endif
                                <label for="name" class="control-label">Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group @if($errors->has('password')) has-error @endif">
                                @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span> @endif
                                <label for="password" class="control-label">Password :</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary ">Login</button>
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