<?php

namespace Invalid\NonExistentRoutingResource_2;

use Claroline\PluginBundle\AbstractType\ClarolinePlugin;

class InvalidNonExistentRoutingResource_2 extends ClarolinePlugin
{
    public function getRoutingResourcesPaths()
    {
        $existent = __DIR__
            . DIRECTORY_SEPARATOR
            . 'Resources'
            . DIRECTORY_SEPARATOR
            . 'config'
            . DIRECTORY_SEPARATOR
            . 'routing.yml';
        $nonExistent =  __DIR__ 
            . DIRECTORY_SEPARATOR
            . 'fake_routing.yml';

        return array($existent, $nonExistent);
    }
}