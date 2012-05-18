<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Propel\Generator\Model;

/**
 * Information related to an ID method strategy.
 *
 * @author Hans Lellelid <hans@xmpl.org> (Propel)
 * @author John McNally <jmcnally@collab.net> (Torque)
 * @author Daniel Rall <dlr@collab.net> (Torque)
 * @author Hugo Hamon <webmaster@apprendre-php.com>
 */
class IdMethodParameter extends MappingModel
{
    private $name;
    private $value;
    private $parentTable;

    protected function setupObject()
    {
        $this->name = $this->getAttribute('name');
        $this->value = $this->getAttribute('value');
    }

    /**
     * Returns the parameter name.
     *
     * @param string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the parameter name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the parameter value.
     *
     * @param mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the parameter value.
     *
     * @param mixed $name
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Sets the parent table.
     *
     * @param Table $table
     */
    public function setTable(Table $parent)
    {
        $this->parentTable = $parent;
    }

    /**
     * Returns the parent table.
     *
     * @return Table
     */
    public function getTable()
    {
        return $this->parentTable;
    }

    /**
     * Returns the parent table name.
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->parentTable->getName();
    }

    public function appendXml(\DOMNode $node)
    {
        $doc = ($node instanceof \DOMDocument) ? $node : $node->ownerDocument;

        $paramNode = $node->appendChild($doc->createElement('id-method-parameter'));
        if ($this->getName()) {
            $paramNode->setAttribute('name', $this->getName());
        }
        $paramNode->setAttribute('value', $this->getValue());
    }
}
