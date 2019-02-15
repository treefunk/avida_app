<?php

require_once "smtpmailer/class.smtp.php";
require_once "smtpmailer/class.phpmailer.php";

class Contact extends Crud_controller
{
    public $config;


    function __construct()
    {
        parent::__construct();
        
        // $mail->IsSMTP(); 
        // $mail->Host =  'smtp.elasticemail.com';
        // $mail->Port = 587; 
        // $mail->SMTPAuth = true;
        // $mail->Username = 'javier.marvin@avidaland.com';
        // $mail->Password = '270aca7c-f2d5-4f4b-b0e8-29304202ac12';
        // $mail->SMTPSecure = 'tls';
        

    }

    public function index_post(){

        $post = $this->input->post(NULL,true);

        

        $now = (new DateTime('now',new DateTimeZone('Asia/Hong_kong')))->format('F j, Y h:iA');

        $msg_html = "
            <h3>Avida Sales Inquiry</h3>
            <p>We have received an inquiry from the <strong style='color:#c9302c;'>Mobile Avida App</strong>, Please check the following details:</p>

            <table style='border:1px solid rgba(0,0,0,0.5); border-collapse:collapse; width:800px;'>

                <tr>
                    <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Inquiry Date:</td>
                    <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$now}</td>
                </tr>
                <tr>
                    <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Full Name (yyyy-mm-dd h:i:s):</td>
                    <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$post['firstname']} {$post['lastname']}</td>
                </tr>

                <tr>
                    <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Contact Number:</td>
                    <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$post['contact_num']}</td>
                </tr>

                <tr>
                    <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Email:</td>
                    <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$post['email']}</td>
                </tr>

                <tr>
                    <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Property:</td>
                    <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$post['property_name']}</td>
                </tr>

                <tr>
                <td style='width:40%; border:1px solid rgba(0,0,0,0.5);'>Message:</td>
                <td style='border:1px solid rgba(0,0,0,0.5); color:#961a06;'>{$post['message']}</td>
                </tr>
            
            </table>
        ";


        $mail = new PHPMailer;

        $mail->IsSMTP(); 
        $mail->Host =  'smtp.elasticemail.com';
        $mail->Port = 587; 
        $mail->SMTPAuth = true;
        $mail->Username = 'javier.marvin@avidaland.com';
        $mail->Password = '270aca7c-f2d5-4f4b-b0e8-29304202ac12';
        $mail->SMTPSecure = 'tls';

        $mail->SetFrom("noreply@avidaapp.betaprojex.com", "Avida App"); //From address of the mail
        $mail->Subject = 'Avida App Inquiry';

        if(count($recipients = $this->getEmailRecipients_get())){
            foreach($recipients as $recipient){
                $mail->AddAddress($recipient->post_title, "Avida Corp Admin");
            }
        }
        $mail->MsgHTML($msg_html);
        if($mail->Send()){
            $meta = [
                'message' => 'Inquiry successfully sent!',
                'code' => 200
            ];
            $this->response(['data' => $post,'meta'=> $meta],200);
        };

    }

    public function getEmailRecipients_get(){
        
        $args = array('post_type' => 'email_recipient', 'posts_per_page' => -1);
        $the_query = new WP_Query($args);

        return $the_query->posts;


    }
}
    