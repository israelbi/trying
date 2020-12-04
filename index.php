<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sniper14.com</title>
</head>
<body>
    <div class="content">
        <div class="header">
            
                Create, Read, Update and Delete... with sniper14
            </p>
        </div>
        <div class="body">

            <div>
                <?php require_once("./backend/config.php");?>
                <?php if(count($errors) > 0):?>
                    <?php foreach($errors as $error):?>
                        <p><?php print $error;?></p>
                    <?php endforeach;?>
                <?php endif;?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $username;?>" id="username" placeholder="Entre your username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email;?>"  id="email" placeholder="Email@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" value="<?php echo $phone;?>"  id="phone" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="register">Register</button>
                    </div>
                </form>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($sql)){
                            ?>
                            <tr>hp
                                <td><?php echo $row['username'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td>
                                    <a href="#edit<?php echo $row['user_id'];?>">Update</a>
                                    <a href="#delete<?php echo $row['user_id'];?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>