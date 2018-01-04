@extends('layout/template')

@section('title')
    New Category | E-Library
    @stop

@section('body')
    <div class="container">
        <div class="row">
            @include('include/admin_side_bar')


            <div class="col-md-4 col-sm-offset-2">
                <h3 class="text-center text-primary">New Categories</h3>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form method="post" action="{{route('new_cat')}}">
                            <div class="form-group @if($errors->has('cat_name')) has-error @endif">
                                @if($errors->has('cat_name')) <span class="help-block">{{$errors->first('cat_name')}}</span> @endif
                                <label for="cat_name" class="control-label">New Categories</label>
                                <input type="text" name="cat_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
            @include('include/footer')

        </div>
    </div>

    @stop