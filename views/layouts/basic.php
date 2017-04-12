<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody(); ?>

    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?=Html::a('Головна', '/') ?></li>
                <li role="presentation"><?=Html::a('Статті', ['post/index']) ?></li>
                <li role="presentation"><?=Html::a('Стаття', ['post/show']) ?></li>
            </ul>

        <?php if(isset($this->blocks['block1'])): ?>
        <?php echo $this->blocks['block1'];?>
        <?php endif; ?>
            <?=$content ?>
        </div>
    </div>


<?php $this->endBody(); ?>
</body>
</html>

<?php $this->endPage(); ?>