<?php


namespace HireIt\Commands\Auth;

/**
 * Class LoginUser
 * @package HireIt\Commands\Auth
 */
/**
 * Class LoginUser
 * @package HireIt\Commands\Auth
 */
class LoginUserCommand
{

    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;

    /**
     * @param string $username
     * @param string $password
     */
    public function __construct(
        $username,
        $password
    ) {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
} 