<?php

namespace Fazland\Freshsales\Data;

/**
 * @author Daniele Rapisarda <daniele.rapisarda@fazland.com>
 */
class Contact implements ObjectInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * string.
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var string
     */
    private $department;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $workNumber;

    /**
     * @var string
     */
    private $mobileNumber;

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
     * @var string
     */
    private $country;

    /**
     * @var int
     */
    private $salesAccountId;

    /**
     * @var int
     */
    private $leadSourceId;

    /**
     * @var int
     */
    private $ownerId;

    /**
     * @var bool
     */
    private $hasAuthority;

    /**
     * @var bool
     */
    private $doNotDisturb;

    /**
     * @var string
     */
    private $medium;

    /**
     * @var int
     */
    private $campaignId;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var string
     */
    private $timeZone;

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
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * This array collects all the custom fields to be saved in the usual "key" => "value" fashion.
     * BEWARE: to use a custom field, you have to create it in the Freshsales Administration panel > Contact Fields area.
     * When this comment has been wrote, the url was <your domain>/settings/contacts/fields .
     * After the field creation, open his edit panel. The proper name to use as field key is displayed in the
     * "Internal name" area of the editing panel. When this comment has been wrote, the key name was generated to be
     * in the shape of cf_<snake_case name of your field>
     *
     * @var array
     */
    private $customFields;

    /**
     * Contact constructor.
     */
    public function __construct()
    {
        $this->customFields = [];
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     *
     * @return $this
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param string $department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkNumber()
    {
        return $this->workNumber;
    }

    /**
     * @param string $workNumber
     *
     * @return $this
     */
    public function setWorkNumber($workNumber)
    {
        $this->workNumber = $workNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     *
     * @return $this
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

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
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
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
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
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
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
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
     * @param string $zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return int
     */
    public function getSalesAccountId()
    {
        return $this->salesAccountId;
    }

    /**
     * @param int $salesAccountId
     *
     * @return $this
     */
    public function setSalesAccountId($salesAccountId)
    {
        $this->salesAccountId = $salesAccountId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLeadSourceId()
    {
        return $this->leadSourceId;
    }

    /**
     * @param int $leadSourceId
     *
     * @return $this
     */
    public function setLeadSourceId($leadSourceId)
    {
        $this->leadSourceId = $leadSourceId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHasAuthority()
    {
        return true == $this->hasAuthority;
    }

    /**
     * @param bool $hasAuthority
     *
     * @return $this
     */
    public function setHasAuthority($hasAuthority)
    {
        $this->hasAuthority = $hasAuthority;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDoNotDisturb()
    {
        return true == $this->doNotDisturb;
    }

    /**
     * @param bool $doNotDisturb
     *
     * @return $this
     */
    public function setDoNotDisturb($doNotDisturb)
    {
        $this->doNotDisturb = $doNotDisturb;

        return $this;
    }

    /**
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param string $medium
     *
     * @return $this
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     *
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

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
     * @param string $facebook
     *
     * @return $this
     */
    public function setFacebook($facebook)
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
     * @param string $twitter
     *
     * @return $this
     */
    public function setTwitter($twitter)
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
     * @param string $linkedin
     *
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

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
     * @param \DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
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
     * @param \DateTime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
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
     * @param array $customFields
     * @return $this
     */
    public function setCustomFields(array $customFields): Contact
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

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {

        $contact = [
            'contact' => [
                'id' => $this->getId(),
                'first_name' => $this->getFirstName(),
                'last_name' => $this->getLastName(),
                'job_title' => $this->getJobTitle(),
                'department' => $this->getDepartment(),
                'email' => $this->getEmail(),
                'work_number' => $this->getWorkNumber(),
                'mobile_number' => $this->getMobileNumber(),
                'address' => $this->getAddress(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'zipcode' => $this->getZipcode(),
                'country' => $this->getCountry(),
                'sales_account_id' => $this->getSalesAccountId(),
                'lead_source_id' => $this->getLeadSourceId(),
                'owner_id' => $this->getOwnerId(),
                'has_authority' => $this->isHasAuthority(),
                'do_not_disturb' => $this->isDoNotDisturb(),
                'medium' => $this->getMedium(),
                'campaign_id' => $this->getCampaignId(),
                'keyword' => $this->getKeyword(),
                'time_zone' => $this->getTimeZone(),
                'facebook' => $this->getFacebook(),
                'twitter' => $this->getTwitter(),
                'linkedin' => $this->getLinkedin(),
                'created_at' => $this->getCreatedAt(),
            ]
        ];

        if (null !== $this->getCustomFields()) {
            $contact['contact']['custom_field'] = $this->getCustomFields();
        }

        return $contact;
    }

    /**
     * {@inheritdoc}
     */
    public function getAddAction(): string
    {
        return 'contacts';
    }

    public function getDeleteAction(): string
    {
        //@todo
    }

    public function getUpdateAction(): string
    {
        return 'contacts/' . $this->getId();
    }

    public function getGetAction(array $include = null): string
    {
        return 'contacts/' . $this->getId() . '?' . http_build_query($include);
    }

    public function getFilteredSearchAction(): string
    {
        return 'filtered_search/contact';
    }

}
