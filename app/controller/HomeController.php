<?php

/**
* \HomeController
*/
class HomeController extends BaseController
{
  public function home()
  {
  	Rediss::set('key','123',5,'s');

    echo Rediss::get('key');
  }
}