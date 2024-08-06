<?php

namespace GymBeam\CrudTest\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Submit extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
        if (!$post) {
            return $this->_redirect('*/*/');
        }
        // Process form data here

        $this->messageManager->addSuccessMessage('Form submitted successfully.');
        return $this->_redirect('*/*/');
    }
}

