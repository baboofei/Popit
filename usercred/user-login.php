<?php
    function login($name, $password)
    {
	/* TODO: Write the function */
    }

    function loginHashPassword($password)
    {
	/* TODO: Write the function */
    }

    function loginCheckCredential($name, $passwordHash)
    {
	/* TODO: Write the function */
    }

    function loginGenIdentifier()
    {
	/* TODO: Write the function */
    }

    function loginSetIdentifier($name, $identifier)
    {
	/* TODO: Write the function */
    }

    $username = $_GET["un"];
    $password = $_GET["pw"];

    login($username, $password);
?>
