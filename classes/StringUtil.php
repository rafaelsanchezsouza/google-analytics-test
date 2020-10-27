<?php
/**
 * Description of StringUtil
 *
 * @author RAlves
 */
class StringUtil {

    /**
     * Remove caracteres especiais, gerados a partir de cópias realizadas em
     * fontes diversas. (Relatórios, Planilhas, chats e etc)
     * Como resultado, temos uma String sem caracteres especiais, onde cada
     * palavra é separada por somente um espaço.
     * 
     * Remoção de:
     * Padrôes de consulta problemáticos verificados em LOG
     * Caracteres especiais (Tabulações, &...)
     * Espaços Duplos e das Extremidade
     * 
     * @param string $parString
     * @return string
     */
    static function escapeFromGenericSourceCopy($parString = '')
    {
        $strSearchWS = self::escapePersonalizedPatterns( $parString );
        $strSearchWS = self::escapeSpecialChars( $strSearchWS );
        $strSearchWS = self::removeExtraSpaces( $strSearchWS );
        $strSearchWS = self::removeUrls( $strSearchWS );

        return $strSearchWS;
    }
    
    /**
     * Escapa Padrões Personalizados que tenham sido levantados em análise.
     * Outros Padrões encontrados, deverão ser inseridos neste método.
     * 
     * Escapa o padrão HH:MM:SS e DD/MM/AAAA  provavelmente originário de Chat
     * 
     * @param string $parString
     * @return string
     */
    static function escapePersonalizedPatterns($parString = '')
    {
        //HH:MM:SS
        $str = preg_replace('/[0-9]+:[0-9]+:[0-9]+/', '', $parString);
        //DD/MM/AAAA
        $str = preg_replace('/[0-9]+\/[0-9]+\/+[0-9]+/', '', $str);
        
        //Adicionar outros que sejam encontrados aqui...
        
        return $str;        
    }    
    
    /**
     * Escapa Caracteres Especiais, substituindo por espaço
     * Escapa:
     * Tabulação, Vírgula, & (E comercial), Aspas Duplas e Simples, 
     * Parênteses, Colchetes, Hífens, ª, °, ®
     * @param string $parString
     * @return string
     */
    static function escapeSpecialChars($parString = '')
    {
        $specialChars = array(
            '/[\t"\'\,&()\[\]]/',//tab, aspas duplas e simples, vírgula, &, parenteses e colchetes
            '/°/',//grau
            '/º/',//ordinal
            '/ª/',//ordinal
            '/®/',//marca registrada
        );
        return preg_replace( $specialChars, ' ', $parString );
    }
    
    /**
     * Remove Espaços duplos e das Extremidades
     * 
     * @param string $parString
     * @return string
     */
    static function removeExtraSpaces($parString = '')
    {
        //Remove Espaços duplicados
        $str = preg_replace('/\s\s+/', ' ', $parString);
        
        //Remove espaços das extremidades
        $str = trim($str);
        
        return $str;
    }
    
    /**
     * Remove URLs que contém o padrão http:// ou https:// ou ftp://
     * 
     * @param string $parString
     * @return string
     */
    static function removeUrls($parString = '')
    {
        $str = $parString;
        //Remove Espaços duplicados
        $str = preg_replace('/^(http?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', ' ', $str);
        $str = preg_replace('/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', ' ', $str);
        $str = preg_replace('/^(ftp?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/', ' ', $str);
        
        return $str;
    }
    
    /**
     * @deprecated
     * Checa encode da expressão
     * @param type $parString
     * @return type
     */
    static function checkEncode( $parString = '' )
    {
        if( mb_check_encoding($parString, 'ISO-8859-1') ){
            echo ('ISO');
//            $parString = mb_convert_encoding( $parString, 'UTF-8', 'ISO-8859-1' );
        }
        if( mb_check_encoding($parString, 'UTF-8') ){
            echo ('UTF8');
//            $rsConsultaOrgao = mb_convert_encoding( $rsConsultaOrgao, 'UTF-8', 'UTF-16' );
        }
        if( mb_check_encoding($parString, 'UTF-16') ){
            echo ('UTF16');
//            $rsConsultaOrgao = mb_convert_encoding( $rsConsultaOrgao, 'UTF-8', 'UTF-16' );
        }
        if( mb_check_encoding($parString, 'UTF-32') ){
            echo ('UTF32');
//            $rsConsultaOrgao = mb_convert_encoding( $rsConsultaOrgao, 'UTF-8', 'UTF-32' );
        }
//        if( mb_check_encoding($parString, 'CP1252') ){
//            echo ('CP1252');
////            $rsConsultaOrgao = mb_convert_encoding( $rsConsultaOrgao, 'UTF-8', 'CP1252' );
//        }
//        if( mb_check_encoding($parString, 'LATIN1') ){
//            echo ('LATIN1');
////            $rsConsultaOrgao = mb_convert_encoding( $rsConsultaOrgao, 'UTF-8', 'LATIN1' );
//        }
        
        return $parString;
    }
    
}
