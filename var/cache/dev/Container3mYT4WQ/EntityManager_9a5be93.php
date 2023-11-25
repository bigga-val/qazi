<?php

namespace Container3mYT4WQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere44d6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0910c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc6056 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getConnection', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getMetadataFactory', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getExpressionBuilder', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'beginTransaction', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getCache', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'transactional', array('func' => $func), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'commit', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->commit();
    }

    public function rollback()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'rollback', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getClassMetadata', array('className' => $className), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'createQuery', array('dql' => $dql), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'createNamedQuery', array('name' => $name), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'createQueryBuilder', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'flush', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'clear', array('entityName' => $entityName), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->clear($entityName);
    }

    public function close()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'close', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->close();
    }

    public function persist($entity)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'persist', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'remove', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'detach', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'merge', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'contains', array('entity' => $entity), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getEventManager', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getConfiguration', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'isOpen', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getUnitOfWork', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getProxyFactory', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'initializeObject', array('obj' => $obj), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'getFilters', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'isFiltersStateClean', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'hasFilters', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return $this->valueHoldere44d6->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0910c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldere44d6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere44d6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere44d6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__get', ['name' => $name], $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        if (isset(self::$publicPropertiesc6056[$name])) {
            return $this->valueHoldere44d6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere44d6;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere44d6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere44d6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere44d6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__isset', array('name' => $name), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere44d6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere44d6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__unset', array('name' => $name), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere44d6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere44d6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__clone', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        $this->valueHoldere44d6 = clone $this->valueHoldere44d6;
    }

    public function __sleep()
    {
        $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, '__sleep', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;

        return array('valueHoldere44d6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0910c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0910c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0910c && ($this->initializer0910c->__invoke($valueHoldere44d6, $this, 'initializeProxy', array(), $this->initializer0910c) || 1) && $this->valueHoldere44d6 = $valueHoldere44d6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere44d6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere44d6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
