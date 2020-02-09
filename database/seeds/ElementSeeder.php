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
        ]);
    }
}
