<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\ResourceModel\Amazon;

class Marketplace extends \Ess\M2ePro\Model\ResourceModel\ActiveRecord\Component\Child\AbstractDb
{
    protected $_isPkAutoIncrement = false;

    //########################################

    public function _construct()
    {
        $this->_init('m2epro_amazon_marketplace', 'marketplace_id');
        $this->_isPkAutoIncrement = false;
    }

    //########################################
}