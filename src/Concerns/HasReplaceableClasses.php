<?php

namespace GTFS\Static\Concerns;

use GTFS\Static\Models\Archive\Archive;
use GTFS\Static\Models\Archive\Directory;
use GTFS\Static\Models\Archive\File;
use GTFS\Static\Models\Feed\Dataset;
use GTFS\Static\Models\Feed\Entity;
use GTFS\Static\Models\Fields\Field;
use GTFS\Static\Services\Archive\ExtractorZip;
use GTFS\Static\Services\Archive\FetcherFromPath;
use GTFS\Static\Services\Feed\ParserCsv;

trait HasReplaceableClasses
{
    protected string $archive = Archive::class;
    protected string $directory = Directory::class;
    protected string $file = File::class;

    protected string $fetcher = FetcherFromPath::class;
    protected string $extractor = ExtractorZip::class;
    protected string $parser = ParserCsv::class;

    protected string $dataset = Dataset::class;
    protected string $entity = Entity::class;
    protected string $field = Field::class;

    public function getArchiveClass(): string
    {
        return $this->archive;
    }

    public function getDirectoryClass(): string
    {
        return $this->directory;
    }

    public function getFileClass(): string
    {
        return $this->file;
    }

    public function getFetcherClass(): string
    {
        return $this->fetcher;
    }

    public function getExtractorClass(): string
    {
        return $this->extractor;
    }

    public function getParserClass(): string
    {
        return $this->parser;
    }

    public function getDatasetClass(): string
    {
        return $this->dataset;
    }

    public function getEntityClass(): string
    {
        return $this->entity;
    }

    public function getFieldClass(): string
    {
        return $this->field;
    }

    public function useArchiveClass(string $class): static
    {
        $this->archive = $class;

        return $this;
    }

    public function useDirectoryClass(string $class): static
    {
        $this->directory = $class;

        return $this;
    }

    public function useFileClass(string $class): static
    {
        $this->file = $class;

        return $this;
    }

    public function useFetcherClass(string $class): static
    {
        $this->fetcher = $class;

        return $this;
    }

    public function useExtractorClass(string $class): static
    {
        $this->extractor = $class;

        return $this;
    }

    public function useParserClass(string $class): static
    {
        $this->parser = $class;

        return $this;
    }

    public function useDatasetClass(string $class): static
    {
        $this->dataset = $class;

        return $this;
    }

    public function useEntityClass(string $class): static
    {
        $this->entity = $class;

        return $this;
    }

    public function useFieldClass(string $class): static
    {
        $this->field = $class;

        return $this;
    }
}