<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2018/9/12
 * Time: 10:31
 */

namespace huijiewei\ExpandingTextareas;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\InputWidget;

class ExpandingTextareasWidget extends InputWidget
{
    public function init()
    {
        parent::init();

        $this->options = ArrayHelper::merge([
            'class' => 'expanding form-control',
        ], $this->options);


        ExpandingTextareasAsset::register($this->getView());
    }

    public function run()
    {
        parent::run();

        if ($this->hasModel()) {
            return Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            return Html::textarea($this->name, $this->value, $this->options);
        }
    }
}