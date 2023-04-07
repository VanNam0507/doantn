<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
    protected $guarded=[];
    use HasFactory;
    const STATUS_DONE=1;
    const STATUS_DEFAULT=0;
    const STATUS_CANCEL=2;
    protected $status=[
        2=>[
            'name'=>'Đã hủy',
            'class'=>'badge-danger'
        ],
        1=>[
            'name'=>'Đã hoàn thành',
            'class'=>'badge-success'
        ],
        0=>[
            'name'=>'Chờ xác nhận',
            'class'=>'badge-secondary'
        ]
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function getStatus(){
        return Arr::get($this->status,$this->tr_status,'[N\A]');

    }
}
