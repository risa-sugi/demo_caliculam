<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    {
        return $this->orderBy('updated_at','asc')->paginate($limit_count);
    }
}
