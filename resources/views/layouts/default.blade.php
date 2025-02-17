<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

    <!-- CONTAINER -->
    <div class="container">

        <!-- HEADER -->
        <header class="header">
            <!-- Start -->
            <div class="row gutters">
                <div class="col-lg-4 col-sm-6 col-6">
                    <a href="{{ route('welcome') }}" class="logo">InfoChamba<span class="beta">Beta</span><a
                            href="{{ route('jamon') }}" class="text-decoration-none border-2"
                            style="opacity: 0;">......</a></a>
                </div>
                <div class="col-lg-8 col-sm-6 col-6"></div>
            </div>
            <!-- End -->
        </header>

        <!-- NAV -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuburguer"
                aria-controls="menuburguer" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </button>

            {{-- @yield('menu-nav') --}}
        </nav>

        <div id="modal-content">
            <div class="col-12 error" id="error">
                @if ($errors->any())
                    <div class="col-12 card alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <!-- MAIN CONTAINER -->
        <div class="main-container">
            @yield('content')
        </div>
    </div>

    </div>
    @include('includes.scripts')
</body>

</html>
