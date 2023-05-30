<?php
//node structure
class Node
{
    //takes data and next
    public $data;
    public $next;
    
    //constructor
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
}

//function to print node values
function printVal($data)
{
    $a = $data;
    print("Value: " . $a . "\n");
}

//linkedlist structure
class LinkedList
{
    private $head;
    private $tail;
    private $size;

    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = NULL;
        $this->tail = NULL;
        $this->size = 0;
    }
    
    //push Node onto list
    public function ll_push($data)
    {
        //create new Node
        $newNode = new Node($data);
        //next Node points to head
        $newNode->next = $this->head;
        //head is equal to new Node address
        $this->head = &$newNode;
        //if tail is null it also points to new Node
        if($this->tail == NULL)
            $this->tail = &$newNode;
        //increase size
        $this->size++;
    }
    
    //pop Node off of list
    public function ll_pop()
    {
        //temp is equal to the head
        $tmp = $this->head;
        //head is equal to the next node
        $this->head = $this->head->next;
        //if head is not NULL decrease size
        if($this->head != NULL)
            $this->size--;
        //return temp
        return $tmp;
    }
    
    //add Node to end of list
    public function ll_append($data)
    {
        //if head is not NULL
        if($this->head != NULL)
        {
            //create new Node
            $newNode = new Node($data);
            //next Node after tail is equal to new Node
            $this->tail->next = $newNode;
            //next Node to new Node is NULL
            $newNode->next = NULL;
            //tail points to new Node
            $this->tail = &$newNode;
            //increase size
            $this->size++;
        }
        //else push the Node
        else
        {
            $this->ll_push($data);
        }
    }
    
    //remove Node with specific value
    public function ll_remove($data)
    {
        //current and previous Nodes equal to head
        $cur = $this->head;
        $prev = $this->head;

        //while current is not equal to the value
        while($cur->data != $data)
        {
            //if there is no more Nodes return NULL
            if($cur->next == NULL)
                return NULL;
            //else iterate through the list
            else
            {
                $prev = $cur;
                $cur = $cur->next;
            }
        }
        //if current is equal to head
        if($cur == $this->head)
         {
             //if size is equal to one
              if($this->size == 1)
               {
                   //tail is equal to head
                  $this->tail = $this->head;
               }
                //head is equal to the next Node
               $this->head = $this->head->next;
        }
        //else current is not equal to head
        else
        {
            //if tail is equal to current
            if($this->tail == $cur)
            {
                //tail is equal to previous
                 $this->tail = $prev;
             }
            //previous' next Node is equal to current's next Node
            $prev->next = $cur->next;
        }
        //decrement size
        $this->size--;
    }
    
    //return the size of list
    public function ll_size()
    {
        return $this->size;
    }
    
    //print the list
    public function ll_map(callable $mapFunc)
    {
        //temp is equal to the head
        $tmp = $this->head;
        //while temp is not NULL increment through list
        while($tmp != NULL)
        {
            //print each Node's value
            $mapFunc($tmp->data);
            $tmp = $tmp->next;
        }
    }
}

//testing
$list = new LinkedList();

$list->ll_push("hello");
$list->ll_push(5.0);
$list->ll_push(10.0);
$list->ll_push(15.0);
$list->ll_push(20.0);
$list->ll_push(25.0);
$list->ll_pop();
$list->ll_append(30.0);
$list->ll_remove(15.0);
print("Size: " . $list->ll_size() . "\n");
$list->ll_map('printVal');

?>




