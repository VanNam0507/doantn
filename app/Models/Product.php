<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $guarded=[];
    use HasFactory;
    const STATUS_PUBLIC=1;
    const STATUS_PRIVATE=0;
    const HOT_ON=1;
    const HOT_OFF=0;
    protected $status=[
        1=>[
            'name'=>'Public',
            'class'=>'badge-danger'
        ],
        0=>[
            'name'=>'Private',
            'class'=>'badge-info'
        ]
    ];
    protected $hot=[
        1=>[
            'name'=>'Hot',
            'class'=>'badge-success'
        ],
        0=>[
            'name'=>'No',
            'class'=>'badge-info'
        ]
    ];
    protected static function booted(){
        parent::boot();
        static :: addGlobalScope('status',function (Builder $builder){
            $builder->where('status',Product::STATUS_PUBLIC);
            return $builder;
        });
    }
    public function getStatus(){
        return Arr::get($this->status,$this->pro_active,'[N\A]');
    }
    public function getHot(){
        return Arr::get($this->hot,$this->pro_hot,'[N\A]');
    }
    public function category(){
        return $this->belongsTo(Category::class,'cate_id');
    }
    public function images(){
        return $this->hasMany(ProductImage::class,'pro_id');
    }
}
