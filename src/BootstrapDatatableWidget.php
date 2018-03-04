<?php

namespace mbi\datatables;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;

class BootstrapDatatableWidget extends Widget
{
    public $id;

    public $tableOptions = [];

    protected $_options = [];

    public function init()
    {
        parent::init();
        BootstrapDatatableAsset::register($this->getView());

        $id = isset($this->id) ? $this->id : $this->getId();
        $this->getView()->registerJs('jQuery("#' . $id . '").DataTable(' . Json::encode($this->getOptions()) . ');');

        echo Html::beginTag('table', ArrayHelper::merge(['id' => $id], $this->tableOptions));
    }

    public function run()
    {
        echo Html::endTag('table');
    }

    protected function getOptions()
    {
        return $this->_options;
    }

    public function __set($name, $value)
    {
        return $this->_options[$name] = $value;
    }

    public function __get($name)
    {
        return isset($this->_options[$name]) ? $this->_options[$name] : null;
    }

}