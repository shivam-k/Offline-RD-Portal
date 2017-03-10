
## RD Portal

Precisely- **Registration Desk Portal**

A Registration Management System, made in PHP, to manage the participants participating in any college fest. It is prefered to use it offline, means registration has to be managed on the registration desk itself. Refer to [this link]() for portal for online registration management system. 



## How to use it

It is fully reliable and ease, just you need to know some basic concepts of phpMyAdmin so that you can create tables for your use, and some basics of Php in order to change the authenticity of the portal.    

### Access
* Open the <code>index.php</code> and traverse through the whole code, and very soon you'll see something like this 
```php
if(!empty($username) && !empty($password)) {
		if($username == 'user@name' && $password == 'pass123') {
			$_SESSION['username'] = $username;
			?> <script> window.location="home.php"; </script> <?php 
		}
```
* Now change the username <code>user@name</code> and password <code>pass123</code> according to your wish.

[-HappyCoding-] 
