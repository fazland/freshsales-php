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

    public function testToArrayHaveMandatoryFields()
    {
        $this->contact->setLastName('Rossi');
        $this->assertArrayHasKey('last_name', $this->contact->toArray());
        $this->assertEquals('Rossi', $this->contact->toArray()['last_name']);
    }

    public function testAPICRUDActions()
    {
        $this->assertNotNull($this->contact->getAddAction());
        $this->assertNotNull($this->contact->getDeleteAction());
        $this->assertNotNull($this->contact->getUpdateAction());
        $this->assertNotNull($this->contact->getGetAction());
    }
}
