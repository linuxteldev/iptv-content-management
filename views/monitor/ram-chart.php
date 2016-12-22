<?php
use yii\helpers\Html;
use app\models\ChartDraw;
$this->title = 'RAM Chart';
$this->params['breadcrumbs'][] = ['label' => 'Monitor Dashboard','url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$request = Yii::$app->request;
?>

<div style="float: right">
<?= Html::a('Chart', null, ['class' => 'btn btn-default']);?>
<?= Html::a('Grid', ['ram-grid','serverName' => $request->get('serverName')], ['class' => 'btn btn-default']);?><br/>
</div>
<?php
echo ChartDraw::drawLineChart('RAM Utilization', 'Click and drag to zoom in', 'RAM Utilization Percentage(%)', '%', $data);