<?php

class BoxesView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $container = new TElement('div');
        $container->style = 'padding: 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;';

        // Box 1 - Info
        $box1 = new TElement('div');
        $box1->class = 'card';
        $box1->style = 'padding: 20px; border-left: 4px solid #3498db;';
        
        $icon1 = new TElement('i');
        $icon1->class = 'fas fa-info-circle';
        $icon1->style = 'color: #3498db; font-size: 24px; margin-bottom: 10px;';
        
        $title1 = new TLabel('Informação', '#333', 16, 'b');
        $title1->style = 'display: block; margin-bottom: 8px;';
        
        $desc1 = new TElement('p');
        $desc1->style = 'color: #666; font-size: 14px; margin: 0;';
        $desc1->add('Este é um box informativo com ícone e descrição.');
        
        $box1->add($icon1);
        $box1->add($title1);
        $box1->add($desc1);

        // Box 2 - Success
        $box2 = new TElement('div');
        $box2->class = 'card';
        $box2->style = 'padding: 20px; border-left: 4px solid #2ecc71;';
        
        $icon2 = new TElement('i');
        $icon2->class = 'fas fa-check-circle';
        $icon2->style = 'color: #2ecc71; font-size: 24px; margin-bottom: 10px;';
        
        $title2 = new TLabel('Sucesso', '#333', 16, 'b');
        $title2->style = 'display: block; margin-bottom: 8px;';
        
        $desc2 = new TElement('p');
        $desc2->style = 'color: #666; font-size: 14px; margin: 0;';
        $desc2->add('Operação realizada com sucesso!');
        
        $box2->add($icon2);
        $box2->add($title2);
        $box2->add($desc2);

        // Box 3 - Warning
        $box3 = new TElement('div');
        $box3->class = 'card';
        $box3->style = 'padding: 20px; border-left: 4px solid #f39c12;';
        
        $icon3 = new TElement('i');
        $icon3->class = 'fas fa-exclamation-triangle';
        $icon3->style = 'color: #f39c12; font-size: 24px; margin-bottom: 10px;';
        
        $title3 = new TLabel('Atenção', '#333', 16, 'b');
        $title3->style = 'display: block; margin-bottom: 8px;';
        
        $desc3 = new TElement('p');
        $desc3->style = 'color: #666; font-size: 14px; margin: 0;';
        $desc3->add('Verifique as informações antes de continuar.');
        
        $box3->add($icon3);
        $box3->add($title3);
        $box3->add($desc3);

        // Box 4 - Error
        $box4 = new TElement('div');
        $box4->class = 'card';
        $box4->style = 'padding: 20px; border-left: 4px solid #e74c3c;';
        
        $icon4 = new TElement('i');
        $icon4->class = 'fas fa-times-circle';
        $icon4->style = 'color: #e74c3c; font-size: 24px; margin-bottom: 10px;';
        
        $title4 = new TLabel('Erro', '#333', 16, 'b');
        $title4->style = 'display: block; margin-bottom: 8px;';
        
        $desc4 = new TElement('p');
        $desc4->style = 'color: #666; font-size: 14px; margin: 0;';
        $desc4->add('Ocorreu um erro ao processar a requisição.');
        
        $box4->add($icon4);
        $box4->add($title4);
        $box4->add($desc4);

        $container->add($box1);
        $container->add($box2);
        $container->add($box3);
        $container->add($box4);

        $this->add($container);
    }
}