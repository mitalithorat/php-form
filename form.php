<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATIONS</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="container">
        <div class="title">REGISTRATION FORM</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">FULL NAME</span>
                    <input type="text" placeholder="enter ur name" name="fname" required>
                </div>
                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">USER NAME</span>
                    <input type="text" placeholder="enter ur username" name="uname" required>
                </div>
                <div class="input-box " style="margin-left: 5px;">
                    <span class="details">EMAIL</span>
                    <input type="email" placeholder="xyz@gmail.com" name="email" required>
                </div>
                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">CONTACT NO</span>
                    <input type="number" placeholder="+91" name="number" required>
                </div>

                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">PASSWORD</span>
                    <input type="password" placeholder="enter ur password" name="pass" required>
                </div>

                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">ADDRESS</span>
                    <input type="password" placeholder="enter ur password" name="" required>
                </div>
                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">NATIONALITY</span>
                    <input type="text" value="INDIAN" name="nation" readonly required></textarea>
                </div>
                <div class="input-box" style="margin-left: 5px;">
                    <span class="details">DATE OF BIRTH</span>
                    <input type="date" name="dob" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="submit" name="submit">
            </div>
    </div>
    </form>
</body>

</html>