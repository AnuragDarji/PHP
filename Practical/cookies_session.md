## *Cookies:-*

```php
<?php
    //Cookies
    setcookie("username","Anurag",time()+3600); //cookie expires in 1 hour.

    //retrieve the value
    $username = $_COOKIE['username'];
    echo "$username";
?>
```
![App Screenshot](https://github.com/AnuragDarji/PHP/assets/127482974/d26690da-5009-4620-a24f-24bf75424d52)

## *Session:-*

```php
    // start a new session
    session_start();

    // set a session variable.
    $_SESSION['username'] = 'Anurag';

    //retrive value of username
    $username = $_SESSION['username'];
    echo "$username";
```
![App Screenshot](https://github.com/AnuragDarji/PHP/assets/127482974/d34b9425-2a22-4f36-873f-d2480762dcf5)
