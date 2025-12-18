<?php

class VBoxView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $notebook1 = new TNotebook;
        $notebook2 = new TNotebook;

        $notebook1->appendPage('Aba 1', new TLabel('Conteúdo da Aba 1 do Notebook 1'));
        $notebook1->appendPage('Aba 2', new TLabel('Conteúdo da Aba 2 do Notebook 1'));

        $notebook2->appendPage('Aba A', new TLabel('Conteúdo da Aba A do Notebook 2'));
        $notebook2->appendPage('Aba B', new TLabel('Conteúdo da Aba B do Notebook 2'));

        $vbox = new TVBox;
        $vbox->style = 'width: 100%';
        $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__)) ;
        $vbox->add($notebook1);
        $vbox->add($notebook2);
        parent::add($vbox);
    }
}