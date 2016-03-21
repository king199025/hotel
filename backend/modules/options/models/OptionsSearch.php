<?php

namespace backend\modules\options\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\options\models\Options;

/**
 * OptionsSearch represents the model behind the search form about `backend\modules\options\models\Options`.
 */
class OptionsSearch extends Options
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dt_add', 'dt_update'], 'integer'],
            [['opt_key', 'opt_value'], 'safe'],
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
        $query = Options::find();

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
            'dt_add' => $this->dt_add,
            'dt_update' => $this->dt_update,
        ]);

        $query->andFilterWhere(['like', 'opt_key', $this->opt_key])
            ->andFilterWhere(['like', 'opt_value', $this->opt_value]);

        return $dataProvider;
    }
}
