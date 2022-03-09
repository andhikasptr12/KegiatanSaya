<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Activity extends Model
{
    use AutoNumberTrait;
    protected $table = 'activitys';
    protected $guarded = [];   

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getAutoNumberOptions()
    {
        return [
            'kode_activity' => [
                'format' => function(){
                    return 'EV-AB/' . date('Ymd') . '/?';
                },
                'length' => 5 
                
            ]
        ];
    }

}
