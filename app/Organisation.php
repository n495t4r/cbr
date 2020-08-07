<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Organisation extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['name','orgCode','description'];
    
    //one to many relationship
    public function getProgrammeRelation()
    {
        return $this->hasMany('App\Programme', 'orgID', 'orgCode' );
    }

    public function generateTags(): array
    {
        return [
            'Organisation'
        ];
    }
}
