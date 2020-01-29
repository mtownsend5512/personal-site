<?php

namespace App\Support;

use ArrayIterator;
use Illuminate\Support\Arr;
use IteratorAggregate;
use Spatie\ArrayToXml\ArrayToXml;
use Traversable;

/**
 * Wrap data as a pseudo-object and map keys to dynamic properties.
 * The main purpose of this class is to handle incoming API
 * responses and provide a set of useful methods for
 * processing the data contained therein.
 *
 * @param array $array
 * @author Mark Townsend <markt@dieselcore.com>
 */
class DataWrapper implements IteratorAggregate
{
    public $dataWrapperContent;

    public function __construct(array $data)
    {
        $this->dataWrapperContent = json_decode(json_encode($data));
    }

    /**
     * Since the data wrapper content does not map to actual properties, we handle
     * it with this magic method and dynamically map them as they are used.
     * In the event no property can be mapped, the result is null.
     *
     * @param  mixed $key
     * @return mixed
     */
    public function __get($key)
    {
        if (is_array(@$this->dataWrapperContent->$key) && empty(@$this->dataWrapperContent->$key)) {
            $value = [];
        } elseif (! @$this->dataWrapperContent->$key) {
            $value = null;
        } else {
            $value = @$this->dataWrapperContent->$key;
        }
        if (is_array($value) || is_array(json_decode(json_encode($value), true))) {
            return new self((array) $value);
        }

        return $value;
    }

    public function __call($method, $arguments)
    {
        return false;
    }

    /**
     * Retrieve the iterator.
     * Allows the DataWrapper object to be iterated over.
     *
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->dataWrapperContent);
    }

    /**
     * Add data to the data wrapper content.
     *
     * @param mixed $value
     * @param string $key
     */
    public function add($value, $key = null)
    {
        $this->dataWrapperContent->$key = is_array($value) ? json_decode(json_encode($value)) : $value;
    }

    /**
     * Recursively determine if a given key exists anywhere in the data wrapper content.
     *
     * @return bool
     */
    public function contains($needle)
    {
        return $this->searchContent($this->toArray(), $needle, false, 'key');
    }

