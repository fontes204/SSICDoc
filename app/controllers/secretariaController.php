<?php

/**
 * Created by PhpStorm.
 * User: Joao Pereira
 * Date: 15/10/17
 * Time: 15:16
 */
class SecretariaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Index()
    {
        $this->view->render(SCT,1);
    }
}