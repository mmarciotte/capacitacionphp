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
    $query = Doctrine_Core::getTable('news')
      ->createQuery('news');
    //        ->setHydrationMode(Doctrine::HYDRATE_ARRAY);
    
    $this->newss = $query->execute();

        
      $this->image1 = 'shirt-red.jpg';
      $this->image2 = 'shirt-orange.jpg';
  }
  
  public function executeIndex2(sfWebRequest $request)
  {
   
  }
}
