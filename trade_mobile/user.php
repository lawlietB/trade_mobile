<?php
class User 
{
    var $token_login = 'islogintomycode';
     
    // Thiết lập login
    function set_logged($username)
    {
        $_SESSION[$this->token_login] = array(
            'username' => $username
        );
    }
     
    function set_not_logged(){
        if (isset($_SESSION[$this->token_login])) {
            unset($_SESSION[$this->token_login]);
        }
    }
     
    // Lấy thông tin người dùng đã login
    function get_user_info($key){
        if (!empty($_SESSION[$this->token_login]) && isset($_SESSION[$this->token_login][$key])){
            return $_SESSION[$this->token_login][$key];
        }
        return false;
    }
     
    // Kiểm tra đã loggin chưa
    function is_logged(){
        return !empty($_SESSION[$this->token_login]);
    }
}
 
// Khởi tạo đối tượng user
$user = new User();
?>