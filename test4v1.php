<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Napisati klasu Stampac koja ima svojstva nizRecenica i limit.Konstruktor kao parametar ima limit. Metode koje klasa Stampac ima su dodajRecenicu, stampajRecenicu i __toString. Metoda dodajRecenicu proverava da li je limit ispunjen, tj da li niz rečenica ima broj elemenata jednak limitu, ako jeste ispisuje se poruka "Nemoguće dodati novu rečenicu", inače se dodaje rečenica u niz. Metoda stampajRecenicu štampa prvu rečenicu iz niza i uklanja je iz niza, osim ako je niz prazan, kada se prikazuje poruka “Stampac nema recenicu za ispis”. Metoda __toString vraća "Stampac koji sadrzi ___ reci za stampanje", gde se prikazuje koliko reci ima u nizu. -->
    <!-- stampac -->

    <?php

    class Stampac
    {
        protected $nizRecenica = ["recenica 1", "recenica 2", "recenica 3"];
        protected $limit;

        function __construct(int $limit)
        {
            $this->limit = $limit;
        }
        function dodajRecenicu($recenica)
        {
            if ($this->limit < count($this->nizRecenica)) {
                echo "Nemoguće dodati novu rečenicu";
            } else {
                array_push($this->nizRecenica, $recenica);
                var_dump($this->nizRecenica);
            }
        }

        function stampajRecenicu()
        {
            if (!empty($this->nizRecenica)) {

                echo $this->nizRecenica[0];
                array_shift($this->nizRecenica);
            } else {
                echo "Stampac nema recenicu za ispis";
            }
        }

        function __toString()
        {
            $return = "Stampac koji sadrzi " . count($this->nizRecenica) . " reci za stampanje";
            return $return;
        }
    }
    $obj = new Stampac(6);
    $obj->dodajRecenicu("recenica");
    $obj->stampajRecenicu($obj);
    ?>
    <hr>
    <!-- 2.Napisati klasu Atribut koja ima javne vrednosti naziv i vrednost, i koja simulira atribut HTML taga. Napisati interfejs HTMLTag koji ima metode dodajAtribut(Atribut $atribut) i stampajTag(). Napisati konkretne klase DivTag i PTag koje implementiraju interfejs HTMLTag. DivTag i PTag imaju kao svojstvo tekst koji se prosledjuje preko konstruktora i nalazi se izmedju odgovarajuceg otvarajuceg i zatvarajuceg taga za klasu (div ili p), kao i niz atributa. Metoda dodajAtribut dodaje instancu klase Atribut u niz atributa, a stampajTag štampa odgovarajući tag sa atributima i tekstom unutar taga. -->
    <?php
    class Atribut
    {
        public $naziv;
        public $vrednost;
        function __construct(string $naziv, string $vrednost)
        {
            $this->naziv = $naziv;
            $this->vrednost = $vrednost;
        }
    }
    interface HTMLTag
    {
        public function dodajAtribut(Atribut $atribut);
        public function stampajTag();
    }
    class DivTag implements HTMLTag
    {
        protected $tekst;
        protected $nizAtributa = [];
        public function __construct(string $tekst)
        {
            $this->tekst = $tekst;
        }
        public function dodajAtribut(Atribut $atribut)
        {
            array_push($this->nizAtributa, $atribut);
        }
        public function stampajTag()
        {
            foreach ($this->nizAtributa as $atribut) {
                echo "<div $atribut->naziv=\"$atribut->vrednost\">$this->tekst</div>";
            }
        }
    }
    class PTag implements HTMLTag
    {
        protected $tekst;
        protected $nizAtributa = [];
        public function __construct(string $tekst)
        {
            $this->tekst = $tekst;
        }
        public function dodajAtribut(Atribut $atribut)
        {
            array_push($this->nizAtributa, $atribut);
        }
        public function stampajTag()
        {
            foreach ($this->nizAtributa as $atribut) {
                echo "<p $atribut->naziv=\"$atribut->vrednost\">$this->tekst</p>";
            }
        }
    }

    $obj = new DivTag("div tekst");
    $obj->dodajAtribut(new Atribut("class", "nekaklasa"));
    $obj->dodajAtribut(new Atribut("id", "nekiid"));
    $obj->stampajTag();

    $obj = new PTag("p tekst");
    $obj->dodajAtribut(new Atribut("class", "nekaklasa"));
    $obj->stampajTag();
    ?>


</body>

</html>