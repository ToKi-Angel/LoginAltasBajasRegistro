<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ingresos</title>
</head>
<body>
    <section class="vh-100">
        <form action="{{ route('logear') }}" method="post">
            @csrf
            @method('POST')
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong">
                            <div class="card-body p-5 text-center">
                                <h3 class="mb-5">Login usuario de ingresos</h3>
                                <div class="form-outline mb-4">
                                    <label class="form-label">Usuario</label>
                                    <input type="text"  class="form-control form-control-lg" name="name"/>
                                    
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
                    
                                <hr class="my-4">
                                <button class="btn btn-lg btn-block btn-warwing" type="submit"><a href="{{ route('registrarUsuario') }}">Registarse</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>