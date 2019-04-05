<?php
/**
 * Fluent interface(class) for PHP.
 *
 * Apache License 2.0
 * As is.
 */
class Fluent
{
    private $__context = null;

    public function __construct($context = null)
    {
        $this->__context = $context;
    }

    public function __getContext()
    {
        return $this->__context;
    }

    public function __wrapArray()
    {
        $this->__context = array($this->__context);
        return $this;
    }

    public function __get(string $name)
    {
        $this->__context = $this->__context->$name;
        return $this;
    }

    public function __set(string $name, $value)
    {
        $this->__context->$name = $value;
        return $this;
    }

    public function __call(string $method, $args)
    {
        if (is_null($this->__context)) {
            throw new Exception('Null pointer exception');
        }

        if (method_exists($this->__context, $method)) {
            $count = count($args);
            switch ($count) {
                case 0: $this->__context = $this->__context->$method(); break;
                case 1: $this->__context = $this->__context->$method($args[0]); break;
                case 2: $this->__context = $this->__context->$method($args[0], $args[1]); break;
                case 3: $this->__context = $this->__context->$method($args[0], $args[1], $args[2]); break;
                case 4: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3]); break;
                case 5: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3], $args[4]); break;
                case 6: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]); break;
                case 7: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6]); break;
                case 8: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7]); break;
                case 9: $this->__context = $this->__context->$method($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6], $args[7], $args[8]); break;
                default:
                    throw new Exception('Too may args');
                    break;
            }
        }

        return $this;
    }

    /*
    =============================================================
    It is a normal function from here.
    */

    /**
     * for array_keys()
     */
    public function __keys()
    {
        $this->__context = array_keys($this->__context);
        return $this;
    }

    /**
     * for array_values()
     */
    public function __values()
    {
        $this->__context = array_values($this->__context);
        return $this;
    }

    /**
     * for array_key_first()
     */
    public function __keyFirst()
    {
        $this->__context = array_key_first($this->__context);
        return $this;
    }

    /**
     * for array_last()
     */
    public function __keyLast()
    {
        $this->__context = array_key_last($this->__context);
        return $this;
    }

    /**
     * for array_walk()
     */
    public function __each(callable $func, $userdata = null)
    {
        $this->__context = array_walk($this->__context, $func, $userdata);
        return $this;
    }

    /**
     * for array_map()
     */
    public function __map(callable $func)
    {
        $this->__context = array_map($func, $this->__context);
        return $this;
    }

    /**
     * for array_redue()
     */
    public function __redue(callable $func, $initial = null)
    {
        $this->__context = array_map($this->__context, $func, $initial);
        return $this;
    }

    /**
     * for array_filter()
     */
    public function __filter(callable $func, int $flag = 0)
    {
        $this->__context = array_filter($this->__context, $func, $flag);
        return $this;
    }
}
