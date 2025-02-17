# PHP Notice: Undefined Index Error

This repository demonstrates a common yet easily overlooked error in PHP: the 'Undefined index' notice.  This notice arises when you attempt to access an array element using a key that doesn't exist. While not a fatal error, it disrupts program flow and can lead to unexpected results.

The `bug.php` file showcases the error. The `bugSolution.php` provides a fix using isset() to check for the existence of the key before accessing it.  This ensures the code behaves predictably and prevents unexpected behavior. 

Understanding and preventing this subtle issue is crucial for writing robust and reliable PHP code.