<?php

namespace App\Models\Export;

use Illuminate\Database\Eloquent\Model;

class ExportInfos extends Model
{
    protected $table = 'export_infos';

    protected $fillable = [ 
        'user_id', 'user_type', 'address_line1', 'address_line2', 'phone', 'region', 'city', 'terms_conditions', 'newsletters'
    ];
}
