<?php
//============================================================+
// File name   : f11_back_frame.php
// Version     : 1.0.0
// Begin       : Open CSV file
// Last Update : 2018-09-16
// Author      : Radu Dragan - fotodex.ro - radu.dragan@fotodex.ro
// License     : BY-NC-SA 4.0
// -------------------------------------------------------------------
// Copyright (C) 2018 Radu Dragan - fotodex.ro

function f11_open_json($szData){
  $arruTemp = json_decode(file_get_contents("{$szData}.json"), true);
  return $arruTemp;
}

function f11_open_csv($szData){
  $arruTemp = [
    "Open" => fopen("{$szData}.csv","r"),
    "Out" => []
  ];

  while(! feof($arruTemp["Open"])){
    array_push($arruTemp["Out"], fgetcsv($arruTemp["Open"]));
  }

  fclose($arruTemp["Open"]);

  return $arruTemp["Out"];
}


function f11_dom($szTag, $szData, $arruClass = "", $szId = ""){
  $cObject = (object)[
    'tag' => $szTag,
    'data' => $szData,
    'class' => '',
    'id' => '',
    'out' => ''
  ];

  if ($arruClass){
    if (is_array($arruClass)) {
      $cObject->class = " class='". implode(" ",$arruClass) . "'";
    } else {
      $cObject->class = " class='{$arruClass}'";
    }
  }

  if($szId){
    $cObject->id = " id=\"{$szId}\"";
  }

   $cObject->out = "<{$cObject->tag}{$cObject->id}{$cObject->class}>{$cObject->data}</{$cObject->tag}>";

   return $cObject->out;
}
?>
