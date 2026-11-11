<h1>Customer Accounts</h1>

<a href="/">Home</a> |
<a href="/about">About</a> |
<a href="/customers">Customers</a> |
<a href="/users">Users</a>

<ul>
    @foreach($customers as $customer)
        <li>
            {{ $customer['id'] }} -
            {{ $customer['name'] }}
        </li>
    @endforeach
</ul>