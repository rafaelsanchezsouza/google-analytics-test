<?php
/**
 * File for class QualitativoStructObterOrgao
 * @package Qualitativo
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20131207-01
 * @date 2014-01-04
 */
/**
 * This class stands for QualitativoStructObterOrgao originally named obterOrgao
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://testews.siop.gov.br:443/services/WSQualitativo?wsdl}
 * @package Qualitativo
 * @subpackage Structs
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 * @version 20131207-01
 * @date 2014-01-04
 */
class QualitativoStructObterOrgao extends QualitativoWsdlClass
{
	/**
	 * The credencial
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var QualitativoStructCredencialDTO
	 */
	public $credencial;
	/**
	 * The exercicio
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var int
	 */
	public $exercicio;
	/**
	 * The codigoOrgao
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $codigoOrgao;
	/**
	 * The tipoOrgao
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var string
	 */
	public $tipoOrgao;
	/**
	 * The dataHoraReferencia
	 * Meta informations extracted from the WSDL
	 * - minOccurs : 0
	 * @var dateTime
	 */
	public $dataHoraReferencia;
	/**
	 * Constructor method for obterOrgao
	 * @see parent::__construct()
	 * @param QualitativoStructCredencialDTO $_credencial
	 * @param int $_exercicio
	 * @param string $_codigoOrgao
	 * @param string $_tipoOrgao
	 * @param dateTime $_dataHoraReferencia
	 * @return QualitativoStructObterOrgao
	 */
	public function __construct($_credencial = NULL,$_exercicio = NULL,$_codigoOrgao = NULL,$_tipoOrgao = NULL,$_dataHoraReferencia = NULL)
	{
		parent::__construct(array('credencial'=>$_credencial,'exercicio'=>$_exercicio,'codigoOrgao'=>$_codigoOrgao,'tipoOrgao'=>$_tipoOrgao,'dataHoraReferencia'=>$_dataHoraReferencia));
	}
	/**
	 * Get credencial value
	 * @return QualitativoStructCredencialDTO|null
	 */
	public function getCredencial()
	{
		return $this->credencial;
	}
	/**
	 * Set credencial value
	 * @param QualitativoStructCredencialDTO $_credencial the credencial
	 * @return QualitativoStructCredencialDTO
	 */
	public function setCredencial($_credencial)
	{
		return ($this->credencial = $_credencial);
	}
	/**
	 * Get exercicio value
	 * @return int|null
	 */
	public function getExercicio()
	{
		return $this->exercicio;
	}
	/**
	 * Set exercicio value
	 * @param int $_exercicio the exercicio
	 * @return int
	 */
	public function setExercicio($_exercicio)
	{
		return ($this->exercicio = $_exercicio);
	}
	/**
	 * Get codigoOrgao value
	 * @return string|null
	 */
	public function getCodigoOrgao()
	{
		return $this->codigoOrgao;
	}
	/**
	 * Set codigoOrgao value
	 * @param string $_codigoOrgao the codigoOrgao
	 * @return string
	 */
	public function setCodigoOrgao($_codigoOrgao)
	{
		return ($this->codigoOrgao = $_codigoOrgao);
	}
	/**
	 * Get tipoOrgao value
	 * @return string|null
	 */
	public function getTipoOrgao()
	{
		return $this->tipoOrgao;
	}
	/**
	 * Set tipoOrgao value
	 * @param string $_tipoOrgao the tipoOrgao
	 * @return string
	 */
	public function setTipoOrgao($_tipoOrgao)
	{
		return ($this->tipoOrgao = $_tipoOrgao);
	}
	/**
	 * Get dataHoraReferencia value
	 * @return dateTime|null
	 */
	public function getDataHoraReferencia()
	{
		return $this->dataHoraReferencia;
	}
	/**
	 * Set dataHoraReferencia value
	 * @param dateTime $_dataHoraReferencia the dataHoraReferencia
	 * @return dateTime
	 */
	public function setDataHoraReferencia($_dataHoraReferencia)
	{
		return ($this->dataHoraReferencia = $_dataHoraReferencia);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see QualitativoWsdlClass::__set_state()
	 * @uses QualitativoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return QualitativoStructObterOrgao
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>