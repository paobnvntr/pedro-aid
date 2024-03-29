<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffidavitOfNoIncome extends Model
{
    use HasFactory;

    protected $fillable = [
        'documentRequest_id',
        'name',
        'civil_status',
        'address',
        'year_of_no_income',
        'certificate_of_indigency',
        'valid_id_front',
        'valid_id_back',
    ];
}
