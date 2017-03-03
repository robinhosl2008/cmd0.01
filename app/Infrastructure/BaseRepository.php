<?php
namespace App\Infrastructure;

use ReflectionClass;

abstract class BaseRepository{

    protected $modelClassName;
    protected $model;
    protected $defaultRelations = [];

    public function __construct()
    {
        $this->makeModel();
    }
    
    public function listBy(array $array = [], $relations = [], $columns = array('*'))
    {
        $query = $this->getQuery($this->model->with($relations == [] ? $this->defaultRelations : $relations), $array);
        return $query->get($columns);
    }

    public function findById($id, $relations = [], $columns = array('*'))
    {
        return $this->model->with($relations == [] ? $this->defaultRelations : $relations)->find($id, $columns);
    }

    public function findBy(array $array = [], $relations = [], $columns = array('*'))
    {
        $query = $this->getQuery($this->model->with($relations == [] ? $this->defaultRelations : $relations), $array);
        return $query->first($columns);
    }

    protected function makeModel(){
        $r = new ReflectionClass($this->modelClassName);
        $this->model = $r->newInstanceArgs();
    }

    public function listAll(){
        return $this->listBy([]);
    }

    private function getQuery($query, array $properties){

        if(count($properties) > 0 && is_array($properties[0])){
            foreach ($properties as $value){

                if(count($value) == 2)
                    $query = $query->where($value[0], $value[1]);
                elseif (count($value) == 3){

                    if($value[1] == 'like'){
                        $query = $query->where($value[0], $value[1], '%'.$value[2].'%');
                    }else{
                        $query = $query->where($value[0], $value[1], $value[2]);
                    }

                }
            }

        }elseif(count($properties) > 0 && is_array($properties[0]) == false){

            if(count($properties) == 2)
                $query = $query->where($properties[0], $properties[1]);
            elseif (count($properties) == 3){

                if($properties[1] == 'like'){
                    $query = $query->where($properties[0], $properties[1], '%'.$properties[2].'%');
                }else{
                    $query = $query->where($properties[0], $properties[1], $properties[2]);
                }

            }
        }

        return $query;
    }

    public function findByEmail($email){
        $usuarioModel = new Usuario;
        $usuario = $usuarioModel->where('email', $email);
        return $usuario;
    }
}