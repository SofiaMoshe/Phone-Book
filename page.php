<!-- /**
* Template Name: Homepage
*/ -->

<?php
  get_header();
?>
    <div id = "fullscreen-div"></div>
    <form class = "modal" id = "modal">
        <div class = "modal-content">
            <div class = "modal-head">
                <h3 id = "modal-title">Add Phone Number</h3>
                <button type="button" id = "close-btn">
                    <i class = "fas fa-times"></i>
                </button>
            </div>
            <div class = "modal-main">
                <!-- <div class = "modal-row">
                    <div class = "modal-col">
                        <label for="">How should the contact be shown?</label>
                        <input type = "text" placeholder="E.g. The Cohen Family" class = "form-control" name = "addr_ing_name">
                    </div>
                </div> -->

                <div class = "modal-row grid-row">
                    <div class = "modal-col">
                        <label for="">First Name</label>
                        <input type = "text" placeholder="The first name" class = "form-control" name = "first_name">
                    </div>
                    <div class = "modal-col">
                        <label for="">Last Name</label>
                        <input type = "text" placeholder="The last name" class = "form-control" name = "last_name">
                    </div>
                </div>

                <div class = "modal-row grid-row">
                    <div class = "modal-col">
                        <label for="">Email</label>
                        <input type = "email" placeholder="The email" class = "form-control" name = "email">
                    </div>
                    <div class = "modal-col">
                        <label for="">Phone</label>
                        <input type = "text" placeholder="The phone number" class = "form-control" name = "phone">
                    </div>
                </div>

                <div class = "modal-row grid-row">
                    <div class = "modal-col">
                        <label for="">Street address</label>
                        <input type = "text" placeholder="Street address, apartment, house number, etc." class = "form-control" name = "street_addr">
                    </div>
                    <div class = "modal-col">
                        <label for="">Postal Code</label>
                        <input type = "text" placeholder="60323" class = "form-control" name = "postal_code">
                    </div>
                </div>

                <div class = "modal-row grid-row">
                    <div class = "modal-col">
                        <label for="">City</label>
                        <input type = "text" placeholder="City name" class = "form-control" name = "city">
                    </div>
                    <div class = "modal-col">
                        <label for="">Country</label>
                        <select id = "country-list" name = "country">
                            <!-- <option>USA</option> -->
                        </select>
                    </div>
                </div>

                <div class = "modal-row">
                    <div class = "modal-col">
                        <label for = "">Labels</label>
                        <select name = "labels">
                            <option value = "Family">Family</option>
                            <option value = "Friends">Friends</option>
                            <option value = "Colleagues">Colleagues</option>
                        </select>
                    </div>
                </div>

                <div class = "modal-row" id = "modal-btns">
                    <button type = "submit" id = "save-btn">Save</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end of form modal -->

    <!-- address book home -->
    <div class = "addr-book" id = "addr-book">
        <div class = "addr-book-content">
            <div class = "addr-book-head">
                <i class = "fa-solid fa-address-book fa-2x"></i>
                <h2>My Phone<span> Book</span></h2>
            </div>

            <div class = "addr-book-top">
                <button type = "button" class = "btn" id = "add-btn">
                    <span><i class = "fas fa-plus"></i> Add Phone Number</span>
                </button>
                <input type= "text" class="seach-bar" id="search-bar" placeholder="Search for a contact">
            </div>

            <div class = "addr-book-list" id = "addr-book-list">
                <table class = "addr-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Address</th>
                            <th>Labels</th>
                            <th>By Name</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>1</td>
                            <td>
                                <span class = "addressing-name">Smith Family</span><br><span class = "address">Johnson Street - 5668, Lake side</span>
                            </td>
                            <td><span>Colleagues</span></td>
                            <td>Mark Smith</td>
                            <td>123-456-7890</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end of address book home -->
    
    <?php

  get_footer();
?>


 