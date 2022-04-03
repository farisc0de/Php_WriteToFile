# Php_WriteToFile
A Fancy function to write data to a file


## How to use

```php
<?php

writeToFile("hello.txt", function(){
  return "Hello, World!";
});
```

```php
<?php

$name = "Faris";
writeToFile("hello.txt", function($name){
  return "Hello, World! {$name}";
}, [ "name" => $name ]);
```

## License

MIT
