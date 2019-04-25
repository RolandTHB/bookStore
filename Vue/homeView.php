<?php
require 'Part/headerHtml.php';
?>

<body>
<?php
require 'Part/navbar.php';
?>
<div class="container text-center ">
    <row class="col-md-6">
        <h1>My Book Store !</h1>
        <p>Tous les livres :</p>
        <button type="submit">
            <a href="/bookStore/index.php?controller=book&action=newBook">
                <i class="fa fa-plus"></i>
                Ajouter un livre
            </a>
        </button>
        <br/>
        <br/>
    </row>


    <?php
    foreach ($books as $book){
        ?>

        <div class="card-deck col-md-12">
            <div class="card p-3 mb-2 bg-dark text-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $book->getName(); ?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <em>
                            écrit par
                            <?php echo $book->getAuthor() ?>
                        </em>
                    </h6>
                    <p class="card-text">
                        Catégorie :
                        <?php
                        echo nl2br(htmlspecialchars($book->getCategory()));
                        ?>
                    </p>
                    <div>
                        <button type="submit">
                            <a href="/bookStore/index.php?controller=book&action=deleteBook&id=<?php echo $book->getId()?>">
                                <i class="fa fa-trash"></i>
                                Supprimer un livre
                            </a>
                        </button>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

</div>
<?php
require 'Part/footerHtml.php';
?>

