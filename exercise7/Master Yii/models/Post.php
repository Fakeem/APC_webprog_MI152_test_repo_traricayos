<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $firstname
 * @property integer $slug
 * @property string $lastname
 * @property string $midname
 * @property string $nickname
 * @property string $email
 * @property string $homeadd
 * @property string $gender
 * @property string $comment
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'slug', 'lastname', 'midname', 'nickname', 'email', 'homeadd', 'gender', 'comment'], 'required'],
            [['slug'], 'integer'],
            [['comment'], 'string'],
            [['firstname', 'lastname', 'midname', 'nickname', 'email', 'homeadd', 'gender'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'slug' => 'Slug',
            'lastname' => 'Lastname',
            'midname' => 'Midname',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'homeadd' => 'Homeadd',
            'gender' => 'Gender',
            'comment' => 'Comment',
        ];
    }
}
