<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('menu', new Route('/menu', array(
    '_controller' => 'EPEpapetrieBundle:Categories:menu',
)));

return $collection;