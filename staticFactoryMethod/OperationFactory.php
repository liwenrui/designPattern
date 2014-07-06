<?php
/**
 *  工厂类
 *
 */
class OperationFactory
{

    public static function createOperate( $operate )
    {
    
        $oper = null;

        switch( $operate )
        {
        
            case '+':
                $oper = new OperationAdd();
                break;

            case '-':
                $oper = new OperationSub();
                break;

            case '*':
                $oper = new OperationMul();
                break;

            case '/':
                $oper = new OperationDiv();
                break;

            default:
                break;
        }

        return $oper;
    }
}
