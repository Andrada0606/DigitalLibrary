<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
      
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
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
                <li><a href="index.html">Acasă</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Despre.html">Despre</a></li>
            </ul>
        </div>
    </div>

    <div class="top-bar" style="background-color: white;">
        <div class="top-bar-right" style="float: right;">
            <a class="button success" href="index.html">Logout</a>
        </div>
        <div style="clear: both;"></div>
    </div>

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
</body>
    <div class="content">
        <h1>Împrumuturi</h1>
        <button class="add-button" onclick="document.getElementById('addForm').style.display='block'">Adaugă Împrumut</button>
        <form id="addForm" action="adauga_imprumut.php" method="post" style="display: none; margin-top: 20px;">
    <label for="cod_tranzactie">Cod Tranzacție:</label>
    <input type="text" id="cod_tranzactie" name="cod_tranzactie" required>
    <label for="titlu">Carte Imprumutata</label>
    <input type="text" id="carte_imprumutata" name="carte_imprumutata" required>
    <label for="nume">Nume Utilizator:</label>
    <input type="text" id="utilizator" name="utilizator" required>
    <label for="data_imprumut">Data Împrumutului:</label>
    <input type="date" id="data_imprumut" name="data_imprumut" required>
    <label for="data_scadenta">Data Scadenței:</label>
    <input type="date" id="data_scadenta" name="data_scadenta" required>
    <label for="data_scadenta">Stare::</label>
    <input type="text" id="stare" name="stare" required>
    <input type="submit" value="Adaugă">
</form>

        <table>
            <thead>
                <tr>
                    <th>ID Împrumut</th>
                    <th>Titlu Carte</th>
                    <th>Nume Utilizator</th>
                    <th>Data Împrumutului</th>
                    <th>Status</th>
                    <th>Acțiuni</th>
                </tr>
            </thead>
            <tbody>             
                <tr>
                    <td>789012</td>
                    <td>Rural Hours</td>
                    <td>Dan Ana</td>
                    <td>2024-04-20</td>
                    <td>În așteptare</td>
                    <td>
    <form action="procesare_imprumut.php" method="post" style="display: inline;">
        <input type="hidden" name="imprumut_id" value="789012">
        <button class="process-button" type="submit" name="process-button">Procesare</button>
    </form>
    <form action="anulare_imprumut.php" method="post" style="display: inline;">
        <input type="hidden" name="imprumut_id" value="789012">
        <button class="cancel-button" type="submit" name="cancel-button">Anulare</button>
    </form>
    <form action="sterge_imprumut.php" method="post" style="display: inline;">
        <input type="hidden" name="imprumut_id" value="789012">
        <button class="delete-button" type="submit" name="delete-button">Șterge</button>
    </form>
    <a href="vizualizare_imprumut.php?imprumut_id=789012" class="button view-button" style="display: inline-block;">Vizualizare</a>
</td>

                </tr>
               
            </tbody>
        </table>
    </div>
</body>
</html>
