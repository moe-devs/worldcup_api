<?php
namespace App\Filters;
use App\Filters\ApiFilter;
class CountryFilter extends ApiFilter{
    protected $params = [
        'name'          =>  ['eq'],
        'population'    =>  ['eq','lt','gt','lte','gte'],
        'capitalCity'   =>  ['eq'],
        'continent'     =>  ['eq'],
        'ranking'       =>  ['eq','lt','gt','lte','gte'],
    ];
    protected $columnMap = [
        'capitalCity'   =>  'capital_city'
    ];
    protected $operatorMap = [
        'eq'    =>  '=',
        'gt'    =>  '>',
        'gte'   =>  '>=',
        'lt'    =>  '<',
        'lte'   =>  '<=',
    ];
}