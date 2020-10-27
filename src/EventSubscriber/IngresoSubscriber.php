<?php

namespace App\EventSubscriber;

use App\Entity\Ingreso;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;

class IngresoSubscriber implements EventSubscriberInterface
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => [['setFechaIngreso'], ['setEstado']]
        ];
    }

    public function setFechaIngreso(BeforeEntityPersistedEvent $e)
    {
        $entity = $e->getEntityInstance();
        if ($entity instanceof Ingreso) {
            $entity->setFechaIngreso(date('Y-m-d H:i:m'));
        }
    }

    public function setEstado(BeforeEntityPersistedEvent $e)
    {
        $entity = $e->getEntityInstance();
        if ($entity instanceof Ingreso) {
            $entity->setEstado(true);
        }
    }

}

?>