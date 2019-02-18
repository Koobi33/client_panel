<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class aboutClient extends Model
{
    protected $table = "u6371237_dima";
    protected $primaryKey = "id";

    protected $fillable = [
            'clientName',
            'lawTypeSelect',
            'lawName',
            'generalName',
            'factAddr',
            'lawAddr',
            'INN',
            'KPP',
            'ORGN',
            'checkAcc',
            'corrAcc',
            'BIK',
            'bankName',
            'phoneNumber',
            'email',
            'vk',
            'inst',
            'fb'];
    protected $dates =[
        'created_at',
        'updated_at'
    ];

}
