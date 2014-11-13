<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'level_id'], 'integer'],
            [['name_user', 'password_user', 'saltpassword_user', 'email_user'], 'safe'],
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_user' => $this->id_user,
            'level_id' => $this->level_id,
        ]);

        $query->andFilterWhere(['like', 'name_user', $this->name_user])
            ->andFilterWhere(['like', 'password_user', $this->password_user])
            ->andFilterWhere(['like', 'saltpassword_user', $this->saltpassword_user])
            ->andFilterWhere(['like', 'email_user', $this->email_user]);

        return $dataProvider;
    }
}
