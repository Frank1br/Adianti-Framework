<?php

class InformationView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        // info, error, question, warning
        new TMessage('warning', 'Esta é uma página de informação.');
       parent::add(new TXMLBreadCrumb('menu.xml', __CLASS__));
    }

}