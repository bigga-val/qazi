<?php

namespace ContainerRxtddJx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder44d3c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63d2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b3e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getConnection', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getMetadataFactory', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getExpressionBuilder', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'beginTransaction', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getCache', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'transactional', array('func' => $func), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'commit', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->commit();
    }

    public function rollback()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'rollback', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getClassMetadata', array('className' => $className), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'createQuery', array('dql' => $dql), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'createNamedQuery', array('name' => $name), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'createQueryBuilder', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'flush', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'clear', array('entityName' => $entityName), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->clear($entityName);
    }

    public function close()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'close', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->close();
    }

    public function persist($entity)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'persist', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'remove', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'detach', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'merge', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'contains', array('entity' => $entity), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getEventManager', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getConfiguration', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'isOpen', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getUnitOfWork', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getProxyFactory', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'initializeObject', array('obj' => $obj), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'getFilters', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'isFiltersStateClean', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'hasFilters', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return $this->valueHolder44d3c->hasFilters();
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

        $instance->initializer63d2c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder44d3c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44d3c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder44d3c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__get', ['name' => $name], $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        if (isset(self::$publicProperties2b3e6[$name])) {
            return $this->valueHolder44d3c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d3c;

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

        $targetObject = $this->valueHolder44d3c;
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
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d3c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder44d3c;
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
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__isset', array('name' => $name), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d3c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder44d3c;
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
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__unset', array('name' => $name), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44d3c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder44d3c;
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
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__clone', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        $this->valueHolder44d3c = clone $this->valueHolder44d3c;
    }

    public function __sleep()
    {
        $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, '__sleep', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;

        return array('valueHolder44d3c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63d2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63d2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer63d2c && ($this->initializer63d2c->__invoke($valueHolder44d3c, $this, 'initializeProxy', array(), $this->initializer63d2c) || 1) && $this->valueHolder44d3c = $valueHolder44d3c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44d3c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44d3c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
