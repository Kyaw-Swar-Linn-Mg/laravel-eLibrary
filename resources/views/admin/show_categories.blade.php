@extends('layout/template')

@section('title')
    New Category | E-Library
@stop

@section('body')
    <div class="container">
        <div class="row">
    @include('include/admin_side_bar')

           <div class="col-sm-4 col-sm-offset-2">
               <div class="panel panel-primary">
                   <div class="panel-heading">Categories</div>
                   <div class="panel-body">
                       <table class="table table-hover">
                           @foreach($cats as $cat)
                               <tr>
                                   <td><span class="glyphicon glyphicon-apple"></span> {{$cat->cat_name}}</td>

                               </tr>
                           @endforeach
                       </table>

                   </div>
               </div>
           </div>

        </div>
    </div>
    @include('include/footer')

    @stop