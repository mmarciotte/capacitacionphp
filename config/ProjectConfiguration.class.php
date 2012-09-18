<?php

require_once 'C://xampp//symfony-1.4.18//lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
  }
  
      public function configureDoctrine(Doctrine_Manager $manager) {
        $manager->setAttribute(Doctrine::ATTR_USE_DQL_CALLBACKS, true);
    }
}
