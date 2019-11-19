<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/html">
<head>
    <?php require_once('head.php'); ?>
</head>
<body>

    <div class="container">
        <nav>
            <?php require_once ('nav.php'); ?>
        </nav>
    <header>
            <h1>Witaj na stronie poświęconej portalowi rolniczemu</h1><br>
            <p class="header-napis">Portal rolniczy AgroStonka to najświeższe wiadomości rolnicze i fachowe artykuły. Produkcja rolna, aktualne cenniki, technika rolnicza, prawo i agrobiznes. znajdziesz newsy o rolnictwie: dotacje, ceny rolnicze</p>
    </header>
        <article>
            <h2>Najświeższe wiadomości ze świata rolnictwa</h2>
            <a href="news1.php">
                <div class="card">
                    <img src="img/news1.jpg" alt="Pierwszy news">
                        <p>Rolnictwo dzięki nowym technologiom, innowacjom i po części za sprawą nowych restrykcyjnych przepisów, zmienia się na naszych oczach. W tych zmianach uczestniczy i nakreśla kierunki         rozwoju rolnictwa także firma BASF. Stara się przy tym prowadzić biznes odpowiedzialny społecznie, o czym mówiono na Konferencji BASF Media Event, która odbyła się 10 października w Nunhem (Holandia).</p>
            </div>
            </a>

            <a href="news2.php">
            <div class="card">
                <img src="img/news2.jpg" alt="Drugi news">
                <p>Tegoroczna, VII edycja konferencji "Farmera" Narodowe Wyzwania w Rolnictwie ponownie cieszyła się ogromnym zainteresowaniem. W sumie w trwającym przez cały dzień kilkudziesięciu wykładom, prezentacjom i debatom przysłuchiwało się ponad 1200 osób. Zabaczcie jak to wyglądało w obiektywie.</p>
            </div>
            </a>
            <a href="news3.php">
            <div class="card">
                <img src="img/news3.jpg" alt="Trzeci news">
                <p>Bramy bioasekuracyjne dostępne są na polskim rynku już od 3 lat. Daniel Wyczółkowski z firmy Unidoz mówi w rozmowie z naszym portalem o zainteresowaniu rolników tą technologią, oraz możliwościach skorzystania z dofinansowania na zakup bram</p>
            </div>
            </a>
        </article>
        <h1>TABELKI</h1><br>
        <table>
            <tr>
                <th rowspan="2">Wyszczególnienie</th>
                <th>Bardzo ufam</th>
                <th>ufam</th>
                <th>Nie ufam</th>
                <th>Bardzo nie ufam</th>
                <th colspan="2">Ogółem</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>N</td>
                <td>%</td>
            </tr>
            <tr>
                <td>Banki komercyjne</td>
                <td class="kolor1">2,3%</td>
                <td class="kolor4">46,0%</td>
                <td class="kolor3">33,3%</td>
                <td class="kolor2">18,4%</td>
                <td>741</td>
                <td>100,0%</td>
            </tr>

            <tr>
                <td>Narodowy Bank Polski</td>
                <td class="kolor2">12,9%</td>
                <td class="kolor4">62,7%</td>
                <td class="kolor2">15,4%</td>
                <td class="kolor2">9,0%</td>
                <td>837</td>
                <td>100,0%</td>
            </tr>

            <tr>
                <td>Sejm</td>
                <td class="kolor1">2,7%</td>
                <td class="kolor2">19,4%</td>
                <td class="kolor3">39,9%</td>
                <td class="kolor3">37,9%</td>
                <td>854</td>
                <td>100,0%</td>
            </tr>

            <tr>
                <td>Prezydent</td>
                <td class="kolor2">11,8%</td>
                <td class="kolor3">38,9%</td>
                <td class="kolor2">28,8%</td>
                <td class="kolor1">20,4%</td>
                <td>846</td>
                <td>100,0%</td>
            </tr>
        </table>
        <br>
        Źródło: <a href="https://predictivesolutions.pl/">predictivesolutions.pl</a><br><br>
        <hr>
        <h1>Skontaktuj się z nami</h1>
        <div class="rejestracja">
            <form>
                <label>Imię: <br><input type="text" name="imie"></label>
                <label>Nazwisko: <br><input type="text" name="nazwisko"></label>
                <label>Email: <br><input type="text" name="email"></label>
                <label>Wiadomość: <br><textarea name="wiadomosc" id="" cols="30" rows="10"></textarea></label><br>
                <input type="submit" value="Wyślij!" onclick="validate(this.form);">
            </form>
        </div>

    </div>
    <footer>
        <?php require_once ('footer.php'); ?>
    </footer>
    <script src="check-form.js"></script>
</body>
</html>