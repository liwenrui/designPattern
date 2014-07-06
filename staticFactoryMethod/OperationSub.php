<?php
/**
 *  减法类,继承运算类
 *
 */
class OperationSub extends Operation
{

    public function getResult( $numberA , $numberB )
    {
   
        $result = 0;
        $result = $numberA - $numberB;

        return $result;
    }
}
