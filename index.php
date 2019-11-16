<!DOCTYPE html>
<html lang="pl">
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

    </div>
    <footer>
        <?php require_once ('footer.php'); ?>
    </footer>
</body>
</html>