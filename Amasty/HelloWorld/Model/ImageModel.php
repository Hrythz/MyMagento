<?php
 
namespace Amasty\HelloWorld\Model;

class ImageModel extends \Magento\Config\Model\Config\Backend\File
{
    /**
     * @return string[]
     */

    /**
     * restrict extensions allowed for file upload
     */
    public function getAllowedExtensions() {
        return ['jpg', 'png', 'jpeg', 'gif'];
    }
}