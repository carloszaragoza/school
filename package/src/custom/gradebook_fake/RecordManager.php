<?php

//TODO:  Is there a requirement that MLPs use the Sugarcrm nameespace? I wasn't able to install the MLP and get it
// run successfully when the namespace did not start with Sugarcrm
namespace Sugarcrm\GradebookFake;

/**
 * Class RecordManager
 * @package GradebookFake
 * This class manages the records for GradebookFake.
 * No records are actually saved!
 */
class RecordManager
{
    /**
     * This function pretends to create a student record in GradebookFake
     * @param $email
     * @param $firstName
     * @param $lastName
     * @return bool true if the record was created in GradebookFake
     * @throws \Exception if the email address forceerror@example.com is used
     */
    function createStudentRecord($email, $firstName, $lastName)
    {
        $GLOBALS['log']->fatal('Inside of createStudentRecord');
        if ($email === 'forceerror@example.com'){
            throw new \Exception("An error was forced because the email address forceerror@example.com was used.");
        }
        return true;
    }
}
