@extends('layouts.default')

@section('contenido')

<section class="layout">
    <!-- <div class="header">1</div> -->
    <div class="leftSide">
        <aside class="sidebar">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- C# MENU -->
                        <a class="nav-link collapsed exc" href="#" data-id="1" aria-expanded="false" aria-controls="collapseLearnCSHARP">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/c-sharp-c.svg')}}" alt="Visual Studio 2022"><!-- <span class="text-white"> C#</span> --></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <!-- <div class="collapse" id="collapseLearnCSHARP" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#cs_op1">¿Qué es C#?</a>
                                <a class="nav-link" href="#cs_op2">Instalación de Visual Studio IDE</a>
                                <a class="nav-link" href="#cs_op3">Aspectos Básicos de Visual Studio</a>
                                <a class="nav-link" href="#cs_op4">Manejo de Windows Forms .NET</a>
                                <a class="nav-link" href="#cs_op5">Tipos de datos y Variables</a>
                                <a class="nav-link" href="#cs_op6">Condicionales y Ciclos</a>
                                <a class="nav-link" href="#cs_op7">Arrays y Matrices</a>
                                <a class="nav-link" href="#cs_op8">Programación Orientada a Objetos (POO)</a>
                                <a class="nav-link" href="#cs_op9">Gráficos con C#</a>
                                <a class="nav-link" href="#cs_op10">SQL Server</a>
                                <a class="nav-link" href="#cs_op11">C# y SQL Server</a>
                                <a class="nav-link" href="#cs_op12">CRUD con C# y SQL Server</a>
                            </nav>
                        </div> -->
                        <!-- <a class="nav-link collapsed exc" href="#" data-id="2" aria-expanded="false" aria-controls="collapseLearnPYTHON" aria-disabled="true">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/python.svg')}}" alt="Visual Studio 2022"></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed exc" href="#" data-id="3" aria-expanded="false" aria-controls="collapseLearnPYTHON">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/java.svg')}}" alt="Visual Studio 2022"></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed exc" href="#" data-id="4" aria-expanded="false" aria-controls="collapseLearnPYTHON">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/javascript.svg')}}" alt="Visual Studio 2022"></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed exc" href="#" data-id="5" aria-expanded="false" aria-controls="collapseLearnPYTHON">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/c-cpp.svg')}}" alt="Visual Studio 2022"></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed exc" href="#" data-id="6" aria-expanded="false" aria-controls="collapseLearnPYTHON">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/php.svg')}}" alt="Visual Studio 2022">
                                <div>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <a class="nav-link collapsed exc" href="#" data-id="7" aria-expanded="false" aria-controls="collapseLearnPYTHON">
                            <div class="d-flex justify-content-around sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/elixir.svg')}}" alt="Visual Studio 2022"></div>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a> -->
                    </div>
                </div>
            </nav>
        </aside>
    </div>
    <div class="body">
        <div class="data-content" id="#data-content">
            @include('includes.csharp')
        </div>
    </div>
    <div class="rightSide">
        <div class="adsense-section border border-5" style="display: inline-block; width: 100%;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672" crossorigin="anonymous"></script>
            <!-- publish-anouncement-5 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3903072283437672" data-ad-slot="1774356914" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="adsense-section border border-5" style="display: inline-block; width: 100%;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672" crossorigin="anonymous"></script>
            <!-- publish-anouncement-6 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3903072283437672" data-ad-slot="8947976215" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="adsense-section border border-5" style="display: inline-block; width: 100%;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672" crossorigin="anonymous"></script>
            <!-- publish-anouncement-7 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3903072283437672" data-ad-slot="5522030232" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="adsense-section border border-5" style="display: inline-block; width: 100%;">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672" crossorigin="anonymous"></script>
            <!-- publish-anouncement-8 -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3903072283437672" data-ad-slot="5108803551" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
    <div class="footer border border-5">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3903072283437672" crossorigin="anonymous"></script>
        <!-- publish-anouncement -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3903072283437672" data-ad-slot="1438480841" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</section>

<script>
    var id;
    $(document).ready(function() {
        $('.exc').on('click', function() {
            var idExc = $(this).data('id');
            //console.log(id)

            $.ajax({
                url: '/exc/' + idExc,
                type: 'GET',
                success: function(response) {
                    $('.data-content').html(response.data_content);
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
</script>

@endsection