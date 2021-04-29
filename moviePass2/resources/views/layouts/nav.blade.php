<nav>
    <input type="text" name="search" id="search">
    <button></button>
    @if (Auth::check())
         <ul>
        <li>
            <button type="button" class="btn btn-dark">Dark</button>
        </li>
        <li>

        </li>
        <li>

        </li>
    </ul>
    @else
        <ul>
            <li>
                <button>

                </button>
            </li>
        </ul>
    @endif
   

</nav>