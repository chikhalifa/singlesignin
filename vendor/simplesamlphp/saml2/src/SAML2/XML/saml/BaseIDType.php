<?php

declare(strict_types=1);

/**
 * Base class corresponding to the BaseID element.
 *
 * @author Jaime Pérez Crespo, UNINETT AS <jaime.perez@uninett.no>
 * @package simplesamlphp/saml2
 */

namespace SAML2\XML\saml;

use DOMElement;
use SAML2\Constants;
use SAML2\DOMDocumentFactory;
use Serializable;

abstract class BaseIDType implements Serializable
{
    /**
     * The security or administrative domain that qualifies the identifier.
     * This attribute provides a means to federate identifiers from disparate user stores without collision.
     *
     * @see saml-core-2.0-os
     *
     * @var string|null
     */
    protected $NameQualifier = null;

    /**
     * Further qualifies an identifier with the name of a service provider or affiliation of providers.
     * This attribute provides an additional means to federate identifiers on the basis of the relying party or parties.
     *
     * @see saml-core-2.0-os
     *
     * @var string|null
     */
    protected $SPNameQualifier = null;

    /**
     * The name for this BaseID.
     *
     * Override in classes extending this class to get the desired name.
     *
     * @var string
     */
    protected $nodeName;

    /**
     * @var \DOMElement
     */
    protected $element;


    /**
     * Initialize a saml:BaseID, either from scratch or from an existing \DOMElement.
     *
     * @param \DOMElement|null $xml The XML element we should load, if any.
     */
    public function __construct(DOMElement $xml = null)
    {
        if ($xml === null) {
            return;
        }

        $this->element = $xml;

        if ($xml->hasAttribute('NameQualifier')) {
            $this->NameQualifier = $xml->getAttribute('NameQualifier');
        }

        if ($xml->hasAttribute('SPNameQualifier')) {
            $this->SPNameQualifier = $xml->getAttribute('SPNameQualifier');
        }
    }


    /**
     * Collect the value of the NameQualifier-property
     *
     * @return string|null
     */
    public function getNameQualifier() : ?string
    {
        return $this->NameQualifier;
    }


    /**
     * Set the value of the NameQualifier-property
     *
     * @param string|null $nameQualifier
     * @return void
     */
    public function setNameQualifier(string $nameQualifier = null) : void
    {
        $this->NameQualifier = $nameQualifier;
    }


    /**
     * Collect the value of the SPNameQualifier-property
     *
     * @return string|null
     */
    public function getSPNameQualifier() : ?string
    {
        return $this->SPNameQualifier;
    }


    /**
     * Set the value of the SPNameQualifier-property
     *
     * @param string|null $spNameQualifier
     * @return void
     */
    public function setSPNameQualifier(string $spNameQualifier = null) : void
    {
        $this->SPNameQualifier = $spNameQualifier;
    }


    /**
     * Convert this BaseID to XML.
     *
     * @param \DOMElement $parent The element we are converting to XML.
     * @return \DOMElement The XML element after adding the data corresponding to this BaseID.
     */
    public function toXML(DOMElement $parent = null) : DOMElement
    {
        if ($parent === null) {
            $parent = DOMDocumentFactory::create();
            $doc = $parent;
        } else {
            $doc = $parent->ownerDocument;
        }
        $element = $doc->createElementNS(Constants::NS_SAML, $this->nodeName);
        $parent->appendChild($element);

        if ($this->NameQualifier !== null) {
            $element->setAttribute('NameQualifier', $this->NameQualifier);
        }

        if ($this->SPNameQualifier !== null) {
            $element->setAttribute('SPNameQualifier', $this->SPNameQualifier);
        }

        return $element;
    }


    /**
     * Output the class as an XML-formatted string
     *
     * @return string
     */
    public function __toString(): string
    {
        $xml = $this->toXML();
        /** @psalm-var \DOMDocument $xml->ownerDocument */
        $xml->ownerDocument->formatOutput = true;
        return $xml->ownerDocument->saveXML($xml);
    }


    /**
     * Serialize this XML chunk
     *
     * @return string The serialized chunk.
     */
    public function serialize(): string
    {
        $xml = $this->toXML();
        /** @psalm-var \DOMDocument $xml->ownerDocument */
        return $xml->ownerDocument->saveXML($xml);
    }


    /**
     * Un-serialize this XML chunk.
     *
     * @param string $serialized The serialized chunk.
     *
     * Type hint not possible due to upstream method signature
     */
    public function unserialize($serialized): void
    {
        $doc = DOMDocumentFactory::fromString($serialized);
        $obj = new static($doc->documentElement);

        // For this to work, the properties have to be protected
        foreach (get_object_vars($obj) as $property => $value) {
            $this->{$property} = $value;
        }
    }
}
