<h1>Update member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}} >
    Name<br>
    <input type="text" name="name" value={{$data['name']}} placeholder="Enter name"><br><br>
    Email <br>
    <input type="email" name="email" value={{$data['email']}} placeholder="Enter email"><br><br>
    Password<br>
    <input type="text" name="password" value={{$data['password']}} placeholder="Enter password"><br><br>
    <button type="submit">Update</button>
</form>


<br>

