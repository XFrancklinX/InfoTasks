@extends('layouts.default')

@section('contenido')
<style>
    @media only screen and (max-width: 600px) {

        .main-content-excprog {
            width: 100%;
            background-color: black;
        }

        article.card {
            width: 100%;
            justify-content: start;
        }

        article>.link {
            font-size: 1.3rem;
            text-decoration: none;
            color: black;
            font-weight: bolder;
        }

        .nav-link:focus,
        .nav-link:hover {
            /* color: var(--bs-nav-link-hover-color) */
            color: white;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.show {
            /* color: var(--bs-navbar-active-color) */
            color: white;
        }

        article>ul a {
            text-decoration: none;
            color: black;
            font-size: 1.1rem;
            font-weight: bolder;
        }

        article>ul {
            width: 100%;
        }

        section {
            width: 100%;
        }

        .data-details>textarea {
            width: 100%;
            height: auto;
            background-color: black;
            color: white;
            border: none;
        }

        .data-code {
            border-top: 3px solid white;
            border-bottom: 3px solid white;
            border-radius: 15px;
        }

        code>pre {
            font-size: 1.1rem;
            color: aqua;
            background-color: black;
            width: 100%;
            height: auto;
            /* white-space: nowrap; */
            border: none;
        }
    }
</style>

<main class="main-content-excprog px-3 py-3">
    @csrf
    <article class="card dropdown">
        <a href="#" class="link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ejercicios</a>
        <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#" id="java" name="java" data-opcion="java" class="option">Java</a></li>
            <li class="dropdown-item"><a href="#" id="csharp" name="csharp" data-opcion="csharp" class="option">C#</a></li>
            <li class="dropdown-item"><a href="#" id="python" data-opcion="python" class="option">Python</a></li>
            <li class="dropdown-item"><a href="#" id="php" data-opcion="php" class="option">PHP</a></li>
            <li class="dropdown-item"><a href="#" id="javascript" data-opcion="javascript" class="option">JavaScript</a></li>
        </ul>
    </article>

    <section class="data-container-excprog px-3 py-3">
        <!-- {!!$html!!} -->
    </section>


</main>

<script>
    $(document).ready(function() {

        autosize();

        var datos;
        $.ajaxSetup({
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

        $('#java').on('click', function() {
            containOp('java');
        });

        $('#csharp').on('click', function() {
            containOp('csharp');
        });

        function containOp(datos) {
            $.ajax({
                type: "POST",
                url: '{{ route("contain.option") }}',
                data: {
                    datos: datos,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    $('.data-container-excprog').html(response);
                    autosize();
                }
            });
        }
    });

    function autosize() {
        $("textarea").each(function() {
            this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
        }).on("input", function() {
            this.style.height = 0;
            this.style.height = (this.scrollHeight) + "px";
        });
    }
</script>

@endsection