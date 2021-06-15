<?php require_once('../../../private/initialize.php');

$id = $_GET['id'];
$id = base64_decode($id);
$member_dtl = get_account_dtl($id);

if (request_is_post()) {
    // update records
    $new_dtl = [];
    $new_dtl['first_name'] = $_POST['first_name'];
    $new_dtl['last_name'] = $_POST['last_name'];
    $new_dtl['date'] = $_POST['date'];
    $new_dtl['month'] = $_POST['month'];
    $new_dtl['year'] = $_POST['year'];
    $new_dtl['username'] = $_POST['username'];
    $new_dtl['password'] = $_POST['password'];
    $new_dtl['email'] = $_POST['email'];
    $result = update_acount_dtl($new_dtl, $id);

    if ($result === true) {
        redirect_to(url_for('/members/pages/index.php?id=' . xss(base64_encode($id))));
    } else {
        $errors = $result;
        var_dump($errors);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Della+Respira&family=Oswald&family=Playfair+Display:wght@600&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/form.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/member.css') ?>">
    <script rel="script" type="text/javascript" src="<?php echo url_for('/scripts/forms.js') ?>"
    <script src="https://kit.fontawesome.com/94d8d2468d.js" crossorigin="anonymous"></script>
</head>
<body>

<section id="log_in" class="bg_image" style="background-image: url('<?php echo url_for('/images/edit-1.png') ?>')">
    <div class="edit">
        <div id="toback">
            <a class="back" href="<?php echo url_for('/members/pages/index.php?id=' . xss(base64_encode($id))) ?>">
                <i class="far fa-times-circle"></i>
            </a>
        </div>
        <div class="pp">
            <img src="data:image/jpg;base64,<?php echo base64_encode($member_dtl['pp']); ?>"/>
            <span class="user_name"><?php echo $member_dtl['firstname'] . ' ' . $member_dtl['lastname'] ?></span>
        </div>

        <div class="login valign" style="transform: translate(-50%, -40%);">
            <form action="<?php echo url_for('/members/acount/edit.php?id=' . xss(base64_encode($id))) ?>"
                  method="post">
                <div id="standard">
                    <dl>
                        <dt>First name</dt>
                        <dd><input type="text" name="first_name" value="<?php echo $member_dtl['firstname']; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt>Last name</dt>
                        <dd><input type="text" name="last_name" value="<?php echo $member_dtl['lastname']; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt>Email</dt>
                        <dd><input type="text" name="email" value="<?php echo $member_dtl['email']; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt>Date of birth</dt>
                        <dd class="date">
                            <input type="text" inputmode="numeric" name="date"
                                   value="<?php echo substr($member_dtl['dob'], 8, 2); ?>" placeholder="Date"/>
                            <input type="text" name="month" inputmode="numeric"
                                   value="<?php echo substr($member_dtl['dob'], 5, 2); ?>" placeholder="Month"/>
                            <input type="text" name="year" inputmode="numeric"
                                   value="<?php echo substr($member_dtl['dob'], 0, 4); ?>" placeholder="Year"/>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Username</dt>
                        <dd><input type="text" name="username" value="<?php echo $member_dtl['username']; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt>Password</dt>
                        <dd><input type="text" name="password" value="<?php echo $member_dtl['password']; ?>"/></dd>
                    </dl>
                    <div id="next" class="edit_save">
                        <div id="next_page" onclick="gonext()">Next</div>
                    </div>
                </div>
                <div id="extended">
                    <dl>
                        <dt>Bio</dt>
                        <dd><input type="text" name="username" value="<?php echo $member_dtl['bio']; ?>"/></dd>
                    </dl>
                    <dl>
                        <dt>Profile picture</dt>
                        <dd><input type="text" name="password" value="<?php echo ''; ?>"/></dd>
                    </dl>
                    <div id="operation">
                        <input type="submit" value="Save"/>
                    </div>
                    <span class="to_reg go_back" onclick="goback()">back</span>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// call footer hook
include(SHARED_PATH . '/profile_footer.php');
?>
