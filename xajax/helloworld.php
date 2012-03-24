<?php

function sayHelloWorld()
{
    $objResponse = new xajaxResponse();
    $objResponse->addAlert( 'Hello world!' );
    return $objResponse->getXML();
}

?>