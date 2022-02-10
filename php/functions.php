
<?php

    class User{
        protected $db;
        protected $fullname;
        protected $email;
        protected $phone;
        protected $address;
        protected $country;
        protected $message;
        protected $subject;
        protected $status;

        function __construct($db_connection){
            $this->db = $db_connection;
        }

        function register_volunteer($fullname, $email, $phone, $address, $country){
            try{
                $this->ufullname = trim($fullname);
                $this->uemail = trim($email);
                $this->uphone = trim($phone);
                $this->uaddress = trim($address);
                $this->ucountry = trim($country);

                if(!empty ($this->ufullname) && !empty($this->uemail) && !empty($this->uphone) && !empty($this->uaddress) && !empty($this->ucountry)) {
                    if(filter_var($this->uemail, FILTER_VALIDATE_EMAIL)){
                        $check_email = $this->db->prepare("SELECT * FROM `volunteer` WHERE uemail = ?");
                        $check_email->execute([$this->uemail]);
                        if($check_email->rowCount() > 0){
                            return ['errorMessage' => 'This Email Address is already registered. Please Try another.'];
                        }else {
                            $sql = "INSERT INTO `volunteer` (ufullname, uemail, uphone, uaddress, ucountry) VALUE (:fullname, :email, :phone, :address, :country)";
                            $sign_up_stmt = $this->db->prepare($sql);
                            //BIND VALUES
                            $sign_up_stmt->bindValue(':fullname',htmlspecialchars($this->ufullname), PDO::PARAM_STR);
                            $sign_up_stmt->bindValue(':email',htmlspecialchars($this->uemail), PDO::PARAM_STR);
                            $sign_up_stmt->bindValue(':phone',$this->uphone, PDO::PARAM_STR);
                            $sign_up_stmt->bindValue(':address',$this->uaddress, PDO::PARAM_STR);
                            $sign_up_stmt->bindValue(':country',$this->ucountry, PDO::PARAM_STR);
                            $sign_up_stmt->execute();
                            return ['successMessage' => 'Your request has been submitted successfully.']; 
                        }
                    }else {
                        return ['errorMessage' => 'Invalid email address!'];
                    }
                }else {
                    return ['errorMessage' => 'Invalid Email Address.'];
                }
            }catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        function Contact_us($fullname, $cemail, $subject, $message) {
            try {
                $this->c_fullname = $fullname;
                $this->c_email = $cemail;
                $this->c_subject = $subject;
                $this->c_message = $message;

                if (!empty($fullname) && !empty($cemail) && !empty($subject) && !empty($message)){
                    $sql = "INSERT INTO `contact` (c_fullname, c_email, c_subject, c_message, c_status, c_date) VALUE (:fullname, :cemail, :subject, :message, 'unread', CURRENT_TIMESTAMP)";
                    $contactUs = $this->db->prepare($sql);
                    $contactUs->bindValue(':fullname', $this->c_fullname, PDO::PARAM_STR);
                    $contactUs->bindValue(':cemail', $this->c_email, PDO::PARAM_STR);
                    $contactUs->bindValue(':subject', $this->c_subject, PDO::PARAM_STR);
                    $contactUs->bindValue(':message', $this->c_message, PDO::PARAM_STR);
                    // $sql->bindValue(':status', $this->c_status, PDO::PARAM_STR);
                    // $sql->bindValue(':date', $this->c_date, PDO::PARAM_STR);

                    $contactUs->execute();
                    return ['successMessage' => 'Success! message sent successfully.'];
                }else{
                    return ['errorMessage' => 'Please ensure to fill all fields!'];
                }
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }


        function Newsletter($email) {
            $this->sub_email = $email;
            if (!empty($email)) {
                if(filter_var($this->sub_email, FILTER_VALIDATE_EMAIL)){
                    $check_email = $this->db->prepare("SELECT * FROM `newsletter` WHERE sub_email = ?");
                    $check_email->execute([$this->sub_email]);
                    if($check_email->rowCount() > 0){
                        // return ['errorMessage' => 'This Email Address has already been subscribed. Please Try another.'];
                        echo  '<script>alert("This Email Address has already been subscribed. Please Try another.")</script>';
                    }else {
                        $sql = "INSERT INTO `newsletter` (sub_email) VALUE (:email)";
                        $subscribe_to_our_newsletter = $this->db->prepare($sql);
                        $subscribe_to_our_newsletter->bindValue(':email', $this->sub_email, PDO::PARAM_STR);
                        $subscribe_to_our_newsletter->execute();
                        // return ['successMessage' => 'Sucess!your email has been collected'];
                        echo  '<script>alert("Your email has been subscribed successfully!")</script>';
                    }
                }else {
                    // return ['errorMessage' => 'Please enter a avalid email address!'];
                    echo  '<script>alert("Please enter a valid email address!")</script>';
                }
            }else {
                // return ['errorMessage' => 'Please enter your email'];
                echo  '<script>alert("Please enter your email")</script>';
            }
        }

        public function FetchAll($query){
            $stmt = $this->db-> query($query);
            return $stmt->FetchAll();
        }
    }
?>