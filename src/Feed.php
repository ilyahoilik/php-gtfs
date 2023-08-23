<?php

namespace GTFS\Static;

use GTFS\Static\Constants\DatasetType;
use GTFS\Static\Exceptions\NotWriteableDirectoryException;
use GTFS\Static\Exceptions\InvalidResourceException;
use InvalidArgumentException;

class Feed
{
    public function __construct(protected string $directory)
    {
        $this->directory = rtrim($this->directory, '/') . '/';
    }

    public function getPath(): string
    {
        return $this->directory;
    }

    /**
     * @throws NotWriteableDirectoryException
     * @throws InvalidResourceException
     */
    protected function dataset(DatasetType $datasetType): Dataset
    {
        return new Dataset($this->getPath(), $datasetType);
    }

    /**
     * @throws NotWriteableDirectoryException
     * @throws InvalidResourceException
     */
    public function __call(string $name, array $arguments): Dataset
    {
        $candidate = ucfirst($name);

        foreach (DatasetType::cases() as $case) {
            if ($case->name === $candidate) {
                return $this->dataset($case);
            }
        }

        throw new InvalidArgumentException();
    }
}