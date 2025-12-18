<?php

class DialogInputView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $form = new BootstrapFormBuilder('input_form');
        
        $login = new TEntry('login');
        $pass = new TEntry('pass');
        
        $form->addFields([new TLabel('Login')], [$login]);
        $form->addFields([new TLabel('Senha')], [$pass]);
        
        $form->addAction('Confirmar', new TAction([__CLASS__, 'onConfirm']), 'fa:save green');
        
        new TInputDialog('titulo', $form);
    }
    
    public static function onConfirm($param)
    {
        new TMessage('info', 'Login: ' . $param['login'] . ' - Senha: ' . $param['pass']);
    }
}