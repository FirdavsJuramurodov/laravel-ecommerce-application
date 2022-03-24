<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="{{url('/search-record') }}" method="POST" class="search-wrap">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="searcher" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" value="Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="selec-border">
                                <select class="custom-select" style="width:150px; height:33px;" name="cityChoice">
                                <option >Select a city</option>
                                <option value="Qashqadaryo">Qashqadaryo</option>
                                <option value="Samarqand">Samarqand</option>
                                <option value="Tashkent">Tashkent</option>
                                <option value="Andijon">Andijon</option>
                                </select>
                                </div>
                            </div>


                        </div>

                    </form>

                    <script>
                        
                    </script>
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">

                        @guest
                        
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->full_name }} <span class="caret"></span>
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
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('site.partials.nav')
</header>
