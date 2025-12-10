<?php

class TemplateViewMask extends TPage
{
    public function __construct()
    {
        parent::__construct();

        try 
        {
            $html = new THtmlRenderer('app/resources/template_view_mask.html');

            $replaces = [];
            $replaces['date'] = date('d/m/Y');
            $replaces['datetime'] = date('m/d/Y H:i:s');
            $replaces['number'] = number_format(1234.56, 2, ',', '.');
            $replaces['value1'] = 'Valor 1';
            $replaces['value2'] = 'Valor 2';
            $replaces['value3'] = 'Valor 3';

            $html->enableSection('main', $replaces);

            parent::add($html);

        }
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}