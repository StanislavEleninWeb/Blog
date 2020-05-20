<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.') }}">Dashboard</a>
                </li>
<!--
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
-->
                @can('viewAny', App\Post::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.post.index') }}">Posts</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Posts</a>
                </li>
                @endcan
                
                @can('viewAny', App\Poll::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.poll.index') }}">Polls</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Polls</a>
                </li>
                @endcan
                
                @can('viewAny', App\Blacklist::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.post.index') }}">Blacklist</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Blacklist</a>
                </li>
                @endcan
                
                @can('viewAny', App\Category::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.category.index') }}">Categories</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Categories</a>
                </li>
                @endcan

                @can('viewAny', App\Role::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.role.index') }}">Roles</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Roles</a>
                </li>
                @endcan

                @can('viewAny', App\User::class)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.user.index') }}">Users</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Users</a>
                </li>
                @endcan
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div><!-- End navbarSupportedContent -->

    </div><!-- End container -->
</nav>