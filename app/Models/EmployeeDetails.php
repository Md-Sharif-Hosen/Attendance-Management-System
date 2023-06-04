<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetails extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable =['name','phone_number'];
    public function user_email()
    {
        //function_body
        return $this->belongsTo(User::class, 'email');
    }

    public function department_data()
    {
        //function_body
        return $this->belongsTo(Department::class, 'department');
    }
    public function post_data()
    {
        //function_body
        return $this->belongsTo(Post::class, 'post');
    }
}
