<?php

function AddStudentToGradebookJob($job)
{
    if (!empty($job->data))
    {
        $bean = BeanFactory::getBean('Contacts', $job->data);
        $name = $bean->name;
        $first_name = $bean->first_name;
        $last_name = $bean->last_name;
        $email = $bean->email;
        $GLOBALS['log']->fatal('Adding ' . $first_name . ' ' . $last_name . ' with email $email to gradebook: ' . $name);
        return true;
    }

    return false;
}