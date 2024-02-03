<?php
require 'vendor/autoload.php';
// Dompdf namespace
use Dompdf\Dompdf;
// dompdf class
$dompdf = new Dompdf();
// html que será transformado em PDF
$id_produ = filter_input(INPUT_GET, "id_produ", FILTER_SANITIZE_NUMBER_INT);

include_once("conexao.php");
$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$usuario = mysqli_real_escape_string($conn, $_POST['email']);
$qtd = $_POST['qtd'];


$result_venda = "SELECT * FROM cliente  WHERE email = '$usuario' LIMIT 1";
$resultado_venda = mysqli_query($conn, $result_venda);
$row_venda = mysqli_fetch_assoc($resultado_venda);

$result_venda2 = "SELECT * FROM produto where id_produ = $id_produ";
$resultado_venda2 = mysqli_query($conn, $result_venda2);
$row_venda2 = mysqli_fetch_assoc($resultado_venda2);



	$html = '<title> Boleto </title>';	
	$html = '<table border=1 style="width:100%;" ';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Código</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>CPF</th>';
	$html .= '<th>E-mail</th>';
$html .= '<th>Estado</th>';
$html .= '<th>Cidade</th>';
$html .= '<th>Rua</th>';
$html .= '<th>Número</th>';

	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

$html .= '<tr><td>' . $row_venda['codigo'] . "</td>";
	$html .= '<td>' . $row_venda['nome'] . "</td>";
	$html .= '<td>' . $row_venda['cpf'] . "</td>";
$html .= '<td>' . $row_venda['email'] . "</td>";
$html .= '<td>' . $row_venda['estado'] . "</td>";
$html .= '<td>' . $row_venda['cidade'] . "</td>";
$html .= '<td>' . $row_venda['rua'] . "</td>";
$html .= '<td>' . $row_venda['numero'] . "</td>";


		
			$html .= '</tbody>';


	$html .= '<thead>';
	$html .= '<tr>';

	$html .= '<th>Código</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Estoque</th>';
	$html .= '<th>Descrição</th>';
	$html .= '<th>Quantidade</th>';
	$html .= '<th>Preço Unitário</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';

 $html .= '<tr><td>' . $row_venda2['id_produ'] . "</td>";
$html .= '<td>' . $row_venda2['nm_produ'] . "</td>";
		$html .= '<td>' . $row_venda2['estoque'] . "</td>";
		$html .= '<td>' . $row_venda2['descricao'] . "</td>";
		$html .= '<td>' . $qtd . "</td>";
		$html .= '<td>' . $row_venda2['preco'] . ",00</td>";
	$html .= '</tbody>';

$html .= '<thead>';
$html .= '<tr>';
	$html .= '<th>Total a pagar</th>';
	$html .= '</thead>';
	$html .= '<tbody>';

$html .= '<tr><td>' . $row_venda2['preco'] * $qtd . ",00</td>";
	$html .= '</tbody>';
	
	
	// Carrega seu HTML
	$htmlContent = ' <img src="banco.jpg" height=70px> <b><font size=32px>Banco | 230-1 | </font><font size=17px> 31245.11103 70000.003100 01000.000034 0 45670000000</font></b>' . $html;
$dompdf->loadHtml($htmlContent);
// (Opcional) Tipo do papel e orientação
$dompdf->setPaper('A4');
// Render HTML para PDF
$dompdf->render();
// Download do arquivo
$dompdf->stream("boleto", 
array(
    "Attachment" => false //Para realizar o download somente alterar para true


));
?>