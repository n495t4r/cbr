<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Intervention extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = ['name','intCode','description', 'progID'];

    public function getProgrammeRelation()
    {
        return $this->hasOne('App\Programme', 'progCode', 'progID' );
    }

    public function generateTags(): array
    {
        return [
            'Intervention'
        ];
    }
}
