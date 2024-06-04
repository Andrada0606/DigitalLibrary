<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.7.3/css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><h1 style="margin: 0;"><a href="#">DigitalLibrary</a></h1></li>
        </ul>
    </div>
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="utilizator.php">Acasă</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Despre.html">Despre</a></li>
        </ul>
    </div>
</div>
   <div class="top-bar-right" style="float: right;">
    <a class="button success" href="utilizator_profil.php">Nume</a>
    <a class="button success" href="index.html">Logout</a>

</div>

<div style="clear: both;"></div>
</div>


<div class="top-bar">

<div class="top-bar-right"  style="display: block; margin-left: auto; margin-right: auto;">
    <ul class="menu">
        <li><a href="utilizator.php">Acasă</a></li>
        <li><a href="comenzi_utilizator.html">Comenziile mele</a></li>
        <li><a href="utilizator_feedback.html"> Feedback</a></li>

        <li><a href="lista_de_dorinte.html">Lista de dorinte</a></li>
        <li><a href="utilizator_rezervare.html">Rezerva</a></li>

    </ul>
</div>
</div>

    <div class="top-bar-center">
        <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><a href="categorii.html"><button type="button" class="button">Search</button></a></li>
        </ul>
    </div>

    <div style="text-align: center; margin: 20px;">
        <label for="categorySelect">Sortează pe categorii:</label>
        <select id="categorySelect" onchange="filterBooks()">
            <option value="all">Toate</option>
            <option value="fantasy">Fantasy</option>
            <option value="thriller">Thriller</option>
            <option value="nonfiction">Non-Fiction</option>
            <option value="psihologie">Psihologie</option>
            <option value="psihologie">Self-Help</option>
            <option value="romance">Romance</option>
            <option value="crime">Crima</option>
            <!-- Adăugați alte categorii aici -->
        </select>
    </div>

    <div class="book-container" id="bookContainer">
        <div class="book" data-category="fantasy">
            <img class="thumbnail" src="f1.jpg" alt="Harry Potter și Piatra Filozofală">
            <h5>Harry Potter și Piatra Filozofală</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="thriller">
            <img class="thumbnail" src="4.jpg" alt="Knife">
            <h5>Knife</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="nonfiction">
            <img class="thumbnail" src="5.jpg" alt="Rural Hours">
            <h5>Rural Hours</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="nonfiction">
            <img class="thumbnail" src="6.jpg" alt="The Great Divide">
            <h5>The Great Divide</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="romance">
            <img class="thumbnail" src="7.jpg" alt="The Book of Love">
            <h5>The Book of Love</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="fiction">
            <img class="thumbnail" src="8.jpg" alt="The Women">
            <h5>The Women</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="thriller">
            <img class="thumbnail" src="9.jpg" alt="Danse Macabre">
            <h5>Danse Macabre</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="crime">
            <img class="thumbnail" src="11.jpg" alt="The Loot of Cities">
            <h5>The Loot of Cities</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="self-help">
            <img class="thumbnail" src="13.jpg" alt="Can't Hurt Me">
            <h5>Can't Hurt Me</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="fantasy">
            <img class="thumbnail" src="carte.fantasy.jpg" alt="Your Blood, My Bones">
            <h5>Your Blood, My Bones</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="fantasy">
            <img class="thumbnail" src="carte1.jpg" alt="Al cincilea anotimp">
            <h5>Al cincilea anotimp</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="fantasy">
            <img class="thumbnail" src="carte2.jpg" alt="Watership Down">
            <h5>Watership Down</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
       
        <div class="book" data-category="psihologie">
            <img class="thumbnail" src="carte4.jpg" alt="Sensul Vietii">
            <h5>Sensul Vietii</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="psihologie">
            <img class="thumbnail" src="carte5.jpg" alt="Arta Manipularii">
            <h5>Arta Manipularii</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="thriller">
            <img class="thumbnail" src="carte6.jpg" alt="UNMISSING">
            <h5>UNMISSING</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="thriller">
            <img class="thumbnail" src="carte8.jpg" alt="Crimele de la internat">
            <h5>Crimele de la internat</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="psihologie">
            <img class="thumbnail" src="carte9.jpeg" alt="Inteligenta emotionala">
            <h5>Inteligenta emotionala</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="psihologie">
            <img class="thumbnail" src="carte9.jpg" alt="INTELEPCIUNEA PSIHOPATILOR">
            <h5>INTELEPCIUNEA PSIHOPATILOR</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="thriller">
            <img class="thumbnail" src="carte10.jpg" alt="Bani de hartie">
            <h5>Bani de hartie</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="nonfiction">
            <img class="thumbnail" src="cartea11.jpg" alt="Aleea cu licurici">
            <h5>Aleea cu licurici</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="crime">
            <img class="thumbnail" src="carte12.jpg" alt="Cu sange rece">
            <h5>Cu sange rece</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="crime">
            <img class="thumbnail" src="carte13.jpg" alt="Fata disparuta">
            <h5>Fata disparuta</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="crime">
            <img class="thumbnail" src="carte14.jpg" alt="Crima si pedeapsa">
            <h5>Crima si pedeapsa</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        <div class="book" data-category="romance">
            <img class="thumbnail" src="carte15.jpg" alt="To Capture Her Heart">
            <h5>To Capture Her Heart</h5>
            <a href="detalii_carte.html"><button>Vezi detalii</button></a>
            <a href="imprumut_carte.html"><button>Imprumuta</button></a>
        </div>
        
    </div>

    <script>
        function filterBooks() {
            const category = document.getElementById('categorySelect').value;
            const books = document.querySelectorAll('.book');
            
            books.forEach(book => {
                if (category === 'all' || book.getAttribute('data-category') === category) {
                    book.style.display = 'block';
                } else {
                    book.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
