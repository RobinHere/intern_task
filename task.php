<?php
class Stack{
    private $stack = array();
    private int $maxSize;

    public function __construct(int $maxSize = 5) {
        $this->maxSize = $maxSize;
    }

    public function push(int $value) {
        if ( $this->getSize() < $this->maxSize ){
            array_unshift($this->stack,$value);
            return true;
        }
        return false;
    }

    public function pop() {
        if ( $this->isEmpty() )
            return false;
        return array_shift($this->stack);
    }

    public function getSize(){
        return count($this->stack);
    }

    public function isEmpty(){
        if ( $this->getSize() == 0 )
            return true;
        return false;
    }
    
    public function isFull(){
        if ( $this->getSize() == $this->maxSize )
            return true;
        return false;
    }

    public function printStack(){
        if($this->isEmpty()) {
            echo "Stack is empty! \n";
        }
        else{
            print_r($this->stack);
        }
    }

}

$EXIT = false;
$CHOICE = (int)readline('Type in maximum size of stack (0 for default value): ');

if ($CHOICE == 0)
    $stack = new Stack();
$stack = new Stack($CHOICE);

while(!$EXIT){
    echo "1. Push \n";
    echo "2. Pop\n";
    echo "3. Print\n";
    echo "4. Exit\n";

    $CHOICE = (int)readline('What do you want to do? ');

    switch ($CHOICE) {
        case 1:
            popen('cls', 'w');
            $newValue = (int)readline('Type in value to be added: ');
            $stack->push($newValue);
            popen('cls', 'w');
            break;
        case 2:
            $stack->pop();
            popen('cls', 'w');
            break;
        case 3:
            popen('cls', 'w');
            $stack->printStack();
            readline('Click any keyboard button to continue');
            popen('cls', 'w');
            break;
        case 4:
            $EXIT = True;
            break;
        default:
            popen('cls', 'w');
            break;
    }
}

?>