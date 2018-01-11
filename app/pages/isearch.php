<?php 
    include('includes/landingpage.php');

    $errors = [];

    // check if form is submitted
    if(isset($_POST['submit']) && strtolower($_POST['submit']) === strtolower('ADMIT REQUEST')) {
        if(empty($_POST['what'])) {
            $errors['what'] = 'Please enter a value for what you are looking for?';
        }

        if(empty($_POST['artist'])) {
            $errors['artist'] = 'Please enter an artist?';
        }

        if(empty($_POST['info'])) {
            $errors['info'] = 'Please enter some information about the artwork?';
        }
    }
?>

<!-- Content of Isearch -->
<section id="isearch-content">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home ></a></li>
                <li><a href="#">I search</a></li>
            </ul>
        </div>
        <h1>I search</h1>
        <h3>Add a request</h3>
        <?php if(!empty($errors)) { ?>
            <div class="errors alert alert-danger">
                <ul>
                    <?php foreach($errors as $error) { ?>
                        <li><?= $error ?></li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
        <form method="POST" action="index.php?page=isearch">
            <div class="row">
                <div class="col-sm-6 form-group right-marg">
                    <label for="what">What are you looking for?</label>
                    <input type="text" class="form-control <?php echo ($errors['what']) ? 'error' : '' ?>" name="what" id="what" placeholder="Mona Lisa">
                </div>
                <div class="col-sm-6 form-group">
                    <label for="artist">Artist</label>
                    <input type="text" class="form-control <?php echo ($errors['artist']) ? 'error' : '' ?>" name="artist" id="artist" placeholder="Leonardo Da Vinci">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-9 form-group right-marg">
                    <label for="info">Information about the artwork</label>
                    <input type="text" class="form-control <?php echo ($errors['info']) ? 'error' : '' ?>" name="info" id="info" placeholder="Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore">
                </div>
                <div class="col-sm-3 form-group button">
                    <label for="submit">submit</label>
                    <input type="submit" class="submit" name="submit" id="submit" value="ADMIT REQUEST">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <small id="passwordHelpBlock" class="form-text text-muted">Your request must be approved by the administrator. If your question has been approved, it will appear on our site.</small>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Content of Isearch -->
<section id="isearch-overview">
    <div class="container">
        <h3>Overview</h3>
        <div class="articles">
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
            <article class="col-sm-12">
                <div class="info col-sm-9">
                    <p><span>Search:</span> Mona Lisa, Leonardo Da Vinci</p>
                    <p><span>Description:</span> Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                    <p><span>Posted:</span> 5 July 2013</p>
                </div>
                <div class="button col-sm-3">
                    <a href="#">I OWN THIS ARTWORK ></a>
                </div>
            </article>
        </div>
    </div>
</section>