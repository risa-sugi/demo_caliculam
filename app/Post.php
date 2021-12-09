<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        ];
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('user')->orderBy('updated_at', 'asc')->paginate($limit_count);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
