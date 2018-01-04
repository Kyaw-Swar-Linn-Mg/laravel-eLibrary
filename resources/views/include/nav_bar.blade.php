<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('welcome')}}">E - Library</a>

        </div>


        <div>
        <!-- Collect the nav links, forms, and other content for toggling -->

            <form class="navbar-form navbar-right" method="get" action="{{'search'}}">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="q" id="q">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                {{csrf_field()}}
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>