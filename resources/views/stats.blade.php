@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card" style="width: 100%">
            <div class="card-header">
              Tráfico de datos
            </div>
            <div class="card-body">
              <h5 class="card-title">Veces al día que un usuario utiliza nuestra página</h5>
              <p class="card-text">Se muestran la cantidad de usuarios que se conectan al mes desde el inicio de los tiempos.</p>
              <div id="myfirstchart" style="height:350px;"></div>
            </div>
        </div>
        <div class="card" style="width: 50%">
            <div class="card-header">
              Artículos más comprados
            </div>
            <div class="card-body">
              <h5 class="card-title">Comparativa de artículos preferidos por los usuarios</h5>
              <p class="card-text">Se meustr una línea de popularidad basada en la cantidad de compras mensuales que se le atrubuye a un artículo específico.</p>
              <div id="line-example"></div>
            </div>
        </div>
        <div class="card" style="width: 50%">
            <div class="card-header">
              Juego más usado
            </div>
            <div class="card-body">
              <h5 class="card-title">¿Qué juego es el más usado por los usuarios?</h5>
              <p class="card-text">Los números mostrados son el porcentaje (%) de veces que se ha jugado un tipo de juego. Estos datos han sido rescatados desde el inicio de los tiempos.</p>
              <div id="donut-example"></div>
            </div>
        </div>
        <div class="card" style="width: 100%">
            <div class="card-header">
              Juego de la semana
            </div>
            <div class="card-body">
              <h5 class="card-title">Muestra las partidas mas jugadas</h5>
              <p class="card-text">Comparativa entre partidas jugadas de tetris, duolingo y memorama.</p>
              <div id="bar-example"></div>
            </div>
        </div>

    </div>
</div>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script>
    new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
        { year: '2011', value: 10 },
        { year: '2013', value: 100 },
        { year: '2015', value: 1200 },
        { year: '2018', value: 10300 },
        { year: '2020', value: 50000 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value']
    });
</script>
<script>
    /*
 * Play with this code and it'll update in the panel opposite.
 *
 * Why not try some of the options above?
 */
Morris.Line({
  element: 'line-example',
  data: [
    { y: '2011', a: 2, b: 1, c: 3, d:0 },
    { y: '2013', a: 20,  b: 15, c: 30, d:30 },
    { y: '2015', a: 300,  b: 350, c: 450, d:30 },
    { y: '2018', a: 10000,  b: 9050, c: 12000, d:200 },
    { y: '2020', a: 20000, b: 8000, c: 35000, d:7000 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b', 'c', 'd'],
  labels: ['Skin Tetris', 'Skin Memorama', 'Dificultad Tetris', 'Dificultad Memorama']
});
</script>

<script>
    /*
 * Play with this code and it'll update in the panel opposite.
 *
 * Why not try some of the options above?
 */
 var gamesPoints =  <?= json_encode($gamesPoints)?>;

Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Memorama", value: gamesPoints.memoramaRecord},
    {label: "Tetris", value: gamesPoints.tetrisRecord}
  ]
});

</script>

<script >
    /*
 * Play with this code and it'll update in the panel opposite.
 *
 * Why not try some of the options above?
 */

      var data = <?= json_encode($pointsTop);?>;
      
      var morrisData = [];
      data = JSON.parse(data).data;
      
      for (var i = 0; i < data.length; i++) {
          morrisData[i]={username: data[i]['username'], points: data[i]['points']};
      }
      
      console.log(morrisData);

      Morris.Bar({
        element: 'bar-example',
        data: morrisData,
        xkey: 'username',
        ykeys: ['points'],
        labels: ['points']
      });


</script>

@endsection
