vendor/symfony/service-contracts/ServiceMethodsSubscriberTrait.php [69:79]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function setContainer(ContainerInterface $container): ?ContainerInterface
    {
        $ret = null;
        if (method_exists(get_parent_class(self::class) ?: '', __FUNCTION__)) {
            $ret = parent::setContainer($container);
        }

        $this->container = $container;

        return $ret;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



vendor/symfony/service-contracts/ServiceSubscriberTrait.php [73:83]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    public function setContainer(ContainerInterface $container): ?ContainerInterface
    {
        $ret = null;
        if (method_exists(get_parent_class(self::class) ?: '', __FUNCTION__)) {
            $ret = parent::setContainer($container);
        }

        $this->container = $container;

        return $ret;
    }
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



