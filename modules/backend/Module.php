<?phpnamespace app\modules\backend;use Yii;class Module extends \yii\base\Module{    public function init()    {        // 使用一个路径定义一个路径别名        Yii::setAlias('@foo', '@app/modules/backend/services');        parent::init();    }}