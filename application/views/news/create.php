<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 2017-05-17
 * Time: 1:33 PM
 */
?>
    <h2><?= $title; ?></h2>

    <?= validation_errors(); ?>

    <?php echo form_open('news/create'); ?>

    <form>
        <label for="title">Title</label>
        <input type="input" name="title" /><br />

        <label for="text">Text</label>
        <textarea name="text"></textarea><br />

        <input type="submit" name="submit" value="Create news item" />
    </form>