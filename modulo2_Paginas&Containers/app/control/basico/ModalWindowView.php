<?php

class ModalWindowView extends TWindow
{
    public function __construct()
    {
        parent::__construct();
        parent::setSize(0.6, null);
        parent::removePadding();
        parent::removeTitleBar();
        parent::disableEscape();

        $html = new THtmlRenderer('app/resources/modal.html');

        $replace = [];
        $replace['title']  = 'Minha pagina criada com Template';
        $replace['body']   = 'Conteudo da minha pagina criada com Template';
        $replace['footer'] = 'Rodape da minha pagina criada com Template';

        $html->enableSection('main', $replace);

        parent::add($html);
    }
}