<?php
namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {
    protected $params = [];
    protected $columnMap = [];
    protected $operatorMap = [];
    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->params as $param => $operators) {
            $query = $request->query($param);
            if(!isset($query)) {
                continue;
            }
            $column = $this->columnMap[$param] ?? $param; // If column exist in Column take the value if not take it from the $parm
            foreach($operators as $operator) {
                if(isset($query[$operator])) {
                    $eloQuery[] = [$column , $this->operatorMap[$operator],$query[$operator]]; // This what we where looking for in the where method check the CustomerController
                }
            }
        }
        return $eloQuery;
    }
}