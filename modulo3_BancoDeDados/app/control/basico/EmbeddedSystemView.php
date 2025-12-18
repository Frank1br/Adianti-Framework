<?php

class EmbeddedSystemView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->style = 'width: 100%; height: 600px;'; 
        $object->src = 'https://ead.adianti.com.br/framework7/index.php?class=ContentRenderer&method=onShow&source=aHR0cHM6Ly9wbGF5ZXIudmltZW8uY29tL3ZpZGVvLzM3NTc1NjIxNA==&title=2.9%20Conte%C3%BAdo%20embarcado%20(07:40)';
        $object->frameborder = '0';
        


        parent::add($object); 
    }
}