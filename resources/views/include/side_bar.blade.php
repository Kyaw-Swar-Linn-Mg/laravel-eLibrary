
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-list">
                            </span>Categories</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">

                                @foreach($cat as $cats)
                                    <tr>
                                        <td><a href="{{route('get_by_category',['cat_id'=>$cats->id])}}">{{$cats->cat_name}}</a></td>
                                    </tr>

                                    @endforeach

                            </table>
                        </div>
                    </div>
                </div>

@if(!Auth::User())


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Users</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{route('register')}}"><span class="glyphicon glyphicon-registration-mark"></span> Register</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>

    @else

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                            </span>{{Auth::User()->name}}</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">

                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-log-out text-success"></span> <a href="{{route('logout')}}">Logout</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-dashboard text-success"></span><a href="{{route('dashboard')}}">Dashboard</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>

@endif
            </div>
        </div>


