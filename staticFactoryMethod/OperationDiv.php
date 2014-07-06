<?php
/**
 *  除法类,继承运算类
 *
 */
class OperationDiv extends Operation
{

    public function getResult( $numberA , $numberB )
    {
   
        $result = 0;
        if( 0 == $numberB )
        {
        
            throw new Exception( '除数不能为0' , -1 );
        }

        $result = $numberA / $numberB;

        return $result;
    }
}
