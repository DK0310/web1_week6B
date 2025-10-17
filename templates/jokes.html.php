<?php foreach($jokes as $joke): ?>
    <blockquote>
    <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
    <br>
    <?php $display_date = date("D d M Y", strtotime($joke['jokedate']))?>
    <?=htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8')?> </td>
    <br>
    <img height="100px" src="images/<?=htmlspecialchars($joke['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Joke image">

    <form action="deletejoke.php" method="post">
        <input type="hidden" name="id" value="<?=$joke['id']?>">
        <input type="submit" value="Delete">
    </form>
    </blockquote>
    <?php endforeach;?>