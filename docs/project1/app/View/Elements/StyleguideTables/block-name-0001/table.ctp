<?php
  echo $this->SgTable0001->createSection(array('is_deprecated'=>TRUE, 'heading_text'=>$dir_name));
?>

ここにblockの説明文を書いてください。





<?php
echo $this->SgTable0001->createTable();
foreach ($obj['tr_list'][$dir_name] as $key => $value) {
  $file_name = str_replace('.ctp', '', $value);
  echo $this->element('StyleguideTables/' . $dir_name . '/TableRows/' . $file_name);
}
echo $this->SgTable0001->endSection();
?>
