<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link href="css/style.css" rel="stylesheet">
            <title>Hello, world!</title>
    </head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="mainn-menu">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" ref_sys="about">Edit about us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" ref_sys="signup">Signup Team</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" ref_sys="teamlist">Edit team</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ms-auto">
                <li><a href="#exit"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                </svg> Exit</a></li>
            </ul>
            </div>
          </div>
        </nav>

        <header id="header">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-9">
                        <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                        </svg>
                        Control Panel
                        </h2>
                    </div>
                    <div class="col-md-3">
                        <p> Your last login was in 11/02/2019</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="search">
            <div class="container">
               <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-group ">
                        <a href="#" class="list-group-item active default-color" ref_sys="about">About</a>
                        <a href="#" class="list-group-item"ref_sys="signup">Sign up team</a>
                        <a href="#" class="list-group-item"ref_sys="teamlist">Team list</a>
                        </ul>
                    </div><!--Col md 3-->
                    <div class="col-md-9">
                        <div id ="about_section"class="panel panel-default">
                            <div class="panel-heading default-color">
                                <h7 class="panel-title">About</h7>
                            </div><!--Panel Heading-->
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">HTML Code</label>
                                            <textarea class="form-control" style="resize:vertical;"></textarea>
                                    </div><!--Form Group-->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                     </form>
                                 </div><!--Panel body-->
                             </div><!--Panel body-->



                        <div id="signup_section" class="panel panel-default">
                            <div class="panel-heading default-color">
                                <h7 class="panel-title">Register team</h7>
                            </div><!--Panel Heading-->
                            
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Member name</label>
                                            <input type="text" name="member_name" class="form-control"/>
                                    </div><!--Form Group-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Member description</label>
                                            <textarea class="form-control" style="resize:vertical;"></textarea>
                                    </div><!--Form Group-->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                     </form>
                                 </div><!--Panel body-->

                            <div id="teamlist_section" class="panel panel-default">
                                <div class="panel-heading default-color">
                                    <h7 class="panel-title">Team members</h7>
                                </div><!--Panel Heading-->
                        
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                        <th>ID:</th>
                                        <th>Member name:</th>
                                        <th>Delete </th>
                                    <thead>
                                    <tbody>
                                        <?php
                                            for($i =0;$i<5;$i++){
                                        ?>
                                        <tr>
                                            <td>1</td>
                                            <td>Paulo<td>
                                            <td><button type="button" class="btn btn-danger center">Delete</button></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    <tbody>
                                </table>
                            </div><!--Panel body-->
                             </div>
                        </div><!--Panel default-->
                    </div><!--Col md 9-->
                </div><!--row-->
            </div><!--container-->
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            $(function () {
                menuClick();
                scroll();
                function menuClick(){
                    $('#main-menu a, .list-group a').click(function(){
                        $('.list-group a').removeClass('active').removeClass('default-color');
                        $('#main-menu a').parent().removeClass('active');
                        $('#main-menu a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('active');
                        $('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').addClass('active').addClass('default-color');
                        return false;
                    })
                }

                function scroll(){
                    $('#main-menu a, .list-group a').click(function(){
                        var ref='#'+$(this).attr('ref_sys')+'_section';
                        var offset=$(ref).offset().top;
                        $('html,body').animate({'scrollTop':offset});

                        if($(window)[0].innerWidth<=768)
                        {
                            $('.icon-bar').click();
                        }
                    });
                }
            })
        </script>
            
    </body>
</html>