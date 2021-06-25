<html> 
<body>
<div> 
<form action="submitCustomer" method="post">
    @csrf
    <table>
   <tr>Name:</tr> <tr> <input type="text" name="cname" id=""/> <br><br></tr> 
   <tr>Address: </tr> <tr><input type="text" name="address" id=""/></tr>  <br><br>
   <tr>Email:</tr> <tr><input type="text" name="email" id=""/></tr> <br><br>
    <input type="submit" value="Submit">
    </table>
    </form>
</div>
</body>
</html>