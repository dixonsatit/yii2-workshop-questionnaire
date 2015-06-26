<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Questionnaire;

/**
 * QuestionnaireSearch represents the model behind the search form about `app\models\Questionnaire`.
 */
class QuestionnaireSearch extends Questionnaire
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'occupation', 'office', 'choice_content', 'choice_contest', 'choice_seminar', 'choice_ict', 'choice_food', 'choice_news', 'choice_register', 'choice_environment', 'choice_audiovisual', 'choice_location', 'choice_overall', 'adjust', 'batter', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Questionnaire::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'occupation' => $this->occupation,
            'office' => $this->office,
            'choice_content' => $this->choice_content,
            'choice_contest' => $this->choice_contest,
            'choice_seminar' => $this->choice_seminar,
            'choice_ict' => $this->choice_ict,
            'choice_food' => $this->choice_food,
            'choice_news' => $this->choice_news,
            'choice_register' => $this->choice_register,
            'choice_environment' => $this->choice_environment,
            'choice_audiovisual' => $this->choice_audiovisual,
            'choice_location' => $this->choice_location,
            'choice_overall' => $this->choice_overall,
            'adjust' => $this->adjust,
            'batter' => $this->batter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
