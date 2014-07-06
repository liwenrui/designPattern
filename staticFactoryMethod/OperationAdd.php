<?php
/**
 *  加法类,继承运算类
 *
 */
class OperationAdd extends Operation
{

    //重写父类的方法   
    public function getResult( $numberA , $numberB )
    {
   
        $result = 0;
        $result = $numberA + $numberB;

        return $result;
    }
}
