<?php
    /*
     * @file user-login.php
     * @brief Functions allowing user client to login
     *
     * Functions in user-login.php allows the client to login by checking the
     * credential information the client provides, then issue the client with an
     * identifier to uniquely identify it. The identifier act as a token to mark
     * the client as trusted.
     *
     * @author Claude Luo <babooclaude@hotmail.com>
     * @date January 19th, 2015
     */

    /*
     * @namespace popit::user::crendential
     * @brief Contains functions allowing user client to login
     */

    namespace popit\user\credential;

    /*
     * @fn login
     * @brief Login action wrapper that interally calls other login functions
     *
     * @param string $name Name of user to be logged-in
     * @param string $password Password of that user
     * @retval null
     */

    function login(string $name, string $password)
    {
	/* TODO: Write the function */
    }

    /*
     * @fn loginHashPassword
     * @brief Generate a hash with the provided password
     *
     * @param string $password Password to be hashed
     * @retval string Hash of the password
     */

    function loginHashPassword(string $password)
    {
	/* TODO: Write the function */
    }

    /*
     * @fn loginQueryData
     * @brief Queries given field of the user specified by name
     *
     * @param string $name Name of the user to be quried
     * @param string $field Field of the data to be quried
     * @retval string Value of the field
     */

    function loginQueryData(string $name, $field)
    {
	/* TODO: Write the function */
    }

    /*
     * @fn loginCheckCredential
     * @brief Credential check action wrapper, interally calls other functions
     *
     * @param string $name Name of the user
     * @param string $password Password of that user
     * @retval bool If the credentials are good
     */

    function loginCheckCredential(string $name, string $passwordHash)
    {
	/* TODO: Write the function */
    }

    /*
     * @fn loginGenIdentifier
     * @brief Generate an unique user identifier
     *
     * @retval string The identifier string
     */

    function loginGenIdentifier()
    {
	/* TODO: Write the function */
    }

    /*
     * @fn loginSetIdentifier
     * @brief Set the identifier for a given user
     *
     * @param string $name Name of the user
     * @param string $identifier Identifier to be set to the user
     * @retval null
     */

    function loginSetIdentifier(string $name, string $identifier)
    {
	/* TODO: Write the function */
    }
?>
