<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Napisati klasu Datum koja ima svojstva dan, mesec, godina, konstruktor, gettere i settere kao i __toString metodu. Napraviti instancu klase i testirati sve metode. Napisati metodu danasnjiDatum koja vraća instancu klase Datum za današnji dan (koristiti funkciju date). -->
    <?php
    class Datum
    {
        protected $dan;
        protected $mesec;
        protected $godina;
        function __construct($dan, $mesec, $godina)
        {
            $this->dan = $dan;
            $this->mesec = $mesec;
            $this->godina = $godina;
        }
        function getDan()
        {
            $this->dan;
        }
        function setDan($dan)
        {
            $this->dan = $dan;
        }
        function getMesec()
        {
            $this->mesec;
        }
        function setMesec($mesec)
        {
            $this->mesec = $mesec;
        }
        function getGodina()
        {
            $this->godina;
        }
        function setGodina($godina)
        {
            $this->godina = $godina;
        }
        function __toString()
        {
            return "Dan: $this->dan Mesec: $this->mesec Godina: $this->godina";
        }
        function DanasnjiDatum()
        {
            $dan = date("D");
            $mesec = date("m");
            $godina = date("Y");
            $newdate = "<br>Dan: $dan, Mesec: $mesec, Godina: $godina.";
            echo $newdate;
        }
    }
    $datum = new Datum(7, 1, 2022);
    echo $datum;
    $datum->DanasnjiDatum();
    ?>
    <hr>

    <!-- 2. Napisati apstraktnu klasu Zaposleni koja ima svojstva ime, prezime, jmbg, plata, konstruktor, gettere i settere kao i apstraktnu metodu getStanje. Napraviti konkretne klase Radnik i Direktor. Klasa Radnik implemenitra metodu getStanje tako da vraća platu pomnoženu sa 0.85 ako je plata veća od 80 000, inače vraća platu pomnoženu sa 0.9; Klasa Direktor vraća platu pomnoženu sa 0.87. -->
    <?php
    abstract class Zaposleni
    {
        protected $ime;
        protected $prezime;
        protected $jmbg;
        protected $plata;

        function __construct(string $ime, string $prezime, int $jmbg, int $plata)
        {
            $this->ime = $ime;
            $this->prezime = $prezime;
            $this->jmbg = $jmbg;
            $this->plata = $plata;
        }
        function setIme($ime)
        {
            $this->ime = $ime;
        }
        function getIme()
        {
            $this->ime;
        }
        function setPrezime($prezime)
        {
            $this->prezime = $prezime;
        }
        function getPrezime()
        {
            $this->prezime;
        }
        function setJmbg($jmbg)
        {
            $this->jmbg = $jmbg;
        }
        function getJmbg()
        {
            $this->jmbg;
        }
        function setPlata($plata)
        {
            $this->plata = $plata;
        }
        function getPlata()
        {
            $this->plata;
        }

        abstract function GetStanje();
        function __toString()
        {
            return "Ime: $this->ime, Prezime: $this->prezime, Jmbg: $this->jmbg Plata: $this->plata";
        }
    }
    class Radnik extends Zaposleni
    {
        function getStanje()
        {
            if ($this->plata > 80000) {
                return "<br>Stanje je: " . $this->plata * 0.85;
            } else {
                return "<br>Stanje je: " . $this->plata * 0.87;
            }
        }
    }
    class Direktor extends Zaposleni
    {
        function getStanje()
        {
            return "<br>Stanje je: " . $this->plata * 0.9;
        }
    }
    $radnik = new Radnik("First name1", "Last Name1", 1985, 80000);
    echo $radnik;
    echo $radnik->getStanje();
    $radnik = new Radnik("First name2", "Last Name2", 1981, 90000);
    echo $radnik;
    echo $radnik->getStanje();
    $radnik = new Radnik("First name3", "Last Name3", 1996, 180000);
    echo $radnik;
    echo $radnik->getStanje();
    $radnik = new Direktor("First name4", "Last Name4", 1985, 80000);
    echo $radnik;
    echo $radnik->getStanje();

    ?>
</body>

</html>