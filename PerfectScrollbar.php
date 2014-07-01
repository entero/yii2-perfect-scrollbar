<?php
namespace guzuomuse\perfectscrollbar;
/* 
 * author:孤坐暮色
 * description:perfectscrollbar for yii2 https://github.com/guzuomuse/perfect-scrollbar
 * 
*/
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
class PerfectScrollbar extends \yii\base\Widget {
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */    
    public $options = [];
    /*
    @var array nicescroll options配置
     */
    public $pluginOptions=[];
    
        
    public function init(){
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }        
        echo Html::beginTag('div', $this->options) . "\n";
        PerfectScrollbarAsset::register($this->view,  \yii\web\View::POS_READY);
        $this->registerJs();
    }
    
        
    public function run(){
        parent::run();
        echo Html::endTag('div') . "\n";
//        return $this->id;
    }
    public function registerJs(){
        foreach ($this->pluginOptions as $k=>$v){
            $options.=$k.':'.  Json::encode($v).',';
//            $options.=$k.':'.  $v;
        }
        $js=<<<EOD
       $("#$this->id").perfectScrollbar({$options});
EOD;
        $this->view->registerJs($js);
    }
}

