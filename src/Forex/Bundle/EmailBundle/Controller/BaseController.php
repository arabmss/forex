<?php

namespace Forex\Bundle\EmailBundle\Controller;

use Forex\Bundle\CoreBundle\Controller\CoreController;
use Forex\Bundle\EmailBundle\Entity\EmailMessage;

class BaseController extends CoreController
{
    protected function findEmailMessage($id)
    {
        $message = $this->getRepository('ForexEmailBundle:EmailMessage')->find($id);

        return $message;
    }

    protected function getForexEmailSender()
    {
        return $this->get('forex.email_sender');
    }
}
