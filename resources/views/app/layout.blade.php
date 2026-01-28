<!DOCTYPE html>
<html lang="pt-br" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex min-h-screen bg-gray-100 flex-col">

    <!--Header-->
    <div class="navbar bg-base-100 shadow-sm justify-between px-20">
        <a class="btn btn-ghost text-xl">BioLink</a>
        <a class="hover:underline font-bold" href="{{ route("logout") }}">Sair</a>
    </div>
    
    <!-- Conteúdo -->
    <div class="min-w-7xl mx-auto p-5">
        @yield('content')
    </div>

</body>
</html>