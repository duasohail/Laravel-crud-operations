<h1>Add members</h1>
<form action="usernewsave" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter name"><br><br>
    <input type="email" name="email" placeholder="Enter email"><br><br>
    <input type="password" name="password" placeholder="Enter password"><br><br>
    <button type="submit">Add</button>
</form>
<br>
<br>
<h1>Members</h1>
<br>
<table width="70%" border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>password</td>
        <td colspan="2">action</td>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td> {{$item['id']}}</td>
        <td> {{$item['name']}}</td>
        <td> {{$item['email']}}</td>
        <td> {{$item['password']}}</td>
        <td> <button><a href={{"delete/".$item['id']}}>Delete</a></button></td>
        <td> <button><a href={{"edit/".$item['id']}}>Edit</a></button></td>
       
    </tr>
   
    @endforeach
    
</table>
