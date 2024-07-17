<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @stack('styles')
    @stack('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .wysiwyg-area p {
            margin: 0;
        }
    </style>
    {{--<script>
        function copyContent(elementId) {
            const content = document.getElementById(elementId).innerText;
            let toast = @json((new \App\Helpers\Controllers\Toasts())
                ->addDefault(__('Conteúdo copiado com sucesso!'), \App\Helpers\Controllers\Toasts::STATUS_SUCCESS)
                ->getToasts(), JSON_THROW_ON_ERROR)

            navigator.clipboard.writeText(content)
                .then(() => {
                    new ToastDefault(toast[0]['icon'], toast[0]['iconColor'], toast[0]['iconLabel'], toast[0]['message'])
                })
                .catch(err => {
                    console.error('Erro ao copiar texto: ', err);
                    alert('Erro ao copiar texto. Por favor, copie manualmente.');
                });
        }
    </script>--}}
</head>
