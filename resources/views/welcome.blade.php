@extends('layout/template')

@section('title') Welcome | E - Library @stop


@section('body')

    <div class="container">
        <div class="row">
            @include('include/side_bar')

            <div class="col-md-9">
                @foreach($book as $books)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{route('img',['cover_img'=>$books->cover_img])}}" class="img-rounded" width="100px" alt="...">
                            <div class="caption">
                                <h3>{{$books->title}}</h3>
                                <p>Author : {{$books->author}}</p>
                                <p><a href="{{route('book',['book_file'=>$books->book_file])}}" class="btn btn-primary btn-block" role="button">Read</a> </p>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
    <div class="text-center">{{$book->links()}}</div>

    @include('include/footer')

    @stop