<?php
//includes
include("CONFIG/config.php");  //include the application configuration settings

//  PROCESS THE COOKIE FORM  
if(isset($_POST['setCookies']))  //if the setCookies button has been pressed
{
    /*
    *	Setting a cookie in PHP is easy set_cookie(name, value, expiration, path, domain, secure, http_only);
    *	Name is what your cookie will be stored as. 
    *	Value is the value that will be stored in your cookie. 
    *	Expiration is when your cookie will expire (delete). 
    *	Path is the path on the server the cookie will be available to. 
    *	Domain is the domain that the cookie is available to. (Note: www.lit.ie counts www as a subdomain of  lit.ie) 
    *	Secure is if the cookie will be only transferred over a secure connection SSL. 
    *	HTTP_only will send the cookie only through HTTP protocol. (Note: only available for PHP 5.2 +, and on certain browsers)  
    *
    *	Cookies must be set and unset BEFORE the <html> tag
    */

    //EXAMPLE - SETTING COOKIES
    setcookie("user", "k00223361", time()+3600);
    setcookie("shortlife","Vinny Lee",time()+10); //current time plus 10 seconds
}
	
if(isset($_POST['killCookies']))
{
    //EXAMPLE - UN-SETTING COOKIES. Use empty data String, specify time with a negative value. Forces the cookie to expire
    setcookie("user", "", time()-10);  //To unset a cookie set the expiry time to a negative value
    setcookie("shortlife","",time()-10);
}
	
//else DISPLAY the COOKIE Status and the FORM again. VIEW COOKIES button is a dummy button
include("MODELS/model_ex01.php"); 
include("VIEWS/view_ex01.php");

?>