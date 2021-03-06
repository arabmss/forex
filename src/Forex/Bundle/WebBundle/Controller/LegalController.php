<?php

namespace Forex\Bundle\WebBundle\Controller;

use Forex\Bundle\CoreBundle\Controller\CoreController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/{_locale}/legal", defaults={"_locale" = "en"}, requirements={"_locale" = "en|fr"})
 */
class LegalController extends CoreController
{
    /**
     * @Route("/privacy-policy", name="privacy-policy", options={"sitemap" = true})
     * @Template
     */
    public function privacyAction()
    {
        return array();
    }

    /**
     * @Route("/registration-agreement", name="registration-agreement", options={"sitemap" = true})
     * @Template
     */
    public function registrationAgreementAction()
    {
        return array();
    }

    /**
     * @Route("/risk-disclosure-statment", name="risk-disclosure", options={"sitemap" = true})
     * @Template
     */
    public function riskDisclosureAction()
    {
        return array();
    }
}
