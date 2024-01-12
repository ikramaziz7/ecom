<?php class dbControlleur{
    private $db;
    function __construct($conn) { $this->db = $conn; }
    function addClient($email,$Upass,$passc) {
        try{
            
                 $sql='USE ecoem;
                 insert into client(email,upass) values (:email,:Upassw)';
                 $stm = $this->db->prepare($sql);
                 $stm->execute(array(":email"=>$email,":Upassw"=>$Upass));
                return true;
            
        }
    catch(Exception $e) {return false;}

    }
    function fetchClient($email,$pass){
        $email=strtolower($email);
        $sql='select email,upass from client where email=:email and Upass=md5(:passw)';
        $stm= $this->db->prepare($sql);
        $stm->bindParam(":email",$email);
        $stm->bindParam(":passw",$pass);
        $stm->execute();
        $result=$stm->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function getConnection(){
        return $this->db;
    }
}
 ?>