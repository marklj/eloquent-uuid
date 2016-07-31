# Simple Eloquent UUID

*This project is experimental and should not be used on real-life applications.*

This is a very simple project that will get you up and running with UUID's within your eloquent models.



## Usage

```php
<?php 
    // Object creation
    $foo = FooModel::create();
    print $foo->uuid; // outputs: feb9035d-e9e2-4913-b6d5-695d0d67f882

    // Object retrieval
    $result = FooModel::find('feb9035d-e9e2-4913-b6d5-695d0d67f882');
    print $foo->uuid; // outputs: feb9035d-e9e2-4913-b6d5-695d0d67f882
```

## Database Setup
 
In your database migration for your model, you should have the UUID field set up like the following:

```php
<?php
    public function up()
    {
        Schema::create('foo_table', function (Blueprint $table) {
            $table->binary('uuid', 16);
            
            // ...
        });
    }
 