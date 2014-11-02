<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Thread;

/**
 * ThreadSearch represents the model behind the search form about `app\models\Thread`.
 */
class ThreadSearch extends Thread
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_thread', 'category_id', 'user_id'], 'integer'],
            [['title_thread', 'content_thread', 'create_thread', 'update_thread'], 'safe'],
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
        $query = Thread::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_thread' => $this->id_thread,
            'create_thread' => $this->create_thread,
            'update_thread' => $this->update_thread,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'title_thread', $this->title_thread])
            ->andFilterWhere(['like', 'content_thread', $this->content_thread]);

        return $dataProvider;
    }
}
