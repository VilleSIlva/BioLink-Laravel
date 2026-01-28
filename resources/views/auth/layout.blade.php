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
<body class="flex items-center justify-center min-h-screen p-5 bg-black flex-col">

    <!-- Fundo partículas -->
    <div id="particles-js"
        class="fixed inset-0 z-0 pointer-events-none">
    </div>


    <!-- Conteúdo -->
    <div class="relative z-10">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
   
<script>
    document.addEventListener("DOMContentLoaded", function () {
        particlesJS("particles-js", {
            particles: {
                number: {
                value: 90,
                density: {
                enable: true,
                value_area: 800
            }
            },
            color: { value: "#ffffff" },
            shape: { type: "circle" },
            opacity: {
            value: 0.5,
            random: false
            },
            size: {
            value: 3,
            random: true
            },
            line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1
            },
            move: {
            enable: true,
            speed: 1
            }
            },
            interactivity: {
            detect_on: "canvas",
            events: {
            onhover: {
            enable: true,
            mode: "repulse"
            }
            }
            },
            retina_detect: true
        });
    });
    </script>
</body>
</html>