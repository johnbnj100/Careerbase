<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'company', 'company-detail', 'category', 'logo', 'qualification' ,'requirement', 'time', 'email', 'location', 'salary', 'website', 'tags', 'description'];

   public function scopefilter($query, array $filter){
        if($filter['keyword'] ?? false){
            $query->where('title', 'like', '%' . request('keyword') . '%')
            ->orWhere('company', 'like','%' . request('keyword') . '%')
            ->orWhere('tags', 'like','%' . request('keyword') . '%')
            ->orWhere('category', 'like','%' . request('keyword') . '%');
        }

        if($filter['category'] ?? false){
            $query->where('salary', 'like','%' . request('category') . '%')
            ->orWhere('tags', 'like','%' . request('category') . '%')
            ->orWhere('category', 'like','%' . request('category') . '%')
            ->orWhere('time', 'like','%' . request('category') . '%');
        }

        if($filter['location'] ?? false){
            $query->where('title', 'like','%' . request('location') . '%')
            ->orWhere('location', 'like','%' . request('location') . '%');
            
        }
    }

    //Relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
