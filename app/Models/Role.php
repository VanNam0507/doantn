<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function permission(){
        return $this->belongsToMany(Permission::class,'permission_role','role_id','permission_id');
    }
}
