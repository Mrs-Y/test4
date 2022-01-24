<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- zadatak 3 -->
    <!-- SELECT * FROM `tabela2` WHERE `broj` BETWEEN 20 AND 40;

    DELETE * FROM `tabela` WHERE `id`>20;

    UPDATE `tabela2` SET `tekst`="zad3c" WHERE `id` IN (1,5,7,9,14,29); -->

    <!-- zadatak 4 -->
    <?php
    // $conn = new mysqli("localhost", "root", "", "test");
    // if (is_null($conn->connect_error)) {
    //     echo "Konekcija uspesna";
    // } else {
    //     echo "Neuspesna konekcija. Greska: $con->connect_error";
    // }

    // $select_query = $conn->prepare("SELECT `pocetak`` FROM `test` WHERE `pocetak`=? LIMIT (0,19)");
    // $pocetak = "2022-02-19";
    // $select_query->bind_param("s", $pocetak);
    // $select_query->execute();
    // $res = $select_query->get_result();

    // $update_query = $conn->prepare("UPDATE `test` SET `kraj`=? WHERE `id`=?");
    // $kraj = "2022-03-15";
    // $id = 11;
    // $update_query->bind_param("si", $kraj, $id);
    // $update_query->execute();

    // $delete_query = $conn->prepare("DELETE * FROM `test` WHERE `id`=?");
    // $id = 10;
    // $delete_query->bind_param("i", $id);
    // $delete_query->execute();

    // $insert_query = $conn->prepare("INSERT INTO `test`(`naslov`,`pocetak`,`kraj`,`hitno`) VALUES (?,?,?,?)");
    // $naslov = "neki naslov";
    // $pocetak = "2022-01-24";
    // $kraj = "2022-01-25";
    // $hitno = "ne";
    // $insert_query->bind_param("ssss", $naslov, $pocetak, $kraj, $hitno);
    // $insert_query->execute();
    ?>

    <!-- zadatak 1 -->
    <?php
    class ToDo
    {
        protected $naslov;
        protected $tekst;
        protected $datum;
        protected $zavrseno;
        protected $id;
        function __construct(bool $zavrseno, int $id)
        {
            $this->zavrseno = $zavrseno;
            $this->id = $id;
        }
        function getID()
        {
            $this->id;
        }
        function setId($id)
        {
            $this->id = $id;
        }
        function getZavrseno()
        {
            $this->zavrseno;
        }
        function setZavrseno($zavrseno)
        {
            $this->zavrseno = $zavrseno;
        }
        function __toString()
        {
            return "ID: $this->id, Zavrseno: $this->zavrseno";
        }
    }
    $obj = new ToDo(true, 15);
    echo $obj;
    class Obaveze
    {
        protected $todos = [];
        function __construct(int $id)
        {
            $this->id = $id;
        }
        function dodajToDo(ToDo $todo)
        {
            array_push($this->todos, $todo);
        }
        function __toString()
        {
            foreach ($this->todos as $el) {
                echo "$el<br>";
            }
        }
        function zavrsi($id)
        {
            foreach ($this->todos as $todo) {
                if ($todo->id == $id) {
                    $todo->zavrseno = true;
                } else {
                    echo "nemam sta da ispravim";
                }
            }
        }
    }

    $obj = new Obaveze(false, 10);
    echo $obj;

    ?>
    <!-- zadatak 2 -->
    <?php

    interface FabrikaDivova
    {
        public function napraviDiv(string $tekst);
    }

    class ZeleniDiv implements FabrikaDivova
    {
        public function napraviDiv($tekst)
        {
            echo "<div style=\"color: green;\">$tekst</div>";
        }
    }

    class CrveniDiv implements FabrikaDivova
    {
        public function napraviDiv($tekst)
        {
            echo "<div style=\"color: red;\">$tekst</div>";
        }
    }

    $zelenidiv = new ZeleniDiv();
    $zelenidiv->napraviDiv("nekitekst");
    $zelenidiv = new ZeleniDiv();
    $zelenidiv->napraviDiv("nekidrugitekst");

    $crvenidiv = new CrveniDiv();
    $crvenidiv->napraviDiv("neki crveni tekst");
    ?>
</body>

</html>