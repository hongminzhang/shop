<?php
use yii\helpers\Html;
use app\components\HelloWidget;
//$this->params['breadcrumbs'][] = 'About Us';
$this->title = 'My page title11';
//\Yii::$app->view->on(View::EVENT_END_BODY, function () {
//    echo date('Y-m-d');
//});
?>
name :<?= Html::encode($test)?>

<?= $this->context->id ?>
<?php HelloWidget::begin(); ?>

content that may contain <tag>'s

    <?php HelloWidget::end(); ?>
