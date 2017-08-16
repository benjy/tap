# Installation

    composer install benjy/tap

## Usage

Without a callback:

    $person = new Person();
    tap($person)
        ->update(['name' => 'Ben'])
        ->save();
        
With a callback:

    $person = new Person();
    tap($person, function ($person) {
        $person->update(['name' => 'Ben'])
        $person->save();
    });

Way more useful examples here: https://mattstauffer.co/blog/introducing-laravels-tap-higher-order-tap-and-collection-tap

## Credits

The original concept for this method comes from Ruby.
https://ruby-doc.org/core-2.2.3/Object.html#method-i-tap

This code was taken straight from the Laravel framework where I initially discovered this concept. I wanted to use it
 in other applications so I broke it out into a separate library. Thanks to [Laravel](https://laravel.com/)

## License

This library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
