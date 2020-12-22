<?php
    class Login{

        protected $link;
        public function __construct(){
            $this->link= mysqli_connect('localhost', 'root', '','bms');

        }
        public function adminLoginCheck($data){
            $user_name=$data['user_name'];
            $user_password=$data['user_password'];
            $sql="SELECT * FROM login WHERE user_name ='$user_name' AND user_password ='$user_password'";
            if(mysqli_query($this->link, $sql)){
                $queryResult=mysqli_query($this->link, $sql);
                $userInfo= mysqli_fetch_assoc($queryResult);
                if($userInfo){
                    
                    $_SESSION['id']=$userInfo[id];
                    $_SESSION['name']=$userInfo[user_name];
                    header('Location: index.php');
                }else{
                    $message="Please enter valid username and password";
                    return $message;
                }
            }else{
                die('Query Problem'. mysqli_error($this->link));
            }
        }


        public function adminLogout(){

            unset($_SESSION['id']);
            unset($_SESSION['name']);
            header('Location: index.php');
            $message="Logout Successfully!!!";
            return $message;

        }
    }

?>