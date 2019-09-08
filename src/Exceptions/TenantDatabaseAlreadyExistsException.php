<?php

namespace Stancl\Tenancy\Exceptions;

use Stancl\Tenancy\Contracts\TenantCannotBeCreatedException;

class TenantDatabaseAlreadyExistsException extends TenantCannotBeCreatedException
{
    /** @var string */
    protected $database;

    public function reason(): string
    {
        return "Database {$this->database} already exists.";
    }

    public function __construct(string $database)
    {
        parent::__construct();

        $this->database = $database;
    }
}