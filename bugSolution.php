The solution involves checking the return value of `file_get_contents()`. If it returns `false`, an error occurred. The following code demonstrates proper error handling:

```php
<?php
$filename = 'somefile.txt';
$data = file_get_contents($filename);

if ($data === false) {
    $error = error_get_last();
    echo "Error reading file: " . $error['message'] . "\n";
    // Handle the error appropriately (e.g., log it, display a user-friendly message, exit gracefully)
exit(1);
} else {
    // Process $data
echo $data;
}
?>
```
This version checks for errors and provides informative error messages, preventing silent failures.