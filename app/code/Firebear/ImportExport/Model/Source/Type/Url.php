<?php
/**
 * @copyright: Copyright © 2015 Firebear Studio. All rights reserved.
 * @author: Firebear Studio <fbeardev@gmail.com>
 */

namespace Firebear\ImportExport\Model\Source\Type;

class Url extends AbstractType
{
    public function uploadSource()
    {


        throw new \Magento\Framework\Exception\LocalizedException(__("Can't fetch the url"));
    }
}