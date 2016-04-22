<?php

namespace ZF\Doctrine\Audit\Api\V1\Rpc\RevisionEntityValue;

class RevisionEntityValueControllerFactory
{
    public function __invoke($controllers)
    {
        $revisionEntityValueController = new RevisionEntityValueController();

        $config = $controllers->getServiceLocator()->get('Config');

        $revisionEntityValueController->setObjectManager(
            $controllers->getServiceLocator()->get(
                $config['zf-doctrine-audit']['audit_object_manager']
            )
        );

        return $revisionEntityValueController;
    }
}
