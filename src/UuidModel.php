<?php
namespace Marklj\EloquentUuid;


use Assert\Assertion;
use Illuminate\Database\Eloquent\Model;

class UuidModel extends Model {

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $guarded = ['uuid'];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function setUuidAttribute($value)
    {
        if($value instanceof UuidIdentifier)
        {
            $value = $value->toString();
        }
        Assertion::uuid($value, 'Invalid format for UUID');
        $this->attributes['uuid'] = $value;
    }

}