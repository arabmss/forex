<?php

namespace Forex\Bundle\WebBundle\Controller\Account;

use Forex\Bundle\CoreBundle\Controller\CoreController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/account/{_locale}/payout", defaults={"_locale" = "en"}, schemes={"https"})
 */
class PayoutController extends CoreController
{
    /**
     * @Route("/list", name="payout_list")
     * @Template
     */
    public function listAction()
    {
        $user = $this->getUser();

        return array(
            'user' => $user,
        );
    }
}
