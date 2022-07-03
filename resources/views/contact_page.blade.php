<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey;">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;500&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>My Contatcs</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')

    <section class="bg-light text-dark mg w-75 p-3 rounded mgg">
        <div class="border-bottom border-dark ps-3 h5 py-1">
            My Contacts
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                <path
                    d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
        </div>

        <table class="table table-bordered border-secondary text-center">
            <thead>
                <tr>
                    <th scope="col" class="table-light"> Author </th>
                    <th scope="col" class="table-info"> Recipient </th>
                    <th scope="col" class="table-light"> Message </th>
                    <th scope="col" class="table-info"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($messages as $message )

                <tr>

                    <th scope="row" class="table-light"> <a href="#"
                            class="link-info text-decoration-none">{{ $message->sender->full_name }}</a> </th>
                    <th scope="row" class="table-info"> <a href="#"
                            class="link-secondary text-decoration-none">{{ $message->reciever->full_name }}</a> </th>
                    <td class="table-light">{{ $message->body }}</td>
                    <td class="table-info">{{ $message->created_at }}
                        <div> <a href="#" class="text-decoration-none text-center"> replay </a> </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </section>



    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>
</body>

</html>
