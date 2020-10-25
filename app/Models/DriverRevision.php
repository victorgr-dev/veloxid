<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverRevision extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'driver_id',
        'requirement_status_id',
        'observacion'
    ];

    /**
     * The requirements that belong to the revision from the driver.
     */
    public function requirements()
    {
        return $this->belongsToMany('App\Models\DriverRequirement', 'driver_evaluations', 'driver_revision_id', 'driver_requirement_id');
    }
}