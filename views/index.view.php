<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>

<h1 class = "virsraksts">Emuārs</h1>

<form class = "form">
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
    <button>Meklēt</button>
</form>

<?php if (count($posts) == 0){ ?>
    <p> ❌ Nav atrasts neviens ieraksts. 😭 Lūdzu, pamēģini citu vārdu vai frāzi 🐣</p>
        <?php 
}
else { ?>
    <ul>
        <?php foreach($posts as $post) { ?>
            <li class = "ieraksti"> 
                <?= $post["content"] ?> 
            </li>
            <?php 
        } ?>
    </ul>
<?php } ?>