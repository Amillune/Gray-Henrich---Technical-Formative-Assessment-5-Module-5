<h1>User Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<ul>
    @foreach($users as $user)
        <li>{{ $user['id'] }} - {{ $user['username'] }}</li>
    @endforeach
</ul>