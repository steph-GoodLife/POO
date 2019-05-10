<?php


/**
 * Description of usersClass02
 *
 * @author webform
 */
class usersClass02 {
    
    // Attributs
    protected $iduser;
    protected $thelogin;
    protected $thepwd;
    protected $themail;
    
    // Méthodes
    
    // constructeur, est appelé lors de l'instanciation de la classe (donc new ...)
    public function __construct(int $id,string $login,string $pwd,string $mail) {
        $this->setIduser($id);
        $this->setThelogin($login);
        $this->setThepwd($pwd);
        $this->setThemail($mail);
    }

    
    // getters
    function getIduser() {
        return $this->iduser;
    }

    function getThelogin() {
        return $this->thelogin;
    }

    function getThepwd() {
        return $this->thepwd;
    }

    function getThemail() {
        return $this->themail;
    }

    // setters
    function setIduser($iduser) {
        $iduser = (int) $iduser;
        if($iduser){
            $this->iduser = $iduser;
        }
    }

    function setThelogin($thelogin) {
        $thelogin = htmlspecialchars(strip_tags(trim($thelogin)));
        if(!empty($thelogin)){
            $this->thelogin = $thelogin;
        }
    }

    function setThepwd($thepwd) {
        $this->thepwd = $thepwd;
    }

    function setThemail($themail) {
        $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);
        if($themail){
            $this->themail = $themail;
        }
    }
    
    public function viewTheUser(){
        $string="<ul>";
        $string.="<li>$this->iduser</li>";
        $string.="<li>".$this->getThelogin()."</li>";
        $string.="<li>{$this->getThemail()}</li>";
        $string.="</ul>";
        return $string;
    }


}

$user1 = new usersClass02(5,"Lulu2","ghdfhg","lulu@mail.com");

$user2 = new usersClass02(7,"Steve","jkhhgui","jkghj@jkhghg.com");

$user3 = $user2;

$user2->setThelogin("BBB");


echo $user2->viewTheUser();

var_dump($user1,$user2,$user3);