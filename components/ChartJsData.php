<?php
namespace app\components;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class ChartJsData extends Component {

  public $dataSet = [];

  private function _getPieData(){

  }

  public function createPieDataSet($data){
    $dataset = [];
    foreach ($data as $key => $label) {
      $dataset[] = [
          'value'=> $key,
          'color'=> $this->getRandomColor(),
          'highlight'=>$this->getRandomColor(),
          'label'=> $label
      ];
    }
    return $dataset;
  }

  private function getRandomColor()
  {
    return dechex(rand(0x000000, 0xFFFFFF));
  }

}
 ?>
