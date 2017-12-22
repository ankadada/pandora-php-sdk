<?php
/**
 * Created by IntelliJ IDEA.
 * User: wf
 * Date: 2017/12/22
 * Time: 下午4:21
 */

namespace Pandora\Service;


class TsDbExport extends Export
{
    public $destRepoName;
    public $series;
    public $omitInvalid = false;
    public $omitEmpty = false;
    public $fields;
    public $tags;
    public $timestamp;

    public function __construct($destRepoName, $series, $tags, $fields)
    {
        $this->destRepoName = $destRepoName;
        $this->series = $series;
        $this->tags = $this->srcFieldFormat($tags);
        $this->fields = $this->srcFieldFormat($fields);
    }
}