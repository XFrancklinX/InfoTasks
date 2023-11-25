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
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLearnCSHARP" aria-expanded="false" aria-controls="collapseLearnCSHARP">
                            <div class="sb-nav-link-icon text-center fs-4"><img class="img" src="{{asset('images/icons/Visual_Studio_Icon_2022.png')}}" alt="Visual Studio 2022"><span class="text-white"> C#</span></div>
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
                    </div>
                </div>
            </nav>
        </aside>
    </div>
    <div class="body">
        <div class="data-index card py-4">
            <article class="data-tittle py-3">
                <h1 class="text-center">C#</h1>
            </article>
            <article class="data-list-options py-1">
                <ul class="list-unstyled px-3">
                    <li class="dropdow-item py-1">
                        <a href="#cs_op1">1. ¿Qué es C#?</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="1"><span class="info1"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain" id="1" data-id="1">
                            <p class="px-4">C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op2">2. Instalación de Visual Studio IDE</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="2"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain" id="2" data-id="2">
                            <ul class="list-unstyled bg-white text-black px-4">
                                <p>
                                    Para instalar el IDE de Visual Studio <strong>2022</strong>, se deben seguir los siguientes pasos: <br>
                                </p>

                                <li class="py-2">
                                    <strong>1. Requisitos</strong>, para instalar Visual Studio 2022 debes de cumplir los siguientes requisitos:
                                    <ul>
                                        <li>Procesador de 64bits (x64) o ARM64</li>
                                        <li>RAM de 4GB mínimo - 16GB recomendado</li>
                                        <li>Espacio en Disco de 10GB mínimo</li>
                                        <li>Windows 10 o Superior</li>
                                    </ul>
                                </li>
                                <li class="py-2">
                                    <strong>2. Descargar Visual Studio 2022</strong>
                                    <ul class="list-unstyled">
                                        <li>
                                            Ve a la página oficial de Visual Studio: <a href="https://visualstudio.microsoft.com/es/">Click aquí <img class="imgicon" src="{{asset('images/icons/Visual_Studio_Icon_2022.png')}}" alt="Visual Studio 2022" style="width: 1.875rem; height: 1.875rem;"></a>
                                        </li>
                                        <li>
                                            Vaya a la siguiente vista y de click en "Descargar"
                                            <br>
                                            <center>
                                                <img class="img" src="{{asset('images/VS2022_download.jpg')}}" alt="Visual Studio 2022">
                                                <br>
                                            </center>
                                        </li>
                                    </ul>
                                </li>
                                <li class="py-2">
                                    <b>3. Seleccionar la Edición de Visual Studio 2022</b>
                                    <p>
                                        <center><img class="img" src="{{asset('images/VS2022_edition.jpg')}}" alt="Visual Studio 2022"></center>
                                        <br><br>
                                    <ul>
                                        <li><strong>Visual Studio 2022 Community</strong>, es una edición gratuita y completa de Visual Studio que se utiliza para proyectos de código abierto, proyectos académicos, proyectos de investigación y pequeñas empresas.</li>
                                        <li><strong>Visual Studio 2022 Professional</strong>, es una edición de pago que se utiliza para proyectos de mediana y gran escala.</li>
                                        <li><strong>Visual Studio 2022 Enterprise</strong>, es la edición más completa de Visual Studio y se utiliza para proyectos empresariales de gran envergadura.</li>
                                    </ul>
                                    <br>
                                    En resumen, la edición Community es adecuada para proyectos pequeños y medianos, mientras que la edición Professional y Enterprise son más adecuadas para proyectos empresariales de gran envergadura.
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>4. Ejecutar el instalador</strong>
                                    <p>
                                        Después de descargar el instalador, ejecuta el archivo descargado (por lo general, tiene un nombre como "vs_installer.exe" o "VisualStudioSetup.exe").
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>5. Personalizar la instalación (Escritorio)</strong>
                                    <p>
                                        <br>
                                        El instalador de Visual Studio te permitirá personalizar la instalación. Puedes seleccionar los componentes y cargas de trabajo que deseas instalar. Las cargas de trabajo incluyen configuraciones predefinidas para diferentes tipos de desarrollo, como desarrollo web, desarrollo móvil, desarrollo de escritorio, etc.
                                        <br>
                                        <center><img class="img" src="{{asset('images/VS2022_install1.jpg')}}" alt="Visual Studio 2022" width="80%"></center>
                                        <br>
                                        En esta ocación marcaremos "<img class="img1" src="{{asset('images/icons/check2.svg')}}" alt="Check" style="width: 1.5625rem; height: 1.5625rem;">" la casilla de <strong>"Desarrollo de escritorio de .NET"</strong>
                                        <br>
                                        <center><img class="img" src="{{asset('images/VS2022_install2.jpg')}}" alt="Check" width="80%"></center>
                                        <br>
                                        También puedes elegir características individuales y componentes opcionales según tus necesidades (Opcional).
                                        <br>
                                        <center><img class="img" src="{{asset('images/VS2022_config.jpg')}}" alt="Visual Studio 2022"></center>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>6. Descarga e instalación</strong>
                                    <p>
                                        <br>
                                        Click en <strong>"Instalar durante la descarga"</strong>
                                        <center><img class="img" src="{{asset('images/VS2022_install3.jpg')}}" alt="Visual Studio 2022"></center>
                                        <br>
                                        El instalador descargará los archivos necesarios para la instalación. Una vez que se complete la descarga, el instalador comenzará a instalar Visual Studio en tu sistema. Esto puede llevar algún tiempo, ya que depende de la velocidad de tu conexión a Internet y de la potencia de tu computadora.
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong> 7. Iniciar Visual Studio 2022</strong>
                                    <p>
                                        <br>
                                        Una vez terminada la instalación Visual Studio se abrirá automaticamente en la cual veremos la siguiente ventana.

                                        <center><img class="img" src="{{asset('images/VS2022_in1.jpg')}}" alt="Visual Studio 2022" width="80%"></center>

                                    <p>
                                        Puedes iniciar sesión mediante una cuenta Microsoft si es que cuentas con una o también puedes <strong>"Omitir"</strong> este paso.
                                    </p>

                                    <center><img class="img" src="{{asset('images/VS2022_in2.jpg')}}" alt="Visual Studio 2022" width="80%"></center>

                                    <p>
                                        Luego verás la siguiente ventana en la cuál podrás escoger el modo de vista del entorno de Visual Studio ya sea <strong>"Modo Claro" o "Modo Oscuro"</strong>. Se recomienda mantenerlo por defecto en <strong>"Modo Oscuro".</strong>

                                        Finalmente ingresara al entorno de desarrollo mostrandote esta ventana principal con la cual ya podrás crear y programar tus proyectos.
                                    </p>

                                    <center><img class="img" src="{{asset('images/VS2022_view1.jpg')}}" alt="Visual Studio 2022" width="80%"></center>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op3">3. Aspectos Básicos de Visual Studio</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="3"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="3" data-id="3">
                            <p>
                                Visual Studio es una potente herramienta de desarrollo que te permitirá crear aplicaciones de manera eficiente. A continuación, algunos aspectos clave:

                            <ul class="list-unstyled">
                                <li class="py-2">
                                    Creación de Proyectos
                                    <p>
                                        Abre Visual Studio y crea un nuevo proyecto. Puedes seleccionar "Aplicación de Windows Forms (.NET Framework)" y click en <strong>Siguiente</strong> para crear una aplicación de escritorio.

                                        <!-- ADICIONAR IMAGEN 1 DE CREACION -->

                                        El paso siguiente es la configuración:

                                        <!-- ADICIONAR IMAGEN 2 DE CREACION -->

                                    <ul class="list-styled">
                                        <li class="py-1">
                                            <strong>Nombre del Proyecto</strong>, puede darle el nombre que desees permite letras, números, guión "-" y guión bajo "_", los demas simbolos no estan permitidos.
                                        </li>
                                        <li class="py-1">
                                            <strong>Ubicación</strong>, puedes dejar la ruta por defecto o escoger la ruta de una unidad USB o alguna unidad extraible que tengas donde quieras guardar el proyecto.
                                        </li>
                                        <li class="py-1">
                                            <strong>Solución</strong>, permite crear el proyecto como nuevo con la opción de <strong>Crear Nueva Solución</strong> o puedes adicionarlo a tu proyecto actual con la opción de <strong>Agregar a Solución</strong>
                                        </li>
                                        <li class="py-1">
                                            <strong>Nombre de la solución</strong>, es un contenedor de uno o mas proyectos en Visual Studio. Puedes cambiar el nombre si lo deseas (Opcional) o dejarlo por defecto.

                                            Por recomendación dejalo por defecto si eres nuevo.
                                        </li>
                                        <li class="py-1">
                                            <strong>Marco</strong>, estos marcos de trabajo se emplean para ahorrar tiempo y esfuerzo en el desarrollo de aplicaciones, ya que proporcionan una estructura básica que se puede utilizar como punto de partida.

                                            Se recomienda trabajar desde el <strong>Marco .NET Framework 4.5</strong> adelante para no tener problemas.
                                        </li>
                                        <li class="py-1">
                                            Finalmente debajo del Marco de trabajo mostrará la ruta completa donde se guardará el proyecto configurado.
                                        </li>
                                    </ul>

                                    Si eres nuevo puedes mantener todo por defecto si lo deseas y darle click al boton de <strong>Crear</strong>. Una vez hecho esto aparecera la interfaz principal.

                                    <!-- ADICIONAR IMAGEN PRINCIPAL -->
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Exploración de Interfaz de Usuario</strong>

                                    <p>
                                        Visual Studio tiene una interfaz de usuario con muchas ventanas y paneles. Algunos de los más importantes incluyen el <strong>Explorador de Soluciones, el Cuadro de herramientas, el Editor de Código, y la Ventana de Propiedades.</strong>

                                        <!-- AGREGAR IMAGEN COMPLETA -->
                                    </p>
                                </li>
                                <li class="py-2">
                                    Edición de Código

                                    <p>
                                        Visual Studio proporciona un editor de código enriquecido con resaltado de sintaxis, corrección automática y muchas otras características útiles.
                                    </p>
                                </li>
                                <li class="py-2">
                                    Depuración

                                    <p>
                                        Una de las características más poderosas es el depurador, que te permite encontrar y corregir errores en tu código paso a paso.
                                    </p>
                                </li>
                                <li class="py-2">
                                    Gestión de Proyectos

                                    <p>
                                        Puedes organizar tus archivos y recursos en soluciones y proyectos para una gestión eficiente.
                                    </p>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op4">4. Manejo de Windows Forms .NET</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="4"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="4" data-id="4">
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <strong>Formularios</strong>

                                    <p>
                                        En Windows Forms, los formularios son ventanas que contienen controles. Puedes crear formularios desde el <strong>Explorador de soluciones</strong> o la pestaña <strong>Proyecto</strong>.

                                        <!-- AGREGAR IMAGEN -->
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Controles</strong>

                                    <p>
                                        Los controles son objetos visuales como botones, etiquetas, cajas de texto, etc. Puedes personalizar sus propiedades y manejar eventos, como clics o cambios de texto.

                                        <!-- AGREGAR IMAGEN CUADRO DE HERRAMIENTAS-->
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Eventos</strong>

                                    <p>
                                        Los eventos son acciones que desencadenan respuestas en tu aplicación. Por ejemplo, puedes responder a un clic de botón para realizar una acción específica.

                                        <!-- AGREGAR IMAGEN PROPIEDADES => ICONO RAYO EVENTOS-->
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Propiedades</strong>

                                    <p>
                                        Cada control tiene propiedades que puedes ajustar, como su posición, tamaño, texto, color y más.

                                        <!-- AGREGAR IMAGEN PROPIEDADES-->
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Diseño de la Interfaz de Usuario</strong>

                                    <p>
                                        Visual Studio proporciona herramientas visuales para diseñar la interfaz de usuario de tu aplicación de manera intuitiva.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op5">5. Tipos de datos y Variables</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="5"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="5" data-id="5">
                            <p>
                                En C#, los tipos de datos y variables son fundamentales para almacenar y manipular información en programas. Aquí te detallo los tipos de datos más comunes en C# y cómo usar variables para almacenarlos:
                            </p>

                            <strong>Tipos de Datos Primitivos:</strong>
                            <ul class="list-styled">
                                <li class="py-2">
                                    <strong>Enteros</strong>
                                    <p>
                                        int: Representa números enteros.
                                        <br>Ejemplo: int edad = 25;
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Flotantes</strong>
                                    <p>
                                        float: Representa números de punto flotante de precisión simple.
                                        <br>Ejemplo: float altura = 1.75f;
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Dobles</strong>
                                    <p>
                                        double: Representa números de punto flotante de precisión doble.
                                        <br>Ejemplo: double pi = 3.14159265359;
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Caracteres</strong>
                                    <p>
                                        char: Representa un carácter Unicode.
                                        <br> Ejemplo: char letra = 'A';
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Cadenas</strong>
                                    <p>
                                        string: Representa una secuencia de caracteres.
                                        <br> Ejemplo: string nombre = "Juan";
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Boleanos</strong>
                                    <p>
                                        bool: Representa un valor booleano (verdadero o falso).
                                        <br>Ejemplo: bool esMayorDeEdad = true;
                                    </p>
                                </li>
                            </ul>

                            <strong>Variables:</strong>
                            <p>
                                Las variables se utilizan para almacenar datos y se definen con un tipo de dato específico. Puedes cambiar el valor de una variable después de su declaración. Ejemplo:
                                <br>
                                <!-- ADD IMAGE -->
                            </p>

                            <strong>Conversion de Variables:</strong>
                            <p>
                                A veces, necesitas convertir un tipo de dato a otro. Esto se hace mediante casting explícito o métodos de conversión. Ejemplo:
                                <br>
                                <!-- ADD IMAGE -->
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op6">6. Condicionales y Ciclos</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="6"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="6" data-id="6">
                            <p>
                                <strong>Condicionales (if, else, else if):</strong>
                                Las estructuras condicionales permiten que tu programa tome decisiones basadas en ciertas condiciones. Aquí están las estructuras condicionales más comunes en C#:

                            <ul class="list-styled">
                                <li class="py-2">
                                    <strong>if</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        En este ejemplo, el código dentro del bloque if se ejecutará solo si la condición (edad >= 18) es verdadera.
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>else</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        Si la condición en el if es falsa, el bloque de código dentro del else se ejecutará.
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>else if</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        Aquí, múltiples condiciones son evaluadas en orden. La primera condición verdadera activará su bloque de código asociado. Si ninguna condición es verdadera, se ejecutará el bloque de código en el else final.
                                    </p>
                                </li>

                                <li class="py-2">
                                    <strong>switch-case</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        La estructura switch-case es otra forma de controlar el flujo del programa en función del valor de una expresión. A diferencia de las estructuras if-else if-else, switch-case se utiliza cuando quieres comparar un valor con múltiples opciones específicas.
                                        <br>
                                        En este ejemplo, el valor de diaDeLaSemana se compara con varios casos. Si coincide con uno de los casos, el bloque de código correspondiente se ejecuta. Si no hay coincidencias, el bloque default (opcional) se ejecuta.
                                        <br>
                                    <ul class="list-styled">
                                        <strong>Notas Clave:</strong>
                                        <br>
                                        <li class="py-2">
                                            Cada case debe terminar con una instrucción break para evitar que el flujo de control pase al siguiente case. Sin break, todos los casos después del caso coincidente se ejecutarán.
                                        </li>
                                        <li class="py-2">
                                            default es opcional y se ejecuta si ninguno de los casos coincide con el valor de la expresión.
                                        </li>
                                        <li class="py-2">
                                            Puedes usar tipos de datos como int, char o string en una estructura switch-case.
                                        </li>
                                    </ul>
                                    </p>
                                </li>
                            </ul>
                            </p>

                            <strong>Ciclos (for, while, do-while):</strong>
                            <p>
                                Los ciclos te permiten repetir bloques de código hasta que se cumpla cierta condición. Aquí hay ejemplos de cada tipo de ciclo:

                            <ul class="list-styled">
                                <li class="py-2">
                                    <strong>Ciclo for</strong>
                                    <p>
                                        El ciclo <strong>for</strong> recibe tres parametros para su uso:
                                        <br>
                                        <code>
                                            for (<span class="text-danger">prm_1</span>; <span class="text-primary">prm_2</span>; <span class="text-success">prm_3</span>) {
                                            <br>
                                            //INSTRUCCIONES
                                            <br>
                                            }
                                        </code>
                                        <br>
                                        <br>
                                        <span class="text-danger">prm_1, recibe los valores de inicio del ciclo.</span>
                                        <br>
                                        <span class="text-primary">prm_2, recibe el limite que debe cumplir el ciclo.</span>
                                        <br>
                                        <span class="text-success">prm_3, recibe el incremento o decremento que afectará a <span class="text-danger">prm_1</span> cada iteración. </span>
                                        <br>
                                        <!-- ADD IMAGE -->
                                        En este ejemplo, el ciclo for imprimirá los números del 1 al 5.
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Ciclo while</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        <code>
                                            while (<span class="text-primary">condicion</span>) {
                                            <br>
                                            //INSTRUCCIONES
                                            <br>
                                            }
                                        </code>
                                        <br>
                                        <br>
                                        <span class="text-primary">condicion, recibe la condicion para las iteraciones necesarias hasta que se cumpla dicha condicion.</span>
                                        <br>
                                        El ciclo while repetirá el bloque de código mientras la condición (contador <= 5) sea verdadera. </p>
                                </li>
                                <li class="py-2">
                                    <strong>Ciclo Do-while</strong>
                                    <p>
                                        <!-- ADD IMAGE -->
                                        <br>
                                        <code>
                                            do {
                                            <br>
                                            //INSTRUCCIONES
                                            <br>
                                            }while(<span class="text-primary">condicion</span>)
                                        </code>
                                        <br>
                                        <br>
                                        <span class="text-primary">condicion, recibe la condicion para las iteraciones necesarias hasta que se cumpla dicha condicion.</span>
                                        <br>
                                        A diferencia del while loop, el do-while loop siempre se ejecutará al menos una vez antes de verificar la condición.
                                    </p>
                                </li>
                            </ul>

                            <ul class="list-styled">
                                <strong>Notas Clave:</strong>
                                <br>
                                <li class="py-2">
                                    Usa condicionales para realizar acciones basadas en ciertas condiciones. Las condiciones pueden ser simples o complejas (usando operadores lógicos como && para "y" y || para "o").
                                </li>
                                <li class="py-2">
                                    Los ciclos te permiten ejecutar bloques de código repetidamente. Asegúrate de tener una condición de salida para evitar bucles infinitos.
                                </li>
                                <li class="py-2">
                                    Presta atención a la indentación: en C#, las llaves { } definen los bloques de código. Un error común es olvidar una llave, lo que puede cambiar el flujo de ejecución de tu programa de manera inesperada.
                                </li>
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op7">7. Arrays y Matrices</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="7"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="7" data-id="7">
                            <p>
                                <strong>Arrays (Arreglos Unidimensionales)</strong>
                                <br>
                                Un array es una estructura de datos que puede almacenar múltiples valores del mismo tipo.
                                <br>
                                <!-- ADD IMAGES -->
                                <br>

                            <ul class="list-styled">
                                <li class="py-2">
                                    <strong>Declarar e Inicializar un Array</strong>
                                    <br>
                                    <p>
                                        <br>
                                        <code>
                                            dimension = 5;
                                            <br>
                                            int[] numeros = new int[dimension];
                                        </code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong><span class="text-primary">Recorrido</span> - <span class="text-success">Llenado</span> - <span class="text-danger">Impresion</span></strong>
                                    <br>
                                    <p>
                                        El recorrido del array siempre debe de iniciar desde 0.
                                        <br>
                                        <code class="text-primary">
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;MessageBox.Show(numeros[i]);
                                                <br>
                                                }
                                        </code>

                                        <br>
                                        <br>
                                        En este caso llenaremos el Array con valores aleatorios utilizando Random.<br>
                                        <code class="text-success">
                                            Random random = new Random();
                                            <br>
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;numeros[i] = random.Next(1,10);
                                                <br>
                                                }
                                        </code>
                                        <br>
                                        <br>
                                        En este caso mostraremos el Array completo almacenado en la variable <strong>"cad"</strong> dentro de un MessageBox.<br>
                                        <code class="text-danger">
                                            String cad = "";
                                            <br>
                                            Random random = new Random();
                                            <br>
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;numeros[i] = random.next();
                                                <br>
                                                cad += numeros[i] + "\t";
                                                <br>
                                                }
                                                <br>
                                                <br>
                                                MessageBox.Show(cad);
                                        </code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Arrays Predefinidos:</strong>
                                    <p>
                                        Son arreglos que ya contienen tanto la dimension como los elementos ya definidos.
                                        <br>
                                        <br>
                                        // Declarar e inicializar un array PREDEFINIDO
                                        <br>
                                        <code>int[] numeros = new int[5] { 1, 2, 3, 4, 5 };</code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Arrays No Predefinidos:</strong>
                                    <p>
                                        Son arreglos vacios los cuales deben ser rellenados de acuerdo a las necesidades del usuario para poder contener elementos y poder realizar diferentes acciones con ellos.
                                        <br>
                                        <br>
                                        // Declarar e inicializar un array NO PREDEFINIDO
                                        <br>
                                        <code>int[] numeros = new int[<span class="text-primary">dimension</span>];</code>
                                    </p>
                                </li>
                            </ul>
                            <br>
                            <strong>Matrices (Arreglos Bidimensionales)</strong>
                            <br>
                            Una matriz es un array multidimensional que organiza los elementos en filas y columnas.
                            <br>
                            <ul class="list-styled">
                                <li class="py-2">
                                    <strong>Declarar e Inicializar una Matriz</strong>
                                    <br>
                                    <p>
                                        <br>
                                        <code>
                                            dimension = 5;
                                            <br>
                                            int[,] numeros = new int[dimension , dimension];
                                        </code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong><span class="text-primary">Recorrido</span> - <span class="text-success">Llenado</span> - <span class="text-danger">Impresion</span></strong>
                                    <br>
                                    <p>
                                        El recorrido de una matriz siempre debe de iniciar desde <strong>[0,0]</strong>.
                                        <br>
                                        <code class="text-primary">
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;
                                                for (int j = 0; j < dimension; j++) { <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(numeros[i,j]);
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;}
                                                    <br>
                                                    }
                                        </code>

                                        <br>
                                        <br>
                                        En este caso llenaremos la Matriz con valores aleatorios utilizando Random.<br>
                                        <code class="text-success">
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;
                                                for (int j = 0; j < dimension; j++) { <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numeros[i,j] = random.Next(1,10);
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;}
                                                    <br>
                                                    }
                                        </code>
                                        <br>
                                        <br>
                                        En este caso mostraremos la Matriz completa almacenada en la variable <strong>"cad2"</strong> dentro de un MessageBox.<br>
                                        <code class="text-danger">
                                            String cad = "", cad2 = "";
                                            <br>
                                            Random random = new Random();
                                            <br>
                                            for (int i = 0; i < dimension; i++) { <br>
                                                &nbsp;&nbsp;&nbsp;
                                                for (int j = 0; j < dimension; j++) { <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numeros[i,j] = random.Next(1,10);
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cad += numeros[i,j] + "\t";
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;
                                                    }
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;cad2 += cad + "\n";
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;cad = "";
                                                    <br>
                                                    }
                                                    <br>
                                                    MessageBox.Show(cad2);
                                        </code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Matriz Predefinida:</strong>
                                    <p>
                                        Son matrices que ya contienen tanto la dimension como los elementos ya definidos.
                                        <br>
                                        <br>
                                        // Declarar e inicializar una Matriz PREDEFINIDA
                                        <br>
                                        <code>int[,] numeros = new int[3,2] { 1, 2 }, { 3, 4 }, { 5, 6 };</code>
                                    </p>
                                </li>
                                <li class="py-2">
                                    <strong>Matriz No Predefinida:</strong>
                                    <p>
                                        Son matrices vacias los cuales deben ser rellenadas de acuerdo a las necesidades del usuario para poder contener elementos y poder realizar diferentes acciones con ellos.
                                        <br>
                                        <br>
                                        // Declarar e inicializar una Matriz NO PREDEFINIDA
                                        <br>
                                        <code>int[,] numeros = new int[<span class="text-primary">dimension , dimension</span>];</code>
                                    </p>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op8">8. Programación Orientada a Objetos (POO)</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="8"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="8" data-id="8">
                            <p>
                                La POO es una paradigma de programación, un modelo que permite que el codigo sea reutilizable, organizado y facil de mantener.

                            <ul class="list-unstyled">
                                <li class="py-3">
                                    <strong>Clases:</strong>
                                    <p>
                                        Una clase es un molde para crear objetos. Cada objeto creado a partir de una clase es un objeto de la clase.
                                        <br>
                                        <br>
                                        Para crear una clase ve a la pestaña <strong>Proyecto => Agregar Clase</strong>
                                        <!-- ADD IMAGE -->
                                        <center>IMG</center>
                                        <br>
                                        Esta es una clase creada con el nombre <strong>Persona</strong>
                                        <center>IMG</center>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Objetos:</strong>
                                    <p>
                                        Un objeto es una instancia de una clase. Cada objeto creado a partir de una clase es un objeto de la clase.
                                        <br>
                                        <br>
                                        Sintaxis:
                                        <br>
                                    <p class="px-3">
                                        <span class="text-danger">nombreClase</span> <span class="text-primary">nombreObjeto</span> = new <span class="text-danger">nombreClase();</span>
                                        <br>
                                        <br>
                                        <span class="text-danger"><strong>nombreClase,</strong> es el nombre de la Clase que creamos.</span>
                                        <br>
                                        <span class="text-primary"><strong>nombreObjeto,</strong> es el nombre que se le asigna para utilizar todos los metodos que contenga la Clase</span>
                                    </p>
                                    <br>
                                    Ejemplo:
                                    <br>
                                    <!-- ADD IMG -->
                                    <center>IMG</center>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Metodos:</strong>
                                    <p>
                                        Un método es una función que se utiliza para realizar una acción o realizar una operación.
                                        <br>
                                        <br>
                                        Teniendo la siguiente clase:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        Tenemos los siguientes metodos:
                                        <br>
                                    <p class="px-3">
                                        <strong>Metodo Set y Get:</strong>
                                        <br>
                                        El metodo <strong>Set,</strong> sirve para almacenar y guardar los datos.
                                        <br>
                                        El metodo <strong>Get,</strong> sirve para obtener, mostrar y ver los datos.
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        En la imagen tenemos ambos metodos <strong>Set y Get</strong> definidos de una forma corta y directa.
                                        <br>
                                        También tenemos un metodo vacio <strong>void</strong> el cual no tiene especificado un tipo de dato especifico para su retorno con parametros <strong>_nombre, _edad</strong> .
                                    </p>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Constructores:</strong>
                                    <p>
                                        Un constructor es un método que se utiliza para inicializar los atributos de un objeto.
                                        <br>
                                        <br>
                                        Un constructor se crea de la siguiente forma:
                                        <br>
                                    <p class="py-3">
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        El contructor se crea dentro de la clase de tipo <strong>public</strong> para que pueda ser accedido desde cualquier parte, con el mismo nombre de la Clase y los parametros que contenga serán los atributos definidos dentro de la clase de tipo <strong>private</strong>.
                                    </p>

                                    La instancia o llamada del constructor se hace de la siguiente forma:
                                    <br>
                                    <p class="py-3">
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        Se hace la instancia de la Clase <strong>Persona</strong> y como esta definida como constructor se debe de añadir los parametros respectivos. En nuestro caso <strong>nombre y edad</strong> dentro de la instancia de la Clase <strong>Persona(nombre, edad)</strong>.
                                    </p>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Herencia:</strong>
                                    <p>
                                        La herencia es la capacidad de una clase que hereda atributos y métodos de otra clase.
                                    <ul class="list-unstyled px-3">
                                        <li class="py-2">
                                            <strong>Clase Padre:</strong>
                                            <p>
                                                La clase padre es la clase base de una jerarquía de clases.
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Clase Hija:</strong>
                                            <p>
                                                La clase hija es la clase que hereda atributos y métodos de la clase padre.
                                            </p>
                                        </li>

                                        <br>
                                        Ejemplo:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        Donde <strong>Persona</strong> es la clase <strong>Padre</strong> y <strong>Estudiante y Profesor</strong> son las clases <strong>Hijas</strong>.
                                        <br>
                                        Primero obtenemos los datos:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        Segundo Instanciamos la clase Estudiante y la clase Profesor para cargar los datos:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        Tercero Imprimimos los datos:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                        El resultado es el siguiente:
                                        <br>
                                        <!-- ADD IMG -->
                                        <center>IMG</center>
                                        <br>
                                    </ul>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Polimorfismo - Encapsulación - Abstracción</strong>
                                    <br>
                                    <ul class="list-unstyled px-3">
                                        <strong>Polimorfismo:</strong>
                                        <p>
                                            Se refiere a que se pueden utilizar variables u objetos con el mismo nombre, sin embargo sus funciones cambian dependiento del contexto en que fueron creados.
                                        </p>
                                        <br>
                                        <strong>Encapsulación:</strong>
                                        <p>
                                            La encapsulación es la capacidad de proteger los atributos de una clase segun la definicion que se le de ya sea de tipo <strong>public</strong> que permite el acceso a sus atributos desde cualquier clase o de tipo <strong>private</strong> que no permite el acceso a sus atributos.
                                        </p>
                                        <br>
                                        <strong>Abstracción:</strong>
                                        <p>
                                            La abstracción es la capacidad de abstraer los atributos principales.
                                        </p>
                                    </ul>
                                    <br>
                                    Ejemplo:
                                    <br>
                                    <!-- ADD IMG -->
                                    <center>IMG</center>
                                    <br>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op9">9. Gráficos con C#</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="9"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain px-4" id="9" data-id="9">
                            <p>
                                Trabajar con gráficos en C# mediante la clase Graphics es comúnmente utilizado para crear aplicaciones con interfaces de usuario visualmente atractivas. La clase Graphics proporciona métodos para dibujar en superficies como formularios y controles.
                                <br>
                            <ul class="list-unstyled">
                                <li class="py-3">
                                    <strong>Crear la siguiente interfaz:</strong>
                                    <br>
                                    <!-- ADD IMG -->
                                    <center>IMG</center>
                                    <br>
                                </li>
                                <li class="py-3">
                                    <strong>En el boton crear añadimos el siguiente código:</strong>
                                    <br>
                                    <!-- ADD IMG -->
                                    <center>IMG</center>
                                    <br>
                                </li>
                                <br>
                                Finalmente realizar los gráficos. Para ello tenemos dos formas de hacer los gráficos.
                                <br>
                                <li class="py-3">
                                    <strong>Gráficos sin Relleno <span class="text-primary">Drawing</span></strong>
                                    <br>
                                    <p class="px-3">
                                        Para los gráficos Drawing se utiliza la clase
                                        <span class="text-primary">Pen drawPencil = new Pencil(<span class="text-danger">color</span>, <span class="text-success">tamaño_trazo</span>);

                                            <br>
                                            <!-- ADD IMG -->
                                            <center>IMG</center>
                                            <br>
                                    </p>
                                    <p class="px-3">
                                        Tipos de Gráficos.
                                        <br>
                                    <ul class="list-unstyled px-4">
                                        <li class="py-2">
                                            <strong>Lineas <span class="text-primary">Line</span></strong>
                                            <br>
                                            <p>
                                                Forma 1, sintaxis: DrawLine(<span class="text-success">color</span>, <span class="text-primary">p1</span>, <span class="text-danger">p2</span>);
                                            </p>
                                            <p>
                                                Forma 2, sintaxis: DrawLine(<span class="text-success">color</span>, <span class="text-primary">x1</span>, <span class="text-primary">y1</span>, <span class="text-danger">x2</span>, <span class="text-danger">y2</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Rectangulos <span class="text-primary">Rectangle</span></strong>
                                            <br>
                                            <p>
                                                Forma 1, sintaxis: DrawRectangle(<span class="text-success">color</span>, <span class="text-primary">rectangle</span>);
                                            </p>
                                            <p>
                                                Forma 2, sintaxis: DrawRectangle(<span class="text-success">color</span>, <span class="text-primary">x</span>, <span class="text-primary">y</span>, <span class="text-danger">ancho</span>, <span class="text-danger">alto</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Elipse <span class="text-primary">Ellipse</span></strong>
                                            <br>
                                            <p>
                                                Forma 1, sintaxis: DrawEllipse(<span class="text-success">color</span>, <span class="text-primary">rectangle</span>);
                                            </p>
                                            <p>
                                                Forma 2, sintaxis: DrawEllipse(<span class="text-success">color</span>, <span class="text-primary">x</span>, <span class="text-primary">y</span>, <span class="text-danger">ancho</span>, <span class="text-danger">alto</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Polígonos <span class="text-primary">Polygon</span></strong>
                                            <br>
                                            <p>
                                                Sintaxis: DrawPolygon(<span class="text-success">color</span>, <span class="text-primary">polygon</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                    </ul>
                                    </p>
                                </li>
                                <li class="py-3">
                                    <strong>Gráficos con Relleno <span class="text-primary">Fill</span></strong>
                                    <br>
                                    <p class="px-3">
                                        Para los gráficos Fill se utiliza la clase
                                        <span class="text-primary">SolidBrush drawSolid = new SolidBrush(<span class="text-danger">color</span>);

                                            <br>
                                            <!-- ADD IMG -->
                                            <center>IMG</center>
                                            <br>
                                    </p>
                                    <p class="px-3">
                                        Tipos de Gráficos.
                                        <br>
                                    <ul class="list-unstyled px-4">
                                        <li class="py-2">
                                            <strong>Rectangulos <span class="text-primary">Rectangle</span></strong>
                                            <br>
                                            <p>
                                                Forma 1, sintaxis: FillRectangle(<span class="text-success">color</span>, <span class="text-primary">rectangle</span>);
                                            </p>
                                            <p>
                                                Forma 2, sintaxis: FillRectangle(<span class="text-success">color</span>, <span class="text-primary">x</span>, <span class="text-primary">y</span>, <span class="text-danger">ancho</span>, <span class="text-danger">alto</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Elipse <span class="text-primary">Ellipse</span></strong>
                                            <br>
                                            <p>
                                                Forma 1, sintaxis: FillEllipse(<span class="text-success">color</span>, <span class="text-primary">rectangle</span>);
                                            </p>
                                            <p>
                                                Forma 2, sintaxis: FillEllipse(<span class="text-success">color</span>, <span class="text-primary">x</span>, <span class="text-primary">y</span>, <span class="text-danger">ancho</span>, <span class="text-danger">alto</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                        <li class="py-2">
                                            <strong>Polígonos <span class="text-primary">Polygon</span></strong>
                                            <br>
                                            <p>
                                                Sintaxis: FillPolygon(<span class="text-success">color</span>, <span class="text-primary">polygon</span>);
                                            </p>
                                            <p>
                                                Ejemplo:
                                                <br>
                                                <!-- ADD IMG -->
                                                <center>IMG</center>
                                            </p>
                                        </li>
                                    </ul>
                                    </p>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op10">10. SQL Server</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="10"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class=" px-4" id="10" data-id="10">
                            <p class="px-4">
                                Trabajando con SQL Server y SQL Server Management Studio (SSMS), puedes administrar bases de datos, ejecutar consultas y realizar diversas tareas relacionadas con la gestión de datos.
                            </p>

                            <p class="px-4">
                                <strong>SQL Server:</strong>
                                <br>
                                SQL Server es un sistema de gestión de bases de datos relacional (RDBMS) desarrollado por Microsoft. Es utilizado para almacenar y recuperar datos según las solicitudes de otras aplicaciones de software.
                                <br>
                                <strong>SQL Server Management Studio (SSMS):</strong>
                                SSMS es una interfaz gráfica de usuario para SQL Server. Proporciona un entorno integrado para gestionar y administrar bases de datos SQL Server. Puedes ejecutar consultas, diseñar y modificar esquemas, y realizar tareas administrativas.
                                <br>
                                <strong>Instalación:</strong>
                                En el siguiente video veras como realizar la correcta instalación de SqlServer y SSMS para Visual Studio 2022.
                                <br>
                                <!-- ADD LINK YOUTUBE -->
                                <center>VIDEO</center>
                            </p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op11">11. C# y SQL Server</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="11"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain" id="11" data-id="11">
                            <p class="px-4">C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</p>
                        </div>
                    </li>
                    <li class="dropdow-item py-1">
                        <a href="#cs_op12">12. CRUD con C# y SQL Server</a>
                        <button class="btn btn-info btn-sm btnMostrarOcultar" data-id="12"><span class="info"><i class="fas fa-sort"></i></span></button>

                        <div class="my-contain" id="12" data-id="12">
                            <p class="px-4">C# es un lenguaje de programación de propósito general, orientado a objetos, imperativo, de tipado dinámico y multiplataforma.</p>
                        </div>
                    </li>
                </ul>
            </article>
        </div>
    </div>
    <div class="rightSide">4</div>
    <div class="footer">5</div>
</section>

<script>
    /* $(document).ready(function() {

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
    } */

    var id;
    $(document).ready(function() {
        $('.my-contain').toggle();
        var b = true;
        $('.btnMostrarOcultar').click(function() {
            id = $(this).data('id');
            console.log(id)
            if (b) {
                $('#' + id).toggle()
                b = false;
            } else {
                $('#' + id).toggle()
                b = true;
            }

        });
    });
</script>
@endsection