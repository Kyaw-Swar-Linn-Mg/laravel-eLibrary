@extends('layout/template')

@section('title')
    New Book | E-Library
@stop

@section('body')
    <div class="container">
        <div class="row">
            @include('include/admin_side_bar')


            <div class="col-md-4 col-sm-offset-2">
                <h3 class="text-center text-primary">New Book</h3>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form method="post" action="{{route('new_book')}}" enctype="multipart/form-data">
                            <div class="form-group @if($errors->has('title')) has-error @endif">
                                @if($errors->has('title')) <span class="help-block">{{$errors->first('title')}}</span> @endif
                                <label for="title" class="control-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group @if($errors->has('author')) has-error @endif">
                                @if($errors->has('author')) <span class="help-block">{{$errors->first('author')}}</span> @endif
                                <label for="author" class="control-label">Author</label>
                                <input type="text" name="author" class="form-control">
                            </div>
                            <div class="form-group @if($errors->has('category')) has-error @endif">
                                @if($errors->has('category')) <span class="help-block">{{$errors->first('category')}}</span> @endif
                                <label for="category" class="control-label">Category</label>
                                <select name="category" class="form-control">
                                    <option value="">--Select Category--</option>
                                     @foreach($cat as $cats)
                                         <option value="{{$cats->id}}">{{$cats->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group @if($errors->has('cover_img')) has-error @endif">
                                @if($errors->has('cover_img')) <span class="help-block">{{$errors->first('cover_img')}}</span> @endif
                                <label for="img" class="control-label">Cover Image</label>
                                <input type="file" name="cover_img" class="form-control" style="height: auto">
                            </div>
                            <div class="form-group @if($errors->has('book_file')) has-error @endif">
                                @if($errors->has('book_file')) <span class="help-block">{{$errors->first('book_file')}}</span> @endif
                                <label for="book_file" class="control-label">Book PDF</label>
                                <input type="file" name="book_file" class="form-control" style="height: auto">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Save</button>
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