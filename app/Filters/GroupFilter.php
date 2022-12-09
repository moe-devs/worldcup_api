<?php
namespace App\Filters;
use App\Filters\ApiFilter;
class GroupFilter extends ApiFilter{
    protected $params = [
        'groupStage'          =>  ['eq'],
    ];
    protected $columnMap = [
        'groupStage'   =>  'group_stage'
    ];
    protected $operatorMap = [
        'eq'    =>  '=',
    ];
}