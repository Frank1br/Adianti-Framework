<?php

class SidePageView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        parent::setTargetContainer('adianti_right_panel');

        $html = new THtmlRenderer('app/resources/side.html');

        $replace = [];
        $replace['title']  = 'Minha pagina criada com Template';
        $replace['body']   = 'Conteudo da minha pagina criada com Template';
        $replace['footer'] = 'Rodape da minha pagina criada com Template';

        $html->enableSection('main', $replace);
        parent::add($html); // <- ADICIONAR ESTA LINHA
    }

    public static function onCloseSidePage() 
    {
        TScript::create("Template.closeRightPanel()");
    }
}