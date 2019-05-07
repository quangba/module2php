<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    class User
    {
        public $username;
        public $userld;
        public $email;
        public $password;
        public function __construct($array)
        {
            $this->username = $array['name'];
            $this->userld = $array['id'];
            $this->email = $array['email'];
            $this->password = $array['password'];
        }
        public function login()
        {
            echo 'login succeed';
        }
        public function logout()
        {
            echo 'logout succeed';
        }
    }
    class Admin extends User
    {
        function __construct($array)
        {
            parent::__construct($array);
            $this->accessLevel = $array['accsessLevel'];
        }
        function editUser($array)
        {
            $this->username2 = $array['username2'];
        }
        public function logout()
        {
            echo 'admin succeed';
        }
        public function uselogout()
        {
            parent::logout();
        }
    }
    $useArray = array(
        'name'=>'ba',
        'id' => '1234',
        'email' => 'truongquangba1302@gmail.com',
        'password' => 'hiimkids',
        'accsessLevel' => 2
    );
    $use = new Admin($useArray);
    echo $use->email;


    
    ?>
</body>

</html>