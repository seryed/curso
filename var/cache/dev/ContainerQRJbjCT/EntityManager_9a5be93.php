<?php

namespace ContainerQRJbjCT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb9d2c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4a10 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23a05 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getConnection', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getMetadataFactory', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getExpressionBuilder', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'beginTransaction', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getCache', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'transactional', array('func' => $func), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->transactional($func);
    }

    public function commit()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'commit', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->commit();
    }

    public function rollback()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'rollback', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getClassMetadata', array('className' => $className), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'createQuery', array('dql' => $dql), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'createNamedQuery', array('name' => $name), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'createQueryBuilder', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'flush', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'clear', array('entityName' => $entityName), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->clear($entityName);
    }

    public function close()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'close', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->close();
    }

    public function persist($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'persist', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'remove', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'refresh', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'detach', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'merge', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'contains', array('entity' => $entity), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getEventManager', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getConfiguration', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'isOpen', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getUnitOfWork', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getProxyFactory', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'initializeObject', array('obj' => $obj), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'getFilters', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'isFiltersStateClean', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'hasFilters', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return $this->valueHolderb9d2c->hasFilters();
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

        $instance->initializerd4a10 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb9d2c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb9d2c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb9d2c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__get', ['name' => $name], $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        if (isset(self::$publicProperties23a05[$name])) {
            return $this->valueHolderb9d2c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d2c;

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

        $targetObject = $this->valueHolderb9d2c;
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
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d2c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb9d2c;
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
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__isset', array('name' => $name), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d2c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb9d2c;
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
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__unset', array('name' => $name), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9d2c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb9d2c;
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
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__clone', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        $this->valueHolderb9d2c = clone $this->valueHolderb9d2c;
    }

    public function __sleep()
    {
        $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, '__sleep', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;

        return array('valueHolderb9d2c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4a10 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4a10;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4a10 && ($this->initializerd4a10->__invoke($valueHolderb9d2c, $this, 'initializeProxy', array(), $this->initializerd4a10) || 1) && $this->valueHolderb9d2c = $valueHolderb9d2c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9d2c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9d2c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
