<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/createflights.css') }} ">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div>
            <h1> Edit your flight destiny  </h1>
            <span> you select {{$flight->name}} </span>
        </div>
        <form action="{{ route('flights.update',$flight) }}" method="POST" >
            @method('PUT')
            @csrf 
            <input type="text" class="form-control" name="name" value="{{old('name',$flight->name)}} " placeholder="name" />
            <div class="validate">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <button  type="submit" class="btn btn-success"> enviar</button>
            @if (Session::get('success'))
            <div  class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
                
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
                
            @endif
            @if (Session::get('fail'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('fail')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
                
            @endif
            

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
