 <?php
class exploit_me
{
    public $cmd;
    public function __destruct(){
        system($this->cmd);
    }
}
$payload= $_GET['payload'];
if ($payload[0]==='a' || $payload[0]==='C')
{
    die('awwwww! this\'s the wrong way!');
}
else if (preg_match('/cat|ls|nl|head|less|more|tail|mv|base|grep|dir|\*|strings|sort|txt|find|print|tac|awk/is',$payload))
    die('awwwww! this\'s the wrong way!');
unserialize($payload);
throw new Exception("oh nooooooo!!!");
?>
