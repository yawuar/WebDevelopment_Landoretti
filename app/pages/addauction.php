<?php 
    include('includes/landingpage.php');
?>

<section id="auctions-form">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home &gt;</a></li>
                <li><a href="#">Jasper Poppe &gt;</a></li>
                <li><a href="#">My auctions &gt;</a></li>
                <li><a href="#">New auction</a></li>
            </ul>
        </div>

        <h1>Add a new auction</h1>

        <form>
            <div class="row">
                <div class="col-sm-6 form-group right-marg select">
                    <select id="style">
                        <option data-display="Style"></option>
                        <option value="abstract">Abstract</option>
                        <option value="african_american">African American</option>
                        <option value="asian_contemporary">Asian Contemporary</option>
                        <option value="conceptual">Conceptual</option>
                        <option value="contemporary">Contemporary</option>
                        <option value="emerging_artists">Emerging Artists</option>
                        <option value="figurative">Figurative</option>
                        <option value="middle_eastern_contemporary">Middle Eastern Contemporary</option>
                        <option value="minimalism">Minimalism</option>
                        <option value="modern">Modern</option>
                        <option value="pop">Pop</option>
                        <option value="urban">Urban</option>
                        <option value="vintage_photographs">Vintage Photographs</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group right-marg title">
                    <label for="title">Auction title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Auction title">
                </div>
                <div class="col-sm-6 form-group right-marg small-input">
                    <label for="title">Year</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="X X X X">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group small-input">
                    <label for="title">Width</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Auction title">
                </div>
                <div class="col-sm-4 form-group small-input">
                    <label for="title">Height</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="X X X X">
                </div>
                <div class="col-sm-4 form-group small-input">
                    <label for="title">Depth <span>(optional)</span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="X X X X">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group big-textarea">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>
            </div>
        </form>
    </div>
</section>