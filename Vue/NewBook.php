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
        <p>New Book.php success</p>
    </row>

    <form method="post" action="/bookStore/index.php?controller=book&action=formBook">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Author</label>
            <input name="author" type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre auteur">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" name="category" id="exampleFormControlSelect1">
                <option>Manga</option>
                <option>Comic</option>
                <option>Roman</option>
            </select>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
require 'Part/footerHtml.php';
?>



