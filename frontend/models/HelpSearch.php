<?php

namespace frontend\models;

/**
 * Team: RollRollTeam
 * Coding by 吕昆娴 2013851
 */

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Help;

/**
 * HelpSearch represents the model behind the search form of `frontend\models\Help`.
 */
class HelpSearch extends Help
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hid'], 'integer'],
            [['country', 'donator', 'date', 'kind'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Help::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'hid' => $this->hid,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'donator', $this->donator])
            ->andFilterWhere(['like', 'kind', $this->kind]);

        return $dataProvider;
    }
}
