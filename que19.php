<?php 
//a program to implement a queue data structure and perform enqueue and dequeue operations.
class Queue{
    private $queue;
    private $front;
    private $rear;
    private $maxSize;
    function __construct($size){
        $this->queue=array();
        $this->front=-1;
        $this->rear=-1;
        $this->maxSize=$size;
    }
    function enqueue($item){
        if($this->rear<$this->maxSize-1){
            $this->rear++;
            $this->queue[$this->rear]=$item;
        }
        else{
            echo "Queue is full";
        }
    }
    function dequeue(){
        if($this->front<$this->rear){
            $this->front++;
            $item=$this->queue[$this->front];
            return $item;
        }
        else{
            echo "Queue is empty";
        }
    }
}
$queue=new Queue(5);
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";
echo $queue->dequeue()."<br>";


?>