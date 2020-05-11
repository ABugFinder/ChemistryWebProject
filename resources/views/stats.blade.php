@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="card" style="width: 100%">
          <div class="card-header text-primary" style="font-size:22px;">
            Artículos más comprados
          </div>
          <div class="card-body">
            <h5 class="card-title">Comparativa de artículos preferidos por los usuarios</h5>
            <p class="card-text">Se meustra una línea de popularidad basada en la cantidad de compras anuales que se le atrubuye a un artículo específico.</p>
            <div id="line-example"></div>
          </div>
        </div>
        <div class="card" style="width: 50%">
          <div class="card-header text-primary" style="font-size:22px;">
            Tráfico de datos
          </div>
          <div class="card-body">
            <h5 class="card-title">Veces al día que un usuario utiliza nuestra página</h5>
            <p class="card-text">Se muestran la cantidad de usuarios que se conectan al mes desde el inicio de los tiempos.</p>
            <div id="myfirstchart" style="height:350px;"></div>
          </div>
            
        </div>
        <div class="card" style="width: 50%">
          <div class="card-header text-primary" style="font-size:22px;">
            Juego con más puntos de record
          </div>
          <div class="card-body">
            <h5 class="card-title">Esta gráfica muestra el juego más jugado.</h5>
            <p class="card-text">Se basa en el juego con más puntos acumuados entre todos los usuarios.</p>
            <div id="donut-example"></div>
          </div>
      </div>
      <div class="card" style="width: 100%">
          <div class="card-header text-primary" style="font-size:22px;">
            Top usuarios con más dinero
          </div>
          <div class="card-body">
            <h5 class="card-title">Muestra los 7 usuarios con saldos más perturbadores</h5>
            <p class="card-text">Comparativa entre chemicoins de los usuarios más ricos.</p>
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
        { year: '2018', value: 3950 },
        { year: '2019', value: 15000 },
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

var data = <?= json_encode($purchasesDate);?>;

var morrisData = [];

data = JSON.parse(data);
console.log(data);


for (var i = 0; i < data.length; i++) {
    morrisData[i]={
      date: data[i]['date'], 
      MemoramaMedieval: data[i]['Memorama - Medieval'], 
      TetrisMedieval: data[i]['Tetris - Medieval'], 
      MemoramaCyber: data[i]['Memorama - Cyber'], 
      TetrisCyber: data[i]['Tetris - Cyber'], 
      MemoramaExperto: data[i]['Memorama - Experto'], 
      TetrisExperto: data[i]['Tetris - Experto'], 
      MemoramaExtremo: data[i]['Memorama - Extremo'], 
      TetrisExtremo: data[i]['Tetris - Extremo'], 
    };
}

Morris.Line({
  element: 'line-example',
  data: morrisData,
  xkey: 'date',
  ykeys: [
      'MemoramaMedieval',
      'TetrisMedieval',
      'MemoramaCyber',
      'TetrisCyber',
      'MemoramaExperto',
      'TetrisExperto',
      'MemoramaExtremo',
      'TetrisExtremo'
  ],
  labels: ['Memorama Medieval', 'Tetris Medieval', 'Memorama Cyber', 'Tetris Cyber',
          'Memorama Experto','Tetris Experto','Memorama Extremo','Tetris Extremo']
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

<script>
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
  

  Morris.Bar({
    element: 'bar-example',
    data: morrisData,
    xkey: 'username',
    ykeys: ['points'],
    labels: ['Chemicoins']
  });


</script>

@endsection
