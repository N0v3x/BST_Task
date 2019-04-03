<?php
use yii\helpers\Html;


/* @var $this yii\web\View */

$this->title = 'Test BST';
?>
<div class="site-index">
    <div class="body-content">

        <?php foreach ($posts as $post) : ?>
            <div class="row">
                <div class="post">
                    <h2><?= $post['title'] ?></h2>
                    <br />
                    <p><?= $post['body'] ?></p>
                    </div>
                </div>

                    <?php endforeach; ?>


    </div>
</div>