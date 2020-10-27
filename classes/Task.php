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

class Task
{

    /**
     * @var integer
     */
    public $id = 0;

    /**
     * @var string
     */
    public $name = 0;

    /**
     * @var date
     */
    public $date = '0000-00-00';

    /**
     * @var integer
     */
    public $duration = 0;

    /**
     * @var integer
     */
    public $percent = 0;

    /**
     * @var integer
     */
    public $parent = '';

    /**
     * @var array
     */
    public $tasks = array();

    /**
     * @return void
     */
    private function __construct ($id, $name, $date, $duration, $percent, $parent = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->date = $date;
        $this->duration = $duration;
        $this->percent = $percent;
        $this->parent = $parent;
    }

    /**
     * @return Task
     */
    public static function factory ($id, $name, $date, $duration, $percent, $parent = '')
    {
        return new self($id, $name, $date, $duration, $percent, $parent);
    }

    /**
     * @return Task
     */
    public function addTask (Task $task)
    {
        $this->tasks[$task->id] = $task;
        return $this;
    }

}