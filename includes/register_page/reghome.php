<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../../images/favcon.png">
    <link rel="stylesheet" href="../../node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="Container">
        <form method="POST" class = "Modal">
            
            <div class ="Flex FD">
                <h1 class="Title">Welcome!</h1>
                <input class="Inputs" type="text" placeholder="Enter email">
                <input class="Inputs" type="password" placeholder="Enter Password">
                <input class="Inputs"type = "password" placeholder="Confirm Password">
                <button type="submit" class="Submit">Register</button>
            </div>
            <div class="Flex">
                <div class="Line"></div>
                <div class="OlwT">Or Register With</div>
                <div class="Line"></div>
            </div>
            <div>
                 <ul class="Boxes FlexB">
                    <li class=""><a href=""><img src="../../images/facebook.png" alt="" class="facebook"></a></li>
                    <li class="Mb"><a href=""><img src="../../images/search.png" alt="" class="Google"></a></li>
                    <li class=""><a href=""><img src="../../images/user.png" alt="" class="Img"></a></li>
                </ul>
            </div>
            <div class="Flex FgtPsw">
                <span>Already have an acount?<a href="../extra-pages/Login/index.html">Login</a></span>
            </div>
        </form>
    </main>
</body>
</html>