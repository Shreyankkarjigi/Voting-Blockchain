<?php
session_start();
if (!$_SESSION['loggedIn'])
header('Location: C:\xampp\htdocs\election\index.php');  
if ($_SESSION['loggedIn'])
header('Location: C:\xampp\htdocs\election\login successfull.php');  

?>


<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        .button {
            background-color: #f49d41;
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 40px 500px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    


    <body style="background-color: #101010">


        <h1 align="center">
            <font color="white">
                <font size="7">
                    <font face="Times New Roman">Login Successful,Welcome User </h1>
        <hr color="#f49d41">
        <h3 align="center">
            <font color="#f49d41">
                <font size="8"><u><font face="Times New Roman">Please Read The Following Instructions Before Proceeding:</h3></u></font>
                <h4 align>
                    <font size="6">
                        <font face="Times New Roman">
                            <font color="white">1.Please Keep Secrecy during voting.<br></h4>
                </font>
                <h4 align>
                    <font size="6">
                        <font face="Times New Roman">
                            <font color="white">2.Please Vote To Single Candidate Only.<br></h4>
                </font>
                <h4 align>
                    <font size="6">
                        <font face="Times New Roman">
                            <font color="white">3.Don't Disclose Your Credentials With Anyone.<br></h4>

                </font>

                </script>




                </form>
                <hr color="#f49d41">
                <marquee behaviour="scroll" direction="left">Before Proceeding Ahead Please Ensure You Have MetaMask Extension Enabled In Your Browser</marquee>
                <hr color="#f49d41">



                <a href="http://localhost:3000" class="button">I Have Read The Instructions,Take Me To Voting Portal </a>

                <a href="https://forum.livepeer.org/t/how-to-install-metamask-on-chrome-browser-to-enable-web-3-0/272" align="right"> Don't know how to enable metamask? Click here</a>
    </body>


</html>