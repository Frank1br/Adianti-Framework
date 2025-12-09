<?php
class TemplateViewBasico extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        try
        {
            $html = new THtmlRenderer('app/resources/template-basico.html');

            $anuncioItem = new stdClass;
            $anuncioItem->Titulo = 'Honda Fit';
            $anuncioItem->textoPrincipal = 'Carro compacto, econômico e versátil';
            $anuncioItem->TextoSecundario = 'Anúncio publicado em 10/10/2025';

            $replaces = [];  
            $replaces['Titulo'] = $anuncioItem->Titulo;
            $replaces['textoPrincipal'] = $anuncioItem->textoPrincipal;
            
            $replaces['anuncio'] = $anuncioItem;
            $html->enableSection('main', $replaces);  


            $replaces2 = [];
            $replaces2['Titulo'] = 'Toyota Corolla';
            $replaces2['textoPrincipal'] = 'Sedan confortável, espaçoso e eficiente';
            $replaces2['TextoSecundario'] = 'Anúncio publicado em 15/11/2025';
            
            $html->enableSection('outros', $replaces2);

            parent::add($html);
        } 
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
    }
}