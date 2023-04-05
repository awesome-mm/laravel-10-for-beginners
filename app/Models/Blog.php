<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // 데이터 베이스에 저장할 필드값을 정의 해주어야한다.
    // protected $fillable = [
    //     'user_id' ,'title' , 'description'
    // ]
    
    protected $guarded = [];
 

}
