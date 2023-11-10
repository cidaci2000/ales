

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            background-image: url(Smiling\ Leo\ Perfect\ GIF.gif);
            background-position: top;
            font-family: Arial, Helvetica, sans-serif;
            max-width: 100%;
            margin: auto;
            display: block;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .box{
            color: rgb(7, 3, 248);
            background-position: left;
            position: absolute;
            top: 50%;
            left: 80%;
            transform: translate(-50%,-50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid rgb(199, 18, 18);
            outline: none;
            color: rgb(4, 255, 46);
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: rgb(30, 255, 0);
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
        CSS
        button {
        background-color: #ccc;
         padding: 10px 20px;
         border: 1px solid #000;
        cursor: pointer;
}
    </style>
</head>
<body>
   
    <div class="box">
    <form action="testLogin.php" method="POST">
            <fieldset>
                <legend><b>LOGIN</b></legend>
                <br>
                <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br><br>
                <input type="submit" name="submit" id="submit">
                <br><br>
                <a href="home.php" class="button" target="_blank">HOME</a>
            </fieldset>
        </form>
    </div>
</body>
</html>

