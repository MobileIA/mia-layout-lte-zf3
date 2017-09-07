<?php

namespace MIALayoutLTE\View\Helper;

/**
 * Description of LayoutLteFactory
 *
 * @author matiascamiletti
 */
class LayoutLteFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{
    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = null)
    {
        // Obtener config
        $config = $container->get('config');
        // Verificar si existe la configuración
        if(array_key_exists('mia_layout_lte', $config)){
            $data = $config['mia_layout_lte'];
        }else{
            $data = array();
        }
        // Creamos objeto
        return new LayoutLte($data);
    }
}


