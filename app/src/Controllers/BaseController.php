<?php

namespace App\Controller;

use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use \Doctrine\ORM\EntityManager as EntityManager;

class BaseController
{
    protected $view;
    protected $logger;
    protected $em;  // Entities Manager

    public function __construct(Twig $view, LoggerInterface $logger, EntityManager $em)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->em = $em;
    }
}