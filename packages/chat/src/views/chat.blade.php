<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Chat</title>
</head>
<body >
    <div class="h-screen w-full grid grid-cols-12">
        <div class="col-span-2">
            <div class="text-center font-bold p-3">
                Messenger
            </div>
        </div>
        <div class="col-span-10">
            <div  style="height: 80vh">
                    <div class="w-full h-24 shadow-md">

                    </div>
                <div class=" w-full h-full bg-gray-100">

                </div>
            </div>

                <form class="bg-red-300" style="height: 19vh" method="post" action="send">
                    <textarea type="text relative" name="text" autofocus="autofocus" autocomplete="false" class="h-full w-full p-2" ></textarea>
                <button type="submit" class="absolute bg-green-600 right-0 bottom-0 m-2 p-1 text-white rounded">
                    Send
                </button>
                </form>

            </div>


        </div>
    </div>
</body>
</html>
