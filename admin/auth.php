<?php
            include('db/connect_db.php');
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "SELECT * FROM users WHERE email='$email'";
            $run = mysqli_query($conn, $query);
            $check = mysqli_num_rows($run);
            if ($check > 0) {
                while ($studentdata = mysqli_fetch_assoc($run)) {
                    $dbemail = $studentdata['email'];
                    $dbpassword = $studentdata['password'];
                }
                if($email == $dbemail){
                    if($password == $dbpassword){
                       header('Refresh:3, url=dashboard.php');
                       ?>
                        <p class="p-4 rounded bg-green-400">Login Successfully Redirecting...</p>
                        <?php 
                       $_SESSION['email'] = $dbemail;
                    }else{
                ?>
                <p class="p-4 rounded bg-red-400">Invalid Credentials</p>
                <?php 
                    }
                }else{
                ?>
                <p class="p-4 rounded bg-red-400">Invalid Credentials</p>
                <?php 
                }
            }else{
                ?>
                <p class="p-4 rounded bg-red-400">Invalid Credentials</p>
                <?php 
            }