<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/03/17
 * Time: 13:03
 */

namespace App\Models;

/**
 * Class Usuario
 * @package App\Models
 */
class Usuario
{
    /**
     * @var null
     */
    private $id;

    /**
     * @var null
     */
    private $nome;

    /**
     * @var null
     */
    private $email;

    /**
     * @var null
     */
    private $senha;

    /**
     * @var null
     */
    private $status;

    /**
     * @var null
     */
    private $logado;

    /**
     * Usuario constructor.
     * @param null $id
     * @param null $nome
     * @param null $email
     * @param null $senha
     * @param null $status
     * @param null $logado
     */
    public function __construct($id = null, $nome = null, $email = null, $senha = null, $status = null, $logado = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->status = $status;
        $this->logado = $logado;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return null
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return null
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $logado
     */
    public function setLogado($logado)
    {
        $this->logado = $logado;
    }

    /**
     * @return null
     */
    public function getLogado()
    {
        return $this->logado;
    }
}