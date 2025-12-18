<?php

class DialogsView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $container = new TElement('div');
        $container->style = 'padding: 30px; max-width: 600px; margin: 0 auto;';

        $title = new TLabel('Exemplos de Diálogos', '#333', 24, 'b');
        $title->style = 'display: block; margin-bottom: 30px;';

        // Botão Info Dialog
        $btnInfo = new TButton('btnInfo');
        $btnInfo->setLabel('Exibir Info');
        $btnInfo->setImage('fas:info-circle blue');
        $btnInfo->class = 'btn btn-info';
        $btnInfo->style = 'margin: 10px; padding: 12px 24px;';
        $btnInfo->addFunction("new TMessage('info', 'Esta é uma mensagem informativa.')");

        // Botão Success Dialog
        $btnSuccess = new TButton('btnSuccess');
        $btnSuccess->setLabel('Exibir Sucesso');
        $btnSuccess->setImage('fas:check-circle white');
        $btnSuccess->class = 'btn btn-success';
        $btnSuccess->style = 'margin: 10px; padding: 12px 24px;';
        $btnSuccess->addFunction("new TMessage('info', 'Operação realizada com sucesso!', null, 'Sucesso')");

        // Botão Warning Dialog
        $btnWarning = new TButton('btnWarning');
        $btnWarning->setLabel('Exibir Aviso');
        $btnWarning->setImage('fas:exclamation-triangle white');
        $btnWarning->class = 'btn btn-warning';
        $btnWarning->style = 'margin: 10px; padding: 12px 24px;';
        $btnWarning->addFunction("new TMessage('warning', 'Atenção! Verifique os dados antes de continuar.')");

        // Botão Error Dialog
        $btnError = new TButton('btnError');
        $btnError->setLabel('Exibir Erro');
        $btnError->setImage('fas:times-circle white');
        $btnError->class = 'btn btn-danger';
        $btnError->style = 'margin: 10px; padding: 12px 24px;';
        $btnError->addFunction("new TMessage('error', 'Ocorreu um erro ao processar a requisição.')");

        // Botão Question Dialog
        $btnQuestion = new TButton('btnQuestion');
        $btnQuestion->setLabel('Exibir Pergunta');
        $btnQuestion->setImage('fas:question-circle white');
        $btnQuestion->class = 'btn btn-primary';
        $btnQuestion->style = 'margin: 10px; padding: 12px 24px;';
        $btnQuestion->addFunction("new TQuestion('Deseja realmente continuar com esta ação?', new TAction(['DialogsView', 'onConfirm']))");

        $container->add($title);
        $container->add($btnInfo);
        $container->add($btnSuccess);
        $container->add($btnWarning);
        $container->add($btnError);
        $container->add($btnQuestion);

        $this->add($container);
    }

    public static function onConfirm($param)
    {
        new TMessage('info', 'Ação confirmada!');
    }
}