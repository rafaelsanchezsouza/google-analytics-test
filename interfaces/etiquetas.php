<?php

/*
 * Copyright 2008 ICMBio
 * Este arquivo é parte do programa SISICMBio
 * O SISICMBio é um software livre; você pode redistribuíção e/ou modifição dentro dos termos
 * da Licença Pública Geral GNU como publicada pela Fundação do Software Livre (FSF); na versão
 * 2 da Licença.
 *
 * Este programa é distribuíção na esperança que possa ser útil, mas SEM NENHUMA GARANTIA; sem
 * uma garantia implícita de ADEQUAÇÃO a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU/GPL em português para maiores detalhes.
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU, sob o título "LICENCA.txt",
 * junto com este programa, se não, acesse o Portal do Software Público Brasileiro no endereço
 * www.softwarepublico.gov.br ou escreva para a Fundação do Software Livre(FSF)
 * Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301, USA
 * */

require "bibliotecas/fpdf/fpdf.php";
require "bibliotecas/barcode/code128.php";

$lote = NULL;
$idUnidade = NULL;

if (isset($_REQUEST['unidade'])) {
    $idUnidade = $_REQUEST['unidade'];
} else {
    $idUnidade = Controlador::getInstance()->usuario->ID_UNIDADE;
}

if (isset($_REQUEST['lote'])) {
    $lote = $_REQUEST['lote'];
}

$etiquetas = new Etiqueta();
$etiquetas->gerarEtiquetas($idUnidade, $lote);