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
    <title>My_notifications</title>
</head>

<body style="background-color: lightgrey;">

    @include('layouts.nav-bar')


    <section class="mgg container mb-3" id="general">

        <div class="h2 rounded border border-3 bg-light p-2 m-0">
            General Notifications
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-bell-fill" viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
            </svg>
        </div>
        <section class="bg-light rounded border border-1">

            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>


            {{-- if there is more than 5 nots then collapse them here --}}
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 collapse"
                id = "collapseExample1">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>

            <button class="btn btn-link text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false"
                aria-controls="collapseExample">
                View more
            </button>


        </section>


    </section>

    <section class="mgg container mb-3" id="purchase">

        <div class="h2 rounded border border-3 bg-light p-2 m-0">
            Purchase Requisition Notifications
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
        </div>
        <section class="bg-light rounded border border-1">

            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>


            {{-- if there is more than 5 nots then collapse them here --}}
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 collapse"
                id = "collapseExample2">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>

            <button class="btn btn-link text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false"
                aria-controls="collapseExample">
                View more
            </button>

        </section>


    </section>

    <section class="mgg container mb-3" id="messages">

        <div class="h2 rounded border border-3 bg-light p-2 m-0">
            Message Notifications
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                class="bi bi-wechat" viewBox="0 0 16 16">
                <path
                    d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.324.324 0 0 0-.12.366l.218.81a.616.616 0 0 1 .029.117.166.166 0 0 1-.162.162.177.177 0 0 1-.092-.03l-1.057-.61a.519.519 0 0 0-.256-.074.509.509 0 0 0-.142.021 5.668 5.668 0 0 1-1.576.22ZM9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.615.615 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.627.627 0 0 0 .098.356Z" />
                <path
                    d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.499.499 0 0 0-.032.14.192.192 0 0 0 .193.193c.039 0 .077-.01.111-.029l1.268-.733a.622.622 0 0 1 .308-.088c.058 0 .116.009.171.025a6.83 6.83 0 0 0 1.625.26 4.45 4.45 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02.05 0 .1 0 .15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826Zm4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Zm3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0Z" />
            </svg>
        </div>
        <section class="bg-light rounded border border-1">

            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>

            {{-- if there is more than 5 nots then collapse them here --}}
            <div class="px-3 pt-3 m-2 border border-secondary p-2 mb-2 border-opacity-25 collapse"
                id = "collapseExample3">
                {{-- message from who ? --}}
                <div class="h4 text-danger">Message from Admin</div>
                <div class="h6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt quasi magni consequatur unde
                    deleniti sint possimus architecto totam corporis, quidem modi explicabo! Praesentium reprehenderit,
                    saepe odio aperiam pariatur id a?
                </div>
            </div>

            <button class="btn btn-link text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false"
                aria-controls="collapseExample">
                View more
            </button>

        </section>


    </section>


    <!-- JavaScript Bundle with Popper -->
    <script src=" /js/bootstrap.bundle.min.js"></script>

</body>

</html>
