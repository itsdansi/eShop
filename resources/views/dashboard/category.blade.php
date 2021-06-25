<html> 
<body>
<div> 
<form action="submitCategory" method="post">
    @csrf
    <table>
   <tr>Category Name:</tr> <tr> <input type="text" name="name" id=""/> <br><br></tr> 
    <input type="submit" value="Submit">
    </table>
    </form>
</div>
</body>
</html>