<?php

class QuestionView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        new TXMLBreadCrumb('menu.xml', __CLASS__);

        $actionYes = new TAction([__CLASS__, 'onYes']);
        $actionYes->setParameter('nome', 'Usuario logado');

        $actionNo = new TAction([__CLASS__, 'onNo']);
        $actionNo->setParameter('nome', 'Usuario logado');
        
        new TQuestion('Você tem certeza que deseja continuar?', $actionYes, $actionNo);
    }

    public static function onYes($param)
    {
        new TMessage('info', 'Você clicou em SIM, ' . $param['nome']);
    }

    public static function onNo($param)
    {
        new TMessage('info', 'Você clicou em NÃO, ' . $param['nome']);
    }
}