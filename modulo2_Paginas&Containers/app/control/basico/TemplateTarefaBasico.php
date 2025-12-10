<?php

class TemplateTarefaBasico extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try
        {
            $html = new THtmlRenderer('app/resources/templateTarefas.html');

            $itemTarefa = new stdClass; 
            $itemTarefa->tituloTarefa = 'Revisar Modulo 1 - Adianti Framework';
            $itemTarefa->descTarefa = 'Revisar Modulo 1 - Fundamentos Basicos do curso Adianti Framework e aplicar os conhecimentos';
            $itemTarefa->duracaoTarefa = 'duração: 2h';

            $replaces = [];
            $replaces['tituloTarefa'] = $itemTarefa->tituloTarefa;
            $replaces['descTarefa'] = $itemTarefa->descTarefa;
            $replaces['duracaoTarefa'] = $itemTarefa->duracaoTarefa;
            $html->enableSection('tarefa1', $replaces);

            $itemTarefa2 = new stdClass; 
            $itemTarefa2->tituloTarefa = 'Revisar Modulo 2 do curso Adianti Framework';
            $itemTarefa2->descTarefa = 'Revisar Modulo 2 - Paginas e Containers do curso Adianti Framework e aplicar os conhecimentos';
            $itemTarefa2->duracaoTarefa = 'duração: 2h30';

            $replaces2 = [];
            $replaces2['tituloTarefa'] = $itemTarefa2->tituloTarefa;
            $replaces2['descTarefa'] = $itemTarefa2->descTarefa;
            $replaces2['duracaoTarefa'] = $itemTarefa2->duracaoTarefa;
            $html->enableSection('tarefa2', $replaces2);
            
            $itemTarefa3 = new stdClass; 
            $itemTarefa3->tituloTarefa = 'Revisar Modulo 3 do curso Adianti Framework';
            $itemTarefa3->descTarefa = 'Revisar Modulo 3 - Banco de dados do curso Adianti Framework e aplicar os conhecimentos';
            $itemTarefa3->duracaoTarefa = 'duração: 2h40';

            $replaces3 = [];
            $replaces3['tituloTarefa'] = $itemTarefa3->tituloTarefa;
            $replaces3['descTarefa'] = $itemTarefa3->descTarefa;
            $replaces3['duracaoTarefa'] = $itemTarefa3->duracaoTarefa;
            $html->enableSection('tarefa3', $replaces3);

            $html->enableSection('main');
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