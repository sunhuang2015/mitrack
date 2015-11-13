<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{

    /*
     @org_id  组织ID
     @code    车间代码
     @name    车间名称
     @location :位置
     @gps   地理坐标
     @admin_id  部门管理员
     @remark  备注
     */
    protected $table = "workshops";

    public function org()
    {
        return $this->belongsTo(Org::class);
    }

    public $fillable = [
        'org_id',
        'code',
        'name',
        'admin_id',
        'remark',
        'location',
        'gps'
    ];

   /* public function setCodeAttribute()
    {

        $this->attributes['code'] = $this->attributes . '_' . $this->attributes['name'];
    }*/
}
