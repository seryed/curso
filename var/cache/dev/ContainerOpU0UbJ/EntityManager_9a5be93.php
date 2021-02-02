<?php

namespace ContainerOpU0UbJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8f069 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer65a89 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties10644 = [
        
    ];

    public function getConnection()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getConnection', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getMetadataFactory', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getExpressionBuilder', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'beginTransaction', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getCache', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getCache();
    }

    public function transactional($func)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'transactional', array('func' => $func), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->transactional($func);
    }

    public function commit()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'commit', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->commit();
    }

    public function rollback()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'rollback', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getClassMetadata', array('className' => $className), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'createQuery', array('dql' => $dql), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'createNamedQuery', array('name' => $name), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'createQueryBuilder', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'flush', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'clear', array('entityName' => $entityName), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->clear($entityName);
    }

    public function close()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'close', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->close();
    }

    public function persist($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'persist', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'remove', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'refresh', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'detach', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'merge', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getRepository', array('entityName' => $entityName), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'contains', array('entity' => $entity), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getEventManager', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getConfiguration', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'isOpen', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getUnitOfWork', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getProxyFactory', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'initializeObject', array('obj' => $obj), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'getFilters', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'isFiltersStateClean', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'hasFilters', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return $this->valueHolder8f069->hasFilters();
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

        $instance->initializer65a89 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8f069) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8f069 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8f069->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__get', ['name' => $name], $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        if (isset(self::$publicProperties10644[$name])) {
            return $this->valueHolder8f069->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f069;

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

        $targetObject = $this->valueHolder8f069;
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
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f069;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8f069;
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
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__isset', array('name' => $name), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f069;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8f069;
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
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__unset', array('name' => $name), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f069;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8f069;
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
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__clone', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        $this->valueHolder8f069 = clone $this->valueHolder8f069;
    }

    public function __sleep()
    {
        $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, '__sleep', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;

        return array('valueHolder8f069');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer65a89 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer65a89;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer65a89 && ($this->initializer65a89->__invoke($valueHolder8f069, $this, 'initializeProxy', array(), $this->initializer65a89) || 1) && $this->valueHolder8f069 = $valueHolder8f069;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f069;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f069;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
