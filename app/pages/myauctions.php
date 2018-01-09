<?php 
    include('includes/landingpage.php');
?>

<section id="my-auctions">
    <div class="container">
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.php">Home &gt;</a></li>
                <li><a href="#">Jasper Poppe &gt;</a></li>
                <li><a href="#">My auctions</a></li>
            </ul>
        </div>

        <h1>My auctions</h1>
        
        <a class="pull-right" href="index.php?page=addauction">ADD NEW AUCTION &gt;</a>

        <div class="pending">
            <h3>Pending</h3>
            <table>
                <thead>
                    <tr>
                        <th>Auction details</th>
                        <th>Estimated price</th>
                        <th>End date</th>
                        <th>Remaining time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/radio.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>25d 14u 44m</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/blueman.jpg" alt="Blue Man">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>25d 14u 44m</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="refused">
            <h3>Refused</h3>
            <table>
                <thead>
                    <tr>
                        <th>Auction details</th>
                        <th>Estimated price</th>
                        <th>End date</th>
                        <th>Remaining time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/lady.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>x</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="active">
            <h3>Active</h3>
            <p>You currently have no active auctions. Please add a new auction or wait for approval.</p>
        </div>
        <div class="expired">
            <h3>Expired</h3>
            <table>
                <thead>
                    <tr>
                        <th>Auction details</th>
                        <th>Estimated price</th>
                        <th>End date</th>
                        <th>Remaining time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/body.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>x</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="sold">
            <h3>Sold</h3>
            <table>
                <thead>
                    <tr>
                        <th>Auction details</th>
                        <th>Estimated price</th>
                        <th>End date</th>
                        <th>Remaining time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/clock.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>sold</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/faces.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>sold</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="image">
                                <img src="../images/myauctions/elephant.jpg" alt="Radio">
                            </div>
                            <div class="info">
                                <div>
                                    <h3>Dance of Time III</h3>
                                    <a href="#">1979, Salvador Dali</a>
                                </div>
                            </div>
                        </td>
                        <td>&euro; 8.900</td>
                        <td>September 09, 2013 13:00 p.m. (EST)</td>
                        <td>sold</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>