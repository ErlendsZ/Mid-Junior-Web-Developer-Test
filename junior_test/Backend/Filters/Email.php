<?php

namespace Backend;

class Email
{
    /*
     * Decides if E-mail is valid format, returns boolean state - true for valid.
     */
    public function validateEmail(string $email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        }
        return true;
    }
}
