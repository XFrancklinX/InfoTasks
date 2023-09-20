@extends('layouts.default')

@section('contenido')

<style>
    @media only screen and (max-width: 600px) {

        .main-content-learnprog {
            width: 100%;
            background-color: black;
        }

        .data-container-learnprog{
            width: 100%;
            margin: auto;
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

        .img {
            width: 90%;
            margin: auto;
            padding: 10px 0px;
        }
    }
</style>

<main class="main-content-learnprog px-3 py-3">
    @csrf
    <article class="card dropdown">
        <a href="#" class="link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Aprendizaje</a>
        <ul class="dropdown-menu">
            <!-- <li class="dropdown-item"><a href="#" id="java" name="java" data-opcion="java" class="option">Java</a></li> -->
            <li class="dropdown-item"><a href="#" id="csharp" name="csharp" data-opcion="csharp" class="option">Conociendo C#</a></li>
            <!-- <li class="dropdown-item"><a href="#" id="python" data-opcion="python" class="option">Python</a></li>
            <li class="dropdown-item"><a href="#" id="php" data-opcion="php" class="option">PHP</a></li>
            <li class="dropdown-item"><a href="#" id="javascript" data-opcion="javascript" class="option">JavaScript</a></li> -->
        </ul>
    </article>

    <section class="data-container-learnprog px-3 py-3">
        <div class="data-index card py-4">
            <article class="data-tittle py-3">
                <h1 class="text-center">Conociendo C#</h1>
            </article>
            <article class="data-list-options py-1">
                <ul>
                    <li class="dropdow-item py-1"><a href="#cs_op1">1. ¿Qué es C#?</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op2">2. Instalación de Visual Studio IDE</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op3">3. Aspectos Básicos de Visual Studio</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op4">4. Manejo de Windows Forms .NET</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op5">5. Tipos de datos y Variables</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op6">6. Condicionales y Ciclos</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op7">7. Arrays y Matrices</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op8">8. Programación Orientada a Objetos (POO)</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op9">9. Gráficos con C#</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op10">10. SQL Server</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op11">11. C# y SQL Server</a></li>
                    <li class="dropdow-item py-1"><a href="#cs_op12">12. CRUD con C# y SQL Server</a></li>
                </ul>
            </article>
        </div>

        <div class="data-details py-4">
            <article class="data-details-op py-2" id="cs_op1">
                <h2>1. ¿Qué es C#?</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op2">
                <h2>2. Instalación de Visual Studio IDE</h2>

                <ul class="list-style bg-white text-black">
                    <p>
                        Para instalar el IDE de Visual Studio <strong>2022</strong>, se deben seguir los siguientes pasos: <br>
                    </p>

                    <li class="py-2">
                        1. Requisitos, para instalar Visual Studio 2022 debes de cumplir los siguientes requisitos:
                        <ul>
                            <li>Procesador de 64bits (x64) o ARM64</li>
                            <li>RAM de 4GB mínimo - 16GB recomendado</li>
                            <li>Espacio en Disco de 10GB mínimo</li>
                            <li>Windows 10 o Superior</li>
                        </ul>
                    </li>
                    <li class="py-2">
                        2. Descargar Visual Studio 2022
                        <ul class="list-unstyled">
                            <li>
                                Ve a la página oficial de Visual Studio: <a href="https://visualstudio.microsoft.com/es/">Click aquí <img class="imgicon" src="{{asset('images/icons/Visual_Studio_Icon_2022.png')}}" alt="Visual Studio 2022" style="width: 30px; height: 30px;"></a>
                            </li>
                            <li>
                                Vaya a la siguiente vista y de click en "Descargar"
                                <br>
                                <img class="img" src="{{asset('images/VS2022_download.jpg')}}" alt="Visual Studio 2022">
                                <br>
                            </li>
                        </ul>
                    </li>
                    <li class="py-2">
                        3. Seleccionar la Edición de Visual Studio 2022
                        <p>
                            <img class="img" src="{{asset('images/VS2022_edition.jpg')}}" alt="Visual Studio 2022">
                            <br><br>
                            - Visual Studio 2022 Community, es una edición gratuita y completa de Visual Studio que se utiliza para proyectos de código abierto, proyectos académicos, proyectos de investigación y pequeñas empresas. Incluye todas las características esenciales de Visual Studio, como depuración, pruebas, control de código fuente y herramientas de colaboración.
                            <br><br>
                            - Visual Studio 2022 Professional, es una edición de pago que se utiliza para proyectos de mediana y gran escala. Incluye todas las características de la edición Community, además de herramientas adicionales para desarrolladores de aplicaciones empresariales, como herramientas de análisis de código, herramientas de arquitectura y herramientas de automatización de pruebas.
                            <br><br>
                            - Visual Studio 2022 Enterprise, es la edición más completa de Visual Studio y se utiliza para proyectos empresariales de gran envergadura. Incluye todas las características de la edición Professional, además de herramientas adicionales para desarrolladores de aplicaciones empresariales, como herramientas de análisis de datos, herramientas de administración de proyectos y herramientas de desarrollo de aplicaciones móviles.
                            <br><br>
                            En resumen, la edición Community es adecuada para proyectos pequeños y medianos, mientras que la edición Professional y Enterprise son más adecuadas para proyectos empresariales de gran envergadura.
                        </p>
                    </li>
                    <li class="py-2">
                        4. Ejecutar el instalador
                        <p>
                            <br>
                            Después de descargar el instalador, ejecuta el archivo descargado (por lo general, tiene un nombre como "vs_installer.exe" o "VisualStudioSetup.exe").
                        </p>
                    </li>
                    <li class="py-2">
                        5. Personalizar la instalación (Escritorio)
                        <p>
                            <br>
                            El instalador de Visual Studio te permitirá personalizar la instalación. Puedes seleccionar los componentes y cargas de trabajo que deseas instalar. Las cargas de trabajo incluyen configuraciones predefinidas para diferentes tipos de desarrollo, como desarrollo web, desarrollo móvil, desarrollo de escritorio, etc.
                            <br>
                            <img class="img" src="{{asset('images/VS2022_install1.jpg')}}" alt="Visual Studio 2022">
                            <br>
                            En esta ocación marcaremos "<img class="img1" src="{{asset('images/icons/check2.svg')}}" alt="Check" style="width: 25px; height: 25px;">" la casilla de <strong>"Desarrollo de escritorio de .NET"</strong> 
                            <br>
                            <img class="img" src="{{asset('images/VS2022_install2.jpg')}}" alt="Check">
                            <br>
                            También puedes elegir características individuales y componentes opcionales según tus necesidades (Opcional).
                            <br>
                            <img class="img" src="{{asset('images/VS2022_config.jpg')}}" alt="Visual Studio 2022">
                        </p>
                    </li>
                    <li class="py-2">
                        6. Descarga e instalación
                        <p>
                            <br>
                            Click en <strong>"Instalar durante la descarga"</strong>
                            <img class="img" src="{{asset('images/VS2022_install3.jpg')}}" alt="Visual Studio 2022">
                            <br>
                            El instalador descargará los archivos necesarios para la instalación. Una vez que se complete la descarga, el instalador comenzará a instalar Visual Studio en tu sistema. Esto puede llevar algún tiempo, ya que depende de la velocidad de tu conexión a Internet y de la potencia de tu computadora.
                        </p>
                    </li>
                    <li class="py-2">
                        7. Iniciar Visual Studio 2022

                        <p>
                            <br>
                            Una vez terminada la instalación Visual Studio se abrirá automaticamente en la cual veremos la siguiente ventana.

                            <img class="img" src="{{asset('images/VS2022_in1.jpg')}}" alt="Visual Studio 2022">

                            Puedes iniciar sesión mediante una cuenta Microsoft si es que cuentas con una o también puedes <strong>"Omitir"</strong> este paso.

                            <img class="img" src="{{asset('images/VS2022_in2.jpg')}}" alt="Visual Studio 2022">

                            Luego verás la siguiente ventana en la cuál podrás escoger el modo de vista del entorno de Visual Studio ya sea <strong>"Modo Claro" o "Modo Oscuro"</strong>. Se recomienda mantenerlo por defecto en <strong>"Modo Oscuro".</strong>
                            <br><br>
                            Finalmente ingresara al entorno de desarrollo mostrandote esta ventana principal con la cual ya podrás crear y programar tus proyectos.

                            <img class="img" src="{{asset('images/VS2022_view1.jpg')}}" alt="Visual Studio 2022">
                        </p>
                    </li>
                </ul>


                </p>
            </article>
            <article class="data-details-op py-2" id="cs_op3">
                <h2>3. Aspectos Básicos de Visual Studio</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op4">
                <h2>4. Manejo de Windows Forms .NET</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op5">
                <h2>5. Tipos de datos y Variables</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op6">
                <h2>6. Condicionales y Ciclos</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op7">
                <h2>7. Arrays y Matrices</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op8">
                <h2>8. Programación Orientada a Objetos (POO)</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op9">
                <h2>9. Gráficos con C#</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op10">
                <h2>10. SQL Server</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op11">
                <h2>11. C# y SQL Server</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
            <article class="data-details-op py-2" id="cs_op12">
                <h2>12. CRUD con C# y SQL Server</h2>

                <textarea class="area-detail-op form-control" name="detail_op1" id="detail_op1" readonly>C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</textarea>
            </article>
        </div>
    </section>


</main>

<script>
    $(document).ready(function() {

        $('a').on('click', function(e) {
            if (this.hash !== '') {
                e.preventDefault();

                var target = this.hash;

                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);
            }
        });

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