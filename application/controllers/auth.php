<?php
class auth extends CI_Controller
{

    public function login()
    {
      if (isset($_POST['login'])){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {

          $username = $_POST["username"];
          $password = md5($_POST["password"].$username);

          //check user in the database.
          $this->$db->select('*');
          $this->$db->from('users');
          $this->$db->where(array('username' => $username, 'password' => $password));
          $query = $this->$db->get();

          $user = $query->row();
          //if user exists.
          if ($user->email) {

            // temporary massage
            $this->session->set_flashdata("success", "You have been logged in");

            //set session variables

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['ussername'] = $user->username;
            redirect("profile", "refresh");
          }
          else {
            $this->session->set_flashdata("Error", "The password or username doesn't exist");
            redirect("login", "refresh");
          }
        }

        else{
          $data['errors'] = validation_errors();

          $this->load->view('templates/header');
          $this->load->view('pages/login', $data);
          $this->load->view('templates/footer');
        }
      }
    }


    public function register()
    {

      if (isset($_POST['register'])){

        //Set the form rules.
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('password2', 'Confirm password', 'required|matches[password]');

        //if form validation is TRUE.
        if ($this->form_validation->run() == TRUE){

          //add user to database.
          $data = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password'].$_POST['username']),
            'create_date' => date('Y-m-d')
          );

          $this->db->insert('users', $data);

          $this->session->set_flashdata("succes", "Your account has been registed. You can login now");
          redirect("register", "refresh");
        }
        else{
          $data['errors'] = validation_errors();

          $this->load->view('templates/header');
          $this->load->view('pages/register', $data);
          $this->load->view('templates/footer');

        }
      }
    }
}
