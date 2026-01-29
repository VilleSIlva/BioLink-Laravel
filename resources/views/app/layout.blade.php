<!DOCTYPE html>
<html lang="pt-br" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!--Link css vite--->
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="flex min-h-screen bg-black flex-col p-5">
    <!-- Conteúdo -->
    <div class="max-w-2xl w-full mx-auto p-5 flex flex-col">
        @yield('content')
    </div>
</body>
</html>