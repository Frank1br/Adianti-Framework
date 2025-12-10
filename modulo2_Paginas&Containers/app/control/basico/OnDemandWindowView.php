<?php

class OnDemandWindowView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $window = TWindow::create('Titulo Janela', 800, 400);

        $html = new THtmlRenderer('app/resources/page.html');

        $replace = [];
        $replace['title']  = 'Minha pagina criada com Template';
        $replace['body']   = 'Conteudo da minha pagina criada com Template';
        $replace['footer'] = 'Rodape da minha pagina criada com Template';

        $html->enableSection('main', $replace);
        $window->add($html);
        $window->show();
    }
}