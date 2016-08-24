<?php
$modifier_desc = <<<EOT
//---説明文を書くところ(ここから)


説明文 説明文 説明文 説明文 説明文 説明文 説明文。<br>
説明文 説明文 説明文。


//---説明文を書くところ(ここまで)
EOT;
$display_sample = <<<EOT
//---表示サンプルとコピペ用コードのHTML(ここから)


<p style="background:#ffdddd; font-size: 32px;">表示サンプル</p>


//---表示サンプルとコピペ用コードのHTML(ここまで)
EOT;
?>










<?php
$modifier_desc = str_replace('//---説明文を書くところ(ここから)', '', $modifier_desc);
$modifier_desc = str_replace('//---説明文を書くところ(ここまで)', '', $modifier_desc);
$modifier_desc = trim($modifier_desc);
$display_sample = str_replace('//---表示サンプルとコピペ用コードのHTML(ここから)', '', $display_sample);
$display_sample = str_replace('//---表示サンプルとコピペ用コードのHTML(ここまで)', '', $display_sample);
$display_sample = trim($display_sample);
$copy_paste_code = h($display_sample);
echo $this->SgTable0001->createTr();
echo $this->SgTable0001->descCell();
echo $modifier_desc;
echo $this->SgTable0001->displayCell();
echo $display_sample;
echo $this->SgTable0001->sampleCodeCell();
echo $copy_paste_code;
echo $this->SgTable0001->endTr();
?>
