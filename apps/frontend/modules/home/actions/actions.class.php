<?php

/**
 * home actions.
 *
 * @package    Prueba
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $my_user = $this->getUser();
echo "<pre>";

$query = doctrine_core::getTable("News")->createQuery()->execute();

//        print_r($query->getSqlQuery()); die;
    print_r($query->execute()); die;
    $this->newss = $query->execute();

        
      $this->image1 = 'shirt-red.jpg';
      $this->image2 = 'shirt-orange.jpg';
  }
  
  public function executeIndex2(sfWebRequest $request)
  {
   
  }
}
