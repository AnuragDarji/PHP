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
![App Screenshot]()

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
![App Screenshot]()
