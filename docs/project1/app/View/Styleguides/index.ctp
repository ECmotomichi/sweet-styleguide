<?php
//styleguide.cssを読み込み
echo $this->Html->css('styleguide');

//styleguide.jsを読み込み
echo $this->Html->script('styleguide');
?>



<?php
// カラーテーブルの設定を書くところ(ここから)
$obj['color_list'] = array(





  //1テーブル分の表示データ(ここから)
  array(
    'heading' => '色テーブル1のタイトル',
    'color' => array(

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名1',
        'color_code' => '#ffdddd',
        'desc' => '色についての説明文1',
      ),
      //1行分の表示データ(ここまで)

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名2',
        'color_code' => '#ddddff',
        'desc' => '色についての説明文2',
      ),
      //1行分の表示データ(ここまで)

    )
  ),
  //1テーブル分の表示データ(ここまで)





  //1テーブル分の表示データ(ここから)
  array(
    'heading' => '色テーブル2のタイトル',
    'color' => array(

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名1',
        'color_code' => '#ffdddd',
        'desc' => '色についての説明文1',
      ),
      //1行分の表示データ(ここまで)

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名2',
        'color_code' => '#ddffdd',
        'desc' => '色についての説明文2',
      ),
      //1行分の表示データ(ここまで)

    )
  ),
  //1テーブル分の表示データ(ここまで)





  //1テーブル分の表示データ(ここから)
  array(
    'heading' => '色テーブル3のタイトル',
    'color' => array(

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名1',
        'color_code' => '#ffdddd',
        'desc' => '色についての説明文1',
      ),
      //1行分の表示データ(ここまで)

      //1行分の表示データ(ここから)
      array(
        'var_name' => 'sassなどで使用している変数名2',
        'color_code' => '#ddffdd',
        'desc' => '色についての説明文2',
      ),
      //1行分の表示データ(ここまで)

    )
  ),
  //1テーブル分の表示データ(ここまで)





);
// カラーテーブルの設定を書くところ(ここまで)
?>




















<header class="sg-header-0001">
  <div class="sg-header-0001__first-wrap">
    <h1 class="sg-header-0001__heading-wrap">
      <a class="sg-header-0001__heading" href="#page-top">スタイルガイド</a>
    </h1>
    <ul class="sg-header-0001__view-area-width-changer-ul">
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">320</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">768</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">984</li>
      <li class="sg-header-0001__view-area-width-changer-li js-sg-header-0001__view-area-width-changer-li">1320</li>
    </ul>
    <div class="sg-header-0001__index-wrap js-sg-header-0001__index-wrap">
      <span class="sg-header-0001__index-heading">index</span>
      <ul class="sg-header-0001__index-ul sg-header-0001__index-ul--is-visible">
<?php
foreach ($obj['color_list'] as $value) {
?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $value['heading'] ?>">
            <?php echo $value['heading'] ?>
          </a>
        </li>
<?php
}
?>

<?php
foreach ($obj['dir_list'] as $key => $dir_name) {
?>
  <?php
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はページ内リンクは不要なのでcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  ?>
        <li class="sg-header-0001__index-li">
          <a class="sg-header-0001__index-anc" href="#<?php echo $dir_name; ?>">
            <?php echo $dir_name; ?>
          </a>
        </li>
<?php
}
?>
      </ul>
    </div>
  </div>
</header>



<?php foreach ($obj['color_list'] as $value) { ?>
<div class="sg-color-table" id="<?php echo $value['heading'] ?>">
  <div class="sg-color-table__first-wrap">
    <span class="sg-color-table__table-heading-wrap">
      <div class="sg-heading-0001">
        <h2 class="sg-heading-0001__h-elm">
          <?php echo $value['heading'] ?>
        </h2>
      </div>
    </span>
    <ul class="sg-color-table__table">
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-th">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-th">
          変数名
        </div>
        <div class="sg-color-table__color-code-th">
          色コード
        </div>
        <div class="sg-color-table__desc-th">
          説明
        </div>
      </li>
  <?php foreach ($value['color'] as $row) { ?>
      <li class="sg-color-table__tr">
        <div class="sg-color-table__display-td" style="background-color:<?php echo $row['color_code']; ?>;">
          &nbsp;
        </div>
        <div class="sg-color-table__variable-name-td">
          <?php echo $row['var_name']; ?>
        </div>
        <div class="sg-color-table__color-code-td">
          <?php echo $row['color_code']; ?>
        </div>
        <div class="sg-color-table__desc-td">
          <?php echo $row['desc']; ?>
        </div>
      </li>
  <?php } ?>
    </ul>
  </div>
</div>
<?php } ?>



<?php
// テーブルを描画
foreach ($obj['dir_list'] as $key => $dir_name) {
  // ディレクトリだけ存在して、中にtable.ctpが存在しない場合はエラー回避のためにcontinue
  if ($obj['exist_table_ctp'][$dir_name] === FALSE) {
    continue;
  }
  // table.ctpを読み込み
  echo $this->element('StyleguideTables/' . $dir_name . '/table',
    array(
      'obj' => $obj,
      'dir_name' => $dir_name
    )
  );
}
?>
