<?php 
//a program to implement a stack data structure and perform push, pop, and peek operations.
class Stack{
    private $stack;
    private $top;
    private $maxSize;
    function __construct($size){
        $this->stack=array();
        $this->top=-1;
        $this->maxSize=$size;
    }
    function push($item){
        if($this->top<$this->maxSize-1){
            $this->top++;
            $this->stack[$this->top]=$item;
        }
        else{
            echo "Stack is full";
        }
    }
    function pop(){
        if($this->top>=0){
            $item=$this->stack[$this->top];
            $this->top--;
            return $item;
        }
        else{
            echo "Stack is empty";
        }
    }
    function peek(){
        if($this->top>=0){
            return $this->stack[$this->top];
        }
        else{
            echo "Stack is empty";
        }
    }
}
$stack=new Stack(5);
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";
echo $stack->peek()."<br>";
echo $stack->pop()."<br>";

?>