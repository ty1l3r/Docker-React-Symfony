<?php

namespace ContainerWg8xGJi;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e872 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6caf1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e261 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getConnection', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getMetadataFactory', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getExpressionBuilder', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'beginTransaction', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getCache', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'transactional', array('func' => $func), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->transactional($func);
    }

    public function commit()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'commit', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->commit();
    }

    public function rollback()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'rollback', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getClassMetadata', array('className' => $className), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'createQuery', array('dql' => $dql), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'createNamedQuery', array('name' => $name), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'createQueryBuilder', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'flush', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'clear', array('entityName' => $entityName), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->clear($entityName);
    }

    public function close()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'close', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->close();
    }

    public function persist($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'persist', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'remove', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'refresh', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'detach', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'merge', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'contains', array('entity' => $entity), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getEventManager', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getConfiguration', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'isOpen', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getUnitOfWork', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getProxyFactory', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'initializeObject', array('obj' => $obj), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'getFilters', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'isFiltersStateClean', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'hasFilters', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return $this->valueHolder7e872->hasFilters();
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

        $instance->initializer6caf1 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e872) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e872 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e872->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__get', ['name' => $name], $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        if (isset(self::$publicProperties7e261[$name])) {
            return $this->valueHolder7e872->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e872;

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

        $targetObject = $this->valueHolder7e872;
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
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e872;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e872;
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
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__isset', array('name' => $name), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e872;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e872;
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
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__unset', array('name' => $name), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e872;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e872;
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
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__clone', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        $this->valueHolder7e872 = clone $this->valueHolder7e872;
    }

    public function __sleep()
    {
        $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, '__sleep', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;

        return array('valueHolder7e872');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6caf1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6caf1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6caf1 && ($this->initializer6caf1->__invoke($valueHolder7e872, $this, 'initializeProxy', array(), $this->initializer6caf1) || 1) && $this->valueHolder7e872 = $valueHolder7e872;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e872;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e872;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
