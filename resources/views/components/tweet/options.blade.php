@if($myTweet)
<details class="tweet-option relative text-gray-500">
    <summary>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3
            12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75
             0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
    </summary>
    <div class="bg-white rounded shadow-md absolute right-0 w-24 z-20 pt-1 pb-1">
        <div>
            <a href="{{route('tweet.update.index',['tweetId' => $tweetId])}}"
                class="flex items-center pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M16.862
                   4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5
                   4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                 </svg>
                <span>編集</span>
            </a>
        </div>

        <div>
            <form action="{{route("tweet.delete",["tweetId" => $tweetId])}}"
                method="post" onclick="return confirm('消除してもよろしいですか？');">
                @method( 'DELETE')
                @csrf
                <button type="submit" class="flex items-center w-full pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0
                        013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0
                        01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75
                         0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9
                          2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815
                           2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684
                            15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355
                        5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75
                        0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                      </svg>
                    <span>消除</span>
                </button>
            </form>
        </div>
    </details>
@endif
@once
@push ('css')
    <style>
    .tweet-option > summary {
        list-style: none;
        cursor: pointer;
    }
    .tweet-option[open] > summary::before{
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 10;
        display: block;
        content: "";
        background: transparent;
    }
</style>
@endpush
@endonce
