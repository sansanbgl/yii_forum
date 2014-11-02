<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comment;

/**
 * CommentSearch represents the model behind the search form about `app\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_comment', 'user_id', 'thread_id'], 'integer'],
            [['tittle_comment', 'content_comment', 'create_comment', 'update_comment'], 'safe'],
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
        $query = Comment::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_comment' => $this->id_comment,
            'create_comment' => $this->create_comment,
            'update_comment' => $this->update_comment,
            'user_id' => $this->user_id,
            'thread_id' => $this->thread_id,
        ]);

        $query->andFilterWhere(['like', 'tittle_comment', $this->tittle_comment])
            ->andFilterWhere(['like', 'content_comment', $this->content_comment]);

        return $dataProvider;
    }
}
