# test4
#test1 
1. Napisati klasu Datum koja ima svojstva dan, mesec, godina, konstruktor, gettere i settere kao i __toString 
metodu. Napraviti instancu klase i testirati sve metode. 
Napisati metodu danasnjiDatum koja vraća instancu klase Datum za današnji dan (koristiti funkciju date)

2.Napisati apstraktnu klasu Zaposleni koja ima svojstva ime, prezime, jmbg, plata, konstruktor, gettere i settere 
kao i apstraktnu metodu getStanje. Napraviti konkretne klase Radnik i Direktor. Klasa Radnik implemenitra metodu 
getStanje tako da vraća platu pomnoženu sa 0.85 ako je plata veća od 80 000, inače vraća platu pomnoženu sa 0.9; 
Klasa Direktor vraća platu pomnoženu sa 0.87.


#test2
1. Napisati klasu Casovnik koja ima svojstva sat, minut, sekund, 
konstruktor, gettere i settere kao i __toString metodu. 
Napraviti instancu klase i testirati sve metode. Napisati metodu 
trenutnoSati koja vraća instancu klase Casovnik za trenutno vreme 
(koristiti funkciju date)

2.Napisati apstraktnu klasu Kartica koja ima svojstvo $stanje koje
je celobrojna vrednost i predstavlja novac na računu sa kojim je 
kartica povezana. Kartica ima metodu getStanje koja vraća $stanje,
dodajNovac koja prosleđenu celobrojnu vrednost dodaje svojstvu 
$stanje, kao i apstraktnu metodu naplati koja ima za parametar 
celi broj. Napraviti konkretne klase ObicnaKartica i ZlatnaKartica 
koje implementiraju metodu naplati, ObicnaKartica implementira 
naplati tako što od stanja oduzima prosleđeni broj, a 
ZlatnaKartica od stanja oduzima prosleđeni broj pomnožen sa 0.95.


#test3
1. Napisati klasu Dokument koja ima svojstva naslov, tekst, 
autor, konstruktor, gettere i settere kao i __toString metodu. 
Napraviti instancu klase i testirati sve metode. Napisati metodu 
prikazDokumenta koja prikazuje dokument u <div> tagu, a unutar <div> taga naslov je u <h1> tagu,
autor u <h2> tagu a tekst u <p> tagu.

2. Napisati klasu Kolač koja ima svojstva naziv, težina i kalorije
, kao i konstruktor, gettere i settere i __toString metodu. 
Napisati klasu Kutija koja sadrži niz objekata klase Kolač, kao i metode za dodavanje i 
uklanjanje kolača sa kraja niza, metodu ukupnaTezina koja računa ukupnu težinu kutije kao i
__toString metodu koja prikazuje sve kolače u kutiji.


#test4
1. Napisati klasu Slika koja ima svojstva sirina, visina, putanja, alternativni
tekst, konstruktor, gettere i settere kao i __toString metodu. Napraviti
instancu klase i testirati sve metode. Napisati metodu prikaziSliku koja
vraća <img> tag sa primenjenim svojstvima na odgovarajućim
pozicijama.

2. Napisati interfejs Upit koji ima metodu kreirajSelect. Napisati konkretne
klase UpitNamestaj, UpitMagacin i UpitProdavnica, koje implementiraju
 interfejst Upit i metodu kreirajSelect tako što se vraća “SELECT * FROM
 _____” string, s tim što UpitNamestaj vraća SELECT za tabelu
 `namestaj`, UpitMagacin za tabelu `magacin`, a UpitProdavnica za
 tabelu `prodavnica`
 
 
 #test4v1
 1. Napisati klasu Stampac koja ima svojstva nizRecenica i limit.Konstruktor kao parametar ima limit. 
 Metode koje klasa Stampac ima su dodajRecenicu, stampajRecenicu i __toString. Metoda dodajRecenicu
 proverava da li je limit ispunjen, tj da li niz rečenica ima broj elemenata jednak limitu, ako 
 jeste ispisuje se poruka "Nemoguće dodati novu rečenicu", inače se dodaje rečenica u niz. Metoda 
 stampajRecenicu štampa prvu rečenicu iz niza i uklanja je iz niza, osim ako je niz prazan, kada 
 se prikazuje poruka “Stampac nema recenicu za ispis”. Metoda __toString vraća "Stampac koji sadrzi ___ reci za stampanje",
 gde se prikazuje koliko reci ima u nizu.
 
 2.Napisati klasu Atribut koja ima javne vrednosti naziv i vrednost, i koja simulira atribut HTML taga. 
 Napisati interfejs HTMLTag koji ima metode dodajAtribut(Atribut $atribut) i stampajTag(). 
 Napisati konkretne klase DivTag i PTag koje implementiraju interfejs HTMLTag. DivTag i PTag 
 imaju kao svojstvo tekst koji se prosledjuje preko konstruktora i nalazi se izmedju odgovarajuceg otvarajuceg 
 i zatvarajuceg taga za klasu (div ili p), kao i niz atributa. Metoda dodajAtribut dodaje instancu klase Atribut
 u niz atributa, a stampajTag štampa odgovarajući tag sa atributima i tekstom unutar taga.
