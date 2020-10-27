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

if ($_POST) {

    try {

        switch ($_POST['acao']) {

            case 'listar-todos':
                $tratamentoVocativo = DaoTratamentoVocativo::listTratamentoVocativo();

                $dados = array_map('trataJson', $tratamentoVocativo->resultado);

                $out = array('success' => 'true', 'dados' => $dados);
                break;
            default:
                $out = array('success' => 'false', 'error' => 'Ocorreu um erro na operação desejada!');
                break;
        }

        print(json_encode($out));
    } catch (Exception $e) {
        
    }
}

function trataJson($dados) {
    foreach ($dados as $key => $value) {
        $dados[$key] = $value;
    }
    return $dados;
}