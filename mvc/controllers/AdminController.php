<?php
    class AdminController extends Controller {
        function Show() { 
            if (isset($_SESSION["admin"])) {
                $admin = $this->model('AdminModel');
                $intro = $this->model("IntroModel");
                $this->view("admin", ["LogoTitle"=>$intro->getLogo(),
                    'Contacts'=>$admin->getContacts(),
                    'Products'=>$admin->getProducts(),
                    'Posts'=>$admin->getPosts(),
                    "getMember" => $admin->getMember(),
                    "getComment" => $admin->getComment(),
                    "getResource" => $admin->getResource()
                ]);
                if (isset($_POST['contactsEdit'])) {
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $mail = $_POST['mail'];
                    if (preg_match('/^[0-9]+$/i', $phone) && strlen($address) > 0 && strlen($phone) > 0 && strlen($mail) > 0 && strlen($phone) <= 10 && preg_match('/^.*@.*\..*/i', $mail)){
                        $admin->editContacts($address, $phone, $mail);
                        echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                    }
                    else echo   '<div class="text-danger text-center">
                                    <strong>Invalid input!</strong>
                                </div>';          
                }
                if (isset($_POST['postDelete'])){
                    $id = $_POST['id'];
                    $admin->deletePost($id);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
                if (isset($_POST['productDelete'])){
                    $id = $_POST['id'];
                    $admin->deleteProduct($id);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }

                // DELETE MEMBER
                if (isset($_POST['deleteMember'])){
                    $username = $_POST['username'];
                    if (isset($_SESSION["username"])) {
                        if ($_SESSION["username"] == $username)
                            unset($_SESSION["username"]);
                    }
                    $admin->deleteMember($username);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                
                };
                // ACCEPT COMMENT
                if (isset($_POST['acceptComment'])){
                    $id = $_POST['id'];
                    $admin->acceptComment($id);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                
                }
                // DELETE COMMENT
                if (isset($_POST['deleteComment'])){
                    $id = $_POST['id'];
                    $admin->deleteComment($id);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                
                }
                // DELETE RESOURCE
                if (isset($_POST['deleteResource'])){
                    $id = $_POST['id'];
                    $admin->deleteResource($id);
                    echo '<meta http-equiv="refresh" content="0; URL=http://localhost/LT_Web/admin">';
                }
            } else {
                header("Location: http://localhost/LT_Web/AdminLogin");
            }
        }
    }
?>