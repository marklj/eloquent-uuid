<?php namespace Marklj\EloquentUuid;

use Ramsey\Uuid\Uuid;

/*
 * Replace the Model Name with your own entity name
 */
class ExampleModelUuid extends UuidIdentifier {

    protected $value;

    public function __construct(Uuid $uuid)
    {
        $this->value = $uuid;
    }
    
}