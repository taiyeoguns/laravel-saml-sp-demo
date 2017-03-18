<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel SAML Demo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Laravel SAML Demo" name="description">
    <meta content="Taiye" name="author">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet" />
    <!-- <link href="//netdna.bootstrapcdn.com/bootswatch/2.1.1/cosmo/bootstrap.min.css" rel="stylesheet" /> -->

</head>
<body>

<div class="container">

<br /><br />

<p><a href="https://github.com/aacotroneo/laravel-saml2" target="_blank">Aacotroneo laravel-saml2</a></p>

<p>based on</p>

<p><a href="https://github.com/onelogin/php-saml" target="_blank">Onelogin php-saml</a></p>

<p>&nbsp;</p>

<a href="login" class="btn btn-large btn-success">Login</a>

<br /><br />
<br /><br />

<span class="label label-important">Important</span>
<br /><br />
<ul>
	<li><a href="https://github.com/jch/saml" target="_blank">Understand SAML</a></li>
	<li><a href="http://www.ssocircle.com/en/idp-tips-tricks/ssocircle-how-to/" target="_blank">SSOCircle How-To</a></li>
	<li><a href="https://idp.ssocircle.com/" target="_blank">SSOCircle IDP information</a></li>
	<li><a href="http://www.ssocircle.com/en/idp-tips-tricks/public-idp-configuration/" target="_blank">SSOCircle Public IDP Configuration</a></li>
	<li><a href="http://www.ssocircle.com/en/public-idp-configuration-changes/" target="_blank">SSOCircle IDP Configuration Changes</a></li>
</ul>

<br />

<h4>Steps</h4>

<ol>
	<li>Install the package in existing laravel project and publish the config file</li>
	<li>Create an account in <a href="http://www.ssocircle.com/en/" target="_blank">ssocircle</a></li>
	<li>Open <code>config/saml2_settings.php</code> and enter:
		<br /><br />
		<code>$idp_host = 'https://idp.ssocircle.com:443';</code>
		<br /><br />
		<code>'strict' => false,</code>
		<br /><br />
		<code>'entityId' => $idp_host . '/sso/SSOPOST/metaAlias/publicidp',</code>
		
	</li>
</ol>

<p>&nbsp;</p>


<br /><br />

<br /><br />

<!-- <div id="here"></div> -->

</div>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>