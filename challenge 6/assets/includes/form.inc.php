<form action="cars.php" enctype="multipart/form-data" method="post">

    <input type="text" name="brand" placeholder="Brand"/>

    <input type="text" name="type" placeholder="Type"/>
    
    <input type="text" name="bouwjaar" placeholder="Bouwjaar"/>

    <input type="text" name="kilometerstand" placeholder="Kilometerstand"/>

    <input type="text" name="brandstof" placeholder="Brandstof"/>

    <input type="text" name="transmission" placeholder="Transmission"/>

    <input type="text" name="price" placeholder="Price"/>

    <input type="text" name="discountprice" placeholder="Discount Price"/>

    <input type='file' name='files[]' multiple />
   
    <input type="hidden" name="frmGegevens" value="frmGegevens"/>
    
    <input type="hidden" name="frm_adminform" value="frm_adminform"/>

    <input type="submit" name="btn_submit" value="Verzenden" />


</form>