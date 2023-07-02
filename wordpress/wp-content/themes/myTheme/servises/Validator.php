<?php


class Validator {

    protected array $data;
    protected array $rules;
    protected array $validated;

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function add_rules(array $rules){
        $this->rules = $rules;
    }

    public function get_result(){
        foreach ($this->rules as $key => $value) {
            if(!isset($this->data[$key])){
                continue;
            }
            if($result = preg_match($value, $this->data[$key])){
                $this->validated[$key] = $this->data[$key];
            }
        }
        if(count($this->validated) == 0){
            return false;
        }
        return $this->validated;
    }
    public function is_valid(){
        if(count($this->validated) == count($this->rules)){
            return true;
        }
        return false;
    }

}

