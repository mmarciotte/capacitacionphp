<?php

require_once 'C://xampp//symfony-1.4.18//lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfAdminThemejRollerPlugin'); 
    $this->enablePlugins('sfJQueryUIPlugin');
    $this->enablePlugins('sfDatePickerTimePlugin');
    $this->enablePlugins('stOfcPlugin');
    $this->enablePlugins('mpRealityAdminPlugin');
  }
  
  public function configureDoctrine(Doctrine_Manager $manager) {
    $manager->setAttribute(Doctrine::ATTR_USE_DQL_CALLBACKS, true);
  }
    
}
