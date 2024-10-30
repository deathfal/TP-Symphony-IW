<?php 
// create src/Entity/AccountStatus.php
namespace App\Enum;

enum AccountStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case DELETED = 'deleted';
}