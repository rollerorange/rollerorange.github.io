<?php
function checkAdminAccess()
{
    $result = ($_SESSION['loggedin'] && isset($_SESSION['authlevel']) && $_SESSION['authlevel'] == 2);

    if(!$result)
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

function checkAccountAccess($userID)
{
    $result = ($_SESSION['loggedin'] && isset($_SESSION['authlevel']) && $_SESSION['authlevel'] == 1 && $_SESSION['ID'] == $userID);

    if(!$result)
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

function checkLoggedIn()
{
    $result = (isset($_SESSION['loggedin']) && $_SESSION['loggedin']);

    if(!$result)
    {
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}
?>