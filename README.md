# DigitalLibrary
 Proiectul meu constă în dezvoltarea unei librării online, o platformă digitală intuitivă și eficientă pentru achiziționarea și gestionarea cărților.
 . Sistemul va oferi și recomandări personalizate bazate pe preferințele utilizatorilor
 Pentru a crea o bibliotecă online, vom avea nevoie de 
 Platformă de dezvoltare web: Platforma de construire a site ului web (webnode) 
Baza de date : tabel carti, tabel utilizatori,tabel recenzii, tabel de imprumuturi si returnari 
. Identificator unic pentru fiecare utilizator,recenzie,carti.
Interfata utilizator
Tabel(Cărți):
id_carte: Identificator unic pentru fiecare carte (cheie primară).
titlu: Titlul cărții.
autor: Autorul cărții.
categorie: Genul cărții (ficțiune, non-ficțiune, aventură, mister etc.).
descriere: Descrierea cărții.
an_publicare: Anul publicării cărții.
ISBN: Numărul ISBN al cărții.
avabilitate: Disponibilitatea cărții (dacă se afla in stoc).
limba: Limba în care este scrisă cartea

Tabelul(Utilizatori):

user_id: Identificator unic pentru fiecare utilizator (cheie primară).
username: Numele de utilizator al utilizatorului.
password: Parola utilizatorului 
email: Adresa de email a utilizatorului.
nume_complet: Numele complet al utilizatorului.
status_membru: Starea membrilor (membru regulat, membru premium etc.).*

Tabelul "Reviews" (Recenzii):
review_id: Identificator unic pentru fiecare recenzie (cheie primară).
book_id: Cheie externă către tabelul "Books" pentru a indica cărțile recenzate.
user_id: Cheie externă către tabelul "Users" pentru a indica autorul recenziei.
commentariu: Comentariul sau recenzia scrisă de utilizator.
data: Data la care a fost scrisă recenzia.
Oferirea de resurse educaționale suplimentare, cum ar fi articole sau tutoriale, pentru a sprijini învățarea continuă a utilizatorilor.
(Quiz de personalitate pentru recomandare carti )

Tabel returnare/imprumut 
ID împrumut: Un identificator unic pentru fiecare împrumut.
ID utilizator: Identificatorul unic al utilizatorului care a efectuat împrumutul.
ID carte: Identificatorul unic al cărții împrumutate.
Data împrumutului: Data la care a fost efectuat împrumutul.
Data de returnare planificată: Data la care utilizatorul trebuie să returneze cartea.
Data de returnare efectivă: Data la care cartea a fost returnată (dacă este cazul).
Stare împrumut: Starea împrumutului (împrumutat, returnat, întârziat etc.).

