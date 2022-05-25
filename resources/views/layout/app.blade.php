<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="cover container-fluid p-0 d-flex">
        @include('partials.sidebar')

        @include('partials.modal')
        {{-- @include('partials.main') --}}
        @yield('content')

    </div>


    <script>
        // $(document).ready(function() {
        //     $('#can_delete').on('change', function() {
        //         var name = $("#can_delete").val();
        //         console.log(name);
        //         if ($('#post').val() === "house") {
        //             $("#houseprop").show()
        //         } else {
        //             $("#houseprop").hide()
        //         }
        //     });
        // });
    </script>
     <script>
        function postFunction(e) {
            console.log('fff');
            e.preventDefault();
            console.log(super_admin_role, admin_role, employees_role, hr_role);
        }
    </script>

    <script>
        function closeModal() {
            let modal = document.getElementsByClassName('mymodal')[0];
            modal.style.display = 'none';
        }

        function showModal() {
            let modal = document.getElementsByClassName('mymodal')[0];
            modal.style.display = 'flex';
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
