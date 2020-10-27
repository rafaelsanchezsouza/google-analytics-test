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

include(__BASE_PATH__ . '/extensoes/pr_snas/1.0/classes/DaoPrazoDemanda.php');

if ($_POST) {

    try {

        $out = array();

        switch ($_POST['acao']) {
            case 'carregar-resposta':
                $sq_prazo = $_POST['id'];
                /* TMP */
                $out['resposta'] = DaoPrazoDemanda::getPrazo($sq_prazo, "TX_RESPOSTA");
                $out['resposta'] = $out['resposta'];
                $out['success'] = 'true';

                break;

            case 'carregar-solicitacao':
                $sq_prazo = $_POST['id'];
                /* TMP */
                $out['solicitacao'] = DaoPrazoDemanda::getPrazo($sq_prazo, "TX_SOLICITACAO");
                $out['solicitacao'] = $out['solicitacao'];
                $out['success'] = 'true';

                break;

            case 'cadastrar':
                try {
                    $prazo = new Prazo($_POST);
                    $out = DaoPrazoDemanda::salvarPrazo($prazo)->toArray();
                } catch (Exception $e) {
                    $out = array('success' => 'false', 'error' => $e->getMessage());
                }

                break;

            case 'pesquisar':
                unset($_SESSION['PESQUISAR_PRAZOS']);

                foreach ($_POST as $key => $value) {
                    if ($key != 'acao' && $value != '' && $key != 'dt_prazo' && $key != 'dt_resposta' && $key != 'tp_periodo' && $key != 'tp_pesquisa') {
                        $_SESSION['PESQUISAR_PRAZOS'][$key] = $value;
                    } else {
                        if ($value != '') {
                            $_SESSION['PESQUISAR_PRAZOS_QUERY_PERIODO'][$key] = $value;
                        }
                    }
                }
                $out = array('success' => 'true');
                break;

            case 'salvar-resposta':
                try {
                    $prazo = new Prazo($_POST);
                    $out = DaoPrazoDemanda::responderPrazo($prazo)->toArray();
                } catch (Exception $e) {
                    $out = array('success' => 'false', 'error' => $e->getMessage());
                }

                break;

            default:
                $out = array('success' => 'false', 'error' => 'Opcao Invalida!');
                break;
        }

        print(json_encode($out));
    } catch (Exception $e) {
        $erro = new Output(array('success' => 'false', 'error' => $e->getMessage()));
        print(json_encode($erro->toArray()));
    }
}