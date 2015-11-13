<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgProfile extends Model
{
    //
    /*
     * @org_id
     * @company_name
     * @detail
     * @email
     * @phone
    */

    protected $table = "org_profiles";
    protected $fillable = [
        'org_id',
        'company_name',
        'detail',
        'email',
        'phone'
    ];

    public function org()
    {
        return $this->belongsTo(Org::class);
    }
}
