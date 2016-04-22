<?php
namespace ZF\Doctrine\Audit\Api;

use ZF\Apigility\Provider\ApigilityProviderInterface;
use ZF\Doctrine\Audit\Entity\RevisionEntity;

class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function onBootstrap($e)
    {
        $app = $e->getTarget();
        $services = $app->getServiceManager();
        $helpers  = $services->get('ViewHelperManager');
        $hal      = $helpers->get('Hal');

        $hal->getEventManager()->attach('renderEntity', array($this, 'onRenderEntity'));
    }

    public function onRenderEntity($e)
    {
        $entity = $e->getParam('entity');

        /**
         * Attach a link to the revision entity data
         */
        if (! $entity->entity instanceof RevisionEntity) {
            // do nothing
            return;
        }

        $entity->getLinks()->add(\ZF\Hal\Link\Link::factory(array(
            'rel' => 'revisionEntityData',
            'route' => array(
                'name' => 'zf.doctrine.audit.api.rpc.revision-entity-value',
                'params' => array(
                    'revision_entity_id' => $entity->entity->getId(),
                ),
            ),
        )));
    }
}
