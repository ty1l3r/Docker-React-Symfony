<?php

namespace ContainerGRtvHjt;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder825c1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer147e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4d90 = [
        
    ];

    public function getConnection()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getConnection', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getMetadataFactory', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getExpressionBuilder', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'beginTransaction', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getCache', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'transactional', array('func' => $func), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->transactional($func);
    }

    public function commit()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'commit', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->commit();
    }

    public function rollback()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'rollback', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getClassMetadata', array('className' => $className), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'createQuery', array('dql' => $dql), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'createNamedQuery', array('name' => $name), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'createQueryBuilder', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'flush', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'clear', array('entityName' => $entityName), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->clear($entityName);
    }

    public function close()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'close', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->close();
    }

    public function persist($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'persist', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'remove', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'refresh', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'detach', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'merge', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'contains', array('entity' => $entity), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getEventManager', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getConfiguration', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'isOpen', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getUnitOfWork', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getProxyFactory', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'initializeObject', array('obj' => $obj), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'getFilters', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'isFiltersStateClean', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'hasFilters', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return $this->valueHolder825c1->hasFilters();
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

        $instance->initializer147e5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder825c1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder825c1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder825c1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__get', ['name' => $name], $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        if (isset(self::$publicPropertiesa4d90[$name])) {
            return $this->valueHolder825c1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder825c1;

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

        $targetObject = $this->valueHolder825c1;
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
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder825c1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder825c1;
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
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__isset', array('name' => $name), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder825c1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder825c1;
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
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__unset', array('name' => $name), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder825c1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder825c1;
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
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__clone', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        $this->valueHolder825c1 = clone $this->valueHolder825c1;
    }

    public function __sleep()
    {
        $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, '__sleep', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;

        return array('valueHolder825c1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer147e5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer147e5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer147e5 && ($this->initializer147e5->__invoke($valueHolder825c1, $this, 'initializeProxy', array(), $this->initializer147e5) || 1) && $this->valueHolder825c1 = $valueHolder825c1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder825c1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder825c1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
