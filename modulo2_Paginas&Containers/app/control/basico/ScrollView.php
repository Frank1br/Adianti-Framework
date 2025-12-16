<?php

class ScrollView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        // Container adaptado ao tema
        $container = new TElement('div');
        $container->style = 'padding: 20px;';

        // Título
        $title = new TLabel('Lista de Itens', '#333', 20, 'b');
        $title->style = 'display: block; margin-bottom: 20px;';

        // Área de scroll
        $scroll = new TScroll;
        $scroll->setSize('100%', 450);

        // Container para os itens
        $itemsContainer = new TElement('div');
        $itemsContainer->style = 'padding: 10px;';

        // Lista de itens
        for ($i = 1; $i <= 15; $i++) {
            $item = new TElement('div');
            $item->class = 'card';
            $item->style = 'padding: 15px; margin-bottom: 10px; background: white; border: 1px solid #ddd; border-radius: 4px; transition: box-shadow 0.2s;';
            $item->{'onmouseover'} = "this.style.boxShadow='0 2px 8px rgba(0,0,0,0.1)';";
            $item->{'onmouseout'} = "this.style.boxShadow='none';";

            $itemTitle = new TLabel("Item $i", '#333', 14, 'b');
            $itemTitle->style = 'display: block; margin-bottom: 5px;';

            $itemDesc = new TElement('span');
            $itemDesc->style = 'color: #666; font-size: 13px;';
            $itemDesc->add('Descrição simples do item');

            $item->add($itemTitle);
            $item->add($itemDesc);

            $itemsContainer->add($item);
        }

        $scroll->add($itemsContainer);

        $container->add($title);
        $container->add($scroll);

        $this->add($container);
    }
}