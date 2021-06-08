<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC COmics</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- Main styles --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>

        {{-- MAIN HEADER --}}
        @include('partials.header')
        
        <main>
            <section class="container">

                <h1>Homepage</h1>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet optio enim, sit harum magnam eligendi nam mollitia molestiae porro unde delectus impedit eveniet! Aperiam rem voluptas iure ratione adipisci vitae.</p>
         
                <h2>Benvenuto {{ $user }}</h2>
    
                @if (! @empty($types))
                    <h3>Le nostre tipologie</h3>
                    <ul>
                        @foreach ($types as $type)
                            <li>{{ $type }}</li>
                        @endforeach
                    </ul>   
                @else
                    <p>Nessuna tipologia disponibile al momento</p>
                @endif
    
                <h2>Variabili loop</h2>
                @forelse ($types as $type)
                    {{ $type }}@if (! $loop->last), @else.@endif
                @empty
                <p>Nessuna tipologia disponibile</p>
                @endforelse
            </section>
        </main>

        {{-- MAIN FOOTER --}}
        @include('partials.footer')

       {{-- JS --}}
       <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
