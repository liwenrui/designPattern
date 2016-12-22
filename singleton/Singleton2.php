<?php

/**
 * 饿汉模式
 */
class Singleton2{

    /**
     * PHP没有饿汉模式,这样new会报错误
     * Parse error: syntax error, unexpected 'new' (T_NEW) in xxxxxxx 12
     */
    private static $_instance = new self;


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
        return self::$_instance;
    }

}
