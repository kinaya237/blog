<?php $title = "Modifier un chapitre"; ?>

<?php  ob_start();?>


<h2 class="text-center text-white pt-5">Modification du chapitre</h2>


<form action="index.php?action=modifyPost&amp;id=<?= $post['id'];?>" method="post">

    <p>
    <label for="chapter">Titre du chapitre</label>
    <input type="text" name="title" id="chapter" value="<?= $post['title']?>">
    </p>

    <p><label for="content">Contenu du chapitre</label></p>
    <textarea  name="content" rows="20" cols="100" id="content"><?= $post['content']?></textarea>
    <button type="submit"class="btn btn-success">Valider</button>
</form>

<?php $content= ob_get_clean();?>


<?php require('adminTemplate.php') ?>
