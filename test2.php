<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--1. Napisati klasu Casovnik koja ima svojstva sat, minut, sekund, konstruktor, gettere i settere kao i __toString metodu. Napraviti instancu klase i testirati sve metode. Napisati metodu trenutnoSati koja vraća instancu klase Casovnik za trenutno vreme (koristiti funkciju date). -->
    <?php
    class Casovnik
    {
        protected $sat;
        protected $minut;
        protected $sekund;
        public function __construct($sat, $minut, $sekund)
        {
            $this->sat = $sat;
            $this->minut = $minut;
            $this->sekund = $sekund;
        }
        public function getSat()
        {
            $this->sat;
        }
        public function setSat($sat)
        {
            $this->sat = $sat;
        }
        public function getMinut()
        {
            $this->minut;
        }
        public function setMinut($minut)
        {
            $this->minut = $minut;
        }
        public function getSekund()
        {
            $this->sekund;
        }
        public function setSekund($sekund)
        {
            $this->sekund = $sekund;
        }
        public function __toString()
        {
            return "$this->sat casova, 
            $this->minut minuta i
            $this->sekund sekundi.";
        }

        public function trenutnoSati()
        {
            $sat = date("G");
            $minut = date("i");
            $sekund = date("s");
            $newtime = new Casovnik($sat, $minut, $sekund);
            echo $newtime;
        }
    }

    $obj = new Casovnik(10, 20, 55);
    echo "Trenutno je $obj";
    $obj->trenutnoSati();
    ?>

    <hr>
    <!-- 2. Napisati apstraktnu klasu Kartica koja ima svojstvo $stanje koje je celobrojna vrednost i predstavlja novac na računu sa kojim je kartica povezana. Kartica ima metodu getStanje koja vraća $stanje, dodajNovac koja prosleđenu celobrojnu vrednost dodaje svojstvu $stanje, kao i apstraktnu metodu naplati koja ima za parametar celi broj. Napraviti konkretne klase ObicnaKartica i ZlatnaKartica koje implementiraju metodu naplati, ObicnaKartica implementira naplati tako što od stanja oduzima prosleđeni broj, a ZlatnaKartica od stanja oduzima prosleđeni broj pomnožen sa 0.95. -->
    <?php
    abstract class Kartica
    {
        protected $stanje;
        function __construct($stanje)
        {
            $this->stanje = (int)$stanje;
        }
        function getStanje()
        {
            return $this->stanje;
        }
        function setStanje($stanje)
        {
            $this->stanje = $stanje;
        }
        function dodajNovac(int $novac)
        {
            $this->stanje += $novac;
        }
        abstract function Naplata(int $racun);
        function __toString()
        {
            return "Trenutno stanje na kartici je $this->stanje dinara.";
        }
    }

    class ObicnaKartica extends Kartica
    {
        function Naplata($racun)
        {
            return $this->stanje -= $racun;
        }
    }
    class ZlatnaKartica extends Kartica
    {
        function Naplata($racun)
        {
            return $this->stanje -= ($racun * 0.95);
        }
    }
    $kartica = new ObicnaKartica("1500");
    $kartica->Naplata(500);
    echo $kartica;
    $kartica = new ZlatnaKartica("1500");
    $kartica->Naplata(500);
    echo $kartica;
    ?>
</body>

</html>