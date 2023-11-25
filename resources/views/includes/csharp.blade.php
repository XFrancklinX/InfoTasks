<?php $tab = "&nbsp&nbsp&nbsp&nbsp"; ?>
<div class="d-flex justify-content-around header">
                <div class="adsense-section ">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

                    <ins class="adsbygoogle" style="display:block" data-ad-client="" data-ad-slot=""></ins>

                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div>
                    <h1 class="text-center"><span class="text-black icon-exc"><img class="img" src="{{asset('images/icons/c-sharp-c.svg')}}" alt="Visual Studio 2022"></span></h1>
                </div>
                <div class="adsense-section ">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

                    <ins class="adsbygoogle" style="display:block" data-ad-client="" data-ad-slot=""></ins>

                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <hr>
                <br>
            </div>
<div>
    <ul class="list-unstyled px-3">
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Mayor - Medio - Menor</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="1"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="1" data-id="1">
                    <div class="">Determinar el número mayor, medio y menor de tres numeros insertados por teclado.</div>
                    <div class="py-2 px-4 bg-dark rounded">
                        <code class="text-white code">
                            int num1, num2, num3;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            num2 = Convert.ToInt32(textBox2.Text);<br>
                            num3 = Convert.ToInt32(textBox3.Text);<br>

                            if (num1 > num2 && num1 > num3) <br>
                            {<br>
                            <?php echo $tab; ?>MessageBox.Show("El numero mayor es: " + num1);<br>
                            } <br>
                            else <br>
                            { <br>
                            <?php echo $tab; ?>if (num2 > num1 && num2 > num3) <br>
                            <?php echo $tab; ?>{ <br>
                            <?php echo $tab, $tab; ?>MessageBox.Show("El numero mayor es: " + num2); <br>
                            <?php echo $tab; ?>} <br>
                            <?php echo $tab; ?>else <br>
                            <?php echo $tab; ?>{ <br>
                            <?php echo $tab, $tab; ?>MessageBox.Show("El numero mayor es: " + num3); <br>
                            <?php echo $tab; ?>} <br>
                            } <br> <br>
                            if (num1 < num2 && num1 < num3) <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("El numero menor es: " + num1); <br>
                                } <br>
                                else <br>
                                { <br>
                                <?php echo $tab; ?>if (num2 < num1 && num2 < num3) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>MessageBox.Show(" El numero menor es: " + num2); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>MessageBox.Show(" El numero menor es: " + num3); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br> <br>
                                    if (num1 != num2 && num1 != num3 && num2 != num3) <br>
                                    { <br>
                                    <?php echo $tab; ?>MessageBox.Show(" El numero medio es: " + num1); <br>
                                    } <br>
                                    else <br>
                                    { <br>
                                    <?php echo $tab; ?>if (num1 != num2 && num1 != num3 && num2 != num3) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>MessageBox.Show(" El numero medio es: " + num2); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>MessageBox.Show(" El numero medio es: " + num3); <br>
                                    <?php echo $tab; ?>} <br>
                                    }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class=" py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Par o Impar</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="2"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="2" data-id="2">
                    <div class="">Determinar cuando un número es Par o Impar.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num;<br>
                            num = int.Parse(textBox1.Text);<br>
                            if (num % 2 == 0) <br>
                            { <br>
                            <?php echo $tab; ?>MessageBox.Show("El numero es Par"); <br>
                            } <br>
                            else <br>
                            { <br>
                            <?php echo $tab; ?>MessageBox.Show("El numero es Impar"); <br>
                            } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Perfecto</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="3"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="3" data-id="3">
                    <div class="">Determinar cuando un número es perfecto. Se dice que un número es perfecto cuando la suma de sus divisores es igual al número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num;<br>
                            num = int.Parse(textBox1.Text);<br>
                            int suma = 0;<br>
                            for (int i = 1; i < num; i++) <br>
                                { <br>
                                <?php echo $tab; ?>if (num % i == 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab; ?><?php echo $tab; ?>suma = suma + i; <br>
                                <?php echo $tab; ?>} <br>
                                } <br>
                                if (suma == num) <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("El numero es Perfecto"); <br>
                                } <br>
                                else <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("El numero no es Perfecto"); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Abundante</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="4"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="4">
                    <div class="">Determinar cuando un número es abundante. Se dice que un número es perfecto cuando la suma de sus divisores es mayor al número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num;<br>
                            num = int.Parse(textBox1.Text);<br>
                            int suma = 0;<br>
                            for (int i = 1; i < num; i++) <br>
                                { <br>
                                <?php echo $tab; ?>if (num % i == 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab; ?>suma = suma + i; <br>
                                <?php echo $tab; ?>} <br>
                                } <br>
                                if (suma > num) <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("El numero es Abundante"); <br>
                                } <br>
                                else <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("El numero no es Abundante"); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Factorial</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="5"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="5" data-id="5">
                    <div class="">Determinar el factorial de un número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num;<br>
                            num = int.Parse(textBox1.Text);<br>
                            int factorial = 1;<br>
                            for (int i = 1; i <= num; i++) <br>
                                { <br>
                                <?php echo $tab; ?>factorial = factorial * i; <br>
                                } <br>
                                MessageBox.Show("El factorial de " + num + " es: " + factorial); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Números Amigos</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="6"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="6" data-id="6">
                    <div class="">Determinar cuando dos números son amigos. Se dice que dos números son amigos cuando la suma de sus divisores del primer número es igual al segundo número y la suma de los divisores del segundo número es igual al primer número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int num2;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            num2 = int.Parse(textBox2.Text);<br>
                            int suma1 = 0;<br>
                            int suma2 = 0;<br>
                            for (int i = 1; i < num1; i++) <br>
                                { <br>
                                <?php echo $tab; ?>if (num1 % i == 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>suma1 = suma1 + i; <br>
                                <?php echo $tab; ?>} <br>
                                } <br>
                                for (int i = 1; i < num2; i++) <br>
                                    { <br>
                                    <?php echo $tab; ?>if (num2 % i == 0) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>suma2 = suma2 + i; <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    if (suma1 == num2 && suma2 == num1) <br>
                                    { <br>
                                    <?php echo $tab; ?>MessageBox.Show("Los numeros son amigos"); <br>
                                    } <br>
                                    else <br>
                                    { <br>
                                    <?php echo $tab; ?>MessageBox.Show("Los numeros no son amigos"); <br>
                                    } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Ecuación de Segundo Grado</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="7"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="7" data-id="7">
                    <div class="">Determinar la ecuación de segundo grado tomando en cuenta cuando la raiz sea menor a 0, igual a 0 y mayor a 0</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int num2;<br>
                            int num3;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            num2 = int.Parse(textBox2.Text);<br>
                            num3 = int.Parse(textBox3.Text);<br>
                            int discriminante = (num2 * num2) - (4 * num1 * num3);<br>
                            if (discriminante < 0) <br>
                                { <br>
                                <?php echo $tab; ?>MessageBox.Show("La ecuacion no tiene raices reales"); <br>
                                } <br>
                                else <br>
                                { <br>
                                <?php echo $tab; ?>if (discriminante == 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>x1 = -num2 / (2*num1); <br>
                                <?php echo $tab, $tab; ?>MessageBox.Show("La ecuacion tiene una raiz real x1="+ x1); <br>
                                <?php echo $tab; ?>} <br>
                                <?php echo $tab; ?>else <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>x1 = (-num2 + Math.Sqrt(discriminante)) / (2 * num1); <br>
                                <?php echo $tab, $tab; ?>x2 = (-num2 - Math.Sqrt(discriminante)) / (2 * num1); <br>
                                <?php echo $tab, $tab; ?>MessageBox.Show("La ecuacion tiene dos raices reales x1="+ x1 + " y x2="+ x2); <br>
                                <?php echo $tab; ?>} <br>
                                }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Producto mediante sumas sucesivas</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="8"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="8" data-id="8">
                    <div class="">Determinar el producto de un número mediante sumas sucesivas.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1; //Multiplicando<br>
                            int num2; //Multiplicador<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            num2 = int.Parse(textBox2.Text);<br>
                            int suma = 0;<br>
                            for (int i = 1; i <= num2; i++) <br>
                                { <br>
                                <?php echo $tab; ?>suma = suma + num1; <br>
                                } <br>
                                MessageBox.Show("El producto de" + num1 + " * " num2 + " es: "+ suma);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Raiz sin utilizar (Sqrt)</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="9"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="9" data-id="9">
                    <div class="">Determinar la raiz de un número sin utilizar sqrt.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            double raiz;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            raiz = Math.Pow(num1, 0.5);<br>
                            MessageBox.Show("La raiz de "+ num1 + " es: "+ raiz);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Primo</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="10"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="10" data-id="10">
                    <div class="">Determinar cuando un número es primo. Se dice que un número es primo cuando es divisible entre 1 y entre si mismo.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int i;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            for (i = 2; i < num1; i++)<br>
                                {<br>
                                <?php echo $tab; ?>if (num1 % i == 0)<br>
                                <?php echo $tab; ?>{<br>
                                <?php echo $tab; ?>MessageBox.Show("El número "+ num1 + " no es primo");<br>
                                <?php echo $tab; ?>break;<br>
                                <?php echo $tab; ?>}<br>
                                }<br>
                                if (i == num1)<br>
                                {<br>
                                <?php echo $tab; ?>MessageBox.Show("El número "+ num1 + " es primo");<br>
                                }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Número Cubo Perfecto Armstrong</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="11"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="11" data-id="11">
                    <div class="">Determinar cuando un número es cubo perfecto Armstrong. Se dice que un número es cubo perfecto Arsmtrong cuando cada digito del número elevado al cubo es igual al número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int num2;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            num2 = num1;<br>
                            int suma = 0;<br>
                            while (num2 > 0)<br>
                            {<br>
                            <?php echo $tab; ?>int digito = num2 % 10;<br>
                            <?php echo $tab; ?>num2 = num2 / 10;<br>
                            <?php echo $tab; ?>int cubo = (int)Math.Pow(digito, 3);<br>
                            <?php echo $tab; ?>suma = suma + cubo;<br>
                            }<br>
                            if (num1 == suma)<br>
                            {<br>
                            <?php echo $tab; ?>MessageBox.Show("El número "+ num1 + " es cubo perfecto");<br>
                            }<br>
                            else<br>
                            {<br>
                            <?php echo $tab; ?>MessageBox.Show("El número "+ num1 + " no es cubo perfecto");<br>
                            }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Dígitos de un Número</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="12"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="12" data-id="12">
                    <div class="">Determinar la cantidad de dígitos de un número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int aux;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            aux = num1;<br>
                            cantidad = 0; <br>
                            while (aux > 0)
                            {<br>
                            <?php echo $tab; ?>aux = aux / 10;<br>
                            <?php echo $tab; ?>cantidad = cantidad + 1;<br>
                            }<br>
                            MessageBox.Show("La cantidad de dígitos de "+ num1 + " es: "+ cantidad);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Suma de Dígitos de un Número</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="13"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="13" data-id="13">
                    <div class="">Determinar la cantidad de dígitos de un número y retornar la suma de los digitos de dicho número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int aux;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            aux = num1;<br>
                            int suma = 0; <br>
                            int digito;<br>
                            while (aux > 0)
                            {<br>
                            <?php echo $tab; ?>digito = aux % 10;<br>
                            <?php echo $tab; ?>aux = aux / 10;<br>
                            <?php echo $tab; ?>suma = suma + digito;<br>
                            }<br>
                            MessageBox.Show("La suma de los dígitos de "+ num1 + " es: "+ suma);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Producto de Dígitos de un Número</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="14"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="14" data-id="14">
                    <div class="">Determinar la cantidad de dígitos de un número y retornar el producto de los digitos de dicho número.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int num1;<br>
                            int aux;<br>
                            num1 = int.Parse(textBox1.Text);<br>
                            aux = num1;<br>
                            int producto = 1; <br>
                            int digito;<br>
                            while (aux > 0)
                            {<br>
                            <?php echo $tab; ?>digito = aux % 10;<br>
                            <?php echo $tab; ?>aux = aux / 10;<br>
                            <?php echo $tab; ?>producto = producto * digito;<br>
                            }<br>
                            MessageBox.Show("El producto de los dígitos de "+ num1 + " es: "+ producto);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Potencia de un Número</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="15"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="15" data-id="15">
                    <div class="">Determinar la potencia de un número b^e por medio de productos sucesivos.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int base;<br>
                            int exponente;<br>
                            base = int.Parse(textBox1.Text);<br>
                            exponente = int.Parse(textBox2.Text);<br>
                            int resultado = 1;<br>
                            for (int i = 0; i < exponente; i++)<br>
                                {<br>
                                <?php echo $tab; ?>resultado = resultado * base;<br>
                                }<br>
                                MessageBox.Show("La potencia de "+ base + " elevado a "+ exponente + " es: "+ resultado);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Creación de Vector Predefinido</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="16"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="16" data-id="16">
                    <div class="">Crear un vector con dimension 5 con datos predefinidos.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int[] vector = new int[5] { 1, 2, 3, 4, 5 };
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Creación de Vector con Datos Aleatorios</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="17"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="17" data-id="17">
                    <div class="">Crear un vector con dimension 5 con datos aleatorios.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 5; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Como Imprimir los datos de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="18"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="18" data-id="18">
                    <div class="">Crea un vector de dimension 5 con datos aleatorios y muestra sus datos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 5; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                } <br>
                                for (int i = 0; i < dimension; i++) <br>
                                    { <br>
                                    <?php echo $tab; ?>listBox1.Items.Add(vector[i]); <br>
                                    }
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Pares e Impares dentro de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="19"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="19" data-id="19">
                    <div class="">Determinar la cantidad de números Pares e Impares dentro de un vector de dimension 10 con datos aleatorios y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension=10; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                } <br>
                                int pares = 0; <br>
                                int impares = 0; <br>
                                for (int i = 0; i < dimension; i++) <br>
                                    { <br>
                                    <?php echo $tab; ?>if (vector[i] % 2 == 0) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>pares++; <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>impares++; <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>listBox1.Items.Add(vector[i]); <br>
                                        } <br>
                                        listBox1.Items.Add("La cantidad de números pares es: " + pares + " y la cantidad de números impares es: " + impares);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Primos dentro de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="20"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="20" data-id="20">
                    <div class="">Determinar la cantidad de números primos dentro de un vector y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            int primos = 0; <br>
                            int cont = 0; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>for(int j = 1; j <= vector[i]; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>if (vector[i] % j == 0) <br>
                                    <?php echo $tab, $tab; ?>{ <br>
                                    <?php echo $tab, $tab, $tab; ?>cont++; <br>
                                    <?php echo $tab, $tab; ?>} <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>if (cont == 2) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>primos++; <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" es primo"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" no es primo"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>cont = 0; <br>
                                    } <br>
                                    listBox1.Items.Add("La cantidad de números primos es: " + primos);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Perfectos dentro de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="21"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="21" data-id="21">
                    <div class="">Determinar la cantidad de números perfectos dentro de un vector y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            int perfectos = 0; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>int suma = 0; <br>
                                <?php echo $tab; ?>for (int j = 1; j < vector[i]; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>if (vector[i] % j == 0) <br>
                                    <?php echo $tab, $tab; ?>{ <br>
                                    <?php echo $tab, $tab, $tab; ?>suma = suma + j; <br>
                                    <?php echo $tab, $tab; ?>} <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>if (suma == vector[i]) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>perfectos++; <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" es perfecto"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" no es perfecto"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>suma = 0; <br>
                                    } <br>
                                    listBox1.Items.Add("La cantidad de números perfectos es: " + perfectos);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Abundantes dentro de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="22"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="22" data-id="22">
                    <div class="">Determinar la cantidad de números abundantes dentro de un vector y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            int abundantes = 0; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>int suma = 0; <br>
                                <?php echo $tab; ?>for (int j = 1; j < vector[i]; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>if (vector[i] % j == 0) <br>
                                    <?php echo $tab, $tab; ?>{ <br>
                                    <?php echo $tab, $tab, $tab; ?>suma = suma + j; <br>
                                    <?php echo $tab, $tab; ?>} <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>if (suma > vector[i]) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>abundantes++; <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" es abundante"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" no es abundante"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>suma = 0; <br>
                                    } <br>
                                    listBox1.Items.Add("La cantidad de números abundantes es: " + abundantes);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Cubos Perfectos Armstrong dentro de un Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="23"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="23" data-id="23">
                    <div class="">Determinar la cantidad de números Armstrong dentro de un vector y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            int armstrong = 0; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>int suma = 0; <br>
                                <?php echo $tab; ?>for (int j = 1; j < vector[i]; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>if (vector[i] % j == 0) <br>
                                    <?php echo $tab, $tab; ?>{ <br>
                                    <?php echo $tab, $tab, $tab; ?>suma = suma + j; <br>
                                    <?php echo $tab, $tab; ?>} <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>if (suma == vector[i]) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>armstrong++; <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" es armstrong"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>else <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>listBox1.Items.Add("El numero "+vector[i]+" en la posicion "+i+" no es armstrong"); <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>suma = 0; <br>
                                    } <br>
                                    listBox1.Items.Add("La cantidad de números armstrong es: " + armstrong);
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Suma de Vectores</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="24"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="24" data-id="24">
                    <div class="">Sumar los vectores y mostrarlos en un listbox. La suma de vectores se realiza utilizando la misma posición en cada iteración.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector1 = new int[dimension]; <br>
                            int[] vector2 = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector1[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>vector2[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>listBox1.Items.Add(vector1[i] + " + " + vector2[i] + " = " + (vector1[i] + vector2[i])); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Resta de Vectores</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="25"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="25" data-id="25">
                    <div class="">Restar los vectores y mostrarlos en un listbox.La resta de vectores se realiza utilizando la misma posición en cada iteración.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector1 = new int[dimension]; <br>
                            int[] vector2 = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector1[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>vector2[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>listBox1.Items.Add(vector1[i] + " - " + vector2[i] + " = " + (vector1[i] - vector2[i])); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Producto de Vectores</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="26"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="26" data-id="26">
                    <div class="">Multiplicar los vectores y mostrarlos en un listbox. El producto de vectores se realiza utilizando la misma posición en cada iteración.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector1 = new int[dimension]; <br>
                            int[] vector2 = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector1[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>vector2[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>listBox1.Items.Add(vector1[i] + " * " + vector2[i] + " = " + (vector1[i] * vector2[i])); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">División de Vectores</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="27"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="27" data-id="27">
                    <div class="">Dividir los vectores y mostrarlos en un listbox. La división de vectores se realiza utilizando la misma posición en cada iteración. También debe controlar cuando el divisor sea cero.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector1 = new int[dimension]; <br>
                            int[] vector2 = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector1[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>vector2[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>if(vector2[i] == 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>listBox1.Items.Add(vector1[i] + " / " + vector2[i] + " = " Error, no se puede dividir por cero"); <br>
                                <?php echo $tab; ?>} <br>
                                <?php echo $tab; ?>else <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>listBox1.Items.Add(vector1[i] + " / " + vector2[i] + " = " + (vector1[i] / vector2[i])); <br>
                                <?php echo $tab; ?>} <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Dígitos en cada Posición del Vector</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="28"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="28" data-id="28">
                    <div class="">Determinar la cantidad de dígitos que contiene cada posición del vector y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 10; <br>
                            int[] vector1 = new int[dimension]; <br>
                            Random random = new Random(); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>vector1[i] = random.Next(1, 100); <br>
                                <?php echo $tab; ?>int aux = vector1[i]; <br>
                                <?php echo $tab; ?>int cont = 0; <br>
                                <?php echo $tab; ?>while (aux > 0) <br>
                                <?php echo $tab; ?>{ <br>
                                <?php echo $tab, $tab; ?>cont++; <br>
                                <?php echo $tab, $tab; ?>aux = aux / 10; <br>
                                <?php echo $tab; ?>} <br>
                                <?php echo $tab; ?>listBox1.Items.Add(vector1[i] + " tiene " + cont + " dígitos"); <br>
                                } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Creación de una Matriz Predefinida</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="29"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="29" data-id="29">
                    <div class="">Crear una matriz con dimension 3x3 con datos predefinidos.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int[,] matriz1 = new int[3, 3] { { 1, 2, 3 }, { 4, 5, 6 }, { 7, 8, 9 } }; <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Creación de una Matriz con Datos Aleatorios</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="30"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="30" data-id="30">
                    <div class="">Crear una matriz con dimension 3x3 con datos aleatorios.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension=3;
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Como Imprimir los datos de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="31"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="31" data-id="31">
                    <div class="">Crear una matriz con dimension 3x3 y muestra sus datos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3;
                            string cad = "";
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>cad += matriz2[i, j] + "\t"; <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                            <?php echo $tab; ?>cad = ""; <br>
                                            } <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Pares e Impares dentro de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="32"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="32" data-id="32">
                    <div class="">Determinar la cantidad de números Pares e Impares dentro de una matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3;
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    int pares = 0, impares = 0; <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>if (matriz2[i, j] % 2 == 0) <br>
                                            <?php echo $tab, $tab; ?>{ <br>
                                            <?php echo $tab, $tab, $tab; ?>pares++; <br>
                                            <?php echo $tab, $tab; ?>} <br>
                                            <?php echo $tab, $tab; ?>else <br>
                                            <?php echo $tab, $tab; ?>{ <br>
                                            <?php echo $tab, $tab, $tab; ?>impares++; <br>
                                            <?php echo $tab, $tab; ?>} <br>
                                            <?php echo $tab; ?>} <br>
                                            } <br>
                                            listBox1.Items.Add("La cantidad de números Pares es: " + pares); <br>
                                            listBox1.Items.Add("La cantidad de números Impares es: " + impares); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Primos dentro de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="33"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="33" data-id="33">
                    <div class="">Determinar la cantidad de números primos dentro de una matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>cad += matriz2[i, j] + "\t"; <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                            <?php echo $tab; ?>cad = ""; <br>
                                            } <br>
                                            int primos = 0; <br>
                                            for (int i = 0; i < dimension; i++) <br>
                                                { <br>
                                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                                    <?php echo $tab; ?>{ <br>
                                                    <?php echo $tab, $tab; ?>for(int k = 1; k <= matriz2[i, j]; k++) <br>
                                                        <?php echo $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab; ?>if (matriz2[i, j] % k == 0) <br>
                                                        <?php echo $tab, $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab, $tab; ?>primos++; <br>
                                                        <?php echo $tab, $tab, $tab; ?>} <br>
                                                        <?php echo $tab, $tab; ?>} <br>
                                                        <?php echo $tab; ?>} <br>
                                                        } <br>
                                                        listBox1.Items.Add("La cantidad de números primos es: " + primos); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Perfectos dentro de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="34"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="34" data-id="34">
                    <div class="">Determinar la cantidad de números perfectos dentro de una matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>cad += matriz2[i, j] + "\t"; <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                            <?php echo $tab; ?>cad = ""; <br>
                                            } <br>
                                            int perfectos = 0; <br>
                                            int suma = 0; <br>
                                            for (int i = 0; i < dimension; i++) <br>
                                                { <br>
                                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                                    <?php echo $tab; ?>{ <br>
                                                    <?php echo $tab, $tab; ?>for(int k = 1; k < matriz2[i, j]; k++) <br>
                                                        <?php echo $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab; ?>if (matriz2[i, j] % k == 0) <br>
                                                        <?php echo $tab, $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab, $tab; ?>suma += k; <br>
                                                        <?php echo $tab, $tab, $tab; ?>} <br>
                                                        <?php echo $tab, $tab; ?>} <br>
                                                        <?php echo $tab, $tab; ?>if (suma == matriz2[i, j]) <br>
                                                        <?php echo $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab; ?>perfectos++; <br>
                                                        <?php echo $tab, $tab; ?>} <br>
                                                        <?php echo $tab; ?>} <br>
                                                        } <br>
                                                        listBox1.Items.Add("La cantidad de números perfectos es: " + perfectos); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Abundantes dentro de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="35"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="35" data-id="35">
                    <div class="">Determinar la cantidad de números abundantes dentro de una matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>cad += matriz2[i, j] + "\t"; <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                            <?php echo $tab; ?>cad = ""; <br>
                                            } <br>
                                            int abundantes = 0; <br>
                                            int suma = 0; <br>
                                            for (int i = 0; i < dimension; i++) <br>
                                                { <br>
                                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                                    <?php echo $tab; ?>{ <br>
                                                    <?php echo $tab, $tab; ?>for(int k = 1; k < matriz2[i, j]; k++) <br>
                                                        <?php echo $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab; ?>if (matriz2[i, j] % k == 0) <br>
                                                        <?php echo $tab, $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab, $tab; ?>suma += k; <br>
                                                        <?php echo $tab, $tab, $tab; ?>} <br>
                                                        <?php echo $tab, $tab; ?>} <br>
                                                        <?php echo $tab, $tab; ?>if (suma > matriz2[i, j]) <br>
                                                        <?php echo $tab, $tab; ?>{ <br>
                                                        <?php echo $tab, $tab, $tab; ?>abundantes++; <br>
                                                        <?php echo $tab, $tab; ?>} <br>
                                                        <?php echo $tab; ?>} <br>
                                                        } <br>
                                                        listBox1.Items.Add("La cantidad de números abundantes es: " + abundantes); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Números Cubos Perfectos Armstrong dentro de una Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="36"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="35" data-id="36">
                    <div class="">Determinar la cantidad de números Armstrong dentro de una matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 10000); <br>
                                    <?php echo $tab; ?>} <br>
                                    } <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>cad += matriz2[i, j] + "\t"; <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                            <?php echo $tab; ?>cad = ""; <br>
                                            } <br>
                                            int armstrong = 0; <br>
                                            int suma = 0; <br>
                                            int digito; <br>
                                            for (int i = 0; i < dimension; i++) <br>
                                                { <br>
                                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                                    <?php echo $tab; ?>{ <br>
                                                    <?php echo $tab, $tab; ?>int aux = matriz2[i, j]; <br>
                                                    <?php echo $tab, $tab; ?>while (aux > 0) <br>
                                                    <?php echo $tab, $tab; ?>{ <br>
                                                    <?php echo $tab, $tab, $tab; ?>digito = aux % 10; <br>
                                                    <?php echo $tab, $tab, $tab; ?>aux = aux / 10; <br>
                                                    <?php echo $tab, $tab, $tab; ?>suma = suma + (digito * digito * digito);<br>
                                                    <?php echo $tab, $tab; ?>} <br>
                                                    <?php echo $tab, $tab; ?>if (suma == matriz2[i, j]) <br>
                                                    <?php echo $tab, $tab; ?>{ <br>
                                                    <?php echo $tab, $tab, $tab; ?>armstrong++; <br>
                                                    <?php echo $tab, $tab; ?>} <br>
                                                    <?php echo $tab, $tab; ?>suma = 0; <br>
                                                    <?php echo $tab; ?>} <br>
                                                    } <br>
                                                    listBox1.Items.Add("La cantidad de números Armstrong es: " + armstrong); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Suma de Matrices</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="37"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="37" data-id="37">
                    <div class="">Sumar las matrices y mostrarlos en un listbox. La suma de matrices se realiza utilizando la misma posición en cada iteración.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            string cad2 = ""; <br>
                            string cad3 = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz1 = new int[dimension, dimension]; <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            int[,] suma = new int[dimension, dimension]; <br>
                            listBox1.Items.Add("\tmatriz1\t" + "\tmatriz2\t" + "\tsumaMatriz\t"); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz1[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab, $tab; ?>suma[i, j] = matriz1[i, j] + matriz2[i, j]; <br>
                                    <?php echo $tab, $tab; ?>cad += matriz1[i, j] + "\t"; <br>
                                    <?php echo $tab, $tab; ?>cad2 += matriz2[i, j] + "\t"; <br>
                                    <?php echo $tab, $tab; ?>cad3 += suma[i, j] + "\t"; <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>listBox1.Items.Add(cad + "\t" + cad2 + "\t" + cad3); <br>
                                    <?php echo $tab; ?>cad = ""; <br>
                                    <?php echo $tab; ?>cad2 = ""; <br>
                                    <?php echo $tab; ?>cad3 = ""; <br>
                                    } <br>
                                    listBox1.Items.Add(""); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Resta de Matrices</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="38"><span><i class="fas fa-eye"></i></span></button>
                </div>

            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="38" data-id="38">
                    <div class="">Restar las matrices y mostrarlos en un listbox.La resta de matrices se realiza utilizando la misma posición en cada iteración.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            string cad2 = ""; <br>
                            string cad3 = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz1 = new int[dimension, dimension]; <br>
                            int[,] matriz2 = new int[dimension, dimension]; <br>
                            int[,] resta = new int[dimension, dimension]; <br>
                            listBox1.Items.Add("\tmatriz1\t" + "\tmatriz2\t" + "\trestaMatriz\t"); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz1[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab, $tab; ?>matriz2[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab, $tab; ?>resta[i, j] = matriz1[i, j] - matriz2[i, j]; <br>
                                    <?php echo $tab, $tab; ?>cad += matriz1[i, j] + "\t"; <br>
                                    <?php echo $tab, $tab; ?>cad2 += matriz2[i, j] + "\t"; <br>
                                    <?php echo $tab, $tab; ?>cad3 += resta[i, j] + "\t"; <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>listBox1.Items.Add(cad + "\t" + cad2 + "\t" + cad3); <br>
                                    <?php echo $tab; ?>cad = ""; <br>
                                    <?php echo $tab; ?>cad2 = ""; <br>
                                    <?php echo $tab; ?>cad3 = ""; <br>
                                    } <br>
                                    listBox1.Items.Add(""); <br>
                        </code>
                    </div>
                </div>
            </div>
        </li>
        <li class="py-2">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex ms-2 me-auto">
                    <div class="fw-bold">Cantidad de Dígitos en cada Posición de la Matriz</div>
                    <?php echo $tab; ?>
                    <button class="btn btn-primary btn-sm btnMostrarOcultar" data-id="39"><span><i class="fas fa-eye"></i></span></button>
                </div>
            </div>
            <div class="d-block justify-content-start align-items-start">
                <div class="my-contain ms-2 me-auto" id="39" data-id="39">
                    <div class="">Determinar la cantidad de dígitos que contiene cada posición de la matriz y mostrarlos en un listbox.</div>
                    <div class="py-2 px-3 bg-dark rounded">
                        <code class="text-white code">
                            int dimension = 3; <br>
                            string cad = ""; <br>
                            Random random = new Random(); <br>
                            int[,] matriz = new int[dimension, dimension]; <br>
                            listBox1.Items.Add("\tmatriz\t"); <br>
                            for (int i = 0; i < dimension; i++) <br>
                                { <br>
                                <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                    <?php echo $tab; ?>{ <br>
                                    <?php echo $tab, $tab; ?>matriz[i, j] = random.Next(1, 100); <br>
                                    <?php echo $tab, $tab; ?>cad += matriz[i, j] + "\t"; <br>
                                    <?php echo $tab; ?>} <br>
                                    <?php echo $tab; ?>listBox1.Items.Add(cad); <br>
                                    <?php echo $tab; ?>cad = ""; <br>
                                    } <br>
                                    listBox1.Items.Add(""); <br>
                                    listBox1.Items.Add("Cantidad de Digitos en la matriz"); <br>
                                    for (int i = 0; i < dimension; i++) <br>
                                        { <br>
                                        <?php echo $tab; ?>for (int j = 0; j < dimension; j++) <br>
                                            <?php echo $tab; ?>{ <br>
                                            <?php echo $tab, $tab; ?>int aux = matriz[i, j]; <br>
                                            <?php echo $tab, $tab; ?>int cont = 0; <br>
                                            <?php echo $tab, $tab; ?>while (aux > 0) <br>
                                            <?php echo $tab, $tab; ?>{ <br>
                                            <?php echo $tab, $tab, $tab; ?>cont++; <br>
                                            <?php echo $tab, $tab, $tab; ?>aux /= 10; <br>
                                            <?php echo $tab, $tab; ?>} <br>
                                            <?php echo $tab, $tab; ?>listBox1.Items.Add("[" + i + "][" + j + "] = " + cont); <br>
                                            <?php echo $tab; ?>} <br>
                                            <?php echo $tab; ?>listBox1.Items.Add(""); <br>
                                            }
                        </code>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>

<script>
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
</script>