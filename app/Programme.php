<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Programme extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['name','progCode','description', 'orgID'];

    /**
     * Get the organisation record associated with the programme.
     */
    public function getOrganisationRelation()
    {
        return $this->hasOne('App\Organisation', 'orgCode', 'orgID' );
    }

    public function getBeneficiaryRelation()
    {
        return $this->hasMany('App\Beneficiary', 'progID', 'progCode' );
    }

    public function generateTags(): array
    {
        return [
            'Programme'
        ];
    }
}
