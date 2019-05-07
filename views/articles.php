<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новостной портал</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
        <header><a href="admin">Панель управления</a></header>
        <div class="blogline"></div>
        <div>
        <?php foreach ($articles as $a): ?> 
            <div class="blog">
                <h3><a href="article.php?id=<?=$a['id']?>">
                        <?=$a['title']?>
                    </a></h3>
                <p><?=articles_intro($a['content'])?>...</p>
            </div>
        <?php endforeach ?> 
        </div>
</body>
</html>
© 2019
