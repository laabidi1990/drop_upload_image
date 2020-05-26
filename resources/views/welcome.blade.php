<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
           <example-component></example-component>
         
                <div class="container my-3">
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-2 mb-4">
                             <a href="{{ $image->originalname}}">
                                <img src="{{ $image->thumbnail }}" class="w-100" alt="">
                             </a>

                             <form action="/images/{{ $image->id }}" method="post">
                                @method ('DELETE')
                                @csrf
                                <button class="small btn btn-danger my-1">Delete</button>
                             </form>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
  
        </div>

    <script src="{{ mix('/js/app.js') }}"></script>    
    </body>
</html>
