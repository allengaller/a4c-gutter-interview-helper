<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Soap\Wsdl\ComplexTypeStrategy;

/**
 * Zend_Soap_Wsdl_Strategy_AnyType
 */
class AnyType implements ComplexTypeStrategyInterface
{
    /**
     * Not needed in this strategy.
     *
     * @param \Zend\Soap\Wsdl $context
     */
    public function setContext(\Zend\Soap\Wsdl $context)
    {

    }

    /**
     * Returns xsd:anyType regardless of the input.
     *
     * @param string $type
     * @return string
     */
    public function addComplexType($type)
    {
        return 'xsd:anyType';
    }
}
