
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$settings['name']??''}}</title>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{my_asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('auth_login/style.css')}}">
</head>
<body>

<section class="login" id="login">
    <div class="head">
        <h1 class="company">{{$settings['name']??''}}</h1>
    </div>
    <p class="msg">Welcome back</p>
    <div class="form">
        <form method="post" action="{{route('admin.auth')}}" >
            @csrf
            <div class="input-group mb-3">
            <input autocomplete="off" type="text" out placeholder="Username" name="email" class="text" id="email" required>
            </div>
            <div class="input-group mb-3">
            <input autocomplete="off"  type="password" name="password" id="password" required placeholder="Password" class="password hidden">
            <div class="input-group-append" onclick="show_password($(this))">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <button class="btn-login" id="do-login">Login</button>

        </form>
    </div>

</section>
<script src="{{my_asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{my_asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    function show_password(element){
        $(element).siblings('input').toggleClass('hidden')
        $(element).find('.fas').toggleClass('fa-lock')
        $(element).find('.fas').toggleClass('fa-lock-open')
        if($(element).siblings('input').hasClass('hidden')){
            $(element).siblings('input') .attr('type','password')
        }else{
            $(element).siblings('input') .attr('type','text')
        }


    }
</script>
</body>
</html>
