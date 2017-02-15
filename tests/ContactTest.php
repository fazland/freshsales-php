<?php

namespace Fazland\Freshsales\Tests;

use Fazland\Freshsales\Data\Contact;
use PHPUnit\Framework\TestCase;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
class ContactTest extends TestCase
{
    /**
     * @var Contact
     */
    private $contact;

    protected function setUp()
    {
        $this->contact = new Contact();
    }

    public function testToArrayShouldReturnAnArray()
    {
        $this->assertInternalType('array', $this->contact->toArray());
    }

    public function testContactArrayIsWellFormed()
    {
        $contactArray = $this->contact->toArray();
        $this->assertArrayHasKey('contact', $contactArray);
    }

    public function testToArrayHaveMandatoryFields()
    {
        $this->contact->setLastName('Rossi');
        $this->assertArrayHasKey('last_name', $this->contact->toArray()['contact']);
        $this->assertEquals('Rossi', $this->contact->toArray()['contact']['last_name']);
    }

    public function testAPICRUDActions()
    {
        $this->assertNotNull($this->contact->getAddAction());
        //@todo
//        $this->assertNotNull($this->contact->getDeleteAction());
//        $this->assertNotNull($this->contact->getUpdateAction());
//        $this->assertNotNull($this->contact->getGetAction());
    }

    public function testCustomFieldsIncludedInArray()
    {
        $customFieldkey = 'cf_test';
        $customFiledValue = 'this is a test';
        $this->contact->setCustomField($customFieldkey, $customFiledValue);
        $contactArray = $this->contact->toArray();
        $this->assertArrayHasKey($customFieldkey, $this->contact->toArray()['contact']['custom_field']);
        $this->assertEquals($contactArray['contact']['custom_field'][$customFieldkey], $customFiledValue);
    }
}
