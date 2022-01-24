<?php
$conn = new mysqli("localhost", "root", "", "turisticka_agencija");
if (is_null($conn->connect_error)) {
    echo "Konekcija uspesna";
} else {
    echo "Neuspesna konekcija. Greska: $con->connect_error";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Napisati klasu Slika koja ima svojstva sirina, visina, putanja, alternativni
tekst, konstruktor, gettere i settere kao i __toString metodu. Napraviti
instancu klase i testirati sve metode. Napisati metodu prikaziSliku koja
vraća <img> tag sa primenjenim svojstvima na odgovarajućim
pozicijama. -->

    <?php
    class Slika
    {
        protected $sirina;
        protected $visina;
        protected $putanja;
        protected $alt;


        function __construct(int $sirina, int $visina, string $putanja, string $alt)
        {
            $this->sirina = $sirina;
            $this->visina = $visina;
            $this->putanja = $putanja;
            $this->alt = $alt;
        }
        function setSlika($sirina, $visina, $putanja, $alt)
        {
            $this->sirina = $sirina;
            $this->visina = $visina;
            $this->putanja = $putanja;
            $this->alt = $alt;
        }
        function getSirina()
        {
            $this->sirina;
        }
        function getVisina()
        {
            $this->visina;
        }
        function getPutanja()
        {
            $this->putanja;
        }
        function getAlt()
        {
            $this->alt;
        }

        function __toString()
        {
            return "$this->sirina $this->visina $this->putanja $this->alt";
        }

        function prikaziSliku()
        {
            echo "<img src=\"$this->putanja\" alt=\"$this->alt\" width=\"$this->sirina.px\" height=\"$this->visina.px\"/> ";
        }
    }
    $obj = new Slika(100, 100, "./image.jpg", "alttekst");
    $obj->prikaziSliku();

    ?>
    <hr>
    //
    <!-- 2. Napisati interfejs Upit koji ima metodu kreirajSelect. Napisati konkretne
// klase UpitNamestaj, UpitMagacin i UpitProdavnica, koje implementiraju
// interfejst Upit i metodu kreirajSelect tako što se vraća “SELECT * FROM
// _____” string, s tim što UpitNamestaj vraća SELECT za tabelu
// `namestaj`, UpitMagacin za tabelu `magacin`, a UpitProdavnica za
// tabelu `prodavnica`. -->
    <?php
    interface Upit
    {
        public function kreirajSelect();
    }
    class upitNamestaj implements Upit
    {
        public function kreirajSelect()
        {
            return "SELECT * FROM `namestaj`";
        }
    }
    $upit = new upitNamestaj();
    $upit->kreirajSelect();
    var_dump($upit);


    class upitMagacin implements Upit
    {
        public function kreirajSelect()
        {
            return "SELECT * FROM `magacin`";
        }
    }
    $upit = new upitMagacin();
    $upit->kreirajSelect();
    var_dump($upit);

    class upitProdavnica implements Upit
    {
        public function kreirajSelect()
        {
            return "SELECT * FROM `prodavnica`";
        }
    }
    $upit = new upitProdavnica();
    $upit->kreirajSelect();
    var_dump($upit);
    ?>
</body>

</html>