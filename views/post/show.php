<?php
//$this->title = 'Одна стаття';
?>

<?php $this->beginBlock('block1'); ?>
<h1>Pfujkjdjr cnjhsyrb</h1>
<?php $this->endBlock(); ?>
<h1>Show Action</h1>



<?php debug($cats); ?>


<button id="btn" class="btn btn-success">Click me</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php //$this->registerJs("$('.container').append('<p>Show</p>');", \yii\web\View::POS_LOAD) ?>

<?php //$this->registerCss('.container{background: #ccc}') ?>

<?php

$js = <<<JS

    $('#btn').on('click', function() {
      $.ajax({
        url: 'index.php?r=post/index',
        data:{test:'123'},
        type: 'POST',
        success: function(res) {
          console.log(res);
        },
        error:function() {
          alert('Error');
        }
      });
    })

JS;


$this->registerJs($js); ?>

