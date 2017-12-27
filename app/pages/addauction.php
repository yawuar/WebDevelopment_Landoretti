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
                    <textarea name="description" id="description">What's the condition of the artwork?</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 form-group big-textarea">
                    <label for="description">Origin</label>
                    <textarea name="description" id="description">What's the origin of the artwork?</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group file-upload">
                    <label for="description">Photos</label>
                    <p>Please upload one picture with the signature of the artwork and one picture of the artwork.</p>
                    <p>You can upload to 3 pictures with a maximum of of 10MB each.</p>
                    <div class="col-sm-4 file-button">
                        <p>upload image <span>of the artwork</span></p>
                        <input type="file" name="artwork" id="artwork">
                    </div>
                    <div class="col-sm-4 file-button">
                        <p>upload image <span>of the signature</span></p>
                        <input type="file" name="signature" id="signature">
                    </div>
                    <div class="col-sm-4 file-button">
                        <p>optional image</p>
                        <input type="file" name="optional" id="optional">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 pricing">
                    <h3>Pricing</h3>
                    <div class="col-sm-4 form-group small-input">
                        <label for="minimum">Minimum estimate price</label>
                        <input type="text" class="form-control" name="minimum" id="minimum" placeholder="X X X X">
                    </div>
                    <div class="col-sm-4 form-group small-input">
                        <label for="maximum">Maximum estimate price</label>
                        <input type="text" class="form-control" name="maximum" id="maximum" placeholder="X X X X">
                    </div>
                    <div class="col-sm-4 form-group small-input">
                        <label for="title">Buyout price <span>(optional)</span></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="X X X X">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 pricing">
                    <h3>Pricing</h3>
                    <div class="col-sm-4 form-group small-input">
                        <label for="end">End date</label>
                        <input type="text" class="form-control" name="end" id="end" placeholder="DD/MM/YY">
                    </div>
                    <div class="col-sm-8 form-group info">
                        <span>Attention</span>
                        <p>You can not change the information after adding this auction.</p>
                        <p>If you're not certain about the information of your artwork, please ask for help.</p>
                        <p>We will answer your question as soon as possible.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 check">
                    <input type="checkbox" name="check" id="check">
                    <p>I agree to <span>The Terms & Conditions</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 submit">
                    <input type="submit" value="ADD AUCTION">
                    <a href="#">ASK A QUESTION ></a>
                </div>
            </div>
        </form>
    </div>
</section>