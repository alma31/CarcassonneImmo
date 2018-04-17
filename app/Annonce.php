<?php

namespace CarcasonneImmobilier;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'title', 'path', 'nbpiece', 'price', 'idCustomer', 'idTypeOfAnnonce'];

}
