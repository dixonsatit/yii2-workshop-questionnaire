<?php
namespace app\components;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class ChartJsData extends Component {

  public $dataSet = [];
  private $pieColor = [];

  public function setPieColor(array $colors){
    $this->pieColor = $colors;
  }

  public function createPieDataSet($data){
    $dataset = [];
    $i = 1;
    foreach ($data as $label => $value) {
      extract($this->pieColor[$i]);
      $dataset[] = [
          'value'=> $value,
          'color'=>$color,
          'highlight'=>$highlightColor,
          'label'=> $label
      ];
      $i++;
    }
    return $dataset;
  }

  private function getRandomColor()
  {
    return "#".dechex(rand(0x000000, 0xFFFFFF));
  }

}
 ?>
