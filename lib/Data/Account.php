<?php

namespace Fazland\Freshsales\Data;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
class Account implements ObjectInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var int
     */
    private $industryTypeId;

    /**
     * @var int
     */
    private $businessTypeId;

    /**
     * @var int
     */
    private $numbersOfEmployees;

    /**
     * @var string
     */
    private $annualRevenue;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var int
     */
    private $ownerId;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var int
     */
    private $territoryId;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * This array collects all the custom fields to be saved in the usual "key" => "value" fashion.
     * BEWARE: to use a custom field, you have to create it in the Freshsales Administration panel > Account Fields area.
     * When this comment has been wrote, the url was <your domain>/settings/sales_account/fields .
     * After the field creation, open his edit panel. The proper name to use as field key is displayed in the
     * "Internal name" area of the editing panel. When this comment has been wrote, the key name was generated to be
     * in the shape of cf_<snake_case name of your field>
     *
     * @var array
     */
    private $customFields;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Account
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Account
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     *
     * @return $this
     */
    public function setAddress(string $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     *
     * @return Account
     */
    public function setCity(string $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return Account
     */
    public function setState(string $state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string|null $zipcode
     *
     * @return Account
     */
    public function setZipcode(string $zipcode = null)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return int
     */
    public function getIndustryTypeId(): int
    {
        return $this->industryTypeId;
    }

    /**
     * @param int|null $industryTypeId
     *
     * @return Account
     */
    public function setIndustryTypeId(int $industryTypeId = null)
    {
        $this->industryTypeId = $industryTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBusinessTypeId(): int
    {
        return $this->businessTypeId;
    }

    /**
     * @param int|null $businessTypeId
     *
     * @return Account
     */
    public function setBusinessTypeId(int $businessTypeId = null)
    {
        $this->businessTypeId = $businessTypeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumbersOfEmployees(): int
    {
        return $this->numbersOfEmployees;
    }

    /**
     * @param int|null $numbersOfEmployees
     *
     * @return Account
     */
    public function setNumbersOfEmployees(int $numbersOfEmployees = null)
    {
        $this->numbersOfEmployees = $numbersOfEmployees;

        return $this;
    }

    /**
     * @return string
     */
    public function getAnnualRevenue()
    {
        return $this->annualRevenue;
    }

    /**
     * @param string|null $annualRevenue
     *
     * @return Account
     */
    public function setAnnualRevenue(string $annualRevenue = null)
    {
        $this->annualRevenue = $annualRevenue;

        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     *
     * @return Account
     */
    public function setWebsite(string $website = null)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     *
     * @return Account
     */
    public function setPhone(string $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @param int|null $ownerId
     *
     * @return Account
     */
    public function setOwnerId(int $ownerId = null)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param string|null $facebook
     *
     * @return Account
     */
    public function setFacebook(string $facebook = null)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param string|null $twitter
     *
     * @return Account
     */
    public function setTwitter(string $twitter = null)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param string|null $linkedin
     * 
     * @return Account
     */
    public function setLinkedin(string $linkedin = null)
    {
        $this->linkedin = $linkedin;
        
        return $this;
    }

    /**
     * @return int
     */
    public function getTerritoryId(): int
    {
        return $this->territoryId;
    }

    /**
     * @param int|null $territoryId
     * 
     * @return Account
     */
    public function setTerritoryId(int $territoryId = null)
    {
        $this->territoryId = $territoryId;
        
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     * 
     * @return Account
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     * 
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array|null $customFields
     *
     * @return $this
     */
    public function setCustomFields(array $customFields = null)
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @param string $fieldName
     * @param string $value
     *
     * @return $this
     */
    public function setCustomField(string $fieldName, string $value)
    {
        $this->customFields[$fieldName] = $value;

        return $this;
    }

    /**
     * @param string $fieldName
     *
     * @return mixed|null
     */
    public function getCustomField(string $fieldName) {
        if (! array_key_exists($fieldName, $this->customFields)) {
            return null;
        }

        return $this->customFields[$fieldName];
    }
    
    public function getAddAction(): string
    {
        return 'sales_accounts';
    }

    public function getDeleteAction(): string
    {
        // TODO: Implement getDeleteAction() method.
    }

    public function getUpdateAction(): string
    {
        return 'sales_accounts/' . $this->getId();
    }

    public function getGetAction(array $include = null): string
    {
        return 'sales_accounts';
    }

    public function getFilteredSearchAction(): string
    {
        return 'filtered_search/sales_account';
    }

    public function toArray(): array
    {
        $account = [
            'sales_account' => [
                'id' => $this->getId(),
                'name' => $this->getName(),
                'address' => $this->getAddress(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'zipcode' => $this->getZipcode(),
                'industry_type_id' => $this->getIndustryTypeId(),
                'business_type_id' => $this->getBusinessTypeId(),
                'numbers_of_employees' => $this->getNumbersOfEmployees(),
                'annual_revenue' => $this->getAnnualRevenue(),
                'website' => $this->getWebsite(),
                'phone' => $this->getPhone(),
                'owner_id' => $this->getOwnerId(),
                'facebook' => $this->getFacebook(),
                'twitter' => $this->getTwitter(),
                'linedin' => $this->getLinkedin(),
                'territory_id' => $this->getTerritoryId(),
                'created_at' => $this->getCreatedAt()
            ]
        ];

        if (null !== $this->getCustomFields()) {
            $account['sales_account']['custom_field'] = $this->getCustomFields();
        }
    }

}
