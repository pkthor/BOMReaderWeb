<?php

use Illuminate\Database\Seeder;

class NarratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$narrators = array (
            0 => 
            array (
              'uuid' => 1,
              'bookID' => 1,
              'book' => 'Intro',
              'chapter' => 1,
              'narrator' => 'Tommaso Cardullo',
              'narratorImageName' => 'TommasoCardullo',
              'audioFileName' => 'Intro1',
            ),
            1 => 
            array (
              'uuid' => 2,
              'bookID' => 1,
              'book' => 'Intro',
              'chapter' => 2,
              'narrator' => 'Vincenzo Conforte',
              'narratorImageName' => 'VincenzoConforte',
              'audioFileName' => 'Intro2',
            ),
            2 => 
            array (
              'uuid' => 3,
              'bookID' => 1,
              'book' => 'Intro',
              'chapter' => 3,
              'narrator' => 'Carolina Conforte',
              'narratorImageName' => 'CarolinaConforte',
              'audioFileName' => 'Intro3',
            ),
            3 => 
            array (
              'uuid' => 4,
              'bookID' => 1,
              'book' => 'Intro',
              'chapter' => 4,
              'narrator' => 'Carolina Conforte',
              'narratorImageName' => 'CarolinaConforte',
              'audioFileName' => 'Intro4',
            ),
            4 => 
            array (
              'uuid' => 5,
              'bookID' => 1,
              'book' => 'Intro',
              'chapter' => 5,
              'narrator' => 'Noemi Tonon',
              'narratorImageName' => 'NoemiTonon',
              'audioFileName' => 'Intro5',
            ),
            5 => 
            array (
              'uuid' => 0,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 1,
              'narrator' => 'Giacomo Armillei',
              'narratorImageName' => 'GiacomoArmillei',
              'audioFileName' => '1Nefi1',
            ),
            6 => 
            array (
              'uuid' => 6,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 1,
              'narrator' => 'Giacomo Armillei',
              'narratorImageName' => 'GiacomoArmillei',
              'audioFileName' => '1Nefi1',
            ),
            7 => 
            array (
              'uuid' => 7,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 2,
              'narrator' => 'Emanuele Cascone',
              'narratorImageName' => 'EmanueleCascone',
              'audioFileName' => '1Nefi2',
            ),
            8 => 
            array (
              'uuid' => 8,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 3,
              'narrator' => 'Francesca Spatola',
              'narratorImageName' => 'FrancescaSpatola',
              'audioFileName' => '1Nefi3',
            ),
            9 => 
            array (
              'uuid' => 9,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 4,
              'narrator' => 'Giancarlo Giorgino',
              'narratorImageName' => 'GiancarloGiorgino',
              'audioFileName' => '1Nefi4',
            ),
            10 => 
            array (
              'uuid' => 10,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 5,
              'narrator' => 'Daniele Menis',
              'narratorImageName' => 'DanieleMenis',
              'audioFileName' => '1Nefi5',
            ),
            11 => 
            array (
              'uuid' => 11,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 6,
              'narrator' => 'Enrico Greico',
              'narratorImageName' => 'EnricoGreico',
              'audioFileName' => '1Nefi6',
            ),
            12 => 
            array (
              'uuid' => 12,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 7,
              'narrator' => 'Camilla Botta',
              'narratorImageName' => 'CamillaBotta',
              'audioFileName' => '1Nefi7',
            ),
            13 => 
            array (
              'uuid' => 13,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 8,
              'narrator' => 'Cristina Perricone',
              'narratorImageName' => 'CristinaPerricone',
              'audioFileName' => '1Nefi8',
            ),
            14 => 
            array (
              'uuid' => 14,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 9,
              'narrator' => 'Giorgio Cascone',
              'narratorImageName' => 'GiorgioCascone',
              'audioFileName' => '1Nefi9',
            ),
            15 => 
            array (
              'uuid' => 15,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 10,
              'narrator' => 'Giuseppe Armenise',
              'narratorImageName' => 'GiuseppeArmenise',
              'audioFileName' => '1Nefi10',
            ),
            16 => 
            array (
              'uuid' => 16,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 11,
              'narrator' => 'Alberto Malara',
              'narratorImageName' => 'AlbertoMalara',
              'audioFileName' => '1Nefi11',
            ),
            17 => 
            array (
              'uuid' => 17,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 12,
              'narrator' => 'Maximiliano Virzo',
              'narratorImageName' => 'MaximilianoVirzo',
              'audioFileName' => '1Nefi12',
            ),
            18 => 
            array (
              'uuid' => 18,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 13,
              'narrator' => 'Maria Murgia',
              'narratorImageName' => 'MariaMurgia',
              'audioFileName' => '1Nefi13',
            ),
            19 => 
            array (
              'uuid' => 19,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 14,
              'narrator' => 'Alessio Giolitto',
              'narratorImageName' => 'AlessioGiolitto',
              'audioFileName' => '1Nefi14',
            ),
            20 => 
            array (
              'uuid' => 20,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 15,
              'narrator' => 'Silvana Pulvirenti',
              'narratorImageName' => 'SilvanaPulvirenti',
              'audioFileName' => '1Nefi15',
            ),
            21 => 
            array (
              'uuid' => 21,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 16,
              'narrator' => 'Giunia Bressan',
              'narratorImageName' => 'GiuniaBressan',
              'audioFileName' => '1Nefi16',
            ),
            22 => 
            array (
              'uuid' => 22,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 17,
              'narrator' => 'Eleonora Caravella',
              'narratorImageName' => 'EleonoraCaravella',
              'audioFileName' => '1Nefi17',
            ),
            23 => 
            array (
              'uuid' => 23,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 18,
              'narrator' => 'Teresa Saieva',
              'narratorImageName' => 'TeresaSaieva',
              'audioFileName' => '1Nefi18',
            ),
            24 => 
            array (
              'uuid' => 24,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 19,
              'narrator' => 'Eveline Gibilisco',
              'narratorImageName' => 'EvelineGibilisco',
              'audioFileName' => '1Nefi19',
            ),
            25 => 
            array (
              'uuid' => 25,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 20,
              'narrator' => 'Marianna Pastano',
              'narratorImageName' => 'MariannaPastano',
              'audioFileName' => '1Nefi20',
            ),
            26 => 
            array (
              'uuid' => 26,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 21,
              'narrator' => 'Rosi Zombra',
              'narratorImageName' => 'RosiZombra',
              'audioFileName' => '1Nefi21',
            ),
            27 => 
            array (
              'uuid' => 27,
              'bookID' => 2,
              'book' => '1 Nefi',
              'chapter' => 22,
              'narrator' => 'Emily Cascone',
              'narratorImageName' => 'EmilyCascone',
              'audioFileName' => '1Nefi22',
            ),
            28 => 
            array (
              'uuid' => 28,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 1,
              'narrator' => 'Naomi Caraffa',
              'narratorImageName' => 'NaomiCaraffa',
              'audioFileName' => '2Nefi1',
            ),
            29 => 
            array (
              'uuid' => 29,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 2,
              'narrator' => 'Francesca Spatola',
              'narratorImageName' => 'FrancescaSpatola',
              'audioFileName' => '2Nefi2',
            ),
            30 => 
            array (
              'uuid' => 30,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 3,
              'narrator' => 'Florinda Ferreri',
              'narratorImageName' => 'FlorindaFerreri',
              'audioFileName' => '2Nefi3',
            ),
            31 => 
            array (
              'uuid' => 31,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 4,
              'narrator' => 'Andrea Santoro',
              'narratorImageName' => 'AndreaSantoro',
              'audioFileName' => '2Nefi4',
            ),
            32 => 
            array (
              'uuid' => 32,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 5,
              'narrator' => 'Patrizia Conforte',
              'narratorImageName' => 'PatriziaConforte',
              'audioFileName' => '2Nefi5',
            ),
            33 => 
            array (
              'uuid' => 33,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 6,
              'narrator' => 'Vittoria Todisco',
              'narratorImageName' => 'VittoriaTodisco',
              'audioFileName' => '2Nefi6',
            ),
            34 => 
            array (
              'uuid' => 34,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 7,
              'narrator' => 'Dario De Angelis',
              'narratorImageName' => 'DarioDeAngelis',
              'audioFileName' => '2Nefi7',
            ),
            35 => 
            array (
              'uuid' => 35,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 8,
              'narrator' => 'Rinaldo Paoletti',
              'narratorImageName' => 'RinaldoPaoletti',
              'audioFileName' => '2Nefi8',
            ),
            36 => 
            array (
              'uuid' => 36,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 9,
              'narrator' => 'Sara Purpari',
              'narratorImageName' => 'SaraPurpari',
              'audioFileName' => '2Nefi9',
            ),
            37 => 
            array (
              'uuid' => 37,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 10,
              'narrator' => 'Maurizio Conforte',
              'narratorImageName' => 'MaurizioConforte',
              'audioFileName' => '2Nefi10',
            ),
            38 => 
            array (
              'uuid' => 38,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 11,
              'narrator' => 'Stefania Tonon',
              'narratorImageName' => 'StefaniaTonon',
              'audioFileName' => '2Nefi11',
            ),
            39 => 
            array (
              'uuid' => 39,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 12,
              'narrator' => 'Santo Rosato',
              'narratorImageName' => 'SantoRosato',
              'audioFileName' => '2Nefi12',
            ),
            40 => 
            array (
              'uuid' => 40,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 13,
              'narrator' => 'Rita Pollina',
              'narratorImageName' => 'RitaPollina',
              'audioFileName' => '2Nefi13',
            ),
            41 => 
            array (
              'uuid' => 41,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 14,
              'narrator' => 'Nicolò Rodio',
              'narratorImageName' => 'NicoloRodio',
              'audioFileName' => '2Nefi14',
            ),
            42 => 
            array (
              'uuid' => 42,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 15,
              'narrator' => 'Eleonora Caravella',
              'narratorImageName' => 'EleonoraCaravella',
              'audioFileName' => '2Nefi15',
            ),
            43 => 
            array (
              'uuid' => 43,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 16,
              'narrator' => 'Nico Calabrese',
              'narratorImageName' => 'NicoCalabrese',
              'audioFileName' => '2Nefi16',
            ),
            44 => 
            array (
              'uuid' => 44,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 17,
              'narrator' => 'Davide Dicarolo',
              'narratorImageName' => 'DavideDicarolo',
              'audioFileName' => '2Nefi17',
            ),
            45 => 
            array (
              'uuid' => 45,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 18,
              'narrator' => 'Giulia Redaelli',
              'narratorImageName' => 'GiuliaRedaelli',
              'audioFileName' => '2Nefi18',
            ),
            46 => 
            array (
              'uuid' => 46,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 19,
              'narrator' => 'Teresa Saieva',
              'narratorImageName' => 'TeresaSaieva',
              'audioFileName' => '2Nefi19',
            ),
            47 => 
            array (
              'uuid' => 47,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 20,
              'narrator' => 'Gaia Pappalardo',
              'narratorImageName' => 'GaiaPappalardo',
              'audioFileName' => '2Nefi20',
            ),
            48 => 
            array (
              'uuid' => 48,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 21,
              'narrator' => 'Alessandro Cusumano',
              'narratorImageName' => 'AlessandroCusumano',
              'audioFileName' => '2Nefi21',
            ),
            49 => 
            array (
              'uuid' => 49,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 22,
              'narrator' => 'Andrea Cusumano',
              'narratorImageName' => 'AndreaCusumano',
              'audioFileName' => '2Nefi22',
            ),
            50 => 
            array (
              'uuid' => 50,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 23,
              'narrator' => 'Florinda Ferreri',
              'narratorImageName' => 'FlorindaFerreri',
              'audioFileName' => '2Nefi23',
            ),
            51 => 
            array (
              'uuid' => 51,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 24,
              'narrator' => 'Francesco Mannino',
              'narratorImageName' => 'FrancescoMannino',
              'audioFileName' => '2Nefi24',
            ),
            52 => 
            array (
              'uuid' => 52,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 25,
              'narrator' => 'Letizia Furia',
              'narratorImageName' => 'LetiziaFuria',
              'audioFileName' => '2Nefi25',
            ),
            53 => 
            array (
              'uuid' => 53,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 26,
              'narrator' => 'Noemi Tonon',
              'narratorImageName' => 'NoemiTonon',
              'audioFileName' => '2Nefi26',
            ),
            54 => 
            array (
              'uuid' => 54,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 27,
              'narrator' => 'Emanuel Tribaudino',
              'narratorImageName' => 'EmanuelTribaudino',
              'audioFileName' => '2Nefi27',
            ),
            55 => 
            array (
              'uuid' => 55,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 28,
              'narrator' => 'Davide Dicarolo',
              'narratorImageName' => 'DavideDicarolo',
              'audioFileName' => '2Nefi28',
            ),
            56 => 
            array (
              'uuid' => 56,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 29,
              'narrator' => 'Olimpia Diodato',
              'narratorImageName' => 'OlimpiaDiodato',
              'audioFileName' => '2Nefi29',
            ),
            57 => 
            array (
              'uuid' => 57,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 30,
              'narrator' => 'Giulia  Diodato',
              'narratorImageName' => 'GiuliaDiodato',
              'audioFileName' => '2Nefi30',
            ),
            58 => 
            array (
              'uuid' => 58,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 31,
              'narrator' => 'Thomas Tonon',
              'narratorImageName' => 'ThomasTonon',
              'audioFileName' => '2Nefi31',
            ),
            59 => 
            array (
              'uuid' => 59,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 32,
              'narrator' => 'Morgan Tonon',
              'narratorImageName' => 'MorganTonon',
              'audioFileName' => '2Nefi32',
            ),
            60 => 
            array (
              'uuid' => 60,
              'bookID' => 3,
              'book' => '2 Nefi',
              'chapter' => 33,
              'narrator' => 'Bruno Diodato',
              'narratorImageName' => 'BrunoDiodato',
              'audioFileName' => '2Nefi33',
            ),
            61 => 
            array (
              'uuid' => 61,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 1,
              'narrator' => 'Andrea Bertocchi',
              'narratorImageName' => 'AndreaBertocchi',
              'audioFileName' => 'Giacobbe1',
            ),
            62 => 
            array (
              'uuid' => 62,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 2,
              'narrator' => 'Giovanni Dal Pozzo',
              'narratorImageName' => 'GiovanniDalPozzo',
              'audioFileName' => 'Giacobbe2',
            ),
            63 => 
            array (
              'uuid' => 63,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 3,
              'narrator' => 'Francesco Rodio',
              'narratorImageName' => 'FrancescoRodio',
              'audioFileName' => 'Giacobbe3',
            ),
            64 => 
            array (
              'uuid' => 64,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 4,
              'narrator' => 'Silvia Rodio',
              'narratorImageName' => 'SilviaRodio',
              'audioFileName' => 'Giacobbe4',
            ),
            65 => 
            array (
              'uuid' => 65,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 5,
              'narrator' => 'Elisa Carrus Giolitto',
              'narratorImageName' => 'ElisaCarrusGiolitto',
              'audioFileName' => 'Giacobbe5',
            ),
            66 => 
            array (
              'uuid' => 66,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 6,
              'narrator' => 'Sara Sisto',
              'narratorImageName' => 'SaraSisto',
              'audioFileName' => 'Giacobbe6',
            ),
            67 => 
            array (
              'uuid' => 67,
              'bookID' => 4,
              'book' => 'Giacobbe',
              'chapter' => 7,
              'narrator' => 'Anna Maria Zilli',
              'narratorImageName' => 'AnnaMariaZilli',
              'audioFileName' => 'Giacobbe7',
            ),
            68 => 
            array (
              'uuid' => 68,
              'bookID' => 5,
              'book' => 'Enos',
              'chapter' => 1,
              'narrator' => 'Grazia Conforte',
              'narratorImageName' => 'GraziaConforte',
              'audioFileName' => 'Enos1',
            ),
            69 => 
            array (
              'uuid' => 69,
              'bookID' => 6,
              'book' => 'Giarom',
              'chapter' => 1,
              'narrator' => 'Cristina Perricone',
              'narratorImageName' => 'CristinaPerricone',
              'audioFileName' => 'Giarom1',
            ),
            70 => 
            array (
              'uuid' => 70,
              'bookID' => 7,
              'book' => 'Omni',
              'chapter' => 1,
              'narrator' => 'Noemi Tribaudino',
              'narratorImageName' => 'NoemiTribaudino',
              'audioFileName' => 'Omni1',
            ),
            71 => 
            array (
              'uuid' => 71,
              'bookID' => 8,
              'book' => 'Parole di Mormon',
              'chapter' => 1,
              'narrator' => 'Katia Carrara',
              'narratorImageName' => 'KatiaCarrara',
              'audioFileName' => 'ParolediMormon1',
            ),
            72 => 
            array (
              'uuid' => 72,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 1,
              'narrator' => 'Stefania Tonon',
              'narratorImageName' => 'StefaniaTonon',
              'audioFileName' => 'Mosia1',
            ),
            73 => 
            array (
              'uuid' => 73,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 2,
              'narrator' => 'Francesca Di Ruscio',
              'narratorImageName' => 'FrancescaDiRuscio',
              'audioFileName' => 'Mosia2',
            ),
            74 => 
            array (
              'uuid' => 74,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 3,
              'narrator' => 'Daniele Dicarolo',
              'narratorImageName' => 'DanieleDicarolo',
              'audioFileName' => 'Mosia3',
            ),
            75 => 
            array (
              'uuid' => 75,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 4,
              'narrator' => 'Francesca Lui',
              'narratorImageName' => 'FrancescaLui',
              'audioFileName' => 'Mosia4',
            ),
            76 => 
            array (
              'uuid' => 76,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 5,
              'narrator' => 'Franco Mangifesta',
              'narratorImageName' => 'FrancoMangifesta',
              'audioFileName' => 'Mosia5',
            ),
            77 => 
            array (
              'uuid' => 77,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 6,
              'narrator' => 'Nicolò Rodio',
              'narratorImageName' => 'NicoloRodio',
              'audioFileName' => 'Mosia6',
            ),
            78 => 
            array (
              'uuid' => 78,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 7,
              'narrator' => 'Alexandra Pavesi',
              'narratorImageName' => 'AlexandraPavesi',
              'audioFileName' => 'Mosia7',
            ),
            79 => 
            array (
              'uuid' => 79,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 8,
              'narrator' => 'Silvio Pirondini',
              'narratorImageName' => 'SilvioPirondini',
              'audioFileName' => 'Mosia8',
            ),
            80 => 
            array (
              'uuid' => 80,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 9,
              'narrator' => 'Vittorio Salemi',
              'narratorImageName' => 'VittorioSalemi',
              'audioFileName' => 'Mosia9',
            ),
            81 => 
            array (
              'uuid' => 81,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 10,
              'narrator' => 'Donata Pirondini',
              'narratorImageName' => 'DonataPirondini',
              'audioFileName' => 'Mosia10',
            ),
            82 => 
            array (
              'uuid' => 82,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 11,
              'narrator' => 'Michele Argenti',
              'narratorImageName' => 'MicheleArgenti',
              'audioFileName' => 'Mosia11',
            ),
            83 => 
            array (
              'uuid' => 83,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 12,
              'narrator' => 'Daniele Lui',
              'narratorImageName' => 'DanieleLui',
              'audioFileName' => 'Mosia12',
            ),
            84 => 
            array (
              'uuid' => 84,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 13,
              'narrator' => 'Anna Maria Zilli',
              'narratorImageName' => 'AnnaMariaZilli',
              'audioFileName' => 'Mosia13',
            ),
            85 => 
            array (
              'uuid' => 85,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 14,
              'narrator' => 'Gabriele Teodosi',
              'narratorImageName' => 'GabrieleTeodosi',
              'audioFileName' => 'Mosia14',
            ),
            86 => 
            array (
              'uuid' => 86,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 15,
              'narrator' => 'Buonfiglio Petroni',
              'narratorImageName' => 'BuonfiglioPetroni',
              'audioFileName' => 'Mosia15',
            ),
            87 => 
            array (
              'uuid' => 87,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 16,
              'narrator' => 'Cristiana Baldassi',
              'narratorImageName' => 'CristianaBaldassi',
              'audioFileName' => 'Mosia16',
            ),
            88 => 
            array (
              'uuid' => 88,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 17,
              'narrator' => 'Nicoletta Pagnani',
              'narratorImageName' => 'NicolettaPagnani',
              'audioFileName' => 'Mosia17',
            ),
            89 => 
            array (
              'uuid' => 89,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 18,
              'narrator' => 'Daniele Casella',
              'narratorImageName' => 'DanieleCasella',
              'audioFileName' => 'Mosia18',
            ),
            90 => 
            array (
              'uuid' => 90,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 19,
              'narrator' => 'Roberta Marinello',
              'narratorImageName' => 'RobertaMarinello',
              'audioFileName' => 'Mosia19',
            ),
            91 => 
            array (
              'uuid' => 91,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 20,
              'narrator' => 'Marianna Pastano',
              'narratorImageName' => 'MariannaPastano',
              'audioFileName' => 'Mosia20',
            ),
            92 => 
            array (
              'uuid' => 92,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 21,
              'narrator' => 'Ugo Perego',
              'narratorImageName' => 'UgoPerego',
              'audioFileName' => 'Mosia21',
            ),
            93 => 
            array (
              'uuid' => 93,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 22,
              'narrator' => 'Giuliana Dal Zotto',
              'narratorImageName' => 'GiulianaDalZotto',
              'audioFileName' => 'Mosia22',
            ),
            94 => 
            array (
              'uuid' => 94,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 23,
              'narrator' => 'Valter Buono',
              'narratorImageName' => 'ValterBuono',
              'audioFileName' => 'Mosia23',
            ),
            95 => 
            array (
              'uuid' => 95,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 24,
              'narrator' => 'Fernando Curci',
              'narratorImageName' => 'FernandoCurci',
              'audioFileName' => 'Mosia24',
            ),
            96 => 
            array (
              'uuid' => 96,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 25,
              'narrator' => 'Tranquillo Dal Zotto',
              'narratorImageName' => 'TranquilloDalZotto',
              'audioFileName' => 'Mosia25',
            ),
            97 => 
            array (
              'uuid' => 97,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 26,
              'narrator' => 'Elisabetta Calabrese',
              'narratorImageName' => 'ElisabettaCalabrese',
              'audioFileName' => 'Mosia26',
            ),
            98 => 
            array (
              'uuid' => 98,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 27,
              'narrator' => 'Giorgia Castorina',
              'narratorImageName' => 'GiorgiaCastorina',
              'audioFileName' => 'Mosia27',
            ),
            99 => 
            array (
              'uuid' => 99,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 28,
              'narrator' => 'Umberto Pagnani',
              'narratorImageName' => 'UmbertoPagnani',
              'audioFileName' => 'Mosia28',
            ),
            100 => 
            array (
              'uuid' => 100,
              'bookID' => 9,
              'book' => 'Mosia',
              'chapter' => 29,
              'narrator' => 'Silvia Guidara',
              'narratorImageName' => 'SilviaGuidara',
              'audioFileName' => 'Mosia29',
            ),
            101 => 
            array (
              'uuid' => 101,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 1,
              'narrator' => 'Settimia Lui',
              'narratorImageName' => 'SettimiaLui',
              'audioFileName' => 'Alma1',
            ),
            102 => 
            array (
              'uuid' => 102,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 2,
              'narrator' => 'Gabriele Di Liberto',
              'narratorImageName' => 'GabrieleDiLiberto',
              'audioFileName' => 'Alma2',
            ),
            103 => 
            array (
              'uuid' => 103,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 3,
              'narrator' => 'Federica Netto',
              'narratorImageName' => 'FedericaNetto',
              'audioFileName' => 'Alma3',
            ),
            104 => 
            array (
              'uuid' => 104,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 4,
              'narrator' => 'Alexandra Pavesi',
              'narratorImageName' => 'AlexandraPavesi',
              'audioFileName' => 'Alma4',
            ),
            105 => 
            array (
              'uuid' => 105,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 5,
              'narrator' => 'Miriam Bressan',
              'narratorImageName' => 'MiriamBressan',
              'audioFileName' => 'Alma5',
            ),
            106 => 
            array (
              'uuid' => 106,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 6,
              'narrator' => 'Giovanni Pulvirenti',
              'narratorImageName' => 'GiovanniPulvirenti',
              'audioFileName' => 'Alma6',
            ),
            107 => 
            array (
              'uuid' => 107,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 7,
              'narrator' => 'Elvisa De Santis',
              'narratorImageName' => 'ElvisaDeSantis',
              'audioFileName' => 'Alma7',
            ),
            108 => 
            array (
              'uuid' => 108,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 8,
              'narrator' => 'Melissa Reyes',
              'narratorImageName' => 'MelissaReyes',
              'audioFileName' => 'Alma8',
            ),
            109 => 
            array (
              'uuid' => 109,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 9,
              'narrator' => 'Antonio Murgia',
              'narratorImageName' => 'AntonioMurgia',
              'audioFileName' => 'Alma9',
            ),
            110 => 
            array (
              'uuid' => 110,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 10,
              'narrator' => 'Maria Murgia',
              'narratorImageName' => 'MariaMurgia',
              'audioFileName' => 'Alma10',
            ),
            111 => 
            array (
              'uuid' => 111,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 11,
              'narrator' => 'Edoardo Iob',
              'narratorImageName' => 'EdoardoIob',
              'audioFileName' => 'Alma11',
            ),
            112 => 
            array (
              'uuid' => 112,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 12,
              'narrator' => 'Edoardo Iob',
              'narratorImageName' => 'EdoardoIob',
              'audioFileName' => 'Alma12',
            ),
            113 => 
            array (
              'uuid' => 113,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 13,
              'narrator' => 'Matteo Lusso',
              'narratorImageName' => 'MatteoLusso',
              'audioFileName' => 'Alma13',
            ),
            114 => 
            array (
              'uuid' => 114,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 14,
              'narrator' => 'Vincenzo Saeli',
              'narratorImageName' => 'VincenzoSaeli',
              'audioFileName' => 'Alma14',
            ),
            115 => 
            array (
              'uuid' => 115,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 15,
              'narrator' => 'Gaspar Lazarte',
              'narratorImageName' => 'GasparLazarte',
              'audioFileName' => 'Alma15',
            ),
            116 => 
            array (
              'uuid' => 116,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 16,
              'narrator' => 'Volodymyr Prystupa',
              'narratorImageName' => 'VolodymyrPrystupa',
              'audioFileName' => 'Alma16',
            ),
            117 => 
            array (
              'uuid' => 117,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 17,
              'narrator' => 'Francesco Locorotondo',
              'narratorImageName' => 'FrancescoLocorotondo',
              'audioFileName' => 'Alma17',
            ),
            118 => 
            array (
              'uuid' => 118,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 18,
              'narrator' => 'Francesco Fasano',
              'narratorImageName' => 'FrancescoFasano',
              'audioFileName' => 'Alma18',
            ),
            119 => 
            array (
              'uuid' => 119,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 19,
              'narrator' => 'Naomi Armenise',
              'narratorImageName' => 'NaomiArmenise',
              'audioFileName' => 'Alma19',
            ),
            120 => 
            array (
              'uuid' => 120,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 20,
              'narrator' => 'Patrizia Conforte',
              'narratorImageName' => 'PatriziaConforte',
              'audioFileName' => 'Alma20',
            ),
            121 => 
            array (
              'uuid' => 121,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 21,
              'narrator' => 'Maria Arcidiacano',
              'narratorImageName' => 'MariaArcidiacano',
              'audioFileName' => 'Alma21',
            ),
            122 => 
            array (
              'uuid' => 122,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 22,
              'narrator' => 'Francesco Fasano',
              'narratorImageName' => 'FrancescoFasano',
              'audioFileName' => 'Alma22',
            ),
            123 => 
            array (
              'uuid' => 123,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 23,
              'narrator' => 'Venerina Malara',
              'narratorImageName' => 'VenerinaMalara',
              'audioFileName' => 'Alma23',
            ),
            124 => 
            array (
              'uuid' => 124,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 24,
              'narrator' => 'Emily Cascone',
              'narratorImageName' => 'EmilyCascone',
              'audioFileName' => 'Alma24',
            ),
            125 => 
            array (
              'uuid' => 125,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 25,
              'narrator' => 'Rosa Calabrese',
              'narratorImageName' => 'RosaCalabrese',
              'audioFileName' => 'Alma25',
            ),
            126 => 
            array (
              'uuid' => 126,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 26,
              'narrator' => 'Rebecca Bertone',
              'narratorImageName' => 'RebeccaBertone',
              'audioFileName' => 'Alma26',
            ),
            127 => 
            array (
              'uuid' => 127,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 27,
              'narrator' => 'Debora Siniscalchi',
              'narratorImageName' => 'DeboraSiniscalchi',
              'audioFileName' => 'Alma27',
            ),
            128 => 
            array (
              'uuid' => 128,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 28,
              'narrator' => 'Settimia Lui',
              'narratorImageName' => 'SettimiaLui',
              'audioFileName' => 'Alma28',
            ),
            129 => 
            array (
              'uuid' => 129,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 29,
              'narrator' => 'Miriam Bressan',
              'narratorImageName' => 'MiriamBressan',
              'audioFileName' => 'Alma29',
            ),
            130 => 
            array (
              'uuid' => 130,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 30,
              'narrator' => 'Elisa Carrus Giolitto',
              'narratorImageName' => 'ElisaCarrusGiolitto',
              'audioFileName' => 'Alma30',
            ),
            131 => 
            array (
              'uuid' => 131,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 31,
              'narrator' => 'Morgan Tonon',
              'narratorImageName' => 'MorganTonon',
              'audioFileName' => 'Alma31',
            ),
            132 => 
            array (
              'uuid' => 132,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 32,
              'narrator' => 'Cristina Perricone',
              'narratorImageName' => 'CristinaPerricone',
              'audioFileName' => 'Alma32',
            ),
            133 => 
            array (
              'uuid' => 133,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 33,
              'narrator' => 'Stefano Pace',
              'narratorImageName' => 'StefanoPace',
              'audioFileName' => 'Alma33',
            ),
            134 => 
            array (
              'uuid' => 134,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 34,
              'narrator' => 'Emanuele Cascone',
              'narratorImageName' => 'EmanueleCascone',
              'audioFileName' => 'Alma34',
            ),
            135 => 
            array (
              'uuid' => 135,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 35,
              'narrator' => 'Jeimy Sisto',
              'narratorImageName' => 'JeimySisto',
              'audioFileName' => 'Alma35',
            ),
            136 => 
            array (
              'uuid' => 136,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 36,
              'narrator' => 'Marialuisa Di Liberto',
              'narratorImageName' => 'MarialuisaDiLiberto',
              'audioFileName' => 'Alma36',
            ),
            137 => 
            array (
              'uuid' => 137,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 37,
              'narrator' => 'Jessica Caramia',
              'narratorImageName' => 'JessicaCaramia',
              'audioFileName' => 'Alma37',
            ),
            138 => 
            array (
              'uuid' => 138,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 38,
              'narrator' => 'Marilene Rossetti',
              'narratorImageName' => 'MarileneRossetti',
              'audioFileName' => 'Alma38',
            ),
            139 => 
            array (
              'uuid' => 139,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 39,
              'narrator' => 'Domenico Corvasce',
              'narratorImageName' => 'DomenicoCorvasce',
              'audioFileName' => 'Alma39',
            ),
            140 => 
            array (
              'uuid' => 140,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 40,
              'narrator' => 'Davide Dicarolo',
              'narratorImageName' => 'DavideDicarolo',
              'audioFileName' => 'Alma40',
            ),
            141 => 
            array (
              'uuid' => 141,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 41,
              'narrator' => 'Igea Locorotondo',
              'narratorImageName' => 'IgeaLocorotondo',
              'audioFileName' => 'Alma41',
            ),
            142 => 
            array (
              'uuid' => 142,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 42,
              'narrator' => 'Joshua Corvasce',
              'narratorImageName' => 'JoshuaCorvasce',
              'audioFileName' => 'Alma42',
            ),
            143 => 
            array (
              'uuid' => 143,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 43,
              'narrator' => 'Carla Bertone',
              'narratorImageName' => 'CarlaBertone',
              'audioFileName' => 'Alma43',
            ),
            144 => 
            array (
              'uuid' => 144,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 44,
              'narrator' => 'Pino Valle',
              'narratorImageName' => 'PinoValle',
              'audioFileName' => 'Alma44',
            ),
            145 => 
            array (
              'uuid' => 145,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 45,
              'narrator' => 'Grazia Battezzato',
              'narratorImageName' => 'GraziaBattezzato',
              'audioFileName' => 'Alma45',
            ),
            146 => 
            array (
              'uuid' => 146,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 46,
              'narrator' => 'Micol Bressan',
              'narratorImageName' => 'MicolBressan',
              'audioFileName' => 'Alma46',
            ),
            147 => 
            array (
              'uuid' => 147,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 47,
              'narrator' => 'Giacomo Bressan',
              'narratorImageName' => 'GiacomoBressan',
              'audioFileName' => 'Alma47',
            ),
            148 => 
            array (
              'uuid' => 148,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 48,
              'narrator' => 'Perla Pulvirenti',
              'narratorImageName' => 'PerlaPulvirenti',
              'audioFileName' => 'Alma48',
            ),
            149 => 
            array (
              'uuid' => 149,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 49,
              'narrator' => 'Joy Pulvirenti',
              'narratorImageName' => 'JoyPulvirenti',
              'audioFileName' => 'Alma49',
            ),
            150 => 
            array (
              'uuid' => 150,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 50,
              'narrator' => 'Giuseppe Pulvirenti',
              'narratorImageName' => 'GiuseppePulvirenti',
              'audioFileName' => 'Alma50',
            ),
            151 => 
            array (
              'uuid' => 151,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 51,
              'narrator' => 'Giuseppe Pulvirenti',
              'narratorImageName' => 'GiuseppePulvirenti',
              'audioFileName' => 'Alma51',
            ),
            152 => 
            array (
              'uuid' => 152,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 52,
              'narrator' => 'Lorenzo Bertone',
              'narratorImageName' => 'LorenzoBertone',
              'audioFileName' => 'Alma52',
            ),
            153 => 
            array (
              'uuid' => 153,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 53,
              'narrator' => 'Angelika Iob',
              'narratorImageName' => 'AngelikaIob',
              'audioFileName' => 'Alma53',
            ),
            154 => 
            array (
              'uuid' => 154,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 54,
              'narrator' => 'Daniela Caggese',
              'narratorImageName' => 'DanielaCaggese',
              'audioFileName' => 'Alma54',
            ),
            155 => 
            array (
              'uuid' => 155,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 55,
              'narrator' => 'Beatrice Dicarolo',
              'narratorImageName' => 'BeatriceDicarolo',
              'audioFileName' => 'Alma55',
            ),
            156 => 
            array (
              'uuid' => 156,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 56,
              'narrator' => 'Riccardo Vanoli',
              'narratorImageName' => 'RiccardoVanoli',
              'audioFileName' => 'Alma56',
            ),
            157 => 
            array (
              'uuid' => 157,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 57,
              'narrator' => 'Naomi Caramia',
              'narratorImageName' => 'NaomiCaramia',
              'audioFileName' => 'Alma57',
            ),
            158 => 
            array (
              'uuid' => 158,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 58,
              'narrator' => 'Naomi Caramia',
              'narratorImageName' => 'NaomiCaramia',
              'audioFileName' => 'Alma58',
            ),
            159 => 
            array (
              'uuid' => 159,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 59,
              'narrator' => 'Letizia Furia',
              'narratorImageName' => 'LetiziaFuria',
              'audioFileName' => 'Alma59',
            ),
            160 => 
            array (
              'uuid' => 160,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 60,
              'narrator' => 'Elisabetta Calabrese',
              'narratorImageName' => 'ElisabettaCalabrese',
              'audioFileName' => 'Alma60',
            ),
            161 => 
            array (
              'uuid' => 161,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 61,
              'narrator' => 'Chiara Cantoni',
              'narratorImageName' => 'ChiaraCantoni',
              'audioFileName' => 'Alma61',
            ),
            162 => 
            array (
              'uuid' => 162,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 62,
              'narrator' => 'Nancy Fiorillo',
              'narratorImageName' => 'NancyFiorillo',
              'audioFileName' => 'Alma62',
            ),
            163 => 
            array (
              'uuid' => 163,
              'bookID' => 10,
              'book' => 'Alma',
              'chapter' => 63,
              'narrator' => 'Francesca Di Ruscio',
              'narratorImageName' => 'FrancescaDiRuscio',
              'audioFileName' => 'Alma63',
            ),
            164 => 
            array (
              'uuid' => 164,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 1,
              'narrator' => 'Giulia Redaelli',
              'narratorImageName' => 'GiuliaRedaelli',
              'audioFileName' => 'Helaman1',
            ),
            165 => 
            array (
              'uuid' => 165,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 2,
              'narrator' => 'Teresa Di Ruscio',
              'narratorImageName' => 'TeresaDiRuscio',
              'audioFileName' => 'Helaman2',
            ),
            166 => 
            array (
              'uuid' => 166,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 3,
              'narrator' => 'Daniele Benigni',
              'narratorImageName' => 'DanieleBenigni',
              'audioFileName' => 'Helaman3',
            ),
            167 => 
            array (
              'uuid' => 167,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 4,
              'narrator' => 'Lorenzo Botta',
              'narratorImageName' => 'LorenzoBotta',
              'audioFileName' => 'Helaman4',
            ),
            168 => 
            array (
              'uuid' => 168,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 5,
              'narrator' => 'Serena Fiorillo',
              'narratorImageName' => 'SerenaFiorillo',
              'audioFileName' => 'Helaman5',
            ),
            169 => 
            array (
              'uuid' => 169,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 6,
              'narrator' => 'Jessica Caramia',
              'narratorImageName' => 'JessicaCaramia',
              'audioFileName' => 'Helaman6',
            ),
            170 => 
            array (
              'uuid' => 170,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 7,
              'narrator' => 'Marisa Corvasce',
              'narratorImageName' => 'MarisaCorvasce',
              'audioFileName' => 'Helaman7',
            ),
            171 => 
            array (
              'uuid' => 171,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 8,
              'narrator' => 'Enos Corvasce',
              'narratorImageName' => 'EnosCorvasce',
              'audioFileName' => 'Helaman8',
            ),
            172 => 
            array (
              'uuid' => 172,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 9,
              'narrator' => 'Mara Bartolucci',
              'narratorImageName' => 'MaraBartolucci',
              'audioFileName' => 'Helaman9',
            ),
            173 => 
            array (
              'uuid' => 173,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 10,
              'narrator' => 'Angelika Iob',
              'narratorImageName' => 'AngelikaIob',
              'audioFileName' => 'Helaman10',
            ),
            174 => 
            array (
              'uuid' => 174,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 11,
              'narrator' => 'Melissa',
              'narratorImageName' => 'Melissa',
              'audioFileName' => 'Helaman11',
            ),
            175 => 
            array (
              'uuid' => 175,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 12,
              'narrator' => 'Gabriella Maniera',
              'narratorImageName' => 'GabriellaManiera',
              'audioFileName' => 'Helaman12',
            ),
            176 => 
            array (
              'uuid' => 176,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 13,
              'narrator' => 'Carla Giorgino',
              'narratorImageName' => 'CarlaGiorgino',
              'audioFileName' => 'Helaman13',
            ),
            177 => 
            array (
              'uuid' => 177,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 14,
              'narrator' => 'Ornella Lepore',
              'narratorImageName' => 'OrnellaLepore',
              'audioFileName' => 'Helaman14',
            ),
            178 => 
            array (
              'uuid' => 178,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 15,
              'narrator' => 'Francesco Lepore',
              'narratorImageName' => 'FrancescoLepore',
              'audioFileName' => 'Helaman15',
            ),
            179 => 
            array (
              'uuid' => 179,
              'bookID' => 11,
              'book' => 'Helaman',
              'chapter' => 16,
              'narrator' => 'Pina D’Andrea',
              'narratorImageName' => 'PinaDAndrea',
              'audioFileName' => 'Helaman16',
            ),
            180 => 
            array (
              'uuid' => 180,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 1,
              'narrator' => 'Daniele Lui',
              'narratorImageName' => 'DanieleLui',
              'audioFileName' => '3Nefi1',
            ),
            181 => 
            array (
              'uuid' => 181,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 2,
              'narrator' => 'Giuseppe Viglietta',
              'narratorImageName' => 'GiuseppeViglietta',
              'audioFileName' => '3Nefi2',
            ),
            182 => 
            array (
              'uuid' => 182,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 3,
              'narrator' => 'Antonio Murgia',
              'narratorImageName' => 'AntonioMurgia',
              'audioFileName' => '3Nefi3',
            ),
            183 => 
            array (
              'uuid' => 183,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 4,
              'narrator' => 'Ester Tonon',
              'narratorImageName' => 'EsterTonon',
              'audioFileName' => '3Nefi4',
            ),
            184 => 
            array (
              'uuid' => 184,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 5,
              'narrator' => 'Ester Tonon',
              'narratorImageName' => 'EsterTonon',
              'audioFileName' => '3Nefi5',
            ),
            185 => 
            array (
              'uuid' => 185,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 6,
              'narrator' => 'Tommaso Cardullo',
              'narratorImageName' => 'TommasoCardullo',
              'audioFileName' => '3Nefi6',
            ),
            186 => 
            array (
              'uuid' => 186,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 7,
              'narrator' => 'Paola Battistini',
              'narratorImageName' => 'PaolaBattistini',
              'audioFileName' => '3Nefi7',
            ),
            187 => 
            array (
              'uuid' => 187,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 8,
              'narrator' => 'Nicola Scarola',
              'narratorImageName' => 'NicolaScarola',
              'audioFileName' => '3Nefi8',
            ),
            188 => 
            array (
              'uuid' => 188,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 9,
              'narrator' => 'Carlo Battistini',
              'narratorImageName' => 'CarloBattistini',
              'audioFileName' => '3Nefi9',
            ),
            189 => 
            array (
              'uuid' => 189,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 10,
              'narrator' => 'Giorgia Castorina',
              'narratorImageName' => 'GiorgiaCastorina',
              'audioFileName' => '3Nefi10',
            ),
            190 => 
            array (
              'uuid' => 190,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 11,
              'narrator' => 'Miriam Bressan',
              'narratorImageName' => 'MiriamBressan',
              'audioFileName' => '3Nefi11',
            ),
            191 => 
            array (
              'uuid' => 191,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 12,
              'narrator' => 'Stefano Pace',
              'narratorImageName' => 'StefanoPace',
              'audioFileName' => '3Nefi12',
            ),
            192 => 
            array (
              'uuid' => 192,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 13,
              'narrator' => 'Fernando Curci',
              'narratorImageName' => 'FernandoCurci',
              'audioFileName' => '3Nefi13',
            ),
            193 => 
            array (
              'uuid' => 193,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 14,
              'narrator' => 'Francesco Mannino',
              'narratorImageName' => 'FrancescoMannino',
              'audioFileName' => '3Nefi14',
            ),
            194 => 
            array (
              'uuid' => 194,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 15,
              'narrator' => 'Massimiliano Carrus',
              'narratorImageName' => 'MassimilianoCarrus',
              'audioFileName' => '3Nefi15',
            ),
            195 => 
            array (
              'uuid' => 195,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 16,
              'narrator' => 'Mirella Corvasce',
              'narratorImageName' => 'MirellaCorvasce',
              'audioFileName' => '3Nefi16',
            ),
            196 => 
            array (
              'uuid' => 196,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 17,
              'narrator' => 'Emanuele Carrus',
              'narratorImageName' => 'EmanueleCarrus',
              'audioFileName' => '3Nefi17',
            ),
            197 => 
            array (
              'uuid' => 197,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 18,
              'narrator' => 'Alessio Giolitto',
              'narratorImageName' => 'AlessioGiolitto',
              'audioFileName' => '3Nefi18',
            ),
            198 => 
            array (
              'uuid' => 198,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 19,
              'narrator' => 'Emanuele Carrus',
              'narratorImageName' => 'EmanueleCarrus',
              'audioFileName' => '3Nefi19',
            ),
            199 => 
            array (
              'uuid' => 199,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 20,
              'narrator' => 'Michol Lo Coco',
              'narratorImageName' => 'MicholLoCoco',
              'audioFileName' => '3Nefi20',
            ),
            200 => 
            array (
              'uuid' => 200,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 21,
              'narrator' => 'Sergio Giolitto',
              'narratorImageName' => 'SergioGiolitto',
              'audioFileName' => '3Nefi21',
            ),
            201 => 
            array (
              'uuid' => 201,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 22,
              'narrator' => 'Emanuel Tribaudino',
              'narratorImageName' => 'EmanuelTribaudino',
              'audioFileName' => '3Nefi22',
            ),
            202 => 
            array (
              'uuid' => 202,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 23,
              'narrator' => 'Marco Marinello',
              'narratorImageName' => 'MarcoMarinello',
              'audioFileName' => '3Nefi23',
            ),
            203 => 
            array (
              'uuid' => 203,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 24,
              'narrator' => 'Teodora Di Pietro',
              'narratorImageName' => 'TeodoraDiPietro',
              'audioFileName' => '3Nefi24',
            ),
            204 => 
            array (
              'uuid' => 204,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 25,
              'narrator' => 'Sara Marinello',
              'narratorImageName' => 'SaraMarinello',
              'audioFileName' => '3Nefi25',
            ),
            205 => 
            array (
              'uuid' => 205,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 26,
              'narrator' => 'Daniele Dicarolo',
              'narratorImageName' => 'DanieleDicarolo',
              'audioFileName' => '3Nefi26',
            ),
            206 => 
            array (
              'uuid' => 206,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 27,
              'narrator' => 'Emanuele Guidara',
              'narratorImageName' => 'EmanueleGuidara',
              'audioFileName' => '3Nefi27',
            ),
            207 => 
            array (
              'uuid' => 207,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 28,
              'narrator' => 'Airina Giolitto',
              'narratorImageName' => 'AirinaGiolitto',
              'audioFileName' => '3Nefi28',
            ),
            208 => 
            array (
              'uuid' => 208,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 29,
              'narrator' => 'Maria Scarola',
              'narratorImageName' => 'MariaScarola',
              'audioFileName' => '3Nefi29',
            ),
            209 => 
            array (
              'uuid' => 209,
              'bookID' => 12,
              'book' => '3 Nefi',
              'chapter' => 30,
              'narrator' => 'Lorenzo Bertone',
              'narratorImageName' => 'LorenzoBertone',
              'audioFileName' => '3Nefi30',
            ),
            210 => 
            array (
              'uuid' => 210,
              'bookID' => 13,
              'book' => '4 Nefi',
              'chapter' => 1,
              'narrator' => 'Tommaso Cardullo',
              'narratorImageName' => 'TommasoCardullo',
              'audioFileName' => '4Nefi1',
            ),
            211 => 
            array (
              'uuid' => 211,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 1,
              'narrator' => 'Cristiana Baldassi',
              'narratorImageName' => 'CristianaBaldassi',
              'audioFileName' => 'Mormon1',
            ),
            212 => 
            array (
              'uuid' => 212,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 2,
              'narrator' => 'Sara Dini Ciacci',
              'narratorImageName' => 'SaraDiniCiacci',
              'audioFileName' => 'Mormon2',
            ),
            213 => 
            array (
              'uuid' => 213,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 3,
              'narrator' => 'Rebecca Dini Ciacci',
              'narratorImageName' => 'RebeccaDiniCiacci',
              'audioFileName' => 'Mormon3',
            ),
            214 => 
            array (
              'uuid' => 214,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 4,
              'narrator' => 'Filippo Dini Ciacci',
              'narratorImageName' => 'FilippoDiniCiacci',
              'audioFileName' => 'Mormon4',
            ),
            215 => 
            array (
              'uuid' => 215,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 5,
              'narrator' => 'Silvia Guidara',
              'narratorImageName' => 'SilviaGuidara',
              'audioFileName' => 'Mormon5',
            ),
            216 => 
            array (
              'uuid' => 216,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 6,
              'narrator' => 'Daniele Benigni',
              'narratorImageName' => 'DanieleBenigni',
              'audioFileName' => 'Mormon6',
            ),
            217 => 
            array (
              'uuid' => 217,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 7,
              'narrator' => 'Rebecca Bertone',
              'narratorImageName' => 'RebeccaBertone',
              'audioFileName' => 'Mormon7',
            ),
            218 => 
            array (
              'uuid' => 218,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 8,
              'narrator' => 'Giunia Bressan',
              'narratorImageName' => 'GiuniaBressan',
              'audioFileName' => 'Mormon8',
            ),
            219 => 
            array (
              'uuid' => 219,
              'bookID' => 14,
              'book' => 'Mormon',
              'chapter' => 9,
              'narrator' => 'Miriam Bressan',
              'narratorImageName' => 'MiriamBressan',
              'audioFileName' => 'Mormon9',
            ),
            220 => 
            array (
              'uuid' => 220,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 1,
              'narrator' => 'Biagio Fiorillo',
              'narratorImageName' => 'BiagioFiorillo',
              'audioFileName' => 'Ether1',
            ),
            221 => 
            array (
              'uuid' => 221,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 2,
              'narrator' => 'Adriana Viglietta',
              'narratorImageName' => 'AdrianaViglietta',
              'audioFileName' => 'Ether2',
            ),
            222 => 
            array (
              'uuid' => 222,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 3,
              'narrator' => 'Elisabetta Calabrese',
              'narratorImageName' => 'ElisabettaCalabrese',
              'audioFileName' => 'Ether3',
            ),
            223 => 
            array (
              'uuid' => 223,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 4,
              'narrator' => 'Nico Calabrese',
              'narratorImageName' => 'NicoCalabrese',
              'audioFileName' => 'Ether4',
            ),
            224 => 
            array (
              'uuid' => 224,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 5,
              'narrator' => 'Andrea Cusumano',
              'narratorImageName' => 'AndreaCusumano',
              'audioFileName' => 'Ether5',
            ),
            225 => 
            array (
              'uuid' => 225,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 6,
              'narrator' => 'Rosalinda Catania',
              'narratorImageName' => 'RosalindaCatania',
              'audioFileName' => 'Ether6',
            ),
            226 => 
            array (
              'uuid' => 226,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 7,
              'narrator' => 'Rosalinda Catania',
              'narratorImageName' => 'RosalindaCatania',
              'audioFileName' => 'Ether7',
            ),
            227 => 
            array (
              'uuid' => 227,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 8,
              'narrator' => 'Daniele Catania',
              'narratorImageName' => 'DanieleCatania',
              'audioFileName' => 'Ether8',
            ),
            228 => 
            array (
              'uuid' => 228,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 9,
              'narrator' => 'Naomi Torre',
              'narratorImageName' => 'NaomiTorre',
              'audioFileName' => 'Ether9',
            ),
            229 => 
            array (
              'uuid' => 229,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 10,
              'narrator' => 'Naomi Torre',
              'narratorImageName' => 'NaomiTorre',
              'audioFileName' => 'Ether10',
            ),
            230 => 
            array (
              'uuid' => 230,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 11,
              'narrator' => 'Veronica Fratta',
              'narratorImageName' => 'VeronicaFratta',
              'audioFileName' => 'Ether11',
            ),
            231 => 
            array (
              'uuid' => 231,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 12,
              'narrator' => 'Debora Siniscalchi',
              'narratorImageName' => 'DeboraSiniscalchi',
              'audioFileName' => 'Ether12',
            ),
            232 => 
            array (
              'uuid' => 232,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 13,
              'narrator' => 'Beatrice Dicarolo',
              'narratorImageName' => 'BeatriceDicarolo',
              'audioFileName' => 'Ether13',
            ),
            233 => 
            array (
              'uuid' => 233,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 14,
              'narrator' => 'Jessica Caramia',
              'narratorImageName' => 'JessicaCaramia',
              'audioFileName' => 'Ether14',
            ),
            234 => 
            array (
              'uuid' => 234,
              'bookID' => 15,
              'book' => 'Ether',
              'chapter' => 15,
              'narrator' => 'Carla Bertone',
              'narratorImageName' => 'CarlaBertone',
              'audioFileName' => 'Ether15',
            ),
            235 => 
            array (
              'uuid' => 235,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 1,
              'narrator' => 'Nicola Giangrosso',
              'narratorImageName' => 'NicolaGiangrosso',
              'audioFileName' => 'Moroni1',
            ),
            236 => 
            array (
              'uuid' => 236,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 2,
              'narrator' => 'Carmela Gibilisco',
              'narratorImageName' => 'CarmelaGibilisco',
              'audioFileName' => 'Moroni2',
            ),
            237 => 
            array (
              'uuid' => 237,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 3,
              'narrator' => 'Enoc Pulvirenti',
              'narratorImageName' => 'EnocPulvirenti',
              'audioFileName' => 'Moroni3',
            ),
            238 => 
            array (
              'uuid' => 238,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 4,
              'narrator' => 'Marco Diodato',
              'narratorImageName' => 'MarcoDiodato',
              'audioFileName' => 'Moroni4',
            ),
            239 => 
            array (
              'uuid' => 239,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 5,
              'narrator' => 'Giorgio Cascone',
              'narratorImageName' => 'GiorgioCascone',
              'audioFileName' => 'Moroni5',
            ),
            240 => 
            array (
              'uuid' => 240,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 6,
              'narrator' => 'Elisabetta Angioni',
              'narratorImageName' => 'ElisabettaAngioni',
              'audioFileName' => 'Moroni6',
            ),
            241 => 
            array (
              'uuid' => 241,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 7,
              'narrator' => 'Giuseppe Ariante',
              'narratorImageName' => 'GiuseppeAriante',
              'audioFileName' => 'Moroni7',
            ),
            242 => 
            array (
              'uuid' => 242,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 8,
              'narrator' => 'Riccardo Vanoli',
              'narratorImageName' => 'RiccardoVanoli',
              'audioFileName' => 'Moroni8',
            ),
            243 => 
            array (
              'uuid' => 243,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 9,
              'narrator' => 'Franca Wei',
              'narratorImageName' => 'FrancaWei',
              'audioFileName' => 'Moroni9',
            ),
            244 => 
            array (
              'uuid' => 244,
              'bookID' => 16,
              'book' => 'Moroni',
              'chapter' => 10,
              'narrator' => 'Vincenzo Conforte',
              'narratorImageName' => 'VincenzoConforte',
              'audioFileName' => 'Moroni10',
            ),
          );

		// Insert Media Table

		$narratorInject = [];
		$i = 1;

		foreach($narrators as $narrator) { 
			
            //create array then put in table insert command
            $filename = $narrator['narratorImageName'] . ".jpg";

			array_push($narratorInject, ['name' => $narrator['narrator'], 'photo' => $filename, 'chapter_id' => $i]);

			$i++;

		}

		DB::table('narrators')->insertOrIgnore($narratorInject);
		
			
    }
}

