<?php
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Test BST';
?>
<div class="site-index">
    <div class="body-content">

        <?php if ($status == 'ok') : ?>
            <?php foreach ($posts as $post) : ?>
                <div class="row">
                    <div class="post">
                        <h2><?= $post['title'] ?></h2>
                    <br />
                    <p><?= $post['body'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <h2>There is no posts</h2>
        <?php endif; ?>


    </div>
</div>