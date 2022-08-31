<?php
    class Contact extends framework{
        public function index(){
            $this->view('contact_us');
        }

        public function send(){
            $name = $this->input('name');
            $email = $this->input('email');
            $subject = $this->input('subject');
            $message = $this->input('message');

            $content="From: $name \n Email: $email \n Message: $message";
            $recipient = "achladhiman3@gmail.com";
            $mailheader = "From: $email \r\n";
            $mail = mail($recipient, $subject, $content, $mailheader);
            if($mail){
                $this->flash('Success','Mail Sent Successfully.');
                $this->redirect('Contact');
            }
            else{
                $this->flash('warning','Something Went Wrong.');
                $this->redirect('Contact');
            }
        }
    }
?>