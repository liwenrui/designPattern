<?php
/**
 *
 *  This is a userDefined function
 */

function __autoload( $className )
{
   $classPath = "./{$className}.php"; 

   if( file_exists( $classPath ) )
   {
   
       require_once( $classPath );
   }
   else
   {
   
        echo "class file {$classPath} not found";
   }
}
