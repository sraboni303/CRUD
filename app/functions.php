<?php

  // Validation Function:
  function validation_notice($msg, $type){
    return '<p class="alert alert-'.$type.'">'.$msg.' <button class="close" data-dismiss="alert"> &times; </button> </p>';
  }


?>