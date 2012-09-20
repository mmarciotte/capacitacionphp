<?php

/**
 * News form.
 *
 * @package    Prueba
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
    public function configure() {
        if (isset($this->validatorSchema['created_at'])) {
            unset($this->validatorSchema['created_at']);
            unset($this->validatorSchema['updated_at']);
           
            unset($this->widgetSchema['created_at']);
            unset($this->widgetSchema['updated_at']);
         }
         
        $this->widgetSchema['deleted_at'] = new sfWidgetFormDateJQueryUI();
        $this->widgetSchema['tags_list']  = new sfWidgetFormDoctrineChoice(array('multiple' => true, 'expanded' => true, 'model' => 'Tags'));
    }
}
