<?php
//============================================================+
// File name   : f11_back_frame.php
// Version     : 1.0.0
// Begin       : 2018-09-16
// Last Update : 2018-09-16
// Author      : Radu Dragan - fotodex.ro - radu.dragan@fotodex.ro
// License     : BY-NC-SA 4.0
// -------------------------------------------------------------------
// Copyright (C) 2018 Radu Dragan - fotodex.ro

function f11_open_json($szData){
  $arruTemp = json_decode(file_get_contents("{$data}.json"), true);
  return $arruTemp;
}

?>
