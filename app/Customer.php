<?php

namespace CarcasonneImmobilier;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Notifiable;

    public $timestamps = false;

    protected $fillable = [
        'name', 'prenom', 'telephone'];

}
