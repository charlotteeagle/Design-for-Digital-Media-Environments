<form action="index.php" method="post">
                    Listing Title: <input type="text" name="house_title" value="" />
                    <br><br>
                      Guide Price: <input type="number" name="house_price" value="" />
                    <br><br>
                         Location: <select name="house_location">
                            <option value="">--Select--</option>
                            <option>Bournemouth Centre</option>
                            <option>Winton</option>
                            <option>Boscombe</option>
                            <option>Kinson</option>
                            <option>Throop</option>
                            <option>Wallisdown</option>
                            <option>Southnourne</option>
                            <option>Iford</option>
                            <option>Christchurch</option>
                            <option>Westbourne</option>
                            <option>Parkstone</option>
                            <option>Northbourne</option>
                        </select> 
                    <br><br>
                    Property Type: <select name="house_type">
                            <option value="">--Select--</option>
                            <option value="1">House</option>
                            <option value="2">Flat/Apartment</option>
                            <option value="3">Bungalow</option>
                            <option value="4">Commercial</option>
                        </select>
                    <br><br>
                    Number of bedrooms: <select name="house_bedroomnumber">
                            <option value="">--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">More than 8</option>
                        </select>
                    <br><br>
                    Add an image: <input type="text" name="house_photo" value="" />
                    <br><br>
                    Full Description: <input type="text" name="house_description" value="" />
                    <br><br>
                    <input type="submit" name="submit" value="Submit" />
            </form>