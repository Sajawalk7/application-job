<?php/*
Template Name:single-application
*/?>
<?php
if (isset($_POST['submit'])){

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['Email'];
    $contact = $_POST['Contact'];
    $city = $_POST['city'];
    $radio = $_POST['radio'];
    $comment = $_POST['Comment'];
    $year = $_POST['Year'];
    $portfolio = $_POST['Portfolio'];
    $upload = $_POST['Upload'];

$app = array(
    'post_title'=> $Fname,
    'post_type' => 'application',
    'post_status' => 'publish'
);
$post_id = wp_insert_post($app);

if(!is_wp_error($post_id)){

    update_post_meta( $post_id,'fname',$Fname);
    update_post_meta( $post_id,'lname',$Lname);
    update_post_meta( $post_id,'email',$email);
    update_post_meta( $post_id,'contact',$contact);
    update_post_meta( $post_id,'city',$city);
    update_post_meta( $post_id,'radio',$radio);
    update_post_meta( $post_id,'massege',$comment);
    update_post_meta( $post_id,'experience',$year);
    update_post_meta( $post_id,'portfolio',$portfolio);
    update_post_meta( $post_id,'upload_cv',$upload);
}


};
?>

<!DOCTYPE HTML>
<!--
	job by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Post Description</h1>
            </div>
            <div class="col-sm-6">
              <h2> <?php the_title(); ?></h2><br><br>
                <?php the_content(); ?>

                <form  method="POST">

                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" name="Fname" class="form-control" id="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" name="Lname" class="form-control" id="lname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="Email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="number" name="Contact" class="form-control" id="contact" required>
                    </div>
                    <div class="form-group ">
                        <label for="inputCity">City of Residence:</label>
                        <input type="text" name="city" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group ">
                        <label for="radio">Profession:</label><br>
                        <input type="radio" name="radio" value="Designer"> Designer<br>
                        <input type="radio" name="radio" value="Developer"> Developer<br>

                    </div>

                    <div class="form-group ">
                        <label for="msg">Description:</label><br>
                        <textarea rows="4" cols="60" name="Comment" form="usrform" required>Enter text here...</textarea>
                    </div>
                    <div class="form-group">
                        <label for="contact">Years of Experience:</label>
                        <input type="number" name="Year" class="form-control" id="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Porfolio/Website:</label>
                        <input type="text" name="Portfolio" class="form-control" id="website">
                    </div>
                    <div class="form-group">
                        <label for="file">Upload CV:</label>
                        <input type="file" name="Upload" class="form-control" id="file">
                    </div>


                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php wp_footer(); ?>
</body>
</html>

