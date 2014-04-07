<?php

//require
require_once '../../../autoload.php';
require_once 'config.php';

use \SumoCoders\Teamleader\Teamleader;
use \SumoCoders\Teamleader\Crm\Contact;
use \SumoCoders\Teamleader\Crm\Company;

// create instance
$teamleader = new Teamleader(API_GROUP, API_KEY);

try {
//    $response = $teamleader->helloWorld();

//    $response = $teamleader->crmGetContacts();
//    $response = $teamleader->crmGetContact(1109425);
//
//    $contact = new Contact();
//    $contact->setForename('Tijs');
//    $contact->setSurname('Verkoyen');
//    $contact->setEmail(time() . '@verkoyen.eu');
//    $response = $teamleader->crmAddContact($contact);
//
//    $contact = new Contact();
//    $contact->setId(1109425);
//    $contact->setEmail(time() . '@verkoyen.eu');
//    $response = $teamleader->crmUpdateContact($contact);

//    $company = new Company();
//    $company->setName('Avocom');
//    $response = $teamleader->crmAddCompany($company);

//    $company = new Company();
//    $company->setId(674676);
//    $company->setEmail(time() . '@verkoyen.eu');
//    $response = $teamleader->crmUpdateCompany($company);
} catch (Exception $e) {
    var_dump($e);
}

// output
var_dump($response);
