<?php

use Sugarcrm\GradebookFake\RecordManager;

function AddStudentToGradebookJob($job)
{
    if (!empty($job->data))
    {
        $bean = BeanFactory::getBean('Contacts', $job->data);
        $name = $bean->name;
        $first_name = $bean->first_name;
        $last_name = $bean->last_name;
        $email = $bean->email1;

        $GLOBALS['log']->fatal('Calling GradebookFake to add ' . $first_name . ' ' . $last_name . ' with email ' .
            $email . ' to gradebook.');

        //Call the external GradebookFake app to create a new record in it
        $rm = new RecordManager();
        return $rm->createStudentRecord($email, $first_name, $last_name);
    }

    return false;
}
