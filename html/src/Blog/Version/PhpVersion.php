<?php
namespace Blog\Version;

class PhpVersion
{
 public function ver()
 {
     return phpinfo();
 }
}