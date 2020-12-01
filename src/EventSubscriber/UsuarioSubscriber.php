<?php

namespace App\EventSubscriber;

use App\Entity\Usuario;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

class UsuarioSubscriber implements EventSubscriberInterface
{

    private $security;
    private $passwordEncoder;

    public function __construct(Security $security, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->security = $security;
        $this->passwordEncoder = $passwordEncoder;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => [['setPassword'], ['setRoles'], ['setFechaRegistro']]
        ];
    }

    public function setPassword(BeforeEntityPersistedEvent $e)
    {
        $entity = $e->getEntityInstance();
        if ($entity instanceof Usuario) {
            $entity->setPassword($this->passwordEncoder->encodePassword($entity, $entity->getId()));
        }
    }

    public function setRoles(BeforeEntityPersistedEvent $e)
    {
        $entity = $e->getEntityInstance();
        if ($entity instanceof Usuario) {
            $entity->setRoles(['ROLE_USER']);
        }
    }

    public function setFechaRegistro(BeforeEntityPersistedEvent $e)
    {
        $entity = $e->getEntityInstance();
        if ($entity instanceof Usuario) {
            $entity->setFechaRegistro(date("Y-m-d H:i:s"));
        }
    }

}

?>