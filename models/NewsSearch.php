<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * NewsSearch represents the model behind the search form about `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_news', 'user_id'], 'integer'],
            [['title_news', 'content_news', 'pictureloc_news'], 'safe'],
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
        $query = News::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_news' => $this->id_news,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'title_news', $this->title_news])
            ->andFilterWhere(['like', 'content_news', $this->content_news])
            ->andFilterWhere(['like', 'pictureloc_news', $this->pictureloc_news]);

        return $dataProvider;
    }
}
