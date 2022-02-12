<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'country_id',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'postal_code',
        'organization_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
