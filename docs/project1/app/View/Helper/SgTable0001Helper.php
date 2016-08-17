<?php
// AppHelperの使用を宣言
App::uses('AppHelper', 'View/Helper');
// AppHelperを継承して、ExampleHelperクラスを作成
class SgTable0001Helper extends AppHelper {

  public function createSection($i__arr = array('is_deprecated'=>FALSE)) {
    $class_name_arr = array(
      'deprecated' => ''
    );
    if($i__arr['is_deprecated'] === TRUE) {
      $class_name_arr['deprecated'] = 'sg-table-0001--deprecated';
    }
    $html_arr = array(
      '<section class="sg-table-0001 ' . $class_name_arr['deprecated'] . '" id="'. $i__arr['heading_text'] .'">',
        '<div class="sg-table-0001__first-wrap">',
          '<span class="sg-table-0001__table-heading-wrap">',
            '<div class="sg-heading-0001">',
              '<h2 class="sg-heading-0001__h-elm">',
                $i__arr['heading_text'],
              '</h2>',
            '</div>',
          '</span>',
        '<div class="sg-table-0001__table-desc">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function tableHeading() {
    $html_arr = array(
      '<h2 class="sg-table-0001__table-heading">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function tableDesc() {
    $html_arr = array(
      '</h2>',
      '<div class="sg-table-0001__table-desc">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function createTable() {
    $html_arr = array(
      '</div>',
        '<div class="sg-table-0001__table-wrap">',
          '<ul class="sg-table-0001__table">',
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function createTr() {
    $html_arr = array(
      '<li class="sg-table-0001__tr">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function descCell() {
    $html_arr = array(
      '<div class="sg-table-0001__desc-cell">',
        '<div class="sg-table-0001__desc-cell-inner">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function displayCell() {
    $html_arr = array(
        '</div>',
      '</div>',
      '<div class="sg-table-0001__display-cell">',
        '<div class="sg-table-0001__display-cell-inner js-sg-table-0001__display-cell-inner">'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function sampleCodeCell() {
    $html_arr = array(
        '</div>',
      '</div>',
      '<div class="sg-table-0001__sample-code-cell">',
        '<div class="sg-table-0001__sample-code-cell-inner">',
          '<textarea class="sg-table-0001__textarea-elm" readonly>'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function endTr() {
    $html_arr = array(
            '</textarea>',
            '<input class="sg-table-0001__btn-select-this-code js-sg-table-0001__btn-select-this-code" type="button" name="name" value="このコードを選択">',
          '</div>',
        '</div>',
      '</li>'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }

  public function endSection() {
    $html_arr = array(
            '</ul>',
          '</div>',
          '<div class="sg-table-0001__translucent-layer">',
            '&nbsp;',
          '</div>',
          '<p class="sg-table-0001__deprecated-info">',
            'このモジュールは廃止予定です。',
          '</p>',
        '</div>',
      '</section>'
    );
    $html_str = implode('', $html_arr);
    return $html_str;
  }
}
