#Subiect

Sa se scrie o aplicatie web pentru urmatorul joc:

* Intr-o tabela a unei baze de date se memoreaza perechi de forma (fisier_imagine, descriere).
* Valorile atributului fisier imagine sunt numele unor fisiere care exista server-side.
* O pagina web va afisa un table cu 2 coloane, o coloana cu descrierile din baza de date si o coloana cu pozele al caror nume este memorat si el in baz de date.
* Pozele vor avea insa descrierile amestecate aleator (o poz va avea descrierea altei poze).
* Cand un utilizator va da click pe o descriere aceasta se va “selecta” (se va desena un chenar in jurul ei ), iar daca ulterior se va da click pe o imagine, aceasa se va “selecta si ea”. Daca descrierea se potriveste imaginii acestea vor disparea din table dupa  3 secunde si vor fi adaugate pe aceeasi linie intr-un al doilea table. Astfel, ele vor fi marcate cu rosu pentru 3 secunde.
* Jocul se termina cand toate pozele apar cu descrierea lor corecta in cel de-al doilea table (la ghicirea tuturor perechilor).
* Dupa terminarea jocului jucatorului I se va oferi posiblitatea sa joace un joc nou, cu noi perechi aleatoare.
* Fisierele imagine nu trebuie uploadate, aplicatia va permite referirea la acestea si prin intermediul unui URL absolut.
* In timpul jocului ii va fi afisat utilizatorului un cronometru in secunde care se opreste in momentul terminarii jocului.

Client-side nu se cunoaste nimic despre corectitudinea perechilor. La fiecare al doilea click (unul pe coloana cu descrieri si unul pe cea cu poze) browserul va apela prin AJAX un script server-side ce returneaza o expresie JSON pentru a afla daca perechea selectata de utilizator ste corecta sau nu.
