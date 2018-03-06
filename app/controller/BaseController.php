<?php

/**

* \BaseController

*/

class BaseController

{

  protected $view;

  protected $mail;

  

  public function __construct()

  {

  }

  public function __destruct()

  {

    $view = $this->view;

    if ( $view instanceof View ) {

      extract($view->data);

      require $view->view;

    }
    $mail = $this->mail;
    // print_r($mail);die;
    if ( $mail instanceof Mail ) {

      $mailer = new Nette\Mail\SmtpMailer($mail->config);

      $mailer->send($mail);

    }


  }

}