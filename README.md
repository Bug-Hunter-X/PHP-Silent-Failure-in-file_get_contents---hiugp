# PHP Silent Failure: file_get_contents() without error handling

This repository demonstrates a common but subtle error in PHP: using `file_get_contents()` without proper error handling.  The code attempts to read a file, but if the file cannot be accessed (due to permissions, file not found, etc.), it silently fails, potentially leading to unexpected results or application crashes.

The `bug.php` file shows the flawed code. The `bugSolution.php` file provides a corrected version with robust error handling, ensuring that the script doesn't fail silently.

## How to reproduce
1. Clone this repository.
2. Run `bug.php`. Observe the behavior if 'somefile.txt' does not exist or is inaccessible.
3. Run `bugSolution.php`. Observe the improved error handling.