<div>
<h1> Test screen</h1>


@foreach ($flights as $flight )
<div> 
    <span>{{$flight->name}}
         <a class="btn-warning" href="{{ route('flights.edit',$flight) }} " > 
          
               edit
            
        </a> -
        
        <form action="{{route('flights.destroy',$flight) }} " method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-warning" > 
            delete flight
        </button>
            
        </form>
     </span>
</div>
@endforeach
<h1>  Create a new flight  </h1>
<button> 
    <a href="{{ route('flights.create') }} ">
        click here</a>
    
    
</button>

</div>
