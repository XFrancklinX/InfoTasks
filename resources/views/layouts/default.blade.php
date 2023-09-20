<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @include('includes.scripts')
</head>
<body>
    <header>
        @include('includes.nav')
    </header>
    
    <main id="main-content" class="page-container">
        @yield('contenido')
    </main>
</body>
    
</html>