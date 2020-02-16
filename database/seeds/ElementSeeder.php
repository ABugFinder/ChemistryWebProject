<?php

use Illuminate\Database\Seeder;
use App\Element;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $element = Element::create([
            'name' => 'Hidrógeno',
            'symbol' => 'H',
            'atomicNumber' => 1,
            'atomicMass' => 1.00794,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 1,
            'block' => 's',
            'description' => 'El hidrógeno (en griego, de ὕδωρ hýdōr, genitivo ὑδρός hydrós, y γένος génos «que genera o produce agua») es el elemento químico de número atómico 1, representado por el símbolo H. Con una masa atómica de 1,00797, es el más ligero de la tabla periódica de los elementos. Por lo general, se presenta en su forma molecular, formando el gas diatómico H2 en condiciones normales. Este gas es inflamable, incoloro, inodoro, no metálico e insoluble en agua.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Helio',
            'symbol' => 'He',
            'atomicNumber' => 2,
            'atomicMass' => 4.002602,
            'category' => 'Gases nobles',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 's',
            'description' => 'El helio (del griego: ἥλιος [hḗlios] ‘Sol’, por haberse inferido en 1868 su existencia en la atmósfera solar)​ es un elemento químico de número atómico 2, símbolo He y peso atómico estándar de 4,0026. Pertenece al grupo 18 de la tabla periódica de los elementos, ya que al tener el nivel de energía completo presenta las propiedades de un gas noble. Es decir, es inerte (no reacciona) y al igual que estos, es un gas monoatómico incoloro e inodoro que cuenta con el menor punto de ebullición de todos los elementos químicos y solo puede ser licuado bajo presiones muy grandes y no puede ser congelado.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Litio',
            'symbol' => 'Li',
            'atomicNumber' => 3,
            'atomicMass' => 6.941,
            'category' => 'Alcalinos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 's',
            'description' => 'El litio (en griego: λιθίον, ‘piedrecita’)​ es un elemento químico de símbolo Li y número atómico 3. En la tabla periódica, se encuentra en el grupo 1, entre los elementos alcalinos. En su forma pura, es un metal blando, de color blanco plata, que se oxida rápidamente en aire o agua. Su densidad es la mitad de la del agua, siendo el metal y elemento sólido más ligero.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Berilio',
            'symbol' => 'Be',
            'atomicNumber' => 4,
            'atomicMass' => 9.012182,
            'category' => 'Alclinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El berilio es un elemento químico de símbolo Be y número atómico 4. Es un elemento Alcalinotérreo bivalente, tóxico, de color gris, duro, ligero y quebradizo. Se emplea principalmente como endurecedor en aleaciones, especialmente de cobre.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Boro',
            'symbol' => 'B',
            'atomicNumber' => 5,
            'atomicMass' => 10.811,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El boro es un elemento químico de la tabla periódica de los elementos que tiene el símbolo B​ y número atómico 5, su masa es de 10,811. Es un elemento metaloide, semiconductor, trivalente que existe abundantemente en el mineral bórax. Hay dos alótropos del boro; el boro amorfo es un polvo marrón, pero el boro metálico es negro. La forma metálica es dura (9,5 en la escala de Mohs) y es un mal conductor a temperatura ambiente. No se ha encontrado libre en la naturaleza.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Carbono',
            'symbol' => 'C',
            'atomicNumber' => 6,
            'atomicMass' => 12.0107,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 14,
            'block' => 'p',
            'description' => 'El carbono (del latín, carbo, \'carbón\') es un elemento químico con símbolo C, número atómico 6 y masa atómica 12,01. Es un no metal y tetravalente, disponiendo de cuatro electrones para formar enlaces químicos covalentes. Tres isótopos del carbono se producen de forma natural, los estables 12C y 13C y el isótopo radiactivo 14C, que decae con una vida media de unos 5730 años.​ El carbono es uno de los pocos elementos conocidos desde la antigüedad, y es el pilar básico de la química orgánica. Está presente en la Tierra en estado de cuerpo simple (carbón y diamantes), de compuestos inorgánicos (CO2 y CaCO3) y de compuestos orgánicos (biomasa, petróleo y gas natural). También se han sintetizado muchas nuevas estructuras basadas en el carbono: carbón activado, negro de humo, fibras, nanotubos, fullerenos y grafeno.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Nitrógeno',
            'symbol' => 'N',
            'atomicNumber' => 7,
            'atomicMass' => 17.0067,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 15,
            'block' => 'p',
            'description' => 'El nitrógeno es un elemento químico de número atómico 7, símbolo N, su masa atómica es de 14,006 u y que en condiciones normales forma un gas diatómico (nitrógeno diatómico o molecular) que constituye del orden del 78 % del aire atmosférico. En ocasiones es llamado ázoe (antiguamente se usó también Az como símbolo del nitrógeno).',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Oxígeno',
            'symbol' => 'O',
            'atomicNumber' => 8,
            'atomicMass' => 15.9994,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 16,
            'block' => 'p',
            'description' => 'El oxígeno es un elemento químico de número atómico 8 y representado por el símbolo O. Su nombre proviene de las raíces griegas ὀξύς (oxys) («ácido», literalmente «punzante», en referencia al sabor de los ácidos) y –γόνος (-gonos) («productor», literalmente «engendrador»; es decir, "productor de ácidos"​), porque en la época en que se le dio esta denominación se creía, incorrectamente, que todos los ácidos requerían oxígeno para su composición. En condiciones normales de presión y temperatura, dos átomos del elemento se enlazan para formar el dioxígeno, un gas diatómico incoloro, inodoro e insípido con fórmula O2. Esta sustancia constituye una importante parte de la atmósfera y resulta necesaria para sostener la vida terrestre.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Flúor',
            'symbol' => 'F',
            'atomicNumber' => 9,
            'atomicMass' => 18.998403,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 17,
            'block' => 'p',
            'description' => 'El flúor es el elemento químico de número atómico 9 situado en el grupo de los halógenos (grupo 17) de la tabla periódica de los elementos. Su símbolo es F. Es un gas a temperatura ambiente, de color verde pálido, formado por moléculas diatómicas F2. Es el más electronegativo y reactivo de todos los elementos. En forma pura es altamente peligroso, causando graves quemaduras químicas al contacto con la piel.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Neón',
            'symbol' => 'Ne',
            'atomicNumber' => 10,
            'atomicMass' => 20.1797,
            'category' => 'Gases nobles',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 'p',
            'description' => 'El neón es un elemento químico de número atómico 10 y símbolo Ne. Es un gas noble, incoloro, prácticamente inerte, presente en trazas en el aire, pero muy abundante en el universo, que proporciona un tono rojizo característico a la luz de las lámparas fluorescentes en las que se emplea.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Sodio',
            'symbol' => 'Na',
            'atomicNumber' => 11,
            'atomicMass' => 22.98976,
            'category' => 'Alcalinos',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 's',
            'description' => 'El sodio es un elemento químico de símbolo Na (del latín, natrium) con número atómico 11 que fue aislado por sir Humphry Davy en 1807. Es un metal alcalino blando, untuoso, de color plateado, muy abundante en la naturaleza, encontrándose en la sal marina y el mineral halita. Es muy reactivo, arde con llama amarilla, se oxida en presencia de oxígeno y reacciona violentamente con el agua. El sodio está presente en grandes cantidades en el océano en forma iónica. También es un componente de muchos minerales y un elemento esencial para la vida.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Magnesio',
            'symbol' => 'Mg',
            'atomicNumber' => 12,
            'atomicMass' => 24.305,
            'category' => 'Alcalinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El magnesio es el elemento químico de símbolo Mg y número atómico 12. Su masa atómica es de 24,305 u. Es el noveno elemento en abundancia en el orden del  % de la corteza terrestre y el tercero más abundante disuelto en el agua de mar. El ion magnesio es esencial para todas las células vivas. El metal puro no se encuentra en la naturaleza. Una vez producido a partir de las sales de magnesio, este metal alcalino-térreo es utilizado como un elemento de aleación.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Aluminio',
            'symbol' => 'Al',
            'atomicNumber' => 13,
            'atomicMass' => 26.981538,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El aluminio es un elemento químico, de símbolo Al y número atómico 13. Se trata de un metal no ferromagnético. Es el tercer elemento más común encontrado en la corteza terrestre. Los compuestos de aluminio forman el 8 % de la corteza de la tierra y se encuentran presentes en la mayoría de las rocas, de la vegetación y de los animales.En estado natural se encuentra en muchos silicatos (feldespatos, plagioclasas y micas). Este metal se extrae únicamente del mineral conocido con el nombre de bauxita, por transformación primero en alúmina mediante el proceso Bayer y a continuación en aluminio metálico mediante electrólisis.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Silicio',
            'symbol' => 'Si',
            'atomicNumber' => 14,
            'atomicMass' => 28.085,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 14,
            'block' => 'p',
            'description' => 'El silicio (del latín: sílex) es un elemento químico metaloide, número atómico 14 y situado en el grupo 14 de la tabla periódica de los elementos de símbolo Si.​ Es el segundo elemento más abundante en la corteza terrestre (25,7 % en peso)​ después del oxígeno. Se presenta en forma amorfa y cristalizada; el primero es un polvo parduzco, más activo que la variante cristalina, que se presenta en octaedros de color azul grisáceo y brillo metálico.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Fósforo',
            'symbol' => 'P',
            'atomicNumber' => 15,
            'atomicMass' => 30.973762,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 15,
            'block' => 'p',
            'description' => 'El fósforo es un elemento químico de número atómico 15 y símbolo P. El nombre proviene del griego φώς [fos] ‘luz’ y φόρος [foros] ‘portador’. Es un no metal multivalente perteneciente al grupo del nitrógeno (Grupo 15 (VA): nitrogenoideos) que se encuentra en la naturaleza combinado en fosfatos inorgánicos y en organismos vivos pero nunca en estado fundamental. Es muy reactivo y se oxida espontáneamente en contacto con el oxígeno atmosférico emitiendo luz.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Azufre',
            'symbol' => 'S',
            'atomicNumber' => 16,
            'atomicMass' => 32.065,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 16,
            'block' => 'p',
            'description' => 'El azufre es un elemento químico de número atómico 16 y símbolo S (del latín sulphur). Es un no metal abundante con un color amarillo característico​. Dicho elemento es generado en estrellas masivas en las que predominan temperaturas que provocan la fusión entre un núcleo de silicio y otro de helio en un proceso denominado nucleosíntesis de supernovas.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cloro',
            'symbol' => 'Cl',
            'atomicNumber' => 17,
            'atomicMass' => 35.453,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 17,
            'block' => 'p',
            'description' => 'El cloro es un elemento químico de número atómico 17 situado en el grupo de los halógenos (grupo VIIA) de la tabla periódica de los elementos. Su símbolo es Cl. En condiciones normales y en estado puro forma dicloro: un gas tóxico amarillo-verdoso formado por moléculas diatómicas (Cl2) unas 2,5 veces más pesado que el aire, de olor desagradable y tóxico. Es un elemento abundante en la naturaleza y se trata de un elemento químico esencial para muchas formas de vida.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Argón',
            'symbol' => 'Ar',
            'atomicNumber' => 18,
            'atomicMass' => 39.948,
            'category' => 'Gases nobles',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 'p',
            'description' => 'El argón es un elemento químico de número atómico 18 y símbolo Ar. Es el tercero de los gases nobles, incoloro e inerte como ellos, constituye el 0,934 % del aire seco. Su nombre proviene del griego ἀργός [argos], que significa inactivo (debido a que no reacciona).',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Potasio',
            'symbol' => 'K',
            'atomicNumber' => 19,
            'atomicMass' => 39.0983,
            'category' => 'Alcalinos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 'p',
            'description' => 'El potasio es un elemento químico de la tabla periódica cuyo símbolo químico es K (del latín Kalium y del árabe. القلية, DMG al-qalya, "ceniza de plantas"), cuyo número atómico es 19. Es un metal alcalino de color blanco-plateado, que abunda en la naturaleza en los elementos relacionados con el agua salada y otros minerales. Se oxida rápidamente en el aire, es muy reactivo, especialmente en agua, y se parece químicamente al sodio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Calcio',
            'symbol' => 'Ca',
            'atomicNumber' => 20,
            'atomicMass' => 40.078,
            'category' => 'Alcalinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El calcio es un elemento químico, de símbolo Ca y de número atómico 20. Su masa atómica es 40,078 u. El calcio es un metal blando, grisáceo, y es el quinto más abundante en masa de la corteza terrestre. También es el ion más abundante disuelto en el agua de mar, tanto como por su molaridad y como por su masa, después del sodio, cloruros, magnesio y sulfatos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Escandio',
            'symbol' => 'Sc',
            'atomicNumber' => 21,
            'atomicMass' => 44.955910,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 3,
            'block' => 'd',
            'description' => 'El escandio es un elemento químico de la tabla periódica cuyo símbolo es Sc y su número atómico es 21. Es un metal de transición que se encuentra en minerales de Escandinavia y que se clasifica con frecuencia entre los lantánidos por sus similitudes con ellos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Titanio',
            'symbol' => 'Ti',
            'atomicNumber' => 22,
            'atomicMass' => 47.867,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 4,
            'block' => 'd',
            'description' => 'El titanio es un elemento químico de símbolo Ti y número atómico 22 que se sitúa en el grupo 4 de la tabla periódica de los elementos. Es un metal de transición de color gris, baja densidad y gran dureza. Es muy resistente a la corrosión por agua del mar, agua regia y cloro. Fue descubierto independientemente en 1791 por William Gregor en una mina de Cornwall, Gran Bretaña, y en 1795 por Martin Heinrich Klaproth, que lo nombró «titanio» por los titanes de la mitología griega. Este elemento abunda en depósitos de minerales, principalmente en forma de óxidos como el rutilo y la ilmenita, ampliamente distribuidos en la corteza terrestre y la litosfera; también se encuentra en los seres vivos, cuerpos de agua y objetos extraterrestres.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Vanadio',
            'symbol' => 'V',
            'atomicNumber' => 23,
            'atomicMass' => 50.9415,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 5,
            'block' => 'd',
            'description' => 'El vanadio es un elemento químico de número atómico 23 situado en el grupo 5 de la tabla periódica de los elementos. Su símbolo es V. Es un metal dúctil, blando y poco abundante. Se encuentra en distintos minerales y se emplea principalmente en algunas aleaciones. El nombre procede de la diosa de la belleza Vanadis en la mitología escandinava. Es un metal suave, de color blanco agrisado, maleable y de transición dúctil. La formación de una capa de óxido del metal estabiliza al elemento contra la oxidación.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cromo',
            'symbol' => 'Cr',
            'atomicNumber' => 24,
            'atomicMass' => 51.9961,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 6,
            'block' => 'd',
            'description' => 'El cromo es un elemento químico de número atómico 24 que se encuentra en el grupo 6 de la tabla periódica de los elementos. Su símbolo es Cr. Es un metal que se emplea especialmente en metalurgia. Su nombre cromo (derivado del griego chroma, ‘color’) se debe a los distintos colores que presentan sus compuestos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Manganeso',
            'symbol' => 'Mn',
            'atomicNumber' => 25,
            'atomicMass' => 54.938049,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 7,
            'block' => 'd',
            'description' => 'El manganeso es un elemento químico de número atómico 25 situado en el grupo 7 de la tabla periódica de los elementos y se simboliza como Mn. Se encuentra como elemento libre en la naturaleza, a menudo en combinación con el hierro y en muchos minerales. Como elemento libre, el manganeso es un metal con aleación de metales industriales con importantes usos, sobre todo en los aceros inoxidables.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Hierro',
            'symbol' => 'Fe',
            'atomicNumber' => 26,
            'atomicMass' => 55.847,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 8,
            'block' => 'd',
            'description' => 'El hierro o fierro es un elemento químico de número atómico 26 situado en el grupo 8, periodo 4 de la tabla periódica de los elementos. Su símbolo es Fe (del latín fĕrrum)1​ y tiene una masa atómica de 55,847 u.Este metal de transición es el cuarto elemento más abundante en la corteza terrestre, representando un 5 % y, entre los metales, solo el aluminio es más abundante, y es el primero más abundante en masa planetaria, debido a que el planeta, en su núcleo, concentra la mayor masa de hierro nativo, equivalente a un 70 %. El núcleo de la Tierra está formado principalmente por hierro y níquel en forma metálica, generando al moverse un campo magnético. Ha sido históricamente muy importante, y un período de la historia recibe el nombre de Edad de Hierro. En cosmología, es un metal muy especial, pues es el metal más pesado que puede ser producido por la fusión en el núcleo de estrellas masivas; los elementos más pesados que el hierro solo pueden crearse en supernovas.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cobalto',
            'symbol' => 'Co',
            'atomicNumber' => 27,
            'atomicMass' => 58.9332,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 9,
            'block' => 'd',
            'description' => 'El cobalto (del alemán kobalt, voz derivada de kobolds, los "gnomos" que, según los mineros de Sajonia de la Edad Media, eran espíritus de la tierra que tenían embrujado el mineral, por lo que, aunque parecía mena de cobre, no producía este elemento con el tratamiento habitual​) es un elemento químico de número atómico 27 y símbolo Co situado en el grupo 9 de la tabla periódica de los elementos.            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Níquel',
            'symbol' => 'Ni',
            'atomicNumber' => 28,
            'atomicMass' => 58.6934,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 10,
            'block' => 'd',
            'description' => 'El níquel es un elemento químico cuyo número atómico es 28 y su símbolo es Ni, situado en el grupo 10 de la tabla periódica de los elementos. Es un metal de transición de color blanco con un ligerísimo tono amarillo, conductor de la electricidad y del calor, muy dúctil y maleable por lo que se puede laminar, pulir y forjar fácilmente, y presentando ferromagnetismo a temperatura ambiental. Es otro de los metales muy densos como el hierro, iridio y osmio. Se encuentra en distintos minerales, en meteoritos (aleado con hierro) y, en principio, hay níquel en el interior de la Tierra principalmente en su núcleo, donde se trata del segundo metal más abundante por detrás del hierro, metal con el que comparte numerosas características similares.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cobre',
            'symbol' => 'Cu',
            'atomicNumber' => 29,
            'atomicMass' => 63.546,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 11,
            'block' => 'd',
            'description' => 'El cobre (del latín cuprum, y este del griego kypros, Chipre), cuyo símbolo es Cu, es el elemento químico de número atómico 29. Se trata de un metal de transición de color rojizo y brillo metálico que, junto con la plata y el oro, forma parte de la llamada familia del cobre, se caracteriza por ser uno de los mejores conductores de electricidad (el segundo después de la plata). Gracias a su alta conductividad eléctrica, ductilidad y maleabilidad, se ha convertido en el material más utilizado para fabricar cables eléctricos y otros elementos eléctricos y componentes electrónicos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Zinc',
            'symbol' => 'Zn',
            'atomicNumber' => 30,
            'atomicMass' => 65.38,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 12,
            'block' => 'd',
            'description' => 'El zinc​ (del alemán Zink), también escrito cinc, es un elemento químico esencial de número atómico 30 y símbolo Zn, situado en el grupo 12 de la tabla periódica de los elementos. La etimología de zinc parece que viene del alemán Zink, este del Zinken (en español pico, diente), para indicar el aspecto con filos dentados del mineral calamina, luego fue asumido para el metal obtenido a partir de él,aunque otras fuentes consideran que viene de la palabra persa para piedra. En el español, las variantes gráficas «zinc» y «cinc» son ambas aceptadas como válidas. Sin embargo, la forma con z, «zinc», es la más coherente con el origen de la palabra y, por tanto, con su símbolo químico internacional (Zn).',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Galio',
            'symbol' => 'Ga',
            'atomicNumber' => 31,
            'atomicMass' => 69.723,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El galio es un elemento químico de la tabla periódica de número atómico 31 y símbolo Ga. El galio es un metal blando, grisáceo en estado líquido y plateado brillante al solidificar, sólido deleznable a bajas temperaturas que funde a temperaturas cercanas a la del ambiente como, el cesio, mercurio y rubidio e incluso cuando se sostiene en la mano por su bajo punto de fusión (29,7646 °C).            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Germnio',
            'symbol' => 'Ge',
            'atomicNumber' => 32,
            'atomicMass' => 72.64,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 14,
            'block' => 'p',
            'description' => 'El germanio (antiguamente llamado eka-silicio) es un elemento químico con número atómico 32, y símbolo Ge perteneciente al período 4 de la tabla periódica de los elementos.Es un semimetal, de color blanco grisáceo lustroso, quebradizo, que conserva el brillo a temperaturas ordinarias. Presenta la misma estructura cristalina que el diamante y resiste a los ácidos y álcalis. Forma gran número de compuestos órganos metálicos y es un importante material semiconductor utilizado en transistores y foto detectores. A diferencia de la mayoría de semiconductores, el germanio tiene una pequeña banda prohibida (band gap) por lo que responde de forma eficaz a la radiación infrarroja y puede usarse en amplificadores de baja intensidad.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Arsénico',
            'symbol' => 'As',
            'atomicNumber' => 33,
            'atomicMass' => 74.92160,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 15,
            'block' => 'p',
            'description' => 'El arsénico es un elemento químico de la tabla periódica que pertenece al grupo de los metaloides, también llamados semimetales; se puede encontrar de diversas formas aunque raramente se encuentra en estado sólido. Se conoce desde la antigüedad y se reconoce como extremadamente tóxico. A presión atmosférica el arsénico sublima a 613 °C. Es un elemento esencial para la vida y su deficiencia puede dar lugar a diversas complicaciones; sin embargo, no se conoce con precisión la función biológica.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Selenio',
            'symbol' => 'Se',
            'atomicNumber' => 34,
            'atomicMass' => 78.96,
            'category' => 'Otros no metales',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 16,
            'block' => 'p',
            'description' => 'El selenio es un elemento químico de la tabla periódica cuyo símbolo es Se y su número atómico 34. Pertenece a la familia de los no metales.El selenio se puede encontrar en varias formas alotrópicas. El selenio amorfo existe en tres formas, la vítrea, negra, obtenida al enfriar rápidamente el selenio líquido, funde a 180 °C y tiene una densidad de 4,28 g/cm3; la roja, coloidal, se obtiene en reacciones de reducción; el selenio gris cristalino de estructura hexagonal, la forma más común, funde a 220,5 °C y tiene una densidad de 4,81 g/cm3; y la forma roja, de estructura monoclínica, funde a 221 °C y tiene una densidad de 4,39 g/cm3. Es insoluble en agua y alcohol, ligeramente soluble en disulfuro de carbono y soluble en éter.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Bromo',
            'symbol' => 'Br',
            'atomicNumber' => 35,
            'atomicMass' => 79.904,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 17,
            'block' => 'p',
            'description' => 'El bromo (también llamado antaño fuego líquido) es un elemento químico de número atómico 35 situado en el grupo de los halógenos (grupo VII A) de la tabla periódica de los elementos. Su símbolo es Br. El bromo a temperatura ambiente es un líquido rojo, volátil y denso. Su reactividad es intermedia entre el cloro y el yodo. En estado líquido es peligroso para el tejido humano y sus vapores irritan los ojos y la garganta.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Kriptón',
            'symbol' => 'Kr',
            'atomicNumber' => 36,
            'atomicMass' => 83.80,
            'category' => 'Gases nobles',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 'p',
            'description' => 'El kriptón o criptón​ es un elemento químico de la tabla periódica cuyo símbolo es Kr y su número atómico es 36. El kriptón es un gas noble inodoro e insípido de poca reactividad caracterizado por un espectro de líneas verde y rojo-naranja muy brillantes. Es uno de los productos de la fisión nuclear del uranio. El kriptón sólido es blanco, de estructura cristalina cúbica centrada en las caras al igual que el resto de gases nobles.            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Rubidio',
            'symbol' => 'Rb',
            'atomicNumber' => 37,
            'atomicMass' => 85.4678,
            'category' => 'Alaclinos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 's',
            'description' => 'El rubidio es un elemento químico de la tabla periódica cuyo símbolo es el Rb y su número atómico es 37. El rubidio es un metal alcalino blando, de color plateado blanco brillante que empaña rápidamente al aire, muy reactivo. Al igual que los demás elementos del grupo 1 puede arder espontáneamente en aire con llama de color violeta amarillento, reacciona violentamente con el agua desprendiendo hidrógeno y forma amalgama con mercurio. Puede formar aleaciones con oro,los demás metales alcalinos, y alcalinotérreos, antimonio y bismuto.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Estroncio',
            'symbol' => 'Sr',
            'atomicNumber' => 38,
            'atomicMass' => 87.62,
            'category' => 'Alcalinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El estroncio es un elemento químico de la tabla periódica cuyo símbolo es Sr y su número atómico es 38. El estroncio es un metal blando de color plateado brillante, algo maleable, también alcalino térreo, que rápidamente se oxida en presencia de aire adquiriendo un tono amarillento por la formación de óxido, por lo que debe conservarse sumergido en parafina. Debido a su elevada reactividad el metal se encuentra en la naturaleza combinado con otros elementos formando compuestos. Reacciona rápidamente con el agua liberando hidrógeno molecular para formar el hidróxido de estroncio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Itrio',
            'symbol' => 'Y',
            'atomicNumber' => 39,
            'atomicMass' => 88.90585,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 3,
            'block' => 'd',
            'description' => 'El itrio o ytrio es un elemento químico de la tabla periódica cuyo símbolo es Y y su número atómico es 39. Su peso atómico es 88,905. Es una tierra rara de transición del grupo IIIB. Es un metal plateado de transición, común en los minerales de tierras raras. Dos de sus compuestos se utilizan para hacer el color rojo de los diodos luminiscentes o ledes, usados en los visualizadores (como los televisores en color de rayos catódicos o CRT).',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Circonio',
            'symbol' => 'Zr',
            'atomicNumber' => 40,
            'atomicMass' => 91.224,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 4,
            'block' => 'd',
            'description' => 'El circonio o zirconio es un elemento químico de número atómico 40 y peso atómico 91.224. Situado en el grupo 4 de la tabla periódica de los elementos. Su símbolo es Zr. El nombre de circonio se toma del mineral circón, la fuente más importante de circonio, y que deriva de la palabra persa "zargun - زرگون", que significa "dorado". Es un metal de transición brillante, de color blanco grisáceo, duro, resistente a la corrosión, de apariencia similar al acero. Los minerales más importantes en los que se encuentra son el circón (ZrSiO4) y la badeleyita (ZrO2), aunque debido al gran parecido entre el circonio y el hafnio (no hay otros elementos que se parezcan tanto entre sí) realmente estos minerales son mezclas de los dos; los procesos geológicos no han sido capaces de separarlos. Se utiliza sobre todo en reactores nucleares (por su baja sección de captura de neutrones). También se emplea como refractario y opacificador, y en pequeñas cantidades como agente de aleación por su fuerte resistencia a la corrosión.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Niobio',
            'symbol' => 'Nb',
            'atomicNumber' => 41,
            'atomicMass' => 92.90638,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 5,
            'block' => 'd',
            'description' => 'El niobio es un elemento químico de número atómico 41 situado en el grupo 5 de la tabla periódica de los elementos. Se simboliza como Nb. Es un metal de transición dúctil, gris, blando y poco abundante. Se encuentra en el mineral niobita, también llamado columbita, y se utiliza en aleaciones. Se emplea principalmente aleado en aceros, confiriéndoles una alta resistencia. El niobio tiene propiedades físicas y químicas similares a las del elemento tantalio, y los dos son, por lo tanto, difíciles de distinguir. El químico inglés Charles Hatchett informó de un nuevo elemento similar al tántalo en 1801 y lo llamó columbio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Molibdeno',
            'symbol' => 'Mo',
            'atomicNumber' => 42,
            'atomicMass' => 95.94,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 6,
            'block' => 'd',
            'description' => 'El molibdeno es un elemento químico de número atómico 42 que se encuentra en el grupo 6 de la tabla periódica de los elementos y se simboliza como Mo. El molibdeno es un metal esencial desde el punto de vista biológico y se utiliza sobre todo en aceros aleados. Es un metal plateado, tiene el sexto punto de fusión más alto de cualquier elemento. El molibdeno no se produce como el metal libre en la naturaleza, sino en varios estados de oxidación en los minerales. Industrialmente, los compuestos de molibdeno se emplean en aplicaciones de alta presión y alta temperatura, como pigmentos y catalizadores.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Tecnesio',
            'symbol' => 'Tc',
            'atomicNumber' => 43,
            'atomicMass' => 98.9063,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 7,
            'block' => 'd',
            'description' => 'El tecnecio es el más ligero de los elementos químicos que no cuentan con isótopos estables y el primer elemento sintético que se encuentra en la tabla periódica. Su número atómico es el 43 y su símbolo es Tc. Las propiedades químicas de este metal de transición cristalino de color gris plateado son intermedias a las del renio y las del manganeso. Su isómero nuclear 99mTc, de muy corta vida y emisor de rayos gamma, se usa en medicina nuclear para efectuar una amplia variedad de pruebas diagnósticas. El 99Tc se usa como fuente de partículas beta libre de la emisión de rayos gamma. El anión pertecnetato (TcO4-) se emplea como inhibidor de corrosión anódica para aceros.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Rutenio',
            'symbol' => 'Ru',
            'atomicNumber' => 44,
            'atomicMass' => 101.07,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 8,
            'block' => 'd',
            'description' => 'El rutenio es un elemento químico de número atómico 44 situado en el grupo 8 de la tabla periódica de los elementos. Su símbolo es Ru. Es un metal de transición, poco abundante, del grupo del platino. Se encuentra normalmente en minas de platino y se emplea como catalizador en algunas aleaciones de platino. Es un metal blanco duro y frágil; presenta cuatro formas cristalinas diferentes. Se disuelve en bases fundidas, y no es atacado por ácidos a temperatura ambiente. A altas temperaturas reacciona con halógenos y con hidróxidos. Se puede aumentar la dureza del paladio y el platino con pequeñas cantidades de rutenio. Igualmente, la adición de pequeñas cantidades aumenta la resistencia a la corrosión del titanio de forma importante. Se ha encontrado una aleación de rutenio y molibdeno superconductora a 10,6 K.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Rodio',
            'symbol' => 'Rh',
            'atomicNumber' => 45,
            'atomicMass' => 102.90550,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 9,
            'block' => 'd',
            'description' => 'El rodio es un elemento químico de número atómico 45 situado en el grupo 9 de la tabla periódica de los elementos. Su símbolo es Rh. Es un metal de transición, poco abundante, del grupo del platino. Se encuentra normalmente en minas de platino y se emplea como catalizador en algunas aleaciones de platino. El rodio es un metal dúctil de color blanco plateado. No se disuelve fácilmente en ácidos, aunque finamente dividido sí lo hace en agua regia, y también en ácido sulfúrico (H2SO4) concentrado y caliente. El rodio tiene un punto de fusión mayor que el del platino y una densidad menor.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Paladio',
            'symbol' => 'Pd',
            'atomicNumber' => 46,
            'atomicMass' => 106.42,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 10,
            'block' => 'd',
            'description' => 'El paladio es un elemento químico de número atómico 46 situado en el grupo 10 de la tabla periódica de los elementos. Su símbolo es Pd. Es un metal de transición del grupo del platino, blando, dúctil, maleable y poco abundante. Se parece químicamente al platino y se extrae de algunas minas de cobre y níquel. Se emplea principalmente como catalizador y en joyería. El paladio es un metal raro y brillante de color blanco plateado que fue descubierto en 1803 por William Hyde Wollaston, y lleva el nombre del asteroide Palas, el cual recibe también su nombre de la diosa Palas.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Plata',
            'symbol' => 'Ag',
            'atomicNumber' => 47,
            'atomicMass' => 107.8683,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 11,
            'block' => 'd',
            'description' => 'La plata es un elemento químico de número atómico 47 situado en el grupo 11 de la tabla periódica de los elementos. Su símbolo es Ag (procede del latín: argentum, "blanco" o "brillante"). Es un metal de transición blanco, brillante, blando, dúctil y maleable. En la naturaleza se encuentra como parte de distintos minerales (generalmente en forma de sulfuro) o como plata libre. Es muy común en la naturaleza, de la que representa una parte en 5 mil de corteza terrestre. La mayor parte de su producción se obtiene como subproducto del tratamiento de las minas de cobre, zinc, plomo y oro.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cadmio',
            'symbol' => 'Cd',
            'atomicNumber' => 48,
            'atomicMass' => 112.411,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 12,
            'block' => 'd',
            'description' => 'El cadmio es un elemento químico de número atómico 48 situado en el grupo 12 de la tabla periódica de los elementos. Su símbolo es Cd. Es un metal pesado, blando, blanco azulado, relativamente poco abundante. Es uno de los metales más tóxicos. Normalmente se encuentra en menas de zinc y se emplea especialmente en pilas. El cadmio (en latín, cadmia, y en griego kadmeia, que significa "calamina", el nombre que recibía antiguamente el carbonato de zinc) fue descubierto en Alemania en 1817 por Friedrich Strohmeyer. Lo encontró como impureza de algunas muestras de carbonato de zinc. Strohmeyer observó que esas muestras, en particular, cambiaban de color al calentarlas, lo cual no le ocurría al carbonato de zinc puro. Strohmeyer fue lo suficientemente persistente para continuar la observación consiguiendo aislar el elemento mediante el tueste y posterior reducción del sulfuro.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Indio',
            'symbol' => 'In',
            'atomicNumber' => 49,
            'atomicMass' => 114.818,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El indio es un elemento químico de número atómico 49 situado en el grupo 13 de la tabla periódica de los elementos. Su símbolo es In. Es un metal poco abundante, maleable, fácilmente fundible, químicamente similar al aluminio y al galio, pero más parecido al zinc (de hecho, la principal fuente de obtención de este metal es a partir de los minerales de zinc). Su principal aplicación está en las pantallas táctiles, en forma de óxido de indio y de estaño.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Estaño',
            'symbol' => 'Sn',
            'atomicNumber' => 50,
            'atomicMass' => 118.710,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 14,
            'block' => 'p',
            'description' => 'El estaño es un elemento químico de símbolo Sn (del latín stannum) y número atómico 50. Está situado en el grupo 14 de la tabla periódica de los elementos. Se conocen 10 isótopos estables. Su principal mena es la casiterita. Es un metal normalmente blanco (o gris, gracias a una variante alotrópica que se discute a continuación). Es maleable, y se oxida de forma superficial a temperatura ambiente. Este efecto lo hace resistente a la corrosión mediante pasivación. Por tanto se utiliza para recubrir otros metales, protegiéndolos así de la corrosión. Se encuentra además en muchas aleaciones. Al doblar una barra de este metal se produce un sonido característico llamado grito del estaño, producido por la fricción de los cristales que la componen.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Antimonio',
            'symbol' => 'Sb',
            'atomicNumber' => 51,
            'atomicMass' => 	121.760,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 15,
            'block' => 'p',
            'description' => 'El antimonio es un elemento químico que forma parte del grupo de los metaloides de número atómico 51 situado en el grupo 15 de la tabla periódica de los elementos. Su nombre y abreviatura (Sb) procede de estibio, término hoy ya en desuso, que a su vez procede del latín stibium ("Banco de arena gris brillante"). Su principal mena es la estibina. Este elemento semimetálico tiene cuatro formas alotrópicas. En su forma estable es un metal blanco azulado. El hombre negro y el amarillo son formas no metálicas inestables. Principalmente se emplea en aleaciones metálicas y algunos de sus compuestos para dar resistencia contra el pego, en pinturas, cerámicas, esmaltes, vulcanización del caucho y fuegos artificiales.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Telurio',
            'symbol' => 'Te',
            'atomicNumber' => 52,
            'atomicMass' => 127.6,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 16,
            'block' => 'p',
            'description' => 'El telurio o teluro​ es un elemento químico cuyo símbolo es Te y su número atómico es 52. Es un semimetal que se encuentra en el grupo 16 y el periodo 5 de la Tabla periódica de los elementos. Fue descubierto en 1782 en minerales de oro por Franz-Joseph Müller von Reichenstein, inspector jefe de minas en Transilvania (Rumanía), denominándolo metallum problematicum. En principio se confundió el telurio con el antimonio. Fue Martin Heinrich Klaproth, en 1798, quien examinó el «metal problemático» de Müller y lo llamó telurio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Yodo',
            'symbol' => 'I',
            'atomicNumber' => 53,
            'atomicMass' => 126.90447,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 17,
            'block' => 'p',
            'description' => 'El yodo o iodo​ es un elemento químico de número atómico 53 situado en el grupo de los halógenos (grupo 17) de la tabla periódica de los elementos. Su símbolo es I (del griego ιώδης, iodes, "violeta"). Este elemento puede encontrarse en forma molecular como yodo diatómico. Es un oligoelemento y se emplea principalmente en medicina, fotografía y como colorante. Químicamente, el yodo es el halógeno menos reactivo y electronegativo. Como con todos los otros halógenos (miembros del Grupo XVII en la tabla periódica), el yodo forma moléculas diatómicas y por ello forma el diyodo de fórmula molecular I2.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Xenón',
            'symbol' => 'Xe',
            'atomicNumber' => 54,
            'atomicMass' => 131.293,
            'category' => 'Gases nobles',
            'elementType' => 'No metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 'p',
            'description' => 'El xenón es un elemento químico de la tabla periódica cuyo símbolo es Xe y su número atómico el 54. Gas noble inodoro, muy pesado, incoloro, el xenón está presente en la atmósfera terrestre solo en trazas y fue parte del primer compuesto de gas noble sintetizado. El xenón es un miembro de los elementos de valencia ocho llamados gases nobles o inertes. La palabra "inerte" ya no se usa para describir esta serie química, dado que algunos elementos de valencia cero forman compuestos. En un tubo lleno de gas xenón, se emite un brillo azul cuando se le excita con una descarga eléctrica. Se ha conseguido xenón metálico aplicándole presiones de varios cientos de kilobares. El xenón también puede formar clatratos con agua cuando sus átomos quedan atrapados en un entramado de moléculas de oxígeno.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cesio',
            'symbol' => 'Cs',
            'atomicNumber' => 55,
            'atomicMass' => 132.90545,
            'category' => 'Alcalinos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 's',
            'description' => 'El cesio es el elemento químico con número atómico 55 y peso atómico de 132,905 uma. Su símbolo es Cs, y es el más pesado de los metales alcalinos en el grupo IA de la tabla periódica, a excepción del francio (hasta febrero de 2007); se encuentran en componentes no orgánicos. El cesio fue descubierto por Robert Bunsen y por Gustav Kirchhoff en el año 1860 mediante el uso del espectroscopio, al encontrar dos líneas brillantes de color azul en el espectro del carbonato de cesio y del cloruro de cesio. Dichas sales de cesio fueron aisladas por Robert Bunsen, precipitándolas en el agua mineral.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Bario',
            'symbol' => 'Ba',
            'atomicNumber' => 56,
            'atomicMass' => 137.327,
            'category' => 'Alcalinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El bario es un elemento químico de la tabla periódica cuyo símbolo es Ba y su número atómico es 56. Metal alcalinotérreo, el bario es el 18.º elemento más común, ocupando una parte de 2.000 de la corteza terrestre. Su masa atómica es 137,34. Su punto de fusión está a 725 °C, su punto de ebullición a 1.640 °C, y su densidad relativa es 3,5. Su principal mena es la baritina. Reacciona con el cobre y se oxida rápidamente en el agua. El elemento es tan reactivo que no existe en estado libre en la naturaleza, aunque también se presenta en forma de férricos o azufres no solubles en agua. Algunos de sus compuestos se consideran diamantes.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Lantano',
            'symbol' => 'La',
            'atomicNumber' => 57,
            'atomicMass' => 138.9055,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El lantano es un elemento químico de la tabla periódica cuyo símbolo es La y su número atómico es 57. Es el primer elemento de la serie de los lantánidos leuri klk .Fue descubierto por el químico sueco Carl Gustaf Mosander en el año 1839. Debe su nombre al verbo griego lanthaneîn (λανθανεῖν), que significa "escondido", ya que el metal se encontraba "escondido" en un mineral de cerio. Mosander descubrió el elemento lantano en el nitrato de cerio impuro. Se extrajo de la tierra (óxido insoluble en agua) lantana (óxido de lantano), tratándola con un ácido fuerte. (Otros elementos lantánidos fueron descubiertos en impurezas de minerales de itrio y de cerio). Es un verdadero elemento LIZR.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Cerio',
            'symbol' => 'Ce',
            'atomicNumber' => 58,
            'atomicMass' => 140.116,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El cerio es un elemento químico de símbolo Ce y número atómico 58. Es uno de los 14 elementos químicos que siguen al lantano en la tabla periódica, denominados por ello lantánidos. El cerio está situado entre el lantano y el praseodimio. Es un metal blando, de color gris metálico similar al hierro, dúctil, que se oxida fácilmente al contacto con el aire y se torna pardo rojizo. El cerio es el más abundante de los elementos de las tierras raras, su abundancia representa solo el 0,0046% en peso de la corteza terrestre, donde aparece disperso en diversos minerales, como la cerita, bastnasita y monacita.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Praseodimio',
            'symbol' => 'Pr',
            'atomicNumber' => 59,
            'atomicMass' => 140.90765,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El praseodimio es un elemento químico de la tabla periódica cuyo símbolo es Pr y su número atómico es 59. Es parte del grupo de tierras raras. Fue descubierto en 1885 por el químico austríaco Carl Auer von Welsbach. El praseodimio es un elemento metálico plateado suave, y pertenece al grupo de los lantánidos. Es algo más resistente a la corrosión en aire que el europio, el lantano, el cerio, o el neodimio, pero desarrolla una capa verde de óxido cuando se rompe o cuando está expuesto al aire, exponiendo más metal a la oxidación. Por esta razón, el praseodimio se debe guardar bajo un aceite mineral ligero o sellar en un cristal.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Neodimio',
            'symbol' => 'Nd',
            'atomicNumber' => 60,
            'atomicMass' => 144.24,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El neodimio es un elemento químico cuyo símbolo es Nd y su número atómico es 60. A la temperatura ambiente, se encuentra en estado sólido. Es parte del grupo de tierras raras. Fue descubierto en 1885 por el químico austríaco Carl Auer von Welsbach. Es una tierra rara que compone el metal de Misch aproximadamente en proporción del 18 %, siendo una de las tierras raras más reactivas. Posee un brillo metálico-plateado y brillante. Oscurece rápidamente al contacto con el aire formando un óxido. Pertenece a la familia de los elementos de transición interna y contiene en su forma estable 60 electrones y su isótopo más conocido es Nd-142.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Prometio',
            'symbol' => 'Pm',
            'atomicNumber' => 61,
            'atomicMass' => 145,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El prometio es un elemento químico de la tabla periódica cuyo símbolo es Pm y su número atómico es 61. Algún tiempo se le denominó ilinio (por Illinois). Aunque, tras la observación de ciertas líneas espectrales, algunos científicos han reclamado haber descubierto este elemento en la naturaleza, nadie ha podido aislarlo de sustancias naturales.En 1902, Branner predijo la existencia de este elemento. Diversos grupos adujeron haberlo obtenido, pero -debido a la dificultad para separar el prometio de otros elementos- no pudieron confirmar tales descubrimientos. Jacob A. Marinsky, Lawrence E. Glendenin y Charles D. Coryell, en 1944, probaron la existencia del prometio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Samario',
            'symbol' => 'Sm',
            'atomicNumber' => 62,
            'atomicMass' => 150.35,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El samario es un elemento químico de símbolo Sm y número atómico 62. Presenta una estructura cristalina romboedral, una masa atómica de 150,35 y una densidad de 7,35 g/cm3. El samario fue descubierto en 1853 por el químico suizo Jean Charles Galissard de Marignac y aislado en 1879 por el químico Francés Paul Emile Lecoq de Boisbaudran a partir del mineral samarskita. El mineral se encontró inicialmente en los montes Urales y el nombre del mineral y el elemento fue colocado en honor a Samarski, un coronel ruso funcionario de minas.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Europio',
            'symbol' => 'Eu',
            'atomicNumber' => 63,
            'atomicMass' => 151.964,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El europio es un elemento químico de la tabla periódica cuyo símbolo es Eu y su número atómico es 63. Fue descubierto en 1890 por Paul Emile Lecoq de Boisbaudran y aislado por primera vez por Eugène Demarçay, quien le dio su actual nombre, en 1901. Debe su nombre al continente europeo. El europio es el más reactivo de todos los elementos de tierras raras. Es peligroso en el ambiente de trabajo, debido al hecho de que los vapores y los gases pueden ser inhalados con el aire. Esto puede causar embolias pulmonares, especialmente por exposiciones a largo plazo. También puede ser una amenaza para el hígado cuando se acumula en el cuerpo humano.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Galodinio',
            'symbol' => 'Gd',
            'atomicNumber' => 64,
            'atomicMass' => 157.25,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El gadolinio es un elemento químico de la tabla periódica cuyo símbolo es Gd y cuyo número atómico es 64. Es un metal raro de color blanco plateado, es maleable y dúctil. Solo se encuentra en la naturaleza de forma combinada (sal). Puesto que la temperatura de Curie del gadolinio es 292 K (18,85 °C) su magnetismo dependerá de la temperatura ambiente. Por encima de dicha temperatura será paramagnético, y ferromagnético por debajo.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Terbio',
            'symbol' => 'Tb',
            'atomicNumber' => 65,
            'atomicMass' => 158.92534,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El terbio es un elemento químico de la tabla periódica cuyo símbolo es Tb, sólido metálico de color blanco y brillo plateado. Su número atómico es 65, con una masa atómica de 158,9. Tiene una densidad de 8,3 g/cm3. Con un punto de fusión de 1.360 °C y un punto de ebullición de 3.041 °C. Es un metal de transición interna de la familia de los lantánidos del Sistema Periódico. Se encuentra habitualmente como óxido en las tierras raras. Forma sales trivalentes de color blanco cuyas soluciones son incoloras. Su concentración en la corteza terrestre es de 0,09 ppm.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Disprosio',
            'symbol' => 'Dy',
            'atomicNumber' => 66,
            'atomicMass' => 162.5,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El disprosio es un elemento químico cuyo símbolo es Dy y su número atómico es 66. Es un metal de transición de color blanco plata, incluido en el grupo de los lantánidos o tierras raras. Fue identificado por primera vez en 1886 por Paul Émile Lecoq de Boisbaudran, pero no fue posible obtener una muestra pura hasta la década de 1950, con el método de intercambio iónico. En la naturaleza el disprosio se encuentra formado por 7 isótopos, y no existe en la corteza terrestre en forma aislada sino en compuestos junto con otros lantánidos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Holmio',
            'symbol' => 'Ho',
            'atomicNumber' => 67,
            'atomicMass' => 164.9304,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El holmio es un elemento químico de la tabla periódica cuyo símbolo es Ho y su número atómico es 67. El holmio es un elemento químico cuyo nombre deriva del nombre en Latín de la ciudad de Estocolmo, Holmia. Fue descubierto por Marc Delafontaine y Jacques-Louis Soret, quienes en 1878 observaron las inusuales bandas de absorción espectrográficas de un elemento entonces desconocido. Poco más tarde en ese mismo año, Per Teodor Cleve, también conocido como Tzintzuni Cleve, descubrió también el elemento en forma independiente mientras trabajaba con óxido de erbio. Cleve eliminó todos los contaminantes entonces conocidos del óxido de erbio usando el método desarrollado por Carl Gustaf Mosander. Como resultado de este proceso, se obtuvieron dos materiales, uno de color marrón y otro verde.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Erbio',
            'symbol' => 'Er',
            'atomicNumber' => 68,
            'atomicMass' => 167.259,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El erbio es un elemento químico de la tabla periódica cuyo símbolo es Er y su número atómico es 68. El erbio es un elemento un tanto raro de color plateado perteneciente a los lantánidos y que aparece asociado a otros lantánidos en el mineral gadolinita procedente de Ytterby (Suecia). El erbio es un elemento trivalente, maleable, relativamente estable en el aire y no se oxida tan rápidamente como otros metales de las tierras raras. Sus sales son rosadas y el elemento origina un característico espectro de absorción en el espectro visible, ultravioleta y cerca del infrarrojo. Su óxido es la erbia. Las propiedades del erbio están muy influenciadas por la cantidad y tipo de impurezas presentes. El erbio no tiene papel biológico conocido alguno aunque algunos creen que es capaz de estimular el metabolismo.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Tulio',
            'symbol' => 'Tm',
            'atomicNumber' => 69,
            'atomicMass' => 168.934 ,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El tulio es un elemento químico de la tabla periódica cuyo símbolo es Tm y su número atómico es 69. Fue descubierto por Per Teodor Cleve en Suecia en el año 1879. Su nombre procede del antiguo nombre de Escandinavia en latín, Thule, ya que fue descubierto en esa región. El Tulio es el menos abundante de los lantánidos (el prometio es menos abundante que el Tulio, pero no se lo encuentra naturalmente en la Tierra). Es un metal blando, con un lustre gris plateado brillante. A pesar de su alto precio y escasez, el tulio es utilizado como fuente de radiación en los equipos de rayos X portátiles y láseres de estado sólido.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Iterbio',
            'symbol' => 'Yb',
            'atomicNumber' => 70,
            'atomicMass' => 173.04,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El iterbio o yterbio es un elemento químico de la tabla periódica que tiene el símbolo Yb y el número atómico 70. El iterbio es un elemento metálico plateado blando, una tierra rara de la serie de los lantánidos que se halla en la gadolinita, la monazita y el xenotimo. El iterbio se asocia a veces con el itrio u otros elementos relacionados y se usa en algunos aceros. El iterbio natural es una mezcla de siete isótopos estables. El iterbio es un elemento blando, maleable y bastante dúctil que exhibe un lustre plateado brillante. Es una tierra rara, fácilmente atacable y disoluble con ácidos minerales, reacciona lentamente con el agua, y se oxida al aire.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Lutecio',
            'symbol' => 'Lu',
            'atomicNumber' => 71,
            'atomicMass' => 174.967,
            'category' => 'Lantánidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 3,
            'block' => 'd',
            'description' => 'El lutecio es un elemento químico, de número atómico 71, cuyo símbolo químico es Lu. A pesar de ser uno de los elementos del bloque d, con frecuencia aparece incluido entre los lantánidos (tierras raras), ya que con éstos comparte muchas propiedades. De todos ellos es el elemento más difícil de aislar, lo cual justifica su carestía y los relativamente pocos usos que se le han encontrado. El lutecio es un metal trivalente, de color blanco plateado, resistente a la corrosión y, en presencia de aire, relativamente estable. De todas las tierras raras es el elemento más pesado y duro.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Hafnio',
            'symbol' => 'Hf',
            'atomicNumber' => 72,
            'atomicMass' => 178.49,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 4,
            'block' => 'd',
            'description' => 'El hafnio es un elemento químico de número atómico 72 que se encuentra en el grupo 6 de la tabla periódica de los elementos y se simboliza como Hf. Es un metal de transición, brillante, gris-plateado, químicamente muy parecido al circonio, encontrándose en los mismos minerales y compuestos, y siendo difícil separarlos. Se usa en aleaciones con wolframio en filamentos y en electrodos. También se utiliza como material de barras de control de reactores nucleares debido a su capacidad de absorción de neutrones. Recientemente, se ha convertido en el material utilizado para fabricar los transistores de los procesadores de la conocida marca Intel.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Tántalo',
            'symbol' => 'Ta',
            'atomicNumber' => 73,
            'atomicMass' => 180.9479,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 5,
            'block' => 'd',
            'description' => 'El tántalo o tantalio, es un elemento químico de número atómico 73, que se sitúa en el grupo 6 de la tabla periódica de los elementos. Su símbolo es Ta. Se trata de un metal de transición raro, azul grisáceo, duro, que presenta brillo metálico y resiste muy bien la corrosión. Se encuentra en el mineral tantalita. Es fisiológicamente inerte, por lo que entre sus variadas aplicaciones, se puede emplear para la fabricación de instrumentos quirúrgicos y en implantes. El tántalo es una elección razonable cuando se requiere una alta resistencia a la corrosión. Aunque el tántalo no sea un metal noble, es comparable a éstos en lo que respecta a la resistencia química. Además, el tántalo es muy fácil de conformar, incluso netamente por debajo de la temperatura ambiente, a pesar de su estructura cristalina cúbica centrada en el espacio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Wolframio',
            'symbol' => 'W',
            'atomicNumber' => 74,
            'atomicMass' => 183.84,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 6,
            'block' => 'd',
            'description' => 'El wolframio o volframio, también conocido como wólfram o tungsteno,​ es un elemento químico de número atómico 74 que se encuentra en el grupo 6 de la tabla periódica de los elementos. Su símbolo es W. Es un metal escaso en la corteza terrestre, pero se encuentra en determinados minerales en forma de óxidos o sales. Es de color gris acerado, muy duro y denso, tiene el punto de fusión más elevado de todos los metales y el punto de ebullición más alto de todos los elementos conocidos.​ Se usa en la fabricación de aparejos para pesca, en los filamentos de las lámparas incandescentes, en electrodos no consumibles de soldaduras, en resistencias eléctricas, y aleado con el acero, en la fabricación de aceros especiales. Su variedad de carburo de wolframio sinterizado se emplea para fabricar herramientas de corte. Esta variedad absorbe más del 60 % de la demanda mundial de wolframio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Renio',
            'symbol' => 'Re',
            'atomicNumber' => 75,
            'atomicMass' => 186.207,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 7,
            'block' => 'd',
            'description' => 'El renio —de Rhenus, nombre latino del Rin— es un elemento químico, de número atómico 75, que se encuentra en el grupo 7 de la tabla periódica de los elementos y cuyo símbolo es Re, descubierto en 1925 por tres científicos alemanes. Es un metal de transición de color blanco-plata, sólido, refractario y resistente a la corrosión, muy utilizado en joyería y como catalizador. Sus propiedades químicas son muy parecidas a las del manganeso, es muy escaso en la corteza terrestre y se obtiene principalmente a partir de minerales de molibdeno. Existen 35 isótopos y 26 radioisótopos de este elemento, de los cuales los más estables son el 185Re y el 187Re. Los principales yacimientos de renio se encuentran en América y Asia, destacando los de Chile y Kazajistán.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Osnio',
            'symbol' => 'Os',
            'atomicNumber' => 76,
            'atomicMass' => 190.23,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 8,
            'block' => 'd',
            'description' => 'El osmio es un elemento químico de número atómico 76 que se encuentra en el grupo 8 de la tabla periódica de los elementos. Su símbolo es Os. Se trata de un metal de transición blanco grisáceo, frágil y sólido. Se clasifica dentro del grupo del platino, y se emplea en algunas aleaciones con platino e iridio. Se encuentra aleado en menas de platino y su tetraóxido, OsO4. El osmio es el elemento natural más pesado a igual volumen (es decir, más denso) que existe, con una densidad de 22.59 g/cm3. Se emplea en síntesis orgánica (como oxidante) y en el proceso de tinción de tejidos (para su fijación) para su observación mediante microscopía electrónica, y en otras técnicas biomédicas. Las aleaciones de osmio se emplean en contactos eléctricos, puntas de bolígrafos y otras aplicaciones en las que es necesaria una gran dureza y durabilidad.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Iridio',
            'symbol' => 'Ir',
            'atomicNumber' => 77,
            'atomicMass' => 192.217,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 9,
            'block' => 'd',
            'description' => 'El iridio es un elemento químico de número atómico 77 que se sitúa en el grupo 9 de la tabla periódica. Su símbolo es Ir. Se trata de un metal de transición, del grupo del platino, duro, frágil, pesado, de color blanco plateado. Es el segundo elemento más denso (después del osmio) y es el elemento más resistente a la corrosión, incluso a temperaturas tan altas como 2000 °C. Solo algunos halógenos y sales fundidas son corrosivas para el iridio en estado sólido. El iridio en polvo es mucho más reactivo y puede llegar a ser inflamable. Fue descubierto en 1803 entre las impurezas insolubles del platino natural. Smithson Tennant, el primer descubridor, llamó al metal iridio en honor a la diosa Iris, la personificación del arcoíris, debido a los diversos y llamativos colores de sus sales. El iridio es uno de los elementos más raros en la corteza terrestre, con una extracción y consumo anual de tan solo tres toneladas. El 191Ir y el 193Ir son los dos isótopos naturales del iridio y también sus únicos isótopos estables; el 193Ir es el más abundante de los dos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Platino',
            'symbol' => 'Pt',
            'atomicNumber' => 78,
            'atomicMass' => 195.084,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 10,
            'block' => 'd',
            'description' => 'El platino es un elemento químico de número atómico 78, situado en el grupo 10 de la tabla periódica de los elementos. Su símbolo es Pt. Se trata de un metal de transición blanco grisáceo, precioso, pesado, maleable y dúctil. Es resistente a la corrosión y se encuentra en distintos minerales, frecuentemente junto con níquel y cobre; también se puede encontrar como metal. Se emplea en joyería, equipamiento de laboratorio, contactos eléctricos, empastes y catalizadores de automóviles.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Oro',
            'symbol' => 'Au',
            'atomicNumber' => 79,
            'atomicMass' => 196.966569,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 11,
            'block' => 'd',
            'description' => 'El oro es un elemento químico cuyo número atómico es 79. Está ubicado en el grupo 11 de la tabla periódica. Es un metal precioso blando de color amarillo. Su símbolo es Au (del latín aurum, ‘brillante amanecer’). Además, es uno de los metales más apreciados en joyería por sus propiedades físicas, al tener baja alterabilidad, ser muy maleable, dúctil y brillante, y valorado por su rareza, al ser un metal difícil de encontrar en la naturaleza.Es un metal de transición blando, brillante, amarillo, pesado, maleable y dúctil. El oro no reacciona con la mayoría de los productos químicos, pero es sensible y soluble al cianuro, al mercurio, al agua regia, al cloro y a la lejía. Este metal se encuentra normalmente en estado puro, en forma de pepitas y depósitos aluviales.            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Mercurio',
            'symbol' => 'Hg',
            'atomicNumber' => 80,
            'atomicMass' => 200.59,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Líquido',
            'group' => 12,
            'block' => 'd',
            'description' => 'El mercurio es un elemento químico con el símbolo Hg y número atómico 80. En la literatura antigua era designado comúnmente como plata líquida y también como azogue o hidrargiro. Elemento de aspecto plateado, metal pesado perteneciente al bloque D de la tabla periódica, el mercurio es el único elemento metálico líquido en condiciones estándar de laboratorio; el único otro elemento que es líquido bajo estas condiciones es el bromo (un no metal), aunque otros metales como el cesio, el galio, y el rubidio se funden a temperaturas ligeramente superiores. El mercurio aparece en depósitos en todo el mundo, principalmente como cinabrio (sulfuro de mercurio). El pigmento rojo denominado bermellón se obtiene triturando cinabrio natural o sulfuro de mercurio obtenido por síntesis.            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Talio',
            'symbol' => 'Tl',
            'atomicNumber' => 81,
            'atomicMass' => 204.3833,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El talio es un elemento químico de la tabla periódica cuyo símbolo es Tl y su número atómico es 81. Este metal del bloque p gris, blando y maleable es parecido al estaño, pero se decolora expuesto al aire. Es muy tóxico y se ha empleado como raticida e insecticida, pero este uso ha sido disminuido o eliminado en muchos países debido a sus posibles efectos cancerígenos. También se emplea en detectores infrarrojos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Plomo',
            'symbol' => 'Pb',
            'atomicNumber' => 82,
            'atomicMass' => 207.2,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 14,
            'block' => 'p',
            'description' => 'El plomo es un elemento químico de la tabla periódica, cuyo símbolo es Pb (del latín plumbum) y su número atómico es 82 según la tabla actual, ya que no formaba parte en la tabla periódica de Mendeléyev . Este químico no lo reconocía como un elemento metálico común por su gran elasticidad molecular. Cabe destacar que la elasticidad de este elemento depende de la temperatura ambiente, la cual extiende sus átomos. El plomo es un metal pesado de densidad relativa o gravedad específica 11,4 a 16 °C, de color plateado con tono azulado, que se empaña para adquirir un color gris mate. Es flexible, inelástico y se funde con facilidad.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Bismuto',
            'symbol' => 'Bi',
            'atomicNumber' => 83,
            'atomicMass' => 208.980386,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 15,
            'block' => 'p',
            'description' => 'El bismuto es un elemento químico de la tabla periódica cuyo símbolo es Bi, su número atómico es 83 y se encuentra en el grupo 15 del sistema periódico. Ya era conocido en la antigüedad, pero hasta mediados del siglo XVIII era confundido con el plomo, estaño y zinc. Ocupa el lugar 73 en abundancia entre los elementos de la corteza terrestre (representa el 8,5 × 10−7 % del peso de la corteza) y es tan escaso como la plata. Los principales depósitos están en Sudamérica, pero en Estados Unidos se obtiene principalmente como subproducto del refinado de los minerales de cobre y plomo.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Polonio',
            'symbol' => 'Po',
            'atomicNumber' => 84,
            'atomicMass' => 209.9824,
            'category' => 'Metaloides',
            'elementType' => 'Metaloides',
            'stateMass' => 'Sólido',
            'group' => 16,
            'block' => 'p',
            'description' => 'El polonio es un elemento químico en la tabla periódica de los elementos cuyo símbolo es Po y su número atómico es 84. Se trata de un raro metal altamente radiactivo, químicamente similar al telurio y al bismuto, presente en minerales de uranio. Estas sustancias se disuelven con mucha facilidad en ácidos, pero es sólo ligeramente soluble en alcalinos. Está químicamente relacionado con el teluro y el bismuto. El polonio es un metal volátil, reducible al 50% tras 45 horas al aire a una temperatura de 54,8 °C (328 K). Ninguno de los 50 isotopos [número estimado] de polonio es estable. Es extremadamente tóxico y altamente radiactivo. Se ha encontrado polonio en minerales de uranio, humo de tabaco y como contaminante. Todos los elementos a partir del polonio son significativamente radiactivos. Se encuentra en el grupo 16 y su número atómico es 84.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Astato',
            'symbol' => 'At',
            'atomicNumber' => 85,
            'atomicMass' => 210,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Sólido',
            'group' => 17,
            'block' => 'p',
            'description' => 'El ástato o astato es un elemento químico de la tabla periódica cuyo símbolo es At y su número atómico es 85. Es radiactivo y el más pesado de los halógenos. Se produce a partir de la degradación de uranio y torio. El comportamiento químico de este elemento altamente radiactivo es muy similar al de otros halógenos, especialmente el yodo. Se piensa que el ástato es más metálico que el yodo. Investigadores del Laboratorio Nacional de Brookhaven han realizado experimentos en los que se han identificado y medido reacciones elementales que involucran al ástato.            ',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Radón',
            'symbol' => 'Rn',
            'atomicNumber' => 86,
            'atomicMass' => 222,
            'category' => 'Gases nobles',
            'elementType' => 'Mo metales',
            'stateMass' => 'Gaseoso',
            'group' => 18,
            'block' => 'p',
            'description' => 'El radón es un elemento químico perteneciente al grupo de los gases nobles. En su forma gaseosa es incoloro, inodoro e insípido y en forma sólida su color es rojizo. En la tabla periódica tiene el número 86 y símbolo Rn. Su masa media es de 222, lo que implica que por término medio tiene 222-86 = 136 neutrones. Igualmente, en estado neutro le corresponde tener el mismo número de electrones que de protones, esto es, 86. Es un elemento radiactivo y gaseoso, encuadrado dentro de los llamados gases nobles.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Francio',
            'symbol' => 'Fr',
            'atomicNumber' => 87,
            'atomicMass' => 223,
            'category' => 'Alcalinos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 1,
            'block' => 's',
            'description' => 'El francio, antiguamente conocido como eka-cesio y actinio K,​ es un elemento químico cuyo símbolo es Fr y su número atómico es 87. Su electronegatividad es la más baja conocida y es el segundo elemento menos abundante en la naturaleza (el primero es el astato). El francio es un metal alcalino altamente radiactivo y reactivo que se desintegra generando astato, radio y radón. Como el resto de los metales alcalinos, sólo posee un electrón en su capa de valencia. Marguerite Perey descubrió este elemento en 1939. El francio fue el último elemento químico descubierto en la naturaleza antes de ser sintetizado.​ Fuera del laboratorio, el francio es extremadamente escaso, encontrándose en trazas en menas de uranio y de torio, donde el 223Fr está continuamente formándose y desintegrándose. La cantidad de 223Fr en la corteza terrestre en un momento dado posiblemente no exceda los 30 gramos; el resto de los isótopos son sintéticos. La mayor cantidad recuperada de cualquiera de sus isótopos fue un clúster de 10.000 millones de átomos (de 210Fr) sintetizado como un gas ultra frío en Stony Brook en 1996.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Radio',
            'symbol' => 'Ra',
            'atomicNumber' => 88,
            'atomicMass' => 226.0254,
            'category' => 'Alcalinotérreos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 2,
            'block' => 's',
            'description' => 'El radio es un elemento químico de la tabla periódica. Su símbolo es Ra y su número atómico es 88. Es de color blanco inmaculado, pero se ennegrece con la exposición al aire. El radio es un alcalinotérreo que se encuentra a nivel de trazas en minas de uranio. Es extremadamente radiactivo, un millón de veces más que el uranio. Su isótopo más estable, Ra-226, tiene un periodo de semidesintegración de 1.602 años y se transmuta dando radón.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Actinio',
            'symbol' => 'Ac',
            'atomicNumber' => 89,
            'atomicMass' => 227,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El actinio (del griego ακτις, ακτινoς, rayo luminoso) es un elemento químico de símbolo Ac y número atómico 89, perteneciente al grupo IIIB, periodo 7 y bloque F de la tabla periódica de los elementos.1​ Es una de las tierras raras y da nombre a una de las series, la de los actínidos.2​3​4​ Es un metal radiactivo blando que reluce en la oscuridad. Se conocen los isótopos con número másico entre 209 y 234, siendo el más estable el 227Ac que tiene una vida media de 21,7 años.5​El 227Ac se encuentra en el uranio natural en una proporción del orden del 0,175% y el 228Ac también se encuentra en la naturaleza.1​ Hay otros 22 isótopos artificiales del actinio, todos radiactivos y todos con vidas medias muy cortas. Descubierto por André-Louis Debierne en 1899, su principal aplicación es como fuente de partículas alfa.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Torio',
            'symbol' => 'Th',
            'atomicNumber' => 90,
            'atomicMass' => 232.0381,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El torio es un elemento químico, de símbolo Th y número atómico 90, de la serie de los actínidos. Se encuentra en estado natural en los minerales monacita, torita y torianita. En estado puro es un metal blando de color blanco-plata que se oxida lentamente. Si se tritura finamente y se calienta, arde y emite luz blanca. El torio pertenece a la familia de las sustancias radiactivas, si bien su periodo de semidesintegración es extremadamente largo. Su potencial como combustible nuclear, como material fértil, se debe a que presenta una alta sección eficaz frente a neutrones lentos (térmicos), derivando en protactinio-233, que rápidamente se desintegra en uranio-233, el cual es un isótopo fisible que puede sostener una reacción nuclear en cadena. Esta aplicación todavía está en fase de desarrollo.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Protactinio',
            'symbol' => 'Pa',
            'atomicNumber' => 91,
            'atomicMass' => 231.03588,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El protactinio es un elemento químico de la tabla periódica cuyo símbolo es Pa y su número atómico es 91. El protactinio es un elemento metálico plateado que pertenece al grupo de los actínidos, que presenta un brillo metálico intenso. Es superconductor por debajo de 1.4 K. Debido a su escasez, alta radioactividad y toxicidad, actualmente no existen usos para el protactinio fuera de la investigación científica básica. El Protactinio-231 (que se forma por la desintegración alfa del Uranio-235 seguido de una desintegración beta del Torio-231) podría quizás mantener una reacción nuclear en cadena y, en principio, podría ser usado para construir una bomba nuclear. La masa crítica, según Walter Seifritz, es 750±180 kg. Otros autores concluyen que no es posible una reacción en cadena usando 231Pa.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Uranio',
            'symbol' => 'U',
            'atomicNumber' => 92,
            'atomicMass' => 238.02891,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El uranio es un elemento químico metálico de color plateado-grisáceo de la serie de los actínidos, su símbolo químico es U y su número atómico es 92. Por ello posee 92 protones y 92 electrones, con una valencia de 6. Su núcleo puede contener entre 142 y 146 neutrones, sus isótopos más abundantes son el 238U que posee 146 neutrones y el 235U con 143 neutrones. El uranio tiene el mayor peso atómico de entre todos los elementos que se encuentran en la naturaleza. El uranio es aproximadamente un 70 % más denso que el plomo, aunque menos denso que el oro o el wolframio. Es levemente radiactivo. Fue descubierto como óxido en 1789 por M. H. Klaproth que lo llamó así en el honor del planeta Urano que acababa de ser descubierto en 1781.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Neptunio',
            'symbol' => 'Np',
            'atomicNumber' => 93,
            'atomicMass' => 237,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El neptunio es un elemento sintético de la tabla periódica cuyo símbolo es Np y su número atómico es 93. Cuarto de la familia de los actínidos o segundo período de transición interna del sistema periódico de los elementos. Su nombre proviene del planeta Neptuno. Fue obtenido por primera vez en 1940 por Edwin Mattison McMillan y Philip Hauge Abelson bombardeando uranio con deuterones de gran velocidad. El isótopo 237 ha sido encontrado, en cantidades muy pequeñas, en minas de uranio. Se obtiene más abundantemente como subproducto en la fabricación de plutonio 239. El neptunio metálico se obtiene del trifluoruro de neptunio por reducción con vapor de bario a 1.20 °C.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Plutonio',
            'symbol' => 'Pu',
            'atomicNumber' => 94,
            'atomicMass' => 244,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El plutonio es un elemento transuránico radiactivo con el símbolo químico Pu y el número atómico 94. Es un metal actínido con apariencia gris plateada que se oscurece cuando es expuesto al aire, formando una capa opaca cuando se oxida. El elemento normalmente exhibe seis estados alotrópicos y cuatro de oxidación. Reacciona con el carbono, los halógenos, nitrógeno y silicio. Cuando se expone al aire húmedo forma óxidos e hidruros que expanden hasta un 70% su volumen, que a su vez, se desprende en forma de polvo que puede inflamarse de forma espontánea. También es un elemento radiactivo y se puede acumular en los huesos. Estas propiedades hacen que manipular plutonio sea peligroso.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Americio',
            'symbol' => 'Am',
            'atomicNumber' => 95,
            'atomicMass' => 243,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El americio es un elemento químico artificial de número atómico 95 situado dentro del grupo de los actínidos en la tabla periódica de los elementos. Su símbolo es Am. Todos sus isótopos son radiactivos y no existen en la naturaleza. Su nombre proviene de América, de forma análoga al europio. El americio fue aislado por primera vez por Glenn T. Seaborg, Leon O. Morgan, Ralph A. James, y Albert Ghiorso en 1944 en el Laboratorio de Metalurgia de la Universidad de Chicago. El equipo creó el isótopo 241Am a partir de 239Pu, bombardeándolo con neutrones en un reactor nuclear.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Curio',
            'symbol' => 'Cm',
            'atomicNumber' => 96,
            'atomicMass' => 247,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El curio es un elemento sintético de la tabla periódica cuyo símbolo es Cm y su número atómico es 96. Se produce bombardeando plutonio con partículas alfa (iones de helio). Es un actínido. El curio no existe en el ambiente terrestre, pero puede producirse en forma artificial. Sus propiedades químicas se parecen tanto a las de las tierras raras típicas que, si no fuera por su radiactividad, podría confundirse fácilmente con uno de estos elementos. Entre los isótopos conocidos del curio figuran los de número de masa 238 a 250. El isótopo 244Cm es de particular interés a causa de su uso potencial como una fuente compacta de fuerza termoeléctrica, al utilizarse el calor generado por decaimiento nuclear para generar fuerza eléctrica.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Berkelio',
            'symbol' => 'Bk',
            'atomicNumber' => 97,
            'atomicMass' => 247,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El berkelio es un elemento sintético de la tabla periódica cuyo símbolo es el Bk y su número atómico es 97. Pertenece a la serie de los actínidos y elementos transuránicos.​ Su nombre es un homenaje a la ciudad de Berkeley, California,​ donde se encuentra el Laboratorio de Radiación de la Universidad de California, Lo descubrieron en 1949 S. G. Thompson, A. Ghiorso y G. T. Seaborg en la Universidad de California en Berkeley. El berkelio fue el quinto elemento descubierto luego del neptunio, plutonio, curio y americio.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Californio',
            'symbol' => 'Cf',
            'atomicNumber' => 98,
            'atomicMass' => 251,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El californio es un elemento químico radiactivo con símbolo Cf y número atómico 98. Este elemento fue obtenido por primera vez en la Universidad de California en Berkeley en 1950 bombardeando curio con partículas alfa —iones de helio-4—. Es un elemento actínido, el sexto de los elementos transuránicos en ser sintetizado, y tiene la segunda mayor masa atómica de todos los elementos que han sido producidos en cantidades suficientemente grandes para ser visto a simple vista, después del einstenio. El nombre del elemento se debe a California y la Universidad de California. Es el elemento más pesado que se produce en la Tierra de forma natural; los elementos de mayor masa atómica solo pueden ser producidos mediante síntesis.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Einstenio',
            'symbol' => 'Es',
            'atomicNumber' => 99,
            'atomicMass' => 252,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El einstenio (antiguamente también llamado atenio)​ es un elemento sintético de la tabla periódica cuyo símbolo es Es y su número atómico es 99. Fue llamado así en honor de Albert Einstein, aunque se descubrió en diciembre de 1952 en los restos de la primera explosión termonuclear en el Pacífico, realizada un mes antes, por el equipo de investigadores formado por G. R. Choppin, A. Ghiorso, B. G. Harvey y S. G. Thompson.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Fermio',
            'symbol' => 'Fm',
            'atomicNumber' => 100,
            'atomicMass' => 257,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El fermio es un elemento químico radiactivo creado artificialmente cuyo número atómico es 100 y de peso atómico 254, de símbolo Fm. Existen 16 isótopos conocidos siendo el 257Fm el más estable con un periodo de semidesintegración de 100,5 días. El fermio es uno de los elementos transuránicos del grupo de los actínidos del sistema periódico. El elemento fue aislado en 1952, a partir de los restos de una explosión de bomba de hidrógeno, por el químico estadounidense Albert Ghiorso y sus colegas. Más tarde el fermio fue preparado sintéticamente en un reactor nuclear bombardeando plutonio con neutrones, y en un ciclotrón bombardeando uranio 238 con iones de nitrógeno.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Mendelevio',
            'symbol' => 'Md',
            'atomicNumber' => 101,
            'atomicMass' => 258.1,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El mendelevio (anteriormente llamado unnilunio) es un elemento de la tabla periódica cuyo símbolo es Md (anteriormente Mv) y su número atómico es 101. El nombre de este elemento proviene del creador de la Tabla periódica de los Elementos: Dmitri Mendeleyev (1834-1907), padre de la tabla periódica. El mendelevio es el noveno elemento transuránido descubierto de la serie de los actínidos. Lo identificaron Albert Ghiorso, Bernard G. Harvey, Gregory R. Choppin, Stanley G. Thompson y Glenn T.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Nobelio',
            'symbol' => 'No',
            'atomicNumber' => 102,
            'atomicMass' => 259,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'block' => 'f',
            'description' => 'El nobelio (anteriormente llamado unnilbio (Unb)) es un elemento sintético de la tabla periódica cuyo símbolo es No y su número atómico es 102, llamado así en honor del inventor Alfred Nobel. Es el 11º elemento sintético de la tabla periódica. Su decaimiento se realiza por emisión de partículas alfa, es decir, un ion de helio doblemente cargado. Hasta la fecha sólo se han producido cantidades atómicas del elemento. El nobelio es el décimo elemento más pesado que el uranio producido sintéticamente y el 14º miembro de los actínidos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Lawrencio',
            'symbol' => 'Lr',
            'atomicNumber' => 103,
            'atomicMass' => 262,
            'category' => 'Actínidos',
            'elementType' => 'Metales',
            'stateMass' => 'Sólido',
            'group' => 3,
            'block' => 'd',
            'description' => 'El lawrencio o laurencio también es un elemento sintético radiactivo de la tabla periódica de los elementos cuyo símbolo es Lr (anteriormente Lw) y su número atómico es 103. En la tabla periódica de los elementos, se trata de un elemento del bloque d en el período 7 y es el último elemento de la serie de los actínidos. Experimentos químicos confirmaron que el lawrencio se comporta homólogamente al lutecio y es químicamente similar a otros actínidos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Rutherfordio',
            'symbol' => 'Rf',
            'atomicNumber' => 104,
            'atomicMass' => 261,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 4,
            'block' => 'd',
            'description' => 'El rutherfordio (anteriormente llamado kurchatovio)​ es un elemento químico de la tabla periódica cuyo símbolo es Rf y su número atómico es 104. Su nombre fue elegido en honor del Barón Ernest Rutherford, científico colaborador del modelo atómico y física nuclear. Este es un elemento sintético altamente radiactivo cuyo isótopo más estable es el 261Rf con una vida media de aproximadamente 13 horas.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Dubnio',
            'symbol' => 'Db',
            'atomicNumber' => 105,
            'atomicMass' => 262,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 5,
            'block' => 'd',
            'description' => 'El dubnio es un elemento químico de la tabla periódica de los elementos cuyo símbolo es Db y su número atómico 105. El elemento fue nombrado en honor a la ciudad de Dubna, Rusia, donde fue producido por primera vez. Es un elemento sintético y radiactivo; y su isótopo más estable conocido, dubnio-268, tiene un período de semidesintegración de aproximadamente veintiocho horas. En la tabla periódica de los elementos, es un elemento del bloque d y es un elemento transactínido. Es un miembro del séptimo período y pertenece al grupo 5 de elementos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Seaborgio',
            'symbol' => 'Sg',
            'atomicNumber' => 106,
            'atomicMass' => 269,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 6,
            'block' => 'd',
            'description' => 'El seaborgio es un elemento químico de la tabla periódica cuyo símbolo es Sg y su número atómico es 106. Es un elemento sintético cuyo isótopo más estable es el 271Sg que tiene una vida media de 2,4 minutos. Su naturaleza química es similar a la del wolframio. El elemento 106 fue descubierto casi simultáneamente por dos laboratorios. En junio de 1974, un grupo de investigadores norteamericanos liderado por Albert Ghiorso en el laboratorio Lawrence Berkeley de la Universidad de California, Berkeley reportó la creación de un isótopo de número de masa 263 y una vida media de 1,0 s.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Bohrio',
            'symbol' => 'Bh',
            'atomicNumber' => 107,
            'atomicMass' => 264,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 7,
            'block' => 'd',
            'description' => 'El bohrio (anteriormente llamado Nielsbohrio o Unnilseptio con símbolo provisional Uns o Gerphanio con símbolo Gp)​ es un elemento químico de la tabla periódica cuyo símbolo es Bh y su número atómico es 107. Su nombre le fue dado en honor al científico danés Niels Bohr. Elemento químico que se espera que tenga propiedades químicas semejantes a las del elemento renio. Fue sintetizado e identificado sin ambigüedad en 1981 por un equipo de Darmstadt, Alemania, equipo dirigido por P. Armbruster y G. Müzenberg. La reacción usada para producir el elemento fue propuesta y aplicada en 1976 por un grupo de Dubna (cerca de Moscú), que estaba bajo la guía de Yuri Oganesián. Un blanco de 209Bi fue bombardeado por un haz de proyectiles de 54Cr.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Hasio',
            'symbol' => 'Hs',
            'atomicNumber' => 108,
            'atomicMass' => 269,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 8,
            'block' => 'd',
            'description' => 'El hassio,​ anteriormente conocido provisionalmente como unniloctio, es un elemento sintético de la tabla periódica cuyo símbolo es Hs y su número atómico es 108. Su isótopo más estable es el Hs-269, que tiene un periodo de semidesintegración de 9,7 segundos. El hasio fue sintetizado por primera vez en 1984 por el grupo de investigación alemán Gesellschaft für Schwerionenforschung localizado en Darmstadt. El nombre hassio propuesto por el grupo se debe al estado alemán de Hesse en el que se encuentra el GSI.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Meitnerio',
            'symbol' => 'Mt',
            'atomicNumber' => 109,
            'atomicMass' => 268,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 9,
            'block' => 'd',
            'description' => 'El meitnerio (anteriormente llamado unnilenio con símbolo provisional Une o Wolschakio con símbolo Wl al no ser oficial)4​5​ es un elemento químico de la tabla periódica cuyo símbolo es Mt y su número atómico es 109. Es un elemento sintético cuyo isótopo más estable es el 278Mt, cuya vida media es de 7,6 s. El meitnerio fue encontrado por accidente en 1982 por Peter Armbruster y Gottfried Münzenberg en el Instituto de Investigación de iones Pesados (Gesellschaft für Schwerionenforschung) en Darmstadt. El equipo lo consiguió bombardeando bismuto-209 con núcleos acelerados de hierro-58. La creación de este elemento demostró que las técnicas de fusión nuclear podían ser usadas para crear nuevos núcleos pesados.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Darmstatio',
            'symbol' => 'Ds',
            'atomicNumber' => 110,
            'atomicMass' => 281,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 10,
            'block' => 'd',
            'description' => 'El darmstatio​ (anteriormente llamado ununnilio, con símbolo provisional Uun; o madveded, madvedevio o medvedio,​ con símbolo Mv al no ser oficial)​ es un elemento químico de la tabla periódica cuyo símbolo es Ds y cuyo número atómico es 110, lo cual lo hace uno de los átomos superpesados. Es un elemento sintético que decae rápidamente; sus isótopos de números másicos entre 267 y 273 tienen periodos de semidesintegración del orden de los microsegundos. Sin embargo, isótopos más pesados, de números másicos 279 y 281, sintetizados recientemente, son más estables, con periodos de semidesintegración de 180 milisegundos y 11,1 segundos, respectivamente. Debido a su presencia en el grupo 10, se cree que este elemento puede ser un metal sólido brillante. Recibe su nombre en honor a la ciudad alemana de Darmstadt donde fue descubierto.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Roentgenio',
            'symbol' => 'Rg',
            'atomicNumber' => 111,
            'atomicMass' => 281,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 11,
            'block' => 'd',
            'description' => 'El roentgenio (anteriormente llamado Unununio o Ununio, Uuu​) es un elemento químico del grupo 11 de la tabla periódica cuyo símbolo es Rg y su número atómico es 111. También tenía asignado el nombre de plutirio con el símbolo Pl al no ser oficial. Fue descubierto en 1994 por científicos alemanes en Darmstadt. En noviembre del 2004 recibió el nombre de roentgenio en honor a Wilhelm Conrad Roentgen (1845-1923), premio Nobel de Física, descubridor de los rayos X. El roentgenio se obtiene a través del bombardeo de hojas de bismuto (Bi) con iones de níquel (Ni), decayendo en 15 milisegundos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Copernico',
            'symbol' => 'Cn',
            'atomicNumber' => 112,
            'atomicMass' => 285,
            'category' => 'Metales de transición',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 12,
            'block' => 'd',
            'description' => 'El copernicio (anteriormente llamado Ununbio, con el símbolo provisional Uub) es un elemento químico de la tabla periódica cuyo símbolo es Cn y su número atómico 112. Su apariencia física no se conoce aún, pero podría calcularse, sabiendo que por ahora el isótopo conocido, de 285 de masa atómica, tiene una vida media de 0,24 ms. A principios de 2009, la IUPAC (International Union of Pure and Applied Chemistry) confirmó oficialmente el descubrimiento por el laboratorio GSI Helmholtzzentrum für Schwerionenforschung (Centro de investigación de Iones Pesados) en Darmstadt. En julio de 2009 el grupo del profesor Sigurd Hofmann propuso el nombre Copernicio y el símbolo Cp en honor del científico y astrónomo Nicolás Copérnico (1473-1543).',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Nihonio',
            'symbol' => 'Nh',
            'atomicNumber' => 113,
            'atomicMass' => 286,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 13,
            'block' => 'p',
            'description' => 'El nihonio​ o nihomio​ (anteriormente llamado ununtrio, con el símbolo provisional Uut hasta su aceptación oficial como nuevo elemento por la IUPAC en noviembre de 2016​ o Tusfrano con símbolo Tf​ y erróneamente Trustano) es el nombre para el elemento sintético de la tabla periódica cuyo símbolo es Nh y su número atómico es 113. Su descubrimiento ha sido adjudicado de forma oficial a los investigadores japoneses del laboratorio Riken, que lograron sintetizar y observar el elemento a finales de 2015, convirtiéndose así en el primer elemento sintético en ser producido en Japón, como resultado de la desintegración del elemento 115 (moscovio). Su nombre proviene de la palabra "Nihon", el término utilizado para designar a Japón.​ Es un elemento radiactivo cuyo isótopo más estable conocido, nihonio-286, tiene una vida media de 20 segundos.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Flerovio',
            'symbol' => 'Fl',
            'atomicNumber' => 114,
            'atomicMass' => 287,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 14,
            'block' => 'p',
            'description' => 'Flerovio (anteriormente llamado ununquadio, Uuq) es el nombre de un elemento químico radiactivo con el símbolo Fl y número atómico 114. Nombrado en honor a Gueorgui Fliórov. Hasta la fecha se han observado alrededor de 80 desintegraciones de átomos de flerovio, 50 de ellas directamente y 30 de la desintegración de los elementos más pesados livermorio y oganesón. Todas las desintegraciones han sido asignadas a los cuatro isótopos vecinos con números de masa 286-289. El isótopo de más larga vida conocido actualmente es el 289Fl114 con una vida media de aproximadamente 2,6 s, aunque hay evidencias de un isómero, 289bFl114, con una vida media de aproximadamente 66 s, que sería uno de los núcleos más longevos en la región de los elementos superpesados.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Moscovio',
            'symbol' => 'Mc',
            'atomicNumber' => 115,
            'atomicMass' => 288,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 15,
            'block' => 'p',
            'description' => 'El moscovio​ (anteriormente llamado unumpentio, Uup o Ununpentio) es un elemento sintético de la tabla periódica cuyo símbolo es Mc y su número atómico es 115. Actualmente se conocen cuatro isótopos desde 287Mc hasta 290Mc. Se prevé que el isótopo más estable del moscovio sea el 299Mc, que contiene el número mágico de 184 neutrones. El isótopo con mayor número de neutrones conocido hasta la fecha es el 290Mc, con 175 neutrones. Es muy inestable, con una vida media de milésimas de segundo. Su nombre hace referencia a la provincia de Moscú, región a la que pertenece la ciudad rusa donde se descubrió, Dubná.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Livermorio',
            'symbol' => 'Lv',
            'atomicNumber' => 116,
            'atomicMass' => 292,
            'category' => 'Otros metales',
            'elementType' => 'Metales',
            'stateMass' => 'Desconocido',
            'group' => 16,
            'block' => 'p',
            'description' => 'El livermorio (anteriormente llamado ununhexio, Uuh) es el nombre del elemento sintético de la tabla periódica cuyo símbolo es Lv y su número atómico es 116. Su nombre viene dado en honor al Laboratorio Nacional Lawrence Livermore (Lawrence Livermore National Laboratory), en Livermore, California.En 2000, investigadores del Laboratorio Nacional Lawrence Berkeley anunciaron la creación del elemento 116, en un artículo publicado en una revista de los EE. UU. llamada Physical Review Letters, explican que lo hicieron cuando se observó el decaimiento-α de un átomo de mayor número atómico. El año siguiente publicaron su retracción tras ver que no eran capaces de volver a hacer el experimento.​ En junio de 2002, el director del laboratorio anunció que los datos del experimento habían sido falsificados por su autor principal Victor Ninov.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Teneso',
            'symbol' => 'Ts',
            'atomicNumber' => 117,
            'atomicMass' => 294,
            'category' => 'Halógenos',
            'elementType' => 'No metales',
            'stateMass' => 'Desconocido',
            'group' => 17,
            'block' => 'p',
            'description' => 'El teneso​ (anteriormente llamado ununseptio, con el símbolo provisional Uus hasta su aceptación oficial como nuevo elemento por la IUPAC en noviembre de 2016) es un elemento sintético muy pesado de la tabla periódica de los elementos cuyo símbolo es Ts y número atómico 117. También conocido como eka-astato o simplemente elemento 117, es el segundo elemento más pesado creado hasta ahora y el penúltimo del séptimo período en la tabla periódica. Su descubrimiento se anunció en 2010 y fue fruto de una colaboración entre científicos rusos y estadounidenses en el Instituto Central de Investigaciones Nucleares de Dubná, Rusia.',
            'image'=> '',
        ]);

        $element = Element::create([
            'name' => 'Oganesón',
            'symbol' => 'Og',
            'atomicNumber' => 118,
            'atomicMass' => 294,
            'category' => 'Desconocido',
            'elementType' => 'Deconocido',
            'stateMass' => 'Desconocido',
            'group' => 18,
            'block' => 'p',
            'description' => 'El oganesón (anteriormente llamado ununoctio) es el nombre para el elemento sintético de la tabla periódica cuyo símbolo es Og y su número atómico es 118.​ Es el elemento más pesado sintetizado hasta ahora y el último del séptimo período en la tabla periódica. En la tabla periódica es un elemento del bloque p y el último del periodo 7. El oganesón es actualmente el único elemento sintético del grupo 18 y posee el número y masa atómica más altos de todos los elementos sintetizados. El 30 de diciembre de 2015, la IUPAC anunció en su portal web la verificación del descubrimiento de cuatro elementos del período 7, entre ellos el oganesón. El nuevo elemento fue así llamado en español (con la terminación –ón tónica) siguiendo el criterio ortográfico de denominación de los gases nobles (neón, xenón…). Fue nombrado así en honor al físico ruso Yuri Oganesián.',
            'image'=> '',
        ]);
    }
}
