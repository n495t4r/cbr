<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Beneficiary extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        
        'progID' ,
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'gender',
        'dob',
        'address',
        'alt_phone',
        'email',
        'state',
        'lga',
        'marital_status',
        'occupation',
        'tpid',
        'bank_name',
        'acct_number',
        'bvn',
        'id_type',
        'id_number',
        'nok_fullname',
        'nok_relationship',
        'nok_address',
        'nok_phone'
    ];
    
    public function getProgrammeRelation(){
        return $this->hasOne('App\Programme', 'progCode', 'progID');
    }

    public function generateTags(): array
    {
        return [
            'Beneficiary'
        ];
    }
}
