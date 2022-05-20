<html>
    <head>

       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <title>  @yield('title') </title>
      <!-- Adicionando o nosso token de segurança CSRF colocoamos o meta name e o nome do token que é csrf-token, e após o content que é o conteúdoesse conteúdo ele é gerado intermamente dentro Laravel qué e através da função csrf_token  essa função irá gerar o token para nós, e esse token será entregue através da página html para cliente       -->
       <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Aumenantando a margem sobre a borda do navegador -->
        <!-- Tudo que for do body terá um padding 20px  -->
       <!-- O padding tem um funcionamento muito similar ao do margin, porém ao invés de dar uma espaçamento externo, ele da uma interno -->
        <!-- Incluimos o .navbar para ajustar o nosso navbar para não ficar colado com a barra do navegador, tudo que for navbar irá ter uma margem de 20px  -->
        <style>

             body {

                padding: 20px;
             }

        </style> <!-- Fechamos o style -->

    </head>
<body>
     <div class="container">

        <main role="main">
           <!-- Inicio a seção -->
            @hasSection('content')


            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Styles -->
                <link href="/css/app.css" rel="stylesheet">
            </head>
            <body>


                <div id="app">
                    @include('flash-message')



                </div>


                <!-- Scripts -->
                <script src="/js/app.js"></script>
            </body>
            </html>





                @yield('content')
               @endif <!-- Fecho a seção -->
          </main>

     </div>


     <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
     {{--  <script src="/jquery.mask.min.js"></script>  --}}
     {{--  <script src="/jquery.min.js"></script>  --}}
     {{--  <script>
         $('.money').mask("000.000.000.000.000,00", {reverse: true});
     </script>  --}}





</body>
</html>
