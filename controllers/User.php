<?php
class User extends controller
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('Users');
    }

    public function autho()
    {
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            if (isset($_POST['register'])) {
                //   _____________________________________________________________________________________
                // ||                                     register                                        ||//
                // ||_____________________________________________________________________________________|| //
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];


                if (empty($data['email'])) {
                    $data['email_err'] = 'Pleae enter email';
                } else {

                    if ($this->userModel->FindUserByEmail($data['email'])) {
                        $data['email_err'] = 'email is already taken';
                    }
                }


                if (empty($data['name'])) {
                    $data['name_err'] = 'Pleae enter name';
                }


                if (empty($data['password'])) {
                    $data['password_err'] = 'Pleae enter password';
                } elseif (strlen($data['password']) < 6) {
                    $data['password_err'] = 'Password must be at least 6 characters';
                }


                if (empty($data['confirm_password'])) {
                    $data['confirm_password_err'] = 'Pleae confirm password';
                } else {
                    if ($data['password'] != $data['confirm_password']) {
                        $data['confirm_password_err'] = 'Passwords do not match';
                    }
                }


                if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {

                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    if ($this->userModel->signUp($data)) {
                        $data['login'] = 'false';
                        $this->view('autho', $data);
                    } else {
                        die('samting went wrong');
                    }
                } else {
                   
                    $data['login'] = 'true';
                    $this->view('autho', $data);
                }
                //   _____________________________________________________________________________________
                // ||                                        end                                          ||//
                // ||_____________________________________________________________________________________|| //






            };
            if (isset($_POST['login'])) {
                //   _____________________________________________________________________________________
                // ||                                        login                                        ||//
                // ||_____________________________________________________________________________________|| //

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'email' => trim($_POST['login_email']),
                    'password' => trim($_POST['login_password']),
                    'email_err' => '',
                    'password_err' => '',
                    'login' => 'false',
                ];
                // Validate Email
                if (empty($data['email'])) {
                    $data['email_err'] = 'Pleae enter email';
                }

                // Validate Password
                if (empty($data['password'])) {
                    $data['password_err'] = 'Pleae enter password';
                }
                // elseif (strlen($data['password']) < 6) {
                //     $data['password_err'] = 'Password must be at least 6 characters';
                // }
                if ($this->userModel->FindUserByEmail($data['email'])) {
                } else {
                    $data['email_err'] = 'no user found';
                }
                if (empty($data["email_err"]) && empty($data['password_err'])) {
                   
                    $loggedInUser = $this->userModel->signIn($data['email'], $data['password']);
                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {

                        $data['password_err'] = 'password is incorrect';
                        $this->view('autho', $data);
                    }
                } else {
                  
                    $data = [
                        'email' => '',
                        'password' => '',
                        'email_err' => '',
                        'password_err' => '',
                        'login' => 'false',
                        'test'=>'hello'
                    ];
                    $this->view('autho', $data);
                }
            };

            //   _____________________________________________________________________________________
            // ||                                        end                                          ||//
            // ||_____________________________________________________________________________________|| //
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'login' => 'false',
                'test'=>'hello'
            ];
            $this->view('autho', $data);
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['email'] = $user->email;
        $_SESSION['name'] = $user->name;


        redirect('dashboard');
    }
    public function logOut()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        unset($_SESSION['role']);
        session_destroy();
        $data = [
            'login' => 'false',
        ];
        $this->view('autho',$data );
    }
}
