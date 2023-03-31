<form action="{{ route('logout') }}" method="post">
 
    @csrf
 
    <button class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white">Logout</button>
 
</form>


<ul class="flex justify-center">
    <li class="mr-3">
        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/bookings">Bookings</a>
    </li>
    <li class="mr-3">
        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/guides">Guides</a>
    </li>
    <li class="mr-3">
        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/merchandises">Merchandises</a>
    </li>
    <li class="mr-3">
        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/tours">Tours</a>
    </li>
    <li class="mr-3">
        <a class="inline-block border border-blue-500 rounded py-2 px-4 bg-blue-500 hover:bg-blue-700 text-white" href="/admins">Admins</a>
    </li>
</ul>