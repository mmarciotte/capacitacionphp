<?php

class homeComponents extends sfComponents
{

  /**
  * This component action will generate the Brief template for the search results page
  */
  public function executeNews(){
      $this->title = $this->newss->getFirst()->getTitle();    
  }
}