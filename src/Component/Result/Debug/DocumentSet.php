<?php

namespace Solarium\Component\Result\Debug;

/**
 * Select component debug documentset result.
 */
class DocumentSet implements \IteratorAggregate, \Countable
{
    /**
     * Docs array.
     *
     * @var array
     */
    protected $docs;

    /**
     * Constructor.
     *
     * @param array $docs
     */
    public function __construct($docs)
    {
        $this->docs = $docs;
    }

    /**
     * Get a document by key.
     *
     * @param mixed $key
     *
     * @return Document|null
     */
    public function getDocument($key)
    {
        if (isset($this->docs[$key])) {
            return $this->docs[$key];
        }
    }

    /**
     * Get all docs.
     *
     * @return array
     */
    public function getDocuments()
    {
        return $this->docs;
    }

    /**
     * IteratorAggregate implementation.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->docs);
    }

    /**
     * Countable implementation.
     *
     * @return int
     */
    public function count()
    {
        return count($this->docs);
    }
}