    /**
     * Recursively determine if any given keys exist anywhere in the data wrapper content.
     *
     * @return bool
     */
    public function containsAny(array $needles)
    {
        foreach ($needles as $needle) {
            if ($this->contains($needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Recursively determine if all given key exists anywhere in the data wrapper content
     * and those keys contains a value that is not null or an empty string.
     *
     * @return bool
     */
    public function containsAll(array $needles)
    {
        $neededMatches = count($needles);
        $foundNeedles = [];
        foreach ($needles as $needle) {
            if ($this->contains($needle)) {
                $foundNeedles[$needle] = true;
            }
        }
        if (count($foundNeedles) == $neededMatches) {
            return true;
        }

        return false;
    }

    /**
     * Recursively determine if a given key exists anywhere in the data wrapper content
     * and that key contains a value that is not null, an empty array or an empty string.
     *
     * @return bool
     */
    public function has($needle)
    {
        return $this->searchContent($this->toArray(), $needle, true);
    }

    /**
     * Recursively determine if any given keys exist anywhere in the data wrapper content
     * and that key contains a value that is not null, an empty array or an empty string.
     *
     * @return bool
     */
    public function hasAny(array $needles)
    {
        foreach ($needles as $needle) {
            if ($this->has($needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Recursively determine if all given key exists anywhere in the data wrapper content
     * and those keys contains a value that is not null, an empty array or an empty string.
     *
     * @return bool
     */
    public function hasAll(array $needles)
    {
        $neededMatches = count($needles);
        $foundNeedles = [];
        foreach ($needles as $needle) {
            if ($this->has($needle)) {
                $foundNeedles[$needle] = true;
            }
        }
        if (count($foundNeedles) == $neededMatches) {
            return true;
        }

        return false;
    }

    /**
     * Recursively determine if a given value exists anywhere in the data wrapper content.
     *
     * @return bool
     */
    public function hasValue($needle)
    {
        return $this->searchContent($this->toArray(), $needle, false, 'value');
    }

    /**
     * Recursively determine if any given values exist anywhere in the data wrapper content.
     *
     * @param array @needles
     * @return bool
     */
    public function hasAnyValues(array $needles)
    {
        foreach ($needles as $needle) {
            if ($this->hasValue($needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Recursively determine if all given values exist anywhere in the data wrapper content.
     *
     * @param array @needles
     * @return bool
     */
    public function hasAllValues(array $needles)
    {
        $neededMatches = count($needles);
        $foundValues = [];
        foreach ($needles as $needle) {
            if ($this->hasValue($needle)) {
                $foundValues[$needle] = true;
            }
        }
        if (count($foundValues) == $neededMatches) {
            return true;
        }

        return false;
    }

    /**
     * Return the first element of the array inside the content.
     *
     * @return mixed
     */
    public function first()
    {
        if (is_array($this->dataWrapperContent)) {
            return new self($this->toArray()[$this->getFirstKey()]);
        }
    }

    /**
     * Return the last element of the array inside the content.
     *
     * @return mixed
     */
    public function last()
    {
        if (is_array($this->dataWrapperContent)) {
            return new self($this->toArray()[$this->getLastKey()]);
        }
    }

    /**
     * Uses Laravel's array_get helper to get a nested value by separating dimensions with a period.
     *
     * @return string $trail
     */
    public function getNestedValue($trail, $default = 0)
    {
        return Arr::get($this->toArray(), $trail, $default);
    }

    /**
     * Return the first key name.
     *
     * @return mixed  String or false
     */
    public function getFirstKey()
    {
        return $this->getKeyOffset(0);
    }

    /**
     * Return the last key name.
     *
     * @return mixed  String or false
     */
    public function getLastKey()
    {
        $offset = count($this->toArray()) - 1;

        return $this->getKeyOffset($offset);
    }

    /**
     * Return the name of the key of the specified offset.
     *
     * @param  int $offset The array iteration offset
     * @return mixed  String or false
     */
    public function getKeyOffset($offset = 0)
    {
        $offset = (int) $offset;
        $iteration = 0;
        $thisLevelContent = $this->toArray();
        foreach ($thisLevelContent as $key => $value) {
            if ($offset == $iteration) {
                return $key;

                break;
            }
            $iteration++;
        }

        return false;
    }

    /**
     * Get an array of keys.
     *
     * @return array
     */
    public function keys()
    {
        return array_keys($this->dataWrapperContent);
    }

    /**
     * Determine if the current level of a data wrapper is empty.
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->dataWrapperContent);
    }

    /**
     * Determine if the current level of a data wrapper is not empty.
     *
     * @return bool
     */
    public function isNotEmpty()
    {
        return ! empty($this->dataWrapperContent);
    }

    /**
     * Convert the content to an array.
     * @return array
     */
    public function toArray()
    {
        return json_decode(json_encode($this->dataWrapperContent), true);
    }

    /**
     * Convert the content to a json string.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->dataWrapperContent);
    }

    /**
     * Convert the content to an xml string.
     *
     * @param  string $root The root tag of the xml document
     * @return string
     */
    public function toXml($root = 'root')
    {
        return ArrayToXml::convert($this->toArray($this->dataWrapperContent), $root);
    }

    /**
     * Convert the content to a Laravel collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function toCollection()
    {
        return collect($this->dataWrapperContent);
    }

    /**
     * Count the elements of the data wrapper.
     *
     * @return int
     */
    public function count()
    {
        return count($this->toArray());
    }

    /**
     * Recursively search the data wrapper content.
     * Depending upon the arguments, it can search for keys, values, or keys with non-null/filled values.
     *
     * @param  array  $haystack The array to search
     * @param  string  $needle The needle to search for
     * @param  bool  $pairMatching Whether or not the key must be present AND the value is set
     * @return bool
     */
    private function searchContent(array $haystack, $needle, $pairMatching = false, $mode = 'value', $return = false)
    {
        foreach (new \RecursiveIteratorIterator(new \RecursiveArrayIterator($haystack), \RecursiveIteratorIterator::SELF_FIRST) as $key => $value) {
            if ($pairMatching) {
                if ($needle === $key && ! empty($value) && $value !== '') {
                    return $return ? $key : true;
                }
            } else {
                if ($needle === ${${'mode'}}) {
                    return $return ? ${${'mode'}} : true;
                }
            }
        }

        return false;
    }

    /**
     * Convert the collection to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toJson();
    }
}