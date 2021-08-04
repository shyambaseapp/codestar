<?php

if (!defined('ABSPATH')) {
    die;
  }
function is_text3($a)
{
  $data = strlen($a);
  if($data>=3)
  {
    return $a;
  }
}