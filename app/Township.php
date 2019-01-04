<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Township
 *
 * @package App
 * @property string $title
*/
class Township extends Model
{
    protected $fillable = ['title'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();

        Township::observe(new \App\Observers\UserActionsObserver);
    }
    
}
