@extends('layouts.app')
@section('content')

    <div id="cont-game">
        
        <!--Frame of the cards-->
        <section id="card-container" class="memory-game"></section>
        
    </div>


    


    <script src="{{ asset('/js/expertMemorama.js')}}"></script>

@endsection