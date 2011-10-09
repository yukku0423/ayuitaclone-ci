<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Items extends CI_Controller {
  public function index() {
    $this->load->model( 'Item_model' );
    $data = array(
      'items' => $this->Item_model->find_all(),
    );

    $this->load->view( 'items/index', $data ) ;
  }

  public function add() {
    $this->load->model( 'Type_model' );
    $data = array(
      'types' => $this->Type_model->find_all(),
    );

    $this->load->view( 'items/add', $data ) ;
  }

  public function confirm() {
    $this->load->view( 'items/confirm' ) ;
  }

  public function edit() {

  }

  public function delete() {

  }
}
