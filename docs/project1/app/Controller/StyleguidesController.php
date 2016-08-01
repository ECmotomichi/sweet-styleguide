<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class StyleguidesController extends AppController {
  public $uses = array('Styleguide');
  public $helpers = array('SgTable0001');

  public function index() {
    // viewに渡す連想配列を宣言
    $obj_for_view = array(
      'dir_list' => array(),
      'exist_table_ctp' => array(),
      'tr_list' => array(),
      'color_list' => array(),
    );

    // styleguideのディレクトリ一覧を取得
    $dir_path = APP_DIR . '/' . 'View' . '/' . 'Elements' . '/' . 'StyleguideTables';
    $dir_lv_1 = new Folder(ROOT . '/app/View/Elements/StyleguideTables');
    $read_result = $dir_lv_1->read();
    $obj_for_view['dir_list'] = $read_result[0];

    // table.ctpがディレクトリに存在するかを取得
    foreach ($obj_for_view['dir_list'] as $key => $value) {
      $dir_lv_2 = new Folder(ROOT . '/app/View/Elements/StyleguideTables/' . $value);
      $find_result = $dir_lv_2->find('.*\.ctp');
      $obj_for_view['exist_table_ctp'][$value] = empty($find_result[0]) ? FALSE : TRUE;
    }

    // styleguideのtrの一覧を取得
    foreach ($obj_for_view['dir_list'] as $key => $dir_name){
      $dir_lv_3 = new Folder(ROOT . '/app/View/Elements/StyleguideTables' . '/' . $dir_name . '/TableRows');
      $read_result = $dir_lv_3->read();
      $obj_for_view['tr_list'][$dir_name] = $read_result[1];
    }

    $this->set('obj', $obj_for_view);
  }//end of index action
}
