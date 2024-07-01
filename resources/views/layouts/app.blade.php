<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- <script defer src="{{ asset('js/cdn.min.js') }}"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/css/aos.css" rel="stylesheet">
    @livewireStyles
</head>

<body>
    @include('layouts.navbar')

    {{ $slot }}

    @include('layouts.footer')
    @livewireScripts
    @if (session('toastr-toast'))
        <script defer>
            // wait for document ready
            document.addEventListener('DOMContentLoaded', function() {
                toastrToast({
                    type: "{{ session('toastr-toast')['type'] }}",
                    title: "{{ session('toastr-toast')['title'] }}",
                    text: "{{ session('toastr-toast')['text'] }}",
                })
            }, false);
        </script>
    @endif
</body>

</html>
