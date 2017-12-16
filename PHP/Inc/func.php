<?php
$_ind = isset($ind) ? $ind ? '../' : './' : './';

//inc File
function _inc($file) { 
  include $_ind . 'PHP/Inc/' . $file . '.php';
}
