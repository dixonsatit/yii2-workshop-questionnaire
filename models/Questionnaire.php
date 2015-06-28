<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%questionnaire}}".
 *
 * @property integer $id
 * @property integer $occupation
 * @property integer $office
 * @property integer $choice_content
 * @property integer $choice_contest
 * @property integer $choice_seminar
 * @property integer $choice_ict
 * @property integer $choice_food
 * @property integer $choice_news
 * @property integer $choice_register
 * @property integer $choice_environment
 * @property integer $choice_audiovisual
 * @property integer $choice_location
 * @property integer $choice_overall
 * @property integer $adjust
 * @property integer $batter
 * @property integer $created_at
 * @property integer $updated_at
 */
class Questionnaire extends \yii\db\ActiveRecord
{

    const CHOICE_ONE    = 1;
    const CHOICE_TWO    = 2;
    const CHOICE_THREE  = 3;
    const CHOICE_FOUR   = 4;
    const CHOICE_FIVE   = 5;

    const OFFICE_PRIVATE = 1;
    const OFFICE_PUBLIC  = 2;

    const OCCUPATION_DOCTOR     = 1;
    const OCCUPATION_NURSE      = 2;
    const OCCUPATION_PHARMACY   = 3;
    const OCCUPATION_DENTIST    = 4;
    const OCCUPATION_HEALTH     = 5;
    const OCCUPATION_OTHER      = 6;

