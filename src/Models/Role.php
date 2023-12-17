<?php

namespace Pallab\RolePermission\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $status
 */
class Role extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'code', 'status'];
}
