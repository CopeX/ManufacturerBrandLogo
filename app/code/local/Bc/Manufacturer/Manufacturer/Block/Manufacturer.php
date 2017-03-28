<?php
class Bc_Manufacturer_Block_Manufacturer extends Mage_Core_Block_Template
{
    const XML_ENABLED = "manufacturer_config/general/extension_on_off";



	public function _toHtml()
    {

        if(!Mage::getStoreConfig(self::XML_ENABLED)){

            return $this;
        }

        return parent::_toHtml();

    }
    
     public function getManufacturer()     
     { 
        if (!$this->hasData('manufacturer')) {
            $this->setData('manufacturer', Mage::registry('manufacturer'));
        }
        return $this->getData('manufacturer');
        
    }
}