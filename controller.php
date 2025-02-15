<?php
// controller.php
require_once "model.php";
require_once "view.php";


class UserController
{
  private $model;
  private $view;


  public function __construct(UserModel $model, UserView $view)
  {
    $this->model = $model;
    $this->view = $view;
  }

  public function setUsername($username)
  {
    $this->model->setUsername($username);
  }

  public function getUsername()
  {
    return $this->model->getUsername();
  }

  public function setOccupation($occupation)
  {
    $this->model->setOccupation($occupation);
  }

  public function getOccupation()
  {
    return $this->model->getOccupation();
  }

  public function showForm()
  {
    $this->view->renderForm();
  }


  public function showUser()
  {
    $username = $this->getUsername();
    $occupation = $this->getOccupation();
    $this->view->output($username,$occupation);
  }
}
