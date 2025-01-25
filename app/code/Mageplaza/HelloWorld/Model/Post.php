<?php
namespace Mageplaza\HelloWorld\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Post');
    }
}
