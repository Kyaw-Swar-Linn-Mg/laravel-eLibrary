
<div class="col-sm-3 col-md-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-tree-conifer text-primary">
                            </span>Content</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-list text-primary"></span><a href="{{route('new_cat')}}">New Categories</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-list text-success"></span><a href="{{route('showCategories')}}">Show Categories</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-book text-info"></span><a href="{{route('new_book')}}">New Books</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="glyphicon glyphicon-book text-success"></span><a href="{{route('show_book')}}">Show Books</a>

                            </td>
                        </tr>
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
                                <a href="{{route('register')}}">Register</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="{{route('login')}}">Login</a>
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

                        </table>
                    </div>
                </div>
            </div>

        @endif

    </div>
</div>


