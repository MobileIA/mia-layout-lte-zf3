<?php

namespace MIALayoutLTE\View\Helper;

/**
 * Description of LayoutLte
 *
 * @author matiascamiletti
 */
class LayoutLte extends \Zend\View\Helper\AbstractHelper
{
    /**
     *
     * @var string
     */
    public $title = '';
    /**
     *
     * @var string
     */
    public $titlePartOne = '';
    /**
     *
     * @var string
     */
    public $titlePartTwo = '';
    /**
     * Constructor que recibe los parametros
     * @param array $params
     */
    public function __construct($params)
    {
        $this->configure($params);
    }
    
    /**
     * 
     * @return LayoutLte
     */
    public function __invoke()
    {
        return $this;
    }
    /**
     * Se encarga de configurar los parametros
     * @param array $params
     */
    protected function configure($params)
    {
        if(array_key_exists('title', $params)){
            $this->title = $params['title'];
        }
        if(array_key_exists('title_part_one', $params)){
            $this->titlePartOne = $params['title_part_one'];
        }
        if(array_key_exists('title_part_two', $params)){
            $this->titlePartTwo = $params['title_part_two'];
        }
    }
}