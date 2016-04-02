<?php

    use Symfony\Component\DependencyInjection\Container;

    /**
 * ProjectServiceContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class ProjectServiceContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->methodMap = array(
            'foo' => 'getFooService',
        );
    }

    /**
     * Gets the 'foo' service.
     *
     * This service is autowired.
     *
     * @return \Foo A Foo instance.
     */
    protected function getFooService()
    {
        return $this->services['foo'] = new \Foo();
    }
}
