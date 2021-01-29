<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

    use HasFactory;

    protected $fillable = ["name"];

    public function getSlugAttribute() {

        return strtolower(
            str_replace(" ", "-", $this->name)
        );

    }

}
