<?php

class EmbeddedPDFview extends TPage
{
    public function __construct()
    {
        parent::__construct();

        $object = new TElement('iframe');
        $object->style = 'width: 100%; height: 600px;'; 
        $object->src = 'https://signapis.com/pdf/dummy.pdf  ';
        $object->type = 'application/pdf';

        parent::add($object); 
    }
}