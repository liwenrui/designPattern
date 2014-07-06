<?php
/**
 *
 *
 */

class Context
{

    private $_strategy;

    public function __construct( $_strategy )
    {
    
        $this->_strategy = $_strategy;
    }

    public function ContextInterface()
    {
    
        $this->_strategy->AlgorithmInterface();
    }

    /**
     *  这种是结合简单工厂模式,解决创建对象的问题.
     *  客户端不需要知道要创建的对象名称,而是string就可以了
     *
     */
    public static function getInstance( $algorithm )
    {
        switch( $algorithm )
        {
            case '算法A':
                return new self( new ConcreateStratA );
                break;

            case '算法B':
                return new self( new ConcreateStratB );
                break;

            case '算法C':
                return new self( new ConcreateStratC );
                break;

            default:
                throw new Exception ('详情请咨询100086' , -1);
                break;
        }
    }

    /**
     * 这倒是不用switch了.自己想出来的,不用switch了,不知道算那种模式 
     */
    public static function getInstance2( $algorithm )
    {
    
        return new self( new $algorithm );
    }
}
