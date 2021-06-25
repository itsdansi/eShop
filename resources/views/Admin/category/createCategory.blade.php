<html> 
<body>
<div> 
<form action="category/store" method="post" >
    @csrf
<table align='center'>

Name: <input type="text" name="name" id=""/> <br><br>
Description:<textarea name="description" id="" cols="30" rows="10"></textarea><br><br>

<input type="submit" value="Add">


</table>

    </form>
</div>
</body>
</html>