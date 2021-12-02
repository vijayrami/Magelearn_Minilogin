<?php
namespace Magelearn\Minilogin\CustomerData;
use Magento\Customer\CustomerData\SectionSourceInterface;
 
class CustomSection implements SectionSourceInterface
{
    public function getSectionData()
    {
        return [
            'customdata' => "Congratulations !! You are logged in."
        ];
    }
}