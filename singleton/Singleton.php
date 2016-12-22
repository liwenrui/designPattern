<?php

/**
 * 懒汉模式
 */
class Singleton{

    /**
     * 一个私有的指向自己的静态变量
     */
    private static $_instance = null;


    /**
     * 私有的构造方法,保证不能从外部创建对象
     */
    private function __construct(){}

    /**
     * 魔法方法禁止clone对象
     */
    private function __clone(){}

    /**
     * 获取实例
     */
    public static function getInstance(){
        if (!self::$_instance instanceof self) {
          self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * 测试方法
     */
    public function test(){
        echo "这是个测试 \n";
    }
}
