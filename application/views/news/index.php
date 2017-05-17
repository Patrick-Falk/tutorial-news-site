<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 2017-05-17
 * Time: 10:36 AM
 */

?>

<h2><?= $title; ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?= $news_item['title'];?></h3>
    <div class="main">
        <?= $news_item['text'] ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View Article</a></p>

<?php endforeach; ?>