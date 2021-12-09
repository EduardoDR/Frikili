<?php

namespace ContainerXJbinXs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder37609 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerffc67 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb69bf = [
        
    ];

    public function getConnection()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getConnection', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getMetadataFactory', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getExpressionBuilder', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'beginTransaction', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getCache', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getCache();
    }

    public function transactional($func)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'transactional', array('func' => $func), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'wrapInTransaction', array('func' => $func), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'commit', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->commit();
    }

    public function rollback()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'rollback', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getClassMetadata', array('className' => $className), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'createQuery', array('dql' => $dql), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'createNamedQuery', array('name' => $name), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'createQueryBuilder', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'flush', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'clear', array('entityName' => $entityName), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->clear($entityName);
    }

    public function close()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'close', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->close();
    }

    public function persist($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'persist', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'remove', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'refresh', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'detach', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'merge', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getRepository', array('entityName' => $entityName), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'contains', array('entity' => $entity), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getEventManager', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getConfiguration', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'isOpen', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getUnitOfWork', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getProxyFactory', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'initializeObject', array('obj' => $obj), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'getFilters', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'isFiltersStateClean', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'hasFilters', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return $this->valueHolder37609->hasFilters();
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

        $instance->initializerffc67 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder37609) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37609 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder37609->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__get', ['name' => $name], $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        if (isset(self::$publicPropertiesb69bf[$name])) {
            return $this->valueHolder37609->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37609;

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

        $targetObject = $this->valueHolder37609;
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
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37609;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37609;
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
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__isset', array('name' => $name), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37609;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder37609;
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
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__unset', array('name' => $name), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37609;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder37609;
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
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__clone', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        $this->valueHolder37609 = clone $this->valueHolder37609;
    }

    public function __sleep()
    {
        $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, '__sleep', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;

        return array('valueHolder37609');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerffc67 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerffc67;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerffc67 && ($this->initializerffc67->__invoke($valueHolder37609, $this, 'initializeProxy', array(), $this->initializerffc67) || 1) && $this->valueHolder37609 = $valueHolder37609;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37609;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37609;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
