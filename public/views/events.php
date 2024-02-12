<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/homepage.css";>
    <link rel="stylesheet" type="text/css" href="public/css/events.css";>
    <script src="https://kit.fontawesome.com/8649a3516d.js" crossorigin="anonymous"></script>
    <title>HOME PAGE</title>
</head>
<body>
    <div class="baseContainer">
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li><a href="account" class="button"> <i class="fa-solid fa-user"></i> Mój profil</a></li>
                <li><a href="bookmarks" class="button"> <i class="fa-solid fa-bookmark"></i> Zapisane</a></li>
                <li><a href="calendar" class="button"> <i class="fa-solid fa-calendar-days"></i> Terminarz</a></li>
                <li><a href="search" class="button"> <i class="fa-solid fa-magnifying-glass"></i> Wyszukiwanie</a></li>
                <li><a href="/logout" class="button"> <i class="fa-solid fa-right-from-bracket"></i> Wyloguj się</a></li>
            </ul>
        </nav>

        <main>

            <section class="events">
                <?php foreach($events as $event): ?>
                    <div id="event-1">
<!--                        <img src="public/uploads/--><?//= $event->getImage(); ?><!--">-->
                        <div>
                            <h2><?= $event->getTitle(); ?></h2>
                            <p><?= $event->getDescription(); ?></p>
                            <div class="social-section">
                                <i class="fas fa-heart"> 600</i>
                                <i class="fas fa-minus-square"> 121</i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>

        </main>

    </div>
</body>
</html>