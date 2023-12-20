<?php

 $all_pages = scandir('config/');

 $all_files = array_diff($all_pages, ['.', '..']);

 foreach ($all_files as $page) {
  require_once 'config/' . $page;

 }
