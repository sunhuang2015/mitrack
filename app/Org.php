<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{

    /*
     * @code -组织代码
     * @name -组织名称--系统名称，不可更改
     * @token --与主服务器联系之Token
     * @actived --激活状态
     * @expired_date--到期时间
     */
    protected $table = "orgs";

    protected $fillable = [
        'code',
        'name',
        'token',
        'actoved',
        'expired'
    ];

    public function workshop()
    {
        return $this->hasMany(Workshoop::class);
    }
}
