<?php

use Acme\Mailers\UserMailer;


class MailersController extends \BaseController {

    protected $userMailer;

    function __construct(UserMailer $userMailer)
    {
        $this->userMailer = $userMailer;
    }

    public function contactUser()
    {
        $data = [
            'body' => Input::get('body'),
            'auth_email' => Input::get('auth_email'),
            'auth_username' => Input::get('auth_username'),
            'receiver_email' => Input::get('receiver_email'),
            'receiver_username' => Input::get('receiver_username')
        ];

        $this->userMailer->contactUser($data);

        Flash::success('Your Message has been Sent!');

        return Redirect::home();
    }
}