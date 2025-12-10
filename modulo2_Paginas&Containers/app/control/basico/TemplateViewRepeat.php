<?php

class TemplateViewRepeat extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try 
        {
            $html = new THtmlRenderer('app/resources/template-cargo-repeat.html');

            $replaces = [];
            $replaces[] = ['ID' => 1, 'nome' => 'Frank', 'cargo' => 'Desenvolvedor Adianti'];
            $replaces[] = ['ID' => 2, 'nome' => 'Ana', 'cargo' => 'Analista de Sistemas'];
            $replaces[] = ['ID' => 3, 'nome' => 'Joyce', 'cargo' => 'Tech lead'];
            $replaces[] = ['ID' => 4, 'nome' => 'Leandro', 'cargo' => 'CTO'];
            $html->enableSection('main', []);
            $html->enableSection('details', $replaces, true);

            $vbox = new TVBox;
            $vbox->style = 'width: 100%';
            $vbox->add(new TXMLBreadCrumb('menu.xml', __CLASS__));
            $vbox->add($html);

            parent::add($vbox);

        }
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}