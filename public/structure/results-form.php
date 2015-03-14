<form action="index.php" method="post">
                    Listing Title: <input type="text" name="house_title" value="" />
                    <br><br>
                      Guide Price: <input type="number" name="house_price" value="" />
                    <br><br>
                         Location: <select name="house_location">
                            <option value="">--Select--</option>
                            <option value="1">Bournemouth Centre</option>
                            <option value="2">Winton</option>
                            <option value="3">Boscombe</option>
                            <option value="4">Kinson</option>
                            <option value="5">Throop</option>
                            <option value="6">Wallisdown</option>
                            <option value="7">Southnourne</option>
                            <option value="8">Iford</option>
                            <option value="9">Christchurch</option>
                            <option value="10">Westbourne</option>
                            <option value="11">Parkstone</option>
                            <option value="12">Northbourne</option>
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