<?php

class TableView extends TPage
{
    public function __construct()
    {
        parent::__construct();

        // Container principal com padding
        $container = new TElement('div');
        $container->class = 'container-fluid';
        $container->style = 'padding: 20px;';

        // Card para envolver a tabela
        $card = new TElement('div');
        $card->class = 'card';
        $card->style = 'box-shadow: 0 2px 4px rgba(0,0,0,0.1); border-radius: 8px;';

        // Header do card
        $cardHeader = new TElement('div');
        $cardHeader->class = 'card-header';
        $cardHeader->style = 'background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px; border-radius: 8px 8px 0 0;';
        
        $title = new TLabel('Cadastro de Informações', 'white', 18, 'b');
        $cardHeader->add($title);

        // Body do card
        $cardBody = new TElement('div');
        $cardBody->class = 'card-body';
        $cardBody->style = 'padding: 25px;';

        // Tabela com estilo melhorado
        $table = new TTable;
        $table->border = '0';
        $table->cellpadding = '10';
        $table->style = 'width: 100%; border-collapse: separate; border-spacing: 0 10px;';

        // Campos de entrada com ícones e labels
        $id = new TEntry('id');
        $id->placeholder = 'Digite o código';
        $id->style = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;';
        
        $nome = new TEntry('nome');
        $nome->placeholder = 'Digite o nome completo';
        $nome->style = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;';
        
        $endereco = new TEntry('endereco');
        $endereco->placeholder = 'Digite o endereço';
        $endereco->style = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;';
        
        $fone = new TEntry('fone');
        $fone->placeholder = '(00) 00000-0000';
        $fone->style = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;';
        
        $obs = new TText('obs');
        $obs->placeholder = 'Observações adicionais';
        $obs->style = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; min-height: 80px;';

        // Adicionar linhas com labels estilizados
        $row1 = $table->addRow();
        $labelId = new TLabel('Código:', '#333', 12, 'b');
        $cellLabel1 = $row1->addCell($labelId);
        $cellLabel1->style = 'width: 150px; vertical-align: middle;';
        $cellInput1 = $row1->addCell($id);
        $cellInput1->style = 'padding-left: 15px;';

        $row2 = $table->addRow();
        $labelNome = new TLabel('Nome:', '#333', 12, 'b');
        $cellLabel2 = $row2->addCell($labelNome);
        $cellLabel2->style = 'width: 150px; vertical-align: middle;';
        $cellInput2 = $row2->addCell($nome);
        $cellInput2->style = 'padding-left: 15px;';

        $row3 = $table->addRow();
        $labelEndereco = new TLabel('Endereço:', '#333', 12, 'b');
        $cellLabel3 = $row3->addCell($labelEndereco);
        $cellLabel3->style = 'width: 150px; vertical-align: middle;';
        $cellInput3 = $row3->addCell($endereco);
        $cellInput3->style = 'padding-left: 15px;';

        $row4 = $table->addRow();
        $labelFone = new TLabel('Telefone:', '#333', 12, 'b');
        $cellLabel4 = $row4->addCell($labelFone);
        $cellLabel4->style = 'width: 150px; vertical-align: middle;';
        $cellInput4 = $row4->addCell($fone);
        $cellInput4->style = 'padding-left: 15px;';

        $row5 = $table->addRow();
        $labelObs = new TLabel('Observações:', '#333', 12, 'b');
        $cellLabel5 = $row5->addCell($labelObs);
        $cellLabel5->style = 'width: 150px; vertical-align: top; padding-top: 12px;';
        $cellInput5 = $row5->addCell($obs);
        $cellInput5->style = 'padding-left: 15px;';

        // Botões de ação
        $rowButtons = $table->addRow();
        $cellButtons = $rowButtons->addCell('');
        $cellButtons->colspan = 2;
        $cellButtons->style = 'text-align: right; padding-top: 20px;';

        $btnSalvar = new TButton('btnSalvar');
        $btnSalvar->setLabel('Salvar');
        $btnSalvar->setImage('fas:save white');
        $btnSalvar->class = 'btn btn-success';
        $btnSalvar->style = 'margin-right: 10px; padding: 10px 30px;';

        $btnLimpar = new TButton('btnLimpar');
        $btnLimpar->setLabel('Limpar');
        $btnLimpar->setImage('fas:eraser white');
        $btnLimpar->class = 'btn btn-secondary';
        $btnLimpar->style = 'padding: 10px 30px;';

        $cellButtons->add($btnSalvar);
        $cellButtons->add($btnLimpar);

        // Montar estrutura
        $cardBody->add($table);
        $card->add($cardHeader);
        $card->add($cardBody);
        $container->add($card);

        parent::add($container);
    }
}


// OBS: Pedi para a IA dar uma refatorada na UI

// <?php

// class TableView extends TPage
// {
//     public function __construct()
//     {
//         parent::__construct();

//         $table = new TTable;
//         $table->border = '1';
//         $table->cellpadding = '4';
//         $table->style = 'border-collapse: collapse; width: 100%;';

//         $row = $table->addRow();
//         $row->addCell('A');
//         $row->addCell('B');

//         $title = new TLabel('titulo', 'red', 18);

//         $row = $table->addRow();
//         $cell = $row->addCell( $title );
//         $cell->colspan = 2;
//         $cell->style = 'padding: 10px';

//         $id = new TEntry('id');
//         $nome = new TEntry('nome');
//         $endereco = new TEntry('endereco');
//         $fone = new TEntry('fone');
//         $obs = new TEntry('obs');

//         $table->addRowSet( 'Código', $id );
//         $table->addRowSet( 'Nome', $nome );

//         parent::add( $table );
//     }
// }