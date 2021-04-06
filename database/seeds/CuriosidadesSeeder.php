<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Curiosidades;

class CuriosidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('curiosidades')->insert([
            'nombre' => 'El elemento más denso',
            'contenido' => 'Sabías que el Osmio. Es el elemento más denso,
                            cuya densidad es 22,6 veces la densidad del agua pura.
                            Esto quiere decir que, a presión atmosférica, un litro de Osmio pesa
                            22,6 kilogramos. Entre los más pesados hay 5 elementos que superan los
                            20 kg por litro como el Neptunio, el Platino y el Iridio.',
            'imagen' => '/images/curiosidadesImages/osmio.jpg'
        ]);

        //2
        DB::table('curiosidades')->insert([
            'nombre' => 'Creación el acero',
            'contenido' => 'Sabías que para crear el acero, se requiere una aleación de hierro
                            y carbono en un porcentaje de este último elemento variable entre el 0,08% y el 2%
                            en masa de su composición.',
            'imagen' => '/images/curiosidadesImages/acero.jpg'
        ]);
        
        //3
        DB::table('curiosidades')->insert([
            'nombre' => 'El rubi',
            'contenido' => 'Sabías que el rubí es un mineral, que pertenece a la familia del corindón
                            cuya composición está hecha mediante el hierro y el cromo.
                            Si su color es rojo se considera gema, pero si esta es morada se le llama balaje.',
            'imagen' => '/images/curiosidadesImages/rubi.jpg'
        ]);

        //4
        DB::table('curiosidades')->insert([
            'nombre' => 'El metal noble',
            'contenido' => 'La plata, el cual es un metal noble, se suele encontrar en la naturaleza
                            como un elemento libre, sin embargo el encontrar este metal, implica lo más probable,
                            que en la veta de mineral que encuentres, esté mezclado con cobre, zinc, plomo y oro.',
            'imagen' => '/images/curiosidadesImages/plata.jpg'
        ]);
        
        //5
        DB::table('curiosidades')->insert([
            'nombre' => 'Litio alcalino',
            'contenido' => 'Sabías que el litio, es el metal alcalino más ligero de todos los metales,
                            también es uno de los metales más usados en el mundo en muchos ámbitos, como;
                            En la industria del vidrio y cerámica, en las baterías de laptops, uso medicinal,
                            entre otros.',
            'imagen' => '/images/curiosidadesImages/litio.jpg'
        ]);
        
        //6
        DB::table('curiosidades')->insert([
            'nombre' => 'El metal atípico ',
            'contenido' => 'El antimonio, es uno de los metales poco abundantes y conflictivos en su composición,
                            debido a que difiere en su comportamiento como los demás metales, este suele ser menos
                            conductivo en su estado sólido, que en su estado líquido, por ello este se le considera
                            raro, sin mencionar que siendo sólido, tiende a ser quebradizo como un cristal
                            muy delgado.',
            'imagen' => '/images/curiosidadesImages/antimonio.jpg'
        ]);

        //7
        DB::table('curiosidades')->insert([
            'nombre' => 'Amanecer Brillante',
            'contenido' => 'Sabías que en la tabla periódica de los elementos, el oro viene representado por las
                            iniciales “Au” que proviene de la palabra en latín Aurum que significa
                            “Amanecer Brillante”',
            'imagen' => '/images/curiosidadesImages/oro.jpg'
        ]);

        //8
        DB::table('curiosidades')->insert([
            'nombre' => 'Cloruro de sodio',
            'contenido' => 'El sodio ocupa el sexto lugar por su abundancia entre todos los elementos de la corteza
                            terrestre, que contiene el 2.83% de sodio en sus formas combinadas. El sodio es, después
                            del cloro, el segundo elemento más abundante en solución en el agua de mar.
            ',
            'imagen' => '/images/curiosidadesImages/sodio.jpg'
        ]);

        //9
        DB::table('curiosidades')->insert([
            'nombre' => 'Gas frutal',
            'contenido' => 'El etileno es un gas producido por la fruta al madurar. 
                            Las naranjas son muy sensibles al etileno y se deterioran pronto.',
            'imagen' => '/images/curiosidadesImages/etileno.jpg'
        ]);

        //10
        DB::table('curiosidades')->insert([
            'nombre' => 'La letra faltante',
            'contenido' => 'En la tabla periódica no hay ninguna “J”. La razón de esta pequeña curiosidad es bastante
                            sencilla: el nombre de los elementos químicos proviene del latín, lengua en la que
                            no existía este carácter.',
            'imagen' => '/images/curiosidadesImages/tablaperiodica.jpg'
        ]);

        //11
        DB::table('curiosidades')->insert([
            'nombre' => 'ejemplo1',
            'contenido' => 'El ununennio se incluirá en el grupo de los metales alcalinos y, aunque sus propiedades
                            todavía son desconocidas, debido a su posición se prevé que sean similares a las de otros metales
                            alcalinos, como el litio, el sodio o el potasio. Es decir, probablemente será muy
                            reactivo con diversas sustancias químicas como el agua o el oxígeno.',
            'imagen' => '/images/curiosidadesImages/unumenium.jpg'
        ]);

        //12
        DB::table('curiosidades')->insert([
            'nombre' => 'El artificial',
            'contenido' => 'El Tecnecio, descubierto en 1937, fue el primer elemento fabricado artificialmente.',
            'imagen' => '/images/curiosidadesImages/tecnecio.jpg'
        ]);

        //13
        DB::table('curiosidades')->insert([
            'nombre' => 'Los cerillos',
            'contenido' => 'Sabías que el fósforo, es un mineral esencial en la vida misma y se encuentra prácticamente
                            en todos los seres vivos, en tu cuerpo el  85% del fósforo se localiza en los huesos y dientes,
                            mientras que el 15% restante está distribuido en los tejidos blandos.',
            'imagen' => '/images/curiosidadesImages/fosforo.jpg'
        ]);

        //14
        DB::table('curiosidades')->insert([
            'nombre' => 'El metal liviano',
            'contenido' => 'El aluminio es uno de los metales más ligeros y su vez más fuertes,
                            esto es debido a su densidad natural, sin embargo para que este sea tan duro como
                            el acero, se requiere técnicas de la forma y cantidad de esta. Y aun asi sera mas ligero
                            que cualquier otro metal.',
            'imagen' => '/images/curiosidadesImages/aluminio.jpg'
        ]);

        //15
        DB::table('curiosidades')->insert([
            'nombre' => 'Explosiones quimicas',
            'contenido' => 'En la fuegos artificiales,los colores de la pirotecnia son causados por la presencia de sales provocados
                            por la combustión de la pólvora y en esa reacción es liberada energía la cual es visible,
                            El color lila es proporcionado por el potasio (K), el anaranjado es dado por el hierro (Fe),
                            el amarillo por el sodio (Na) , el cobre (Cu): verde intenso, el litio (Li) rojo suave, incluso
                            puede parecer rosado.',
            'imagen' => '/images/curiosidadesImages/cohetes.jpg'
        ]);

        //16
        DB::table('curiosidades')->insert([
            'nombre' => 'La era del bronce',
            'contenido' => 'El bronce es un metal producto de la aleación (combinación) entre ciertos porcentajes
                            de cobre, estaño u otros metales. La proporción entre los dos componentes principales
                            determinará el color, la rigidez y el uso del producto resultante.',
            'imagen' => '/images/curiosidadesImages/bronce.jpg'
        ]);

        //17
        DB::table('curiosidades')->insert([
            'nombre' => 'El mas fuerte',
            'contenido' => 'El titanio es el elemento metálico que posee la mayor proporción de dureza-densidad.
                            Es un metal fuerte, con una baja densidad y alta ductilidad, es considerado un metal 
                            joven ,debido a su fecha de descubrimiento.',
            'imagen' => '/images/curiosidadesImages/titanio.jpg'
        ]);

        //18
        DB::table('curiosidades')->insert([
            'nombre' => 'El mineral letal',
            'contenido' => 'El asbesto, también llamado amianto, es el nombre de un grupo de seis minerales metamórficos 
                            fibrosos. Sin embargo, el asbesto representa un peligro para la salud bien conocido. 
                            La inhalación de fibras de asbesto puede conducir a varias afecciones pulmonares graves, 
                            al respecto las autoridades médicas demostraron que los productos relacionados con el asbesto/amianto 
                            provocan asbestosis y cáncer con una elevada mortalidad desde 1906.',
            'imagen' => '/images/curiosidadesImages/asbestos.jpg'
        ]);

        //19
        DB::table('curiosidades')->insert([
            'nombre' => 'Lo esencial en la vida',
            'contenido' => 'Sabías que casi el 99% de la masa del cuerpo humano está formada por seis elementos: 
                            oxígeno, carbono, hidrógeno, nitrógeno, calcio y fósforo. Solo alrededor del 0,85% está
                            compuesto por otros cinco elementos: potasio, azufre, sodio, cloro y magnesio. Los 11 son 
                            necesarios para la vida.',
            'imagen' => '/images/curiosidadesImages/cuerpo.jpg'
        ]);

        //20
        DB::table('curiosidades')->insert([
            'nombre' => 'aeris insula',
            'contenido' => 'El símbolo químico Cu proviene del latín vulgar cuprum, y este del clásico Cyprium, 
                            el uso sustantivado de Cyprius. Es, por tanto, un origen ciertamente sutil, puesto que 
                            su símbolo proviene de un lugar, ya que el término cyprium hace referencia Chipre, 
                            cuya isla era famosa en la antigüedad por sus reservas de cobre.',
            'imagen' => '/images/curiosidadesImages/cobre.jpg'
        ]);
    }
}
