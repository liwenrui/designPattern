<?php
/**
 *  乘法类,继承运算类
 *
 */
class OperationMul extends Operation
{

    public function getResult( $numberA , $numberB )
    {
   
        $result = 0;
        $result = $numberA * $numberB;

        return $result;
    }
}
