<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'admin';

    protected $primaryKey = 'admin_id';

    public $timestamps = true;

    const CREATED_AT = 'created';

    const UPDATED_AT = 'updated';

    public function getList($params)
    {
        $query = $this->newQuery();
        
        $pageSize = array_get($params, 'page_size', 10);
        return $query->paginate($pageSize);
    }
}
