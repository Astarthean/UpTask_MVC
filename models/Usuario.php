<?php

namespace Model;

class Usuario extends ActiveRecord
{

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['nombre', 'email', 'password', 'token', 'confirmado', 'id'];

    public $id;
    public $nombre;
    public $email;
    public $password;
    public $password2;
    public $confirmado;
    public $token;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
    }

    //Validacion para cuentas nuevas
    public function validarNuevaCuenta()
    {
        if (!$this->nombre) {
            Self::$alertas['error'][] = 'El nombre del usuario es obligatorio';
        }
        if (!$this->email) {
            Self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }

        if (!$this->password) {
            Self::$alertas['error'][] = 'La contraseña del usuario es obligatoria';
        }

        if (strlen($this->password) < 6) {
            Self::$alertas['error'][] = 'La contraseña debe contener al menos 6 caracteres';
        }
        if ($this->password !== $this->password2) {
            Self::$alertas['error'][] = 'Las contraseñas no coinciden';
        }
        return self::$alertas;
    }

    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken()
    {
        $this->token = md5(uniqid());
    }

    public function validarEmail () 
    {
        if (!$this->email) {
            Self::$alertas['error'][] = 'El email es obligatorio';
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            Self::$alertas['error'][] = 'Email no válido';
        }

        return self::$alertas;
    }

    public function validarPassword()
    {
        if (!$this->password) {
            Self::$alertas['error'][] = 'La contraseña es obligatoria';
        }
        if (strlen($this->password) < 6) {
            Self::$alertas['error'][] = 'La contraseña debe contener al menos 6 caracteres';
        }
        return self::$alertas;
    }
}
