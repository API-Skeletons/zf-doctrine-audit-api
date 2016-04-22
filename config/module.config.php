<?php
return array(
    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                __DIR__ . '/../asset'
            ),
        ),
    ),

    'zf-apigility-doctrine-query-provider' => array(
        'invokables' => array(
            'zf-doctrine-audit-fetch-all' => 'ZF\\Doctrine\\QueryBuilder\\Query\\Provider\\DefaultOrm',
        ),
    ),
    'router' => array(
        'routes' => array(
            'audit-api.rest.doctrine.revision' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/revision[/:revision_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.revision-entity' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/revision-entity[/:revision_entity_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.field-revision' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/field-revision[/:field_revision_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.field' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/field[/:field_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.audit-entity' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/audit-entity[/:audit_entity_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.field-status' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/field-status[/:field_status_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.identifier' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/identifier[/:identifier_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.revision-entity-identifier-value' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/revision-entity-identifier-value[/:revision_entity_identifier_value_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.revision-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/revision-type[/:revision_type_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller',
                    ),
                ),
            ),
            'audit-api.rest.doctrine.target-entity' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/target-entity[/:target_entity_id]',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller',
                    ),
                ),
            ),
            'zf.doctrine.audit.api.rpc.revision-entity-value' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/audit/revision-entity-value/:revision_entity_id',
                    'defaults' => array(
                        'controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller',
                        'action' => 'revisionEntityValue',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'audit-api.rest.doctrine.revision',
            1 => 'audit-api.rest.doctrine.revision-entity',
            2 => 'audit-api.rest.doctrine.field-revision',
            3 => 'audit-api.rest.doctrine.field',
            4 => 'audit-api.rest.doctrine.audit-entity',
            5 => 'audit-api.rest.doctrine.field-status',
            6 => 'audit-api.rest.doctrine.identifier',
            7 => 'audit-api.rest.doctrine.revision-entity-identifier-value',
            8 => 'audit-api.rest.doctrine.revision-type',
            9 => 'audit-api.rest.doctrine.target-entity',
            10 => 'zf.doctrine.audit.api.rpc.revision-entity-value',
            11 => 'zf.doctrine.audit.api.rpc.revision-entity-value',
        ),
    ),
    'zf-rest' => array(
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionResource',
            'route_name' => 'audit-api.rest.doctrine.revision',
            'route_identifier_name' => 'revision_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'revision',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Revision',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionCollection',
            'service_name' => 'Revision',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityResource',
            'route_name' => 'audit-api.rest.doctrine.revision-entity',
            'route_identifier_name' => 'revision_entity_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'revision_entity',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionEntity',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityCollection',
            'service_name' => 'RevisionEntity',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionResource',
            'route_name' => 'audit-api.rest.doctrine.field-revision',
            'route_identifier_name' => 'field_revision_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'field_revision',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\FieldRevision',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionCollection',
            'service_name' => 'FieldRevision',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldResource',
            'route_name' => 'audit-api.rest.doctrine.field',
            'route_identifier_name' => 'field_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'field',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Field',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldCollection',
            'service_name' => 'Field',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityResource',
            'route_name' => 'audit-api.rest.doctrine.audit-entity',
            'route_identifier_name' => 'audit_entity_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'audit_entity',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\AuditEntity',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityCollection',
            'service_name' => 'AuditEntity',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusResource',
            'route_name' => 'audit-api.rest.doctrine.field-status',
            'route_identifier_name' => 'field_status_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'field_status',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\FieldStatus',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusCollection',
            'service_name' => 'FieldStatus',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierResource',
            'route_name' => 'audit-api.rest.doctrine.identifier',
            'route_identifier_name' => 'identifier_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'identifier',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Identifier',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierCollection',
            'service_name' => 'Identifier',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueResource',
            'route_name' => 'audit-api.rest.doctrine.revision-entity-identifier-value',
            'route_identifier_name' => 'revision_entity_identifier_value_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'revision_entity_identifier_value',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionEntityIdentifierValue',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueCollection',
            'service_name' => 'RevisionEntityIdentifierValue',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeResource',
            'route_name' => 'audit-api.rest.doctrine.revision-type',
            'route_identifier_name' => 'revision_type_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'revision_type',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionType',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeCollection',
            'service_name' => 'RevisionType',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller' => array(
            'listener' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityResource',
            'route_name' => 'audit-api.rest.doctrine.target-entity',
            'route_identifier_name' => 'target_entity_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'target_entity',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\TargetEntity',
            'collection_class' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityCollection',
            'service_name' => 'TargetEntity',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller' => 'HalJson',
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller' => 'Json',
        ),
        'accept-whitelist' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller' => array(
                0 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller' => array(
                0 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller' => array(
                0 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller' => array(
                0 => 'application/vnd.audit-api.v1+json',
                1 => 'application/json',
            ),
        ),
        'accept_whitelist' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller' => array(
                0 => 'application/vnd.zf.doctrine.audit.api.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
                3 => 'application/vnd.zf.doctrine.audit.api.v1+json',
                4 => 'application/json',
                5 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller' => array(
                0 => 'application/vnd.zf.doctrine.audit.api.v1+json',
                1 => 'application/json',
                2 => 'application/vnd.zf.doctrine.audit.api.v1+json',
                3 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'ZF\\Doctrine\\Audit\\Entity\\Revision' => array(
                'route_identifier_name' => 'revision_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\RevisionEntity' => array(
                'route_identifier_name' => 'revision_entity_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-entity',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-entity',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\FieldRevision' => array(
                'route_identifier_name' => 'field_revision_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field-revision',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field-revision',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\Field' => array(
                'route_identifier_name' => 'field_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\AuditEntity' => array(
                'route_identifier_name' => 'audit_entity_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.audit-entity',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.audit-entity',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\FieldStatus' => array(
                'route_identifier_name' => 'field_status_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field-status',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.field-status',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\Identifier' => array(
                'route_identifier_name' => 'identifier_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.identifier',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.identifier',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\RevisionEntityIdentifierValue' => array(
                'route_identifier_name' => 'revision_entity_identifier_value_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-entity-identifier-value',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-entity-identifier-value',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\RevisionType' => array(
                'route_identifier_name' => 'revision_type_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-type',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.revision-type',
                'is_collection' => true,
            ),
            'ZF\\Doctrine\\Audit\\Entity\\TargetEntity' => array(
                'route_identifier_name' => 'target_entity_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.target-entity',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityHydrator',
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'audit-api.rest.doctrine.target-entity',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
                'hydrator' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityHydrator',
                'query_providers' => array(
                    'default' => 'zf-doctrine-audit-fetch-all',
                ),
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\RevisionHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Revision',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'fieldRevision' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
                'revisionEntity' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
            ),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\RevisionEntityHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionEntity',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'revisionEntityIdentifierValue' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
            ),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\FieldRevisionHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\FieldRevision',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\FieldHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Field',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\AuditEntityHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\AuditEntity',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'targetEntity' => 'ZF\\Doctrine\\Hydrator\\Strategy\\EntityLink',
            ),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\FieldStatusHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\FieldStatus',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\IdentifierHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\Identifier',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'revisionEntityIdentifierValue' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
            ),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\RevisionEntityIdentifierValueHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionEntityIdentifierValue',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\RevisionTypeHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\RevisionType',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'revisionEntity' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
            ),
            'use_generated_hydrator' => true,
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\TargetEntityHydrator' => array(
            'entity_class' => 'ZF\\Doctrine\\Audit\\Entity\\TargetEntity',
            'object_manager' => 'doctrine.entitymanager.orm_zf_doctrine_audit',
            'by_value' => true,
            'strategies' => array(
                'revisionEntity' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
                'identifier' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
                'field' => 'ZF\\Doctrine\\Hydrator\\Strategy\\CollectionLink',
            ),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Validator',
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Controller' => array(
            'input_filter' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Revision\\Validator' => array(
            0 => array(
                'name' => 'createdAt',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'comment',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'userId',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'userName',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'userEmail',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntity\\Validator' => array(
            0 => array(
                'name' => 'title',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldRevision\\Validator' => array(),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Field\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'columnName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\AuditEntity\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'tableName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\FieldStatus\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\Identifier\\Validator' => array(
            0 => array(
                'name' => 'fieldName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'columnName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionEntityIdentifierValue\\Validator' => array(
            0 => array(
                'name' => 'value',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\RevisionType\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rest\\TargetEntity\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'tableName',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(),
            ),
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller' => 'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\RevisionEntityValueControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'ZF\\Doctrine\\Audit\\Api\\V1\\Rpc\\RevisionEntityValue\\Controller' => array(
            'service_name' => 'RevisionEntityValue',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'zf.doctrine.audit.api.rpc.revision-entity-value',
        ),
    ),
);
