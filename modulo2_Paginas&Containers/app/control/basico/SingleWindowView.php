<?php

class SingleWindowView extends TWindow
{
    public function __construct()
    {
        parent::__construct();
        parent::setTitle('Titulo Janela');
        parent::setSize(800, 400);
        parent::removePadding();
        
       
        $html = new THtmlRenderer('app/resources/page.html');

        $replace = [];
        $replace['title']  = 'Minha pagina criada com Template';
        $replace['body']   = 'Conteudo da minha pagina criada com Template';
        $replace['footer'] = 'Rodape da minha pagina criada com Template';

        $html->enableSection('main', $replace);

        parent::add($html);

        
    }
}