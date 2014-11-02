<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Threadstar;

/**
 * ThreadstarSearch represents the model behind the search form about `app\models\Threadstar`.
 */
class ThreadstarSearch extends Threadstar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_threadstar', 'rate_threadstar', 'user_id', 'thread_id'], 'integer'],
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
        $query = Threadstar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_threadstar' => $this->id_threadstar,
            'rate_threadstar' => $this->rate_threadstar,
            'user_id' => $this->user_id,
            'thread_id' => $this->thread_id,
        ]);

        return $dataProvider;
    }
}
