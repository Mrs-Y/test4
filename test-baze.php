<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    - a) Napisati upit koji prikazuje prvih 50 redova iz tabele `tabela`.
    Prikazuju se sve kolone.
    b) Napisati upit koji briše sve redove iz tabele `tabela` gde je godina
    u koloni `datum` (tip je Date) 2019.
    c) Napisati upit koji prikazuje sve kolone iz tabele `tabela` gde je
    vrednost kolone `broj` veća od 40

    SELECT * FROM `tabela` LIMIT (0, 49)
    DELETE * FROM `tabela` WHERE `datum` LIKE "2019-%";
    SELECT * FROM `tabela` WHERE `broj` > 40;



    - Napisati PHP kod koji koristi prepared statements za CRUD operacije
    (SELECT, INSERT, UPDATE, DELETE) nad tabelom `objava` koja ima
    kolone `id` (INT AUTO_INCREMENT), `autor` (VARCHAR(50)), `sadrzaj`
    (TEXT), `datum_objavljivanja` (DATE).
    <?php

    $res = $conn->prepare("SELECT * FROM `objava`");
    var_dump($res);

    $upit = "DELETE * FROM `objava` 
             WHERE `id`=12";
    $statement = $conn->prepare($upit);
    $statement->execute();

    $sadrzaj = "Neki sadrzaj";
    $upit = "UPDATE `objava` 
             SET `autor`=? 
             WHERE `sadrzaj`=?";
             $statement->bind_param("ss",$objava, $sadrzaj)
    $statement = $conn->prepare($upit);
    $statement->execute();

    $upit = "INSERT INTO 'objava'('id','autor','sadrzaj','datum_objavljivanja') 
             VALUES (?,?,?,?)";
    $statement = $conn->prepare($upit);
    $id = 5;
    $autor = "Autor";
    $sadrzaj = "Neki sadrzaj";
    $datum_objavljivanja = "2022-02-24";
    $statement->bind_param("isss", $id, $autor, $sadrzaj, $datim_objavljivanja);
    $statement->execute();
    ?>


    - a) Napisati upit koji prikazuje redove 20-40 iz tabele `tabela`.
    Prikazuju se sve kolone.
    b) Napisati upit koji briše sve redove iz tabele `tabela` gde je kolona
    `id` jednaka 9.
    c) Napisati upit koji prikazuje sve kolone iz tabele `tabela` gde je
    vrednost kolone `broj` neki od brojeva 2,5,7,9,12.

    SELECT * FROM `tabela` LIMIT (19,20);
    DELETE * FROM `tabela` WHERE `id`=9;
    SELECT * FROM `tabela` WHERE `broj` IN ("2","5","7","9","12");


    Napisati PHP kod koji koristi prepared statements za CRUD operacije
    (SELECT, INSERT, UPDATE, DELETE) nad tabelom `knjige` koja ima
    kolone `id` (INT AUTO_INCREMENT), `autor` (VARCHAR(50)), `naziv`
    (TEXT), `datum_izdavanja` (DATE).
    <?php
    $upit = "SELECT * FROM `knjige` 
             WHERE `autor` 
             LIKE ?";
    $autor = "%autor";
    $statement = $conn->prepare($upit);
    $statement->bind_param("s", $autor);
    $statement->execute();
    $result = $statement->get_result();

    $upit = "INSERT INTO `knjige`(`id`,`autor`,`naziv`,`datum_izdavanja` 
             VALUES (?,?,?,?)";
    $statement = $conn->prepare($upit);
    $id = 2;
    $autor = "Autor";
    $naziv = "Naziv";
    $datum_izdavanja = "2022-01-24";
    $statement->bind_param("isss", $id, $autor, $naziv, $datum_izdavanja);
    $statement->execute();

    $naziv = "Neki naziv";
    $autor = "Neki autor";
    $upit = "UPDATE `knjige` 
             SET `naziv`=? 
             WHERE `autor`=? ";
    $statement = $conn->prepare($upit);
    $statement->bind_param("ss", $naziv, $autor);
    $statement->execute();

    $upit = "DELETE * FROM `knjige` 
             WHERE `datum_izdavanja`=?";
    $datum_izdavanja = "2020-10-21";
    $statement = $conn->prepare($upit);
    $statement->bind_param("s", $datum_izdavanja);
    $statement->execute()
    ?>



    a) Napisati upit koji ubacuje proizvoljne podatke u tabelu `tabela` koja
    ima kolone `naziv` (VARCHAR(40)), `datum` (DATE), `broj` (INT).
    b) Napisati upit koji briše sve redove iz tabele `tabela` gde vrednost
    kolone `naziv` počinje stringom “ime”
    c) Napisati upit koji prikazuje sve kolone iz tabele `tabela` gde je
    vrednost kolone `broj` između 20 i 60.

    INSERT INTO `tabela`(`naziv`,`datum`,`broj`) VALUES ("Neki naziv","2022-01-23",29);
    DELETE * FROM `tabela` WHERE `naziv` LIKE "ime%";
    SELECT * FROM `tabela` WHERE `broj` BETWEEN 20 AND 60;


    Napisati PHP kod koji koristi prepared statements za CRUD operacije
    (SELECT, INSERT, UPDATE, DELETE) nad tabelom `artikl` koja ima
    kolone `id` (INT AUTO_INCREMENT), `naziv` (VARCHAR(50)), `cena`
    (DECIMAL), `kolicina` (INT).
    <?php
    $upit = "SELECT * FROM `artikl` WHERE `naziv` LIKE ?";
    $naziv = "%ime";
    $statement = $conn->prepare($upit);
    $statement->bind_param("s", $naziv);
    $statement->execute();

    $upit = "INSERT INTO `artikl`(`id`,`naziv`,`cena`,`kolicina`) VALUES (?,?,?,?)";
    $id = 12;
    $naziv = "naziv";
    $cena = 49.99;
    $kolicina = 10;
    $statement = $conn->prepare($upit);
    $statement->bind_param("isdi", $id, $naziv, $cena, $kolicina);
    $statement->execute();

    $upit = "UPDATE `artikl` SET `naziv`=? WHERE `id`=?";
    $statement = $conn->prepare();
    $statement->bind_param("si", $id, $naziv);
    $statement->execute();

    $upit = "DELETE * FROM `artikl` 
             WHERE `id`=\"$id\"";
    $id = 21;
    $statement = $conn->prepare($upit);
    $statement->bind_param("i", $id);
    $statement->execute()
    ?>


    Napisati upit koji prikazuje sve redove tabele `tabela` gde je
    vrednost kolone `broj` veća od 50 ili manja od 20.
    b) Napisati upit koji briše sve redove iz tabele `tabela` gde se
    vrednost kolone `naziv` završava stringom ‘test’.
    c) Napisati upit koji prikazuje prvih 20 redova iz tabele `tabela` gde je
    vrednost kolone `broj` veća od 20.

    SELECT * FROM `tabela` WHERE `broj`>50 OR `broj`< 20; DELETE FROM `tabela` WHERE `naziv` LIKE "%primer" ; SELECT * FROM `tabela` WHERE `broj`>20 LIMIT 20;


        Napisati PHP kod koji koristi prepared statements za CRUD operacije
        (SELECT, INSERT, UPDATE, DELETE) nad tabelom `zadatak` koja ima
        kolone `id` (INT AUTO_INCREMENT), `naslov` (VARCHAR(50)),
        `pocetak` (DATE), `kraj` (DATE).

        <?php
        $upit = "SELECT * FROM `zadatak` WHERE `naslov` LIKE ?";
        $statement = $conn->prepare($upit);
        $naslov = "Neki naslov";
        $statement->bind_param("s", $naslov);
        $statement->execute();

        $upit = "UPDATE `zadatak` SET `naslov`=? WHERE `id`= ?";
        $statement = $conn->prepare($upit);
        $naslov = "neki naslov";
        $id = 12;
        $statement->bind_param("si", $naslov, $id);
        $statement->execute();

        $upit = "INSERT INTO `zadatak`(`id`,`naslov`,`pocetak`,`kraj`) VALUES (?,?,?,?)";
        $statement = $conn->prepare($upit);
        $id = 12;
        $naslov = "neki naslov";
        $pocetak = "2022-01-25";
        $kraj = "2022-02-12";
        $statement->bind_param("isss", $id, $naslov, $pocetak, $kraj);
        $statement->execute();

        $upit = "DELETE * FROM `zadatak` 
             WHERE `id`=\"$id\"";
        $id = 21;
        $statement = $conn->prepare($upit);
        $statement->bind_param("i", $id);
        $statement->execute()
        ?>


        a) Napisati upit koji prikazuje sve redove tabele `tabela` i `tabela2`,
        `tabela` ima kolonu `tabela2_id` koja odgovara koloni `id` tabele
        `tabela2`, gde je mesec kolone `datum` tabele `tabela2` februar ili
        april. Prikazati prvih 40 redova.
        b) Napisati upit koji briše sve redove iz tabele `tabela` gde se
        vrednost kolone `name` završava stringom ‘prost’ a vrednost
        kolone `broj` pripada nizu (2,3,5,7,11,13,17).
        c) Napisati upit koji prikazuje podatke iz tabele `tabela` grupisane po
        vrednosti kolone `broj`, ali se prikazuju samo oni redovi gde je broj
        pojavljivanja konkretne vrednosti kolone `broj` veći od 5.

        SELECT * FROM `tabela` INNER JOIN `tabela2` ON `tabela`.`tabela2_id` = `tabela2`.`id` WHERE `tabela2`.`datum` LIKE '%-02-%' OR `tabela2`.`datum` LIKE '%-04-%' LIMIT 40;

        DELETE * FROM `tabela`.`name` LIKE "%prost" AND `tabela`.`broj` IN (2,3,5,7,11,13,17);

        SELECT COUNT(`broj`) AS `broj broja`, `broj`
        FROM `tabela`
        WHERE `broj` >5
        GROUP BY `broj`
        HAVING AVG(`broj`)>5;

        Napisati PHP kod koji koristi prepared statements za sledeće CRUD
        operacije:
        - prikaz svih redova za kolonu `pocetak`, gde je vrednost u koloni
        `pocetak` veća od prosleđenog datuma.
        - menjanje vrednosti kolone `naslov` za određeni `id`, obe vrednosti
        prosleđene.
        - brisanje reda za prosleđen `id`
        - unos svih vrednosti sem `id`, sve vrednosti su prosleđene.
        nad tabelom `test` koja ima kolone `id` (INT AUTO_INCREMENT),
        `naslov` (VARCHAR(50)), `pocetak` (DATE), `kraj` (DATE).
        <?php
        $select_query = $conn->prepare("SELECT * FROM `pocetak` WHERE `pocetak`>=?");
        $datum = "2022-12-31";
        $select_query->bind_param("s", $datum);
        $select_query->execute();
        $res = $select_query->get_result();
        foreach ($res as $row) {
            var_dump($row);
        }

        $update_query = $conn->prepare("UPDATE `test` SET `naslov`=? WHERE `id` = ? ");
        $naslov = "Novi naslov";
        $id = 3;
        $update_query->bind_param("si", $naslov, $id);
        $update_query->execute();


        $delete_query = $conn->prepare("DELETE FROM `test` WHERE `id`=?");
        $id = 2;
        $delete_query->bind_param("i", $id);
        $delete_query->execute();

        $insert_query = $conn->prepare("INSERT INTO `test`(`naslov`,`pocetak`,`kraj`) VALUES (?,?,?)");
        $naslov = "PHP naslov";
        $pocetak = "2022-01-22";
        $kraj = "2022-01-30";
        $insert_query->bind_param("sss", $naslov, $pocetak, $kraj);
        $insert_query->execute();
        ?>

</body>

</html>