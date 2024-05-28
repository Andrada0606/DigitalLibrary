<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><h1 style="margin: 0;"><a href="#">DigitalLibrary</a></h1></li>
            </ul>
        </div>
        <div class="top-bar-left">
            <ul class="menu">
                <li><a href="acasa.html">Acasă</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Despre.html">Despre</a></li>
            </ul>
        </div>
        <div class="top-bar-right" style="float: right;">
            <a class="button success" href="index.html">Logout</a>
        </div>
    </div>
   <br> 
   <br>
</body>
    <div class="top-bar">
        <div class="top-bar-right" style="display: block; margin-left: auto; margin-right: auto;">
          <ul class="menu">
                <li><a href="admin.php">Imprumuturi</a></li>
                <li><a href="rezervari.html">Rezervari</a></li>
                <li><a href="utilizatori.html">Utilizatori</a></li>
                <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
            </ul>
        </div>
    </div>
    
    <br><br>
    <div class="top-bar-center">
        <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><a href="cauta_imprumut.html"><button type="button" class="button">Search</button></a></li>
        </ul>
    </div>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>Cod tranzacție</th>
                <th>Cărți împrumutate</th>
                <th>ID Utilizator</th> 
                <th>Nume Utilizator</th>
                <th>Data împrumutului</th>
                <th>Data scadentă</th>
                <th>Stare</th>
                <th>Acțiuni</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123456</td>
                <td>Harry Potter și Piatra Filozofală, Knife</td>
                <td>1</td> 
                <td>Pop Alin</td>
                <td>2024-04-21</td>
                <td>2024-05-21</td>
                <td>În curs de procesare</td>
                <td>
                 
                    <button>Anulare</button>
                </td>
            </tr>
            <tr>
                <td>127832</td>
                <td>Dans Macabre</td>
                <td>2</td> 
                <td>Dan Ana</td> 
                <td>2024-04-30</td>
                <td>2024-05-30</td>
                <td>În curs de procesare</td>
                <td>
                  
                    <button>Anulare</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
