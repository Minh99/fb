<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MOwner extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'owners';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['username', 'ip_access_token'] ;

    protected $hidden = ['password'];

    public $rule = [

    ];

    public $messages = [

    ];
    public $labels = [];

    public function __construct(array $attributes = [])
    {
        $this->labels = 'Owner';
        parent::__construct($attributes);
    }
}
