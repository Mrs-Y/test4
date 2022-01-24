<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--1. Napisati klasu Dokument koja ima svojstva naslov, tekst, autor, konstruktor, gettere i settere kao i __toString metodu. Napraviti instancu klase i testirati sve metode. Napisati metodu prikazDokumenta koja prikazuje dokument u <div> tagu, a unutar <div> taga naslov je u <h1> tagu, autor u <h2> tagu a tekst u <p> tagu. -->
    <?php
    class Dokument
    {
        protected $naslov;
        protected $tekst;
        protected $autor;

        function __construct($naslov, $tekst, $autor)
        {
            $this->naslov = $naslov;
            $this->tekst = $tekst;
            $this->autor = $autor;
        }
        function setNoviDokument($naslov, $tekst, $autor)
        {
            $this->naslov = $naslov;
            $this->tekst = $tekst;
            $this->autor = $autor;
        }
        function getNaslov()
        {
            $this->naslov;
        }
        function getTekst()
        {
            $this->tekst;
        }
        function getAutor()
        {
            $this->autor;
        }

        function __toString()
        {
            return "$this->naslov $this->tekst $this->autor";
        }

        function prikazDokumenta()
        {
            return "<div><h1>$this->naslov</h1><h2>$this->autor</h2><p>$this->tekst</p></div>";
        }
    }
    $obj = new Dokument("naslov", "tekst", "autor");
    echo $obj;
    echo $obj->prikazDokumenta();
    ?>
    <hr>
    <!-- 2. Napisati klasu Kolač koja ima svojstva naziv, težina i kalorije, kao i konstruktor, gettere i settere i __toString metodu. Napisati klasu Kutija koja sadrži niz objekata klase Kolač, kao i metode za dodavanje i uklanjanje kolača sa kraja niza, metodu ukupnaTezina koja računa ukupnu težinu kutije kao i __toString metodu koja prikazuje sve kolače u kutiji.-->
    <?php
    class Kolac
    {
        protected $naziv;
        protected $tezina;
        protected $kalorije;
        public function __construct($naziv, $tezina, $kalorije)
        {
            $this->naziv = $naziv;
            $this->tezina = $tezina;
            $this->kalorije = $kalorije;
        }
        public function getNaziv()
        {
            return $this->naziv;
        }
        public function setNaziv($naziv)
        {
            $this->naziv = $naziv;
        }
        public function getTezina()
        {
            return $this->tezina;
        }
        public function setTezina($tezina)
        {
            $this->tezina = $tezina;
        }
        public function getKalorije()
        {
            return $this->kalorije;
        }
        public function setKalorije($kalorije)
        {
            $this->kalorije = $kalorije;
        }
        public function __toString()
        {
            return "Naziv:" . $this->naziv . "<br>Tezina: " . $this->tezina . "<br>Kalorije: " . $this->kalorije;
        }
    }
    class Kutija
    {
        protected $nizKolaca = [];

        public function dodajKolac(Kolac $kolac)
        {
            array_push($this->nizKolaca, $kolac);
        }
        public function ukloniKolac()
        {
            array_pop($this->nizKolaca);
        }

        public function ukupnaTezina()
        {
            $tezinaukupno = 0;
            foreach ($this->nizKolaca as $el) {
                $tezinaukupno += $el->getTezina();
                echo "<br>Ukupna tezina: " . $tezinaukupno;
            }
        }

        public function __toString()
        {
            foreach ($this->nizKolaca as $el) {
                echo $el;
            }
        }
    }
    $kutija = new Kutija();
    $kutija->dodajKolac(new Kolac("kolac 1", "200", "300"));
    $kutija->dodajKolac(new Kolac("kolac 2", "300", "400"));
    $kutija->dodajKolac(new Kolac("kolac 3", "400", "500"));
    var_dump($kutija);
    $kutija->ukloniKolac();
    var_dump($kutija);
    $kutija->__toString();
    var_dump($kutija);



    ?>
</body>

</html>