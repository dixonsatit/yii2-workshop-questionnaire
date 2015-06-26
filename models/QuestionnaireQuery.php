<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Questionnaire]].
 *
 * @see Questionnaire
 */
class QuestionnaireQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Questionnaire[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Questionnaire|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}