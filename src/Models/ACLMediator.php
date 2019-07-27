<?php

namespace App\Models;

use App\Contracts\IUser;
use App\Contracts\IAuthorization;

abstract class ACLMediator implements IAuthorization
{
    /** @var IUser $user */
    protected $user;
    
    public function __construct(IUser $user)
    {
        $this->user = $user;
    }

    public function __call($method, $params)
    {
        if (!$this->hasPermissions($method)) {
            throw new \Exception('Permission denied!');
        }
        
        $this->execute($method, array_shift($params));
    }

    public function hasPermissions($action) : bool
    {
        return in_array($action, $this->user->getPermissions());
    }

    /**
     * execute: execute a method of repository
     */
    abstract public function execute($method, $resource);
}
