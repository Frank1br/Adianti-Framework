<?php
class TesteView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        $label = new TLabel('Hello, World! <br>');
        $label->setFontSize(24);
        $label->setFontColor('blue');
        
        $this->add($label);
    }

    public function onEvento(){
        echo "Evento acionado!";
    }

    public function show()
    {
        parent::show();
        echo "<br> Página exibida com sucesso!";
    }

    public static function staticMethod()
    {
        echo "Este é um método estático.";
    }

}