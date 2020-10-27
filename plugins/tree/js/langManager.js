/*
 * Copyright 2008 ICMBio
 * Este arquivo � parte do programa SISICMBio
 * O SISICMBio � um software livre; voc� pode redistribu���o e/ou modifi��o dentro dos termos
 * da Licen�a P�blica Geral GNU como publicada pela Funda��o do Software Livre (FSF); na vers�o
 * 2 da Licen�a.
 *
 * Este programa � distribu���o na esperan�a que possa ser �til, mas SEM NENHUMA GARANTIA; sem
 * uma garantia impl�cita de ADEQUA��O a qualquer MERCADO ou APLICA��O EM PARTICULAR. Veja a
 * Licen�a P�blica Geral GNU/GPL em portugu�s para maiores detalhes.
 * Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral GNU, sob o t�tulo "LICENCA.txt",
 * junto com este programa, se n�o, acesse o Portal do Software P�blico Brasileiro no endere�o
 * www.softwarepublico.gov.br ou escreva para a Funda��o do Software Livre(FSF)
 * Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301, USA
 * */

function languageManager() {
    this.lang = "pt-Br";
		
    this.load = function(lang) {
        this.lang = lang
        this.url = location.href.substring(0, location.href.lastIndexOf('interfaces/'));
        document.write("<script language='javascript' src='"+this.url+"/plugins/tree/js/langs/"+this.lang+".js'></script>");
    }
	
    this.addIndexes= function() {
        for (var n in arguments[0]) {
            this[n] = arguments[0][n];
        }
    }
}