<?php
namespace common\fixtures;

use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    public $dataDirectory = '@common/tests/_data';
    public $modelClass = 'common\models\User';
}