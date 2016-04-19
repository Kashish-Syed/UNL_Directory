<?php
class UNL_PeopleFinder_Developers_Record extends UNL_PeopleFinder_Developers_AbstractResource
{
    /**
     * @return string - a brief description of the resource
     */
    public function getTitle()
    {
        return 'Person Record';
    }

    /**
     * @return string - a brief description of the resource
     */
    public function getDescription()
    {
        return 'Get detailed information about an individual person';
    }

    /**
     * @return mixed - an associative array of property=>description
     */
    public function getAvailableFormats()
    {
        return array(self::FORMAT_JSON, self::FORMAT_XML, self::FORMAT_PARTIAL);
    }

    /**
     * @return array - an associative array of property=>description
     */
    public function getJsonProperties()
    {
        return array(
            'dn' => '(String) Distinguished name, a combination of uid, ou and dc',
            'cn' => '(Array) An array of common names',
            'ou' => '(Array) An array of organizational units that this person is part of',
            'eduPersonAffiliation' => '(Array) An array of affiliation types',
            'eduPersonNickname' => 'The person\'s preferred nickname',
            'eduPersonPrimaryAffiliation' => '(Array) An array of primary affiliations',
            'eduPersonPrincipalName' => '(array) An array of Email Addresses',
            'givenName' => '(Array) An array of given Name',
            'displayName' => '(Array) An array of display names',
            'mail' => '(Array) An array of email addresses',
            'postalAddress' => '(Array) An array of postal addresses',
            'sn' => '(Array) An array of surnames',
            'telephoneNumber' => '(Array) An array of telephone numbers',
            'title' => '(Array) An array of titles',
            'uid' => '(String) The person\'s unique ID',
            'unlHROrgUnitNumber' => '(Array) An array of HR organizational unit numbers',
            'unlHRPrimaryDepartment' => '(Array) An array of primary department names',
            'unlHRAddress' => '(Array) An array of addresses for HR use',
            'unlSISClassLevel' => '(Array) An array of class levels',
            'unlSISCollege' => '(Array) An array of colleges that the student is a member of',
            'unlSISMajor' => '(Array) An array of majors that the student is working toward',
            'unlSISMinor' => '(Array) An array of minors that the student is working toward',
            'unlEmailAlias' => '(Array) An array of email aliases',
            'imageURL' => '(Array) A URL to the person\'s profile picture',
            'unlDirectoryAddress' => '(Object) UNL address with street-address, locality, region, postal-code, unlBuildingCode and roomNumber fields.',
            'knowledge' => '(Object) Detailed information about a faculty member including a bio, courses, education, grants, honors, papers, presentations, and performances. This information is only available for faculty.',
        );
    }

    /**
     * @return array - an associative array of property=>description
     */
    public function getXmlProperties()
    {
        return array(
            'dn' => 'Distinguished name, a combination of uid, ou and dc',
            'cn' => 'Common name (there can be multiples of these)',
            'ou' => 'organizational unit name that this person is part of (there can be multiples of these)',
            'eduPersonAffiliation' => 'affiliation type (faculty/staff) (there can be multiples of these)',
            'eduPersonPrimaryAffiliation' => 'primary affiliation (there can be multiples of these)',
            'eduPersonPrincipalName' => 'Email Address (there can be multiples of these)',
            'givenName' => 'Given name (there can be multiples of these)',
            'displayName' => 'Display name (there can be multiples of these)',
            'mail' => 'Email address (there can be multiples of these)',
            'postalAddress' => 'postal address (there can be multiples of these)',
            'sn' => 'Surname (there can be multiples of these)',
            'telephoneNumber' => 'telephone number (there can be multiples of these)',
            'title' => 'position title (there can be multiples of these)',
            'uid' => 'The person\'s unique ID',
            'unlHROrgUnitNumber' => 'HR organizational unit number (there can be multiples of these)',
            'unlHRPrimaryDepartment' => 'primary department name (there can be multiples of these)',
            'unlHRAddress' => 'address, for HR use (there can be multiples of these)',
            'unlSISClassLevel' => 'class levels including NST (non-student), 2ND (2nd degree student), FR (freshmen), SO (Sophomore), JR (Junior), SR (senior), GR (Graduate student), P1-4 (Professional Student Year 1-4), 03-04 (Program student year 3-4)(there can be multiples of these)',
            'unlSISCollege' => 'college that the student is a member of (there can be multiples of these)',
            'unlSISMajor' => 'major that the student is working toward (there can be multiples of these)',
            'unlSISMinor' => 'minor that the student is working toward (there can be multiples of these)',
            'unlEmailAlias' => 'email alias (there can be multiples of these)',
            'imageURL' => 'A URL to the person\'s profile picture',
            'unlDirectoryAddress' => 'UNL address with street-address, locality, region, postal-code, unlBuildingCode and roomNumber child elements.',
            'knowledge' => 'Detailed information about a faculty member including a bio, courses, education, grants, honors, papers, presentations, and performances. This information is only available for faculty.',
        );
    }

    /**
     * @return string - the absolute URL for the resource with placeholders
     */
    public function getURI()
    {
        return UNL_Peoplefinder::$url . 'service.php?uid={uid}';
    }

    /**
     * @return string - the absolute URL for the resource with placeholders filled in
     */
    public function getExampleURI()
    {
        return UNL_Peoplefinder::$url . 'service.php?uid=lperez1';
    }
}
