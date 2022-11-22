<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jyra's Resort</title>
    <!-- CSS only -->
    @include('cdn')
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    @livewireStyles
</head>
<body>

    <div class="container-top">
        @include('layouts.includes.customer.navbar')


        <div class="main-content">
            @yield('content')
        </div>


        {{-- @include('layouts.includes.customer.footer') --}}

    </div>

    {{-- @include('scripts.script') --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts
</body>
</html>

<style>
    body{
        background-color: rgb(245, 245, 245);
    }
</style>
