<?php
namespace App\Infrastructure;

class BaseService{

    protected $container;
    protected $repository;

    public function __construct(\Slim\Container $container, $class)
    {
        $this->container = $container;

        $function = new \ReflectionClass($class);
        $repository_key = str_replace('service', 'Repository', strtolower($function->getShortName()));
        $this->repository = $this->container->{$repository_key};

    }
    
    public function __get($name)
    {
        if($this->container->{$name}){

            return $this->container->{$name};
        }
    }

    public function __call($name, $arguments)
    {
        $rm = new \ReflectionMethod($this->repository, $name);
        if($rm){
            return $rm->invokeArgs($this->repository, $arguments);
        }
    }

}