    public function behaviors(){
        return [
            TimestampBehavior::className()
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%questionnaire}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['occupation', 'office', 'choice_content', 'choice_contest', 'choice_seminar', 'choice_ict', 'choice_food', 'choice_news', 'choice_register', 'choice_environment', 'choice_audiovisual', 'choice_location', 'choice_overall'], 'required'],
            [['occupation', 'office', 'choice_content', 'choice_contest', 'choice_seminar', 'choice_ict', 'choice_food', 'choice_news', 'choice_register', 'choice_environment', 'choice_audiovisual', 'choice_location', 'choice_overall', 'created_at', 'updated_at'], 'integer'],
            [['adjust', 'batter'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'occupation' => Yii::t('app', 'อาชีพ'),
            'office' => Yii::t('app', 'หน่วยงาน'),
            'choice_content' => Yii::t('app', 'ด้านเนื้อหาการประชุมวิชาการ'),
            'choice_contest' => Yii::t('app', 'ด้านการประกวดผลงานวิชาการ'),
            'choice_seminar' => Yii::t('app', 'ด้านการแสดงนิทรรศการประชุมวิชาการ'),
            'choice_ict' => Yii::t('app', 'ด้านเทคโนโลยีสารสนเทศ'),
            'choice_food' => Yii::t('app', 'ด้านอาหาร'),
            'choice_news' => Yii::t('app', 'การประชาสัมพันธ์'),
            'choice_register' => Yii::t('app', 'การลงทะเบียน'),
            'choice_environment' => Yii::t('app', 'บรรยากาศการจัดงาน'),
            'choice_audiovisual' => Yii::t('app', 'โสตทัศนูปกรณ์'),
            'choice_location' => Yii::t('app', 'สถานที่จัดกิจกรรม'),
            'choice_overall' => Yii::t('app', 'ภาพรวมกิจกรรม'),
            'adjust' => Yii::t('app', 'สิ่งที่ควรแก้ไข'),
            'batter' => Yii::t('app', 'ส่ิงที่ควรปรับปรุง'),
            'created_at' => Yii::t('app', 'วันที่ประเมิน'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'occupationName' => Yii::t('app', 'อาชีพ'),
            'officeName' => Yii::t('app', 'หน่วยงาน'),
        ];
    }

    /**
     * @inheritdoc
     * @return QuestionnaireQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new QuestionnaireQuery(get_called_class());
    }

    /**
     * @return array of type
     */
    public static function itemsAilas($type){
        $items = [
            'occupation'=> [
                self::OCCUPATION_DOCTOR     => 'แพทย์',
                self::OCCUPATION_NURSE      => 'พยาบาล',
                self::OCCUPATION_PHARMACY   => 'เภสัชกร',
                self::OCCUPATION_DENTIST    => 'ทันตแพทย์',
                self::OCCUPATION_HEALTH     => 'นักวิชาการสาธารณะ',
                self::OCCUPATION_OTHER      => 'อื่นๆ '
            ],
            'office'=>[
               self::OFFICE_PRIVATE => 'ภายใน รพ.ขอนแก่น',
               self::OFFICE_PUBLIC  => 'ภายนอก'
            ],
            'choice'=>[
                self::CHOICE_ONE    => 'น้อยที่สุด',
                self::CHOICE_TWO    => 'น้อย',
                self::CHOICE_THREE  => 'ปานกลาง',
                self::CHOICE_FOUR   => 'มาก',
                self::CHOICE_FIVE   => 'มากที่สุด'
            ]
        ];

        return array_key_exists($type, $items) ? ArrayHelper::getValue($items,$type) : [];
    }

    public function getItemsOccupation(){
        return self::itemsAilas('occupation');
    }

    public function getItemsOffice(){
        return self::itemsAilas('office');
    }

    public function getItemsChoice(){
        return self::itemsAilas('choice');
    }

    /**
     * @return string of Occupation
     */
    public function getOccupationName(){
        $items =  self::itemsAilas('occupation');
        return array_key_exists($this->occupation, $items) ? ArrayHelper::getValue($items,$this->occupation) : null;
    }

    /**
     * @return string of Office
     */
    public function getOfficeName(){
        $items =  self::itemsAilas('office');
        return array_key_exists($this->office, $items) ? ArrayHelper::getValue($items,$this->office) : null;
    }

    /**
     * @return string of choice
     */
    public function getChoiceName($choiceId){
        $items =  self::itemsAilas('choice');
        return array_key_exists($choiceId, $items) ? ArrayHelper::getValue($items,$choiceId) : null;
    }

    public static function getAllData(){

        $datasets =  Yii::$app->db->createCommand(
            'SELECT
                        sum(if(questionnaire.choice_content=1,1,0)) as "1",
                        sum(if(questionnaire.choice_content=2,1,0))as "2",
                        sum(if(questionnaire.choice_content=3,1,0))as "3",
                        sum(if(questionnaire.choice_content=4,1,0))as "4",
                        sum(if(questionnaire.choice_content=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_contest=1,1,0)) as "1",
                        sum(if(questionnaire.choice_contest=2,1,0))as "2",
                        sum(if(questionnaire.choice_contest=3,1,0))as "3",
                        sum(if(questionnaire.choice_contest=4,1,0))as "4",
                        sum(if(questionnaire.choice_contest=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_environment=1,1,0)) as "1",
                        sum(if(questionnaire.choice_environment=2,1,0))as "2",
                        sum(if(questionnaire.choice_environment=3,1,0))as "3",
                        sum(if(questionnaire.choice_environment=4,1,0))as "4",
                        sum(if(questionnaire.choice_environment=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_food=1,1,0)) as "1",
                        sum(if(questionnaire.choice_food=2,1,0))as "2",
                        sum(if(questionnaire.choice_food=3,1,0))as "3",
                        sum(if(questionnaire.choice_food=4,1,0))as "4",
                        sum(if(questionnaire.choice_food=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_ict=1,1,0)) as "1",
                        sum(if(questionnaire.choice_ict=2,1,0))as "2",
                        sum(if(questionnaire.choice_ict=3,1,0))as "3",
                        sum(if(questionnaire.choice_ict=4,1,0))as "4",
                        sum(if(questionnaire.choice_ict=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_location=1,1,0)) as "1",
                        sum(if(questionnaire.choice_location=2,1,0))as "2",
                        sum(if(questionnaire.choice_location=3,1,0))as "3",
                        sum(if(questionnaire.choice_location=4,1,0))as "4",
                        sum(if(questionnaire.choice_location=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_news=1,1,0)) as "1",
                        sum(if(questionnaire.choice_news=2,1,0))as "2",
                        sum(if(questionnaire.choice_news=3,1,0))as "3",
                        sum(if(questionnaire.choice_news=4,1,0))as "4",
                        sum(if(questionnaire.choice_news=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_register=1,1,0)) as "1",
                        sum(if(questionnaire.choice_register=2,1,0))as "2",
                        sum(if(questionnaire.choice_register=3,1,0))as "3",
                        sum(if(questionnaire.choice_register=4,1,0))as "4",
                        sum(if(questionnaire.choice_register=5,1,0)) as "5"
                        FROM questionnaire
             UNION
             SELECT
                        sum(if(questionnaire.choice_overall=1,1,0)) as "1",
                        sum(if(questionnaire.choice_overall=2,1,0))as "2",
                        sum(if(questionnaire.choice_overall=3,1,0))as "3",
                        sum(if(questionnaire.choice_overall=4,1,0))as "4",
                        sum(if(questionnaire.choice_overall=5,1,0)) as "5"
                        FROM questionnaire
            ')->queryAll();
        return $datasets;

    }

    public static function createPieDataSet(){
        $labels =  self::itemsAilas('choice');
        $rawData = self::getAllData();
        $data = [];
        foreach ($rawData as $value) {
          $items = [];
          foreach($value as $k => $v){
            $items[$labels[$k]] = $v;
          }
          $data[] = Yii::$app->chartJsData->createPieDataSet($items);
        }
        return $data;
    }
}
