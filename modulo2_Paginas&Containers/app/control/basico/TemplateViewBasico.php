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

            $repacles = [''];
            $repacles['Titulo'] = $anuncioItem->Titulo;
            $repacles['textoPrincipal'] = $anuncioItem->textoPrincipal;
            // $repacles['TextoSecundario'] = $anuncioItem->TextoSecundario;
            
            $repacles['anuncio'] = $anuncioItem;
            $html->enableSection('main', $repacles);

            parent::add($html);
        } 
        catch (Exception $e)
        {
            new TMessage('error', $e->getMessage());
        }
        
    }
}