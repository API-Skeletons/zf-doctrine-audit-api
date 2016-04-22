<?php

namespace ZF\Doctrine\Audit\Api\V1\Rpc\RevisionEntityValue;

use Zend\Mvc\Controller\AbstractActionController;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use DoctrineModule\Persistence\ProvidesObjectManager;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
use ZF\ContentNegotiation\ViewModel;

class RevisionEntityValueController extends AbstractActionController implements
    ObjectManagerAwareInterface
{
    use ProvidesObjectManager;

    public function revisionEntityValueAction()
    {
        $revisionEntity = $this->getObjectManager()->getRepository('ZF\Doctrine\Audit\Entity\RevisionEntity')
            ->find($this->params()->fromRoute('revision_entity_id'));

        $auditEntity = $this->getObjectManager()->getRepository($revisionEntity->getTargetEntity()->getAuditEntity()->getName())
            ->findOneBy([
                'revisionEntity' => $revisionEntity,
            ]);

        $hydrator = new DoctrineHydrator($this->getObjectManager(), false);

        $data = $hydrator->extract($auditEntity);
        unset($data['revisionEntity']);

        ksort($data);

        return new ViewModel(['payload' => $data]);
    }
}
