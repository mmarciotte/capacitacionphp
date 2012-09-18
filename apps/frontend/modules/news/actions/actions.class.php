<?php

/**
 * news actions.
 *
 * @package    Prueba
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->newss = Doctrine_Core::getTable('news')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new newsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new newsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($news = Doctrine_Core::getTable('news')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $this->form = new newsForm($news);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($news = Doctrine_Core::getTable('news')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $this->form = new newsForm($news);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($news = Doctrine_Core::getTable('news')->find(array($request->getParameter('id'))), sprintf('Object news does not exist (%s).', $request->getParameter('id')));
    $news->delete();

    $this->redirect('news/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $news = $form->save();

      $this->redirect('news/edit?id='.$news->getId());
    }
  }
}
