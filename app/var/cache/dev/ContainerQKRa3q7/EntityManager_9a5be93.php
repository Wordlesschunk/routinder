<?php

namespace ContainerQKRa3q7;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder054fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78797 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3661 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getConnection', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getMetadataFactory', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getExpressionBuilder', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'beginTransaction', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getCache', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'transactional', array('func' => $func), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->transactional($func);
    }

    public function commit()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'commit', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->commit();
    }

    public function rollback()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'rollback', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'createQuery', array('dql' => $dql), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'createQueryBuilder', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'flush', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'clear', array('entityName' => $entityName), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'close', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->close();
    }

    public function persist($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'persist', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'remove', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'refresh', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'detach', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'merge', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'contains', array('entity' => $entity), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getEventManager', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getConfiguration', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'isOpen', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getUnitOfWork', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getProxyFactory', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'getFilters', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'isFiltersStateClean', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'hasFilters', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return $this->valueHolder054fa->hasFilters();
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

        $instance->initializer78797 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder054fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder054fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder054fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__get', ['name' => $name], $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        if (isset(self::$publicPropertiesd3661[$name])) {
            return $this->valueHolder054fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder054fa;

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

        $targetObject = $this->valueHolder054fa;
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
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder054fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder054fa;
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
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__isset', array('name' => $name), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder054fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder054fa;
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
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__unset', array('name' => $name), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder054fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder054fa;
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
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__clone', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        $this->valueHolder054fa = clone $this->valueHolder054fa;
    }

    public function __sleep()
    {
        $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, '__sleep', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;

        return array('valueHolder054fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78797 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78797;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78797 && ($this->initializer78797->__invoke($valueHolder054fa, $this, 'initializeProxy', array(), $this->initializer78797) || 1) && $this->valueHolder054fa = $valueHolder054fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder054fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder054fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
