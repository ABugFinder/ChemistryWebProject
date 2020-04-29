@extends('layouts.app')
@section('content')

    <div id="cont-game">
    
         <!--Aqui aparece el contador-->
        <a id="contenedor" style="text-decoration: none; color: #636b6f;"></a>
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>
        
    </div>


    


    <script src="{{ asset('/js/easyMemorama.js')}}"></script>

@endsection
