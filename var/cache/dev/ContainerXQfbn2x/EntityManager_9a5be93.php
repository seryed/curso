<?php

namespace ContainerXQfbn2x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9977 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb85b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8c68 = [
        
    ];

    public function getConnection()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getConnection', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getMetadataFactory', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getExpressionBuilder', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'beginTransaction', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getCache', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'transactional', array('func' => $func), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->transactional($func);
    }

    public function commit()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'commit', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->commit();
    }

    public function rollback()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'rollback', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getClassMetadata', array('className' => $className), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'createQuery', array('dql' => $dql), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'createNamedQuery', array('name' => $name), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'createQueryBuilder', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'flush', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'clear', array('entityName' => $entityName), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->clear($entityName);
    }

    public function close()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'close', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->close();
    }

    public function persist($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'persist', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'remove', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'refresh', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'detach', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'merge', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'contains', array('entity' => $entity), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getEventManager', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getConfiguration', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'isOpen', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getUnitOfWork', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getProxyFactory', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'initializeObject', array('obj' => $obj), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'getFilters', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'isFiltersStateClean', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'hasFilters', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return $this->valueHoldera9977->hasFilters();
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

        $instance->initializereb85b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera9977) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9977 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9977->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__get', ['name' => $name], $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        if (isset(self::$publicPropertiese8c68[$name])) {
            return $this->valueHoldera9977->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9977;

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

        $targetObject = $this->valueHoldera9977;
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
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9977;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera9977;
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
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__isset', array('name' => $name), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9977;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera9977;
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
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__unset', array('name' => $name), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9977;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera9977;
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
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__clone', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        $this->valueHoldera9977 = clone $this->valueHoldera9977;
    }

    public function __sleep()
    {
        $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, '__sleep', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;

        return array('valueHoldera9977');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb85b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb85b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb85b && ($this->initializereb85b->__invoke($valueHoldera9977, $this, 'initializeProxy', array(), $this->initializereb85b) || 1) && $this->valueHoldera9977 = $valueHoldera9977;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9977;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9977;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
