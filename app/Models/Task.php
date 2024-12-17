<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    private $id, $title, $description, $long_description, $completed, $create_at, $update_at;

    // public function __construct($id, $title, $des, $long_des, $completed, $create_at, $update_at)
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->description = $des;
    //     $this->long_description = $long_des;
    //     $this->completed = $completed;
    //     $this->create_at = $create_at;
    //     $this->update_at = $update_at;
    // }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getLongDescription(){
        return $this->long_description;
    }
    public function getCompleted(){
        return $this->completed;
    }
    public function getCreate_at(){
        return $this->create_at;
    }
    public function getUpdate_at(){
        return $this->update_at;
    }


}
