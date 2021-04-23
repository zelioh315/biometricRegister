<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Biometric Registration') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <div id="app">
       
            <main class="py-4">
                @include('inc.navbar')
                {{-- <div class="container">
                    @include('inc.messages')
                </div> --}}
                @yield('content')
                @include('inc.footer')
            </main>
        </div>
    </body>
  
</html>


