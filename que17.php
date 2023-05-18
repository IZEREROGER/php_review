<?php 
//a program to implement a basic text-based RPG game with multiple levels, characters, and items.
class Character{
    private $name;
    private $health;
    private $attack;
    private $defense;
    private $speed;
    private $level;
    private $exp;
    private $items;
    function __construct($name,$health,$attack,$defense,$speed,$level,$exp,$items){
        $this->name=$name;
        $this->health=$health;
        $this->attack=$attack;
        $this->defense=$defense;
        $this->speed=$speed;
        $this->level=$level;
        $this->exp=$exp;
        $this->items=$items;
    }
    function getName(){
        return $this->name;
    }
    function getHealth(){
        return $this->health;
    }
    function getAttack(){
        return $this->attack;
    }
    function getDefense(){
        return $this->defense;
    }
    function getSpeed(){
        return $this->speed;
    }
    function getLevel(){
        return $this->level;
    }
    function getExp(){
        return $this->exp;
    }
    function getItems(){
        return $this->items;
    }
    function setName($name){
        $this->name=$name;
    }
    function setHealth($health){
        $this->health=$health;
    }
    function setAttack($attack){
        $this->attack=$attack;
    }
    function setDefense($defense){
        $this->defense=$defense;
    }
    function setSpeed($speed){
        $this->speed=$speed;
    }
    function setLevel($level){
        $this->level=$level;
    }
    function setExp($exp){
        $this->exp=$exp;
    }
    function setItems($items){
        $this->items=$items;
    }
    function attack($enemy){
        $enemy->setHealth($enemy->getHealth()-$this->attack);
    }
    function defend($enemy){
        $this->health=$this->health-($enemy->getAttack()-$this->defense);
    }
    function useItem($item){
        $this->health=$this->health+$item->getHealth();
        $this->attack=$this->attack+$item->getAttack();
        $this->defense=$this->defense+$item->getDefense();
        $this->speed=$this->speed+$item->getSpeed();
    }
    function levelUp(){
        $this->level++;
        $this->exp=0;
    }
    function gainExp($exp){
        $this->exp=$this->exp+$exp;
        if($this->exp>=100){
            $this->levelUp();
        }
    }
}
class Item{
    private $name;
    private $health;
    private $attack;
    private $defense;
    private $speed;
    function __construct($name,$health,$attack,$defense,$speed){
        $this->name=$name;
        $this->health=$health;
        $this->attack=$attack;
        $this->defense=$defense;
        $this->speed=$speed;
    }
    function getName(){
        return $this->name;
    }
    function getHealth(){
        return $this->health;
    }
    function getAttack(){
        return $this->attack;
    }
    function getDefense(){
        return $this->defense;
    }
    function getSpeed(){
        return $this->speed;
    }
    function setName($name){
        $this->name=$name;
    }
    function setHealth($health){
        $this->health=$health;
    }
    function setAttack($attack){
        $this->attack=$attack;
    }
    function setDefense($defense){
        $this->defense=$defense;
    }
    function setSpeed($speed){
        $this->speed=$speed;
    }
}
class Enemy{
    private $name;
    private $health;
    private $attack;
    private $defense;
    private $speed;
    private $level;
    private $exp;
    function __construct($name,$health,$attack,$defense,$speed,$level,$exp){
        $this->name=$name;
        $this->health=$health;
        $this->attack=$attack;
        $this->defense=$defense;
        $this->speed=$speed;
        $this->level=$level;
        $this->exp=$exp;
    }
    function getName(){
        return $this->name;
    }
    function getHealth(){
        return $this->health;
    }
    function getAttack(){
        return $this->attack;
    }
    function getDefense(){
        return $this->defense;
    }
    function getSpeed(){
        return $this->speed;
    }
    function getLevel(){
        return $this->level;
    }
    function getExp(){
        return $this->exp;
    }
    function setName($name){
        $this->name=$name;
    }
    function setHealth($health){
        $this->health=$health;
    }
    function setAttack($attack){
        $this->attack=$attack;
    }
    function setDefense($defense){
        $this->defense=$defense;
    }
    function setSpeed($speed){
        $this->speed=$speed;
    }
    function setLevel($level){
        $this->level=$level;
    }
    function setExp($exp){
        $this->exp=$exp;
    }
    function attack($enemy){
        $enemy->setHealth($enemy->getHealth()-$this->attack);
    }
    function defend($enemy){
        $this->health=$this->health-($enemy->getAttack()-$this->defense);
    }
    function levelUp(){
        $this->level++;
        $this->exp=0;
    }
    function gainExp($exp){
        $this->exp=$this->exp+$exp;
        if($this->exp>=100){
            $this->levelUp();
        }
    }
}
class Game{
    private $player;
    private $enemy;
    private $item;
    function __construct($player,$enemy,$item){
        $this->player=$player;
        $this->enemy=$enemy;
        $this->item=$item;
    }
    function getPlayer(){
        return $this->player;
    }
    function getEnemy(){
        return $this->enemy;
    }
    function getItem(){
        return $this->item;
    }
    function setPlayer($player){
        $this->player=$player;
    }
    function setEnemy($enemy){
        $this->enemy=$enemy;
    }
    function setItem($item){
        $this->item=$item;
    }
    function fight(){
        $this->player->attack($this->enemy);
        $this->enemy->attack($this->player);
        if($this->player->getHealth()<=0){
            echo "You lose";
        }
        else if($this->enemy->getHealth()<=0){
            echo "You win";
        }
    }
    function useItem(){
        $this->player->useItem($this->item);
    }
    function run(){
        if($this->player->getSpeed()>$this->enemy->getSpeed()){
            echo "You run away";
        }
        else{
            echo "You can't run away";
        }
    }
    function gainExp(){
        $this->player->gainExp($this->enemy->getExp());
    }
}
$player=new Player("Player",100,10,10,10,1,0);
$enemy=new Enemy("Enemy",100,10,10,10,1,10);
$item=new Item("Item",10,10,10,10);
$game=new Game($player,$enemy,$item);
$game->fight();
$game->useItem();
$game->run();
$game->gainExp();

?>