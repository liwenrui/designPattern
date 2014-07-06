<?php
/**
 *  策略模式
 *
 *  策略模式定义了一系列的算法，并将每一个算法封装起来，而且使它们还可以相互替换。
 *  策略模式让算法独立于使用它的客户而独立变化。
 */

include '../autoload.php';

//策略模式
$context = new Context( new ConcreateStratA );
$context->contextInterface();

echo '<hr>';

//策略模式+简单工厂模式
$context = Context::getInstance( '算法B' );
$context->contextInterface();

echo '<hr>';
//策略模式+liwenrui模式
$context = Context::getInstance2( 'ConcreateStratC' );
$context->contextInterface();
