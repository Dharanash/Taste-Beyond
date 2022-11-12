<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Checkout page</title>
</head>
<body>
    <div class="popup">
        <!-- Close button -->
        <button id="close" class="material-symbols-outlined">
            check_circle </button>

            <h2>Payment Successfull</h2>
            <p>Thank you for giving the opportunity to serve you. Most welcome 
                for your next visit.
            </p>

            <a href="#">Check Out</a>
        
    </div>


    



    <style>
        *,
        *:before,
        *:after{
            padding:0;
            margin: 0;
            box-sizing: border-box;
        }
        
        .popup{
            background: linear-gradient(135deg,#ffec61,#f321d7);
            width: 420px;
            padding: 30px 40px;
            position: absolute;
            left: 50%;
            top: 0;
            border-radius: 12px;
            font-family: sans-serif;
            visibility: hidden;
            transform: translate(-50%,-50%) scale(0.1);
            transition: transform 0.4s, top 0.4s;
            
        }
        
       
        .popup button{
           display: flex;
            position: absolute;
            margin-left: 0px;
            font-size: 60px;
            color: #12f70b;
            background: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }
        .popup h2{
            margin-left: 75px;
            margin-top: 15px;
         }
         .popup p{
             font-size: 14px;
             text-align: justify;
             margin: 35px 0;
             line-height: 25px;
         }
         a{
            display: block;
            width: 150px;
            position: relative;
            margin: 10px auto;
            text-align: center;
            background-color: #0f72e5;
            border-radius: 20px;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 0;
        }
    </style>


    <script type="text/javascript">
    
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.visibility = "visible";
            document.querySelector(".popup").style.top = "50%";
            document.querySelector(".popup").style.transform = "translate(-50%,-50%) scale(1)";
        },
        800
    )
});

    </script>
</body>
</html>