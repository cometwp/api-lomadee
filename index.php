<?php
require __DIR__ . "/vendor/autoload.php";
require  __DIR__ . "/source/ApiLomadee.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu projeto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/7ca284b14a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"
</head>
<body>
<section id="title">
    <header><h2>Égua do Cupom</h2></header>
</section>

<section class="content">
    <section>
        <header id="main-header"><h2>São mais de 190 lojas cheias de promoções!</h2></header>
    </section>
    <div>
        <form action="livesearch.php">
            <input type="text" id="store" name="store" placeholder="Procure as lojas e veja suas ofertas...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>

    <section class="store-list">
        <header><h2>Todas as lojas</h2></header>
        <?php  foreach($response->stores as $store) { ?>
            <article class="store-list-item">
                <img src="<?= $store->thumbnail ?>">
                <header><h3><?= $store->name ;?></h3></header>
                <a href="<?= $store->link ?>" target="_blank">Ver Ofertas</a>
            </article>
        <?php } ?>
    </section>
</section>

<script>
    function showResult(str) {
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
    }
</script>
</body>
</html>