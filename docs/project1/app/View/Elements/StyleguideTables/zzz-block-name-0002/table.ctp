<?php
//---TRUEまたはFALSEを設定してください。廃止予定のモジュールはTRUEを設定してください。
$is_deprecated = TRUE;



$table_desc = <<<EOT
//---説明文を書くところ(ここから)


説明文 説明文 説明文 説明文。<br>
説明文 説明文


//---説明文を書くところ(ここまで)
EOT;
?>










<?php
$table_desc = str_replace('//---説明文を書くところ(ここから)', '', $table_desc);
$table_desc = str_replace('//---説明文を書くところ(ここまで)', '', $table_desc);
$table_desc = trim($table_desc);
echo $this->SgTable0001->createSection(array('is_deprecated'=>$is_deprecated, 'heading_text'=>$dir_name));
echo $table_desc;
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>
